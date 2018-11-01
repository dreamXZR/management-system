@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>RegisterTable / Show #{{ $register_table->id }}</h1>
            </div>

            <div class="panel-body">
                <div class="well well-sm">
                    <div class="row">
                        <div class="col-md-6">
                            <a class="btn btn-link" href="{{ route('register_tables.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
                        </div>
                        <div class="col-md-6">
                             <a class="btn btn-sm btn-warning pull-right" href="{{ route('register_tables.edit', $register_table->id) }}">
                                <i class="glyphicon glyphicon-edit"></i> Edit
                            </a>
                        </div>
                    </div>
                </div>

                <label>Name</label>
<p>
	{{ $register_table->name }}
</p> <label>Sex</label>
<p>
	{{ $register_table->sex }}
</p> <label>Call_time</label>
<p>
	{{ $register_table->call_time }}
</p> <label>Address</label>
<p>
	{{ $register_table->address }}
</p> <label>Phone</label>
<p>
	{{ $register_table->phone }}
</p> <label>Call_content</label>
<p>
	{{ $register_table->call_content }}
</p> <label>Back_content</label>
<p>
	{{ $register_table->back_content }}
</p> <label>Other</label>
<p>
	{{ $register_table->other }}
</p> <label>Number</label>
<p>
	{{ $register_table->number }}
</p>
            </div>
        </div>
    </div>
</div>

@endsection
