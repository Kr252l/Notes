<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Категорії</title>
    <meta name="description" content="JPhotography Minimal Photographey/Photographer Portolio">
    
    <!-- Playfair Display - Raleway Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900|Raleway:100,300,400,600,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <!-- Custom Styles -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/dark-theme.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <?php
      include 'structure/header.php';
    ?>

    <?php
      include 'config.php';
    ?>
    <!-- Corner Borders -->
    <section class="borders">
      <div class="brTR">
      </div>
      <div class="brTL">
      </div>
      <div class="brBL">
      </div>
      <div class="brBR">
      </div>
    </section>

    
    <br>
    <br>
    <div class="container">
      <div id="accordion">
        <?
          while ($post = mysqli_fetch_assoc($new1)) {
            $name = $post['name'];
        ?>
        <div class="card">
          <div class="card-header" id="heading<? print $name; ?>">
            <h5 class="mb-0">
              <button class="btn btn-link" data-toggle="collapse" data-target="#collapse<? print $name; ?>" aria-expanded="true" aria-controls="collapse<? print $name; ?>">
                <? print $name; ?>
              </button>
            </h5>
          </div>

          <div id="collapse<? print $name; ?>" class="collapse show" aria-labelledby="heading<? print $name; ?>" data-parent="#accordion">
            <div class="card-body">
              <?
                $connect = mysqli_connect('localhost', 'root', '', 'notes');
                $newnotes = mysqli_query($connect, "SELECT * FROM newnote");
                while($host = mysqli_fetch_assoc($newnotes)) {
                  if($host['category'] == $name){
              ?>
                  <div class="row">
                    <div class="col-md-2">
                      <h3 style="color: #000;"><? print $host['title']; ?></h3>
                    </div>
                    <div class="col-md-6">
                      <h6 style="color: #000;"><? print $host['text']; ?></h6>
                    </div>
                    <div class="col">
                      <div style=" height: 50px;" class="btn-group" role="group" aria-label="Basic example">

                        <a class="btn btn-dark" href="delete.php?k=0&id=<?echo $host['id']?>">Редагувати</a>
                        <a href="delete.php?k=1&id=<?echo $host['id']?>" class="btn btn-dark">Видалити</a>

                      </div>
                    </div>
                  </div>
                <hr>
              <?
                  }
                }
              ?>
          </div>
        </div>
        <?
          }
        ?>
      </div> 
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