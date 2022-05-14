<div id="sidebar" class="sidebar">
    <!-- begin sidebar scrollbar -->
    <div data-scrollbar="true" data-height="100%">
        <!-- begin sidebar user -->
        <ul class="nav">
            <li class="nav-profile">
                <div class="image">
                    <a href="javascript:;"><img src="{{ asset('assets/img/user-3.jpg') }}" alt="{{ auth()->user()->name }}" /></a>
                </div>
                <div class="info">
                    {{ auth()->user()->name }}
                    <small>{{ implode(', ', auth()->user()->roles()->get()->pluck('name')->toArray()) }}</small>
                </div>
            </li>
        </ul>
        <!-- end sidebar user -->
        <!-- begin sidebar nav -->
        <ul class="nav">
            <li class="nav-header">Navigation</li>
            <li class="{{ Route::currentRouteName() === 'admin' ? 'active' : '' }}">
                <a href="{{ route('admin') }}">
                    <i class="fa fa-laptop"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            @can('hasAdministratorAccess')
            <li class="has-sub {{ (Request::is('user/*') || Request::is('user')) ? 'active' : '' }}">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="fa fa-key"></i>
                    <span>Users</span>
                </a>
                <ul class="sub-menu">
                    <li class="{{ Route::currentRouteName() === 'user.create' ? 'sub-active' : '' }}"><a href="{{ route('user.create') }}">Create</a></li>
                    <li class="{{ Route::currentRouteName() === 'user.index' ? 'sub-active' : '' }}"><a href="{{ route('user.index') }}">All User</a></li>
                </ul>
            </li>
            @endcan
            <li class="has-sub {{ (Request::is('departments/*') || Request::is('departments')) ? 'active' : '' }}">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="fa fa-th"></i>
                    <span>Departments</span>
                </a>
                <ul class="sub-menu">
                    <li class="{{ Route::currentRouteName() === 'departments.create' ? 'sub-active' : '' }}"><a href="{{ route('departments.create') }}">Create</a></li>
                    <li class="{{ Route::currentRouteName() === 'departments.index' ? 'sub-active' : '' }}"><a href="{{ route('departments.index') }}">All Department</a></li>
                </ul>
            </li>

            <li class="has-sub {{ (Request::is('informations/*') || Request::is('informations')) ? 'active' : '' }}">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="fa fa-info-circle"></i> 
                    <span>Informations</span>
                </a>    
                <ul class="sub-menu">
                    <li class="{{ Route::currentRouteName() === 'informations.create' ? 'sub-active' : '' }}"><a href="{{ route('informations.create') }}">Create</a></li>
                    <li class="{{ Route::currentRouteName() === 'informations.index' ? 'sub-active' : '' }}"><a href="{{ route('informations.index') }}">All Information</a></li>
                </ul>
            </li>

            <li class="has-sub {{ (Request::is('attendance/*') || Request::is('attendances')) ? 'active' : '' }}">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>    
                    <i class="fa fa-th-list"></i>
                    <span>Attendances</span>
                </a>
                
                <ul class="sub-menu">
                    <li class="{{ Route::currentRouteName() === 'attendance.index' ? 'sub-active' : '' }}"><a href="{{ route('attendance.index') }}">All Attendance</a></li>
                </ul>
            </li>

            <li class="has-sub {{ (Request::is('timetable/*') || Request::is('timetable') || Request::is('rounding')) ? 'active' : '' }}">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="fa fa-history"></i>
                    <span>TimeTable</span>
                </a>
                
                <ul class="sub-menu">
                    <li class="{{ Route::currentRouteName() === 'timetable.index' ? 'sub-active' : '' }}"><a href="{{ route('timetable.index') }}">All Timetable</a></li>
                    <li class="{{ Route::currentRouteName() === 'timetable.create' ? 'sub-active' : '' }}"><a href="{{ route('timetable.create') }}">General Settings</a></li>
                    <li class="{{ Route::currentRouteName() === 'rounding.index' ? 'sub-active' : '' }}"><a href="{{ route('rounding.index') }}">Rounding Settings</a></li>
                </ul>
            </li>

            <li class="has-sub {{ (Request::is('report/*') || Request::is('report')) ? 'active' : '' }}">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="fa fa-2x fa-book"></i>
                    <span>Reports</span>
                </a>
                <ul class="sub-menu">
                    <li class="{{ Route::currentRouteName() === 'report.custom' ? 'sub-active' : '' }}"><a href="{{ route('report.custom') }}">Custom</a></li>
                    <li class="{{ Route::currentRouteName() === 'report.daily' ? 'sub-active' : '' }}"><a href="{{ route('report.daily') }}">Daily</a></li>
                    <li class="{{ Route::currentRouteName() === 'report.daliy' ? 'sub-active' : '' }}"><a href="{{ route('report.daily') }}">Early Out</a></li>
                    <li class="{{ Route::currentRouteName() === 'report.daily' ? 'sub-active' : '' }}"><a href="{{ route('report.daily') }}">Late Arrival</a></li>
                    <li class="{{ Route::currentRouteName() === 'report.absence' ? 'sub-active' : '' }}"><a href="{{ route('report.absence') }}">Absence</a></li>
                </ul>
            </li>

            <!-- begin sidebar minify button -->
            <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
            <!-- end sidebar minify button -->
        </ul>
        <!-- end sidebar nav -->
    </div>
    <!-- end sidebar scrollbar -->
</div>
<div class="sidebar-bg"></div>