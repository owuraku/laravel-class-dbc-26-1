<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programme extends Model
{
    use HasFactory;

    public function courses(){
        return $this->belongsToMany(Course::class);
    }

    public function registeredStudents(){
        return $this->hasMany(Student::class);
    }
}
