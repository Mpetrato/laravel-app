<h1>Detalhes da dúvida {{ $support->id }}</h1>

<ul>
  <li>{{ $support->subject }}</li>
  <li>{{ $support->body }}</li>
  <li>{{ $support->status }}</li>
</ul>

<x-delete>
  @slot('support', $support)
</x-delete>