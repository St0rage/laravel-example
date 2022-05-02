<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        User::create([
            'name' => 'Dani Yudistira',
            'username' => 'daniyudistira',
            'email' => 'daniyudistira@gmail.com',
            'password' => bcrypt('dani12345')
        ]);

        // User::create([
        //     'name' => 'Dian Nugraha',
        //     'email' => 'diannugraha@gmail.com',
        //     'password' => bcrypt('dian12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident eveniet id nisi sit molestias reprehenderit aliquam dolore, cupiditate inventore atque pariatur voluptatum harum ducimus ratione suscipit amet quo itaque, veniam recusandae deleniti sequi ut rem, omnis saepe! Dolorem unde consequuntur,',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident eveniet id nisi sit molestias reprehenderit aliquam dolore, cupiditate inventore atque pariatur voluptatum harum ducimus ratione suscipit amet quo itaque, veniam recusandae deleniti sequi ut rem</p><p>omnis saepe! Dolorem unde consequuntur, est doloribus asperiores quis maiores consequatur, at perferendis sed accusantium vitae officiis laboriosam. Vitae saepe animi consectetur,</p><p>corporis magnam pariatur labore rerum deserunt odit quis sequi odio atque harum molestias laborum doloremque consequatur debitis voluptate optio et consequuntur inventore minima soluta? Consectetur, rem fugit quos debitis dicta dolore itaque quam quia, voluptas, ad ut obcaecati nobis suscipit temporibus voluptates iusto!</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident eveniet id nisi sit molestias reprehenderit aliquam dolore, cupiditate inventore atque pariatur voluptatum harum ducimus ratione suscipit amet quo itaque, veniam recusandae deleniti sequi ut rem, omnis saepe! Dolorem unde consequuntur,',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident eveniet id nisi sit molestias reprehenderit aliquam dolore, cupiditate inventore atque pariatur voluptatum harum ducimus ratione suscipit amet quo itaque, veniam recusandae deleniti sequi ut rem</p><p>omnis saepe! Dolorem unde consequuntur, est doloribus asperiores quis maiores consequatur, at perferendis sed accusantium vitae officiis laboriosam. Vitae saepe animi consectetur,</p><p>corporis magnam pariatur labore rerum deserunt odit quis sequi odio atque harum molestias laborum doloremque consequatur debitis voluptate optio et consequuntur inventore minima soluta? Consectetur, rem fugit quos debitis dicta dolore itaque quam quia, voluptas, ad ut obcaecati nobis suscipit temporibus voluptates iusto!</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident eveniet id nisi sit molestias reprehenderit aliquam dolore, cupiditate inventore atque pariatur voluptatum harum ducimus ratione suscipit amet quo itaque, veniam recusandae deleniti sequi ut rem, omnis saepe! Dolorem unde consequuntur,',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident eveniet id nisi sit molestias reprehenderit aliquam dolore, cupiditate inventore atque pariatur voluptatum harum ducimus ratione suscipit amet quo itaque, veniam recusandae deleniti sequi ut rem</p><p>omnis saepe! Dolorem unde consequuntur, est doloribus asperiores quis maiores consequatur, at perferendis sed accusantium vitae officiis laboriosam. Vitae saepe animi consectetur,</p><p>corporis magnam pariatur labore rerum deserunt odit quis sequi odio atque harum molestias laborum doloremque consequatur debitis voluptate optio et consequuntur inventore minima soluta? Consectetur, rem fugit quos debitis dicta dolore itaque quam quia, voluptas, ad ut obcaecati nobis suscipit temporibus voluptates iusto!</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident eveniet id nisi sit molestias reprehenderit aliquam dolore, cupiditate inventore atque pariatur voluptatum harum ducimus ratione suscipit amet quo itaque, veniam recusandae deleniti sequi ut rem, omnis saepe! Dolorem unde consequuntur,',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident eveniet id nisi sit molestias reprehenderit aliquam dolore, cupiditate inventore atque pariatur voluptatum harum ducimus ratione suscipit amet quo itaque, veniam recusandae deleniti sequi ut rem</p><p>omnis saepe! Dolorem unde consequuntur, est doloribus asperiores quis maiores consequatur, at perferendis sed accusantium vitae officiis laboriosam. Vitae saepe animi consectetur,</p><p>corporis magnam pariatur labore rerum deserunt odit quis sequi odio atque harum molestias laborum doloremque consequatur debitis voluptate optio et consequuntur inventore minima soluta? Consectetur, rem fugit quos debitis dicta dolore itaque quam quia, voluptas, ad ut obcaecati nobis suscipit temporibus voluptates iusto!</p>'
        // ]);
    }
}
