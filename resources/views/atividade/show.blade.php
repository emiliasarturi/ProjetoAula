<h1>Lista de Atividades - Detalhes da Atividade nº {{$atividade->id}}</h1>
<hr>
<h3><b>ID:</b> {{$atividade->id}} </h3>
<h3><b>Título:</b> {{\Carbon\Carbon::parse($atividade->scheduledto)->format('d/m/Y h:m')}} </h3>
<h3><b>Descrição:</b> {{$atividade->description}} </h3>
<h3><b>Criada em:</b> {{\Carbon\Carbon::parse($atividade->created_at)->format('d/m/Y h:m')}} </h3>
<h3><b>Atualizada em:</b> {{\Carbon\Carbon::parse($atividade->updated_at)->format('d/m/Y h:m')}} </h3>
<hr>
<p><a href="/atividades/{{$atividade->id}}/edit"><b>Editar</b></a></p>
<hr>
<div class="row">
    <div class="col-md-12">
        <p class="h4">Mensagens Relacionadas:</p>
        <table id="tabela" name="tabela"  class="table table-striped ">
            <thead>
               <tr>
                    <td>Data</td>
                    <td>Título</td>
                    <td>Texto</td>
                </tr>
            </thead>
            <tbody>
                @foreach($atividade->messages as $msg)
        	        <tr>
        	            <td>{{$msg->created_at->format("d/m/Y")}}</td>
        	            <td><a href="/mensagens/{{$msg->id}}">{{$msg->titulo}}</a></td>
        	            <td>{{$msg->texto}}</td>
        	        </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
