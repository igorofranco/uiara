<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contatos | Uiara Franco</title>
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
            margin-bottom: 4em;
            text-align: center;
        }
        .main-logo > img{
            margin: auto;
            width: 15em;
        }
        section{
            margin: 2em auto;
            padding: 0;
        }
        section:nth-of-type(2n){
            background-color: #f0f0f0;
        }
        .cards-container{
            margin: auto;
            display: flex;
            flex-direction: row;
            justify-content: stretch;
        }
        .cards-container div:first-child{
            background-color: white;
        }
        .cards-container:nth-of-type(2n){
            flex-direction: row-reverse;
        }
        .card{
            padding: 2rem;
            width: 50%;
        }
        .card > i{
            display: block;
            text-align: center;
            font-size: 3rem;
        }
        .card > h3{
            text-align: center;
        }
        .card > p{
            text-align: justify;
            text-indent: 3rem;
        }
        a{
            text-decoration: none;
            color: inherit;
        }
        .btn-container{
            text-align: center;
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
        .tel{
            margin: 1em auto;
            text-align: center;
            font-size: 3rem;
            color: #222;
        }
        .fa-whatsapp{
            color: forestgreen;
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
    </style>
</head>
<body>
<section class="container">
    <h1>Mensagens Recebidas</h1>
</section>
<section class="container">
    <section class="cards-container">
        @foreach($contacts as $contact)
            <div class="card">
                <h3>{{$contact->name}}</h3>
                <p>
                    <i class="fas fa-phone"></i>
                    {{$contact->phone}}
                </p>
                <p>
                    <i class="far fa-envelope"></i>
                    {{$contact->email}}
                </p>
                <p>
                    <i class="far fa-comment-dots"></i>
                    {{$contact->comment}}
                </p>
                <p>
                    <i class="fas fa-clock"></i>
                    {{date('H:m - d/m/Y',strtotime($contact->created_at))}}
                </p>
            </div>
        @endforeach
    </section>
</section>


</body>
</html>
<script src="https://kit.fontawesome.com/96f535828b.js" crossorigin="anonymous" async></script>