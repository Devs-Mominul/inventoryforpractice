<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advance_Salary extends Model
{
    use HasFactory;
    function rel_to_emp(){
        return $this->belongsTo(Employe::class,'emp_id');
    }
}
