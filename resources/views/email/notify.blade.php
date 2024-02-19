<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KredimVarmı</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
          integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>
<body class="bg-light">
<div class="container">
    <h1 class="h3 fw-700">
        Yeni Müşteri
    </h1>
    <div class="card p-6 p-lg-10 space-y-4">
        <p>
            <b>Ad Soyad: </b> {{ $customer->name }}
        </p>
        <p>
            <b>Telefon: </b> {{ $customer->phone }}
        </p>
    </div>
    <a class="link" href="https://www.kredimvarmi.com">www.kredimvarmi.com</a>
</div>
</body>
</html>
