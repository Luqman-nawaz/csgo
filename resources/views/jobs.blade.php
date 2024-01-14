@extends('layouts.csgo')
@section('title') <title>MyBoost.GG - Current Job Offers</title> @endsection
@section('content')
    <x-navbar></x-navbar>
    
    <div class="csgo-jobs-hero-container">
        <div class="csgo-jobs-hero-section">
            <h2>Jobs</h2>
        </div>
    </div>
    <div class="csgo-jobs-card-container">
        <h2 style="text-align: center; color:white; margin:10px;"> No Job Openings </h2>
    </div>

    <x-footer></x-footer>
@endsection