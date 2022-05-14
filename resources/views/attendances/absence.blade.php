@extends('layouts.app') 
@section('title','Absence')
@section('content')

@section('breadcrumbs')
    {{ Breadcrumbs::render('attendance.index') }}
@endsection

 <!-- begin row -->
<div class="row">
    <!-- begin col-10 -->
    <div class="col-md-12">
        <!-- begin panel -->
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h4 class="panel-title"><i class="fa fa-th-list"></i> @yield('title') ({{ $information->account_no }}) <span class="pull-right label label-warning">{{ $information->name }}</span></h4>
            </div>
            @include('messages.message')
            <div class="panel-body">
                <table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
                    <thead>
                        <tr>
                            <th scope="col">Sl.</th>
                            <th scope="col">Absent Date</th>
                            <th scope="col">Week</th>
                            <th scope="col">Card Number</th>
                            <th scope="col">TimeTable</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($attendances as $key => $attendance)
                        <tr> 
                            <td>{{ $key+1 }}</td>
                            <td>{{ date('d F, Y',strtotime($attendance->absent_date)) }}</td>
                            <td>{{ date("l",strtotime($attendance->absent_date)) }}</td>
                            <td>{{ $attendance->information->card_number }}</td>
                            <td>
                                @if($attendance->information->department->timetable)
                                {{ date('h:i A',strtotime($attendance->information->department->timetable->checkin)) }} - {{ date('h:i A',strtotime($attendance->information->department->timetable->checkout)) }}
                                @endif
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