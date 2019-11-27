@component('admin.layouts.default')
<h3>{{ $title }} <small>{{ $description }}</small></h3>

<div class="card">
    <div class="card-body">
        {{ $slot }}
    </div>
</div>
@endcomponent
