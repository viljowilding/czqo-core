@extends('layouts.master')
@section('title', 'EuroSounds - ')
@section('description', 'An immersive and realistic sound package for the Euroscope ATC Client.')
@section('content')
<div class="container py-4">
    <h1 class="font-weight-bold blue-text">EuroSounds</h1>
    <h3 class="font-weight-bold blue-text">An immersive and realistic sound package for the Euroscope ATC Client.</h3>
    <hr>
    <p>Created by Andrew Ogden.</p>
    <a href="hhttps://resources.ganderoceanic.com/files/eurosounds/eurosounds-8apr20.zip" role="button" class="btn btn-success mb-4"><i class="fas fa-cloud-download-alt"></i>&nbsp;Download EuroSounds</a>
    <h4 class="font-weight-bold blue-text">Installation Instructions</h4>
    <h5>For individuals:</h5>
    <ul>
        <li>1. Navigate to Documents\Euroscope\Sounds</li>
        <li>2. Extract the entire Sounds.zip folder into the Euroscope\Sounds folder and overwrite all existing .wav files. There should be 20 of these sound files.</li>
    </ul>
    <h5>For Sector Packages:</h5>
    <ul>
    <li>1. Create a 'sounds' folder within the root directory of the package.</li>
    <li>2. Paste the entire contents of the Sounds.zip file into this new 'sounds' folder. There should be 20 .wav files.</li>
    </ul>
    <p>
        For any questions in relation to Eurosounds, please email <a href="mailto:a.ogden@vatcan.ca">a.ogden (at) vatcan.ca.</a>
    </p>
    <p>
        This package is free to use. Redistribution (for example within Euroscope sector packages) under this license is permitted, however please provide a hyperlink to this webpage and indicate if any modifications were made to the original product.
    </p>
    <p>
This package is licensed under Creative Commons. Copyright ©️ 2018-2020 - Some Rights Reserved
    </p>
</div>
@endsection
