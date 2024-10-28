<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class TourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        $data = [
            [
                'dir' => 'moscow',
                'title' => 'Москва (Новогодний / Рождественский тур) Новый год 2025',
                'deys' => 1,
                'img' => "center.jpg",
                'start_data'=> "27.01.2025",
                'prices' => [
                    ['price' => 5000, 'comment' => 'Детям до 16 лет (включая билет на локации парка Патриот)'],
                    ['price' => 6000, 'comment' => 'Стандарт (включая билет на локации парка Патриот)']
                ],
                'galery' => [
                    ['img' => "big_teatr.webp", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "center.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "gum_2.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "gum.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "kreml.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "nikolskaya.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "salut.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "vasili_blazgenni.jpg", 'title' => "Описание 1", 'in_top' => false],
                ]
            ],

            [
                'dir' => 'moscow',
                'title' => 'Москва (Новогодний / Рождественский тур) Новый год 2025 1',
                'deys' => 1,
                'img' => "gum_2.jpg",
                'start_data'=> "27.01.2025",
                'prices' => [
                    ['price' => 5000, 'comment' => 'Детям до 16 лет (включая билет на локации парка Патриот)'],
                    ['price' => 6000, 'comment' => 'Стандарт (включая билет на локации парка Патриот)']
                ],
                'galery' => [
                    ['img' => "big_teatr.webp", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "center.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "gum_2.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "gum.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "kreml.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "nikolskaya.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "salut.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "vasili_blazgenni.jpg", 'title' => "Описание 1", 'in_top' => false],
                ]
            ],

            [
                'dir' => 'moscow',
                'title' => 'Москва (Новогодний / Рождественский тур) Новый год 2025 2',
                'deys' => 1,
                'img' => "gum.jpg",
                'start_data'=> "27.01.2025",
                'prices' => [
                    ['price' => 5000, 'comment' => 'Детям до 16 лет (включая билет на локации парка Патриот)'],
                    ['price' => 6000, 'comment' => 'Стандарт (включая билет на локации парка Патриот)']
                ],
                'galery' => [
                    ['img' => "big_teatr.webp", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "center.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "gum_2.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "gum.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "kreml.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "nikolskaya.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "salut.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "vasili_blazgenni.jpg", 'title' => "Описание 1", 'in_top' => false],
                ]
            ],

            [
                'dir' => 'moscow',
                'title' => 'Москва (Новогодний / Рождественский тур) Новый год 2025 3',
                'deys' => 1,
                'img' => "vasili_blazgenni.jpg",
                'start_data'=> "27.01.2025",
                'prices' => [
                    ['price' => 5000, 'comment' => 'Детям до 16 лет (включая билет на локации парка Патриот)'],
                    ['price' => 6000, 'comment' => 'Стандарт (включая билет на локации парка Патриот)']
                ],
                'galery' => [
                    ['img' => "big_teatr.webp", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "center.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "gum_2.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "gum.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "kreml.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "nikolskaya.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "salut.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "vasili_blazgenni.jpg", 'title' => "Описание 1", 'in_top' => false],
                ]
            ],

            [
                'dir' => 'moscow',
                'title' => 'Москва (Новогодний / Рождественский тур) Новый год 2025 4',
                'deys' => 1,
                'img' => "kreml.jpg",
                'start_data'=> "27.01.2025",
                'prices' => [
                    ['price' => 5000, 'comment' => 'Детям до 16 лет (включая билет на локации парка Патриот)'],
                    ['price' => 6000, 'comment' => 'Стандарт (включая билет на локации парка Патриот)']
                ],
                'galery' => [
                    ['img' => "big_teatr.webp", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "center.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "gum_2.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "gum.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "kreml.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "nikolskaya.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "salut.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "vasili_blazgenni.jpg", 'title' => "Описание 1", 'in_top' => false],
                ]
            ],
        ];

        $index = 0;
        foreach ($data as $item) {

            $main_img = "tours/".$index."_".$item['img'];
            Storage::disk('public')->put($main_img, file_get_contents(public_path('tour_info/'.$item['dir'].'/img/'.$item['img'])), 'public');
            $inserted_galery = [];

            foreach ($item['galery'] as $galery_item) {
                Storage::disk('public')->put("tours/".$index."_".$galery_item['img'], file_get_contents(public_path('tour_info/'.$item['dir'].'/img/'.$galery_item['img'])), 'public');
                $galery_item['img'] = "tours/".$index."_".$galery_item['img'];
                $inserted_galery[] = $galery_item;
            }

            $inserted_item = [
                'title' => $item['title'],
                'slug' => Str::slug($item['title']),
                'img' => $main_img,
                'deycount' => $item['deys'],
                'start_data' => date("Y-m-d", strtotime($item['start_data'])),
                'top_description' => file_get_contents(public_path('tour_info/'.$item['dir'].'/top.html')),
                'program' => file_get_contents(public_path('tour_info/'.$item['dir'].'/program.html')),
                'in_price' => file_get_contents(public_path('tour_info/'.$item['dir'].'/in_price.html')),
                'out_price' => file_get_contents(public_path('tour_info/'.$item['dir'].'/out_price.html')),
                'galery' => json_encode($inserted_galery),
                'prices' => json_encode($item['prices'])
            ];

            $index ++;
            DB::table("seo_data")->insert(
                [
                    'url' => 'tours/'.Str::slug($item['title']),
                    'seo_title' => $item['title'],
                    'seo_description' => $item['title'],
                ]
            );
            DB::table("tours")->insert($inserted_item);
        }

    }
}
