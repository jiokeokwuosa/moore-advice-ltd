@extends('layouts.app')
@section('content')
    <!-- particles.js container -->
    <div id="particles-js"></div>
    <form method="POST" action="{{url('recover')}}">
        @csrf
        <div class="container fly">
            <div class="row">
                <div class="col-md-12 title">
                    <h3>Recover Application</h3>
                </div>
            </div>  
            <div class="row box">                                           
                <div class="col-md-6">   
                    <p class="p1">Kindly put the access code you used to make the application and we will fish it out for you.</p>             
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
                        <a href="{{url('/')}}">Return to homepage</a>
                        <span class="errorMessage">
                            @if (session('error')) 
                                {{ session('error') }} 
                            @endif
                        </span>   
                    </div>               
                </div>             
            </div>          
            
        </div>
    </form>
@endsection

