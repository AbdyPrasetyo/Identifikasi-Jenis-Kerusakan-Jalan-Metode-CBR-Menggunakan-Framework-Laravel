<?php

namespace Database\Seeders;

use App\Models\Weight;
use App\Models\DmgTypes;
use App\Models\KnowledgeBases;
use Illuminate\Database\Seeder;
use App\Models\DmgCharacteristics;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AllSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cha = [
            [
                'characteristic_code'     => 'A01',
                'damage_characteristic' => 'Permukaan perkerasan mengelupas butir agregat halus hilang
                dan warna aspal memudar <20% panjang segmen tinjauan',
            ],
            [
                'characteristic_code'     => 'A02',
                'damage_characteristic' => 'Permukaan butir agregat halus dan agregat kasar terbuka',
            ],
            [
                'characteristic_code'     => 'A03',
                'damage_characteristic' => 'Permukaan perkerasan sedikit kasar 20-50% panjang segmen tinjauan',
            ],
            [
                'characteristic_code'     => 'A04',
                'damage_characteristic' => 'Retak terjadi secara paralel sejajar sumbu jalan',
            ],
            [
                'characteristic_code'     => 'A05',
                'damage_characteristic' => 'Terdapat lebar retakan sebesar > 5 mm sampai dengan >30% segmen tinjauan jalan',
            ],
            [
                'characteristic_code'     => 'A06',
                'damage_characteristic' => 'Retak terjadi pada arah lebar perkerasan dan tegak lurus sumbu jalan',
            ],
            [
                'characteristic_code'     => 'A07',
                'damage_characteristic' => 'Retak terjadi memanjang yang sejajar dengan tepi perkerasan',
            ],
            [
                'characteristic_code'     => 'A08',
                'damage_characteristic' => 'Lebar retak < 6 mm tanpa disertai pelepasan butiran dari < 20% panjang segmen tinjauan jalan',
            ],
            [
                'characteristic_code'     => 'A09',
                'damage_characteristic' => 'Keretakan terjadi saling berhubungan dan membentuk kotak hampir bujur sangkar',
            ],
            [
                'characteristic_code'     => 'A10',
                'damage_characteristic' => 'Retak terjadi pada lapisan tambahan (overlay), yang menggambarkan pola retakan perkerasan di bawahnya',
            ],
            [
                'characteristic_code'     => 'A11',
                'damage_characteristic' => 'Ukuran blok umumnya lebih dari 200 mm x 200 mm.',
            ],
            [
                'characteristic_code'     => 'A12',
                'damage_characteristic' => 'Retak retak halus atau retak rambut yang sejajar',
            ],
            [
                'characteristic_code'     => 'A13',
                'damage_characteristic' => 'Sedikit retak terhubung tanpa disertai gompal',
            ],
            [
                'characteristic_code'     => 'A14',
                'damage_characteristic' => 'Tidak adanya deformasi (penurunan) ',
            ],
            [
                'characteristic_code'     => 'A15',
                'damage_characteristic' => 'Saling berangkai membentuk kotak-kotak kecil menyerupai kulit buaya',
            ],
            [
                'characteristic_code'     => 'A16',
                'damage_characteristic' => 'Lebar celah < 3 mm',
            ],
            [
                'characteristic_code'     => 'A17',
                'damage_characteristic' => 'Sebaran kerusakan < 20 panjang segmen tinjauan',
            ],
            [
                'characteristic_code'     => 'A18',
                'damage_characteristic' => 'Terjadi penurunan memanjang pada jalur jejak roda kaki kiri dan jejak roda kaki kanan',
            ],
            [
                'characteristic_code'     => 'A19',
                'damage_characteristic' => 'Kedalaman alur < 6mm',
            ],
            [
                'characteristic_code'     => 'A20',
                'damage_characteristic' => 'Terlihatnya lapisan tipis aspal (tanpa agregat) pada permukaan perkerasan',
            ],
            [
                'characteristic_code'     => 'A21',
                'damage_characteristic' => 'Kondisi temperature permukaan perkerasan yang tinggi (terik matahari) atau pada lalu lintas yang berat akan terlihat jejak bekas roda sedalam > 3 cm',
            ],
            [
                'characteristic_code'     => 'A22',
                'damage_characteristic' => 'Gelombang pada lapis permukaan/dapat dikatakan alur Yang arahnya melintang jalan/plastic movement.',
            ],
            [
                'characteristic_code'     => 'A23',
                'damage_characteristic' => 'Umumnya terjadi pada tempat berhentinya kendaraan, akibat pengereman kendaraan.',
            ],
            [
                'characteristic_code'     => 'A24',
                'damage_characteristic' => 'Terjadi penurunan permukaan sebesar >30% berupa amblas atau turunnya permukaan lapisan permukaan perkerasan pada lokasilokasi tertentu (setempat) dengan atau tanpa retak.',
            ],
            [
                'characteristic_code'     => 'A25',
                'damage_characteristic' => 'Kedalaman kerusakan ini umumnya lebih dari 2 cm dan akan menampung atau meresapkan air.',
            ],
        ];
        foreach ($cha as $key => $value) {
            DmgCharacteristics::create($value);
        }

        $Dmg = [
            [
                'damage_code' => 'B01',
                'damage_types' => 'Raveling',
                'definition' => 'Raveling adalah kerusakan jalan yang terjadi ketika agregat atau bahan pengisi di permukaan jalan mulai terlepas atau mengikis. Ini menghasilkan permukaan jalan yang kasar dan mengurangi daya tahan jalan terhadap beban dan cuaca.',
                'solutions' => 'Untuk mengatasi raveling, biasanya diperlukan penambalan lokal dengan aspal segar atau bahan perbaikan yang sesuai. Penambalan ini harus mencakup area yang terpengaruh untuk mengembalikan lapisan permukaan jalan yang halus dan kuat. Selain itu, perawatan rutin seperti penyegelan permukaan dapat membantu mencegah raveling di masa depan.',
                'image' => 'Raveling.jfif',
            ],
            [
                'damage_code' => 'B02',
                'damage_types' => 'Longitudinal Cracking',
                'definition' => 'Longitudinal cracking adalah jenis kerusakan jalan yang ditandai dengan retakan yang berjalan sejajar dengan arah perjalanan. Retakan ini dapat terjadi karena tegangan termal, beban lalu lintas, atau kelelahan struktural, dan dapat mengurangi kekuatan dan integritas jalan.',
                'solutions' => 'Untuk mengatasi longitudinal cracking, perbaikan dapat mencakup pengisian ulang retakan dengan aspal segar atau bahan perbaikan, overlay, atau perbaikan struktural jika kerusakan lebih serius. Perbaikan struktural mungkin melibatkan penggalian dan penggantian lapisan bawah jalan yang rusak.',
                'image' => 'Longitudinal.jpg',

            ],
            [
                'damage_code' => 'B03',
                'damage_types' => 'Edge Cracking',
                'definition' => 'Edge cracking, atau retakan tepi, adalah kerusakan jalan yang terjadi di pinggiran jalan atau sepanjang bahu jalan dengan retakan yang berjalan sejajar dengan tepi jalan. Retakan ini dapat disebabkan oleh dukungan lateral yang kurang memadai, struktur jalan yang lemah, drainase buruk, beban lalu lintas, atau siklus pembekuan dan pencairan.',
                'solutions' => 'Perbaikan edge cracking sering melibatkan pemeliharaan dan pemulihan bahu jalan serta perbaikan drainase untuk mengatasi akar masalah. Pengisi aspal atau bahan perbaikan sering digunakan untuk menambal retakan tepi.',
                'image' => 'Edge.png',

            ],
            [
                'damage_code' => 'B04',
                'damage_types' => 'Block Cracking',
                'definition' => 'Block cracking adalah jenis kerusakan jalan yang ditandai dengan retakan yang membentuk pola kotak atau persegi di permukaan jalan. Retakan ini terjadi karena pemisahan atau penyusutan blok-blok kecil di lapisan permukaan aspal.',
                'solutions' => ' Block cracking dapat memerlukan penggalian dan penggantian lapisan aspal yang rusak. Perbaikan struktural mungkin diperlukan jika kerusakan cukup serius.',
                'image' => 'Block.jfif',

            ],
            [
                'damage_code' => 'B05',
                'damage_types' => 'Aligator Cracking',
                'definition' => 'Alligator cracking, atau retakan aligator, adalah kerusakan jalan yang ditandai dengan retakan yang membentuk pola yang mirip dengan kulit buaya. Retakan ini terjadi karena keausan dan kelelahan struktural yang signifikan, biasanya pada lapisan permukaan jalan yang lebih tua.',
                'solutions' => 'Alligator cracking sering memerlukan perbaikan struktural yang mendalam. Ini mungkin melibatkan penggalian, penggantian lapisan bawah jalan, dan penambalan permukaan jalan. Perbaikan ini harus mempertimbangkan penyebab dasar kerusakan.',
                'image' => 'Aligator.jpg',

            ],
            [
                'damage_code' => 'B06',
                'damage_types' => 'Rutting',
                'definition' => 'Rutting adalah kerusakan jalan yang ditandai dengan cekungan atau alur yang terbentuk pada permukaan jalan akibat tekanan lalu lintas yang berat. Rutting dapat disebabkan oleh penurunan lapisan bawah jalan, kepadatan yang tidak memadai, atau kerusakan air.',
                'solutions' => 'Rutting dapat diatasi dengan overlay atau penutupan ulang lapisan aspal, terutama jika kerusakan masih terbatas pada permukaan jalan. Namun, untuk masalah rutting yang lebih serius, perbaikan struktural seperti penggalian dan penggantian lapisan bawah jalan mungkin diperlukan.',
                'image' => 'Rutting.jfif',

            ],
            [
                'damage_code' => 'B07',
                'damage_types' => 'Bleeding',
                'definition' => 'Bleeding adalah jenis kerusakan jalan yang terjadi ketika aspal yang baru saja dipasang menjadi lembek dan mengalir ke permukaan jalan. Hal ini menghasilkan lapisan tipis dan berkilau di atas aspal yang terlihat seperti cairan atau minyak.',
                'solutions' => 'Penanganan bleeding dapat mencakup penggunaan campuran aspal yang sesuai selama konstruksi. Perawatan rutin seperti penyegelan permukaan dan peningkatan drainase dapat membantu mencegah bleeding.',
                'image' => 'Bleeding.jfif',

            ],
            [
                'damage_code' => 'B08',
                'damage_types' => 'Corrugation',
                'definition' => 'Corrugation adalah jenis kerusakan jalan yang ditandai dengan serangkaian gelombang atau alur yang terbentuk sepanjang arah perjalanan. Corrugation terjadi akibat getaran lalu lintas dan dapat disebabkan oleh kepadatan yang tidak memadai, aspal yang tidak stabil, atau faktor lainnya.',
                'solutions' => 'Untuk mengatasi corrugation, langkah-langkah meliputi penggilingan atau pengamplasan permukaan jalan dan pemasangan lapisan aspal baru. Pemeliharaan rutin dan pengawasan teknis juga diperlukan.',
                'image' => 'Corrugation.jpg',

            ],
            [
                'damage_code' => 'B09',
                'damage_types' => 'Depression',
                'definition' => 'Depression adalah kerusakan jalan yang terjadi ketika ada area yang cekung atau lebih rendah dari permukaan jalan sekitarnya. Depression dapat disebabkan oleh penurunan lapisan bawah jalan, pemadatan yang tidak memadai, erosi, atau beban lalu lintas yang berat.',
                'solutions' => 'Penanganan depression dapat mencakup penambalan, overlay, atau perbaikan struktural. Pemeliharaan rutin dan perbaikan drainase juga dapat membantu mencegah terbentuknya depresi baru.',
                'image' => 'Depression.png',

            ],

        ];
        foreach ($Dmg as $key => $value) {
            DmgTypes::create($value);
        }

        $weight = [
            [
                'weight' => '1',
            ],
            [
                'weight' => '3',
            ],
            [
                'weight' => '5',
            ],
        ];
        foreach ($weight as $key => $value) {
            Weight::create($value);
        }

        $Knowledge = [
            [
                'characteristic_code' => 'A01',
                'damage_code'         => 'B01',
                'weight'              => '5',
            ],
            [
                'characteristic_code' => 'A02',
                'damage_code'         => 'B01',
                'weight'              => '1',
            ],
            [
                'characteristic_code' => 'A03',
                'damage_code'         => 'B01',
                'weight'              => '3',
            ],
            // batas
            [
                'characteristic_code' => 'A04',
                'damage_code'         => 'B02',
                'weight'              => '5',
            ],
            [
                'characteristic_code' => 'A05',
                'damage_code'         => 'B02',
                'weight'              => '3',
            ],
            [
                'characteristic_code' => 'A06',
                'damage_code'         => 'B02',
                'weight'              => '5',
            ],
            // batas
            [
                'characteristic_code' => 'A07',
                'damage_code'         => 'B03',
                'weight'              => '3',
            ],
            [
                'characteristic_code' => 'A08',
                'damage_code'         => 'B03',
                'weight'              => '5',
            ],

            // batas
            [
                'characteristic_code' => 'A08',
                'damage_code'         => 'B04',
                'weight'              => '5',
            ],
            [
                'characteristic_code' => 'A09',
                'damage_code'         => 'B04',
                'weight'              => '3',
            ],
            [
                'characteristic_code' => 'A10',
                'damage_code'         => 'B04',
                'weight'              => '1',
            ],
            [
                'characteristic_code' => 'A11',
                'damage_code'         => 'B04',
                'weight'              => '5',
            ],
            // batass
            [
                'characteristic_code' => 'A12',
                'damage_code'         => 'B05',
                'weight'              => '1',
            ],
            [
                'characteristic_code' => 'A13',
                'damage_code'         => 'B05',
                'weight'              => '1',
            ],
            [
                'characteristic_code' => 'A14',
                'damage_code'         => 'B05',
                'weight'              => '1',
            ],
            [
                'characteristic_code' => 'A15',
                'damage_code'         => 'B05',
                'weight'              => '5',
            ],
            [
                'characteristic_code' => 'A16',
                'damage_code'         => 'B05',
                'weight'              => '3',
            ],
            [
                'characteristic_code' => 'A17',
                'damage_code'         => 'B05',
                'weight'              => '3',
            ],

            // batas

            [
                'characteristic_code' => 'A17',
                'damage_code'         => 'B06',
                'weight'              => '3',
            ],
            [
                'characteristic_code' => 'A18',
                'damage_code'         => 'B06',
                'weight'              => '5',
            ],
            [
                'characteristic_code' => 'A19',
                'damage_code'         => 'B06',
                'weight'              => '1',
            ],
            // batas
            [
                'characteristic_code' => 'A20',
                'damage_code'         => 'B07',
                'weight'              => '5',
            ],
            [
                'characteristic_code' => 'A21',
                'damage_code'         => 'B07',
                'weight'              => '3',
            ],
            // batas
            [
                'characteristic_code' => 'A22',
                'damage_code'         => 'B08',
                'weight'              => '3',
            ],
            [
                'characteristic_code' => 'A23',
                'damage_code'         => 'B08',
                'weight'              => '5',
            ],

            //batas
            [
                'characteristic_code' => 'A24',
                'damage_code'         => 'B09',
                'weight'              => '5',
            ],
            [
                'characteristic_code' => 'A25',
                'damage_code'         => 'B09',
                'weight'              => '3',
            ],
        ];
        foreach ($Knowledge as $key => $value) {
            KnowledgeBases::create($value);
        }

    }
}
