<?php

namespace Database\Seeders;

use App\Models\Items;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Items::insert([
            [
                'name' => "Energen",
                'slug' => "energen-rcg",
                'description' => "Energen satu renceng isi 10 pcs",
                'price' => "20.000",
                'image1' => 'img/asset/energen.png',
                'image2' => 'img/asset/energen2.png'
            ],

            [
                'name' => "Popice",
                'slug' => "popice-rcg",
                'description' => "Popice satu renceng isi 10 pcs",
                'price' => "12.000",
                'image1' => 'img/asset/popice2.png',
                'image2' => 'img/asset/popice-removebg-preview.png'
            ],
            [
                'name' => "Indocafe",
                'slug' => "indocafe-rcg",
                'description' => "Indocafe satu renceng (10pcs)",
                'price' => "18.000",
                'image1' => 'img/asset/indocafe-removeBG.png',
                'image2' => 'img/asset/indocafe2.png'
            ],
            [
                'name' => "Garudafood Chocolatos Drink 10's",
                'slug' => "garudafood-chocolatos-drink",
                'description' => "Chocolatos Drink satu renceng isi 10 pcs",
                'price' => "20.500",
                'image1' => 'img/asset/chocolatos-removeBG.png',
                'image2' => 'img/asset/chocolatos2.png'
            ],
            [
                'name' => "Kopi Kapal Api Special Mix",
                'slug' => "kopi-kapal-api-special-mix",
                'description' => "Kopi Kapal Api Special Mix 1 renceng isi 10 pcs",
                'price' => "17.800",
                'image1' => 'img/asset/kapalApiSpecialMix-removeBG.png',
                'image2' => 'img/asset/kapalapi2.png'
            ],
            [
                'name' => "So Klin Royale Pewangi Hijab Edition",
                'slug' => "so-klin-royale-pewangi-hijab-edition",
                'description' => "So Klin Royale Pewangi Hijab Edition beli 6 sachet gratis 1",
                'price' => "5.000",
                'image1' => 'img/asset/royale1.png',
                'image2' => 'img/asset/royale2.png'
            ],
            [
                'name' => "Molto Sachet 9ml 12's",
                'slug' => "molto-sachet-9ml-12s",
                'description' => "Molto Sachet Renceng Renteng Kemasan 500 Isi 9ml 12pcs / 13pcs",
                'price' => "5.000",
                'image1' => 'img/asset/molto2.png',
                'image2' => 'img/asset/molto-removeBG.png'
            ],
            [
                'name' => "Attack Jazz1 Sachet 50g 12's",
                'slug' => "attack-jazz1-sachet-50g-12s",
                'description' => "ATTACK JAZ1 Detergen Bubuk Renceng Semerbak Cinta & Pesona Segar 50 gram x 12's Sachet - Sabun Cuci",
                'price' => "5.000",
                'image1' => 'img/asset/jaz1.png',
                'image2' => 'img/asset/jazz1-removeBG.png'
            ],
            [
                'name' => "Downy Pelembut",
                'slug' => "downy",
                'description' => "Downy Pewangi Pakaian 12pcs",
                'price' => "5.000",
                'image1' => 'img/asset/downy-removeBG.png',
                'image2' => 'img/asset/downy1.jpeg'
            ],
            [
                'name' => "Rinso Bubuk",
                'slug' => "rinsobubuk",
                'description' => "Rinsobubuk (1 rcg)",
                'price' => "5.000",
                'image1' => 'img/asset/rinsobubuk1.jpeg',
                'image2' => 'img/asset/rinsoBubuk-removeBG.png'
            ],
            [
                'name' => "Telur Ayam 1 Kg",
                'slug' => "telur-ayam-1kg",
                'description' => "Telur Ayam 1 Kg",
                'price' => "27.500",
                'image1' => 'img/asset/telur1.jpeg',
                'image2' => 'img/asset/telur-removeBG.png',
            ],
            [
                'name' => "Sania Beras Premium 1Kg",
                'slug' => "sania-beras-premium-1kg",
                'description' => "Beras",
                'price' => "17.000",
                'image1' => 'img/asset/Beras-removeBG.png',
                'image2' => 'img/asset/berasKarungan-removeBG.png'
            ],
            [
                'name' => "Sarimi isi 2 Ayam Kremes",
                'slug' => "sarimi2ayamkremes",
                'description' => "Sarimi Isi 2 Ayam Kremes",
                'price' => "4.500",
                'image1' => 'img/asset/sarimiayam1.jpeg',
                'image2' => 'img/asset/sarimi2AyamKremes-removeBG.png'
            ],
            [
                'name' => "Sarimi Isi 2 Ayam Kecap",
                'slug' => "sarimi2ayamkecap",
                'description' => "Sarimi Isi 2 Ayam Kecap",
                'price' => "4.500",
                'image1' => 'img/asset/sarimikecap1.jpeg',
                'image2' => 'img/asset/sarimi2AyamKecap-removeBG.png'
            ],
            [
                'name' => "Indomie Kari Ayam",
                'slug' => "indomie-kari",
                'description' => "Indomie kari ayam ( 1pcs )",
                'price' => "3.500",
                'image1' => 'img/asset/kariayam1.jpeg',
                'image2' => 'img/asset/indomieKari-removeBG.png'
            ],
            [
                'name' => "Indomie Goreng",
                'slug' => "indomie-goreng",
                'description' => "Indomie Goreng ( 1pcs )",
                'price' => "3.500",
                'image1' => 'img/asset/indomie1.jpeg',
                'image2' => 'img/asset/indomieGoreng-removeBG.png'
            ],
            [
                'name' => "Sarimi Bakso Isi 2",
                'slug' => "sarimi-2-bakso",
                'description' => "Sarimi Bakso Isi 2 (1pcs)",
                'price' => "4.500",
                'image1' => 'img/asset/sarimi1.jpeg',
                'image2' => 'img/asset/sarimi2Bakso-removeBG.png'
            ],
            [
                'name' => "Indomie Soto Ayam",
                'slug' => "indomie-soto-ayam",
                'description' => "Indomie Soto Ayam (1pcs)",
                'price' => "3.500",
                'image1' => 'img/asset/indoSoto-removeBG.png',
                'image2' => 'img/asset/indosoto2.jpg'
            ],
            [
                'name' => "Tropical Minyak Goreng Botol 1 Liter",
                'slug' => "tropical-minyak-goreng-botol-1-liter",
                'description' => "Tropical Minyak Goreng Botol 1 Liter",
                'price' => "25.500",
                'image1' => 'img/asset/tropical1.jpg',
                'image2' => 'img/asset/minyakKemasan-removeBG.png'
            ],
            [
                'name' => "Minyakita Minyak Goreng 1 Liter",
                'slug' => "minyakita-minyak-goreng-1-liter",
                'description' => "Minyakita Minyak Goreng 1 Liter",
                'price' => "20.800",
                'image1' => 'img/asset/minyakita1.jpg',
                'image2' => 'img/asset/minyak-removeBG.png'
            ],
            [
                'name' => "Gulaku Gula Tebu Alami 1Kg",
                'slug' => "gulaku-gula-tebu-alami-1kg",
                'description' => "Gulaku Gula Tebu Alami Kemasan 1Kg",
                'price' => "20.000",
                'image1' => 'img/asset/gulaPasir2.png',
                'image2' => 'img/asset/gulaPasir-removeBG.png'
            ]
        ]);
    }
}
