@extends(
'layouts.app')
@section('content')
   @if (session('passcode'))
    <form method="POST" action="{{url('apply')}}" enctype="multipart/form-data">
        @csrf
        <div id="application" class="container">
            <h2>Online Application</h2>
            <span class="errorMessage">
                @if (count($errors)>0)
                @foreach ($errors->all() as $error)                                
                        {{ $error }}                               
                @endforeach   
                @endif
            </span>  
            <div class="row firstRow">
                <div class="col-md-4">
                    <h5>First Name</h5>
                </div>
                <div class="col-md-8">
                   <input type="text" name="firstName" placeholder="First Name" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <h5>Last Name</h5>
                </div>
                <div class="col-md-8">
                   <input type="text" name="lastName" placeholder="Last Name" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <h5>Address</h5>
                </div>
                <div class="col-md-8">
                   <input type="text" name="address" placeholder="Address" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <h5>Marital Status</h5>
                </div>
                <div class="col-md-8 myRadio">
                    Single <input type="radio" name="maritalStatus" value="single" checked><br/>
                    Married <input type="radio" name="maritalStatus" value="married"><br/>
                    Divorced <input type="radio" name="maritalStatus" value="divorced"><br/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <h5>Educational Background</h5>
                </div>
                <div class="col-md-8">
                   <input type="text" name="education" placeholder="Educational Background" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <h5>Best Subjects</h5>
                </div>
                <div class="col-md-8 myRadio">
                    Mathematics <input type="checkbox" name="subjects[]" value="Mathematics"> &nbsp;&nbsp;&nbsp;&nbsp;Government <input type="checkbox" name="subjects[]" value="Government"> &nbsp;&nbsp;&nbsp;&nbsp;Art <input type="checkbox" name="subjects[]" value="Art"> <br/>
                    English <input type="checkbox" name="subjects[]" value="English"> &nbsp;&nbsp;&nbsp;&nbsp;Civic <input type="checkbox" name="subjects[]" value="Civic"> &nbsp;&nbsp;&nbsp;&nbsp;Computer <input type="checkbox" name="subjects[]" value="Computer"> <br/>
                    Science <input type="checkbox" name="subjects[]" value="Science"> &nbsp;&nbsp;&nbsp;&nbsp;History <input type="checkbox" name="subjects[]" value="History"> &nbsp;&nbsp;&nbsp;&nbsp;Agriculture <input type="checkbox" name="subjects[]" value="Agriculture"> <br/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <h5>Religion</h5>
                </div>
                <div class="col-md-8 myRadio">
                    Islam <input type="radio" name="religion" value="Islam" checked><br/>
                    Christianity <input type="radio" name="religion" value="Christianity"><br/>
                    Traditional <input type="radio" name="religion" value="Traditional"><br/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <h5>State of Origin</h5>
                </div>
                <div class="col-md-8 myRadio">                    
                    <select name="state" required>
                        <option value="">Select State</option>
                        @if (count($state)>0)
                            @foreach ($state as $item=>$value)
                                <option value="{{$value->name}}">{{$value->name}}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <h5>Date of Birth</h5>
                </div>
                <div class="col-md-8 myRadio">
                   <input type="date" name="dateOfBirth" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <h5>Image Upload</h5>
                </div>
                <div class="col-md-8 myRadio">
                   <input type="file" name="upload" required>
                </div>
            </div>
            <div class="row">                
                <div class="col-md-12 center">
                   <input type="submit" value="Submit Application">
                </div>
            </div>
            <input type="hidden" name="passcode" value="{{session('passcode')}}">
        </div>
    </form>
   @else
    <h2 class="center">You are not permitted to view this page</h2>
   @endif   
@endsection

