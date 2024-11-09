<?php session_start();
error_reporting(0);

?>
<link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
 
<style>
:root {
  --input-padding-x: 1.5rem;
  --input-padding-y: 0.75rem;
}

.login,
.image {
  min-height: 100vh;
}

.bg-image {
	
  background-image: url('bg.jpg');
  background-size: cover;
  background-position: center;
}

.login-heading {
  font-weight: 300;
}

.btn-login {
  font-size: 0.9rem;
  letter-spacing: 0.05rem;
  padding: 0.75rem 1rem;
  border-radius: 2rem;
}

.form-label-group {
  position: relative;
  margin-bottom: 1rem;
}

.form-label-group>input,
.form-label-group>label {
  padding: var(--input-padding-y) var(--input-padding-x);
  height: auto;
  border-radius: 2rem;
}

.form-label-group>label {
  position: absolute;
  top: 0;
  left: 0;
  display: block;
  width: 100%;
  margin-bottom: 0;
  /* Override default `<label>` margin */
  line-height: 1.5;
  color: #495057;
  cursor: text;
  /* Match the input under the label */
  border: 1px solid transparent;
  border-radius: .25rem;
  transition: all .1s ease-in-out;
}

.form-label-group input::-webkit-input-placeholder {
  color: transparent;
}

.form-label-group input:-ms-input-placeholder {
  color: transparent;
}

.form-label-group input::-ms-input-placeholder {
  color: transparent;
}

.form-label-group input::-moz-placeholder {
  color: transparent;
}

.form-label-group input::placeholder {
  color: transparent;
}

.form-label-group input:not(:placeholder-shown) {
  padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
  padding-bottom: calc(var(--input-padding-y) / 3);
}

.form-label-group input:not(:placeholder-shown)~label {
  padding-top: calc(var(--input-padding-y) / 3);
  padding-bottom: calc(var(--input-padding-y) / 3);
  font-size: 12px;
  color: #777;
}

/* Fallback for Edge
-------------------------------------------------- */

@supports (-ms-ime-align: auto) {
  .form-label-group>label {
    display: none;
  }
  .form-label-group input::-ms-input-placeholder {
    color: #777;
  }
}

/* Fallback for IE
-------------------------------------------------- */

@media all and (-ms-high-contrast: none),
(-ms-high-contrast: active) {
  .form-label-group>label {
    display: none;
  }
  .form-label-group input:-ms-input-placeholder {
    color: #777;
  }
}

</style>
<?php
if($_GET['aksi']=="login"){
if(empty($_POST['username']) && empty($_POST['password'])){
	
echo "Kesalahan: silahkan masukkan username dan password anda<br>";	
}

	include "../koneksi.php";
$query=mysqli_query($koneksi,"select * from user where id=1");
$hasil=mysqli_fetch_array($query);

	
if($_POST['username']==$hasil[1] && $_POST['password']==$hasil[2])
{
session_start();
//echo "Selamat anda berhasil masuk";
$username=$_POST['username'];
$password=$_POST['password'];

	//$username=session_register('user');
//$password=session_register('pass');

$_SESSION['username'] = $username;
$_SESSION['password'] = $password;


//echo "Username anda ".$_SESSION['username'];
//echo "Password anda ".$_SESSION['password'];	
$pesan= "Login success, Loading....";
 echo("<meta http-equiv=\"refresh\" content=\"1;url=index.php?menu=\">");
//header("location:index.php");	
}
else {
$pesan= "<font color=red>Username dan password anda salah</font>";	
}

}
?>
<div class="container-fluid">
  <div class="row no-gutter">
    <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
    <div class="col-md-8 col-lg-6">
      <div class="login d-flex align-items-center py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-lg-8 mx-auto">
              <h3 class="login-heading mb-4">Silahkan Login</h3>
              <form action="login.php?aksi=login" method="post" name="frmlogin">
                <div class="form-label-group">
                  <input type="text" id="inputEmail" class="form-control" name="username" placeholder="Username" required autofocus>
                  <label for="inputEmail">Username</label>
                </div>

                <div class="form-label-group">
                  <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
                  <label for="inputPassword">Password</label>
                </div>

               
                <button class="btn btn-lg btn-dark btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Login</button>
                <div class="text-center">
                  <a class="small" href="#"><?=$pesan;?></a></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

