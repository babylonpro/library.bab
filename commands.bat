composer global require laravel/installer
composer create-project --prefer-dist laravel/laravel library
cd library
composer dump-autoload

php artisan preset none
php artisan key:generate

php artisan make:model Author -mrc
php artisan make:model Book -mrc

php artisan migrate:fresh

php artisan make:seeder AuthorsTableSeeder
php artisan make:seeder BooksTableSeeder

php artisan make:factory BookFactory --model=Book

php artisan db:seed
