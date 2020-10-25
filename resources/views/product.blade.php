@extends("master")

@section("content")


<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- The slideshow -->
  <div class="carousel-inner">
    @foreach($products as $items)
    <div class="carousel-item {{$items['id']==1?'active':''}}">
        <a href="detail/{{$items['id']}}">
            <img class="slider-img" src="{{$items['gallery']}}" alt="Los Angeles">
            <div class="carousel-caption">
                <h3>{{$items['name']}}</h3>
                <p>{{$items['description']}}</p>
            </div>      
        </a>

    </div>
    @endforeach
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>

<!-- tranding product section -->
<div class="tranding-wrapper">
    <div class="heading"><h1>Our Tranding Products</h1></div>
    <div class="productSpaces">
        @foreach($products as $items)
        <div class="tranding-items">
            <a href="detail/{{$items['id']}}">
                <img class="tranding-image" src="{{$items['gallery']}}" alt="Los Angeles">
                <div class="">
                <h4>{{$items['name']}}</h4>
                </div>            
            </a>
        </div>
        @endforeach
    </div>
</div>

@endsection