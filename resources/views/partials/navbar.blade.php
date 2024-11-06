<link href="https://fonts.googleapis.com/css?family=Arvo&display=swap" rel="stylesheet">

<link rel="stylesheet" href="{{ asset('css/partials/navbar.css') }}">

<!-- Incluye Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">


<nav role="navigation" class="primary-navigation">
    <div class="menu-toggle" id="menu-toggle" aria-label="Toggle navigation">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </div>
    <ul>
        <li><a href="#"><i class="fas fa-home"></i> Inicio</a></li>
        <li><a href="#"><i class="fas fa-briefcase"></i> Trabajo &dtrif;</a>
            <ul class="dropdown">
                <li><a href="{{ route('admin.index') }}"><i class="fas fa-tachometer-alt"></i> Panel de administración</a></li>
                <li><a href="{{ route('request.index') }}"><i class="fas fa-file-alt"></i> Formulario de solicitud</a></li>
                <li><a href="{{ route('ver.solicitudes') }}"><i class="fas fa-search"></i> Ver solicitudes</a></li>
                <li><a href="{{ route('clients.index') }}"><i class="fas fa-users"></i> Administrar usuarios</a></li>
                <li><a href="{{ route('ver.usuarios') }}"><i class="fas fa-eye"></i> Ver usuarios</a></li>
            </ul>
        </li>
        <li><a href="#"><i class="fas fa-info-circle"></i> Nosotros</a></li>
        <li><a href="#"><i class="fas fa-phone-alt"></i> Contáctanos</a></li>
    </ul>
</nav>


<script>
    // JavaScript para mostrar y ocultar el menú
document.getElementById("menu-toggle").addEventListener("click", function() {
    var navList = document.querySelector("nav.primary-navigation ul");
    navList.classList.toggle("active"); // Alternar la clase 'active' para mostrar u ocultar el menú
});
</script>
