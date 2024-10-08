<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'content']; // الخصائص المطلوبة

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}