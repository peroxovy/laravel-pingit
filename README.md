
# Laravel ping.it

Application allows User to check availability of Web Pages returning them HTTP response code and parses it into a Message.


## Authors

- [@Piotr Mazur](https://pl.linkedin.com/in/peroxovy-piotr-mazur)


## Features

- Checking the response of specific Website
- Allows User to have one main Website assigned 
- Checks every 5 minutes if User Website is reachable
- Send direct e-mail to User if the HTTP return 404 3 times


## Tech Stack

**Language:** PHP 8

**Framework:** Laravel 9, Livewire

**Styling:** TailwindCSS



## Installation

Get the project from my GitHub:

```bash
git clone https://github.com/peroxovy/laravel-pingit.git
```

Use composer to install all dependencies:

```bash
composer install
composer update
```

Setup .env file (database name, mail variables)
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=pingit
DB_USERNAME=root
DB_PASSWORD=

[...]

MAIL_MAILER=smtp
MAIL_HOST=your.smtp.server
MAIL_PORT=25
MAIL_USERNAME=
MAIL_PASSWORD=
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="ping.it@notification.com"
MAIL_FROM_NAME="${APP_NAME}"
```

Migrate database table:

```bash
php artisan migrate
```

Build the CSS:

```bash
npm run build
```
or if you want live preview after every save made, run live server of Vite:

```bash
npm run dev
```

And you ready to go :)
## License

[MIT](https://choosealicense.com/licenses/mit/)

