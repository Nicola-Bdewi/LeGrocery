<!doctype html>
<html lang="en">

<head>
    <title> LEGROCERY </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    <!-- SIDEBAR -->
  <div id="sidebar">
    <div class="logo-box">
      <a href="home.html"><img id="big-logo" src="../Image/Logo/altlogo.png" alt="LOGO"
          style="width:150px; margin: auto;" /></a>
    </div>
    <div class="link-box">
      <a href="home.html"><i class="fa fa-home" style="width:50px; padding-left: 7px;"></i>HOME</a>
      <a href="ProductList.html"><i class="fa fa-cubes" style="width:50px; padding-left: 5px;"></i>PRODUCTS</a>
      <a href="orderlist.html"><i class="fa fa-truck" style="width:50px; padding-left: 5px;"></i>ORDERS</a>
      <a href="userlist.html"><i class="fa fa-users" style="width:50px; padding-left: 5px;"></i>USERS</a>
      <hr style="border-color:white; width:90%; white-space: nowrap;">
      <a href="../index.html"><i class="fa fa-globe" style="width:50px; padding-left: 5px;"></i>STORE</a>
    </div>
    <div class="user-box">
      <button id="sign-out-btn">SIGN OUT</button>
    </div>
  </div>

  <div id="wrapper">
    <div class="container">
      <div class="header-box">
        <div class="header-box-c">
          <button id="menu-btn" class="fa fa-bars" onclick="toggle()"></button>
          <span>EDIT PROFILE</span>
        </div>
        <div class="header-box-c">
          <button id="add-order-btn-s" class="fa fa-save add-btn" title="Save"></button>
          <button id="add-order-btn-l" class="add-btn" title="Save">Save</button>
        </div>
      </div>

      <!-- CONTENT -->

      <div class="container rounded bg-white mt-5">
        <div class="row">
            <div class="col-md-4 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5"
                        src="../Image/profile.jpg" width="90"><span class="font-weight-bold">John Doe</span><span
                        class="text-black-50">john_doe12@bbb.com</span><span>United States</span></div>
            </div>
            <div class="col-md-8">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex flex-row align-items-center back"><i
                                class="fa fa-long-arrow-left mr-1 mb-1"></i>
                            <h6>Edit Profile</h6>
                        </div>
                        <h6 class="text-right"></h6>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6"><input type="text" class="form-control" value="First Name"></div>
                        <div class="col-md-6"><input type="text" class="form-control" value="Last Name"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6"><input type="text" class="form-control" value="Emil address"></div>
                        <div class="col-md-6"><input type="text" class="form-control" value="Phone number"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6"><input type="text" class="form-control" value="Address"></div>
                        <div class="col-md-6"><input type="text" class="form-control" value="Country"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6"><input type="text" class="form-control" value="Bank Name"></div>
                        <div class="col-md-6"><input type="text" class="form-control" value="Account number"></div>
                    </div>
                    <div class="mt-5 text-right"><button class="btn btn-primary profile-button" type="button">Save
                            Profile</button></div>
                </div>
            </div>

      <!-- CONTENT -->

    </div>
  </div>
  <!-- SIDEBAR -->

    
  <!-- BOOTSTRAP -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- SIDEBAR JS -->
    <script src="sidebar.js"></script>
</body>

</html>