@extends('layouts.app') 
@section('title','Departments')
@section('content')

@section('breadcrumbs')
    {{ Breadcrumbs::render('departments.index') }}
@endsection
 <!-- begin row -->
<div class="row">
    <!-- begin col-10 -->
    <div class="col-md-10">
        <!-- begin panel -->
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h4 class="panel-title"><i class="fa fa-th"></i> @yield('title')</h4>
            </div>
            @include('messages.message')
            <div class="panel-body">
                <table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
                    <thead>
                        <tr>
                            <th scope="col">Sl.</th>
                            <th scope="col">Name</th>
                            <th scope="col">Create Time</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($departments as $key => $department)
                        <tr class="{{ $key+1 % 2 == 0 ? 'even gradeC' : 'odd gradeX' }}">
                            <td>{{ $key+1 }}</td>
                            <td>{{ $department->name }}</td>
                            <td>{{ date("F d, Y",strtotime($department->created_at)) }}</td>
                            <td width="150px">
                                <a href="{{ route('departments.edit', $department->id) }}" type="button" class="btn btn-sm btn-primary btn-icon float-left"><i class="fa fa-edit"></i></a> | 

                                <button type="button" class="btn btn-sm btn-danger btn-icon float-left" onclick="confirmDelete('{{ $department->id }}')"><i class="fa fa-trash-o"></i></button>

                                <form id="delete-form-{{ $department->id }}" action="{{ route('departments.destroy', $department) }}" method="POST" class="d-none">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- end panel -->
    </div>
    <!-- end col-10 -->
</div>
<!-- end row -->
@include('datatable.datatable')
@endsection