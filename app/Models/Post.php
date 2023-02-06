<?php

namespace App\Models;
use App\Models\Tag;
use App\Models\Category;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'body'];

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
    public function tags(){
        return $this ->belongsToMany(Tag::class);
    }
    public  function comments(){
        return $this ->hasMany(Comment::class);
    }
}