@extends('layouts.app')

@section('content')
<div class="container">
    <script>
        $(document).ready(function(){
            $('[data-toggle="popover"]').popover({html:true});
        });
    </script>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="student_id" class="col-md-4 control-label">Student ID</label>
                            <div class="col-md-6">
                                <input id="student_id" type="text" class="form-control" name="student_id" value="{{ old('student_id') }}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
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
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="mac_address" class="col-md-4 control-label">Mac Address</label>
                            <div class="col-md-5">
                                <input id="mac_address" type="text" class="form-control" name="mac_address" value="{{ old('mac_address') }}" required autofocus>
                            </div>
                            <div class="col-md-1">
                                <a href="#" data-toggle="popover" title="ดูยังไง" data-placement="bottom" data-content="<a target='_blank' href='http://wifi.eng.cmu.ac.th/?page_id=99'>จิ้มเลย</a>">
                                    <b style="font-size: 22px">?</b>
                                </a>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="os" class="col-md-4 control-label">Operating System</label>
                            <div class="col-md-6">
                                {!! Form::select('os', ['android' => 'Android', 'ios' => 'iOS', 'windows phone' => 'Windows Phone', 'blackberry' => 'BlackBerry', 'not SmartPhone' => 'Not SmartPhone'], null, ['class' => 'form-control', 'placeholder' => 'pick os...']) !!}
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
