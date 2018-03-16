
@extends('layouts.layout')

@section('judul')

<a class="navbar-brand" href="#" style="font-size:30px; margin-bottom:-100px"><b>TRACKING</b></a><br><br><br><br><br>

@endsection

@section('sidebarmenu')

	<div class="sidebar-wrapper">
		<ul class="nav">
			<li>
				<a href="/dashboardtotal">
					<i class="material-icons">content_paste</i>
					<p>Absensi</p>
				</a>
			</li>
			<li class="active">
				<a href="/tracking">
					<i class="material-icons">room</i>
					<p>Tracking</p>
				</a>
			</li>
			<li>
				<a href="/broadcastmessage">
					<i class="material-icons">rss_feed</i>
					<p>Broadcast Message</p>
				</a>
			</li>
			<li>
				<a href="/jadwalkuliah">
					<i class="material-icons">today</i>
					<p>Jadwal Kuliah</p>
				</a>
			</li>
			<li>
				<a href="/datamahasiswa">
					<i class="material-icons">people</i>
					<p>Data Mahasiswa</p>
				</a>
			</li>
			<li>
				<a href="/datadosen">
					<i class="material-icons">person</i>
					<p>Data Dosen</p>
				</a>
			</li>
			<li>
				<a href="/dataadmin">
					<i class="material-icons text-gray">person_outline</i>
					<p>Data Admin</p>
				</a>
			</li>
			<li>
				<a href="lockscreen">
					<i class="material-icons">lock</i>
					<p>Lockscreen</p>
				</a>
			</li>
		</ul>
	</div>

@endsection

@section('isi')

<div class="container-fluid" style="margin-top:30px">
	<div class="row">
		<div class="col-md-3">
			<nav class="navbar navbar-danger">
				<center>
					<div class="dropdown">
						<a href="/tracking" class="btn btn-danger dropdown-toggle " data-toggle="dropdown" style="width:98%">
							REALTIME TRACKING &nbsp
							<i class="material-icons">arrow_drop_down</i>
						</a>
							
						<ul class="dropdown-menu" style="width:100%; text-align:center; margin-top:15px">
							<li><a href="/behaviourmahasiswa" style="width:98%">Behaviour Mahasiswa</a></li>
							<li><a href="behaviourdosen" style="width:98%">Behaviour Dosen</a></li>
						</ul>
					</div>
				</center>
			</nav>
		</div>
	</div>
						
	<div id="map"></div>
</div>

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

 
