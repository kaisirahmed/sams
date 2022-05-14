@extends('layouts.app')
@section('title','Daily Report')
@section('content')

@section('breadcrumbs')
    {{ Breadcrumbs::render('report.daily') }}
@endsection

<!-- begin row -->
<div class="row">
    <!-- begin col-6 -->
    <div class="col-md-6">
        <!-- begin panel -->
        <div class="panel panel-inverse" data-sortable-id="form-stuff-1">
            <div class="panel-heading">
                <h4 class="panel-title"><i class="fa fa-book"></i> @yield('title')</h4>
            </div>
            <div class="panel-body">
                <form action="{{ route('report.daily') }}" method="POST" class="form-horizontal" target="_blank">
                    @csrf
                    <div class="form-group">
                        <label class="col-md-3 control-label">Department <span class="required">*</span></label>
                        <div class="col-md-8">
                            <select class="form-control selectpickerDepartments" name="department_id">
                                <option selected="selected" disabled="disabled">Please Select</option>
                                @foreach($departments as $department)
                                <option value="{{ $department->id }}">{{ $department->name }}</option>
                                @endforeach
                            </select>
                            @error('department_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Report Date<span class="required">*</span></label>
                        <div class="col-md-8">
                            <span class="required"></span>
                            <input type="text" name="report_date" value="" id="employmentDate" class="form-control @error('report_date') is-invalid @enderror" placeholder="Report Date" required="required" autocomplete="off"/>
                            @error('report_date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                   
                    <div class="form-group">
                        <label class="col-md-3 control-label">Create/Reset</label>
                        <div class="col-md-8">
                            <button type="submit" class="btn btn-sm btn-success">Create</button>
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