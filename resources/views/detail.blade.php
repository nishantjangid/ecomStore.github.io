@extends("master")

@section("content")

<div class="container">
    <div class="row py-5">
        <div class="col-sm-12 col-md-6">
            <img class="detail-image" src="{{$productDetail['gallery']}}" alt="">
        </div>
        <div class="col-sm-12 col-md-6">
            <div class="product-detail">
                <a href="/">Go back</a>
                <div class="product-name">
                    <h3>{{$productDetail['name']}}</h3>
                    <h4>Price : {{$productDetail['price']}}</h4>
                    <h4>Category : {{$productDetail['category']}}</h4>
                    <p>{{$productDetail['description']}}</p>
                    <div class="actionBtn">
                        <form action="/add_to_cart"  method="post">
                            @csrf
                            <input type="hidden" name="product_id" value="{{$productDetail['id']}}">
                            <button class="btn btn-primary mr-2">Add to Cart</button>
                        </form>
                        <button class="btn btn-success">Buy Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection