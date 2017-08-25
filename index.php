<!doctype html>
<html>
<head>
    <title>Cady Gorbet</title>
    <?php include "head.php"; ?>
</head>
<body>
    <!--Navbar-->
    <?php include "navigation.php"; ?>
    <div class="container">
        <div class="row">
            <div class="col-12 title-div">
                <a href="index.php" title="Cady Gorbet" rel="home">Cady Gorbet</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 subtitle-div">
                <p>Home Decor &nbsp;&nbsp;|&nbsp;&nbsp; DIY &nbsp;&nbsp;|&nbsp;&nbsp; Lifestyle &nbsp;&nbsp;|&nbsp;&nbsp; Photography</p>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 line-break-top">
                <br/>
            </div>
        </div>

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

        <div class="row">
            <div class="col-12 line-break-bottom">
                <br/>
            </div>
        </div>

    </div>
    <div class="blog-post-section">
        <div class="container">
            <!--Body of site-->
            <div class="row">
                <!-- Blog Posts -->
                <section class="col-md-8">
                    <div class="blog-post-container">

                        <!--
                        <div class="blog-post">
                            <p><date>August 24, 2017</date></p>
                            <a href="content/posts/DIY_Hydrangea_Wreath/DIY_Hydrangea_Wreath.php">DIY Hydrangea Wreath<img src="content/posts/DIY_Hydrangea_Wreath/thumbnail.jpg" alt="DIY Hydrangea Wreath" class="img-fluid"></a>
                        </div>
                        -->

                        <div class="blog-post">
                            <p><date>July 25, 2017</date></p>
                            <a href="content/posts/Craft_Storage_and_Organization/Craft_Storage_and_Organization.php">Craft Storage and Organization<img src="content/posts/Craft_Storage_and_Organization/thumbnail.jpg" alt="Craft Storage and Organization" class="img-fluid"></a>
                        </div>
                        <div class="blog-post">
                            <p><date>July 6, 2017</date></p>
                            <a href="content/posts/4th_of_July_Cookout/4th_of_July_Cookout.php">4th of July Cookout<img src="content/posts/4th_of_July_Cookout/thumbnail.jpg" alt="4th of July Cookout" class="img-fluid"></a>
                        </div>
                        <div class="blog-post">
                            <p><date>June 28, 2017</date></p>
                            <a href="content/posts/Patriotic_Summer_Decor/Patriotic_Summer_Decor.php">Patriotic Summer Décor<img src="content/posts/Patriotic_Summer_Decor/thumbnail.jpg" alt="Fourth of July Couch Decor" class="img-fluid"></a>
                        </div>
                        
                        
                    </div>
                </section>

                <!-- Sidebar -->
                <?php include "sidebar.php"; ?>
            </div>
            <div class="row">
                <footer class="col-12">
                    <p class="">&copy;Copyright 2017</p> 
                </footer>
            </div>
        </div>
    </div>
    
    <?php include "includes.php"; ?>
</body>
<footer class="navbar-fixed-bottom navbar-default">
    <div class="container">
        <div class="blog-post-socials">
            <a class="twitter-share-button" 
            href="https://twitter.com/intent/tweet?text=Check%20out&hashtags=homedecor,diy,lifestyle&url=http%3A%2F%2Fcadygorbet.com%2F"
            data-size="large"
            link rel="canonical"
            ></a>
            <a data-pin-do="buttonBookmark" data-pin-tall="true" href="https://www.pinterest.com/pin/create/button/"></a>
            <div class="fb-like" data-href="https://www.facebook.com/cadygorbetblog/" data-width="50" data-layout="button_count" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>
        </div>
        
    </div>
</footer>
</html>
