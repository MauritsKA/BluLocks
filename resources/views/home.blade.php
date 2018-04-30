@extends('layouts.master')

@section('content')
<a id="top"></a>

<div class="cover">
   <video autoplay loop muted poster="screenshot.jpg" id="backgroundvid"><source src="{{url('/videos/teaser.mp4')}}" type="video/mp4"></video>
    
<div class="coveroverlay">
  <div class="container">

    <h1>Finally World's<span> Most Effective</span> Integrated <span>Bike Lock</span> Has Arrived</h1>

  </div>
</div>
</div>

<section class="projects section">
   <div class="container">
   <h3>Technology</h3>
    <p>BluLocks is an elegant system that fits neatly inside the saddle tube. The mechanism blocks the pedals and locks the plug-in chain in one smooth turn of the key. To access the lock you would have to breach the frame, making the bicycle worthless. We prelaunched the product in our BluLocks original bike.</p>
  </div>
</section>

<section class="publications section">
   <div class="container">
   <h3>For who?</h3>
 <p>Consumers, go to shop</p>
 <p>Companies, go to company section</p>
  </div>
</section>

<section class="practices section">
   <div class="container">
   <h3>Already adopted by</h3>
    <p>Company A,B, C slider</p>
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
