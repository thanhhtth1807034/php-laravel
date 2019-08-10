<?php

use Illuminate\Database\Seeder;

class GamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('games') -> truncate();
        DB::table('games') -> insert([
            [
                'id' => 1,
                'name' => 'Counter Strike 7.0',
                'category' => 'đối kháng',
                'thumbnail' => 'https://steamcdn-a.akamaihd.net/steam/apps/770240/header.jpg',
                'price' => '0',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 2,
                'name' => 'PUBG',
                'category' => 'đối kháng',
                'thumbnail' => 'https://steamcdn-a.akamaihd.net/steam/apps/770240/header.jpg',
                'price' => '300',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 3,
                'name' => 'Pikachu',
                'category' => 'Trí tuệ',
                'thumbnail' => 'https://steamcdn-a.akamaihd.net/steam/apps/770240/header.jpg',
                'price' => '0',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 4,
                'name' => 'Auto chess',
                'category' => 'Chiến thuật',
                'thumbnail' => 'https://steamcdn-a.akamaihd.net/steam/apps/770240/header.jpg',
                'price' => '200',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 5,
                'name' => 'Diablo',
                'category' => 'đối kháng',
                'thumbnail' => 'https://steamcdn-a.akamaihd.net/steam/apps/770240/header.jpg',
                'price' => '100',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 6,
                'name' => 'GTA',
                'category' => 'Nhập vai',
                'thumbnail' => 'https://steamcdn-a.akamaihd.net/steam/apps/770240/header.jpg',
                'price' => '2000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7,
                'name' => 'LOL',
                'category' => 'Chiến thuật',
                'thumbnail' => 'https://steamcdn-a.akamaihd.net/steam/apps/770240/header.jpg',
                'price' => '0',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ]);
//        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
