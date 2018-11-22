<?php

namespace App\Observers;

use App\Models\ProblemTable;

// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

class ProblemTableObserver
{
    public function creating(ProblemTable $problem_table)
    {
        //
    }

    public function updating(ProblemTable $problem_table)
    {
        //
    }
}