<h1>Editar dúvida {{ $support->id }}</h1>

<x-alert />

<form action="{{ route('supports.update', $support->id) }}" method="POST">
  @csrf()
  @method('put')
  @include('admin.supports.partials.form', [
    'support' => $support,
  ])
</form>