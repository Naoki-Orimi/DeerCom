<footer class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="footer-left">
                    <div class="footer-logo">
                        <a href="/top" style="height: 50px;"><img src="images/deer.png" style="height:100%; width:100%;"></a>
                    </div>
                    <ul>
                        <li>Phone: 000-0000-0000</li>
                        <li>Email: hogefuga@deer.com</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 offset-lg-1">
            </div>
            <div class="col-lg-2">
                <div class="footer-widget">
                    <h5>マイアカウント</h5>
                    <ul>
                        <li><a href="/cart">カート画面へ</a></li>
                        <li><a href="/itemList">アイテム一覧へ</a></li>
                        <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                ログアウト
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-reserved">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-text">
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script>Deer Com All rights reserved
                    </div>
                    <div class="payment-pic">
                        <img src="image/payment-method.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
