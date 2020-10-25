<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>E-Comm Store</title>
    <link rel="stylesheet"  type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet"  type="text/css" href="{{ asset('css/style.css') }}">

<style>
.search-box
{
    width:200px;   
}
 .custom-login
 {
     height:500px;
     padding-top:100px;
 }
 /* product Page css */
 .carousel-item
 {
     text-align:center;
 }
 .slider-img
 {
     height:400px;
 }
 .carousel-caption
 {
    background:rgba(0,0,0,0.5);
 }
 .tranding-wrapper
 {
    padding:100px 0;
 }
 .heading
 {
     text-align:center;
     padding-bottom: 40px;
 }
.productSpaces
{
    display: flex;
    flex-direction: row;
    justify-content:center;
}
.productSpaces .tranding-items
{
    width:20%;
    text-align: center;
}
.productSpaces .tranding-image
{
    height:200px;
}

/* detail page css */
.detail-image
{
    height:200px;
}
.actionBtn
{
    display: flex;
}

/* search page css */
.searched-items
{

}

</style>
</head>
<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}
    <script src="{{ asset('js/jquery.min.js')}} "></script>
    <script src="{{ asset('js/bootstrap.min.js')}} "></script>
    <script>
    </script>
</body>
</html>