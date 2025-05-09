<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profile extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = ['name','email','bio','password','image'];
    //
    
    public function getImageAttribute($value){
        return $value ? $value : 'profile/Logo.png';
    }
}
