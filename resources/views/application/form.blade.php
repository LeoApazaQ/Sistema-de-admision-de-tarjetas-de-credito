<div class="row padding-1 p-1">
    <div class="col-md-12">
        <div class="form-group mb-2 mb20">
            <label for="title" class="form-label">{{ __('Titulo') }}</label>
            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $application?->title ?? 'Solicitud de credito - ' . date('Y-m-d-h-i')) }}" id="title" placeholder="Title" readonly>
            {!! $errors->first('title', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-2 mb20">
            <label for="status_id" class="form-label">{{ __('Estado') }}</label>
            <select name="status_id" class="form-control @error('status_id') is-invalid @enderror" id="status_id">
                <option value="{{ $statuses->first()->id }}" {{ old('status_id', $application?->status_id) == $statuses->first()->id ? 'selected' : '' }}>{{ $statuses->first()->nombre }}</option>
                @foreach ($statuses as $status)
                    @if($status->id != $statuses->first()->id)
                        <option value="{{ $status->id }}" {{ old('status_id', $application?->status_id) == $status->id ? 'selected' : '' }}>{{ $status->nombre }}</option>
                    @endif
                @endforeach
            </select>
            {!! $errors->first('status_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-2 mb20">
            <label for="client_id" class="form-label">{{ __('Cliente') }}</label>
            <select name="client_id" class="form-control @error('client_id') is-invalid @enderror" id="client_id">
                <option value="">Seleccione un cliente</option>
                @foreach ($clients as $client)
                    <option value="{{ $client->id }}" {{ old('client_id', $application?->client_id) == $client->id ? 'selected' : '' }}>{{ $client->nombres }} {{ $client->apellidos }}</option>
                @endforeach
            </select>
            {!! $errors->first('client_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Enviar') }}</button>
    </div>
</div>
