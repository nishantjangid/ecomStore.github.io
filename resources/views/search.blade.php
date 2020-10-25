@extends("master")

@section("content")

<!-- tranding product section -->
<div class="custom-product">
    <div class="row">
        <div class="col-md-4 col-12">
            <a href="">Filter</a>
        </div>
        <div class="col-md-6 col-12">
            <div class="tranding-wrapper">
                <div class="heading"><h4>Result for Product</h4></div>
                    <div class="productSpaces">
                        @foreach($products as $items)
                        <div class="searched-items">
                            <a href="detail/{{$items['id']}}">
                                <img class="tranding-image" src="{{$items['gallery']}}" alt="Los Angeles">
                                <div class="">
                                <h2>{{$items['name']}}</h2>
                                <h4>{{$items['description']}}</h4>
                                </div>            
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>    
            </div>    
    </div>
</div>

@endsection