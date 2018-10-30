@extends('layouts.master')

@section('content')

<section class="topcover">
  <div class="topcoveroverlay"></div>
</section>

<section class="shop section">
   <div class="container">
   <h3>Shop</h3>
    <p>Grab the opportunity to be the first with a custom BluLocks fitted into your own bike or be one of the last to receive the BluLocks original!</p>

    <h5>BluLocks original</h5>
    <div class="row"> 

    <div class="col-sm" style="height:290px;">
     <img src="{{url('/images/redwhite.jpg')}}" alt="Red-White" height="200" style="border-radius: 25px;">
      <div style="width:200px;">
      <p style="float: left;">Red White </br>  &euro;449</p>
      <p style="float: right;"><i>1 left</i></p>
    </div>

     <a style="position: absolute; bottom: 0px; left:15px;" class="btn btn-primary" href="{{url('/order')}}" role="button">Order</a>
    </div>

    <div class="col-sm" style="height:290px;">
      <img src="{{url('/images/bluewhite.jpg')}}" alt="Blue-White" height="200" style="border-radius: 25px;">
       <div style="width:200px;">
      <p style="float: left;">Blue White</br>  &euro;449</p>
      <p style="float: right;"><i>2 left</i></p>
    </div>

     <a style="position: absolute; bottom: 0px; left:15px;" class="btn btn-primary" href="{{url('/order')}}" role="button">Order</a>
    </div>

    <div class="col-sm" style="height:290px;">
     <img src="{{url('/images/redblack.jpg')}}" alt="Red-Black" height="200" style="border-radius: 25px;">
     <div style="width:200px;">
      <p style="float: left;">Red Black</br>  &euro;449</p>
      <p style="float: right;"><i>2 left</i></p>
    </div>

     <a style="position: absolute; bottom: 0px; left:15px;" class="btn btn-primary" href="{{url('/order')}}" role="button">Order</a>
    </div>

    <div class="col-sm" style="height:290px;">
      <img src="{{url('/images/blueblack.jpg')}}" alt="Blue-Black" height="200" style="border-radius: 25px;">
      <div style="width:200px;">
      <p style="float: left;">Blue Black</br>  &euro;449</p>
      <p style="float: right;"><i>out of stock</i></p>
    </div>

     <a style="position: absolute; bottom: 0px; left:15px;" class="btn btn-primary" href="{{url('/order')}}" role="button">Order</a>
    </div>
    </div>

    <br>
    <h5>BluLocks retrofit</h5>
    <div class="row">
    <div class="col-sm-3" style="height:290px;" >
      <img src="{{url('/images/lock.jpg')}}" alt="Lock" height="200" style="border-radius: 25px;">

    <div style="width:200px;">
      <p style="float: left;">Lock pre-order</br>  &euro;95 (&euro;45 deposit)</p>
      <p style="float: right;"><i>100 left</i></p>
    </div>

     <a style="position: absolute; bottom: 0px; left:15px;" class="btn btn-primary" href="{{url('/order')}}" role="button">Order</a>
    </div>
  </div>
</section>


@endsection
