@component('admin.layouts.elements.body')
@slot('title') Páginas @endslot
@slot('description') Administração de páginas @endslot

<a href="{{ route('pages.create') }}" class="btn btn-light m-2">Novo</a>

<table class="table table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>title</th>
            <th class="text-right">ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pages as $page)
        <tr>
            <td>{{ $page->id }}</td>
            <td>{{ $page->title }}</td>
            <td class="text-right">
                <a href="{{ route('pages.show', $page->id) }}" class="btn btn-light btn-sm">
                    <span class="oi oi-eye"></span>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


{{ $pages->links() }}


@endcomponent
