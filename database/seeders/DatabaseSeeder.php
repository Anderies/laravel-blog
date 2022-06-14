<?php

namespace Database\Seeders;

use App\Models\Tulisan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::factory(5)->create();

        Tulisan::create([
            'id' => 1,
            'judul' => 'Postingan 1',
            'hashtag' => '#webdesign',
            'isi' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cumque, tempore quidem neque ullam laudantium voluptatibus tenetur est adipisci accusantium aperiam animi reiciendis. Totam tempore quasi dolor maiores? Nesciunt fugiat incidunt, doloribus iusto reprehenderit obcaecati aliquam qui provident cum libero natus porro perferendis deleniti neque blanditiis necessitatibus odit, omnis sint totam!',
            'status' => true
        ]);

        Tulisan::create([
            'id' => 2,
            'judul' => 'Postingan 2',
            'hashtag' => '#pythonIsCool',
            'isi' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cumque, tempore quidem neque ullam laudantium voluptatibus tenetur est adipisci accusantium aperiam animi reiciendis. Totam tempore quasi dolor maiores? Nesciunt fugiat incidunt, doloribus iusto reprehenderit obcaecati aliquam qui provident cum libero natus porro perferendis deleniti neque blanditiis necessitatibus odit, omnis sint totam!',
            'status' => true
        ]);
    }
}
