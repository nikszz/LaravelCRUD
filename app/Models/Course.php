<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
   protected $table="courses";

   public function students(){
       return $this->hasMany(Student::class);
   }
}
