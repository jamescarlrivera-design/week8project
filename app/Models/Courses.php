<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    /** @use HasFactory<\Database\Factories\CoursesFactory> */
    use HasFactory;
    protected $fillable = [
        'instructor_id',
        'code',
        'title',
        'description',
        'units',
        'is_active', 
        'image_path',

    ];


    protected function cast(): array { 
        
        return ['is_active' => 'boolean'];
        
        
        
        }

    public function Instructor(){

    return $this->belongsTo(Courses::class);

    }


   

    
}



