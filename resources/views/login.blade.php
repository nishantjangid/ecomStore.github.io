@extends("master")

@section("content")

<div class="container custom-login">
    <div class="row">
        <div class="col-md-4  col-sm-12 offset-md-4 ">
            <form action="login" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control"  placeholder="Enter Your Email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control"  placeholder="Enter Your Password">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
            </form>        
        </div>
    </div>
</div>

@endsection