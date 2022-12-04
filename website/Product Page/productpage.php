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
    <title>Document</title>
    <link rel="stylesheet" href="css/productpage.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <nav id="topNavBar">
            <div id="topNavBarGroup1">
                <a href="../landingpage/index.php"><img src="#" alt="LOGO"></a>
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
                <a href="#"><i class="fa fa-2x fa-shopping-cart"></i></a>
                <input type="button" value="Sign In">
            </div>
        </nav>

        <div class="search-bar">
            <input type="text">
            <img id="magnifyingglass" src="img/magnifyinglass.png" alt="Magnifying Glass">
        </div>

    </header>


 
    <div class = "card-wrapper">
        <div class = "card">
          <!-- card left -->
          <div class = "product-imgs">
            <div class = "img-display">
              <div class = "img-showcase">
                <img src = "img/7 1.png" alt = "productImage">
                <img src = "img/7 1.png" alt = "productImage">
                <img src = "img/7 1.png" alt = "productImage">
                <img src = "img/7 1.png" alt = "productImage">
              </div>
            </div>
            <div class = "img-select">
              <div class = "img-item">
                <a href = "#" data-id = "1">
                  <img src = "img/7 1.png" alt = "shoe image">
                </a>
              </div>
              <div class = "img-item">
                <a href = "#" data-id = "2">
                  <img src = "img/7 1.png" alt = "shoe image">
                </a>
              </div>
              <div class = "img-item">
                <a href = "#" data-id = "3">
                  <img src = "img/7 1.png" alt = "shoe image">
                </a>
              </div>
              <div class = "img-item">
                <a href = "#" data-id = "4">
                  <img src = "img/7 1.png" alt = "shoe image">
                </a>
              </div>
            </div>
          </div>
          <!-- card right -->
          <div class = "product-content">
            <h2 class = "product-title">Day and Night</h2>
            <div class = "product-rating">
              <span>10.532 sales</span>
              <span> |</span>
              <span> 5.0</span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
            </div>
  
            <div class = "product-price">
              <p class = "price"><span>Rp 150.000</span></p>
            </div>
  
            <div class = "product-detail">
              <h4>Art & Craft</h4>
              <p>
                Learning kit mengenal pembelajaran tematik day and night, yang terintegrasi dengan pelajaran Matematika, 
                sains, dan bahasa, yang dapat menstimulasi motorik halus anak seperti dapat menulis dengan rapi, 
                dapat membangun dan
                  <span class="see-more-text">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio quasi quaerat, amet explicabo magnam, nulla porro dolorem itaque
                  </span>
              </p>
              <span class="see-more-btn">See More</span>
            <p class="subtotal">Subtotal</p>
            <p class="old-price">Rp 200.000</p>
    
          </div>
  
            <div class = "purchase-info">
              <input type = "number" min = "0" value = "1"> 
              <p class="final-price">Rp 150.000</p>
              <br>
              <button type = "button" class = "btn">
                <i class = "fa-shopping-cart"></i>Add to Cart 
              </button>
              <button type = "button" class = "btn">Buy Now</button>
            </div>
          </div>
        </div>
      </div>
  
      <div class="container">
        <div class="box">
          <input type="radio" class="tab-toggle" name="tab-toggle" id="tab1" checked>
          <input type="radio" class="tab-toggle" name="tab-toggle" id="tab2">
          <input type="radio" class="tab-toggle" name="tab-toggle" id="tab3">
      
          <ul class="tab-list">
            <li class="tab-item">
              <label class="tab-trigger" for="tab1">Why you'll love it</label>
            </li>
            <li class="tab-item">
              <label class="tab-trigger" for="tab2">Spesifikasi Produk</label>
            </li> 
            <li class="tab-item">
              <label class="tab-trigger" for="tab3">Informasi Pengiriman</label>
            </li>
          </ul>
          
          <div class="tab-container">
            <div class="tab-content">
              <ul>
                <li>Terbuat dari bahan yang ramah lingkungan </li>
                <li>Berwarna menarik dan bergambar</li>
              </ul>
            </div>
            <div class="tab-content">
              <ul>
                <li>Baru</li>
                <li>Original 100%</li>
              </ul>
            </div>
            <div class="tab-content">
              <ul>
                <li>Tes123</li>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                  Laborum ratione magni mollitia quidem odit ducimus amet. Nostrum ipsam dolor, 
                  sequi fugiat optio labore magni eum saepe recusandae, quod iure. Hic?</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
  

      <div class="Reviews">
        <link href="./frame108.css" rel="stylesheet" />
        <div>
          <div class="frame108-frame108">
            <div class="frame108-frame112">
              <div class="frame108-frame111">
                <span class="frame108-text">
                  <span>
                    <span>Keren banget ini... okee barangnya cocok</span>
                    <br />
                    <span>banget buat anak anak saya.</span>
                  </span>
                </span>
                <span class="frame108-text05">
                  <span>hohohoho produk yang mana yak</span>
                </span>
                <span class="frame108-text07"><span>Hanna Febriani</span></span>
                <img
                  src="img/profilepict.png"
                  alt="Ellipse21671"
                  class="frame108-ellipse2"
                />
                <div class="frame108-bintang">
                  <img
                    src="img/Star.png"
                    alt="Star11671"
                    class="frame108-star1"
                  />
                  <img
                    src="img/Star.png"
                    alt="Star21671"
                    class="frame108-star2"
                  />
                  <img
                    src="img/Star.png"
                    alt="Star31671"
                    class="frame108-star3"
                  />
                  <img
                    src="img/Star.png"
                    alt="Star41671"
                    class="frame108-star4"
                  />
                  <img
                    src="img/Star.png"
                    alt="Star51671"
                    class="frame108-star5"
                  />
                </div>
                <img
                  src="img/thumbsup.png"
                  alt="thumbup1691"
                  class="frame108-thumbup"
                />
                <img
                  src="img/rectangle.png"
                  alt="Rectangle291691"
                  class="frame108-rectangle29"
                />
                <img
                  src="img/rectangle.png"
                  alt="Rectangle301691"
                  class="frame108-rectangle30"
                />
                <img
                  src="img/rectangle.png"
                  alt="Rectangle311691"
                  class="frame108-rectangle31"
                />
              </div>
              <div class="frame108-frame1121">
                <span class="frame108-text09">
                  <span>
                    <span>Kualitas barang sangat bagus, pengiriman</span>
                    <br />
                    <span>cepat, packing rapi, respon penjual juga baik</span>
                  </span>
                </span>
                <span class="frame108-text14">
                  <span>wah emang bagus buat anak saya</span>
                </span>
                <span class="frame108-text16"><span>Juliana Liem</span></span>
                <img
                  src="img/profilepict.png"
                  alt="Ellipse21681"
                  class="frame108-ellipse21"
                />
                <div class="frame108-bintang1">
                  <img
                    src="img/Star.png"
                    alt="Star11681"
                    class="frame108-star11"
                  />
                  <img
                    src="img/Star.png"
                    alt="Star21681"
                    class="frame108-star21"
                  />
                  <img
                    src="img/Star.png"
                    alt="Star31681"
                    class="frame108-star31"
                  />
                  <img
                    src="img/Star.png"
                    alt="Star41681"
                    class="frame108-star41"
                  />
                  <img
                    src="img/Star.png"
                    alt="Star51681"
                    class="frame108-star51"
                  />
                </div>
                <img
                  src="img/thumbsup.png"
                  alt="thumbup1691"
                  class="frame108-thumbup1"
                />
                <img
                  src="img/rectangle.png"
                  class="frame108-rectangle291"
                />
                <img
                  src="img/rectangle.png"
                  alt="Rectangle301691"
                  class="frame108-rectangle301"
                />
              </div>
              <div class="frame108-frame1111">
                <span class="frame108-text18">
                  <span>
                    <span>Barang oke, pemandunya mudah dimengerti</span>
                    <br />
                    <span>oleh anak, gambar juga bagus bagus.</span>
                  </span>
                </span>
                <span class="frame108-text23"><span>baguss</span></span>
                <span class="frame108-text25"><span>Evie Catalina</span></span>
                <img
                  src="img/profilepict.png"
                  alt="Ellipse21681"
                  class="frame108-ellipse22"
                />
                <div class="frame108-bintang2">
                  <img
                    src="img/Star.png"
                    alt="Star11681"
                    class="frame108-star12"
                  />
                  <img
                    src="img/Star.png"
                    alt="Star21681"
                    class="frame108-star22"
                  />
                  <img
                    src="img/Star.png"
                    alt="Star31681"
                    class="frame108-star32"
                  />
                  <img
                    src="img/Star.png"
                    alt="Star41681"
                    class="frame108-star42"
                  />
                  <img
                    src="img/Star.png"
                    alt="Star51681"
                    class="frame108-star52"
                  />
                </div>
                <img
                  src="img/thumbsup.png"
                  alt="thumbup1691"
                  class="frame108-thumbup2"
                />
                <img
                  src="img/rectangle.png"
                  alt="Rectangle291691"
                  class="frame108-rectangle292"
                />
              </div>
              <div class="frame108-frame1112">
                <span class="frame108-text27">
                  <span>
                    <span>Ini kualitasnya bagus banget, bisa bener-</span>
                    <br />
                    <span>bener melatih anak, packagingnya juga rapi.</span>
                  </span>
                </span>
                <span class="frame108-text32">
                  <span>Anak saya jadi minta main ini terus!!</span>
                </span>
                <span class="frame108-text34"><span>Angeline Eva</span></span>
                <img
                  src="img/profilepict.png"
                  alt="Ellipse21681"
                  class="frame108-ellipse23"
                />
                <div class="frame108-bintang3">
                  <img
                    src="img/Star.png"
                    alt="Star11681"
                    class="frame108-star13"
                  />
                  <img
                    src="img/Star.png"
                    alt="Star21681"
                    class="frame108-star23"
                  />
                  <img
                    src="img/Star.png"
                    alt="Star31681"
                    class="frame108-star33"
                  />
                  <img
                    src="img/Star.png"
                    alt="Star41681"
                    class="frame108-star43"
                  />
                  <img
                    src="img/Star.png"
                    alt="Star51681"
                    class="frame108-star53"
                  />
                </div>
                <img
                  src="img/thumbsup.png"
                  alt="thumbup1691"
                  class="frame108-thumbup3"
                />
                <img
                  src="img/rectangle.png"
                  alt="Rectangle291691"
                  class="frame108-rectangle293"
                />
                <img
                  src="img/rectangle.png"
                  alt="Rectangle301691"
                  class="frame108-rectangle302"
                />
              </div>
            </div>
            <div class="frame108-frame110">
              <div class="frame108-bintang4">
                <img id="totalbintang1"
                  src="img/Star.png"
                  alt="Star11671"
                  class="frame108-star14"
                />
                <img id="totalbintang2"
                  src="img/Star.png"
                  alt="Star21671"
                  class="frame108-star24"
                />
                <img id="totalbintang3"
                  src="img/Star.png"
                  alt="Star31671"
                  class="frame108-star34"
                />
                <img id="totalbintang4"
                  src="img/Star.png"
                  alt="Star41671"
                  class="frame108-star44"
                />
                <img id="totalbintang5"
                  src="img/Star.png"
                  alt="Star51671"
                  class="frame108-star54"
                />
              </div>
              <span class="frame108-text36"><span>5.0 / 5.0</span></span>
              <div class="frame108-frame109">
                <img
                  src="img/linekiri.png"
                  alt="Line193575"
                  class="frame108-line19"
                />
                <img
                  src="img/linekiri.png"
                  alt="Line203575"
                  class="frame108-line20"
                />
                <img
                  src="img/linekiri.png"
                  alt="Line213575"
                  class="frame108-line21"
                />
                <img
                  src="img/linekiri.png"
                  alt="Line223575"
                  class="frame108-line22"
                />
                <img
                  src="img/linekiri.png"
                  alt="Line233575"
                  class="frame108-line23"
                />
                <img
                  src="img/linekiri.png"
                  alt="Line141671"
                  class="frame108-line14"
                />
                <img
                  src="img/linekiri.png"
                  alt="Line151671"
                  class="frame108-line15"
                />
                <img
                  src="img/linekiri.png"
                  alt="Line161671"
                  class="frame108-line16"
                />
                <img
                  src="img/linekiri.png"
                  alt="Line171671"
                  class="frame108-line17"
                />
                <img
                  src="img/linekiri.png"
                  alt="Line181671"
                  class="frame108-line18"
                />
                <span class="frame108-text38">
                  <span>
                    <span>5</span>
                    <br />
                    <span>4</span>
                    <br />
                    <span>3</span>
                    <br />
                    <span>2</span>
                    <br />
                    <span>1</span>
                  </span>
                </span>
                <div class="frame108-bintang5">
                  <img id="test1"
                    src="img/Star 1.png"
                    alt="Star11671"
                    class="frame108-star15"
                  />
                  <img id="test2"
                    src="img/Star 1.png"
                    alt="Star21671"
                    class="frame108-star25"
                  />
                  <img id="test3"
                    src="img/Star 1.png"
                    alt="Star31671"
                    class="frame108-star35"
                  />
                  <img id="test4"
                    src="img/Star 1.png"
                    alt="Star41671"
                    class="frame108-star45"
                  />
                  <img id="test5"
                    src="img/Star 1.png"
                    alt="Star51671"
                    class="frame108-star55"
                  />
                </div>
              </div>
            </div>
            <img
              src="img/linebwhreview.png"
              alt="Line191671"
              class="frame108-line191"
            />
            <span class="frame108-text49"><span>Reviews</span></span>
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
      
    <script src="script.js"></script>

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

</body>
</html>