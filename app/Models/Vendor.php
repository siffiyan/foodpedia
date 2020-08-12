<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    protected $guarded = [];
    public $timestamps = false;
    protected $primaryKey = "id_vendor";
}
