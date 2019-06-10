<h1> Excluir Registro</h1>
<hr>
<form action="/messages/{{$m->id}}" method="POST">
{{ csrf_field() }}
{{ method_field('DELETE') }}
<p>Você realmente quer excluir {{$m->id}}?</p>
<input type="submit" value="Deletar"> 
</form>