## Langkah Instalasi Project
Pastikan laravel sudah terinstall di komputer anda, untuk tahap-tahap instalasi laravel bisa dilihat di [dokumentasi laravel](https://laravel.com/docs/8.x/#installation)

**1. Clone Project** <br>

    git clone https://github.com/kelvin-azaria/ief-registration.git
**2. Install Composer** <br>

    composer install
**3. Install NPM** <br>

    npm install
**4. Generate App Key**<br>
	Pada terminal ketik
	

    php artisan key:generate

**5. Buat Database**<br>
	Buat database di MySQL dan sesuaikan nama database dengan DB_CONNECTION di file .env

**6. Migrate Tables** <br>

    php artisan migrate
**7. Link Directory Storage** <br>

    php artisan storage:link
**8. Jalankan Aplikasi** <br>

    php artisan ser