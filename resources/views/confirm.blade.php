@extends(
'layouts.app')
@section('content')
@if(session('passcode'))
    <div id="application" class="container">
        <h2>Application Confirmation</h2>        
        <div class="row firstRow">
            <div class="col-md-12">
                <h5>Dear, {{session('firstName')}} {{session('lastName')}}</h5>
                <h5>Your application with the access code <b>{{session('passcode')}}</b> is successful.</h5>
                <h5 class="push">Kindly print application status and application details by clicking the buttons below</h5>
                <form method="POST" action="{{url('process')}}">
                    @csrf
                    <input type="hidden" name="passcode" value="{{session('passcode')}}">
                    <input type="submit" value="Application Status" name="submit">
                    <input type="submit" value="Application Details" name="submit">
                </form>
            </div>
        </div>
    </div>
@else
    <h2 class="center">You are not permitted to view this page</h2>
@endif
@endsection
