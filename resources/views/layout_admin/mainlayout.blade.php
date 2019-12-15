
<!DOCTYPE html>

<html lang="en">

 <head>

@include('layout_admin.partials.head')

</head>

<body>


@include('layout_admin.partials.nav')


@yield('content')

@include('layout_admin.partials.footer')

@include('layout_admin.partials.footer-scripts')
</body>
</html>