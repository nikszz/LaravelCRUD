<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
  
    protected $table="students";

    public function students(){
        return $this->belongsTo(courses::class);
    }
//     protected $fillable = [
//         'name', 'course','address','phoneno'
//    ];
 }


