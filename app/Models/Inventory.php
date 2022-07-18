<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $fillable = ['name','inventory_number'];


    public function archive()
    {
        return $this->hasOne('App\Models\Archive');
    }
}
