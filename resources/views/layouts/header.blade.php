<header class="header-section">
    <div class="header-top">
        <div class="container">
            <div class="ht-left">
                <div class="mail-service">
                    <i class=" fa fa-envelope"></i>
                    hogefuga@deer.com
                </div>
                <div class="phone-service">
                    <i class=" fa fa-phone"></i>
                    123-123456789
                </div>
            </div>
            <div class="ht-right">
                <a href="/cart" class="login-panel">
                    <i class="fa fa-user"></i>
                    {{ Auth::user()->name }}<span>様</span></a>
                    {{-- <span><a href="/logout">ログアウト</a></span> --}}
            </div>
        </div>
    </div>
    <div class="container">
        <div class="inner-header">
            <div class="row">
                <div class="col-lg-3 text-right col-md-3 right-nav">
                    <ul class="nav-right">
                        <li class="cart-icon">
                            <a href="/cart">
                                <i class="fa fa-shopping-bag"></i>
                            </a>
                        </li>
                        <li class="cart-price">
                            {{ isset($totalprice) ? "¥".$totalprice : "¥0" }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="nav-item">
        <div class="container">
            <nav class="nav-menu mobile-menu">
                <ul>
                    <li><a href="/top">Home</a></li>
                    <li><a href="/itemList">Itemlist</a></li>
                    <li><a href="">Checkout</a>
                        <ul class="dropdown">
                            <li><a href="/cart">カート一覧へ</a></li>
                            <li><a href="/payment">購入画面へ</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <div id="mobile-menu-wrap"></div>
        </div>
    </div>
</header>
