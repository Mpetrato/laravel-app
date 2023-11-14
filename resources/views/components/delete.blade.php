<form action="{{ route('supports.delete', $support->id) }}" method="post">
    @csrf()
    @method('DELETE')
    <button type="submit">
        Deletar
    </button>
</form>