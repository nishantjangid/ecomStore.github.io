@extends("master")

@section("content")

<!-- Cart List section -->


<div class="container">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <table class="table">
                <tbody>
                <tr>
                    <td>Amount</td>
                    <td>$ {{$total}}</td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>Delivery</td>
                    <td>$ 10</td>
                </tr> 
                <tr>
                    <td>Total Amount</td>
                    <td>$ {{$total+10}}</td>
                </tr>                                    
                </tbody>
            </table>  
            <div class="py-5">
                <form action="/orderplace" method="post">
                    <div class="form-group">
                    @csrf
                        <label for="email">Full Address:</label>
                        <textarea name="address" class="form-control" id="" placeholder="Enter your full address..."></textarea>
                    </div>
                    <div class="form-group">
                        <label>Payment Method:</label> <br>
                        <input type="radio" value="cash" name="payment"> Online Payment
                        <input type="radio" value="cash" name="payment"> EMI Payment
                        <input type="radio" value="cash" name="payment"> Cash on Delivery
                    </div>

                    <button type="submit" class="btn btn-primary">Order Now</button>
                </form>            
            </div>                       
        </div>
    </div>    
</div>

@endsection