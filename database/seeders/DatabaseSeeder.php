<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

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
            'name' => 'Nann',
            'username' => 'nann',
            'email' => 'nann@gmail.com',
            'password' => bcrypt('password')
        ]);


        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'category_id' => 2,
        //     'user_id' => 4,
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'lorem ipsum pertama',
        //     'body' => '<p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque autem exercitationem ab illo ea, illum unde eveniet aperiam ipsam adipisci, sunt reiciendis rerum tempora nihil dolor quis fugit enim sapiente ipsa. Ratione sed ducimus eaque molestias doloribus laudantium voluptatibus cupiditate rem, quam inventore fugiat laborum nihil omnis quis! Quibusdam qui, </p> <p> aspernatur vel fuga doloremque rerum illo harum nam quia, illum voluptatibus non cupiditate? Quae beatae culpa velit at tempore obcaecati alias, incidunt laboriosam expedita accusamus, eos voluptatem ratione temporibus dolorum unde dignissimos hic. Est commodi quas quos. Possimus distinctio, explicabo ipsa ullam ducimus dolorem necessitatibus eveniet in fuga voluptates doloremque voluptas,</p> <p> beatae neque voluptatem deserunt repudiandae? Natus neque blanditiis esse, doloribus totam veniam asperiores! Dicta optio, distinctio molestias corrupti, eveniet quia repellat quasi minus aliquid officiis voluptatum architecto tenetur nobis nostrum eligendi atque? Excepturi maiores amet sapiente culpa adipisci ab magnam saepe deserunt quasi unde alias distinctio, nam explicabo! Natus.</p>'
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'lorem ipsum kedua',
        //     'body' => '<p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque autem exercitationem ab illo ea, illum unde eveniet aperiam ipsam adipisci, sunt reiciendis rerum tempora nihil dolor quis fugit enim sapiente ipsa. Ratione sed ducimus eaque molestias doloribus laudantium voluptatibus cupiditate rem, quam inventore fugiat laborum nihil omnis quis! Quibusdam qui, </p> <p> aspernatur vel fuga doloremque rerum illo harum nam quia, illum voluptatibus non cupiditate? Quae beatae culpa velit at tempore obcaecati alias, incidunt laboriosam expedita accusamus, eos voluptatem ratione temporibus dolorum unde dignissimos hic. Est commodi quas quos. Possimus distinctio, explicabo ipsa ullam ducimus dolorem necessitatibus eveniet in fuga voluptates doloremque voluptas,</p> <p> beatae neque voluptatem deserunt repudiandae? Natus neque blanditiis esse, doloribus totam veniam asperiores! Dicta optio, distinctio molestias corrupti, eveniet quia repellat quasi minus aliquid officiis voluptatum architecto tenetur nobis nostrum eligendi atque? Excepturi maiores amet sapiente culpa adipisci ab magnam saepe deserunt quasi unde alias distinctio, nam explicabo! Natus.</p>'
        // ]);
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'lorem ipsum ketiga',
        //     'body' => '<p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque autem exercitationem ab illo ea, illum unde eveniet aperiam ipsam adipisci, sunt reiciendis rerum tempora nihil dolor quis fugit enim sapiente ipsa. Ratione sed ducimus eaque molestias doloribus laudantium voluptatibus cupiditate rem, quam inventore fugiat laborum nihil omnis quis! Quibusdam qui, </p> <p> aspernatur vel fuga doloremque rerum illo harum nam quia, illum voluptatibus non cupiditate? Quae beatae culpa velit at tempore obcaecati alias, incidunt laboriosam expedita accusamus, eos voluptatem ratione temporibus dolorum unde dignissimos hic. Est commodi quas quos. Possimus distinctio, explicabo ipsa ullam ducimus dolorem necessitatibus eveniet in fuga voluptates doloremque voluptas,</p> <p> beatae neque voluptatem deserunt repudiandae? Natus neque blanditiis esse, doloribus totam veniam asperiores! Dicta optio, distinctio molestias corrupti, eveniet quia repellat quasi minus aliquid officiis voluptatum architecto tenetur nobis nostrum eligendi atque? Excepturi maiores amet sapiente culpa adipisci ab magnam saepe deserunt quasi unde alias distinctio, nam explicabo! Natus.</p>'
        // ]);

        User::factory(5)->create();
        Post::factory(20)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        Category::create([
            'name' => 'Artificial Intelligence',
            'slug' => 'artificial Intelligence'
        ]);
    }
}
