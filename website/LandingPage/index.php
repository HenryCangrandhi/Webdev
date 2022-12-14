<?php
    $con = mysqli_connect('localhost', 'root', '', 'product');

    if(!$con)
    {
        echo 'Connection error: ' . mysqli_connect_error();
    }

    $sql = 'SELECT ID, Nama_Produk, Stok_Produk, Harga_Produk, Deskripsi_Produk, Gambar_Produk FROM product_detail';
    $result = mysqli_query($con, $sql);

    $products = mysqli_fetch_all($result, MYSQLI_ASSOC);

    //free result from memory
    mysqli_free_result($result);

    //close connection
    mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    </style>
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/landingpage.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Mulish:wght@300&family=PT+Sans&family=Patrick+Hand&display=swap" rel="stylesheet">
</head>
<!--Halo-->
<body>
    <header>
        <nav id="topNavBar">
            <div id="topNavBarGroup1">
                <a href="#"><img src="#" alt="LOGO"></a>
            </div>
            
            <div id="topNavBarGroup2">
                <ul id="topNavBarList">
                    <li><a href="#">On Sale</a></li>
                    <li><a href="#">Shop Now</a></li>
                    <li><a href="../FeaturePage/featurepage.php">Videos</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>

            <div id="topNavBarGroup3">
                <a href="#"><img src="img/shoppingcart.png" alt="Cart"></a>
                <input type="button" value="Sign In">
            </div>
        </nav>
    </header>

    <div id="slideshow1">
        <div id="titleAndSearch1">
            <h1>Discover the new <br> excitement</h1>

            <div id="firstSearchBar">
                <input type="text" placeholder="what are you playing today?">
                <img id="magnifyingglass" src="img/magnifyinglass.png" alt="Magnifying Glass">
                <img id="dotornament" src="img/Dot Ornament.png" alt="">
            </div>
        </div>

        <div id="slideshow1Images">
            <img src="img/Image 1.png" alt="">
            <!-- <img id="secondImage" src="img/Image 2.png" alt="">  -->
        </div>
    </div>

    <div id="seeWhatsPopular">
        <div id="square1">
            <h1>See <br> what's <br> popular</h1>
            <img id="square1FirstImg" src="img/Image4.png" alt="">
            <img src="img/Image3.png" alt="">
            
        </div>
    </div>

    <!--
    <div id="filterCategories">
        
        <h2>Filter berdasarkan kategori</h2>
        <div id="square2">
        <select name="filterAge" id="filterAge">
            <option value="" disabled selected id="placeholderOption">Filter by Age</option>
            <option value="0-12">0-12</option>
            <option value="13-18">13-18</option>
        </select>
        </div>
    </div>
    -->

    <nav div="cardSliderNav">
        <ul id="cardSliderNavList">
            <li id="cardSliderNavListFirst"><a href="#">All Products</a></li>
            <li><a href="#">Featured</a></li>
            <li><a href="#">Plushies</a></li>
            <li><a href="#">Wooden Toys</a></li>
            <li><a href="#">Science</a></li>
            <li><a href="#">DIY & Craft</a></li>
            <li><a href="#">Nature</a></li>
            <li><a href="#">Space & Planets</a></li>
            <li><a href="#">For Toddler</a></li>
        </ul>
    </nav>    

    <section class="card-slider">
        <div class="slide-container swiper">
            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">

                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                                <img src="img/Untitled-177.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="title-card">Profesiku Hari ini(Set A)</h2>
                            <p class="desc-card">Learning kit ini menggunakan metode "melihat-berpikir-bertanya"</p>
                            <p class="price-card">Rp 99.000 <img src="img/Star.png"> 4.5 <span> (30) | Terjual 100</span></p> 
                            <button class="button-card-addToCart"><i class="fa fa-shopping-cart"> </i> Add to cart</button>
                            <button class="button-card-buyNow">Buy Now</button>
                        </div>
                    </div>

                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                                <img src="img/Screen Shot 2022-11-22 at 04.25.46.png" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="title-card">Profesiku Hari ini(Set A)</h2>
                            <p class="desc-card">Learning kit ini menggunakan metode "melihat-berpikir-bertanya"</p>
                            <p class="price-card">Rp 99.000 <img src="img/Star.png"> 4.5 <span> (30) | Terjual 100</span></p> 
                            <button class="button-card-addToCart"><i class="fa fa-shopping-cart"> </i> Add to cart</button>
                            <button class="button-card-buyNow">Buy Now</button>
                        </div>
                    </div>

                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                                <img src="img/image-cs3.png" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="title-card">Profesiku Hari ini(Set A)</h2>
                            <p class="desc-card">Learning kit ini menggunakan metode "melihat-berpikir-bertanya"</p>
                            <p class="price-card">Rp 99.000 <img src="img/Star.png"> 4.5 <span> (30) | Terjual 100</span></p> 
                            <button class="button-card-addToCart"><i class="fa fa-shopping-cart"> </i> Add to cart</button>
                            <button class="button-card-buyNow">Buy Now</button> 
                        </div>
                    </div>

                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                                <img src="img/image-cs4.png" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="title-card">Profesiku Hari ini(Set A)</h2>
                            <p class="desc-card">Learning kit ini menggunakan metode "melihat-berpikir-bertanya"</p>
                            <p class="price-card">Rp 99.000 <img src="img/Star.png"> 4.5 <span> (30) | Terjual 100</span></p> 
                            <button class="button-card-addToCart"><i class="fa fa-shopping-cart"> </i> Add to cart</button>
                            <button class="button-card-buyNow">Buy Now</button>
                        </div>
                    </div>

                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                                <img src="img/image1-card.png" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="title-card">Profesiku Hari ini(Set A)</h2>
                            <p class="desc-card">Learning kit ini menggunakan metode "melihat-berpikir-bertanya"</p>
                            <p class="price-card">Rp 99.000 <img src="img/Star.png"> 4.5 <span> (30) | Terjual 100</span></p> 
                            <button class="button-card-addToCart"><i class="fa fa-shopping-cart"> </i> Add to cart</button>
                            <button class="button-card-buyNow">Buy Now</button>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
        </div>
    </section>

        <div id="reviewCardsSection">

            <div id="reviewCardsTitleAndDesc">
                <h2>Reviewed by 90+<br>
                    creators and influencers<br>
                even our customers!</h2>

                <!--<div id="seeMoreDesc">
                    <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est quos nisi culpa iste adipisci nobis ut assumenda quis, <br> atque distinctio numquam iusto eligendi error odio reiciendis repudiandae porro aliquam modi!</small>
                    <br>
                    <a href="#">
                        <small>see more ></small> 
                    </a>
                </div>-->
            </div>
            
            <div id="reviewCards">
                <img src="img/Dot Ornament (3).png" alt="" id="dotOr3">
                <div id="reviewCard1">
                    <div id="reviewCardSquare" style="background-color: #DC0D17;"></div>
                    <div id="reviewCardContent">
                        <img src="img/2.png" alt="" id="contentImg" style="border-radius:6px ;">
                        <div id="reviewCardDescription">
                            <h2>Toys Review</h2>
                            <small>get the latest update with Azka,
                                 the car toys connoiseur!</small>
                            <br>
                            <a href="#"><img src="img/Frame 21.png" alt="" id="nextButton"></a>
                        </div>
                    </div>
                </div>
                <div id="reviewCard2">
                    <div id="reviewCardSquare" style="background-color: #FBC788 ;"></div>
                    <div id="reviewCardContent">
                        <img src="img/2.png" alt="" id="contentImg">
                        <div id="reviewCardDescription">
                            <h2>Toys Review</h2>
                            <small>Lorem ipsum dolor sit amet</small>
                            <br>
                            <a href="#"><img src="img/Frame 21.png" alt="" id="nextButton"></a>
                        </div>
                    </div>
                </div>
                <div id="reviewCard3">
                    <div id="reviewCardSquare" style="background-color: #F2B330;"></div>
                    <div id="reviewCardContent">
                        <img src="img/2.png" alt="" id="contentImg">
                        <div id="reviewCardDescription">
                            <h2>Toys Review</h2>
                            <small>Lorem ipsum dolor sit amet</small>
                            <br>
                            <a href="#"><img src="img/Frame 21.png" alt="" id="nextButton"></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        

    <div id="reasonblock">
        <div id="reason">
            <div id="reasonDesc">
                <img src="img/Dot Ornament (2).png" alt="">
                 <h2>Why Shop with Us</h2>
                 <p id="reason1desc">
                    Lorem ipsum dolor sit amet consectetur, <br>adipisicing elit. Et alias voluptatem dicta quidem similique <br> magni quo, natus delectus blanditiis <br>laudantium, cupiditate numquam <br>provident ipsa itaque, repellendus eos ipsam quam earum!
                 </p>
            </div>
            <div id="benefit">
                <div id="benefit600">
                <p id="number600">
                    600+
                </p>
                <p id="reason600">
                    Pembelian setiap minggu
                </p>
                </div>
                <div id="benefit450">
                    <p id="number450">
                        450+
                    </p>
                    <p id="reason450">
                        Reviews yang membantu
                    </p>
                    </div>
            </div>
        </div>

        <div id="reason2">
            <img src="img/box_orange.png">
            <p id="reason2title">
                A Month of<br>Surprises
            </p>
            <div id="reason2fulldesc">
            <p id="reason2desc">
                Mulai berlangganan untuk pembelian <br> selama bulan pertama.
            </p>
            <p id="reason2link">
                <a href="../FeaturePage/featurepage.php"><img src="img/Frame 21.png"></a>
            </p>
            </div>
        </div>
    </div>

    <div id="recommended">
        <p id="rcmdtitle">Recommended For You</p>

        <div id="listrecommend">
            <?php foreach($products as $product) { ?>
            <div id="recommendcard">
                <a href="#">
                <img src="img/<?= $product['Gambar_Produk'] ?>" href="#" id="rcmdimg">
                    <div id="recommenddescandrating">
                        <div id="recommenddesc">
                            <p id="recommendtitle"><?= $product['Nama_Produk'] ?></p>
                            <p id="recommendtext"><?= $product['Deskripsi_Produk'] ?></p>
                            <p id="recommendprice"><?= $product['Harga_Produk'] ?></p>
                        </div>

                        <div id="rating">
                            <img src="img/Star.png" id="star">
                            <p id="ratingnumber">4.5</p>
                        </div>
                    </div>
                </a>
            </div>
            <?php } ?>
        </div>
    </div>

    <div id="review">
        <div id="apaKataMerekaBox">
            <img src="img/box_orangereview.png">
            <div id="apakata">
                <img src="img/Dot Ornament (1).png" alt="" id="dotOrnamentKataMereka">
                <img src="img/Quote.png" alt="" id="quoteImg">
                <p>Apa kata <br> mereka?</p>
            </div>
        </div>
    </div>

    <!--LANJUTIN DISINI-->

    <div id="subscribe">
        <img src="img/Rectangle_red.png" id="subsbtn">
            <div id="subsdesc">
            <p id="subsnow">Subscribe Now!</p>
            <p id="persen">75% OFF</p>
            <p id="firstsubs">*for first time subscription</p>
            <input type="text" placeholder="Insert your email here..." id="inputemail">
            <a href="#">>
            <img src="img/email_btn.png" id="emailbtn">
            </a>
        </div> 
    </div>

    <footer>
        <h3 class="heading-footer">
            PLAY<br> WITH US
        </h3>
        <div class="footer-body">
            <div class="footer-col">
                <ul>
                    <li>
                      <a href="#">942-308-3868</a>
                    </li>
                    <li>
                      <a href="#">Support@toys.com</a>
                    </li>
                </ul>
            </div>

            <div class="footer-col">
                <h3 class="heading-col2">
                    Products
                </h3>
                <ul>
                    <li>
                      <a href="#">Our Partners</a>
                    </li>
                    <li>
                      <a href="#">How to Refund</a>
                    </li>
                </ul>
            </div>
            <div class="footer-col">
                <h3 class="heading-col3">
                    My Account
                </h3>
                <ul>
                    <li>
                      <a href="#">Profile</a>
                    </li>
                    <li>
                      <a href="#">Payment</a>
                    </li>
                </ul>
            </div>
            <div class="footer-col">
                <h3 class="heading-col4">
                    About Us
                </h3>
                <ul>
                    <li>
                      <a href="#">FAQ</a>
                    </li>
                    <li>
                      <a href="#">Service Reviews</a>
                    </li>
                    <li>
                        <a href="#">Customer Care</a>
                    </li>
                    <li>
                        <a href="#">Help</a>
                    </li>
                </ul>
            </div>
            <div class="footer-col">
                <h3 class="heading-col5">
                    Review with Us
                </h3>
                <ul>
                    <li>
                      <a href="#">How <br>to Benefits</a>
                    </li>
                </ul>
            </div>
            <div class="footer-col">
                <ul>
                    <li>
                      
                    </li>
                    <li>
                      
                    </li>
                </ul>
            </div>
        </div>
        <div class="footer-end">
            <div class="footer-end-text">
            <a href="#">TOYS PRODUCTIONS &copy; 2022 All Rights Reserved.</a>
            <a href="#">TERMS & CONDITIONS</a>
            <a href="#">PRIVACY POLICY</a>
        </div>
            <div class="social-media-icon">
                <a href="https://www.instagram.com" target="_blank"><img src="img/instagram-icon.png"></a>
                <a href="https://www.whatsapp.com" target="_blank"><img src="img/whatsapp-icon.png"></a>
                <a href="https://www.twitter.com" target="_blank"><img src="img/twitter-icon.png"></a>
            </div>
        </div>
    </footer>
    
    <script src="src/swiper-bundle.min.js"></script>
    <script src="src/landingpage.js"></script>
    <!-- <script>
        let listrecommend = document.getElementById('listrecommend')
        let recommendcard = document.getElementById('recommendcard')

        console.log(listrecommend)
        console.log(recommendcard)

        

        for(let i=0; i<5; i++)
        {
            let newcard = recommendcard.cloneNode(recommendcard)
            listrecommend.appendChild(newcard)
        }
    </script> -->
    
</body>
</html>