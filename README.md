<!-- comando per render utente revisore -->
php artisan app:make-user-revisor <emailUtente>
php artisan db:seed --class=CategorySeeder

<!-- Il comando php artisan scout:flush rimuove tutti i record di un modello da un indice di ricerca; il comando php artisan
scout:import invece importa tutti i record di un modello in un indice di ricerca. -->
php artisan scout:flush "App\Models\Article"
php artisan scout:import "App\Models\Article"
php artisan scout:status
