<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory;

    protected $fillable = ['name','code','department_id'];

    public function department()
    {
        return $this->belongsTo('App\Models\Department');
    }


    public function employee()
    {
        return $this->hasMany('App\Models\Employee');
    }
}
