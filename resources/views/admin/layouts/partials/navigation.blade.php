<ul class="rd-navbar-nav">
    <li><a href="{{ route('web.home') }}" target="_blank" title="Web">Xem Trang chủ</a></li>
    <li><a href="#" title="Giới thiệu">Giới thiệu</a></li>
    <li><a href="{{ route('admin.services.index') }}" title="Dịch vụ">Dịch vụ</a></li>
    <li class="rd-navbar--has-dropdown rd-navbar-submenu">
        <a href="#" title="Dự án">
            Dự án
        </a>
        <ul class="rd-navbar-dropdown">
            <li><a href="#" title="Dịch vụ">Danh sách</a></li>
            <li><a href="{{ route('admin.project-categories.index') }}" title="Phân loại dự án">Phân loại</a></li>
        </ul>
    </li>
    <li class="rd-navbar--has-dropdown rd-navbar-submenu">
        <a href="#" title="Tài khoản">
            Tài khoản
        </a>
        <ul class="rd-navbar-dropdown">
            <li><a href="#">Thoát</a></li>
        </ul>
    </li>
</ul>
