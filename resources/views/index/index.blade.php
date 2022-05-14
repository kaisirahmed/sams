@extends('layouts.app') 
@section('title', 'Administrator Dashboard')
@section('content')

@section('breadcrumbs')
    {{ Breadcrumbs::render('admin') }}
@endsection
<!-- begin row -->
<div class="row">
    <!-- begin col-3 -->
    @php 
        $colorCard = array("bg-green-darker", "bg-blue-darker", "bg-orange-darker", "bg-yellow-darker","bg-purple-darker");    
    @endphp
    @foreach($departments as $department)
    <div class="col-md-3 col-sm-6">
        <div class="widget widget-stats {{ $colorCard[array_rand($colorCard)] }}">
            <div class="stats-icon stats-icon-lg"><i class="fa fa-users fa-fw"></i></div>
            <div class="stats-title">{{ $department->name }}</div>
            <div class="stats-number">{{ count($department->information->pluck('id')) }}</div>
            <div class="stats-progress progress">
                <div class="progress-bar" style="width: 70.1%;"></div>
            </div>
            <div class="stats-desc">Better than last week (70.1%)</div>
        </div>
    </div>
    @endforeach
    <!-- end col-3 -->
</div>
<!-- end row -->

<!-- begin row -->
<div class="row">
        <!-- begin col-4 -->
    <div class="col-md-6">
        <!-- begin panel -->
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h4 class="panel-title"><i class="fa fa-users"></i> New Registered Students / Employees <span class="pull-right label label-success">{{ count($information) }}'s are new</span></h4>
            </div>
            <ul class="registered-users-list clearfix">
            @foreach($information as $information)
                <li>
                    <a href="javascript:;"><img src="{{ $information->photo }}" alt="" /></a>
                    <h4 class="username text-ellipsis">
                        {{ $information->name }}
                        <small>{{ $information->nationality }}</small>
                    </h4>
                </li>
            @endforeach
            </ul>
            <div class="panel-footer text-center">
                <a href="{{ route('informations.index') }}" class="btn btn-sm btn-default">View All</a>
            </div>
        </div>
        <!-- end panel -->
    </div>
    <!-- end col-4 -->

    <!-- begin col-4 -->
    <div class="col-md-6">
        <!-- begin panel -->
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h4 class="panel-title">Today's Schedule (Up Comming)</h4>
            </div>
            <div id="schedule-calendar" class="bootstrap-calendar"></div>
            <div class="list-group">
                <a href="#" class="list-group-item text-ellipsis">
                    <span class="badge badge-success">9:00 am</span> Attendance Reporting
                </a> 
                <a href="#" class="list-group-item text-ellipsis">
                    <span class="badge badge-primary">2:45 pm</span> Have a meeting with Teachers
                </a>
            </div>
        </div>
        <!-- end panel -->
    </div>
    <!-- end col-4 -->
    
</div>
<!-- end row -->

@endsection