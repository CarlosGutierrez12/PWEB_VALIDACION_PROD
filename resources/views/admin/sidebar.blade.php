<!-- sidebar starts -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="/home"><img style="height: 65px;" src="admin/assets/images/app_logo.png" alt="logo" /></a>
        <a class="sidebar-brand brand-logo-mini" href="/home"><img src="admin/assets/images/app_logo.png"  alt="logo" /></a>
    </div>
    <ul class="nav">
        <li class="nav-item profile">
            <div class="profile-desc">
                <div class="profile-pic">
                    <div class="count-indicator">
                        <img class="img-xs rounded-circle " src="admin/assets/images/faces/face15.jpg" alt="">
                        <span class="count bg-success"></span>
                    </div>
                    @php
                        $id = Auth::user()->id;
                        $adminData = App\Models\User::find($id);
                    @endphp
                    <div class="profile-name">
                        <h5 class="mb-0 font-weight-normal">{{ Auth::user()->name }}</h5>
                        <span>Admin</span>
                    </div>
                </div>
                <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
                <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                <a href="{{url('/user/profile')}}" class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-primary"></i>
                    </div>
                    </div>
                    <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Configuración de cuenta</p>
                    </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="{{url('/user/profile')}}" class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-onepassword  text-info"></i>
                    </div>
                    </div>
                    <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Cambiar contraseña</p>
                    </div>
                </a>
            </div>
        </li>
        <li class="nav-item nav-category">
        <span class="nav-link">Navegacion</span>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('home')}}">
                <span class="menu-icon">
                    <i class="mdi mdi-speedometer"></i>
                </span>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('admin.category') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-playlist-play"></i>
                </span>
                <span class="menu-title">Categorias de productos</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-cart"></i>
              </span>
              <span class="menu-title">Productos</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('admin.view_product')}}">Agregar Productos</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('admin.show_product')}}">Ver Productos</a></li>
              </ul>
            </div>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('admin.user_orders')}}">
                <span class="menu-icon">
                <i class="mdi mdi-basket"></i>
                </span>
                <span class="menu-title">Ordenes</span>
            </a>
        </li>
    </ul>
</nav>
<!-- sidebar ends -->