<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="initial-scale=1">
    <title>Financial Audit System: Administrator</title>
    <link href="/css/all.css" rel="stylesheet">
    <script src="/js/all.js"></script>
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">
</head>
<body>
@include('admin.partials.topMenu')
<div class="row">
    <div class="container-fluid">

        <div class="col-sm-3 col-md-2 sidebar">
            @include('admin.partials.sidebar')
        </div>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            @include('flash::message')

            @yield('content')
        </div>

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