<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'priority',
        'is_completed',

    ];

//    public function setStartDateAttribute($value){
//        $this->attributes['start_date'] = Carbon::createFromFormat('m/d/Y',$value)->format('d/m/Y');
//    }
}
