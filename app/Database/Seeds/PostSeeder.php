<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PostSeeder extends Seeder
{
    public function run()
        {
            $model = model('PostModel');
            $categories = ['nature', 'programming', 'cat', 'sport', 'lifestyle', 'food'];

            for ($i = 0; $i < 6; $i++){
                $model->insert([
                    'post_title'            => static::faker()->sentence(3),
                    'post_description'      => static::faker()->text(),
                    'post_author'           => static::faker()->name(),
                    'post_category'         => $categories[$i],
                    'post_slug'             => static::faker()->unique()->slug(3),
                ]);
        }
    }
}
