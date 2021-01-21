<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Steps on how to set up the application

 *Clone the repository with git clone


 *Copy .env.example file to .env


 *Run composer install


 *Run php artisan migrate --seed (it has some seeded data for your testing)


API links

GET method Return all the games
*127.0.0.1:8000/api/vi/games/all

Return all the games played per day and their players
*127.0.0.1:8000/api/vi/games/summary

Return all the games played within a date range
*127.0.0.1:8000/api/vi/games/range

Return all the players, their games and their gameplays (overall and for each game
*127.0.0.1:8000/api/vi/games/sort
