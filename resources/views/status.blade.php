@extends('layouts.app')
@section('content')

    <div id="application" class="container">
        <h2>Applicant's status</h2>        
        <div class="row firstRow">            
            <div class="col-md-12">
                <img src="./assets/img/{{$user->upload}}" alt="application pix">
                <h5>I, {{$user->firstName}} {{$user->lastName}} applied with the application code <b>{{$user->passcode}}</b></h5>
                <h5>I live at {{$user->address}} and was born on {{$user->dateOfBirth}}</h5>
                <h5>My favourite subjects are {{$user->subjects}} </h5>                
            </div>
        </div>
    </div>

