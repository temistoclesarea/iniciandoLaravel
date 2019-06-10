@component('admin.layouts.elements.body')
@slot('title') Páginas @endslot
@slot('description') Exibição de páginas  @endslot

<a href="{{ route('pages.index') }}" class="btn btn-sm btn-light">Voltar</a>
<a href="{{ route('pages.edit', 1) }}" class="btn btn-sm btn-light">Editar</a>
<a href="{{ route('pages.destroy', 1) }}" class="btn btn-sm btn-light">Remover</a>

@endcomponent
