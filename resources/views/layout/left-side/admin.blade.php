<li class="{{ (Request::path() == 'admin') ? 'active' : '' }}">
    <a href="{{ url ('admin')}}">
    <span class="pcoded-micon"><i class="ti-home"></i><b>H</b></span>
    <span class="pcoded-mtext" data-i18n="nav.dash.main">Home</span>
    <span class="pcoded-mcaret"></span>
    </a>
</li>
<li class="{{ (Request::path() == 'admin/daftarkk') ? 'active' : '' }}">
    <a href="{{ url ('admin/daftarkk')}}">
    <span class="pcoded-micon"><i class="ti-ruler-pencil"></i><b>Daftar KK</b></span>
    <span class="pcoded-mtext" data-i18n="nav.dash.main">Daftar KK</span>
    <span class="pcoded-mcaret"></span>
    </a>
</li>
{{--<li class="{{ (Request::path() == 'admin/user/opt') ? 'active pcoded-trigger' : '' }}  pcoded-hasmenu">
    <a href="javascript:void(0)">
        <span class="pcoded-micon"><i class="ti-user"></i><b>T</b></span>
        <span class="pcoded-mtext" data-i18n="nav.disabled-menu.main">User</span>
        <span class="pcoded-mcaret"></span>
    </a>
    <ul class="pcoded-submenu">
        <li class="{{ (Request::path() == 'admin/user/opt') ? 'active' : '' }}">
            <a href="{{url('admin/user/opt')}}">
                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                <span class="pcoded-mtext" data-i18n="nav.dash.infodownload">Operator</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
    </ul>
</li>
<li class="{{ (Request::path() == 'admin/aktif-pkm') ? 'active pcoded-trigger' : '' }}  pcoded-hasmenu">
    <a href="javascript:void(0)">
        <span class="pcoded-micon"><i class="ti-panel"></i><b>T</b></span>
        <span class="pcoded-mtext" data-i18n="nav.disabled-menu.main">Setting</span>
        <span class="pcoded-mcaret"></span>
    </a>
    <ul class="pcoded-submenu">
        <li class="{{ (Request::path() == 'admin/aktif-pkm') ? 'active' : '' }}">
            <a href="{{url('admin/aktif-pkm')}}">
                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                <span class="pcoded-mtext" data-i18n="nav.dash.infodownload">Status PKM</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
        <li class="coomingsoon">
            <a href="#!">
                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                <span class="pcoded-mtext text-muted" data-i18n="nav.dash.refrensijudul">Tahun PKM</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
        <li class="coomingsoon">
            <a href="#!">
                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                <span class="pcoded-mtext text-muted" data-i18n="nav.dash.galeriposter">Info Pop UP</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
    </ul>
</li>--}}