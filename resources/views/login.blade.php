@extends("master")

@section("content")

<div class="container custom-login">
    <div class="row">
        <div class="col-md-4  col-sm-12 offset-md-4 ">
            <form>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>        
        </div>
    </div>
</div>

@endsection