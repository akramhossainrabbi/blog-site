<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'title' => 'Food blogs',
            'slug' => 'food-blogs',
            'image' => 'https://images.pexels.com/photos/1640777/pexels-photo-1640777.jpeg?cs=srgb&dl=pexels-ella-olsson-1640777.jpg&fm=jpg',
        ]);
        DB::table('categories')->insert([
            'title' => 'Travel blogs',
            'slug' => 'travel-blogs',
            'image' => 'https://theplanetd.com/images/best-travel-blogs-8.jpg',
        ]);
        DB::table('categories')->insert([
            'title' => 'Health and fitness blogs',
            'slug' => 'health-and-fitness-blogs',
            'image' => 'http://static1.squarespace.com/static/5489d598e4b0b95be7ccbe5a/566c2d4069492e9db2acf529/5c6dab83e4966ba53d4c3295/1556136661927/AdobeStock_169680529.jpeg?format=1500w',
        ]);
        DB::table('categories')->insert([
            'title' => 'Lifestyle blogs',
            'slug' => 'lifestyle-blogs',
            'image' => 'https://fastcdn.impakter.com/wp-content/uploads/2018/09/lifestyle.jpg?strip=all&lossy=1&quality=92&ssl=1',
        ]);
        DB::table('categories')->insert([
            'title' => 'Fashion and beauty blogs',
            'slug' => 'fashion-and-beauty-blogs',
            'image' => 'https://stylecaster.com/wp-content/uploads/2016/12/beauty-blogger-flat-lay.png',
        ]);
        DB::table('categories')->insert([
            'title' => 'Photography blogs',
            'slug' => 'photography-blogs',
            'image' => 'https://phlearn.com/wp-content/uploads/2020/01/annie-spratt-ogDort6vKuE-unsplash.jpg',
        ]);
    }
}
