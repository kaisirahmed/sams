@if ($message = Session::get('success'))
<div class="alert alert-success alert-block fade in">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <h5>{{ $message }}</h5>
</div>
@endif

@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block fade in">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <h5>{{ $message }}</h5>
</div>
@endif

@if ($message = Session::get('warning'))
<div class="alert alert-warning alert-block fade in">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <h5>{{ $message }}</h5>
</div>
@endif

@if ($message = Session::get('info'))
<div class="alert alert-info alert-block fade in">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <h5>{{ $message }}</h5>
</div>
@endif

@if ($errors->any())
<div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert">×</button>
    Check errors where is that :)
</div>
@endif