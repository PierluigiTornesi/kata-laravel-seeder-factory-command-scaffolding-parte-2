<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Init project

1. Installa le dipendenze di frontend

```
npm install
```

2. Fai partire il compilatore per i file di frontend

```
npm run dev
```

3. Installa le dipendenze di backend in un nuovo terminale

```
composer install
```

4. Fai partire il server di sviluppo backend

```
php artisan serve
```

5. Copia il file `.env.example` e chiamalo `.env`. Poi esegui il comando per generare la chiave

```
php artisan key:generate
```

## Connessione al DB

1. Avvio MAMP

2. Apro [PHPMyAdmin](http://localhost/phpMyAdmin/?lang=en)

3. Creo un nuovo DB (es. `103_rent`)

4. nel file `.env` aggiungo i parametri di connessione presenti sulla [pagina iniziale di MAMP](http://localhost/MAMP/)

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=103_rent
DB_USERNAME=root
DB_PASSWORD=root
```



## 1️⃣ Milestone 1 ##
Realizza le rotte ed il controller necessario per visualizzare la lista ed il dettaglio dei prodotti. In questa fase si possono visualizzare i dati in forma grezza (senza grafica).
