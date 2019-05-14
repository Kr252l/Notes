<section class="gallery">
      <div class="container-fluid">
        <div class="row">
          <!-- Mixit Up Controls -->
          <div class="controls">
            <button type="button" class="control" data-filter="all">All</button>
            <button type="button" class="control" data-filter=".landscape">Landscape</button>
            <button type="button" class="control" data-filter=".portrait">Portrait</button>
            <button type="button" class="control" data-filter=".product">Product</button>
          </div>
        </div>

    <?php
    include 'config.php';
    $query = mysqli_query($connect,'SELECT * FROM post');
    $result = mysqli_fetch_all($query, MYSQLI_ASSOC);?>
      
        <div class="row">
          <div class="fw mix-container home-gallery">
             <?foreach ($result as $art):?>
              <div class="mix <? print $art ['Post_Cat'];?>">
               <a href="single-post.php?art=<? print $art ['Post_ID'];?>" class="thumb-a">
                  <div class="item-hover">
                    <div class="hover-text"><h3><? print $art ['Post_Name'];?></h3></div>
                  </div>
                  <div class="item-img">
                    <img src="images/<? print $art ['Post_Image'];?>" alt=""/>
                  </div>
               </a>
            </div>

          <? endforeach; ?>

      
    </section>