@extends("master")

@section("content")

<!-- Cart List section -->


<div class="container">
            <div class="py-2">
                <h4>Resut for Products</h4>
                <a class="btn btn-success my-3" href="/ordernow">Order Now</a>
            </div>
        @foreach($products as $items)
        <div class="pt-3">
            <div class="row pb-5" style="border-bottom:2px solid #ccc;">
                <div class="col-sm-12 col-md-4">
                    <img class="detail-image" src="{{$items->gallery}}" title="{{$items->name}}">
                </div>
                <div class="col-sm-12 col-md-8">
                    <div class="product-detail">
                        <div class="product-name">
                            <h3>{{$items->name}}</h3>
                            <h4>Price : {{$items->price}}</h4>
                            <h4>Category : {{$items->category}}</h4>
                            <p>{{$items->name}}</p>
                        </div>
                        <div class="removeBtn">
                            <a href="/removecart/{{$items->cart_id}}"class="btn btn-danger">Remove from cart</a>
                        </div>
                    </div>
                </div>        
            </div>        
        </div>
        @endforeach
</div>

@endsection