<?php

namespace App\Services;

use App\Models\Site;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\QueryException;

class SiteService
{
    const SECURE = "https://";

    /**
     * Initialization of SiteService class instance
     */
    public function __construct()
    {

    }

    /**
     * Check if User Has Related URL.
     * If no    : creates new instance,
     * If yes   : updates existing.
     *
     * @param string $url
     * @return void
     */
    public function createOrUpdateSiteCheck($url) : void
    {
        !Auth::user()->site()->exists() ? $this->createSite($url) : $this->updateSite($url);
    }

    /**
     * Create new Site
     *
     * @param string $url
     */
    public function createSite($url)
    {
        try {
            Site::create([
                'url' => $this->urlAdjust($url),
                'user_id' => Auth::user()->id,
                'count' => 0,
            ]);
        } catch(QueryException $e) {
            return redirect()->back()->withError(['error' => $e->getMessage()]);
        }

        return true;
    }

    /**
     * Updates existing instance of Site
     *
     * @param string $url
     */
    public function updateSite($url)
    {
        try {
            Site::where('user_id', Auth::user()->id)->update([
                'url' => $this->urlAdjust($url),
                'count' => 0,
            ]);
        } catch (QueryException $e) {
            return redirect()->back()->withError(['error' => $e->getMessage()]);
        }

        return true;
    }

    /**
     * Adjusts URL string, checks the format.
     * If necessary adds https:// in the beginning
     *
     */
    public function urlAdjust($url)
    {
        $schema = parse_url($url, PHP_URL_SCHEME);
        if (empty($schema))
        {
            return $url = self::SECURE . $url;
        } else {
            return $url;
        }
    }
}
