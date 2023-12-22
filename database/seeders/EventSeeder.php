<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $events = [
            [
                'name' => 'Jatim Fair',
                'description' => 'Pameran multi produk yang diselenggarakan dalam rangka memeriahkan Hari Jadi Provinsi Jawa Timur. Menampilkan dan menjual berbagai macam produk kerajinan, pelayanan perbankan, agrokultur, dan kuliner seluruh Jawa Timur. Jatim Fair juga dimeriahkan penampilan live music oleh musisi dan penyanyi top Indonesia',
                'price' => 200000,
                'tickets_available' => 100,

            ],
            [
                'name' => 'Jakcloth',
                'description' => ' event para pemilik brand clothing yang hadir di berbagai Kota di Indonesia.',
                'price' => 200000,
                'tickets_available' => 100,
            ],
            [
                'name' => 'Sound of Downtown',
                'description' => 'festival musik kolaboratif yang diselenggarakan oleh PT. Serikat Orang Dalam, sebuah perusahaan yang berfokus pada musik, hiburan, dan industri kreatif lainnya.',
                'price' => 200000,
                'tickets_available' => 100,
            ],
        ];
        foreach($events as $event) {
            Event::create($event);
        }
    }
}