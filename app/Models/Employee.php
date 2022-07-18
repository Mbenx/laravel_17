<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = ['name','address','email','phone','position_id'];

    public function position()
    {
        return $this->belongsTo('App\Models\Position');
    }
}