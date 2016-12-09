@if (Session::has('dsuccess'))
	<div class="alert alert-success fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <span><b> Success - </b> {{ Session::get('dsuccess') }}</span>
    </div>
@elseif (Session::has('csuccess'))
	<div class="alert alert-success fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <span><b> Success - </b> {{ Session::get('csuccess') }}</span>
    </div>
@elseif (Session::has('usuccess'))
	<div class="alert alert-success fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <span><b> Success - </b> {{ Session::get('usuccess') }}</span>
    </div>
@endif