@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>WorkerProof / Show #{{ $worker_proof->id }}</h1>
            </div>

            <div class="panel-body">
                <div class="well well-sm">
                    <div class="row">
                        <div class="col-md-6">
                            <a class="btn btn-link" href="{{ route('worker_proofs.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
                        </div>
                        <div class="col-md-6">
                             <a class="btn btn-sm btn-warning pull-right" href="{{ route('worker_proofs.edit', $worker_proof->id) }}">
                                <i class="glyphicon glyphicon-edit"></i> Edit
                            </a>
                        </div>
                    </div>
                </div>

                <label>Name</label>
<p>
	{{ $worker_proof->name }}
</p> <label>Id_number</label>
<p>
	{{ $worker_proof->id_number }}
</p> <label>Present_address</label>
<p>
	{{ $worker_proof->present_address }}
</p> <label>Phone</label>
<p>
	{{ $worker_proof->phone }}
</p> <label>Worker_content</label>
<p>
	{{ $worker_proof->worker_content }}
</p> <label>Worker_place</label>
<p>
	{{ $worker_proof->worker_place }}
</p> <label>Child_name</label>
<p>
	{{ $worker_proof->child_name }}
</p> <label>Child_sex</label>
<p>
	{{ $worker_proof->child_sex }}
</p> <label>Child_id_number</label>
<p>
	{{ $worker_proof->child_id_number }}
</p> <label>Number</label>
<p>
	{{ $worker_proof->number }}
</p>
            </div>
        </div>
    </div>
</div>

@endsection
