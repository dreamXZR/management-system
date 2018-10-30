<?php

namespace App\Models;

class DrathProof extends Model
{
    protected $fillable = ['name', 'id_number', 'residence_address', 'present_address', 'applicant', 'death_date', 'death_address', 'death_relation', 'applicant_id_number', 'agent', 'application_relation', 'agent_id_number', 'other', 'number'];
}
