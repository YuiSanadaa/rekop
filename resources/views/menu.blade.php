<!DOCTYPE html>
<html>
<head>
  <!-- Site made with Mobirise Website Builder v4.10.0, https://mobirise.com -->
  <style>
.card-indiv {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  border-radius: 5px;
}

.card-indiv:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.img-card {
  border-radius: 5px 5px 0 0;
  height: 250px;
}
</style>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.10.0, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/33834-3-coffee-logo-clipart-122x206.png" type="image/x-icon">
  <meta name="description" content="">
  <title>{{config('app.name')}}</title>
  <link rel="stylesheet" href="{{ asset('assets/web/assets/mobirise-icons/mobirise-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/tether/tether.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap-grid.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap-reboot.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/dropdown/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/animatecss/animate.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/socicon/css/styles.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/theme/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/mobirise/css/mbr-additional.css')}}">
</head>
<body>
  <section class="menu cid-rqNMOVg5Gb" once="menu" id="menu1-0">
    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
      <div class="menu-logo">
        <div class="navbar-brand">
          <span class="navbar-logo">
           <img src="assets/images/33834-3-coffee-logo-clipart-122x206.png" alt="Mobirise" title="" style="height: 3.8rem;">
         </span>
         <span class="navbar-caption-wrap"><a class="navbar-caption text-white" href="{{route('home')}}">Relasi Kopi</a></span>
       </div>
     </div>
     <div class="collapse navbar-collapse" id="navbarSupportedContent">  
      <span class="navbar-caption-wrap" style="padding-right: 30px"><a class="navbar-caption text-white display-4" href="{{url('/rekopmenu')}}">Menu</a></span>
      <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" href="">Artikel</a></span>
     </div>
  </nav>
</section>
<section class="features11 cid-rrj9BkYJOI" id="features11-8">
  <div class="container-fluid ">  
    <div class="row">
      @foreach($menu as $me)
        <div class="col-md-3">
          <div class="card-indiv">
            <img class="img-card" src="{{ asset('menu/'.$me->image) }}" alt="Avatar" style="width:100%">
            <div class="container">
              <h4><b>{{$me->name}}</b></h4>
              <h6>{{$me->beans}}</h6> 
              <p>Rp. {{$me->price}}</p> 
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>          
</section>
</body>
</html>