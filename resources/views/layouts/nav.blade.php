<nav class="navbar navbar-expand-md navbar-light fixed-top">
<div class="container">
    
  <a class="navbar-brand" href="{{url('/')}}"><img  width="90" src="{{url('/images/logo2.png')}}"> BluLocks</a>
    
  <button class="navbar-toggler navbar-toggler-right custom-toggler menubutton" type="button" data-toggle="collapse" data-target="#Mynavbar" aria-controls="Mynavbar" aria-expanded="false" aria-label="Toggle navigation" onclick="cross(this)">
    <span>
      <div class="bar1"></div>
      <div class="bar2"></div>
      <div class="bar3"></div>
    </span>
  </button>

  <div class="collapse navbar-collapse " id="Mynavbar">
     <ul class="navbar-nav ml-auto ">
            <li class="nav-item">
               <a class="nav-link {{ Request::is('product') ? 'active' : '' }}" href="{{url('')}}/product">Tech</a>
            </li>
            <li class="nav-item">
               <a class="nav-link {{ Request::is('publications') ? 'active' : '' }}" href="{{url('')}}/publications">Companies</a>
            </li>
            <li class="nav-item">
               <a class="nav-link {{ Request::is('publications') ? 'active' : '' }}" href="{{url('')}}/publications">Shop</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('investors') ? 'active' : '' }}" href="{{url('')}}/investors">Investors</a>
            </li>
             <li class="nav-item">
               <a class="nav-link {{ Request::is('statistics') ? 'active' : '' }}" href="{{url('')}}/statistics">Team</a>
            </li>
              <li class="nav-item">
               <a class="nav-link {{ Request::is('contact') ? 'active' : '' }}" href="#bottom">Contact</a>
            </li>
          </ul>
      
   </div>
  </div>
</nav>
