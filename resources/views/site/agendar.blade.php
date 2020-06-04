@extends('site.master.layout')


@section('content')

<section class="container">

  <h2 class="agenda">Olá aqui você pode agendar a data e a hora que melhor o convem.</h2>



  <form class="form-horizontal" style="margin-top: 59px">
    <div class="form-group">
      
      <div class="col-sm-10">
        <h5>Qual data você deseja?</h5>
        <div class="input-group date imputs">
          <input type="text" class="form-control" id="exemplo" placeholder="Clique para abrir o calendario">
          <div class="input-group-addon">
            <span class="glyphicon glyphicon-th"></span>
          </div>
        </div>
</div>
    <div class="col-sm-10" style="margin-top: 59px">
      <h5>Qual horário você deseja?</h5>
      <div class="input-group date imputs">
        <input type="time" class="form-control" id="exemplo">
        <div class="input-group-addon">
          <span class="glyphicon glyphicon-th"></span>
        </div>
      </div>
    </div>
    </div>
  </form>



  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10" style="margin-top: 59px">
      <p style="margin-top: 59px"><strong>Observação:</strong> Não atendemos aos domingos,<br> datas não disponiveis
          estaram
          em vermelho</p>
      <button type="submit" class="btn btn-success">Agendar</button>
    </div>
  </div>






  <script type="text/javascript">
    $('#exemplo').datepicker({	
				format: "dd/mm/yyyy",	
				language: "pt-BR",
				startDate: '+0d',
			});
  </script>



</section>
@endsection