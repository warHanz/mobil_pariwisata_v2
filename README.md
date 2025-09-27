## Dokumentasi Proyek Mobil Pariwisata v2

## Deskripsi

Aplikasi web berbasis Laravel untuk manajemen dan penyewaan mobil pariwisata. Fitur utama meliputi pengelolaan artikel, paket wisata, regulasi, kendaraan, dan kategori terkait.

## Struktur Folder

-   `app/` : Model, Controller, Provider, Resources, Widgets, dll
-   `bootstrap/` : Bootstrap Laravel
-   `config/` : Konfigurasi aplikasi
-   `database/` : Migrasi, Seeder, Factory, SQL
-   `public/` : File publik, aset frontend
-   `resources/` : Blade views, CSS, JS
-   `routes/` : Routing aplikasi (`web.php`, `api.php`, dll)
-   `storage/` : Cache, log, upload
-   `tests/` : Pengujian aplikasi
-   `vendor/` : Dependensi Composer

## Instalasi

1. Clone repository:
    ```bash
    git clone <repo-url>
    cd mobil_pariwisata_v2
    ```
2. Install dependensi PHP:
    ```bash
    composer install
    ```
3. Install dependensi frontend:
    ```bash
    npm install
    ```
4. Copy file environment:
    ```bash
    cp .env.example .env
    ```
5. Generate key aplikasi:
    ```bash
    php artisan key:generate
    ```
6. Migrasi dan seeder database:
    ```bash
    php artisan migrate --seed
    ```
7. Jalankan server lokal:
    ```bash
    php artisan serve
    ```

## Penggunaan

-   Akses aplikasi di `http://localhost:8000`
-   Login dan kelola data melalui dashboard admin
-   Fitur utama: manajemen artikel, paket wisata, kendaraan, regulasi, dan kategori

## Teknologi

-   Backend: Laravel
-   Frontend: Blade, Tailwind CSS, Vite, Filament
-   Database: MySQL
-   Testing: PHPUnit

## Kontribusi

1. Fork repository
2. Buat branch fitur (`git checkout -b fitur-anda`)
3. Commit perubahan
4. Push ke branch
5. Buat Pull Request

---

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
