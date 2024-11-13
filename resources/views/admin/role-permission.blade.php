@extends('adminlte::page')

@section('title', 'Crear Nuevo Rol')

@section('content_header')
    <h1>Asignar Permisos Roles</h1>
@stop

@section('css')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
    <!-- Or for RTL support -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.rtl.min.css" />

@stop

@section('js')
    <!-- Scripts -->
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.full.min.js"></script>

    <script>
        $('#multiple-select-field').select2({
            theme: "bootstrap-5",
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: $(this).data('placeholder'),
            closeOnSelect: false,
        });
    </script>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Asignar Permisos al Rol: {{  $role->name }}</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('roles.update', $role) }}" method="post">
                        @csrf
                        @method('put')
                        <select class="form-select" name="permissions[]" id="multiple-select-field" data-placeholder="Seleccionar el permiso" multiple>
                            @foreach ($permissions as $permission)
                                <option value="{{ $permission->id }}" {{ in_array($permission->id, $rolePermissions) ? 'selected' : '' }}>{{ $permission->name }}</option>
                            @endforeach
                        </select>
                        <div class="d-grid gap-2 mt-3">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>   
                </div>
            </div>
        </div>
    </div>
@stop
