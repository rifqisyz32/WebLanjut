<?php

namespace App\Models;

use CodeIgniter\Model;

class PostModel extends Model
{
    protected $table                = 'posts';
    protected $primaryKey           = 'posts_id';
    protected $allowedFields        = ['posts_title','post_description','post_image','post_author','post_category','post_slug','created_at','updated_at'];
    protected $useTimestamps        = true;
}
