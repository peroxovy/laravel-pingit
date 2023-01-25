<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use App\Enums\StatusCode;
use App\Mail\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class CheckAccess extends Component
{
    public $placeholder = "Website URL";
    public $url = "";
    public $tmpUrl = "";
    public $status = "";
    public $tmpStatus = "";
    public $message = "";
    public $tmpMessage = "";
    const SECURE = "https://";

    public function mount()
    {
        $this->url = "";
        $this->status = "";
        $this->message = "";
        $this->tmpUrl = "";
        $this->tmpStatus = "";
        $this->tmpMessage = "";
    }

    public function render()
    {
        return view('livewire.check-access');
    }

    public function resetFilters()
    {
        $this->reset(['url', 'status', 'message']);
    }

    /**
     * Adjusts URL string, checks the format.
     * If necessary adds https:// in the beginning
     *
     */
    public function urlAdjust()
    {
        $schema = parse_url($this->url, PHP_URL_SCHEME);
        if (empty($schema))
        {
            $this->url = self::SECURE . $this->url;
        }
        $this->tmpUrl = $this->url;
    }

    /**
     * Gets header of URL
     *
     */
    public function getHeader()
    {
        $this->urlAdjust();

        $context = stream_context_set_default( [
                'ssl' => [
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                ],
            ]);

        @$headers = get_headers($this->url, 0, $context);

        if(!$headers)
        {
            $this->status = "Invalid URL";
            $this->tmpStatus = "Invalid URL";
        } else {
            $this->status = substr($headers[0], 9, 3);
            $this->tmpStatus = $this->status;

            $this->message = StatusCode::$statusTexts[$this->status];
            $this->tmpMessage = $this->message;
        }
    }
}
