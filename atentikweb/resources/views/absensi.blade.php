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
				<div class="container-fluid">
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
								 AA 301 &nbsp
								 <b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li><a href="#">AA 302</a></li>
								<li><a href="#">AA 303</a></li>
							</ul>
						</div>
					</div>
					
					<br>
					<div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="orange">
                                    <i class="material-icons">content_copy</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Total Masuk</p>
                                    <h3 class="title">49/50
                                        <small>GB</small>
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons text-danger">warning</i>
                                        <a href="#pablo">Get More Space...</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="green">
                                    <i class="material-icons">store</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Revenue</p>
                                    <h3 class="title">$34,245</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">date_range</i> Last 24 Hours
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="red">
                                    <i class="material-icons">info_outline</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Fixed Issues</p>
                                    <h3 class="title">75</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">local_offer</i> Tracked from Github
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="blue">
                                    <i class="fa fa-twitter"></i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Followers</p>
                                    <h3 class="title">+245</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">update</i> Just Updated
                                    </div>
                                </div>
                            </div>
                        </div>
						<div class="col-md-12">
                            <div class="card card-plain">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Total akumulasi uang dari kompensasi </h4>
                                    <p class="category">Handcrafted by our friends from
                                        <a target="_blank" href="https://design.google.com/icons/">Google</a>
                                    </p>
                                </div>
                                
                            </div>
                        </div>
						
						<div class="col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="orange">
                                    <h4 class="title">Data Absensi Realtime</h4>
                                    <p class="category">New employees on 15th September, 2016</p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table table-hover">
                                        <thead class="text-warning">
                                            <th>Nama Mahasiswa</th>
                                            <th>NIM</th>
                                            <th>Kelas </th>
                                            <th>Jam Matkul</th>
											<th>Jam Hadir</th>
											<th>Keterlambatan</th>
											<th>Action</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Dakota Rice</td>
                                                <td>$36,738</td>
                                                <td>Niger</td>
												<td>$36,738</td>
                                                <td>Niger</td>
												<td>$36,738</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Minerva Hooper</td>
                                                <td>$23,789</td>
                                                <td>Curaçao</td>
												<td>$36,738</td>
                                                <td>Niger</td>
												<td>$36,738</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Sage Rodriguez</td>
                                                <td>$56,142</td>
                                                <td>Netherlands</td>
												<td>$36,738</td>
                                                <td>Niger</td>
												<td>$36,738</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Philip Chaney</td>
                                                <td>$38,735</td>
                                                <td>Korea, South</td>
												<td>$36,738</td>
                                                <td>Niger</td>
												<td>$36,738</td>                                                
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
						
						 <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="green" >
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
						
						 <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="red">
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