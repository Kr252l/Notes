<?

    $connect = mysqli_connect('localhost', 'root', '', 'notes');
    $new1 = mysqli_query($connect, "SELECT * FROM new");
    $newnotes = mysqli_query($connect, "SELECT * FROM newnote");

?>