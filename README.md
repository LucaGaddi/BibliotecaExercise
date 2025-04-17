# BibliotecaExercise
BibliotecaExercise è una semplice applicazione Laravel, pensata come esercitazione base per imparare a gestire operazioni CRUD con Blade e Laravel. Permette di inserire e gestire una collezione di libri personali, ed è un ottimo punto di partenza per chi vuole iniziare a sviluppare con Laravel.

🚀 Funzionalità
Aggiunta di nuovi libri alla propria collezione

Visualizzazione della lista dei libri

Modifica delle informazioni di un libro

Eliminazione di un libro

Interfaccia semplice e pulita con Blade

⚙️ Requisiti
Per eseguire questa applicazione è necessario avere:

PHP >= 8.0 installato localmente
(oppure utilizzare un ambiente Docker che includa PHP, Composer, e un database compatibile)

Composer

Un database MySQL (o compatibile)

🛠️ Tecnologie utilizzate
Laravel (Backend)

Blade (Frontend templating)

MySQL (o qualsiasi database supportato da Laravel)

Bootstrap (opzionale, per lo stile)

📦 Installazione
Clona il repository:

git clone https://github.com/tuo-username/BibliotecaExercise.git
cd BibliotecaExercise
Installa le dipendenze PHP:

composer install
Crea il file .env:

cp .env.example .env
Configura il file .env con i dati del tuo database, poi genera la chiave dell'app:

php artisan key:generate
Crea le tabelle nel database:

php artisan migrate
Avvia il server di sviluppo:

php artisan serve
Visita http://localhost:8000 per usare l'app!

🐳 Alternativa con Docker
Se preferisci usare Docker, puoi creare un file docker-compose.yml con i servizi necessari (PHP, MySQL, Nginx/Apache) e montare il progetto all’interno.