@extends('layouts.app')
@section('title', 'Information')
@section('content') 

@section('breadcrumbs')
    {{ Breadcrumbs::render('informations.show',$information) }}
@endsection

<div class="profile-container">
    <div class="panel panel-inverse" data-sortable-id="form-stuff-1">
        <div class="panel-heading">
            <h4 class="panel-title"><i class="fa fa-info-circle"></i> @yield('title') of <span class="label label-warning">{{ ucfirst($information->name) }}</span></h4>
        </div> 
        <div class="panel-body">
            <!-- begin profile-section -->
            <div class="profile-section">
                <!-- begin profile-left -->
                <div class="profile-left">
                    <!-- begin profile-image -->
                    <div class="profile-image">
                        <img src="{{ $information->photo }}" />
                        <i class="fa fa-user hide"></i>
                    </div>
                    <!-- end profile-image -->
                    <!-- <div class="m-b-10">
                        <a href="#" class="btn btn-warning btn-block btn-sm">Change Picture</a>
                    </div> -->
                    <!-- begin profile-highlight -->
                    <!-- <div class="profile-highlight">
                        <h4><i class="fa fa-cog"></i> Only My Contacts</h4>
                        <div class="checkbox m-b-5 m-t-0">
                            <label><input type="checkbox" /> Show my timezone</label>
                        </div>
                        <div class="checkbox m-b-0">
                            <label><input type="checkbox" /> Show i have 14 contacts</label>
                        </div>
                    </div> -->
                    <!-- end profile-highlight -->
                </div>
                <!-- end profile-left -->
                <!-- begin profile-right -->
                <div class="profile-right">
                    <!-- begin profile-info -->
                    <div class="profile-info">
                        <!-- begin table -->
                        <div class="table-responsive">
                            <table class="table table-profile">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>
                                            <h4>{{ ucfirst($information->name) }}</h4>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="highlight">
                                        <td class="field">Account No.</td>
                                        <td>{{ $information->account_no }}</td>
                                    </tr>

                                    <tr class="divider">
                                        <td colspan="2"></td>
                                    </tr>

                                    <tr>
                                        <td class="field">Mobile</td>
                                        <td><i class="fa fa-mobile fa-lg m-r-5"></i> {{ $information->mobile_number }} </td>
                                    </tr>
                                    
                                    <tr>
                                        <td class="field">Office</td>
                                        <td>{{ $information->office_tel }}</td>
                                    </tr>
                                    <tr class="divider">
                                        <td colspan="2"></td>
                                    </tr>
                                    
                                    <tr class="divider">
                                        <td colspan="2"></td>
                                    </tr>

                                    <tr class="highlight">
                                        <td class="field">Title</td>
                                        <td> {{ ucfirst(Str::upper($information->title)) }} </td>
                                    </tr>
                                
                                    <tr>
                                        <td class="field">Nationality</td>
                                        <td> {{ $information->nationality }} </td>
                                    </tr>

                                    <tr>
                                        <td class="field">Employment Date</td>
                                        <td> {{ date('d F, Y', strtotime($information->employment_date)) }} </td>
                                    </tr>

                                    <tr>
                                        <td class="field">Gender</td>
                                        <td> {{ ucfirst($information->gender) }} </td>
                                    </tr>

                                    <tr>
                                        <td class="field">Birthdate</td>
                                        <td> {{ date('d F, Y', strtotime($information->dob)) }} </td>
                                    </tr>
                                    
                                    <tr>
                                        <td class="field">Address</td>
                                        <td> {!! ucfirst($information->address) !!} </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- end table -->
                    </div>
                    <!-- end profile-info -->
                </div>
                <!-- end profile-right -->
            </div>
        </div>
    </div>
    <!-- end profile-section -->
</div>
@endsection