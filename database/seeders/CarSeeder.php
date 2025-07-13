<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Car; // Pastikan untuk mengimpor model Car
use Illuminate\Support\Facades\Storage; // Tidak wajib lagi untuk placeholder, tapi biarkan saja

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Opsional: Hapus semua data mobil lama dari tabel cars
        // Ini berguna saat development agar data tidak duplikat setiap kali seeder dijalankan
        Car::truncate();

        // Pastikan folder public/images/ ada untuk placeholder
        // Jika folder belum ada, ini akan membuatnya
        if (!file_exists(public_path('images'))) {
            mkdir(public_path('images'), 0777, true);
        }

        // Jalur ke placeholder image
        $placeholderPath = 'images/placeholder.png'; // Pastikan ekstensi .png, sesuai dengan home.blade.php

        // PENTING: Anda harus menempatkan file 'placeholder.png' secara manual
        // di folder 'public/images/' agar placeholder muncul di frontend.
        // Jika file placeholder.png belum ada di public/images/, ini bisa membuat file kosong.
        if (!file_exists(public_path($placeholderPath))) {
            // Anda bisa membuat file kosong sebagai placeholder minimal jika tidak ada gambar:
            file_put_contents(public_path($placeholderPath), '');
            // ATAU, jika Anda sudah punya gambar placeholder yang sebenarnya, abaikan baris ini.
        }


        // Data mobil yang akan dimasukkan
        $cars = [
            [
                'brand' => 'Toyota',
                'model' => 'Fortuner VRZ',
                'year' => 2023,
                'description' => 'SUV tangguh dengan desain sporty dan fitur modern. Ideal untuk petualangan off-road maupun perkotaan.',
                'price' => 550000000,
                'image' => null, // <-- INI YANG SUDAH DIUBAH KE NULL AGAR PLACEHOLDER TAMPIL
            ],
            [
                'brand' => 'Honda',
                'model' => 'Civic Turbo',
                'year' => 2022,
                'description' => 'Sedan sporty dengan performa turbocharged yang responsif dan interior premium.',
                'price' => 450000000,
                'image' => null, // <-- INI YANG SUDAH DIUBAH KE NULL
            ],
            [
                'brand' => 'Mitsubishi',
                'model' => 'Pajero Sport Dakar',
                'year' => 2024,
                'description' => 'Mobil SUV handal dengan kenyamanan maksimal dan kemampuan jelajah terbaik di kelasnya.',
                'price' => 600000000,
                'image' => null, // <-- INI YANG SUDAH DIUBAH KE NULL
            ],
            [
                'brand' => 'Suzuki',
                'model' => 'Swift GL',
                'year' => 2021,
                'description' => 'City car kompak dan lincah, cocok untuk mobilitas perkotaan dengan konsumsi bahan bakar irit.',
                'price' => 200000000,
                'image' => null, // <-- INI YANG SUDAH DIUBAH KE NULL
            ],
            [
                'brand' => 'Mercedes-Benz',
                'model' => 'C-Class C200',
                'year' => 2023,
                'description' => 'Sedan mewah dengan teknologi canggih, performa tinggi, dan kenyamanan berkendara yang superior.',
                'price' => 850000000,
                'image' => null, // <-- INI YANG SUDAH DIUBAH KE NULL
            ],
        ];

        // Masukkan setiap data mobil ke database
        foreach ($cars as $carData) {
            Car::create($carData);
        }
    }
}
