<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = ['name','arabic_name']; // أو أي خصائص أخرى لديك


    public function user()
    {
        return $this->belongTo(User::class, 'role_id');
    }


    public function permissions()
    {
        return $this->belongsToMany(Permission::class, 'permission_roles');
    }
}