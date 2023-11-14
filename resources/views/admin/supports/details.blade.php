<h1>Detalhes da dúvida {{ $support->id }}</h1>

<ul>
  <li>{{ $support->subject }}</li>
  <li>{{ $support->body }}</li>
  <li>{{ $support->status }}</li>
</ul>

<form action="{{ route('supports.delete', $support->id) }}" method="post">
  @csrf()
  @method('DELETE')
  <button type="submit">
    Deletar
  </button>
</form>