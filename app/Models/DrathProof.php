<?php

namespace App\Models;

use EloquentFilter\Filterable;

class DrathProof extends Model
{
    use Filterable;
    
    protected $fillable = ['name', 'id_number', 'residence_address', 'present_address', 'applicant', 'death_date', 'death_address', 'death_relation', 'applicant_id_number', 'agent', 'application_relation', 'agent_id_number', 'other', 'number','images'];

    
    
}
