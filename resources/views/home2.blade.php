<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Advocacia Humanizada - Uiara Franco</title>

    <!-- META TAGS -->
    <meta name="keywords" content="advocacia, contagem, belo horizonte, advogado, advogada, direito">
    <meta name="description" content="Serviços de advocacia, consultoria em direito.">
    <meta name="og:title" content="Uiara Franco Advocacia">
    <meta name="og:image" content="/img/og-logo01.jpg">
    <meta property="og:image" itemprop="image" content="/img/og-logo01.jpg">

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

<section>
    <div class="main-logo">
        <img src="../img/1024-logo-black.png" alt="">
    </div>
    @auth
    <div class="container" style="text-align: center;">
        <a href="{{route('contact.index')}}" class="btn">Contatos</a>
    </div>
    @endauth
    <div class="tel">
        <a href="https://api.whatsapp.com/send?phone=5531992550403" target="_blank">
            <i class="fab fa-whatsapp"></i>
            31 9255-0403
        </a>
    </div>

    <div class="btn-container">
        <a href="#"
           class="btn">
            Quero a Análise do Meu Caso
        </a>
    </div>
</section>

<section>
    <div class="container">
        <div class="cards-container">
            <div class="card">
                <i class="fas fa-comments-dollar"></i>
                <h3>Renegociação de Dívida Empresarial</h3>
                <p>Neste tema, contamos com uma experiência adquirida no atendimento de centenas de empresas dos mais variados ramos de atividade, do pequeno ao grande porte e com dívidas de todos os valores. Como exemplo de casos de sucesso, já renegociamos dívidas de até Doze Milhões de Reais com 80% de redução face a irregularidades constatadas e a forma como conduzimos as negociações com os Bancos, blindando o patrimônio da empresa e dos sócios. Temos ainda, casos onde conseguimos extinguir a dívida por completo e casos em que após a revisão contratual, o Banco passou a ocupar a posição de Devedor.</p>
            </div>
            <div class="card">
                <i class="far fa-handshake"></i>
                <h3>Renegociação de Dívida Pessoal</h3>
                <p>Também já ajudamos centenas de pessoas a reestruturarem seus orçamentos familiares, renegociando dívidas de empréstimo, cheque especial, cartão de crédito e financiamentos de modo geral. São muitos os casos que chegam até nós de pessoas que tiveram suas dívidas triplicadas, quadruplicadas, face a inúmeras renegociações no intuito de não ficarem inadimplentes. Temos, inclusive, casos de pessoas que saíram da posição de devedor para credor após a revisão contratual.</p>
            </div>
        </div>

        <div class="cards-container">
            <div class="card">
                <i class="fas fa-hand-holding-usd"></i>
                <h3>Limitação de descontos de empréstimos a 30% do salário líquido</h3>
                <p>Não é pouco o número de pessoas que nos procuram com 60%, 70%, as vezes até 90% do salário comprometido com o Banco, impossibilitados de arcarem com o sustento da família. Para esses casos, geralmente conseguimos a limitação dos descontos a 30% dos rendimentos já nos primeiros dias após nossa intervenção através de um pedido liminar.</p>
            </div>
            <div class="card">
                <i class="fas fa-shield-alt"></i>
                <h3>Defesa em Ação de Execução Judicial</h3>
                <p>Como meios de defesa, temos muita experiência na abordagem de questões relativas ao excesso de juros, formas de capitalização indevida, venda casada, impenhorabilidade de bens, entre outros temas que ajudam na obtenção de um bom acordo junto ao Banco Credor.</p>
            </div>
        </div>

        <div class="cards-container">
            <div class="card">
                <i class="fas fa-gavel"></i>
                <h3>Suspensão e Nulidade de Leilão Judicial e Extrajudicial</h3>
                <p>A execução não deve ensejar prejuízos indevidos ao devedor, tampouco onerá-lo excessivamente. Muitas vezes os requisitos legais deste procedimento não são observados, ensejando a possibilidade de suspensão ou cancelamento do leilão, o que deve ser analisado caso a caso.</p>
            </div>
            <div class="card">
                <i class="fas fa-university"></i>
                <h3>Fraude Bancária e Negativação Indevida</h3>
                <p>Esses casos são bem comuns! As instituições financeiras devem responder de forma objetiva ou seja, independentemente de culpa no caso de fraudes cometidas por terceiros, indenizando as vítimas prejudicadas por fatos como abertura de contas ou obtenção de empréstimos mediante o uso de identificação falsa.</p>
            </div>
        </div>
    </div>

</section>



<section>
    <h1>Análise Gratuita</h1>
    <div class="container">
        <form action="{{route('contact.store')}}" method="post">
            @csrf

            <div class="form-input">
                <label for="name">Nome</label>
                <input type="text" name="name" id="name" required>
            </div>

            <div class="form-input">
                <label for="email">E-Mail</label>
                <input type="text" name="email" id="email" required>
            </div>

            <div class="form-input">
                <label for="phone">Telefone</label>
                <input type="text" name="phone" id="phone" required>
            </div>

            <div class="form-input">
                <label for="comment">Conte seu problema</label>
                <textarea name="comment" id="comment" rows="10" required autocomplete="off"></textarea>
            </div>

            <div class="form-input">
                <button class="btn">Enviar</button>
            </div>
        </form>
    </div>
</section>


<section>
    <div class="tel">
        <a href="https://api.whatsapp.com/send?phone=5531992550403" target="_blank">
            <i class="fab fa-whatsapp"></i>
            31 9255-0403
        </a>
    </div>
    <div class="btn-container">
        <a href="#"
           class="btn">
            Quero a Análise do Meu Caso
        </a>
    </div>
</section>


</body>
</html>

<script src="https://kit.fontawesome.com/96f535828b.js" crossorigin="anonymous" async></script>
