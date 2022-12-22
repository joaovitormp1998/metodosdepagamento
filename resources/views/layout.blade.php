<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/metisMenu/3.0.7/metisMenu.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sidebar/0.2.2/css/sidebar.css" rel="stylesheet"/>
    <script href="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.5/css/perfect-scrollbar.css"
          rel="stylesheet"/>
    @yield('title')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
          integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/3594/3594363.png" sizes="16x16">

    <title>Minha Loja L9</title>
</head>
<body>
@include("menu")
@yield("pgto")
<div class="container-lg">
    <div class="row">
        @if($message=Session::get("ok"))
            <div class="col-12">
                <div class="alert alert-success">{{ $message }}</div>
            </div>
        @endif
        @if($message=Session::get("err"))
            <div class="col-12">
                <div class="alert alert-danger">{{ $message }}</div>
            </div>
        @endif
        @yield("conteudo")
    </div>
</div>
@yield("scriptjs")
@include("footer")
</body>
</html>
