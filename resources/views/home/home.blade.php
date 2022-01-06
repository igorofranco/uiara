<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Uiara Franco - Advogada</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.0/css/all.css" integrity="sha384-OLYO0LymqQ+uHXELyx93kblK5YIS3B2ZfLGBmsJaUyor7CpMTBsahDHByqSuWW+q" crossorigin="anonymous">

  <!-- FONTS -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Noto+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

  <!-- META TAGS -->
  <meta name="keywords" content="advocacia, contagem, belo horizonte, advogado, advogada, direito do consumidor, direito da família e sucessões">
  <meta name="description" content="Advocacia Humanizada, consultoria em direito.">
  <meta name="og:title" content="Uiara Franco - Advogada">
  <meta name="og:image" content="https://www.uiarafranco.adv.br/img/og-logo01.jpg">
  <meta property="og:image" itemprop="image" content="https://www.uiarafranco.adv.br/img/og-logo01.jpg">

  <style>
    body{
      margin: 0;
      font-size: 1.5em;
    }
    h1,h2,h3,h4,h5,h6{
      font-family: "Noto Serif", serif;
    }
    p,li{
      font-family: "Lato", sans-serif;
    }
    ul{
      font-size: 1.125rem;
    }
    li{
      list-style: none;
      margin: 1rem;
    }
    .square-mark::before{
      content: "";
      background-color: #f5e6ed;
      display: inline-block;
      width: 1.25rem;
      height: .7rem;
      margin: 0 -.8rem -.25rem 0;
    }

    /* SEÇÕES */
    main{
      margin: 0;
      height: 95vh;
    }

    /* SEÇÃO 1 */
    .background-third1{
      position: absolute;
      top: 6em;
      width: 30%;
      height: 105vh;
      background-color: #f3dfeb;
      z-index: -1;
    }
    .profile-flex{
      padding-top: 2em;
      display: flex;
      flex-direction: row;
    }
    .profile-flex > div{
      margin-top: 3em;
      display: flex;
      flex-direction: column;
      width: 50%;
    }
    .profile-flex > div > .photo{
      display: block;
      margin: auto 10% auto auto;
      vertical-align: center;
      width: 50%;
      border-radius: .5rem;
      box-shadow: 0 1rem 2rem rgba(0,0,0,.5);
    }
    .profile-flex > div > .logo{
      display: block;
      margin: 0 0 0 20%;
      width: 20%;
    }

    /* SEÇÃO 2 */
    .background-third2{
      position: absolute;
      margin-left: 60%;
      width: 40%;
      height: 136vh;
      background-color: #f3dfeb;
      z-index: -1;
    }
    section.section2{
      padding-top: 6em;
    }
    div.container{
      margin: 0 auto;
      max-width: 1200px;
    }
    ul.atuacoes > li{
      padding: 3em 0;
      display: flex;
      flex-direction: row;
    }
    ul.atuacoes > li > div{
      width: 50%;
    }
    ul.atuacoes > li > div:nth-of-type(1){
      margin: 0 2rem 0 0;
      text-align: right;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }
    ul.atuacoes > li > div:nth-of-type(2){
      margin: 0 0 0 2rem;
      text-align: left;
    }
    ul.atuacoes > li > div > img{
      width: 66.667%;
      border-radius: .5rem;
      box-shadow: 0 .75rem 1.75rem rgba(0,0,0,.5);
    }

    /* BUTTONS */
    .button{
      font-family: "Noto Serif", serif;
      display: block;
      margin: 1rem auto auto 35%;
      width: fit-content;
      width: -moz-fit-content;
      text-decoration: none;
      color: black;
      transition: linear 75ms;
    }
    .button:hover{
      color: #a05a84;
    }
    .button::before{
      content: "";
      background-color: #f5e6ed;
      display: inline-block;
      width: 4rem;
      height: 1.333rem;
      margin: 0 -10rem -.333rem 0;
    }


    /* FOOTER */
    footer{
      bottom: 0;
      background-color: #222;
      color: #eee;
      font-family: "Lato", sans-serif;
    }
    footer > div.footer-container{
      margin: 0 auto;
      padding: 0 3rem;
      max-width: 1080px;
      display: flex;
      flex-direction: row;
      justify-content: space-between;
      align-items: center;
    }
    footer ul{
      display: flex;
    }
    footer a{
      color: #ffd8ef;
    }
    footer i{
      font-size: 2rem;
    }

    @media only screen and (max-width: 900px){
      main,section{
        padding: 0;
        height: auto;
      }
      .background-third1,.background-third2{
        display: none;
      }
      .profile-flex{
        flex-direction: column-reverse;
      }
      .profile-flex > div{
        margin-top: .666667em;
        flex-direction: column;
        width: 100%;
      }
      .photo-container{
        padding: 3em 0;
        background-color: #f3dfeb;
      }
      .profile-flex > div > .logo{
        margin: auto;
      }
      .profile-flex > div > .photo{
        margin: auto;
      }
      .button{
        margin: 1rem auto auto 52%;
      }

      /* SEÇÃO 2 */
      section.section2{
        text-align: center;
        padding-top: 2em;
      }
      div.container{
        margin: 0 auto;
        max-width: 1200px;
      }
      ul.atuacoes{
        margin: 0;
        padding: 0;
      }
      ul.atuacoes > li{
        padding: 1.5em 0;
        display: flex;
        flex-direction: column-reverse;
      }
      ul.atuacoes > li > div{
        width: 100%;
      }
      ul.atuacoes > li > div:nth-of-type(1){
        margin: 0;
        text-align: center;
        display: flex;
        flex-direction: column;
        justify-content: center;
      }
      ul.atuacoes > li > div:nth-of-type(2){
        margin: 0;
        text-align: center;
      }
      ul.atuacoes > li > div > img{
        display: block;
        margin: 0 auto 3rem auto;
        width: 40%;
      }

      footer{
        padding: 2rem 0 0 0;
      }
      footer > div.footer-container{
        flex-direction: column;
      }
      footer ul{
        padding: 0;
      }
    }
  </style>
  <style>
    body > main > header{
      position: fixed;
      width: 100vw;
    }
  </style>
  <style>
    section.section3{
      margin: 4em auto;
    }
    section.section3 > div.container > ul {
      margin: 0 auto;
      max-width: 640px;
    }
  </style>
</head>
<body>

<main>
  @include('components.main-header')
  <span class="background-third1"></span>
  <div class="profile-flex">
    <div class="photo-container">
      <img src="../img/uiara-franco-profile.jpg" alt="profile-photo" class="photo">
    </div>

    <div>
      <img src="../img/1024-logo-black.png" class="logo">
      <ul>
        <li class="square-mark">Advogada OAB/MG 117.266</li>
        <li class="square-mark">Servidora Pública - Analista</li>
        <li class="square-mark">Atuante na área de Direito de Família e Sucessões</li>
        <li class="square-mark">Atuante na área de Direito do Consumidor</li>
        <li class="square-mark">Graduada em Direito pela PUC - Contagem em 2008</li>
        <li class="square-mark">Pós Graduada em Direito Público - IEC - Puc Minas</li>
        <li class="square-mark">Graduanda em Letras</li>
        <li class="square-mark">Graduanda em Pedagogia</li>
      </ul>
      <div>
        <a
          href="https://api.whatsapp.com/send?phone=5531992550403"
          target="_blank"
          class="button"
        >
          <i class="fab fa-whatsapp"></i>
          WhatsApp
        </a>
        <a
          href="https://www.instagram.com/uiarafranco/"
          target="_blank"
          class="button"
        >
          <i class="fab fa-instagram"></i>
          Instagram
        </a>
      </div>
    </div>
  </div>
</main>

<section class="section2">
  <span class="background-third2"></span>
  <div class="container">
    <ul class="atuacoes">

      <li>
        <div>
          <h2>
            Direito de Família e Sucessões
          </h2>
          <p>
            São normas jurídicas que regulam não só a vida de uma pessoa, mas que também vigoram depois da sua morte. O conteúdo atual dessa área do Direito está ligado não apenas às relações de natureza pessoal, mas também patrimonial, que se desenvolvem no âmbito familiar e que são protegidas pelo Direito de Família e Sucessões.
          </p>
        </div>
        <div>
          <img src="../img/atuacao/familia.jpg" alt="foto">
        </div>
      </li>

      <li>
        <div>
          <h2>
            Assessoria Jurídica Empresarial
          </h2>
          <p>
            A consultoria jurídica representa um serviço que tem como objetivo aconselhar o cliente em relação às práticas que podem ser aplicadas para identificar e resolver problemas ou melhorar as operações do negócio.
          </p>
        </div>
        <div>
          <img src="../img/atuacao/empresa.jpg" alt="foto">
        </div>
      </li>

      <li>
        <div>
          <h2>
            Direito do Consumidor
          </h2>
          <p>
            O consumidor tem o direito de exigir que tudo o que for anunciado seja cumprido. Se o que foi prometido no anúncio não for cumprido, o consumidor tem direito de cancelar o contrato e receber a devolução da quantia que havia pago.
          </p>
        </div>
        <div>
          <img src="../img/atuacao/consumidor.jpg" alt="foto">
        </div>
      </li>

    </ul>
  </div>
</section>

<section class="section3">
  <div class="container">
    <ul>
      <li class="square-mark">Divórcio Imediato em Cartório ou Judicial, Consensual ou Litigioso;</li>
      <li class="square-mark">Pedido de Pensão Alimentícia de Filhos, Cônjuges e Parentes, Alimentos Provisórios (Emergenciais) Lei 5.478/1968;</li>
      <li class="square-mark">Ação de Exoneração de Alimentos contra filhos que completaram 21 anos;</li>
      <li class="square-mark">Ação de Prorrogação de Pensão Alimentícia até os 24 anos para filhos universitários;</li>
      <li class="square-mark">Revisão e Exoneração de Alimentos diante da mudança da capacidade econômica do Alimentante e do Alimentando;</li>
      <li class="square-mark">Reconhecimento e Dissolução da União Estável (Em cartório ou Judicial) e sua conversão em Casamento;</li>
      <li class="square-mark">Investigação de Paternidade, Direito a Ancestralidade (Reconhecimento da Paternidade dos seus pais, direito a uma identidade genética) e Parentalidade (DNA);</li>
      <li class="square-mark">Investigação e Reconhecimento de Filhos e Pais;</li>
      <li class="square-mark">Retificação Judicial de Registro Civil da Ancestralidade por erro de Grafia (com intuito de adquirir cidadania estrangeira por ancestrais);</li>
      <li class="square-mark">Autorização Judicial para viagem ao Exterior com os filhos, suprimindo a ausência e autorização de um dos pais;</li>
      <li class="square-mark">Direito e Regulamentação de Visitas e Direito de Visitas dos Avós (Lei 12.398/11);</li>
      <li class="square-mark">Guarda Compartilhada (Lei 11.698/2008) de Menores e Guarda Uniparental;</li>
      <li class="square-mark">Anulação e Invalidade do Casamento;</li>
      <li class="square-mark">SAP – Síndrome de Alienação Parental, Lei 12.318/2010 (Destruição da Imagem de um dos pais contra o outro junto aos filhos) e proibição de visitação por um dos pais;</li>
      <li class="square-mark">Emancipação, Interdição, Tutela e Curatela de Incapazes;</li>
      <li class="square-mark">Direito Familiar do Idoso, Alimentos do Idoso Direitos e Obrigações dos Avôs (visita, guarda e obrigação alimentar);</li>
      <li class="square-mark">Responsabilidade Civil Familiar, Dano Moral Familiar, Deveres do Casamento e da União Estável, Dano Moral e Alimentos;</li>
      <li class="square-mark">Dano Moral Afetivo no Noivado e Namoro;</li>
      <li class="square-mark">Orientação e Elaboração de Pacto Antenupcial e de Contratos de Convivência;</li>
      <li class="square-mark">Bem de Família Legal (Lei 8.009/90), Bem de Família Convencional (Código Civil) e Bem de Família do Solteiro;</li>
      <li class="square-mark">Inventários em Cartório (Lei 11.441/2007) que possibilita a realização de inventários, partilhas, separação consensual e divórcio consensual por via administrativa.</li>
      <li class="square-mark">Inventários na Forma Litigiosa por via Judicial;</li>
      <li class="square-mark">Orientação e Planejamento sucessório objetivando a preservação e a perpetuação do patrimônio familiar e empresas familiares;</li>
      <li class="square-mark">Direito Sucessório na União Estável;</li>
      <li class="square-mark">Elaboração de Testamentos, Doações;</li>
      <li class="square-mark">Escrituras Familiares;</li>
      <li class="square-mark">Venda de Bens aos Sucessores;</li>
      <li class="square-mark">Anulação de Partilha;</li>
      <li class="square-mark">Anulação e Revogação de Testamentos;</li>
      <li class="square-mark">Elaboração de testamentos e acompanhamento de inventários e arrolamentos;</li>
      <li class="square-mark">Anulação de Doações realizadas com fraude;</li>
      <li class="square-mark">Entre outras ações relacionadas.</li>
    </ul>
  </div>
</section>

@include('components.footer')

</body>
</html>
