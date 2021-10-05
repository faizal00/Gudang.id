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
    background-image:url("https://asset-a.grid.id/crop/0x0:0x0/700x0/photo/2019/12/19/4048868505.jpg");
    background-position: center;
    background-size: cover;
}
</style>
<body>

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
                                        <h1 class="header1">DAFTAR</h1>
                                        <h4 class="header2">Silahkan Daftar</h3>
                                    </div>
                                    <form action="reg.php" method="post" enctype="multipart/form-data" class="user">
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
                                        <div hidden class="form-group">
                                            <label class="label-login" for="">Role</label>
                                            <input type="text"
                                            name="Role"
                                             class= "form1"
                                             id="exampleInputRole"
                                             value="User"
                                             >
                                        </div>
                                        <div class="form-group">
                                            <label class="label-login">Foto :</label>
                                            <input type="file" name="foto" required="required">
                                            <p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p>
                                        </div>	
                                        <button type="submit" class="btn btn-success btn-user btn-block">Daftar</button>
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
</body>
</html>