<?php

	if(isset($_POST['add'])){
		$title = $_POST['title'];
		$category = $_POST['category'];
		$text = $_POST['text'];
        mysqli_query($connect, "INSERT INTO `newnote`(`title`, `category`, `text`) VALUES('$title', '$category', '$text'); ");
	}
	if (isset($_POST['RD'])) {
		$connect = mysqli_connect('localhost', 'root', '', 'notes');
		$title = $_POST['title'];
		$category = $_POST['category'];
		$text = $_POST['text'];
		$sql = "UPDATE newnote ";
	    $sql .= "SET title = '$title', category = '$category', text = '$text' WHERE id = '$id' ";
	    $result = mysqli_query($connect, $sql);
		?>
			<script type="text/javascript">
	  			window.location.href = "category.php";
			</script>
		<?	
	}
?>