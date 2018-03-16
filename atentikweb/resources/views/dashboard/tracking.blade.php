
@extends('layouts.layout')
@section('judul')
<a class="navbar-brand" href="#">Absensi</a>
@endsection

@section('sidebarmenu')
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="active">
                        <a href="dashboard.html">
                            <i class="material-icons">content_paste</i>
                            <p>Absensi</p>
                        </a>
                    </li>
                    <li>
                        <a href="./user.html">
                            <i class="material-icons">room</i>
                            <p>Tracking</p>
                        </a>
                    </li>
                    <li>
                        <a href="./table.html">
                            <i class="material-icons">rss_feed</i>
                            <p>Broadcast Message</p>
                        </a>
                    </li>
                    <li>
                        <a href="./typography.html">
                            <i class="material-icons">today</i>
                            <p>Jadwal Kuliah</p>
                        </a>
                    </li>
                    <li>
                        <a href="./icons.html">
                            <i class="material-icons">people</i>
                            <p>Data Mahasiswa</p>
                        </a>
                    </li>
                    <li>
                        <a href="./maps.html">
                            <i class="material-icons">person</i>
                            <p>Data Dosen</p>
                        </a>
                    </li>
                    <li>
                        <a href="./notifications.html">
                            <i class="material-icons text-gray">person_outline</i>
                            <p>Data Admin</p>
                        </a>
                    </li>
                    <li>
                        <a href="upgrade.html">
                            <i class="material-icons">lock</i>
                            <p>Lockscreen</p>
                        </a>
                    </li>
                </ul>
            </div>
@endsection

@section('isi')
<div class="row">
						<div class="col-md-3 dropdown">
							<a href="#" class="btn btn-simple dropdown-toggle " data-toggle="dropdown">
								<i class="material-icons">lock</i>
								 Dashboard Total
								 <b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="material-icons" style="size:5px">lock</i> &nbsp Dashboard Tabel</a></li>
								<li><a href="#"><i class="material-icons">lock</i> &nbsp Dashboard Grafik</a></li>
							</ul>
						</div>
					
						<div class="col-md-5">
						</div>
					
						<div class="col-md-2 dropdown">
							<a href="#" class="btn btn-simple dropdown-toggle " data-toggle="dropdown">
								<i class="material-icons">lock</i>
								 Semua Data
								 <b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="material-icons" style="size:5px">lock</i> &nbsp Nama Ruangan</a></li>
								<li><a href="#"><i class="material-icons">lock</i> &nbsp Nama Kelas </a></li>
							</ul>
						</div>
					
						<div class="col-md-2 dropdown">
							<a href="#" class="btn btn-simple dropdown-toggle " data-toggle="dropdown">
								<i class="material-icons">lock</i>
								 AA 301
								 <b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="material-icons" style="size:5px">lock</i> &nbsp AA 302</a></li>
								<li><a href="#"><i class="material-icons">lock</i> &nbsp AA 303</a></li>
							</ul>
						</div>
					</div>
					
<div id="map"></div>
@endsection

<script type="text/javascript">
    $(document).ready(function() {
        if ($('.main-panel > .content').length == 0) {
            $('.main-panel').css('height', '100%');
        }


        // Javascript method's body can be found in assets/js/demos.js
        demo.initGoogleMaps();
    });
</script>

 
