<?php
	include 'connection.php';
	$query = "SELECT * FROM chat ORDER BY id DESC";
	$run = $con -> query($query);
	$flag = true;
	while ($row = $run->fetch_array()) :
		if($flag) $style="rgb(240,236,235)";
		else $style="rgb(220,210,205)";
		$flag = !$flag;
?>
<div id="message" style ="background-color:<?=$style?>">
	<i class="far fa-user fa-1.5x"></i> >
	<a class="message-author" href="#"> <?php echo $row['name'];?> </a>
	<span class="message-date"> <?php echo formatDate($row['date']);?> </span>
	<span class="message-content"> <?php echo $row['message'];?> </span>
</div>
<?php 
	$i = !$i;
	endwhile; ?>