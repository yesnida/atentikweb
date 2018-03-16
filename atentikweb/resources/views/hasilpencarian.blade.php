
@extends('layouts.layout')

@section('judul')

<a class="navbar-brand" href="#" style="font-size:30px; margin-bottom:-100px"><b>HASIL PENCARIAN</b></a><br><br><br><br><br>

@endsection

@section('sidebarmenu')

	<div class="sidebar-wrapper">
		<ul class="nav">
			<li class="active">
				<a href="/dashboardtotal">
					<i class="material-icons">content_paste</i>
					<p>Absensi</p>
				</a>
			</li>
			<li>
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
				<a href="/lockscreen">
					<i class="material-icons">lock</i>
					<p>Lockscreen</p>
				</a>
			</li>
		</ul>
	</div>

@endsection

@section('isi')
			<div class="content" style="margin-top:30px">
                <div class="container-fluid">
				
				<div class="row">
						<div class="col-md-3">
						</div>
					
						<div class="col-md-3">
						</div>
						
						<div class="col-md-2">
							<nav class="navbar navbar-danger">
								<center>
									<div class="dropdown">
										<a href="#" class="btn btn-danger dropdown-toggle " data-toggle="dropdown" style="width:98%">
											Tahun &nbsp
											<i class="material-icons">arrow_drop_down</i>
										</a>
							
										<ul class="dropdown-menu" style="width:100%; text-align:center; margin-top:15px">
											<li><a href="#" style="width:98%">2018</a></li>
											<li><a href="#" style="width:98%">2017 </a></li>
											<li><a href="#" style="width:98%">2016</a></li>
											<li><a href="#" style="width:98%">2015 </a></li>
											<li><a href="#" style="width:98%">2014</a></li>
										</ul>
									</div>
								</center>
							</nav>
						</div>
						
						<div class="col-md-2">
							<nav class="navbar navbar-danger">
								<center>
									<div class="dropdown">
										<a href="#" class="btn btn-danger dropdown-toggle " data-toggle="dropdown" style="width:98%">
											Bulan &nbsp
											<i class="material-icons">arrow_drop_down</i>
										</a>
							
										<ul class="dropdown-menu" style="width:100%; text-align:center; margin-top:15px">
											<li><a href="#" style="width:98%">Januari</a></li>
											<li><a href="#" style="width:98%">Februari</a></li>
											<li><a href="#" style="width:98%">Maret</a></li>
											<li><a href="#" style="width:98%">April</a></li>
											<li><a href="#" style="width:98%">Mei</a></li>
											<li><a href="#" style="width:98%">Juni</a></li>
											<li><a href="#" style="width:98%">Juli</a></li>
											<li><a href="#" style="width:98%">Agustus</a></li>
											<li><a href="#" style="width:98%">September</a></li>
											<li><a href="#" style="width:98%">Oktober</a></li>
											<li><a href="#" style="width:98%">November</a></li>
											<li><a href="#" style="width:98%">Desember</a></li>
										</ul>
									</div>
								</center>
							</nav>
						</div>
						
						<div class="col-md-2">
							<nav class="navbar navbar-danger">
								<center>
									<div class="dropdown">
										<a href="#" class="btn btn-danger dropdown-toggle " data-toggle="dropdown" style="width:98%">
											Tanggal &nbsp
											<i class="material-icons">arrow_drop_down</i>
										</a>
							
										<ul class="dropdown-menu" style="width:100%; text-align:center; margin-top:15px">
											<li><a href="#" style="width:98%">1</a></li>
											<li><a href="#" style="width:98%">2</a></li>
											<li><a href="#" style="width:98%">3</a></li>
											<li><a href="#" style="width:98%">4</a></li>
											<li><a href="#" style="width:98%">5</a></li>
											<li><a href="#" style="width:98%">6</a></li>
											<li><a href="#" style="width:98%">7</a></li>
											<li><a href="#" style="width:98%">8</a></li>
											<li><a href="#" style="width:98%">9</a></li>
											<li><a href="#" style="width:98%">10</a></li>
											<li><a href="#" style="width:98%">11</a></li>
											<li><a href="#" style="width:98%">12</a></li>
											<li><a href="#" style="width:98%">13</a></li>
											<li><a href="#" style="width:98%">14</a></li>
											<li><a href="#" style="width:98%">15</a></li>
											<li><a href="#" style="width:98%">16</a></li>
											<li><a href="#" style="width:98%">17</a></li>
											<li><a href="#" style="width:98%">18</a></li>
											<li><a href="#" style="width:98%">19</a></li>
											<li><a href="#" style="width:98%">20</a></li>
											<li><a href="#" style="width:98%">21</a></li>
											<li><a href="#" style="width:98%">22</a></li>
											<li><a href="#" style="width:98%">23</a></li>
											<li><a href="#" style="width:98%">24</a></li>
											<li><a href="#" style="width:98%">25</a></li>
											<li><a href="#" style="width:98%">26</a></li>
											<li><a href="#" style="width:98%">27</a></li>
											<li><a href="#" style="width:98%">28</a></li>
											<li><a href="#" style="width:98%">29</a></li>
											<li><a href="#" style="width:98%">30</a></li>
											<li><a href="#" style="width:98%">31</a></li>
										</ul>
									</div>
								</center>
							</nav>
						</div>
				</div>
                    
					<br><br>
					
					<div class="row">						
						<div class="col-lg-12 col-md-6 col-sm-6">
                            <div class="card card-stats">
							<div class="card-header" style="background-color:transparent">
							<img src="../assets/img/faces/marc.jpg" style="width:80px">
                                </div>
                                <div class="card-content" style="text-align:left">
									<p class="category">Muhammad Rifai / 4414020052 / TI 8 Reguler</p>
                                    <h3 class="title"><font color="grey" size="2px">mrifai.tik.pnj14@mhsw.pnj.ac.id</font></h3>
                                </div>
                                
                            </div>
                        </div>
						
						<div class="col-lg-12 col-md-6 col-sm-6">
                            <div class="card card-stats">
							<div class="col-md-3">
							<img src="../assets/img/faces/marc.jpg" style="width:100px">
                            </div>
							
							<div class="col-md-9">
                                <div class="card-content" style="text-align:left">
									<p class="category">Muhammad Rifai / 4414020052 / TI 8 Reguler</p>
                                    <h3 class="title"><font color="grey" size="2px">mrifai.tik.pnj14@mhsw.pnj.ac.id</font></h3>
                                </div>
                            </div>    
                            </div>
                        </div>
					</div>
					
					<div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="orange">
                                    <i class="fa fa-user"></i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Total yang masuk</p>
                                    <h3 class="title">302</h3>
                                </div>
								<!--
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons text-danger">warning</i>
                                        <a href="#pablo">Get More Space...</a>
                                    </div>
                                </div>-->
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="green">
                                    <i class="fa fa-exclamation-circle"></i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Total yang telat</p>
                                    <h3 class="title">200</h3>
                                </div>
								<!--
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">date_range</i> Last 24 Hours
                                    </div>
                                </div>-->
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="red">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Total yang izin</p>
                                    <h3 class="title">75</h3>
                                </div>
								<!--
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">local_offer</i> Tracked from Github
                                    </div>
                                </div>-->
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="blue">
                                    <i class="fa fa-user-times"></i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Total tidak masuk</p>
                                    <h3 class="title">45</h3>
                                </div>
								<!--
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">update</i> Just Updated
                                    </div>
                                </div>-->
                            </div>
                        </div>
					</div>
						
					<div class="row">
					
						<div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="card card-stats">
							<div class="card-header" data-background-color="pink">
							<i class="fa fa-hourglass-end"></i>
                                </div>
                                <div class="card-content">
									<p class="category">Total kompensasi setelah diakumulasi</p>
                                    <h3 class="title">1500 <font color="grey" size="2px">jam</font></h3>
                                </div>
                                
                            </div>
                        </div>

						
						<div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="card card-stats">
							<div class="card-header" data-background-color="purple">
							<i class="fa fa-money"></i>
                                </div>
                                <div class="card-content">
									<p class="category">Total akumulasi uang dari kompensasi</p>
                                    <h3 class="title"><font color="grey" size="2px">Rp</font> 7.500.000</h3>
                                </div>
                                
                            </div>
                        </div>
					</div>
					
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header card-chart" data-background-color="orange">
                                    <div class="ct-chart" id="emailsSubscriptionChart"></div>
                                </div>
                                <div class="card-content">
                                    <h4 class="title">Perbandingan alpha, izin, sakit, dan bekom</h4>
                                    <p class="category">Last Campaign Performance</p>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">access_time</i> campaign sent 2 days ago
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header card-chart" data-background-color="red">
                                    <div class="ct-chart" id="completedTasksChart"></div>
                                </div>
                                <div class="card-content">
                                    <h4 class="title">Statistik kompen setiap bulan</h4>
                                    <p class="category">Last Campaign Performance</p>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">access_time</i> campaign sent 2 days ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					
					<div class="row">
						<div class="col-md-2">
							<button class="btn btn-danger">Cetak Data  <i class="material-icons">print</i>  </button>
						</div>
					</div>
                </div>
			</div>
           

@endsection