<?php include 'main_header.php';
require_once '../controllers/ProductsController.php';
$products=getAllProduct();
?>
<!--Products starts -->
<div class="col-md-12">
	<?php
		foreach($products as $p)
		{	
	?>
		<div class="card-product col-md-4">
			<a href="item.php?id=<?php echo $p["id"];?>">
				<img class="card-image" src="<?php echo $p["image"];?>"></img>
				<b class="text" style="font-family:sans serif ;font-size:15px;text-transform: capitalize;"> <?php echo $p["name"];?></b>
			</a>
			<div class="price-label" ><span style="font-family:sans serif ;font-size:15px;"><b><?php echo $p["price"]." BDT";?></b></span></div>
			<div class="add-to-cart"><a href="item.php?id=<?php echo $p["id"];?>" class="btn btn-danger" style="width:185px;font-family:sans serif;margin-top:5px;">Add to Cart</a></span></div>
		
		</div>
	<?php
		}
	?>
	
	
</div>