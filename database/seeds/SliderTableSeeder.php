<?php

use Illuminate\Database\Seeder;

class SliderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $dataSets =
            [
            [1, 'Ảnh slide giới thiệu giáng sinh', 'slideshow_1.jpg', '1', '2017-01-20 10:47:48', '2017-01-21 15:48:43'],
            [2, 'Ảnh slide mang rạp phim về nhà', 'slideshow_2.jpg', '1', '2017-01-20 10:48:06', '2017-01-21 15:48:43'],
            [4, 'Điện lạnh', 'bb944fa0f7dfc9e38fec39b3bb2363eb.jpeg', '2', '2017-01-21 15:48:43', '2017-01-21 15:48:43'],
            [5, 'Ảnh đầu', 'bb944fa0f7dfc9e38fec39b3bb2363eb.jpeg', '3', '2017-01-21 15:56:33', '2017-01-21 15:56:33'],
            ];

        foreach ($dataSets as $safety) {
            $dataSet[] = [
                'id'         => $safety[0],
                'name'       => $safety[1],
                'image'      => $safety[2],
                'position'   => $safety[3],
                'created_at' => $safety[4],
                'updated_at' => $safety[5],
            ];
        }
        DB::table('slides')->insert($dataSet);
    }
}
