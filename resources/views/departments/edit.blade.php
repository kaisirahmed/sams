@extends('layouts.app')
@section('title','Department Edit')
@section('content')

@section('breadcrumbs')
    {{ Breadcrumbs::render('departments.edit',$department) }}
@endsection
<!-- begin row -->
<div class="row">
    <!-- begin col-6 -->
    <div class="col-md-6">
        <!-- begin panel -->
        <div class="panel panel-inverse" data-sortable-id="form-stuff-1">
            <div class="panel-heading">
                <h4 class="panel-title"><i class="fa fa-th"></i> @yield('title')</h4>
            </div>
            <div class="panel-body">
                <form action="{{ route('departments.update', $department) }}" method="POST" class="form-horizontal">
                    @csrf   
                    {{ method_field('PUT') }}         
                    <div class="form-group">
                        <label class="col-md-3 control-label">Department Name</label>
                        <div class="col-md-9">
                            <input type="text" name="name" value="{{ $department->name }}" class="form-control @error('name') is-invalid @enderror" placeholder="Name" required="required" autofocus/>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                  
                    <div class="form-group">
                        <label class="col-md-3 control-label">Update/Reset</label>
                        <div class="col-md-8">
                            <button type="submit" class="btn btn-sm btn-primary">Update</button>
                            <button type="reset" class="btn btn-sm btn-warning">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- end panel -->
    </div>
</div>
@endsection