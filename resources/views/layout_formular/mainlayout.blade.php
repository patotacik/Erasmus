
<!DOCTYPE html>

<html lang="en">

 <head>

@include('layout_formular.partials.head')

</head>

<body>


@include('layout.partials.nav')


@yield('content')

@include('layout_formular.partials.footer')

@include('layout_formular.partials.footer-scripts')
</body>
</html>