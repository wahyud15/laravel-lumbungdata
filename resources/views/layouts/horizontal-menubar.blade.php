<div class="navbar-custom">
    <div class="container-fluid">

        <div id="navigation">

            <!-- Navigation Menu-->
            <ul class="navigation-menu">
            @auth
                <li class="has-submenu">
                    <a href="{{ route('dashboard') }}"><i class="icon-accelerator"></i> Dashboard</a>
                </li>

                <li class="has-submenu">
                    <a href="#"><i class="icon-pencil-ruler"></i> Tabel Dinamis <i class="mdi mdi-chevron-down mdi-drop"></i></a>
                    <ul class="submenu">
                        
                            @if(Auth()->user()->IsSuperAdmin())
                            <li class="has-submenu">
                                <a href="#">Kelola Master Tabel</a>
                                <ul class="submenu">
                                    <li><a href="{{ route('tabeldinamis.msubjek') }}">Master Subjek</a></li>
                                    <li><a href="{{ route('tabeldinamis.mindikator') }}">Master Indikator</a></li>
                                    <li><a href="{{ route('tabeldinamis.mkarakteristik') }}">Master Krakteristik</a></li>
                                    <li><a href="{{ route('tabeldinamis.mbaris') }}">Master Judul Baris</a></li>
                                    <li><a href="{{ route('tabeldinamis.mperiode') }}">Master Periode</a></li>
                                    <li><a href="{{ route('tabeldinamis.msatuan') }}">Master Satuan</a></li>
                                </ul>
                            </li>
                            @endif
                            @if(Auth()->user()->IsSuperAdmin())
                            <li><a href="{{ route('tabeldinamis.showMappingIndikator') }}">Mapping Tabel</a></li>
                            @endif
                       

                        <li><a href="{{ route('tabeldinamis.inputtabeldinamis') }}">Input Data Tabel</a></li>
                    </ul>
                </li>
                

                <!-- <li class="has-submenu">
                    <a href="index.html"><i class="icon-accelerator"></i> Evaluasi Data</a>
                </li> -->
                @endauth
                <li class="has-submenu">
                    <a href="{{ route('galeridata.showGaleriData') }}"><i class="icon-blackboard-graph"></i> Galeri Data</a>
                </li>

            </ul>
            <!-- End navigation menu -->
        </div>
        <!-- end #navigation -->
    </div>
    <!-- end container -->
</div>
