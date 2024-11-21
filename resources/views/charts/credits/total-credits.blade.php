<div class="card">
    <div class="card-header">
        <h5>Creditos por mes</h5>
    </div>
    <div class="card-body">
        @if (isset($creditsByMonthChart))
            {!! $creditsByMonthChart->renderHtml() !!}
        @endif
    </div>
</div>

@push('js')
    @if (isset($creditsByMonthChart))
        {!! $creditsByMonthChart->renderChartJsLibrary() !!}
        {!! $creditsByMonthChart->renderJs() !!}
    @endif
@endpush
