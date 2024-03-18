<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Post extends Model
{
    protected $id;
    protected $type;
    protected $title;
    protected $description;
    protected $content;
    protected $photo;
    protected $btn;
    protected $post_order;
    protected $created_at;
    protected $updated_at;

    protected $guarded = [];
}
