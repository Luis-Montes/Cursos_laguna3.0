<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/a2dd6045c4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <title>Document</title>
</head>
<body>
    <section>
        <div class="contenedor">
            <div class="formulario">
                <form action="#">
                    <h2>Iniciar Sesión</h2>

                    <div class="input-contenedor">
                        <i class="fa-solid fa-building-columns"></i>
                        <input type="text" required>
                        <label for="#">Matricula</label>
                    </div>

                    <div class="input-contenedor">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" required>
                        <label for="#">Contraseña</label>
                    </div>

                    <div class="olvidar">
                        <label for="#">
                            <input type="checkbox"> Recordar
                            <a href="#">Olvidé la contraseña</a>
                        </label>
                    </div>
                </form>
                <div>
                    <button>Acceder</button>
                    <div class="registrar">
                        <p>No tengo cuenta <a href="#"> Crear </a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>