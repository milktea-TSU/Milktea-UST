    <div class="menu-icon">
        <i class="fas fa-bars header__menu"></i>
    </div>

    <header class="header">
        <div class="header__avatar" style="color:white;margin-left:85%">Chào {{$name}} |</div>
        <div class="header__avatar"> <a href="{{route('logout')}}" style="text-decoration: none;color:aqua">Đăng xuất</a></div>
    </header>
    <aside class="sidenav">
        <div class="sidenav__close-icon">
            <i class="fas fa-times sidenav__brand-close"></i>
        </div>
        <div><a href="index.php"><img class="logo" src="{{asset('img/logo.png')}}" alt=""></a></div>
        <ul class="sidenav__list">
            <li class="sidenav__list-item"><a style="text-decoration: none;color: white;" href="{{route('product.index')}}">SẢN PHẨM</a></li>
            <li class="sidenav__list-item"><a style="text-decoration: none;color: white;" href="{{route('nhaplieu')}}">NHẬP NGUYÊN LIỆU</a></li>
            <li class="sidenav__list-item"><a style="text-decoration: none;color: white;" href="{{route('history')}}">LỊCH SỬ GIAO DỊCH</a></li>
            <li class="sidenav__list-item"><a style="text-decoration: none;color: white;" href="{{route('revenue')}}">DOANH THU</a></li>
            <li class="sidenav__list-item"><a style="text-decoration: none;color: white;" href="{{route('information')}}">THÔNG TIN</a></li>
        </ul>
    </aside>

   