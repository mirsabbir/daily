<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Reality Daily</title>

        <!-- Fonts -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css"> -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.7/css/mdb.min.css" />
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
       <!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark primary-color">

<!-- Navbar brand -->
<a class="navbar-brand" href="#">Reality Daily</a>

<!-- Collapse button -->
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
  aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<!-- Collapsible content -->
<div class="collapse navbar-collapse" id="basicExampleNav">

  <!-- Links -->
  <ul class="navbar-nav mr-auto">
    <li class="nav-item ">
      <a class="nav-link" href="#">Home
        <span class="sr-only">(current)</span>
      </a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="#">Shop</a>
      
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Videos</a>
    </li>

    <!-- Dropdown -->
    <!-- <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
        aria-expanded="false">Contact</a>
      <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item" href="#">Our goal</a>
        <a class="dropdown-item" href="#">About us</a>
        <a class="dropdown-item" href="#">Contact me</a>
      </div>
    </li> -->

  </ul>
  <!-- Links -->

  <form class="form-inline">
    <div class="md-form my-0">
      <!-- <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search"> -->
      
    </div>
  </form>
</div>
<!-- Collapsible content -->

</nav>
<!--/.Navbar-->




<div class="container" style="margin-top: 30px;">
  <div class="row">
    <div class="col-lg" style="position:relative;">
      <img src="{{asset('img/shirt.png')}}" alt="" height="516" width="512" style="position: relative;top:0;left:0;width:100%;">
      <div id= "im">
      <img :src="'/img/' + id +'.png'" alt="" height="516" width="512" style="position: absolute;top:14px;left:-5px;width:100%;">
      </div>
    </div>
    <div class="col-lg">
      <!-- Material form login -->
<div class="card">

<h5 class="card-header info-color white-text text-center py-4">
  <strong>Reality Daily T-shirt</strong>
</h5>

<!--Card content-->
<div class="card-body px-lg-5 pt-0">

  <!-- Form -->
  <form class="text-center" style="color: #757575;">

  <br>
  <label for="date">Please select your birthday</label>
 <input type="text" data-field="date" class="date form-control mb-4" placeholder="Birthdate" value="1995-04-16">

 <input type="text" id="sp" class="form-control" readonly>
  
    <div id="bt"> 
    <button type="button" onclick="go()" class="btn btn-md btn-outline-primary btn-rounded waves-effect">Calculate</button>

    </div>
    
    
    

  </form>
  <!-- Form -->

</div>

</div>
<!-- Material form login -->
    </div>
    
  </div>
</div>

    <style>
        .navbar{
            padding: 0.3rem 0.6rem;
        }
    </style>
<script src="{{asset('js/app.js')}}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.7/js/mdb.min.js"></script>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
$(".date").flatpickr();

</script>
<script>var d = new Vue({
            el: '#im',
            data: {
                id:101,
            }
        });
    function go(){
        var year = $('.date').val().substring(0,4);
        var p = ((2018-year)/73)*100;
        p = p | 0;
        if(p>100) p = 100;
        d.id = p;
        $('#sp').val('your birth year is - ' + year + ' your life percentage is - ' + p);
    }

</script>
    
    </body>
</html>
