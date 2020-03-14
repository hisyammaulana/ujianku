<div class="iq-sidebar">
    <div class="iq-sidebar-logo d-flex justify-content-between">
        <a href="index.html">
            <img src="{{asset('template/images/logo.png')}}" class="img-fluid" alt="">
            <span>Sofbox</span>
        </a>
        <div class="iq-menu-bt align-self-center">
            <div class="wrapper-menu">
                <div class="line-menu half start"></div>
                <div class="line-menu"></div>
                <div class="line-menu half end"></div>
            </div>
        </div>
    </div>
    <div id="sidebar-scrollbar">
        <nav class="iq-sidebar-menu">
            <ul id="iq-sidebar-toggle" class="iq-menu">
                <li class="iq-menu-title"><i class="ri-separator"></i><span>Main</span></li>
                @if (Auth::user()->role_id == 1)
                <li><a href="{{route('beranda')}}" class="iq-waves-effect"><i class="ri-chat-check-line"></i><span>Beranda</span></a></li>
                <li>
                    <a href="#mailbox" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-mail-line"></i><span>Data Master</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                    <ul id="mailbox" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li><a href="app/index.html">Pengguna Provinsi</a></li>
                        <li><a href="app/email-compose.html">Pengguna Dinas</a></li>
                        <li><a href="app/email-compose.html">Pengguna Sekolah</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#siswa" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-mail-line"></i><span>Data Siswa</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                    <ul id="siswa" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li><a href="{{route('siswa')}}">Lihat Siswa</a></li>
                        <li><a href="{{route('siswa.tambah')}}">Tambah Siswa</a></li>
                    </ul>
                </li>
                <li><a href="{{route('sekolah.kehadiran')}}" class="iq-waves-effect"><i class="ri-chat-check-line"></i><span>Data Kehadiran</span></a></li>
                <li><a href="{{route('sekolah.kehadiran')}}" class="iq-waves-effect"><i class="ri-chat-check-line"></i><span>Data Nilai UN</span></a></li>
                @elseif (Auth::user()->role_id == 2)
                <li><a href="{{route('beranda')}}" class="iq-waves-effect"><i class="ri-chat-check-line"></i><span>Beranda</span></a></li>
                <li>
                    <a href="#mailbox" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-mail-line"></i><span>Data Master</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                    <ul id="mailbox" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li><a href="app/index.html">Pengguna Provinsi</a></li>
                        <li><a href="app/email-compose.html">Pengguna Dinas</a></li>
                        <li><a href="app/email-compose.html">Pengguna Sekolah</a></li>
                    </ul>
                </li>
                @elseif (Auth::user()->role_id == 3)
                <li><a href="{{route('beranda')}}" class="iq-waves-effect"><i class="ri-chat-check-line"></i><span>Beranda</span></a></li>
                <li>
                    <a href="#mailbox" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-mail-line"></i><span>Data Master</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                    <ul id="mailbox" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li><a href="{{route('cabang')}}">Data Sekolah</a></li>
                        <li><a href="{{route('cabang.siswa')}}">Data Siswa</a></li>
                    </ul>
                </li>
                <li><a href="{{route('cabang.kehadiran')}}" class="iq-waves-effect"><i class="ri-chat-check-line"></i><span>Data Kehadiran</span></a></li>
                @elseif (Auth::user()->role_id == 4)
                <li><a href="{{route('beranda')}}" class="iq-waves-effect"><i class="ri-chat-check-line"></i><span>Beranda</span></a></li>
                <li>
                    <a href="#siswa" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-mail-line"></i><span>Data Siswa</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                    <ul id="siswa" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li><a href="{{route('siswa')}}">Lihat Siswa</a></li>
                        <li><a href="{{route('siswa.tambah')}}">Tambah Siswa</a></li>
                    </ul>
                </li>
                <li><a href="{{route('sekolah.kehadiran')}}" class="iq-waves-effect"><i class="ri-chat-check-line"></i><span>Data Kehadiran</span></a></li>
                @endif
            </ul>
        </nav>
        <div class="p-3"></div>
    </div>
</div>
