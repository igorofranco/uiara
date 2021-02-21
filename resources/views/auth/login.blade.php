<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gestão - Uiara Franco</title>

    <!-- FONTES -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@300;400;700&family=Fraunces:wght@400;700&display=swap" rel="stylesheet">

    <!-- ESTILO -->
    <link rel="stylesheet" href="../css/reset.css">

    <style>
        body{
            font-size: 1.25em;
            background-color: #fafafa;
        }
        h1,h2,h3,h4,h5,h6,label{
            font-family: 'Playfair Display', serif;
            margin: 2rem auto;
            text-align: center;
        }
        p,a,ul,ol,li{
            font-family: 'Alegreya Sans', sans-serif;
            margin: 1rem auto;
            line-height: 1.75rem;
        }
        .container{
            margin: 0 auto;
            max-width: 1200px;
        }
        .main-logo{
            margin: 2em auto;
            text-align: center;
        }
        .main-logo > img{
            margin: auto;
            width: 10em;
        }

        /* FORM */
        .form-input{
            margin: 3rem auto;
            width: 28em;
            text-align: center;
        }
        input,label,textarea{
            margin: 1rem auto;
            display: block;
            font-size: 2rem;
        }
        input,textarea{
            width: 100%;
            font-family: 'Alegreya Sans', sans-serif;
        }
        .btn{
            margin: 0 auto 5rem auto;
            text-align: center;
            padding: .75rem 1rem;
            border-radius: .5rem;
            box-shadow: 2px 2px 2px rgba(0,0,0,.333);
            font-size: 2rem;
            font-weight: bold;
            color: #eee;
            background-color: mediumseagreen;
            cursor: pointer;
            border: none;
        }
    </style>
</head>
<body>

<main>
    <section>
        <div class="main-logo">
            <img src="../img/1024-logo-black.png" alt="">
        </div>
    </section>

    <form action="{{route('login.make')}}" method="post" class="container">
        @csrf
        <div class="form-input">
            <label for="email">
                E-Mail
                <input type="email" name="email" id="email" required>
            </label>
        </div>
        <div class="form-input">
            <label for="password">
                Senha
                <input type="password" name="password" id="password" required>
            </label>
        </div>
        <div class="form-input">
            <button class="btn">Login</button>
        </div>
    </form>
</main>
</body>
</html>
