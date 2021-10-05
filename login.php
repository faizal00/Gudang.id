<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css">
    <title>Login</title>
</head>
<style>
body{
    background-image:url("https://img.freepik.com/free-vector/seamless-pattern_1159-5086.jpg?size=626&ext=jpg");
}
.bg-login-image {
    background-image:url("https://static.republika.co.id/uploads/images/inpicture_slide/gudang-bulog-untuk-kedelai-lokal-_190919122534-748.jpg");
    background-position: center;
    background-size: cover;
}
   /* The alert message box */
   .alert {
  padding: 20px;
  background-color: red; /* Red */
  color: white;
  margin-bottom: 15px;
  opacity: 1;
  transition: opacity 0.6s; /* 600ms to fade out */
}
.alert1 {
  padding: 20px;
  background-color: green; /* Red */
  color: white;
  margin-bottom: 15px;
  opacity: 1;
  transition: opacity 0.6s; /* 600ms to fade out */
}


/* The close button */
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
</style>
<body>
<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "<div class='alert'>
                <span class='closebtn' onclick='this.parentElement.style.display='none';'>&times;</span>
                Username dan Password Salah !
              </div>";
		}else if($_GET['pesan'] == "berhasil"){
			echo "<div class='alert1'>
                <span class='closebtn' onclick='this.parentElement.style.display='none';'>&times;</span>
                Berhasil Daftar !
              </div>";
		}else if($_GET['pesan'] == "belum_login"){
			echo "<div class='alert'>
                <span class='closebtn' onclick='this.parentElement.style.display='none';'>&times;</span>
                Silahkan Login !
              </div>";
		}
	}
	?>
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
    
            <div class="col-xl-10 col-lg-12 col-md-9">
    
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="header1">MASUK</h1>
                                        <h4 class="header2">Silahkan Masuk</h3>
                                    </div>
                                    <form method="post" action="cek_login.php" class="user">
                                        <div class="form-group">
                                            <label class="label-login" for="">User</label>
                                            <input 
                                              name="User"
                                              type="text" 
                                              class="form1" 
                                              id="exampleInputEmail" 
                                              aria-describedby="emailHelp" 
                                             >
                                        </div>
                                        <div class="form-group">
                                            <label class="label-login" for="">Password</label>
                                            <input type="password"
                                            name="Pass"
                                             class= "form2"
                                             id="exampleInputPassword">
                                        </div>
                                        <div class="row">
                                            <div class="col col-md-6">
                                            <button type="submit" class="btn btn-success btn-user btn-block">Masuk</button>
                                            </div>
                                            <div class="col col-md-6">
                                            <button type="button" onclick="daftar()" class="btn btn-success btn-user btn-block">Daftar</button>
                                        </div>                  
                                        </div>
                                    </form>
                                    <hr>
                                </div>
                            </div>
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                        </div>
                    </div>
                </div>
    
            </div>
    
        </div>
    
    </div>
    <script>
        function daftar(){
            document.location.href="regist.php";
        }
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
</body>
</html>