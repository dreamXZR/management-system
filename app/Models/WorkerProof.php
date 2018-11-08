<?php

namespace App\Models;

use EloquentFilter\Filterable;

class WorkerProof extends Model
{
	use Filterable;
    
    protected $fillable = ['name', 'id_number', 'present_address', 'phone', 'worker_content', 'worker_place', 'child_name', 'child_sex', 'child_id_number', 'number'];
}
