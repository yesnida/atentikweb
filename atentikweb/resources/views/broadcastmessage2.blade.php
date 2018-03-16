
@extends('layouts.layout')

@section('judul')

	<a class="navbar-brand" href="#">Absensi</a>

@endsection

@section('sidebarmenu')

	<div class="sidebar-wrapper">
		<ul class="nav">
			<li>
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
			<li class="active">
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

<div class="container-fluid">

<div class="row" style="text-align:right">
	<div class="col-md-12">
		<button type="button" class="btn btn-success">DATA BARU &nbsp <i class="material-icons md-48">add</i></button>
	</div>
</div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="orange">
                                    <h4 class="title">Employees Stats</h4>
                                    <p class="category">New employees on 15th September, 2016</p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table table-hover">
                                        <thead class="text-warning">
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Salary</th>
                                            <th>Country</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Dakota Rice</td>
                                                <td>$36,738</td>
                                                <td>Niger</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Minerva Hooper</td>
                                                <td>$23,789</td>
                                                <td>Curaçao</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Sage Rodriguez</td>
                                                <td>$56,142</td>
                                                <td>Netherlands</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Philip Chaney</td>
                                                <td>$38,735</td>
                                                <td>Korea, South</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
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

 
