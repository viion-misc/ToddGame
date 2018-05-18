# ToddGame

## Running this on your local machine:

You would need to install PHP + Composer, do this in order:

- PHP: https://windows.php.net/downloads/releases/php-7.2.5-Win32-VC15-x64.zip
    - Download it
    - Extract it somewhere, eg: C:/Program Files/PHP
    - Add that folder to to PATH in env vars
    - Open up command prompt, type "php --version" and it should be obvious if it's working
    
- Composer: https://getcomposer.org/Composer-Setup.exe
    - Download it
    - Make sure it detects your PHP version
    - Install
    - Open up command prompt and type "composer --version"
    
All done? Groovy, now lets setup the project, clone the repository somewhere (this assumes you have Git [https://git-scm.com/download/win] installed on your computer)

- Open command prompt somewhere and type: `git clone https://github.com/viion-misc/ToddGame.git`
- cd into the folder it creates
- run `composer install`
- run: `php bin/console server:run`

This will spawn a PHP server and you can access it on: http://127.0.0.1:8000

## Creating users

- In comment prompt run: `php bin/console app:create-user` and follow the questions.


## Running on a live server

- Install PHP on the server
    - `sudo apt-get install php7.2-fpm`
- Install the plugins we need
    - `sudo apt-get install php-apcu php7.2-dev php7.2-cli php7.2-json php7.2-intl php7.2-sqlite php7.2-curl php7.2-mbstring`
- Point Apache or Nginx to `public/index.php`

Go to whatever url it is hosted on!
