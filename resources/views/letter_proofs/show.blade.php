@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>LetterProof / Show #{{ $letter_proof->id }}</h1>
            </div>

            <div class="panel-body">
                <div class="well well-sm">
                    <div class="row">
                        <div class="col-md-6">
                            <a class="btn btn-link" href="{{ route('letter_proofs.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
                        </div>
                        <div class="col-md-6">
                             <a class="btn btn-sm btn-warning pull-right" href="{{ route('letter_proofs.edit', $letter_proof->id) }}">
                                <i class="glyphicon glyphicon-edit"></i> Edit
                            </a>
                        </div>
                    </div>
                </div>

                <label>Name</label>
<p>
	{{ $letter_proof->name }}
</p> <label>Community_name</label>
<p>
	{{ $letter_proof->community_name }}
</p> <label>Present_address</label>
<p>
	{{ $letter_proof->present_address }}
</p> <label>Residence_address</label>
<p>
	{{ $letter_proof->residence_address }}
</p> <label>Use</label>
<p>
	{{ $letter_proof->use }}
</p> <label>Basis</label>
<p>
	{{ $letter_proof->basis }}
</p>
            </div>
        </div>
    </div>
</div>

@endsection
