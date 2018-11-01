<?php

namespace App\Models;

class RegisterTable extends Model
{
    protected $fillable = ['name', 'sex', 'call_time', 'address', 'phone', 'call_content', 'back_content', 'other', 'number'];
}
