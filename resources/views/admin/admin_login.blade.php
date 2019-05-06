@extends('layouts.admin-layouts')

@section('title', 'Login | Audio Tube')
    
@section('content')

 <!-- Container -->
 <div id="container">
     <!-- Header -->
    <div id="header">
        <div id="branding"> 
             <a href="" class="logo-sub" title=""><img src="{{ asset('/img/audiotube-logo.png') }} " alt=""></a>
        </div>
    </div>
    <!-- END Header -->
    
    <!-- Content -->
    <div id="content" class="colM">
    
        <div id="content-main">
            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
            
                    {{-- Username --}}
                    <div class="form-row{{ $errors->has('id_username') ? ' has-error' : '' }}">
                        <label for="id_username" class="required">Username:</label>
                            
                         <input id="id_username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>

                                @if ($errors->has('id_username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('id_username') }}</strong>
                                    </span>
                                @endif
                    </div>
                    

                    {{-- Password --}}
                    <div class="form-row{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="id_password" class="required">Password:</label>
                        <input id="id_password" type="password" name="password" required>
                            @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                    </div>


                    {{-- Submit button  --}}
                    <div class="submit-row">
                        <label>&nbsp;</label>
                        <input type="submit" value="Log in">
                            <a class="btn btn-link" href="{{ route('password.request') }}">Forgot Your Password?</a>
                    </div>
                    
                    
            </form>
            <script type="text/javascript">document.getElementById('id_username').focus()</script>.
        </div>
        
        <br class="clear">
    </div>
    <!-- END Content -->
    </div> <!-- END Container -->
 <!-- Container -->
    
@endsection