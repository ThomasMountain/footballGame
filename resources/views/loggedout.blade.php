<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>The Final Whistle</title>
    <link href="/css/all.css" rel="stylesheet">
    <script src="/js/all.js"></script>
    <link rel="icon" type="image/png" href="/favicon.ico">
</head>
<body>
<div class="row">
    <div class="container-fluid">

        @include('flash::message')

        @yield('content')
    </div>
</div>

@yield('footer')


<script>
    $('.datatable').dataTable();
    $('#flash-overlay-modal').modal();
    $('div.alert').not('.alert-important').delay(3000).slideUp(300);
</script>

</body>
</html>