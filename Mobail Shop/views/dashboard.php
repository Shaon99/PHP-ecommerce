<?php
	if(!isset($_COOKIE["username"])){
		header("Location: login.php");
	}
	include 'admin_header.php';
?>
<!--dashboard starts -->
<div>
	<table  align="center">
		<tr>
			<td>
				<div class="card">
				<span class="text-white"> Total Products <br>
					
				</span>
				</div>
			</td>
			<td>
				<div class="card">
				<span class="text-white"> Total Products <br>
					
				</span>
				</div>
			</td>
			<td>
				<div class="card">
				<span class="text-white"> Total Products <br>
					
				</span>
				</div>
			</td>
		</tr>
	</table>
</div>
<div class="center">
	<h3 class="text">Recent Sales</h3>
	<table class="table table-striped">
		<thead>
			<th>Sl#</th>
			<th>Product Name</th>
			<th>Product Price</th>
			<th>Sales Qty</th>
			<th>Sales Date</th>
		</thead>
		<tbody>
			<td</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tbody>
	</table>
</div>
