@component('admin.layouts.elements.body')
@slot('title') Páginas @endslot
@slot('description') Exibição de páginas  @endslot

<h4>{{ $page->title }}</h4>

<p><small>Criado em {{ $page->created_at->format('d/m/Y H:i:s') }} | Atualizado em {{ $page->updated_at->format('d/m/Y H:i:s') }}</small></p>

<div class="my-3">
{!! $page->body !!}
</div>

<a href="{{ route('pages.index') }}" class="btn btn-sm btn-light">Voltar</a>
<a href="{{ route('pages.edit', $page->id) }}" class="btn btn-sm btn-light">Editar</a>

<form action="{{ route('pages.destroy', $page->id) }}" class="form-horizontal" method="post" style="display:inline-block">
    {!! csrf_field() !!}
    <input type="hidden" name="_method" value="DELETE">
    <input type="submit" value="Remover" class="btn btn-sm btn-light">
</form>

@endcomponent
