<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = [
            ['name' => 'Alborz', 'alias' => 'al', 'image' => 'path_to_alborz_image.jpg'],
            ['name' => 'Ardabil', 'alias' => 'ar', 'image' => 'path_to_ardabil_image.jpg'],
            ['name' => 'Bushehr', 'alias' => 'bu', 'image' => 'path_to_bushehr_image.jpg'],
            ['name' => 'Chaharmahal and Bakhtiari', 'alias' => 'ch', 'image' => 'path_to_chaharmahal_image.jpg'],
            ['name' => 'East Azerbaijan', 'alias' => 'ea', 'image' => 'path_to_east_azerbaijan_image.jpg'],
            ['name' => 'Fars', 'alias' => 'fa', 'image' => 'path_to_fars_image.jpg'],
            ['name' => 'Gilan', 'alias' => 'gi', 'image' => 'path_to_gilan_image.jpg'],
            ['name' => 'Golestan', 'alias' => 'go', 'image' => 'path_to_golestan_image.jpg'],
            ['name' => 'Hamadan', 'alias' => 'ha', 'image' => 'path_to_hamadan_image.jpg'],
            ['name' => 'Hormozgan', 'alias' => 'ho', 'image' => 'path_to_hormozgan_image.jpg'],
            ['name' => 'Ilam', 'alias' => 'il', 'image' => 'path_to_ilam_image.jpg'],
            ['name' => 'Isfahan', 'alias' => 'is', 'image' => 'path_to_isfahan_image.jpg'],
            ['name' => 'Kerman', 'alias' => 'ke', 'image' => 'path_to_kerman_image.jpg'],
            ['name' => 'Kermanshah', 'alias' => 'kh', 'image' => 'path_to_kermanshah_image.jpg'],
            ['name' => 'Khuzestan', 'alias' => 'khu', 'image' => 'path_to_khuzestan_image.jpg'],
            ['name' => 'Kohgiluyeh and Boyer-Ahmad', 'alias' => 'kb', 'image' => 'path_to_kohgiluyeh_image.jpg'],
            ['name' => 'Kurdistan', 'alias' => 'ku', 'image' => 'path_to_kurdistan_image.jpg'],
            ['name' => 'Lorestan', 'alias' => 'lo', 'image' => 'path_to_lorestan_image.jpg'],
            ['name' => 'Markazi', 'alias' => 'ma', 'image' => 'path_to_markazi_image.jpg'],
            ['name' => 'Mazandaran', 'alias' => 'mz', 'image' => 'path_to_mazandaran_image.jpg'],
            ['name' => 'North Khorasan', 'alias' => 'nk', 'image' => 'path_to_north_khorasan_image.jpg'],
            ['name' => 'Qazvin', 'alias' => 'qa', 'image' => 'path_to_qazvin_image.jpg'],
            ['name' => 'Qom', 'alias' => 'qo', 'image' => 'path_to_qom_image.jpg'],
            ['name' => 'Razavi Khorasan', 'alias' => 'rk', 'image' => 'path_to_razavi_khorasan_image.jpg'],
            ['name' => 'Semnan', 'alias' => 'se', 'image' => 'path_to_semnan_image.jpg'],
            ['name' => 'Sistan and Baluchestan', 'alias' => 'sb', 'image' => 'path_to_sistan_baluchestan_image.jpg'],
            ['name' => 'South Khorasan', 'alias' => 'sk', 'image' => 'path_to_south_khorasan_image.jpg'],
            ['name' => 'Tehran', 'alias' => 'te', 'image' => 'path_to_tehran_image.jpg'],
            ['name' => 'West Azerbaijan', 'alias' => 'wa', 'image' => 'path_to_west_azerbaijan_image.jpg'],
            ['name' => 'Yazd', 'alias' => 'ya', 'image' => 'path_to_yazd_image.jpg'],
            ['name' => 'Zanjan', 'alias' => 'za', 'image' => 'path_to_zanjan_image.jpg'],
        ];


        foreach ($cities as $key => $city) {
            DB::table('cities')->insert([
                'name'=>$city['name'],
                'alias'=>$city['alias'],
                'created_at' => now(),
                'updated_at' => now(),
                'image'=>$city['image'],
                'header_title'=>'Food Delivery from<br /><strong>'.$city['name'].'</strong>’s Best Restaurants',
                'header_subtitle'=>'The meals you love, delivered with care',
            ]);
        }
    }
}
