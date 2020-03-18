<div class="iq-sidebar">
    <div class="iq-sidebar-logo d-flex justify-content-between">
        <a href="{{route('beranda')}}">
            <img src="{{asset('kemendikbud.png')}}" class="img-fluid" alt="">
            <span>UN 2020</span>
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

                {{-- ========= Developer ========= --}}
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
                {{-- ========= Developer ========= --}}

                {{-- ========= Admin Provinsi ========= --}}
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
                {{-- ========= Admin Provinsi ========= --}}

                {{-- ========= Cabang Dinas ========= --}}
                @elseif (Auth::user()->role_id == 3)
                <li><a href="{{route('beranda')}}" class="iq-waves-effect"><i class="ri-chat-check-line"></i><span>Beranda</span></a></li>
                <li>
                    <a href="#mailbox" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-mail-line"></i><span>Data Master</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                    <ul id="mailbox" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li><a href="{{route('cabang')}}">Data Sekolah</a></li>
                        <li><a href="{{route('cabang.siswa')}}">Data Siswa</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#kehadiran" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-mail-line"></i><span>Data Ketidakhadiran</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                    <ul id="kehadiran" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li><a href="{{route('cabang.kehadiran')}}">Hari Ini</a></li>
                        <li><a href="{{route('cabang.siswa')}}">Semua</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#eksim" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-mail-line"></i><span>Eksport / Import Data</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                    <ul id="eksim" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li><a href="{{route('cabang.data.sekolah')}}">Sekolah</a></li>
                        <li><a href="{{route('cabang.siswa')}}">Siswa</a></li>
                        <li><a href="{{route('cabang.siswa')}}">Ketidakhadiran Peserta UN</a></li>
                    </ul>
                </li>
                {{-- ========= Cabang Dinas ========= --}}

                {{-- ========= Sekolah ========= --}}
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
                {{-- ========= Sekolah ========= --}}
            </ul>
        </nav>
        <div class="p-3"></div>
    </div>
</div>
