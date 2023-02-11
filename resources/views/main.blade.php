<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Alkhumra</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{asset('assets/favicon.ico')}}" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{asset( 'css/styles.css')}}" rel="stylesheet" />
</head>

<body>
    <!-- Responsive navbar-->
   @include('navbar')
    <!-- Page header with logo and tagline-->
    <!-- header class="py-5 bg-light border-bottom mb-4">
            <div class="container">
                <div class="text-center my-5">
                    <h1 class="fw-bolder">Welcome to Blog Home!</h1>
                    <p class="lead mb-0">A Bootstrap 5 starter layout for your next blog homepage</p>
                </div>
            </div>
        </header -->
    <!-- Page content-->
    <br>
    <div class="container">
        <div class="row justify-content-around">
            <!-- Blog entries-->
            <div class="col-lg-8">

                <!-- Nested row for non-featured blog posts-->
                @yield('content')
                <!-- Pagination-->
               
            </div>
           
        </div>
    </div>
    <!-- Footer-->
  @include('footer')

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->


</body>

</html>
