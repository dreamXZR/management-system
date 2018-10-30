@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>DrathProof / Show #{{ $drath_proof->id }}</h1>
            </div>

            <div class="panel-body">
                <div class="well well-sm">
                    <div class="row">
                        <div class="col-md-6">
                            <a class="btn btn-link" href="{{ route('drath_proofs.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
                        </div>
                        <div class="col-md-6">
                             <a class="btn btn-sm btn-warning pull-right" href="{{ route('drath_proofs.edit', $drath_proof->id) }}">
                                <i class="glyphicon glyphicon-edit"></i> Edit
                            </a>
                        </div>
                    </div>
                </div>

                <label>Name</label>
<p>
	{{ $drath_proof->name }}
</p> <label>Id_number</label>
<p>
	{{ $drath_proof->id_number }}
</p> <label>Residence_address</label>
<p>
	{{ $drath_proof->residence_address }}
</p> <label>Present_address</label>
<p>
	{{ $drath_proof->present_address }}
</p> <label>Applicant</label>
<p>
	{{ $drath_proof->applicant }}
</p> <label>Death_date</label>
<p>
	{{ $drath_proof->death_date }}
</p> <label>Death_address</label>
<p>
	{{ $drath_proof->death_address }}
</p> <label>Death_relation</label>
<p>
	{{ $drath_proof->death_relation }}
</p> <label>Applicant_id_number</label>
<p>
	{{ $drath_proof->applicant_id_number }}
</p> <label>Agent</label>
<p>
	{{ $drath_proof->agent }}
</p> <label>Application_relation</label>
<p>
	{{ $drath_proof->application_relation }}
</p> <label>Agent_id_number</label>
<p>
	{{ $drath_proof->agent_id_number }}
</p> <label>Other</label>
<p>
	{{ $drath_proof->other }}
</p> <label>Number</label>
<p>
	{{ $drath_proof->number }}
</p>
            </div>
        </div>
    </div>
</div>

@endsection
