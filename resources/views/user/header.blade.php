<style>
    .sub-menu.dropdown-menu {
        display: none;
        position: absolute;
        background-color: #fff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    .dropdown:hover .sub-menu.dropdown-menu {
        display: block;
    }

    .sub-menu.dropdown-menu li a {
        padding: 10px;
        text-decoration: none;
        color: #333;
        display: block;
    }

    .sub-menu.dropdown-menu li a:hover {
        background-color: #f0f0f0;
    }
</style>

<header class="header-area header-style-1 header-height-2">

    <!-- Header middle section, hidden on small screens, adjusted padding -->
    <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
        <div class="container">
            <div class="header-wrap">
                <div class="logo logo-width-1">
                    <a href="/"><img src="user/assets/imgs/logo/app_logo.png" alt="logo"></a>
                </div>
                <div class="header-right">
                    <div class="search-style-1">
                        <form action="{{url('/search-a-product')}}" method="GET">
                            @csrf                                  
                            <input type="text" name="search" class="form-control" placeholder="Buscar producto...">
                        </form>
                    </div>
                    <div class="header-action-right">
                        <div class="header-action-2">
                            <div class="header-action-icon-2">
                                @if (Route::has('login'))
                                    @auth
                                        @if ($cartData->isEmpty())
                                            <a class="mini-cart-icon" href="{{route('user.cart')}}">
                                                <img alt="Surfside Media" src="user/assets/imgs/theme/icons/icon-cart.svg">
                                                <span class="pro-count blue">0</span>
                                            </a>
                                            <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                                <p>Carrito vacio</p>
                                            </div>
                                        @else
                                            <?php $product_in_cart = 0; ?>
                                            @foreach($cartData as $data)
                                                <?php $product_in_cart += 1; ?>
                                            @endforeach
                                            <a class="mini-cart-icon" href="{{route('user.cart')}}">
                                                <img alt="Surfside Media" src="user/assets/imgs/theme/icons/icon-cart.svg">
                                                <span class="pro-count blue">{{$product_in_cart}}</span>
                                            </a>
                                            <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                                <ul>
                                                    @foreach ($cartData as $cart)
                                                        <li>
                                                            <div class="shopping-cart-img">
                                                                <a href="{{url('product_details',$cart->product_id)}}"><img alt="Product Image" src="products_images/{{$cart->image}}"></a>
                                                            </div>
                                                            <div class="shopping-cart-title">
                                                                <h4><a href="{{url('product_details',$cart->product_id)}}">Ver detalles</a></h4>
                                                                <h4><span>{{$cart->quantity}} × </span>${{$cart->price/$cart->quantity}}</h4>
                                                            </div>
                                                            <div class="shopping-cart-delete">
                                                                <a href="#"><i class="fi-rs-cross-small"></i></a>
                                                            </div>
                                                        </li>
                                                    <?php $totalPrice += $cart->price ?>
                                                    @endforeach
                                                </ul>
                                                <div class="shopping-cart-footer">
                                                    <div class="shopping-cart-total">
                                                        <h4>Total <span>${{$totalPrice}}</span></h4>
                                                    </div>
                                                    <div class="shopping-cart-button">
                                                        <a href="{{route('user.cart')}}" class="outline">Ver carrito</a>
                                                        <a href="{{route('user.checkout')}}">Comprar</a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @else
                                        <a class="mini-cart-icon" href="#">
                                            <img alt="Surfside Media" src="user/assets/imgs/theme/icons/icon-cart.svg">
                                            <span class="pro-count blue">0</span>
                                        </a>
                                        <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                            <div class="shopping-cart-footer">
                                                <div class="shopping-cart-total">
                                                    <center>
                                                        <img style="width: 50%" src="/user/assets/imgs/empty-cart-img.png" alt="">
                                                        <h4>Debes iniciar sesión primero</h4>
                                                        <div class="shopping-cart-button">
                                                            <a href="{{route('login')}}" class="outline">Iniciar sesión</a>
                                                        </div>
                                                    </center>
                                                </div>
                                            </div>
                                        </div>
                                    @endauth
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main navigation for large screens -->
    <div class="header-nav d-none d-lg-block">
        <div class="main-menu main-menu-padding-1 main-menu-lh-2">
            <nav>
                <ul class="d-flex justify-content-evenly">
                    @if (Route::has('login'))
                        @auth
                            <li><a class="active" href="{{url('/')}}">Inicio</a></li>
                            <li><a href="{{route('user.shop')}}">Comprar</a></li>
                            <li><a href="{{route('user.contact')}}">Contáctanos</a></li>
                            <li><a href="{{ route('user.account') }}">Dashboard</a></li>
                            <li><a href="{{url('/orders')}}">Ordenes</a></li>
                            <li><a href="{{ route('user.logout') }}">Cerrar sesión</a></li>
                        @else
                            <li><a href="{{route('login')}}">Iniciar sesión</a> / <a href="{{route('register')}}">Crear cuenta</a></li>
                        @endauth
                    @endif
                </ul>
            </nav>
        </div>
    </div>

    <!-- Header navigation for smaller screens (mobile) -->
    <div class="header-nav d-block d-lg-none">
        <div class="main-menu main-menu-padding-1 main-menu-lh-2">
            <nav>
                <ul class="d-flex justify-content-evenly">
                    @if (Route::has('login'))
                        @auth
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Menú <i class="fi-rs-angle-down"></i></a>
                                <ul class="sub-menu dropdown-menu">
                                    <li><a class="active" href="{{url('/')}}">Inicio</a></li>
                                    <li><a href="{{route('user.shop')}}">Comprar</a></li>
                                    <li><a href="{{route('user.contact')}}">Contáctanos</a></li>
                                    <li><a href="{{ route('user.account') }}">Dashboard</a></li>
                                    <li><a href="{{url('/orders')}}">Ordenes</a></li>
                                    <li><a href="{{ route('user.logout') }}">Cerrar sesión</a></li>
                                </ul>
                            </li>
                        @else
                            <li><a href="{{route('login')}}">Iniciar sesión</a> / <a href="{{route('register')}}">Crear cuenta</a></li>
                        @endauth
                    @endif
                </ul>
            </nav>
        </div>
    </div>

    <!-- Cart icon for smaller screens (mobile) -->
    <div class="header-action-right d-block d-lg-none">
        <div class="header-action-2">
            <div class="header-action-icon-2">
                @if (Route::has('login'))
                    @auth
                        @if ($cartData->isEmpty())
                            <a class="mini-cart-icon" href="{{route('user.cart')}}">
                                <img alt="Surfside Media" src="user/assets/imgs/theme/icons/icon-cart.svg">
                                <span class="pro-count blue">0</span>
                            </a>
                        @else   
                            <?php $product_in_cart = 0; ?>
                            @foreach($cartData as $data)
                                <?php $product_in_cart += 1; ?>
                            @endforeach
                            <a class="mini-cart-icon" href="{{route('user.cart')}}">
                                <img alt="Surfside Media" src="user/assets/imgs/theme/icons/icon-cart.svg">
                                <span class="pro-count blue">{{$product_in_cart}}</span>
                            </a>
                        @endif
                    @else
                        <a class="mini-cart-icon" href="{{route('user.cart')}}>
                            <img alt="Surfside Media" src="user/assets/imgs/theme/icons/icon-cart.svg">
                            <span class="pro-count blue">0</span>
                        </a>
                    @endauth
                @endif
            </div>
        </div>
    </div>

</header>



<script>
    var dropdownToggle = document.querySelectorAll('.dropdown-toggle');
    dropdownToggle.forEach(function (item) {
        item.addEventListener('click', function (e) {
            var parentLi = this.parentElement;
            var subMenu = parentLi.querySelector('.sub-menu');
            subMenu.classList.toggle('show'); 
        });
    });
</script>
