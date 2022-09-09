<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use app\Models\Camp;

class CampTableSeeder extends Seeder
{
    
    public function run()
    {
        $camps = [
            [
                'title' => 'Gila Belajar',
                'slug'  => 'gila-belajar',
                'price' =>  280,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'title' => 'Baru Mulai',
                'slug'  => 'baru-mulai',
                'price' =>  140,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
        ];

        foreach($camps as $key => $camp) {
            Camp::create($camp);
        }
    }
}