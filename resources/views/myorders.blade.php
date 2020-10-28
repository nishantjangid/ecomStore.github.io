@extends("master")

@section("content")

<!-- Cart List section -->


<div class="container">
            <div class="py-2">
                <h4>My orders</h4>
            </div>
        @foreach($myorders as $items)
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
                            <h4>Product Status : {{$items->status}}</h4>
                            <h4>Payment Method : {{$items->payment_method}}</h4>
                            <h4>Payment Status : {{$items->payment_status}}</h4>
                        </div>

                    </div>
                </div>        
            </div>        
        </div>
        @endforeach
</div>

@endsection