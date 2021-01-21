<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Steps on how to set up the application

 *Clone the repository with git clone
 *Copy .env.example file to .env and edit database/Stripe credentials there
 *Run composer install
 *Run php artisan key:generate
 *Run php artisan migrate --seed (it has some seeded data for your testing)

API links

*127.0.0.1:8000/api/vi/games for all games
*127.0.0.1:8000/api/vi/game for 
*127.0.0.1:8000/api/vi/range for date range
*127.0.0.1:8000/api/vi/summary
