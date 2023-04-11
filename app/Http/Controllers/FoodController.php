<?php

namespace App\Http\Controllers;
use App\Models\FoodModel;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function index(){
        $arrmakanan = [
            [
                "title"=>"Bibimbap",
                "status"=> "R",
                "slug"=> "bibimbap",
                "price" => "RP 25000",
                "desc" => "Bibimbap adalah hidangan nasi campur khas Korea yang terdiri dari nasi putih yang dicampur dengan sayuran, daging, dan bumbu-bumbu khas Korea seperti gochujang",
                "fulldesc" => "
                <p>Bibimbap adalah hidangan nasi campur khas Korea yang terdiri dari nasi putih yang dicampur dengan sayuran, daging, dan bumbu-bumbu khas Korea seperti gochujang (pasta cabai pedas) dan ganjang (kecap asin). Kata bibim dalam bahasa Korea berarti mencampur, sedangkan bap berarti nasi. </p>
                <p>Hidangan ini biasanya disajikan dalam mangkuk besar dengan nasi di bagian bawah, diikuti oleh lapisan sayuran segar seperti bayam, lobak, tauge, dan wortel di atasnya. Daging yang digunakan bervariasi, seperti daging sapi, ayam, atau babi yang dipotong kecil-kecil dan dicampur dengan bumbu. </p>
                <p>Untuk menikmatinya, semua bahan di atas nasi harus dicampur bersama-sama dengan kuah gochujang. Rasanya gurih, pedas, manis dan segar sekaligus. Bibimbap dapat disajikan dalam keadaan panas atau dingin dan sangat populer di seluruh Korea. Karena kaya akan nutrisi, bibimbap sering dianggap sebagai salah satu hidangan Korea yang paling sehat.</p>"

            ],
            [
                "title"=>"Ramyeon",
                "status"=> "SR",
                "price" => "RP 35000",
                "slug"=> "ramyeon",
                "desc" => "Ramyeon adalah mie instan yang berasal dari Korea. Mie ini terdiri dari mi telur yang tebal, panjang, dan kenyal, disajikan dengan kuah kaldu yang biasanya pedas dan gurih.",
                "fulldesc" => "
                <p>Ramyeon adalah mie instan yang berasal dari Korea. Mie ini terdiri dari mi telur yang tebal, panjang, dan kenyal, disajikan dengan kuah kaldu yang biasanya pedas dan gurih. Ramyeon umumnya dijual dalam kemasan plastik yang berisi mie, bumbu penyedap, dan pelengkap seperti potongan daging, sayuran kering, dan telur.</p>
                <p>Cara membuat ramyeon sangat mudah, yaitu dengan merebus mie dalam air mendidih selama beberapa menit hingga matang, lalu dituangkan bumbu penyedapnya. Ada banyak variasi rasa ramyeon yang tersedia, termasuk rasa pedas, ayam, sapi, dan keju. Beberapa merek ramyeon terkenal di Korea, seperti Nongshim, Samyang, dan Ottogi.</p>
                <p>Ramyeon biasanya menjadi makanan instan yang populer di kalangan mahasiswa, pelajar, dan pekerja karena praktis dan cepat disajikan. Selain itu, harga ramyeon juga relatif terjangkau. Makanan ini juga sering disajikan di restoran-restoran Korea dan menjadi hidangan yang populer di seluruh dunia.</p>"

            ],
            [
                "title"=>"Tteokbokki",
                "status"=> "SSR",
                "price" => "RP 25000",
                "slug"=> "tteokbokki",
                "desc" => "Tteokbokki atau topokki adalah makanan Korea yang terbuat dari garaetteok, yaitu kue beras tebal dan kenyal yang dipotong menjadi bentuk silinder atau persegi panjang. ",
                "fulldesc" => "
                <p>Tteokbokki atau topokki adalah makanan Korea yang terbuat dari garaetteok, yaitu kue beras tebal dan kenyal yang dipotong menjadi bentuk silinder atau persegi panjang. Tteokbokki biasanya dimasak dengan gochujang, pasta cabai pedas yang khas dari Korea, sehingga memiliki rasa pedas, manis, dan gurih yang khas.</p>
                <p>Tteokbokki sering disajikan dengan bahan tambahan seperti ikan kering, telur, daging sapi atau ayam, dan sayuran seperti kubis atau wortel. Cara memasaknya cukup sederhana, yaitu dengan merebus kue beras dalam kuah kaldu atau saus cabai hingga matang dan mengembang.</p>
                <p>Makanan ini biasanya disajikan dalam mangkuk atau wajan kecil dan dimakan dengan sumpit atau sendok. Tteokbokki merupakan makanan yang populer di Korea dan dapat ditemukan di banyak restoran dan warung makan di seluruh negara.</p>"

            ]
        ];
        return view('home', compact('arrmakanan'));
    }

    public function show($slug){
        $arrmakanan = [
            [
                "title"=>"Bibimbap",
                "status"=> "R",
                "slug"=> "bibimbap",
                "price" => "RP 25000",
                "desc" => "Bibimbap adalah hidangan nasi campur khas Korea yang terdiri dari nasi putih yang dicampur dengan sayuran, daging, dan bumbu-bumbu khas Korea seperti gochujang",
                "fulldesc" => "
                <p>Bibimbap adalah hidangan nasi campur khas Korea yang terdiri dari nasi putih yang dicampur dengan sayuran, daging, dan bumbu-bumbu khas Korea seperti gochujang (pasta cabai pedas) dan ganjang (kecap asin). Kata bibim dalam bahasa Korea berarti mencampur, sedangkan bap berarti nasi. </p>
                <p>Hidangan ini biasanya disajikan dalam mangkuk besar dengan nasi di bagian bawah, diikuti oleh lapisan sayuran segar seperti bayam, lobak, tauge, dan wortel di atasnya. Daging yang digunakan bervariasi, seperti daging sapi, ayam, atau babi yang dipotong kecil-kecil dan dicampur dengan bumbu. </p>
                <p>Untuk menikmatinya, semua bahan di atas nasi harus dicampur bersama-sama dengan kuah gochujang. Rasanya gurih, pedas, manis dan segar sekaligus. Bibimbap dapat disajikan dalam keadaan panas atau dingin dan sangat populer di seluruh Korea. Karena kaya akan nutrisi, bibimbap sering dianggap sebagai salah satu hidangan Korea yang paling sehat.</p>"

            ],
            [
                "title"=>"Ramyeon",
                "status"=> "SR",
                "price" => "RP 35000",
                "slug"=> "ramyeon",
                "desc" => "Ramyeon adalah mie instan yang berasal dari Korea. Mie ini terdiri dari mi telur yang tebal, panjang, dan kenyal, disajikan dengan kuah kaldu yang biasanya pedas dan gurih.",
                "fulldesc" => "
                <p>Ramyeon adalah mie instan yang berasal dari Korea. Mie ini terdiri dari mi telur yang tebal, panjang, dan kenyal, disajikan dengan kuah kaldu yang biasanya pedas dan gurih. Ramyeon umumnya dijual dalam kemasan plastik yang berisi mie, bumbu penyedap, dan pelengkap seperti potongan daging, sayuran kering, dan telur.</p>
                <p>Cara membuat ramyeon sangat mudah, yaitu dengan merebus mie dalam air mendidih selama beberapa menit hingga matang, lalu dituangkan bumbu penyedapnya. Ada banyak variasi rasa ramyeon yang tersedia, termasuk rasa pedas, ayam, sapi, dan keju. Beberapa merek ramyeon terkenal di Korea, seperti Nongshim, Samyang, dan Ottogi.</p>
                <p>Ramyeon biasanya menjadi makanan instan yang populer di kalangan mahasiswa, pelajar, dan pekerja karena praktis dan cepat disajikan. Selain itu, harga ramyeon juga relatif terjangkau. Makanan ini juga sering disajikan di restoran-restoran Korea dan menjadi hidangan yang populer di seluruh dunia.</p>"

            ],
            [
                "title"=>"Tteokbokki",
                "status"=> "SSR",
                "price" => "RP 25000",
                "slug"=> "tteokbokki",
                "desc" => "Tteokbokki atau topokki adalah makanan Korea yang terbuat dari garaetteok, yaitu kue beras tebal dan kenyal yang dipotong menjadi bentuk silinder atau persegi panjang. ",
                "fulldesc" => "
                <p>Tteokbokki atau topokki adalah makanan Korea yang terbuat dari garaetteok, yaitu kue beras tebal dan kenyal yang dipotong menjadi bentuk silinder atau persegi panjang. Tteokbokki biasanya dimasak dengan gochujang, pasta cabai pedas yang khas dari Korea, sehingga memiliki rasa pedas, manis, dan gurih yang khas.</p>
                <p>Tteokbokki sering disajikan dengan bahan tambahan seperti ikan kering, telur, daging sapi atau ayam, dan sayuran seperti kubis atau wortel. Cara memasaknya cukup sederhana, yaitu dengan merebus kue beras dalam kuah kaldu atau saus cabai hingga matang dan mengembang.</p>
                <p>Makanan ini biasanya disajikan dalam mangkuk atau wajan kecil dan dimakan dengan sumpit atau sendok. Tteokbokki merupakan makanan yang populer di Korea dan dapat ditemukan di banyak restoran dan warung makan di seluruh negara.</p>"

            ]
        ];

        $thefood = [];
        foreach($arrmakanan as $makan){
            if($makan["slug"]==$slug){
                $thefood = $makan;
            }
        }
        return view('makan', compact('thefood'));
    }


}
