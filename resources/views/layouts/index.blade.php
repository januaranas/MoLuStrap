<!DOCTYPE html>
<html lang="en">

<head>
    @section('header') @include('layouts.header') @show
</head>

<body>
    @section('nav') @include('layouts.nav') @show
    <div class="container">
        @yield('content')
    </div>
   
    
    @section('footer') @include('layouts.footer') @show
</body>

</html>