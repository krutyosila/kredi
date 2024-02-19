<!doctype html>
<html lang="tr" data-bs-theme="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('img/site.webmanifest') }}">
    <meta name="theme-color" content="#712cf9">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
          integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="{{ asset('css/theme.css') }}">
</head>
<body class="bg-new">
@include('components.navbar')
<div class="p-3">
    <div class="container">
        @yield('content')
        <div class="small py-3 text-center d-flex flex-column justify-center align-items-center">
            <div class="pb-3 small">
                <h6>Anlaşmalı Bankalar</h6>
                @foreach($banks as $bank)
                    <a href="{{ route('bank', ['bank' => $bank->slug]) }}" class="link-body-emphasis">
                        {{ $bank->name }}</a>,
                @endforeach
                için kredi çözümleri.
            </div>
            <div class="w-50 border-bottom"></div>
            <div class="pt-3">
                KredimVarmi &copy; {{ date('Y') }}
            </div>
        </div>
    </div>
</div>
@include('components.modal')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
<script src="{{ asset('js/theme.js') }}"></script>
</body>
</html>
