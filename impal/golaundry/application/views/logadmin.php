<div class="col-sm-2" >
</div>
<body>




<div class="d-flex">

<img src="gambar/logo.jpg" style="margin:15px 450px 35px;" width="280" height="120" >

</div>

<h4 style="margin:15px 500px 35px;" ><b>Login Admin</b></h4>

<form style="margin:15px 400px 35px;" role="form" method="POST" action="<?php echo base_url()?>admin/login">
  <?php
    $message = $this->session->flashdata('message');
      // echo "$message";
    if ($message == "error") {
        ?>
          <div class="alert alert-danger  w-100" >
          <strong>ERROR!</strong> Nama atau Password salah.
        </div>
    <?php
        };
        ?>
  <?php
    $message = $this->session->flashdata('message');
      // echo "$message";
    if ($message == "success") {
        ?>
          <div class="alert alert-success  w-100" >
          <strong>Success!</strong> Register sukses.
        </div>
    <?php
        };
        ?>
<div class="form-group">
  <label for="exampleInputEmail1">Email address</label>
  <input  style="border-radius: 80px;" name="Email" width="70" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
</div>
<div class="form-group">
  <label for="exampleInputPassword1">Password</label>
  <input style="border-radius: 80px;" type="password" name="Pass" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
</div>
<!-- <div class="form-group form-check">
  <input type="checkbox" class="form-check-input" id="exampleCheck1">
  <label class="form-check-label" for="exampleCheck1">Check me out</label>
</div> -->
<button type="submit" name="button" style="border-radius: 40px; border-color: black; border-style:solid; width: 180px; margin:15px 95px 35px;" class="btn btn-dark text-white ">Login</button>

</form>
</body>
<div class="footer-copyright text-center py-3"  style="width:100%;height:60px;background:black; color:white">Copyright GO Laundry 2019
  </div>
</html>
