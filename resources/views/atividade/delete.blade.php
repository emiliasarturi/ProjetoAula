<h1> Excluir Registro</h1>
<hr>
<form action="/atividades/{{$atividade->id}}" method="POST">
{{ csrf_field() }}
{{ method_field('DELETE') }}
<p>Você realmente quer excluir {{$atividade->id}}?</p>
<input type="submit" value="Deletar"> 
</form>