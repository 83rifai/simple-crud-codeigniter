			
			<div class="col-xl-12 col-lg-12">
              
			  <div class="card shadow mb-4">
						  <div class="card-header py-3">
							<h6 class="m-0 font-weight-bold text-primary">Data Barang</h6>
						  </div>
						  <div class="card-body">
							<div class="table-responsive">
							  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
								<thead>
								  <tr>
									<th>Kode Barang</th>
									<th>Nama</th>
									<th>Harga</th>
								  </tr>
								</thead>
								<tfoot>
								  <tr>
								    <th>Kode Barang</th>
									<th>Nama</th>
									<th>Harga</th>
								  </tr>
								</tfoot>
								<tbody>
								<?php
									foreach ($data as $row)
									{
										echo "<tr>";
											echo "<td>".$row["kode"]."</td>";
											echo "<td>".$row["nama"]."</td>";
											echo "<td>".$row["harga"]."</td>";
										echo "</tr>";
									}
								?>
								</tbody>
							  </table>
							</div>
						  </div>
						</div>
						  </div>
			  
						  <!-- Pie Chart -->
			  <script>
				  $(document).ready(function() {
					  $('#dataTable').DataTable();
				  } );
			  </script>
			  