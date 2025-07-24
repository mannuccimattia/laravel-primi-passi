
# EX - Primi passi con Laravel

### Descrizione

*Nome repo:* `laravel-primi-passi`

Iniziamo a muovere i primi passi con questo fantastico framework che è Laravel!

### Svolgimento

- Per prima cosa, creiamo un nuovo progetto Laravel 11, utilizzando questo comando:

`composer create-project --prefer-dist laravel/laravel:^11.0 larave-primi-passi`

- Al termine dell'installazione, entriamo nella cartella del progetto:

`cd laravel-primi-passi`

- Avviamo il server con uno di questi due comandi:

`php artisan serve` oppure `php -S localhost:8000 -t public`

A questo punto, iniziamo a prendere confidenza con le rotte e le views: 
- Cancelliamo la view welcome.blade.php e creiamo una nostra homepage.

- Facciamo quindi sì che la rotta / visualizzi home.blade.php.

- Inizialmente stampiamo un "Hello World", poi passiamo dei dati alla view in modo da visualizzarli dinamicamente con Blade.

#### Bonus 
Creiamo più di una pagina e visualizziamo un header menu con i link di tutte le pagine, utilizzando la funzione route()
