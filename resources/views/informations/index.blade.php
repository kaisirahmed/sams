@extends('layouts.app') 
@section('title','Information')
@section('content')

@section('breadcrumbs')
    {{ Breadcrumbs::render('informations.index') }}
@endsection
 <!-- begin row -->
<div class="row">
    <!-- begin col-10 -->
    <div class="col-md-12">
        <!-- begin panel -->
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h4 class="panel-title"><i class="fa fa-info-circle"></i> @yield('title')</h4>
            </div>
            @include('messages.message')
            <div class="panel-body">
                <table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
                    <thead>
                        <tr>
                            <th scope="col">Sl.</th>
                            <th scope="col">Department</th>
                            <th scope="col">Account No.</th>
                            <th scope="col">Name</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Nationality</th>
                            <th scope="col">Mobile</th>
                            <th scope="col">Card</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($informations as $key => $information)
                        <tr class="{{ $key+1 % 2 == 0 ? 'even gradeC' : 'odd gradeX' }}">
                            <td>{{ $key+1 }}</td>
                            <td>{{ $information->department->name }}</td>
                            <td>{{ $information->account_no }}</td>
                            <td>{{ ucfirst($information->name) }}</td>
                            <td>{{ ucfirst($information->gender) }}</td>
                            <td>{{ $information->nationality }}</td>
                            <td>{{ $information->mobile_number }}</td>
                            <td>{{ $information->card_number }}</td>
                            <td width="150px">
                                <a href="{{ route('informations.show', $information->id) }}" type="button" class="btn btn-sm btn-primary btn-icon float-left"><i class="fa fa-eye"></i></a> |

                                <a href="{{ route('informations.edit', $information->id) }}" type="button" class="btn btn-sm btn-warning btn-icon float-left"><i class="fa fa-edit"></i></a> | 

                                <button type="button" class="btn btn-sm btn-danger btn-icon float-left" onclick="confirmDelete('{{ $information->id }}')"><i class="fa fa-trash-o"></i></button>

                                <form id="delete-form-{{ $information->id }}" action="{{ route('informations.destroy', $information) }}" method="POST" class="d-none">
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