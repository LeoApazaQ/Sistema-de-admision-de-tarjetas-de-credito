
      <!--=============== REMIXICONS ===============-->
      <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">

      <!--=============== CSS ===============-->
      <link rel="stylesheet" href="{{ asset('css/partials/menu.css') }}">

  
      <!--=============== HEADER ===============-->
      <header class="header">
         <nav class="nav container">
            <div class="nav__data">
               <a href="{{ route('home') }}" class="nav__logo">
                  <i class="ri-planet-line"></i> Admision de tarjetas
               </a>
               
               <div class="nav__toggle" id="nav-toggle">
                  <i class="ri-menu-line nav__burger"></i>
                  <i class="ri-close-line nav__close"></i>
               </div>
            </div>

            <!--=============== NAV MENU ===============-->
            <div class="nav__menu" id="nav-menu">
               <ul class="nav__list">
                  <li><a href="{{ route('home') }}" class="nav__link">Inicio</a></li>

                  @role('Admin')
                     <li><a href="{{ route('admin.index') }}" class="nav__link">Admin Panel</a></li>
                  @endrole

                  <!--=============== DROPDOWN 1 ===============-->
                  <li class="dropdown__item">
                     <div class="nav__link">
                        Solicitudes <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                     </div>

                     <ul class="dropdown__menu">
                        <li>
                           <a href="{{ route('applications.create') }}" class="dropdown__link">
                              <i class="ri-pie-chart-line"></i> Crear Solicitud
                           </a>                          
                        </li>

                        @role('Gerente')
                           <li>
                              <a href="{{ route('applications.index') }}" class="dropdown__link">
                                 <i class="ri-arrow-up-down-line"></i> Listado de solicitudes
                              </a>
                              
                              @role('Gerente')

                              <a href="{{ route('applications.pending') }}" class="dropdown__link">
                                 <i class="ri-arrow-up-down-line"></i> Ver Solicitudes pendientes
                              </a>

                              @endrole
                              <a href="{{ route('applications.approved') }}" class="dropdown__link">
                                 <i class="ri-arrow-up-down-line"></i> Ver Solicitudes aprobadas
                              </a>
                           </li>
                        @endrole

                     </ul>
                  </li>

                  <li class="dropdown__item">
                     <div class="nav__link">
                        Clientes <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                     </div>

                     <ul class="dropdown__menu">
                        <li>
                           <a href="{{ route('clients.createwithapplication') }}" class="dropdown__link">
                              <i class="ri-pie-chart-line"></i> Crear Solicitud y Cliente
                           </a>                          
                        </li>

                        @role('Gerente')
                           <li>
                              <a href="{{ route('clients.index') }}" class="dropdown__link">
                                 <i class="ri-arrow-up-down-line"></i> Listado de clientes
                              </a>
                           </li>
                        @endrole
                        
                     </ul>
                  </li>
                  
                  <!--=============== DROPDOWN 2 ===============-->
                  <li class="dropdown__item">
                     <div class="nav__link">
                        User <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                     </div>

                     <ul class="dropdown__menu">
                        <li>
                           <a href="#" class="dropdown__link">
                              <i class="ri-user-line"></i> Perfil
                           </a>                          
                        </li>

                        <li>
                           <a href="{{ route('logout') }}" class="dropdown__link">
                              <i class="ri-lock-line"></i> Logout
                           </a>
                        </li>
                     </ul>
                  </li>

               </ul>
            </div>
         </nav>
      </header>

      <!--=============== JS ===============-->
      <script src="{{ asset('js/menu.js') }}"></script>
