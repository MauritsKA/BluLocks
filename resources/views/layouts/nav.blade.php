<nav class="navbar navbar-expand-md navbar-light fixed-top">
<div class="container">
    
  <a class="navbar-brand" href="{{url('/')}}"><img  width="90" src="{{url('/images/logo2.png')}}"></a>
    
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
               <a class="nav-link {{ Request::is('tech') ? 'active' : '' }}" href="{{url('/tech')}}">Tech</a>
            </li>
            <li class="nav-item">
               <a class="nav-link {{ Request::is('shop') ? 'active' : '' }}" href="{{url('/shop')}}">Shop</a>
            </li>
             <li class="nav-item">
               <a class="nav-link {{ Request::is('team') ? 'active' : '' }}" href="{{url('/team')}}">Team</a>
            </li>
              <li class="nav-item">
               <a class="nav-link {{ Request::is('contact') ? 'active' : '' }}" href="#bottom">Contact</a>
            </li>
              <li class="nav-item">
              <div class="localebutton">
                <form class="form-inline" method="POST" id="localeform" action="{{url('/setlocale')}}">
                {{ csrf_field() }}    
                <select name="locale" id="locale"  class="form-control form-control-sm" onchange='this.form.submit()'>
                    <option value="nl">NL</option>
                    <option value="en">EN</option>
                </select>
                </form>
              <div>
            </li>
          </ul>
      
   </div>
  </div>
</nav>
