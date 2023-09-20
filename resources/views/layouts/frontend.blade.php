

<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Foodyxpress</title>
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.png')}}" />
    <meta name="theme-color" content="#ffffff">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&amp;family=Source+Sans+Pro:wght@200;300;400;600;700;900&amp;display=swap" rel="stylesheet">
    <link href="{{asset('vendors/iconsmind/iconsmind.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/remodal/remodal.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/remodal/remodal-default-theme.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/iconsmind/iconsmind.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/glightbox/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/hamburgers/hamburgers.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/theme.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/user.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
</head>
<body>
    <main>
        @include('includes.nav')
        @yield('content')
    </main>
    
  <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script> -->
  <script src="{{asset('vendors/popper/popper.min.js')}}"></script>
  <script src="{{asset('vendors/bootstrap/bootstrap.min.js')}}"></script>
  <script src="{{asset('vendors/anchorjs/anchor.min.js')}}"></script>
  <script src="{{asset('vendors/is/is.min.js')}}"></script>
  <script src="{{asset('vendors/prism/prism.js')}}"></script>
  <script src="{{asset('vendors/popper/popper.min.js')}}"></script>
  <script src="{{asset('vendors/bootstrap/bootstrap.min.js')}}"></script>
  <script src="{{asset('vendors/anchorjs/anchor.min.js')}}"></script>
  <script src="{{asset('vendors/is/is.min.js')}}"></script>
  <script src="{{asset('vendors/prism/prism.js')}}"></script>
  <script src="{{asset('vendors/overlayscrollbars/OverlayScrollbars.min.js')}}"></script>
  <script src="{{asset('vendors/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
  <script src="{{asset('vendors/fontawesome/all.min.js')}}"></script>
  <script src="{{asset('vendors/lodash/lodash.min.js')}}"></script>
  <script src="{{asset('vendors/countup/countUp.umd.js')}}"></script>
  <script src="{{asset('vendors/bigpicture/BigPicture.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyARdVcREeBK44lIWnv5-iPijKqvlSAVwbw&callback=initMap" async></script>
  <script src="{{asset('vendors/glightbox/glightbox.min.js')}}"></script>
  <script src="{{asset('vendors/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('vendors/isotope-packery/packery-mode.pkgd.min.js')}}"></script>
  <script src="https://smtpjs.com/v3/smtp.js"></script>
  <script src="{{asset('vendors/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
  <script src="{{asset('vendors/gsap/gsap.js')}}"></script>
  <script src="{{asset('vendors/gsap/customEase.js')}}"></script>
  <script src="{{asset('assets/js/theme.js')}}"></script>
  <script src="{{asset('assets/js/carousel.js')}}"></script>
  <script>
    $(document).ready(function() {
    $("#news-slider").owlCarousel({
        items : 3,
        itemsDesktop:[1199,3],
        itemsDesktopSmall:[980,2],
        itemsMobile : [600,1],
        navigation:true,
        navigationText:["",""],
        pagination:true,
        autoPlay:true
    });
});
  </script>
</body>

</html>
    