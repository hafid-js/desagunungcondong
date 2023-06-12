
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Sistem Informasi Desa Gunung Condong</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{  asset('/stisla/assets/modules/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{  asset('/stisla/assets/modules/fontawesome/css/all.min.css')}}">

  <!-- CSS Libraries -->
  @stack('css_vendor')

  @stack('css')
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{  asset('/stisla/assets/css/style.css')}}">
  <link rel="stylesheet" href="{{  asset('/stisla/assets/css/components.css')}}">
  <link
  href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css"
  rel="stylesheet"  type='text/css'>





<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body style=" zoom: 0.8;">
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      @includeIf('layouts.partials.header')
      <div class="main-sidebar sidebar-style-2">
        @includeIf('layouts.partials.sidebar')
      </div>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>@yield('title')</h1>
                <div class="section-header-breadcrumb">
                    @section('breadcrumb')
                    <div class="breadcrumb-item active"><a href="#">Home</a></div>
                    @show
                </div>
              </div>
            @yield('content')
        </section>
      </div>
      @includeIf('layouts.partials.footer')
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="{{  asset('/stisla/assets/modules/jquery.min.js')}}"></script>
  <script src="{{  asset('/stisla/assets/modules/popper.js')}}"></script>
  <script src="{{  asset('/stisla/assets/modules/tooltip.js')}}"></script>
  <script src="{{  asset('/stisla/assets/modules/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{  asset('/stisla/assets/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
  <script src="{{  asset('/stisla/assets/modules/moment.min.js') }}"></script>
  <script src="{{  asset('/stisla/assets/js/stisla.js')}}"></script>

  <!-- JS Libraies -->

  <!-- Page Specific JS File -->

  @stack('scripts_vendor')

  @stack('scripts')

  <!-- Template JS File -->

  <script src="{{  asset('/stisla/assets/js/scripts.js')}}"></script>
  <script src="{{  asset('/stisla/assets/js/custom.js')}}"></script>


</body>
</html>
