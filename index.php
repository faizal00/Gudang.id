<!DOCTYPE html>
<html>
<head>
<script src="plugins/chart.js/Chart.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#1885ed">
  <title></title>
</head>
<style>
@import url('https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i');

/*Reset*/
html, body{
  margin: 0;
  padding: 0;
  font-family: 'Lato', sans-serif;
  color: #1f4568;
  scroll-behavior:smooth;
}

body{
background-image: url("https://image.ibb.co/de6JzG/bitmap_1_1.png");
  background-size:cover;
  background-repeat:no-repeat;
  background-position: center;
}

/* colors 8a3aff, 6f79ff, 3a9fff black-> 1f4568  grey->8198ae*/
.sect{
  padding: 90px 0;
  position: relative;
}


.collapse{
 display: block;
}

.sect--grey{
  /*background-color: #ebeff9;*/
}

.sect--violet{
  background-color:#6f79ff;
}

.sect--padding-bottom{
  padding-bottom:115px;
}

.sect--padding-top{
  padding-top:90px;
}

.sect--white{
 /* background-color:#fff;*/
}
.row--center{
  max-width: 1000px;
  margin: 0 auto;
}
.row--margin{
  margin-top:45px;
}

.row__title{
  text-align: center;
  font-size: 26px;
  font-weight: 400;
  margin-top: 0px;
}

.row__sub{
  text-align: center;
  font-size: 18px;
  font-weight: 400;
  margin: 0px; 
  color: #8198ae;
}

.price-box{
  padding: 0px 25px;  
}

.price-box__wrap{
  background-color: #fff;
  border-radius:6px;
  box-shadow:  0 4px 8px 0px rgba(0,0,0,0.2); /*0px 22px 20px -10px rgba(0, 0, 0,0.2)*/
  padding: 35px 35px 40px 35px;
  text-align:center;
  transition: all 0.4s;
  -webkit-transition: all 0.4s;
  -moz-transition: all 0.4s;
  -ms-transition: all 0.4s;
  -o-transition: all 0.4s;
}

.price-box__img{
  display: inline-block;
}

.price-box__img{
  width:130px;
  height:130px;
  border-radius:50%;
  background-position: center;
    background-size:cover;
  background-repeat:no-repeat;
}



.price-box--purple .price-box__img{
  background-image: url("https://image.ibb.co/iGjEKG/1.png");

}


.price-box--violet .price-box__img{
  background-image: url("https://image.ibb.co/iyT8eG/2.png");

}

.price-box--blue .price-box__img{
  background-image: url("https://preview.ibb.co/nDRpmw/3.png");

}

.price-box__title{
  font-size:22px;
  letter-spacing:1px;
  margin-bottom:4px;
}

.price-box__people{
  font-size:12px;
  color:#8198ae;
  font-weight: 300;
  letter-spacing:1px;
}
.price-box__discount{
  font-size: 28px;
  font-weight: 700;
  margin-top: 20px;
  margin-bottom: 0;
}

.price-box__dollar {
    font-size: 18px;
    font-weight: 400;
    vertical-align: top;
    margin-right: 4px;
}

.price-box--purple .price-box__dollar{
  color: #8a3aff;
}

.price-box--violet .price-box__dollar{
  color: #6f79ff;
}

.price-box--blue .price-box__dollar{
  color: #3a9fff;
}

.price-box__discount--light{
  font-weight: 400;
  font-size: 20px;
  margin-left: 3px;
}

.price-box__price {
    margin-top: 3px;
    font-size: 14px;
    color: #8198ae;
    letter-spacing: 1px;
    margin-bottom: 0;
    font-weight: 300;
    text-decoration: line-through;
}

.price-box__feat {
    margin-top: 30px;
    font-size: 16px;
}

.price-box__list {
    text-align: left;
    padding-left: 30px;
    margin: 0;
    list-style: none;
}

.price-box__list-el{
  position: relative;
  margin-bottom: 8px;
  font-weight: 300;
}

.price-box__list-el:before{
  content: "✓";
  position: absolute;
  left: -25px;
  font-size: 18px;
  top: -4px;
}

.price-box--purple .price-box__list-el:before{
  color: #8a3aff;
}

.price-box--violet .price-box__list-el:before{
  color: #6f79ff;
}

.price-box--blue .price-box__list-el:before{
  color: #3a9fff;
}

.price-box__wrap:hover {
  backface-visibility: hidden;
  transform: scale(1.05, 1.05);
  box-shadow: 0px 30px 18px -8px rgba(0, 0, 0,0.1);
}

.btn{
  background-color:#3a9fff;
  border-radius: 20px;
  padding: 10px 25px;
  color: #fff;
  box-shadow: 0px 18px 13px -6px rgba(0, 0, 0,0.2);
  transition: all 0.4s;
-webkit-transition: all 0.4s;
-moz-transition: all 0.4s;
-ms-transition: all 0.4s;
-o-transition: all 0.4s;
}



.btn:hover{
box-shadow: 0px 25px 18px -6px rgba(0, 0, 0,0.2);
background-color: #63b2fc;
color: #fff;
}

.price-box__wrap:hover .btn {
  box-shadow: 0px 25px 18px -6px rgba(0, 0, 0,0.2);
}

.btn--revert{
    background-color:transparent;
    color: #8198ae;
    box-shadow: none;
    border:1px solid #c9d9e9;
}

.btn--revert:hover{
    background-color:transparent;
    color: #1f4568;
    box-shadow: none;
    border:1px solid #8198ae;
}


.btn--purple {
    background-color: #8a3aff;
}

.btn--purple:hover{
    background-color: #b284f6;
}

.btn--violet {
    background-color: #6f79ff;
}
.btn--violet:hover {
    background-color: #878ef3;
}

.btn--blue {
    background-color: #3a9fff;
}
.btn--blue:hover {
    background-color: #63b2fc;
}
.btn--width{
  width: 120px;
}

.btn--white{
  background-color: #fff;
  border: 1px solid #ededed;
  color: #8198ae;
}

.btn--white:hover{
  background-color: #fff;
  color: #8198ae;
}

.price-box__btn {
    position: absolute;
    bottom: -17px;
    left: 50%;
    margin-left: -55px;
}

.row__sub--light{
  color: #aec0d2;
}
.item__img{
  width:25px;
  margin-right:10px;
}

.carousel{
    
}

.row__carousel{
  display:inline-block;
  float:none;
  border-radius: 6px;
}
.row--text-center{
  text-align:center;

}
.carousel-control{
  opacity:1;
  background-image:none !important;
}

.carousel-control.left{
  left:-100px;
}

.carousel-control.right{
  right:-100px;
}

.carousel-inner{
  margin-top: -25px;
}
.carousel-control__img{
 position: absolute;
top: 50%;
margin-top: -90px;
}

.carousel-control.left .carousel-control__img{
  left:0;
}

.carousel-control.right .carousel-control__img{
  right:0;
}

.carousel-indicators li{
  height:12px;
  width:12px;
    background-color: #fff;
    border: 2px solid #8198ae;
  margin-right:8px;
}

.carousel-indicators li.active{
  height:14px;
  width:14px ;
    background-color: #fff;
    border: 3px solid #6f79ff;
  margin-right:10px;
}
.item {
  text-align:left;
  position:relative;
  padding:25px 15px 0px 25px;
}

.item__content{
padding: 40px;
border-radius: 6px;
box-shadow:  0 4px 8px 0px rgba(0,0,0,0.2);
background-color: #fff;
position: relative;
  height: 305px;
}
.item__img{
 display:inline-block;
}
.item__name{
display: inline-block;
font-size: 22px;
vertical-align: middle;
font-weight: 700;
}
.item__description {
    margin-top: 35px;
    color: #8198ae;
    line-height: 23px;
}
.item__avatar{
height: 45px;
width: 45px;
background-image: url("https://static.pexels.com/photos/428333/pexels-photo-428333.jpeg");
background-size: cover;
border-radius: 50%;
margin: 50px auto 15px auto;

}

.carousel-indicators {
    width: auto;
    margin: 0;
    right: 68px;
    text-align: right;
    top: 72px;
  left: auto;
  bottom: auto;
}
.item__content:after{
content: "";
width: 0;
height: 0;
border-left: 20px solid transparent;
border-right: 20px solid transparent;
border-top: 20px solid #fff;
bottom: -20px;
position: absolute;
left: 50%;
margin-left: -23px;
filter: drop-shadow(0px 7px 4px rgba(0,0,0,.2));
}

.item__people {
    margin: 0;
    text-align: center;
    font-weight: 700;
    font-size: 16px;
}

.item__occupation {
    font-size: 14px;
    color: #8198ae;
    text-align: center;
}

.site{
  text-align: center;
}
.site__title{
    font-size: 30px;
    margin: 0;
    text-align: center;
}

.site__subtitle{
    font-size: 22px;
    color: #8198ae;
    margin: 15px 0 40px 0;
    text-align: center;
}

.site__img{
  margin-top: 50px;
  display: inline-block;
  width: 77%;
}
.site__box-link .btn--revert{
  margin-left: 15px;
}


/*menu header*/
.header{
  padding: 30px 25px;
}
.header__elenco {
    padding: 0;
    margin: 0;
    list-style: none;
}
.header__menu {
    float: right;
}
.header__el{
    padding: 0 25px;
    display: inline-block;
}
.header__img{
  display: inline-block;
  vertical-align: middle;
}

.header__logo, .header__menu{
  display: inline-block;
  vertical-align: middle;
}
.header__title{
  font-size: 18px;
  margin: 0;
  margin-left: 10px;
  display: inline-block;
  line-height: 18px;
  vertical-align: middle;
}

.header__light{
  color: #8198ae;
}
.header__link{
  color: #1f4568;
  font-size: 14px;

}
.header__link:hover{
  text-decoration: none;
  color:#3a9fff;
}
.navbar-toggle .icon-bar{
  background-color: #8198ae;
}
.navbar-toggle {
    margin: 5px 0;
}
.partner{
  margin-bottom:15px;
  text-align:center;
}
.partner_img{
  width:160px;
  opacity:0.5;
    transition: all 0.4s;
    -webkit-transition: all 0.4s;
    -moz-transition: all 0.4s;
    -ms-transition: all 0.4s;
    -o-transition: all 0.4s;
}

.sect--no-padding{
  padding-top:0;
}

.partner_img:hover{    
    transform: scale(1.08, 1.08);
  opacity:0.9;
}

.article-pre__col{
  padding:0 30px;
  margin-bottom:30px;
}

.article-pre__img {
    height: 0;
    background-position: center;
    background-size: cover;
    padding-bottom: 55%;
    border-radius: 6px;
  box-shadow: 0 4px 10px 2px rgba(0,0,0,0.3);
  transition: all 0.4s;
-webkit-transition: all 0.4s;
-moz-transition: all 0.4s;
-ms-transition: all 0.4s;
-o-transition: all 0.4s;
}

.article-pre__img--first{
   background-image: url(https://cdn.dribbble.com/users/18730/screenshots/2182635/newshot.png);
}

.article-pre__img--second{
  background-image: url(https://image.ibb.co/cYsvbw/dribbble.jpg);  
}

.article-pre__img--third{
  background-image: url(https://cdn.dribbble.com/users/103909/screenshots/3671664/sensors-01.jpg);  
}

.article-pre__img--fourth{
  background-image: url(https://cdn.dribbble.com/users/997070/screenshots/4120967/attachments/943230/01-1._Cover_Copy_2x.png);  
}

.article-pre:hover .article-pre__img {
  box-shadow: 0px 10px 13px 4px rgba(0, 0, 0,0.2);
}

.article-pre:hover {
  text-decoration:none;
}
.article-pre__info {
    font-size: 16px;
    color: #8198ae;
  margin: 0;
padding: 25px 25px 0 25px;
}

.article-pre__date {
    float: right;
}

.article-pre__title {
font-size: 20px;
color: #1f4568;
margin: 0;
padding: 15px 25px;
}

.article-pre__arrow--purple{
  color: #8a3aff;
}

.contacts_title-ag {
    margin: 0;
        margin-left: 0px;
    display: inline-block;
    vertical-align: middle;
    font-size: 22px;
    margin-left: 10px;
}

.contacts__link{
  color: #1f4568;
}

.contacts--light {
    color: #8198ae;
}

.contacts__address {
margin-top: 20px;
color: #8198ae;
font-size: 16px;
line-height: 27px;
padding-bottom: 12px;
margin-bottom: 17px;
  position: relative;
}

.contacts__address:after{
  content: '';
position: absolute;
width: 20px;
height: 1px;
background-color: #8198ae;
bottom: 0;
left: 0;
}
.contacts__info {
    color: #8198ae;
    font-size: 16px;
    margin-bottom: 2px;
}
.contacts__info-link {
    color: #3a9fff;
  text-decoration:none;
}

.form-group {
    margin-bottom: 20px;
display: table;
width: 100%;
  position:relative;
}

.form__field {
    height: 50px;
  position:relative;
    border: none;
    padding: 10px 12px;   
  width: 100%;
  border-radius:6px;
  appearance: none;
        -moz-appearance: none;
        -webkit-appearance: none;
        -ms-appearance:none;
        -o-appearance: none;
  box-shadow: 0 4px 8px 0px rgba(0,0,0,0.2);
  transition: all 0.4s;
          -webkit-transition: all 0.4s;
          -moz-transition: all 0.4s;
          -ms-transition: all 0.4s;
          -o-transition: all 0.4s;
  z-index: 2;
}

.form__select {
    background-image: url('http://www.austinlawrencepartners.com/wp-content/uploads/arrow-down-gray-hi.png');
    background-repeat: no-repeat;
    background-size: 10px;
    background-position-x: 97%;
    width: 100%;
    padding-right: 30px;
    background-position-y: center;
    background-color:#fff;
  color: #8198ae;
}

.form__field--half{
  width:50%;
  float:left;
}

.form__field--half:first-of-type{
  padding-right:15px;
}


.form__textarea{
  height:200px;
}

.btn--up{
  position: absolute;
bottom: -15px;
right: 25px;
  z-index: 3;
}

.career_title {
    color: #fff;
    font-size: 28px;
}

.career_sub {
    font-size: 22px;
    color: #c7cbff;
    margin-top: 0;
    margin-bottom: 30px;
}

.career-img {
    position: absolute;
    bottom: 0;
width: 65%;
z-index: 0;
left: 20%;
}


.footer{
 background-color: #1f4467; 
  padding: 40px 0; 
}

.footer__title{
  font-size: 18px;
margin: 0;
    margin-left: 0px;
margin-left: 10px;
display: inline-block;
line-height: 18px;
vertical-align: middle;
  color:#3a9fff;
}

.footer__light{
   color:#fff;
}

.footer__social {
    float: right;
}

.footer__social-l {
    margin-left: 15px;
    vertical-align: middle;
}

@media screen and (max-width:1024px){
  .collapse{
 display: none;
}
  .navbar-toggle {
    margin: 0;
    display: inline-block;
    margin-right: 10px;
    margin-top: 10px;
}
  .header__container{
    width: 100%;
    padding: 0;
  }
  .header__menu {
    width: 100%;
}
  .header{
    background-color:#fff; 
    padding: 0;
    box-shadow: 0 2px 10px rgba(0,0,0,0.2);
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 4;
  }
  .header__logo{
    padding: 12px 20px 12px 20px;
  }
  .header__el {
    display: block;
    padding: 10px 20px;
    border-top: 1px solid #ededed;
}
  
  .header .btn--white, .header .btn--white:hover{
    padding: 0;
    border: 0;
    box-shadow: none;
    color:#fff;
    background-color:transparent;
  }
  .header__el--blue{
    background-color:#3a9fff;
  }

}


@media screen and (max-width:991px){
  .price-box {
    padding: 0px 10px;
  }
  .carousel-control.left{
    left: -25px;
  }
  .carousel-control.right {
    right: -25px;
}
  .item__content {
    height: auto;
}
}

@media screen and (max-width:767px){
  .footer {
    padding: 25px 0;
  }
  .price-box {
    padding: 0px 35px;
    margin-bottom: 50px;
  }
  .site__img{
    width: 100%;
  }
  .item__content{
    padding: 20px;
   
  }
  .item__description {
    font-size: 12px;
    line-height: 20px;
}
.article-pre__info {
    padding: 25px 10px 0 10px;
    font-size: 14px;
}
  .article-pre__title {
    padding: 10px 10px;
    font-size: 16px;
}
  .form {
    margin-top: 30px;
}
  .form__field--half:first-of-type {
    margin-bottom: 10px;
    padding-right: 0px;
}

.form__field--half {
    width: 100%;
    float: none;
}
  .form-group {
    margin-bottom: 10px;
  }
}



@media screen and (max-width:480px){
  .price-box {
    padding: 0px 20px;
  }
  .carousel-control__img{
    width: 20px;
  }
  .carousel-control.left {
    left: -5px;
  }
  .carousel-control.right {
    right: -5px;
  }
  .partner {
    width: 100%;
  }
  .footer {
    padding: 15px 0;
  }
  .footer__img {
    width: 15px;
  }
  .footer__title {
    font-size: 16px;
    margin-left: 5px;
  }
  .sect {
    padding: 20px 0;
  }
  .sect--padding-top{
    padding-top: 80px;
  }
  .row__sub {
    font-size: 16px;
   }
  .row__title {
    font-size: 20px;
    margin-bottom: 5px;
   }
  .price-box__title {
    font-size: 18px;
    margin-top: 10px;
}
  .price-box__img {
    width: 100px;
    height: 100px;
  }
  .price-box__wrap {
    padding: 20px 20px 30px 20px;
  }
  .price-box__people {
    font-size: 10px;
    font-weight: 400;
  }
  .price-box__discount {
    font-size: 22px;
  }
  .price-box__price {
    font-size: 12px;
  }
  .price-box__feat {
      margin-top: 15px;
      font-size: 14px;
  }
  .price-box__list-el {
    font-size: 12px;
    margin-bottom: 5px;
}
  .site__title {
    font-size: 24px;
}
  .site__subtitle {
    font-size: 18px;
    margin: 10px 0 20px 0;
  }
  .site__img {
    margin-top: 30px;
  }
  .row--margin {
    margin-top: 30px;
}
  .btn {
    font-size: 12px;
    padding: 8px 8px;
}
  .btn--width {
    width: 100px;
}
  .career_title {
    font-size: 18px;
margin-top: 0;
}
  .career_sub {
    font-size: 14px;
    margin-bottom: 20px;
}
  .carousel-indicators {
    display: none;
}
  .item__name {
    font-size: 18px;
}
  .item__description {
    margin-top: 18px;
}
  .article-pre__date {
    font-size: 12px;
    float: none;
}
 

}
.alert {
  padding: 20px;
  background-color: grey; /* Red */
  color: white;
  margin-bottom: 15px;
  opacity: 1;
  transition: opacity 0.6s; /* 600ms to fade out */
}
.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

/* When moving the mouse over the close button */
.closebtn:hover {
  color: black;
}
</style>
<body>
<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "logout"){
			echo "<div class='alert'>
                <span class='closebtn' onclick='this.parentElement.style.display='none';'>&times;</span>
                Anda Berhasil Log Out !
              </div>";
		}
	}
	?>
<header class="header">
  <div class="container header__container">
<div class="header__logo">
   <h1 class="header__title">Gudang<span class="header__light">.id</span></h1></div> 
     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
  
  <div class="header__menu">
    <nav id="navbar" class="header__nav collapse">
      <ul class="header__elenco">
    <li class="header__el header__el--blue"><a href="login.php" class="btn btn--white">Sign In →</a></li>
      </ul>
    </nav>
  </div>
    </div>
</header>

<div id="awal" class="sect sect--padding-top">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
    <div class="site">
      <h1 class="site__title">Kelola gudang dengan mudah!</h1>
      <h2 class="site__subtitle">Aplikasi WebBase yang mempermudah pengelolaan gudang atau properti</h2>
      <div class="site__box-link">
        <a class="btn btn--width" href="#stat">Statistik</a>
        <a class="btn btn--revert btn--width" href="#dtl">Detail</a>
      </div>
      <img class="site__img" src="https://image.ibb.co/c7grYb/image3015.png">
    </div>
    </div>
    </div>
  </div>
</div>

<div class="sect sect--padding-bottom">
<div class="container">
<div id="stat" class="row row--center">
  <h1 class="row__title">
    Statistik
  </h1>
  <h2 class="row__sub">Grafik stok barang yang masih ada atau terjual di Gudang.id</h2>
</div>
<?php 
    include 'config.php';
    ?>
  
  <div class="position-relative mb-4">
      <canvas id="myChart" width="400" height="200"></canvas>
    </div>
</div>
</div>
</div>
<div class="sect sect--padding-bottom">
<div class="container">
    <div id="dtl" class="row row--center">
  <h1 class="row__title">
    Detail Barang
  </h1>
  <h2 class="row__sub">Detail barang di Gudang.id</h2>
</div>
    <section class="content">
        <div class="container">
          <div class="col-md-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                <div class="col col-md-12">
                  <div class="card-tools">
                    <div class="input-group input-group-sm" style="margin-bottom: 3%;">
                    </div>
                  </div>
                </div>
              </div>
            
                <table class="table table-borderless">
                  <thead>                  
                    <tr>
                      <th>No</th>
                      <th>Kode</th>
                      <th>Nama</th>
                      <th>Status</th>
                      <th>Stock</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
        $sql = "SELECT * FROM Barang";
        $query = mysqli_query($db, $sql);
        while($barang = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$barang['id']."</td>";
            echo "<td>".$barang['Kode']."</td>";
            echo "<td>".$barang['Nama']."</td>";
            echo "<td>".$barang['Stat']."</td>";
            echo "<td>".$barang['Jumlah']."</td>";

            echo "</tr>";
        }
        ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
             </div>
        </div>
    </section>
</div>
</div>
</div>

<!-- <div class="sect sect--white">
<div class="container">
<div class="row">
  <h1 class="row__title">
    Success Stories
  </h1>
  <h2 class="row__sub">Companies you <span class="row__sub--light">(will)</span> propably know</h2>
</div>
<div class="row row--margin row--text-center">
  <div class="col-md-8 col-sm-10 col-xs-12 row__carousel">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <div class="carousel-inner">
    <div class="item active">
      <div class="item__content">
      <img class="item__img" src="https://cdn.worldvectorlogo.com/logos/slack-1.svg" alt="Slack"><span class="item__name">slack</span>
      <p class="item__description">
        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.
      </p>
        </div>
      <div class="item__avatar"></div>
      <p class="item__people">Josh Doe</p>
  <p class="item__occupation">Ceo of Google</p>
    </div>
    
        <div class="item">
      <div class="item__content">
      <img class="item__img" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2d/Google-favicon-2015.png/150px-Google-favicon-2015.png" alt="Google"><span class="item__name">google</span>
      <p class="item__description">
         Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.
      </p>
        </div>
      <div class="item__avatar"></div>
     <p class="item__people">Mary Tompson</p>
  <p class="item__occupation">Ceo of Dribbble</a>
    </div>
    
<div class="item">
      <div class="item__content">
      <img class="item__img" src="https://www.hrexaminer.com/wp-content/uploads/2016/10/2016-10-11-hrexaminer-stackoverflow-6-xxl-sq-250px.png" alt="Stackoverflow"><span class="item__name">stackoverflow</span>
      <p class="item__description">
          Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.
      </p>
        </div>
      <div class="item__avatar"></div>
      <p class="item__people">Andrew Palmer</p>
  <p class="item__occupation">Ceo of Slack</a>
    </div>

  </div>

  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
<img class="carousel-control__img" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMS4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDMxLjQ5NCAzMS40OTQiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDMxLjQ5NCAzMS40OTQ7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iMzJweCIgaGVpZ2h0PSIzMnB4Ij4KPHBhdGggZD0iTTEwLjI3Myw1LjAwOWMwLjQ0NC0wLjQ0NCwxLjE0My0wLjQ0NCwxLjU4NywwYzAuNDI5LDAuNDI5LDAuNDI5LDEuMTQzLDAsMS41NzFsLTguMDQ3LDguMDQ3aDI2LjU1NCAgYzAuNjE5LDAsMS4xMjcsMC40OTIsMS4xMjcsMS4xMTFjMCwwLjYxOS0wLjUwOCwxLjEyNy0xLjEyNywxLjEyN0gzLjgxM2w4LjA0Nyw4LjAzMmMwLjQyOSwwLjQ0NCwwLjQyOSwxLjE1OSwwLDEuNTg3ICBjLTAuNDQ0LDAuNDQ0LTEuMTQzLDAuNDQ0LTEuNTg3LDBsLTkuOTUyLTkuOTUyYy0wLjQyOS0wLjQyOS0wLjQyOS0xLjE0MywwLTEuNTcxTDEwLjI3Myw1LjAwOXoiIGZpbGw9IiM2Zjc5ZmYiLz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" />

  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <img class="carousel-control__img" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMS4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDMxLjQ5IDMxLjQ5IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCAzMS40OSAzMS40OTsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSIzMnB4IiBoZWlnaHQ9IjMycHgiPgo8cGF0aCBkPSJNMjEuMjA1LDUuMDA3Yy0wLjQyOS0wLjQ0NC0xLjE0My0wLjQ0NC0xLjU4NywwYy0wLjQyOSwwLjQyOS0wLjQyOSwxLjE0MywwLDEuNTcxbDguMDQ3LDguMDQ3SDEuMTExICBDMC40OTIsMTQuNjI2LDAsMTUuMTE4LDAsMTUuNzM3YzAsMC42MTksMC40OTIsMS4xMjcsMS4xMTEsMS4xMjdoMjYuNTU0bC04LjA0Nyw4LjAzMmMtMC40MjksMC40NDQtMC40MjksMS4xNTksMCwxLjU4NyAgYzAuNDQ0LDAuNDQ0LDEuMTU5LDAuNDQ0LDEuNTg3LDBsOS45NTItOS45NTJjMC40NDQtMC40MjksMC40NDQtMS4xNDMsMC0xLjU3MUwyMS4yMDUsNS4wMDd6IiBmaWxsPSIjNmY3OWZmIi8+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=" />
 
  </a>
</div>
    
  </div>
  
  

</div>
</div>
</div> -->
<!-- 
<div class="sect sect--white sect--no-padding">
<div class="container">
  <div class="row row--center">
    <div class="col-md-3 col-xs-6 col-sm-6 partner">
      <a href="#" class="partner__link">
      <img class="partner_img" src="https://image.ibb.co/mOtHRw/fblogo.png">
      </a>
    </div>
    
<div class="col-md-3  col-xs-6 col-sm-6 partner">
      <a href="#" class="partner__link">
      <img class="partner_img" src="https://image.ibb.co/nfpXRw/twitterlogo.png">
      </a>
    </div>
    
    
<div class="col-md-3 col-xs-6 col-sm-6 partner">
      <a href="#" class="partner__link">
      <img class="partner_img" src="https://image.ibb.co/imgOYb/googlelogo.png">
      </a>
    </div>
    
<div class="col-md-3 col-xs-6 col-sm-6 partner">
      <a href="#" class="partner__link">
      <img class="partner_img" src="https://image.ibb.co/ebGAeG/dribbblelogo.png">
      </a>
    </div>
        
    
  </div>
  <div class="row row--center">
    <div class="col-md-3 col-xs-6 col-sm-6 partner">
      <a href="#" class="partner__link">
      <img class="partner_img" src="https://image.ibb.co/npV8Yb/gitlogo.png">
      </a>
    </div>
    
        <div class="col-md-3 col-xs-6 col-sm-6 partner">
      <a href="#" class="partner__link">
      <img class="partner_img" src="https://image.ibb.co/cGyZ6w/stacklogo.png">
      </a>
    </div>
    
    
        <div class="col-md-3 col-xs-6 col-sm-6 partner">
      <a href="#" class="partner__link">
      <img class="partner_img" src="https://image.ibb.co/ij03zG/inlogo.png">
      </a>
    </div>
    
        <div class="col-md-3 col-xs-6 col-sm-6 partner">
      <a href="#" class="partner__link">
      <img class="partner_img" src="https://image.ibb.co/ekqdzG/codepenlogo.png">
      </a>
    </div>
  </div>
</div>    
</div> -->
<div class="sect sect--violet ">
  <img src="https://image.ibb.co/fWyVtb/path3762.png" class="career-img">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="career_title">Butuh aplikasi pengelola properti secara mudah?</h1>
        <h1 class="career_sub">Beralih ke Gudang.id sekarang!</h1>
        <a href="#awal" class="btn btn--white btn--width">Ke Atas</a>
      </div>
    </div>
  </div>
  
</div>
<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["Ready", "Sold"],
				datasets: [{
					label: '',
					data: [
					<?php 
					$jumlah_ready = mysqli_query($db,"select * from Barang where Stat='Ready'");
					echo mysqli_num_rows($jumlah_ready);
					?>, 
					<?php 
					$jumlah_sold = mysqli_query($db,"select * from Barang where Stat='Sold'");
					echo mysqli_num_rows($jumlah_sold);
					?>
					],
					backgroundColor: [
					'#1D92BF',
					'#76E376'
					],
					borderColor: [
					'#1D92BF)',
					'#76E376'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>
<script>
$("#myCarousel").carousel({
  interval: false
});
</script>
      <script>
// Get all elements with class="closebtn"
var close = document.getElementsByClassName("closebtn");
var i;

// Loop through all close buttons
for (i = 0; i < close.length; i++) {
  // When someone clicks on a close button
  close[i].onclick = function(){

    // Get the parent of <span class="closebtn"> (<div class="alert">)
    var div = this.parentElement;

    // Set the opacity of div to 0 (transparent)
    div.style.opacity = "0";

    // Hide the div after 600ms (the same amount of milliseconds it takes to fade out)
    setTimeout(function(){ div.style.display = "none"; }, 600);
  }
}
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
