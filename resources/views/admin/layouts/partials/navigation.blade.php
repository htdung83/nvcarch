<ul class="rd-navbar-nav">
    <li><a href="{{ route('web.home') }}" target="_blank" title="Trang chủ">Xem Trang chủ</a></li>
    <li class="rd-navbar--has-dropdown rd-navbar-submenu">
        <a href="#" title="Thông tin Công ty">Thông tin Công ty</a>
        <ul class="rd-navbar-dropdown">
            <li><a href="{{ route('admin.about-us.create') }}" title="Giới thiệu">Giới thiệu</a></li>
            <li><a href="{{ route('admin.staff-members.index') }}" title="Ban lãnh đạo">Ban lãnh đạo</a></li>
            <li><a href="{{ route('admin.testimonials.index') }}" title="Ý kiến khách hàng">Ý kiến khách </a></li>
        </ul>
    </li>
    <li><a href="{{ route('admin.services.index') }}" title="Dịch vụ">Dịch vụ</a></li>
    <li class="rd-navbar--has-dropdown rd-navbar-submenu">
        <a href="#" title="Dự án">
            Dự án
        </a>
        <ul class="rd-navbar-dropdown">
            <li><a href="{{ route('admin.projects.index') }}" title="Danh sách dự án">Danh sách dự án</a></li>
            <li><a href="{{ route('admin.project-categories.index') }}" title="Loại dự án">Loại dự án</a></li>
        </ul>
    </li>
    <li class="rd-navbar--has-dropdown rd-navbar-submenu">
        <a href="#" title="Tài khoản">
            Tài khoản
        </a>
        <ul class="rd-navbar-dropdown">
            <li><a href="#"
                   onclick="javascript: document.getElementById('logoutForm').submit(); return false;">Thoát</a></li>
        </ul>
    </li>
</ul>
<form id="logoutForm" action="{{ route('logout') }}" method="post" style="display: none">@csrf</form>
