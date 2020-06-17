<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('sitecss/style.css')}}">
  <link rel="stylesheet" href="http://localhost/Projeto3/Barber-Rio/public/style.css">

  <!-- Datepicker-->
  <!---
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">--->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link href="../public/assets/css/bootstrap-datepicker.css" rel="stylesheet" />
  <script src="../public/assets/js/bootstrap-datepicker.min.js"></script>
  <script src="../public/assets/js/bootstrap-datepicker.pt-BR.min.js" charset="UTF-8"></script>


  <title>Barber-Rio Bootstrap</title>

</head>

<body>

  <header>
    <div class="logoimg">

      <a class="navbar-brand logo" href="#"><img src="../img/logo.png" alt="Logo do site"></a>
    </div>

    <div class="menu-bar text-light menuh">

      <ul>
        <li>
          <a href="{{ route('site.home') }}">Inicio</a>
        </li>
      </ul>
      <ul>
        <li>
          <a href="#" >Nossos Trabalhos</a>
          <ul class="fixamenu">
            <li class="dropdown-item">
              <a href="{{ route('site.barba') }}" >Barba</a>
            </li>
            <li class="dropdown-item">
              <a href="{{ route('site.bigode') }}">Bigode</a>
            </li>
            <li class="dropdown-item">
              <a href="{{ route('site.cabelo') }}">Cabelo</a>
            </li>
          </ul>
        </li>
      </ul>

      <ul>
        <li>
          <a href="#">Agenda</a>
          <ul class="fixamenu fxagend">
            <li>
              <a class="dropdown-item" href="{{ route('site.agendar') }}">Agendar </a>
            </li>
            <li>
              <a class="dropdown-item" href="{{ route('site.meusagendamento') }}">Ver agenda</a>
            </li>
          </ul>
        </li>
      </ul>

      <ul>
        <li>
          <a href="#">Minha Conta</a>
          <ul class="fixamenu fxagend">
            <li>
              <a class="dropdown-item" href="{{ route('site.login') }}">Entrar</a>
            </li>
            <li>
              <a class="dropdown-item" href="{{ route('site.cadastro') }}">Criar conta</a>
            </li>
          </ul>
        </li>
      </ul>

      <ul>
        <li>
          <a href="#">Sobre</a>
          <ul class="fixamenu fxagend">
            <li >
              <a class="dropdown-item" href="{{ route('site.sobre') }}">Quem somos?</a>
            </li>
          <!--  <li>
              <a href="{{ route('site.equipe') }}">Nossa equipe</a>
            </li>--->
          </ul>
        </li>
      </ul>



    </div>

    
    <nav class="navbar  navbar-1 white menuburgue">
      <button class="navbar-toggler" type="button" data-toggle="collapse"
        data-target="#navbarSupportedContent15" aria-controls="navbarSupportedContent15" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="iconburgue "><img src="../img/menu.svg" alt=""></span></button>

      
      <div class="collapse navbar-collapse menubtn" id="navbarSupportedContent15">

        <button class="btn">
          <a href="{{ route('site.home') }}">Inicio</a>
        </button>


        <div class="dropdown navbar-nav mr-auto dropmenu">
          <a class="btn  dropdown-toggle menubg" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Nossos Trabalhos
          </a>
          <div class="dropdown-menu menusub" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item menudrop" href="{{ route('site.barba') }}">Barba</a>
            <a class="dropdown-item menudrop" href="{{ route('site.bigode') }}">Bigode</a>
            <a class="dropdown-item menudrop" href="{{ route('site.cabelo') }}">Cabelo</a>
          </div>
        </div>

        <div class="dropdown navbar-nav mr-auto dropmenu">
          <a class="btn  dropdown-toggle menubg"" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Agenda
          </a>
          <div class="dropdown-menu menusub" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item menudrop" href="{{ route('site.agendar') }}">Agendar</a>
            <a class="dropdown-item menudrop" href="{{ route('site.meusagendamento') }}">Ver agendamento</a>

          </div>
        </div>

        <div class="dropdown navbar-nav mr-auto dropmenu">
          <a class="btn  dropdown-toggle menubg" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Minha conta
          </a>
          <div class="dropdown-menu menusub" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item menudrop" href="{{ route('site.login') }}">Entrar na minha conta</a>
            <a class="dropdown-item menudrop" href="{{ route('site.cadastro') }}">Criar conta</a>

          </div>
        </div>

        <div class="dropdown navbar-nav mr-auto dropmenu">
          <a class="btn  dropdown-toggle menubg" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Sobre
          </a>
          <div class="dropdown-menu menusub" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item menudrop" href="{{ route('site.sobre') }}">Quem somos?</a>
            <!---<a class="dropdown-item" href="{{ route('site.equipe') }}">Nossa equipe</a>--->

          </div>
        </div>
      </div>
     
    </nav>

  </header>


  @yield('content')

  <footer class="text-light">

    <div class="container">
      <div class="row rodape">


        <div class="col d-flex" style="flex-direction: column">
          <h6>Nossos trabalhos</h6>
          <a href="{{ route('site.barba') }}">Barba</a>
          <a href="{{ route('site.bigode') }}">Bigode</a>
          <a href="{{ route('site.cabelo') }}">Cabelo</a>
        </div>

        <div class="col d-flex" style="flex-direction: column">
          <h6>Agendar</h6>
          <a href="{{ route('site.agendar') }}">Agendar horário</a>
          <a href="{{ route('site.meusagendamento') }}">Ver agendamentos </a>
        </div>

        <div class="col d-flex" style="flex-direction: column">
          <h6>Minha conta</h6>
          <a href="#">Entrar</a>
          <a href="#">Criar conta</a>
        </div>
        <div class="col d-flex" style="flex-direction: column">
          <p>Aqui você pode conhecer mais sobre nossa equipe!</p>
          <h6>
            <a href="{{ route('site.sobre') }}">
              Clique aqui para Sobre</a>
          </h6>

        </div>
      </div>
    </div>

    <hr class="hrfooter">
    <div class="container">
      <div class="row">
        <div class="col-sm-8">
          <h5>Nosso endereço:</h5>
          <p>Avenida: Januario Domingos N°45 Jardim Paineiras - São Paulo</p>
        </div>
        <div class="col-sm-4">
          <h5>Horário:</h5>
          <p>Segunda á sabado das 08:00 ás 18:00</p>
        </div>
      </div>

      <div class="text-center">
        <img style="width: 35px;" class="rounded-circle" src="../img/whatsapp.svg"
          alt="icone do aplicativo do whatsapp">
        <img style="width: 35px;" class="rounded-circle" src="../img/facebook.svg"
          alt="Icone do aplicativo do facebook">
        <img style="width: 35px;" class="rounded-circle" src="../img/instagram.svg"
          alt="Icone do aplicativo do instagram">
        <p class="text-light"> &copy; 2020/Todos os direitos reservados</p>
      </div>

  </footer>


  <script src="{{asset('sitecss/jquery.js')}}"></script>
  <script src="{{asset('sitecss/bootstrap.js')}}"></script>


</body>

</html>