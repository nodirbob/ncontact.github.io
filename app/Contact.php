<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['id', 'name', 'email', 'number', 'additional_email', 'additional_number', 'created_at', 'updated_at'];
}
