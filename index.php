<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Нотатка</title>
    <meta name="description" content="JPhotography - Minimal Photography Portfolio HTML5 Template">
    
    <!-- Playfair Display - Raleway Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900|Raleway:100,300,400,600,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <!-- Custom Styles -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/dark-theme.css">
  
  </head>
  <body>
    

    <!--bd-->
    <?php
    include 'config.php';
    ?>

    <!--header-->
    <?php
    include 'structure/header.php';
    ?>
    <br>
    <br>
    <div class="container">
      <form method="POST" action="index.php">
        <div class="row">  
          <div class="col-md-4">
            <input required name="title" style="height: 42px;" placeholder="Введіть назву нотатки" class="form-control">
            <br>
            <div class="btn-group" style="width: 100%; height: 42px;" role="group" aria-label="Button group with nested dropdown">
                <select name="category" style="height: 42px;" class="btn btn-secondary form-control" id="exampleFormControlSelect1">
                  <option selected >Виберіть категорію</option>
                  <?
                    while($post = mysqli_fetch_assoc($new1)){
                      ?>
                        <option value="<? print $post['name']; ?>"><? print $post['name']; ?></option>
                      <?
                    }
                  ?>              </select>
                <button onclick="window.location.href='new.php'" name="plus" type="button" class="btn btn-dark btn-secondary">+</button>
            </div>
          </div>
          <div class="col-md-1">
          </div>
          <div class="col-md-7 text-right">
            <textarea required required class="form-control" id="exampleFormControlTextarea1" rows="6" placeholder="Введіть нотатку" name="text"></textarea>
            <br>
            <button name="add" class="btn btn-dark">Додати</button>
          </div>
        </div>
      </form>
    </div>
    
    <?php
      include 'structure/buton.php';
    ?>

    <?php
      include 'structure/footer.php';
    ?>

    

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  </body>
</html>