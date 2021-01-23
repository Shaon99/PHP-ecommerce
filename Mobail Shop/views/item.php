  <?php 
	include 'main_header.php';
	require_once '../controllers/ProductsController.php';
	$id = $_GET["id"];
	$products = getProduct($id);
?>
<!--item starts -->
<div class="center">
<?php
		foreach($products as $p)
		{	
	?>
<table>
<tr>
<td>	
        <img src="<?php echo $p["image"];?>" width="400" height="400" ></img>
		<input type="number" placeholder="1" style="width:185px;font-family:consolas;margin-top:5px;" class="form-control">
		<div class="add-to-cart"><a class="btn btn-warning" style="width:185px;font-family:consolas;margin-top:5px;">Add to Cart</a></span></div>
</td>
		<td style="padding-left:100px;">
		<h1 class="text"><?php echo $p["name"];?></h1>
		<h2 class="text"><?php echo $p["price"];?></h2>
		<p class="text"> <?php echo $p["description"];?></p>
		</td>
		
		
	<?php
		}
	?>
	</tr>
	</table>
</div>
