@extends('layouts.dashboard')

@section('activel', 'active')

@section('head', 'laboratorium')

@section('content')
	<div class="col-md-3"></div>
	<div class="col-md-6">
        <div class="card">
            <div class="card-header" data-background-color="purple">
                <h4 class="title">Tambah laboratorium</h4>
        		<p class="category">blablabla</p>
            </div>
        	<div class="panel-body">
        		{!! Form::open(['url' => ['admin/laboratorium'], 'method' => 'POST', 'class' => 'form-horizontal']) !!}
                
                    {{ csrf_field() }}
										
                    <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                    	{{ Form::label('Nama', null, ['class' => 'col-md-4 control-label']) }}
                        

                        <div class="col-md-6">
                        	{{ Form::text('nama', old('nama'), ['class' => 'form-control']) }}
                            

                            @if ($errors->has('nama'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('nama') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('Kalab', null, ['class' => 'col-md-4 control-label']) }}
                        

                        <div class="col-md-6">
                            <select class="form-control" name="kalabid">
                                @foreach ($users as $user)
                                    @if($user->jabatanid == 4)
                                        <option value="{{$user->id}}">{{$user->name}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            {{ Form::submit('Tambah laboratorium', ['class' => 'btn btn-success']) }}
                            
                        	<a class="btn btn-danger" href="{{url('admin/laboratorium')}}" role="button">Batal</a>
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection