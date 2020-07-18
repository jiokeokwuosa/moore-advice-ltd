@extends('layouts.app')
@section('content')

    <div id="application" class="container">
        <h2>Applicant's Details</h2>        
        <div class="row firstRow">            
            <div class="col-md-12">
                <img src="./assets/img/{{$user->upload}}" alt="application pix">
                <h5>Dear, {{$user->firstName}} {{$user->lastName}}, your application details has been received</h5>
                <h5>Your access code is {{$user->passcode}}. Kindly go through the details.</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <h5>Address</h5>
            </div>
            <div class="col-md-8">
                <h5>{{$user->address}}</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <h5>Marital Status</h5>
            </div>
            <div class="col-md-8">
                <h5>{{$user->maritalStatus}}</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <h5>Education Background</h5>
            </div>
            <div class="col-md-8">
                <h5>{{$user->education}}</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <h5>Religion</h5>
            </div>
            <div class="col-md-8">
                <h5>{{$user->religion}}</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <h5>State of Origin</h5>
            </div>
            <div class="col-md-8">
                <h5>{{$user->state}}</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <h5>Date of Birth</h5>
            </div>
            <div class="col-md-8">
                <h5>{{$user->dateOfBirth}}</h5>
            </div>
        </div>
    </div>

