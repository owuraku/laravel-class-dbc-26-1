<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public function registeredProgramme() {
        // https://laravel.com/docs/8.x/eloquent-relationships#one-to-many-inverse
        // specify the foreign key name because the method name does not follow
        // convention
        return $this->belongsTo(Programme::class,'programme_id');
    }

    public function getFullnameAttribute(){
        return $this->firstname.' '.$this->lastname;
        //return "{$this->firstname} {$this->lastname}";
    }

    public function getAgeAttribute(){
        return Carbon::parse($this->date_of_birth)
        ->diffInYears(Carbon::now());
    }
}
