<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $primaryKey = "id_user";
    protected $table = "users";
    protected $guarded = [];
    public $timestamps = false;
}
