<?
    $connect = mysqli_connect(localhost,root,'');
    $db = mysqli_select_db($connect, notes);
    $connect = mysqli_connect('localhost', 'root', '', 'notes');
    $new1 = mysqli_query($connect, "SELECT * FROM new");
    $newnotes = mysqli_query($connect, "SELECT * FROM newnotes");
?> 