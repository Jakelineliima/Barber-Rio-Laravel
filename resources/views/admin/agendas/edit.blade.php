@extends('site.master.layout')


@section('content')

<section class="container">

    <h2 class="agenda">Olá aqui você pode agendar a data e a hora que melhor o convem.</h2>



    <form class="form-horizontal" style="margin-top: 59px"
        action="{{ route('agenda.update',['agenda'=>$agenda->id]) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <div class="col-sm-10">
                <h5>Qual data você deseja?</h5>
                <div class="input-group date imputs">
                    <input value="{{ $agenda->date }}" name="date" type="date" class="form-control" id="exemplo"
                        placeholder="Clique para abrir o calendario">
                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                    </div>
                </div>
            </div>

            <div class="col-sm-10" style="margin-top: 59px">
                <h5>Qual horário você deseja?</h5>
                <div class="input-group date imputs">
                    <select class="form-control" value="{{ $agenda->hora }}" name="hora" >
                        <option selected="selected">Selecione um horario</option>
                        <option>08:00</option>
                        <option>08:30</option>
                        <option>09:00</option>
                        <option>09:30</option>
                        <option>10:00</option>
                        <option>10:30</option>
                        <option>13:00</option>
                        <option>13:30</option>
                        <option>14:00</option>
                        <option>14:30</option>
                        <option>15:00</option>
                        <option>15:30</option>
                        <option>16:00</option>
                        <option>16:30</option>
                        <option>17:00</option>
                        <option>17:30</option>
                        <option>18:00</option>
                    </select>

                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                    </div>
                </div>
            </div>
        </div>
    </form>



    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10" style="margin-top: 59px">
            <p style="margin-top: 59px"><strong>Observação:</strong> Não atendemos aos domingos,<br> datas não
                disponiveis
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

      $(".js-example-tags").select2({
      tags: true
      });

     

      function abrir() {
        Document.write = ('teste','teste')
     
      }
    </script>



</section>
@endsection