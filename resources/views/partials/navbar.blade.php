<link href="https://fonts.googleapis.com/css?family=Arvo&display=swap" rel="stylesheet">

<link rel="stylesheet" href="{{ asset('css/partials/navbar.css') }}">

<nav role="navigation" class="primary-navigation">
    <ul>
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Trabajo &dtrif;</a>
            <ul class="dropdown">
                <li><a href="{{ route('admin.index') }}">Panel de administracion</a></li>
                <li><a href="{{ route('ingresar.solicitud') }}">Formulario de solicitud</a></li>
                <li><a href="{{ route('ver.solicitudes') }}">Ver solicitudes</a></li>
                <li><a href="{{ route('usuarios.index') }}">Administrar usuarios</a></li>
                <li><a href="{{ route('ver.usuarios') }}">Ver usuarios</a></li>

            </ul>
        </li>
        <li><a href="#">Nosotros</a></li>
        <li><a href="#">Contactanos</a></li>
    </ul>
</nav>
