<?php
	$sql="select * from typenews order by idTypenews";
	$loaitin=mysqli_query($sql);
?>

<div class="menu">
	<ul>
    	<li><a href="index.php">Trang chủ</a></li>
        <?php
			while($dong=mysqli_fetch_array($loaitin)){
				echo $dong['nameTypenews'];
			}
		?>
        //<li><a href="index.php?xem=loaitin&id=<?php echo $dong['idTypenews'] ?>">
//		<?php
//			echo $dong['nameTypenews']
//        ?></a></li>
//		<?php
//        }
//        ?>
    </ul>
</div>

<!-- ket thuc menu -->