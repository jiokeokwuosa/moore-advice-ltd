@extends('layouts.app')
@section('content')
    <!-- particles.js container -->
    <div id="particles-js"></div>
    <form method="POST" action="{{url('login-user')}}">
        @csrf
        <div class="container fly">
            <div class="row">
                <div class="col-md-12 title">
                    <h3>Login</h3>
                </div>
            </div>  
            <div class="row box">                                           
                <div class="col-md-6">   
                    <p class="p1">You can login to this application once you have been issued an access code by the system administrator</p>             
                </div>  
                <div class="col-md-6 partTwo">   
                    <div class="row">
                        <div class="col-md-12 access">
                            Access Code:
                        </div>
                    </div>   
                    <div class="row">
                        <div class="col-md-12">
                            <input type="text" name="passcode" placeholder="Enter Access Code" required>
                        </div>
                    </div> 
                    <div class="row">
                        <div class="col-md-12 center">
                            <input type="submit" value="submit">
                        </div>
                        <a href="{{url('recover')}}">Recover Application</a>
                        <span class="errorMessage">
                            @if (count($errors)>0)
                            @foreach ($errors->all() as $error)                                
                                    {{ $error }}                               
                            @endforeach   
                            @endif
                        </span>   
                    </div>               
                </div>             
            </div>          
            
        </div>
    </form>
@endsection

