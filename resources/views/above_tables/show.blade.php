@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>AboveTable / Show #{{ $above_table->id }}</h1>
            </div>

            <div class="panel-body">
                <div class="well well-sm">
                    <div class="row">
                        <div class="col-md-6">
                            <a class="btn btn-link" href="{{ route('above_tables.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
                        </div>
                        <div class="col-md-6">
                             <a class="btn btn-sm btn-warning pull-right" href="{{ route('above_tables.edit', $above_table->id) }}">
                                <i class="glyphicon glyphicon-edit"></i> Edit
                            </a>
                        </div>
                    </div>
                </div>

                <label>Name</label>
<p>
	{{ $above_table->name }}
</p> <label>Sex</label>
<p>
	{{ $above_table->sex }}
</p> <label>Call_time</label>
<p>
	{{ $above_table->call_time }}
</p> <label>Address</label>
<p>
	{{ $above_table->address }}
</p> <label>Phone</label>
<p>
	{{ $above_table->phone }}
</p> <label>Call_content</label>
<p>
	{{ $above_table->call_content }}
</p> <label>Back_content</label>
<p>
	{{ $above_table->back_content }}
</p> <label>Other</label>
<p>
	{{ $above_table->other }}
</p> <label>Images</label>
<p>
	{{ $above_table->images }}
</p> <label>Main</label>
<p>
	{{ $above_table->main }}
</p> <label>Secondary</label>
<p>
	{{ $above_table->secondary }}
</p> <label>Join</label>
<p>
	{{ $above_table->join }}
</p> <label>Number</label>
<p>
	{{ $above_table->number }}
</p>
            </div>
        </div>
    </div>
</div>

@endsection
