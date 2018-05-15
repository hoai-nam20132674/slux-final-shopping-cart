<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Model::unguard();

        // $this->call(UsersTableSeeder::class);
        // $this->call(CategoriesTableSeeder::class);

        // Model::reguard();
        DB::table('users')->insert([
            [
                'name' =>'nam',
                'email' =>'admin@gmail.com',
                'password'=>Hash::make('111111'),
                'role'=>1
            ],
            [
                'name' =>'son',
                'email' =>'admin1@gmail.com',
                'password'=>Hash::make('111111'),
                'role'=>0
            ],
            [
                'name' =>'quang',
                'email' =>'admin2@gmail.com',
                'password'=>Hash::make('111111'),
                'role'=>0
            ],
            [
                'name' =>'thiet',
                'email' =>'admin3@gmail.com',
                'password'=>Hash::make('111111'),
                'role'=>0
            ]
            ]
        );
        DB::table('categories')->insert([
            [
                'url'=>'danh-muc-an',
                'name'=>'danh mục ẩn',
                'title'=>'danh mục ẩn',
                'seo_keyword'=>'danh mục ẩn',
                'seo_description'=>'danh mục ẩn'
            ],
            [
                'url'=>'dich-vu-slux',
                'name'=>'Dịch vụ',
                'title'=>'Dịch vụ slux',
                'seo_keyword'=>'dịch vụ slux',
                'seo_description'=>'dịch vụ slux'
            ],
            [
                'url'=>'link-phu-kien',
                'name'=>'Linh phụ kiện',
                'title'=>'Linh phụ kiện',
                'seo_keyword'=>'Linh phụ kiện',
                'seo_description'=>'Linh phụ kiện'
            ],
            [
                'url'=>'tin-tuc',
                'name'=>'Tin tức',
                'title'=>'Tin tức',
                'seo_keyword'=>'Tin tức',
                'seo_description'=>'tin tức'
            ],
            [
                'url'=>'lien-he',
                'name'=>'Liên hệ',
                'title'=>'liên hệ',
                'seo_keyword'=>'liên hệ',
                'seo_description'=>'liên hệ'
            ]
            
        ]);
        DB::table('images')->insert([
            [
                'url'=>'null.png',
                'name'=>'null.png',
                'alt'=>'null.png'
                
            ]
        ]);
    }
}
