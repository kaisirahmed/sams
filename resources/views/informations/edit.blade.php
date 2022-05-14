@extends('layouts.app')
@section('title','Informations Edit')
@section('content')

@section('breadcrumbs')
    {{ Breadcrumbs::render('informations.edit',$information) }}
@endsection
<!-- begin row -->
<div class="row">
    <!-- begin col-6 -->
    <div class="col-md-12">
        <!-- begin panel -->
        <div class="panel panel-inverse" data-sortable-id="form-stuff-1">
            <div class="panel-heading">
                <h4 class="panel-title"><i class="fa fa-info-circle"></i> @yield('title')</h4>
            </div> 
            @include('messages.message')
            <div class="panel-body">
                <form action="{{ route('informations.update', $information) }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                    {{ method_field('PUT') }}
                    @csrf
                    <div class="col-md-12"> 
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Departments</label>
                                <div class="col-md-9">
                                    <select class="form-control selectpickerDepertments" name="department_id">
                                        <option>Please Select</option>
                                        @foreach($departments as $department)
                                        <option value="{{ $department->id }}" @if($information->department_id == $department->id) selected @endif">{{ $department->name }}</option>
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
                                <label class="col-md-3 control-label">Account No.</label>
                                <div class="col-md-9">
                                    <input type="number" name="account_no" value="{{ $information->account_no }}" class="form-control @error('account_no') is-invalid @enderror" placeholder="Account No." min="0" required="required" disabled="disabled" autofocus/>
                                    @error('account_no')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Name</label>
                                <div class="col-md-9">
                                    <input type="text" name="name" value="{{ $information->name }}" class="form-control @error('name') is-invalid @enderror" placeholder="Name" required="required" autofocus/>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Gender</label>
                                <div class="col-md-9">
                                    <label class="radio-inline">
                                        <input type="radio" name="gender" value="male" @if($information->gender == 'male') checked @endif">
                                        Male
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="gender" value="female" @if($information->gender == 'female') checked @endif">
                                        Female
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="gender" value="other" @if($information->gender == 'other') checked @endif">
                                        Other
                                    </label>

                                    @error('gender')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Nationality</label>
                                <div class="col-md-9">
                                    <select class="form-control selectpickerNationality" name="nationality">
                                        <option disabled="disabled" selected="selected">Please Select</option>
                                        @foreach($nationalities as $nationality)
                                        <option value="{{ $nationality['nationality'] }}" @if($information->nationality == $nationality['nationality']) selected @endif">{{ $nationality["nationality"] }}</option>
                                        @endforeach
                                    </select>
                                    @error('nationality')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Photo</label>
                                <div class="col-md-9">
                                    <input type="file" class="form-control" id="image" placeholder="Photo">
                                    <input type="hidden" name="photo" id="image_uri" class="image-tag"> 
                                    @error('photo')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span> 
                                    @enderror
                                    <br>
                                    <div class="col-md-2" id="uploaded_image">	
                                        <img src="{{ $information->photo }}"  style="border:1px solid #c2c2c2;align:center;margin:auto;" height="100px" width="90px">
                                    </div>
                                </div>
                            </div>

                        </div>
                        
                        <div class="col-md-6">
                            
                            <div class="form-group">
                                <label class="col-md-3 control-label">Office Tel</label>
                                <div class="col-md-9">
                                    <input type="number" name="office_tel" min="0" value="{{$information->office_tel }}" class="form-control @error('office_tel') is-invalid @enderror" placeholder="Office Tel" autofocus/>
                                    @error('office_tel')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Title</label>
                                <div class="col-md-9">
                                    <input type="text" name="title" value="{{ $information->title }}" class="form-control @error('title') is-invalid @enderror" placeholder="Title" autofocus/>
                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Date of Birth (DOB)</label>
                                <div class="col-md-9">
                                    <input type="text" name="dob" value="{{ $information->dob }}" class="form-control" autocomplete="off" id="dob" placeholder="Date of Birth (DOB)">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Employment Date</label>
                                <div class="col-md-9">
                                    <input type="text" name="employment_date" value="{{ $information->employment_date }}" id="employmentDate" class="form-control @error('employment_date') is-invalid @enderror" placeholder="Employment Date" required="required" autocomplete="off"/>
                                    @error('employment_date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Card Number</label>
                                <div class="col-md-9">
                                    <input type="number" name="card_number" value="{{ $information->card_number }}" class="form-control @error('card_number') is-invalid @enderror" placeholder="Card Number" min="0" disabled="disabled" autofocus/>
                                    @error('card_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Mobile Number</label>
                                <div class="col-md-9">
                                    <input type="number" name="mobile_number" value="{{ $information->mobile_number }}" class="form-control @error('mobile_number') is-invalid @enderror" min="0" placeholder="Mobile Number" required="required" autofocus/>
                                    @error('mobile_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Address</label>
                                <div class="col-md-9">
                                    <input type="textarea" name="address" value="{{ $information->address }}" class="form-control @error('address') is-invalid @enderror" placeholder="Address" autofocus/>
                                    @error('address')
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

                        </div>

                    </div>                    
                </form>
            </div>
        </div>
        <!-- end panel -->
    </div>
</div>

<div id="uploadimageModal" class="modal" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
      		<div class="modal-header">
        		<button type="button" class="btn btn-sm btn-danger pull-right" data-dismiss="modal"><i class="fa fa-close"></i></button>
        		<h4 class="modal-title">Upload & Crop Image</h4>
      		</div>
      		<div class="modal-body">
        		<div class="row">
  					<div class="col-md-12 text-center">
						<div id="crop_image" style="width:100%; margin-top:30px"></div>
  					</div>
				</div>
      		</div>
      		<div class="modal-footer">
      			<button class="btn btn-warning crop_image">Crop & Upload</button>
      		</div>
    	</div>
    </div>
</div>
@include('informationAjax.create')
@endsection


