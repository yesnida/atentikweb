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
										<a href="/dashboardtabel" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" style="width:98%;" >
											Dashboard Tabel&nbsp
											<i class="material-icons">arrow_drop_down</i>
										</a>
										<ul class="dropdown-menu" style="width:100%; text-align:center; margin-top:15px">
											<li><a href="/dashboardtotal"  style="width:98%">Dashboard Total </a></li>
											<li><a href="/dashboardgrafik" style="width:98%">Dashboard Grafik</a></li>
										</ul>
									</div>
								</center>
							</nav>
						</div>
					
						<div class="col-md-1">
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
						
						<div class="col-md-2">
							<nav class="navbar navbar-danger">
								<center>
									<div class="dropdown">
										<a href="#" class="btn btn-danger dropdown-toggle " data-toggle="dropdown" style="width:98%">
											Kelas&nbsp
											<i class="material-icons">arrow_drop_down</i>
										</a>
							
										<ul class="dropdown-menu" style="width:100%; text-align:center; margin-top:15px">
											<li><a href="#" style="width:98%">TI 2 A</a></li>
											<li><a href="#" style="width:98%">TI 2 B</a></li>
											<li><a href="#" style="width:98%">TMJ 2</a></li>
											<li><a href="#" style="width:98%">TKJ 2</a></li>
											<li><a href="#" style="width:98%">TI 4</a></li>
											<li><a href="#" style="width:98%">TMJ 4</a></li>
											<li><a href="#" style="width:98%">TKJ 4</a></li>
										</ul>
									</div>
								</center>
							</nav>
						</div>
				</div>
				
				
				<br>
					<div class="col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="orange">
                                    <h5 class="title">Data Absensi TI 4 Reguler </h5>
									<p class="category">Jum'at, 05/02/2018</p>
                                </div>
								<div class="container">
                
                    <div class="toolbar">
						<button class="btn btn-success">Data Baru <i class="material-icons">add</i></button>
                        <button class="btn btn-info">Copy</button>
						<button class="btn btn-info">PDF</button>
						<button class="btn btn-info">CSV</button>
                    </div>
                    <div class="card-content table-responsive">
                    <table class="table table-hover">
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