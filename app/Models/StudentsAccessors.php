<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentsAccessors extends Model
{
    use HasFactory;
    /* Accessors */
    function getNameAttribute($val){
        return  ucfirst($val);
    }

    /* Mutators */
    function setNameAttribute($val){
        $this->attributes['name'] = ucfirst($val);
    }

    function setBatchAttribute($val){
        $this->attributes['batch'] = 'batch-'.$val;
    }
}
