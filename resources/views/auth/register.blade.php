<!doctype html>
<html lang="en">
    <head>
        <title>Registrarse</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link rel="icon" href="https://i.postimg.cc/RC8YQRd3/Pin.png" type="image/x-icon">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="{{ asset('assets/estilos.css')}}">

    </head>

    <body>

    <form class="form-loging">
        <form action="{{route('register')}}" method="post">
            @csrf
            <img src="https://i.postimg.cc/0QkTFyKb/Logo.png" alt="">
            <div class="input-group">
            <div class="input-container">
                <input type="text" Name="name" placeholder="Nombre">
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="input-container">
                <input type="email" Name="email" placeholder="Correo">
                <i class="fa-solid fa-envelope"></i>
            </div>
            <div class="input-container">
                <input type="password" Name="password" placeholder="Contraseña">
                <i class="fa-solid fa-lock"></i>
            </div>
            <div class="input-container">
                <input type="password" Name="password_confirmation" placeholder="Confirmar contraseña">
                <i class="fa-solid fa-lock"></i>
            </div>

            <a href="{{route('login')}}">Ya tienes cuenta, ingresa aqui</a>

            <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Registrarse</button>
            </div>
    </form>

        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
