<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>


<div id="wrapper">
    @include('includes.nav')
</div>

<div id="page-wrapper">

@yield('content')
<!-- /#page-wrapper -->
</div>

<footer class="row">
    @include('includes.footer')
</footer>


</body>
</html>