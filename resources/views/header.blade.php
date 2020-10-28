<?php
use App\Http\Controllers\ProductController;

$total=0;
if(Session::has('user'))
{
  $total = ProductController::cartItem();

}
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">E-ComStore</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/myorders">Orders</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
      <form class="form-inline my-2 my-lg-0" action="/search">
        <input class="form-control mr-sm-2 search-box" name="query" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>      
    </ul>

    <ul class="nav navbar-nav navbar-right">
        <li class="nav-item"><a href="/cartList" class="nav-link">Cart({{$total}})</a></li>
        @if(Session::has('user'))
      <li class="nav-item dropdown dropleft">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          {{Session::get('user')['name']}}
        </a>
        <div class="dropdown-menu " aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/logout">Logout</a>
        </div>
      </li> 
      @else
        <li class="nav-item"><a href="/login" class="nav-link">Login</a></li>
      @endif       
    </ul>
  </div>
</nav>