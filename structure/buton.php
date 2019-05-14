<?php

	if(isset($_POST['add'])){
		$title = $_POST['title'];
		$category = $_POST['category'];
		$text = $_POST['text'];
		echo $title;
		echo $category;
		echo $text;
        mysqli_query($connect, "INSERT INTO `newnote`(`title`, `category`, `text`) VALUES('$title', '$category', '$text'); ");
        echo "string";
	}
?>