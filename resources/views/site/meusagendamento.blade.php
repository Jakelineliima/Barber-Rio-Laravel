@extends('site.master.layout')

@section('content')

<div class="container gridagenda">

  <div class="userdados">

    <h3><strong>Seus dados pessoais</strong></h3>

    <p><strong>Nome:</strong> Jammys Robert</p>

    <p><strong>Email:</strong> jammys@gmail.com</p>

    <p><strong>Data de nascimento:</strong> 14/06/1995</p>

    <p><strong>RG:</strong> 14.530.487-65 <strong>CPF:</strong>548.798.462-12</p>

    <p><strong>Endereço:</strong> Rua Carlos Gomes <strong>Bairro:</strong>Paineiras
      <strong>N°</strong>530 São Paulo</p>

    <div class="card-body btnuser">
      <a href="#" class="btn edit">Editar</a>
    </div>
  </div>
  <!---
 <div class="gridft2">
  <div style="text-align: center" class="gridteste">
    <img class="fotouser" src="../img/perfil.jpg" alt="foto do perfil">
    <p class="txtuser">Jammys Robert</p>
    <div class="gridft">
      <a href="#">
        <img class="trocafoto" src="../img/camera.svg" alt="icone de trocar foto"></a>
    </div>
  </div>
</div>-->



  <hr class="hruser">



  <div class="card gridcard" style="width: 18rem; margin-top:75px;">

    <div class="card-body">
      <h5 class="card-title">Veja aqui sua agenda</h5>

      <p class="card-text" style="margin-top:20px"><Strong>Data:</Strong> 12/05/2020 </p>
      <p><Strong>Horário:</Strong> 14:00 as 14:45</p>

      <a href="#" class="btn edit float-right">Editar</a>
    </div>
  </div>
  <div class="gridaviso">
    <p style="margin-top:75px;">
      <strong>Atenção:</strong>O pagamento deve ser realizado no ato do nossos serviços.
    </p>
    <div class="listapag">
      <ul>
        <strong>Você pode pagar em:</strong>
        <li style="color: #000;">Dinheiro</li>
        <li style="color: #000;">Cartão de credito ou debito</li>
      </ul>
      <ul>
        <strong>Não aceitamos:</strong>
        <li style="color: #000;">Cheques</li>
      </ul>
    </div>
    <p>Em caso de <font color="#f01d1d">não</font> poder comparecer avisar com 1 (uma) hora de antecedencia.<br>
      Atenciosamente Equipe <strong>BarberRio</strong>.</p>


  </div>
</div>


@endsection