@if ($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
            {{ $error }}
        @endforeach
    </div>
@endif
<form action="{{ $action }}" method="post">
    @csrf
    @if ($update)
        @method('PUT')
    @endif
    <div class="mb-2">
        <label for="title" class="form-label">Título:</label>
        <input type="text" id="title" name="title" class="form-control"
            @isset($title) value="{{ $title }}" @endisset>
    </div>
    <div class="mb-2">
        <label for="link" class="form-label">Link:</label>
        <input type="text" id="link" name="link" class="form-control"
            @isset($link) value="{{ $link }}" @endisset>
    </div>

    <button type="submit" class="btn btn-dark">
        @if ($update)
            Editar
        @else
            Adicionar
        @endif
    </button>
</form>
