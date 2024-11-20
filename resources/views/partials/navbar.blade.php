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
        <li><a href="{{ route('home') }}"><i class="fas fa-home"></i>Inicio</a></li>
        <li><a href="#"><i class="fas fa-briefcase"></i>Trabajo &dtrif;</a>
            <ul class="dropdown">
                @hasrole('Admin')
                <li><a href="{{ route('admin.index') }}"><i class="fas fa-tachometer-alt"></i> Panel de administración</a></li>
                @endhasrole
                <li><a href="{{ route('applications.index') }}"><i class="fas fa-file-alt"></i> Listado de solicitudes</a></li>
                <li><a href="{{ route('applications.create') }}"><i class="fas fa-search"></i> Crear una solicitud</a></li>
                <li><a href="{{ route('clients.index') }}"><i class="fas fa-users"></i> Administrar Clientes</a></li>
                <li><a href=""><i class="fas fa-eye"></i> Ver Clientes</a></li>
            </ul>
        </li>
        <li><a href="#"><i class="fas fa-info-circle"></i>Nosotros</a></li>
        <li>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="dropdown-item">
                    <i class="fas fa-phone-alt">Cerrar sesión</i> 
                </button>
            </form>
        </li>
    </ul>
</nav>


<script>
    // JavaScript para mostrar y ocultar el menú
    document.getElementById("menu-toggle").addEventListener("click", function() {
        var navList = document.querySelector("nav.primary-navigation ul");
        navList.classList.toggle("active"); // Alternar la clase 'active' para mostrar u ocultar el menú
    });

    // Agregar un evento de clic para la opción "Trabajo" en pantallas pequeñas
    var trabajoItem = document.querySelector(
    "nav.primary-navigation ul li:nth-child(2)"); // Esto selecciona el elemento "Trabajo"
    trabajoItem.addEventListener("click", function(event) {
        if (window.innerWidth <= 768) { // Solo aplicar en pantallas pequeñas
            event.preventDefault(); // Prevenir la acción por defecto (navegar)
            trabajoItem.classList.toggle("active"); // Alternar la clase 'active' para mostrar el submenú
        }
    });
</script>
