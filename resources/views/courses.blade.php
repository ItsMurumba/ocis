@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Course Entry Form</div>
                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('courseName') ? ' has-error' : '' }}">
                                <label for="courseName" class="col-md-4 control-label">Course Name</label>

                                <div class="col-md-6">
                                    <input id="courseName" type="text" class="form-control" name="courseName" value="{{ old('courseName') }}" required autofocus>

                                    @if ($errors->has('courseName'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('courseName') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('duration') ? ' has-error' : '' }}">
                                <label for="duration" class="col-md-4 control-label">Course Duration</label>

                                <div class="col-md-6">
                                    <input id="duration" type="number" class="form-control" name="duration" value="{{ old('duration') }}" required>

                                    @if ($errors->has('duration'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('duration') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
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
