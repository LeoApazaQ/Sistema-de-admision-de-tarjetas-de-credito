<div class="card">
    <div class="card-header">
        <h5>Usuarios por mes</h5>
    </div>
    <div class="card-body">
        @if (isset($usersChart))
            {!! $usersChart->renderHtml() !!}
        @endif
    </div>
</div>

@push('js')
    @if (isset($usersChart))
        {!! $usersChart->renderChartJsLibrary() !!}
        {!! $usersChart->renderJs() !!}
    @endif
@endpush
