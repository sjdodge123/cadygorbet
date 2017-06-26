<!doctype html>
<html>
<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' type='text/css' href='css/bootstrap.css'>
    <link rel='stylesheet' type='text/css' href='css/main.css'>
    <link href="https://fonts.googleapis.com/css?family=Pangolin" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">

    <title>Cady Gorbet</title>
</head>
<body>
    <!--Navbar-->
    <?php include "header.php"; ?>
    <div class="container">
        <div class="row">
            <div class="col-12 title-div">
                <a href="">Cady Gorbet</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 subtitle-div">
                <p>Home Decor &nbsp;&nbsp;|&nbsp;&nbsp; DIY &nbsp;&nbsp;|&nbsp;&nbsp; Lifestyle &nbsp;&nbsp;|&nbsp;&nbsp; Photography</p>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <!--Image carousel-->
        <div class="row">
            <div class="col-sm-12">
                <div id="myslide" class="carousel slide" data-ride="carousel">

                  <!-- Images -->
                  <div class="carousel-inner slide-inside" role="listbox">
                    <div class="carousel-item active">
                        <div id="firstImage" class="slide-image"></div>
                    </div>
                    <div class="carousel-item">
                      <div id="secondImage" class="slide-image"></div>
                    </div>
                    <div class="carousel-item">
                      <div id="thirdImage" class="slide-image"></div>
                    </div>
                  </div>

                  <!-- Arrows -->
                  <a class="carousel-control-prev" href="#myslide" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#myslide" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>

                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <!--Body of site-->
        <div class="row">

            <!-- Blog Posts -->

            <section class="col-md-8">
                <div class="blog-post-container">
                    <div class="blog-post">
                        <p>June 20, 2017</p>
                        <a href="#">4th of July<img src="img/4th_Of_July/thumbnail.jpg" alt="Fourth of July Couch Decor" class="img-fluid"></a>
                        
                    </div>
                    <div class="blog-post">
                        <p>June 27, 2017</p>
                        <a href="#">4th of July<img src="img/4th_Of_July/thumbnail.jpg" alt="Fourth of July Couch Decor" class="img-fluid"></a>
                        
                    </div>
                </div>
            </section>

            <!-- Sidebar -->

            <aside class="col-md-4 sidebar">
                <div class="card ">
                    <div class="card-header">Example 1</div>
                    <div class="card-block">
                        <img src="img/example1.jpg" alt="fruits" class="img-fluid">
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">Example 2</div>
                    <div class="card-block">
                        <img src="img/example2.jpg" alt="fruits" class="img-fluid">
                    </div>
                </div>
            </aside>
        </div>
        <div class="row">
            <footer class="col-12">
                <p class="">&copy;Copyright 2017</p> 
            </footer>
        </div>
    </div>



    <script type="text/javascript" src="js/jquery-1.11.1.js"></script>
    <script type="text/javascript" src="js/tether.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"> </script>
</body>
<script>
$(function(){
  $("#nav-placeholder").load("header.html");
});
</script>

</html>
