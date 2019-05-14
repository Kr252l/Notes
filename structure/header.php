<header class="container-fluid">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">JPhotography</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="icon-bar i1"></span>
          <span class="icon-bar i2"></span>
          <span class="icon-bar i3"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarDefault">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Головна<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <select style="background-color: #000;" name="category" style="height: 42px;" class="form-control" id="exampleFormControlSelect1">
                <option selected >Категорії</option>
                <?
                  while($post = mysqli_fetch_assoc($new1)){
                    ?>
                      <a href="category.php?fi=<? print $post['name']; ?>">
                        <option value="<? print $post['name']; ?>"><? print $post['name']; ?></option>
                      </a>
                    <?
                  }
                ?>
              </select>
              <span class="sr-only">(current)</span>
            </li>
          </ul>
          
        </div>
      </nav>
    </header>