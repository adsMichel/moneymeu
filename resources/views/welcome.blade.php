<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Profle Card UI Design | CoderGirl </title>
    <!---Custom Css File!--->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <section class="main" style="background-image: url({{ asset('assets/img/back.jpg') }});">
        <div class="profile-card">
            <div class="data">
                <h2>Mentos</h2>
                <span>Crazy Fruits</span>
            </div>
            <div class="image">
                <img src="{{ asset('assets/img/kit.png') }}" alt="" class="profile-pic">
            </div>
            <div class="row">
                <div class="info">
                    <h3>Vendas</h3>
                    <span>12</span>
                </div>
                <div class="info">
                    <h3>Estoque</h3>
                    <span>38</span>
                </div>
                <div class="info">
                    <h3>Meta</h3>
                    <span>50</span>
                </div>
            </div>
            <div class="buttons">
                <a href="#" class="btn"><i class="fa-brands fa-pix">&nbsp;</i>PIX</a>
                <a href="#" class="btn"><i class="fa-solid fa-dollar-sign">&nbsp;</i>Dinheiro</a>
            </div>
        </div>
    </section>
</body>

</html>


.
