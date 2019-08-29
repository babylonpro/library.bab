composer global require laravel/installer
composer create-project --prefer-dist laravel/laravel library
cd library
composer dump-autoload

php artisan preset none
