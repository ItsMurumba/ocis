@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Students Registration Form</div>
                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="student">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">FirstName</label>

                                <div class="col-md-6">
                                    <input id="fName" type="text" class="form-control" name="fName" value="{{ old('fName') }}" required autofocus>

                                    @if ($errors->has('fName'))
                                        <span class="help-block">
                                        <strong style="color: red">{{ $errors->first('fName') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">LastName</label>

                                <div class="col-md-6">
                                    <input id="lName" type="text" class="form-control" name="lName" value="{{ old('lName') }}" required autofocus>

                                    @if ($errors->has('lName'))
                                        <span class="help-block">
                                        <strong style="color: red">{{ $errors->first('lName') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong style="color: red">{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('dob') ? ' has-error' : '' }}">
                                <label for="dob" class="col-md-4 control-label">Date of Birth</label>

                                <div class="col-md-6">
                                    <input id="dob" type="date" class="form-control" name="dob" value="{{ old('dob') }}" required>

                                    @if ($errors->has('dob'))
                                        <span class="help-block">
                                        <strong style="color: red">{{ $errors->first('dob') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('doa') ? ' has-error' : '' }}">
                                <label for="doa" class="col-md-4 control-label">Date of Admission</label>

                                <div class="col-md-6">
                                    <input id="doa" type="date" class="form-control" name="doa" value="{{ old('doa') }}" required>

                                    @if ($errors->has('doa'))
                                        <span class="help-block">
                                        <strong style="color: red">{{ $errors->first('doa') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('courses') ? ' has-error' : '' }}">
                                <label for="courses" class="col-md-4 control-label">Course</label>

                                <div class="col-md-6">
                                    {{ Form::select('courses', $courses, null,  ['class' => 'form-control']) }}
                                    @if ($errors->has('courses'))
                                        <span class="help-block">
                                        <strong style="color: red">{{ $errors->first('courses') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            @if(Session::has('message'))
                                <div class="alert alert-success alert-dismissible">
                                    <a href="#" class="alert-link close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <span class="glyphicon glyphicon-ok"></span><em> {!! session('message') !!}</em>
                                </div>
                            @endif
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Register
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
