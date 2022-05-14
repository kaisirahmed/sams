@extends('layouts.app') 
@section('title','Attendances')
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
                <h4 class="panel-title"><i class="fa fa-th-list"></i> @yield('title') ({{ $information->account_no }})  <span class="pull-right label label-warning">{{ $information->name }}</span></h4>
            </div>
            @include('messages.message')
            <div class="panel-body">
                <table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
                    <thead>
                        <tr>
                            <th scope="col">Sl.</th>
                            <th scope="col">Date Time</th>
                            <th scope="col">TimeTable</th>
                            <th scope="col">In Time</th>
                            <th scope="col">In time Range</th>
                            <th scope="col">In Status</th>
                            <th scope="col">Out Time</th>
                            <th scope="col">Out Time Range</th>
                            <th scope="col">Out Status</th>
                        </tr>
                    </thead>
                    <tbody id="filterRow">
                        @foreach($attendances as $key => $attendance)
                        <tr class="{{ $key+1 % 2 == 0 ? 'even gradeC' : 'odd gradeX' }}">
                            <td>{{ $key+1 }}</td> 
                            <td>{{ date('d F, Y',strtotime($attendance->datetime)) }}</td>
                            <td>
                            @if($attendance->information->department->timetable)
                                {{ date('h:i A',strtotime($attendance->information->department->timetable->checkin)) }} - {{ date('h:i A',strtotime($attendance->information->department->timetable->checkout)) }}
                            @endif
                            </td>
                            <td>{{ date('h:i A',strtotime($attendance->in_time)) }}</td>
                            <td>
                                {{ date('h:i', strtotime(-$rounding->up_checkin.' minutes', strtotime($attendance->information->department->timetable->checkin))) }} - {{ date('h:i A', strtotime(+$rounding->up_checkout.' minutes', strtotime($attendance->information->department->timetable->checkin))) }}
                            </td>
                            <td>  
                            @if($attendance->information->department->timetable)
                                @if(date(strtotime($attendance->in_time)) < date(strtotime(-$rounding->up_checkin.' minutes', strtotime($attendance->information->department->timetable->checkin))))
                                <label class="label label-warning">Early In</label>
                                @elseif(date(strtotime($attendance->in_time)) > date(strtotime(-$rounding->up_checkin.' minutes', strtotime($attendance->information->department->timetable->checkin))) && date(strtotime($attendance->in_time)) < date(strtotime(+$rounding->up_checkout.' minutes', strtotime($attendance->information->department->timetable->checkin))))
                                <label class="label label-success">In Time</label>
                                @elseif($attendance->in_time > $attendance->information->department->timetable->checkin && $attendance->out_time > $attendance->information->department->timetable->checkin)
                                <label class="label label-danger">Late In</label>
                                @endif
                            @endif
                            </td>
                            <td>{{ date('h:i A',strtotime($attendance->out_time)) }}</td>
                            <td>
                                {{ date('h:i', strtotime(-$rounding->down_checkin.' minutes', strtotime($attendance->information->department->timetable->checkout))) }} - {{ date('h:i A', strtotime(+$rounding->down_checkin.' minutes', strtotime($attendance->information->department->timetable->checkout))) }}
                            </td>
                            <td>
                            @if($attendance->information->department->timetable)
                                @if(date(strtotime($attendance->out_time)) < date(strtotime(-$rounding->down_checkin.' minutes', strtotime($attendance->information->department->timetable->checkout))))
                                <label class="label label-warning">Early Out</label>
                                @elseif(date(strtotime($attendance->out_time)) > date(strtotime(-$rounding->down_checkin.' minutes', strtotime($attendance->information->department->timetable->checkout))) && date(strtotime($attendance->out_time)) < date(strtotime(+$rounding->down_checkout.' minutes', strtotime($attendance->information->department->timetable->checkout))))
                                <label class="label label-success">Out Time</label>
                                @elseif($attendance->out_time > $attendance->information->department->timetable->checkout && $attendance->out_time > $attendance->information->department->timetable->checkout)
                                <label class="label label-danger">Late Out</label>
                                @endif
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