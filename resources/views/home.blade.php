@extends('layouts.master')

@section('content')

<div class="cover">
   <video autoplay loop muted poster="screenshot.jpg" id="backgroundvid"><source src="{{url('/videos/teaser.mp4')}}" type="video/mp4"></video>
    
<div class="coveroverlay">
  <div class="container">

    <h1>World's<span> Safests</span> Bike Lock Has Arrived</h1>

  </div>
</div>
</div>

<section class="projects section">
   <div class="container">
   <h3>How does it work?</h3>
    <p>BluLocks is an elegant system that fits neatly inside the saddle tube. The mechanism blocks the pedals and locks the plug-in chain in one smooth turn of the key. To access the lock you would have to breach the frame, making the bicycle worthless. We prelaunched the product in our BluLocks original bike.</p>
  </div>
</section>

<section class="publications section">
   <div class="container">
   <h3>Get your own lock / bike</h3>
 <p>Link to shop</p>
  </div>
</section>

<section class="practices section">
   <div class="container">
   <h3>Media section</h3>
    <p>Pictures/</p>
  </div>
</section>

<section class="statistics section">
   <div class="container">
   <h3>Advantages</h3>
    <p>World's best patented bike theft protection</p>
    <p>Designed to be fitted in any bike</p>
  </div>
</section>


@endsection
