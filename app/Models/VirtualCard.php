<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class VirtualCard extends Model
{
    public $timestamps = false;
    use HasFactory;
    // declaring the fillable fields
    protected $fillable = [
        'name','title', 'link_git', 'link_linkedin','description'
    ];
    // declaring the auto generated slug
    protected $appends = ['slug'];
    //automatically generate slug when creating a new user
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($user) {
            $user->slug = Str::slug($user->name);
        });
    }

}
