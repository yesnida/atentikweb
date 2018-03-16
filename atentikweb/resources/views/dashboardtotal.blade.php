@extends('layouts.layout')

@section('judul')

<a class="navbar-brand" href="#" style="font-size:30px; margin-bottom:-100px"><b>ABSENSI</b></a><br><br><br><br><br>


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
				<div class="container-fluid" style="margin-top:30px">
                    <div class="row">
						<div class="col-md-3">
							<nav class="navbar navbar-danger" >
								<center>
									<div class="dropdown">
										<a href="/dashboardtotal" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" style="width:98%;" >
											Dashboard Total &nbsp
											<i class="material-icons">arrow_drop_down</i>
										</a>
										<ul class="dropdown-menu" style="width:100%; text-align:center; margin-top:15px">
											<li><a href="/dashboardtabel"  style="width:98%">Dashboard Tabel </a></li>
											<li><a href="/dashboardgrafik" style="width:98%">Dashboard Grafik</a></li>
										</ul>
									</div>
								</center>
							</nav>
						</div>
					
						<div class="col-md-4">
						</div>
						
						<div class="col-md-3">
							<nav class="navbar navbar-danger">
								<center>
									<div class="dropdown">
										<a href="#" class="btn btn-danger dropdown-toggle " data-toggle="dropdown" style="width:98%">
											Semua Data &nbsp
											<i class="material-icons">arrow_drop_down</i>
										</a>
							
										<ul class="dropdown-menu" style="width:100%; text-align:center; margin-top:15px">
											<li><a href="#" style="width:98%">Nama Ruangan</a></li>
											<li><a href="#" style="width:98%">Nama Kelas </a></li>
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
											AA 301 &nbsp
											<i class="material-icons">arrow_drop_down</i>
										</a>
							
										<ul class="dropdown-menu" style="width:100%; text-align:center; margin-top:15px">
											<li><a href="#" style="width:98%">AA 302</a></li>
											<li><a href="#" style="width:98%">AA 303</a></li>
											<li><a href="#" style="width:98%">AA 304</a></li>
											<li><a href="#" style="width:98%">AA 305</a></li>
										</ul>
									</div>
								</center>
							</nav>
						</div>
					</div>
					
					<br>
					
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
						<div class="col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-header" style="background-color:black">
                                    <h5 class="title">Data Absensi Realtime</h5>
                                </div>
								<div class="container">
                
									<div class="toolbar">
										<button id="alertBtn" class="btn btn-default">Alert</button>
									</div>
									
									<div class="card-content table-responsive">
										<table id="fresh-table">
											<thead>
												<th data-field="id">ID</th>
												<th data-field="name" data-sortable="true">Name</th>
												<th data-field="salary" data-sortable="true">Salary</th>
												<th data-field="country" data-sortable="true">Country</th>
												<th data-field="city">City</th>
												<th data-field="actions" data-formatter="operateFormatter" data-events="operateEvents">Actions</th>
											</thead>
											<tbody>
												<tr>
													<td>1</td>
													<td>Dakota Rice</td>
													<td>$36,738</td>
													<td>Niger</td>
													<td>Oud-Turnhout</td>
													<td></td>
												</tr>
												<tr>
													<td>2</td>
													<td>Minerva Hooper</td>
													<td>$23,789</td>
													<td>Curaçao</td>
													<td>Sinaai-Waas</td>
													<td></td>
												</tr>
												<tr>
													<td>3</td>
													<td>Sage Rodriguez</td>
													<td>$56,142</td>
													<td>Netherlands</td>
													<td>Baileux</td>
													<td></td>
												</tr>
												<tr>
													<td>4</td>
													<td>Philip Chaney</td>
													<td>$38,735</td>
													<td>Korea, South</td>
													<td>Overland Park</td>
													<td></td>
												</tr>
												<tr>
													<td>5</td>
													<td>Doris Greene</td>
													<td>$63,542</td>
													<td>Malawi</td>
													<td>Feldkirchen in Kärnten</td>
													<td></td>
												</tr>
												<tr>
													<td>6</td>
													<td>Mason Porter</td>
													<td>$78,615</td>
													<td>Chile</td>
													<td>Gloucester</td>
													<td></td>
												</tr>
												<tr>
													<td>7</td>
													<td>Alden Chen</td>
													<td>$63,929</td>
													<td>Finland</td>
													<td>Gary</td>
													<td></td>
												</tr>
												<tr>
													<td>8</td>
													<td>Colton Hodges</td>
													<td>$93,961</td>
													<td>Nicaragua</td>
													<td>Delft</td>
													<td></td>
												</tr>
												<tr>
													<td>9</td>
													<td>Illana Nelson</td>
													<td>$56,142</td>
													<td>Heard Island</td>
													<td>Montone</td>
													<td></td>
												</tr>
												<tr>
													<td>10</td>
													<td>Nicole Lane</td>
													<td>$93,148</td>
													<td>Cayman Islands</td>
													<td>Cottbus</td>
													<td></td>
												</tr>
												<tr>
													<td>11</td>
													<td>Chaim Saunders</td>
													<td>$5,502</td>
													<td>Romania</td>
													<td>New Quay</td>
													<td></td>
												</tr>
												<tr>
													<td>12</td>
													<td>Josiah Simon</td>
													<td>$50,265</td>
													<td>Christmas Island</td>
													<td>Sint-Jans-Molenbeek</td>
													<td></td>
												</tr>
												<tr>
													<td>13</td>
													<td>Ila Poole</td>
													<td>$67,413</td>
													<td>Montenegro</td>
													<td>Pontevedra</td>
													<td></td>
												</tr>
												<tr>
													<td>14</td>
													<td>Shana Mejia</td>
													<td>$58,566</td>
													<td>Afghanistan</td>
													<td>Ballarat</td>
													<td></td>
												</tr>
												<tr>
													<td>15</td>
													<td>Lana Ryan</td>
													<td>$64,151</td>
													<td>Martinique</td>
													<td>Portobuffolè</td>
													<td></td>
												</tr>
												<tr>
													<td>16</td>
													<td>Daquan Bender</td>
													<td>$91,906</td>
													<td>Sao Tome and Principe</td>
													<td>Walhain-Saint-Paul</td>
													<td></td>
												</tr>
												<tr>
													<td>17</td>
													<td>Connor Wagner</td>
													<td>$86,537</td>
													<td>Germany</td>
													<td>Solihull</td>
													<td></td>
												</tr>
												<tr>
													<td>18</td>
													<td>Boris Horton</td>
													<td>$35,094</td>
													<td>Laos</td>
													<td>Saint-Mard</td>
													<td></td>
												</tr>
												<tr>
													<td>19</td>
													<td>Winifred Ryan</td>
													<td>$64,436</td>
													<td>Ireland</td>
													<td>Ronciglione</td>
													<td></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
						
					<div class="row">
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

				
				
				
				<script type="text/javascript" src="assets/js/bootstrap-table.js"></script>

    <script type="text/javascript">
        var $table = $('#fresh-table'),
            $alertBtn = $('#alertBtn'),
            full_screen = false;
            
        $().ready(function(){
            $table.bootstrapTable({
                toolbar: ".toolbar",
    
                showRefresh: true,
                search: true,
                showToggle: true,
                showColumns: true,
                pagination: true,
                striped: true,
                pageSize: 8,
                pageList: [8,10,25,50,100],
                
                formatShowingRows: function(pageFrom, pageTo, totalRows){
                    //do nothing here, we don't want to show the text "showing x of y from..." 
                },
                formatRecordsPerPage: function(pageNumber){
                    return pageNumber + " rows visible";
                },
                icons: {
                    refresh: 'fa fa-refresh',
                    toggle: 'fa fa-th-list',
                    columns: 'fa fa-columns',
                    detailOpen: 'fa fa-plus-circle',
                    detailClose: 'fa fa-minus-circle'
                }
            });
            
                        
            
            $(window).resize(function () {
                $table.bootstrapTable('resetView');
            });
    
            
            window.operateEvents = {
                'click .like': function (e, value, row, index) {
                    alert('You click like icon, row: ' + JSON.stringify(row));
                    console.log(value, row, index);
                },
                'click .edit': function (e, value, row, index) {
                    alert('You click edit icon, row: ' + JSON.stringify(row));
                    console.log(value, row, index);    
                },
                'click .remove': function (e, value, row, index) {
                    $table.bootstrapTable('remove', {
                        field: 'id',
                        values: [row.id]
                    });
            
                }
            };
            
            $alertBtn.click(function () {
                alert("You pressed on Alert");
            });
            
        });
            
    
        function operateFormatter(value, row, index) {
            return [
                '<a rel="tooltip" title="Like" class="table-action like" href="javascript:void(0)" title="Like">',
                    '<i class="fa fa-heart"></i>',
                '</a>',
                '<a rel="tooltip" title="Edit" class="table-action edit" href="javascript:void(0)" title="Edit">',
                    '<i class="fa fa-edit"></i>',
                '</a>',
                '<a rel="tooltip" title="Remove" class="table-action remove" href="javascript:void(0)" title="Remove">',
                    '<i class="fa fa-remove"></i>',
                '</a>'
            ].join('');
        }
    
            
    </script>
@endsection