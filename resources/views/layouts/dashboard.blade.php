<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
  <div id="app">
    <div class="wrapper">
       
      <!-- Navbar -->
      @include('include.nav')
      <!-- /.navbar -->
 

      @include('include.sidebar')
      <div class="content-wrapper">
            <div class="content-header">

                    <div class="container-fluid">
                      <div class="row mb-2">
                        <div class="col-sm-6">
                          <h1 class="m-0 text-dark"></h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                          <ol class="breadcrumb float-sm-right">
                               @yield('breadcrumps')
                          </ol>
                        </div><!-- /.col -->
                      </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                  </div>
            <!-- Main content -->
            <div class="content">
                @yield('content')
            </div>
      </div>
      <!-- Content Wrapper. Contains page content -->
      <!-- /.content-wrapper -->

      <!-- Main Footer -->
      @include('include.footer')
      
    </div>
  </div>

  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->
  <script src="{{ asset('js/app.js') }}" ></script>

  @yield('custom_script')

</body>


</html>