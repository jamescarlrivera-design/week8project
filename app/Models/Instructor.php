<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Courses;

class Instructor extends Model
{

    use HasFactory;

    protected $fillable = ['name',];

    

    public function Courses(){

       return $this->hasMany(Courses::class);


    }

 

}
