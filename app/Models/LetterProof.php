<?php

namespace App\Models;

use EloquentFilter\Filterable;

class LetterProof extends Model
{
    use Filterable;
    
    protected $fillable = ['name', 'community_name', 'present_address', 'residence_address', 'use', 'basis','number','images','charge','self'];
    
}
