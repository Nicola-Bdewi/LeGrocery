<!DOCTYPE html>
<html>

<head>
    <title> LEGROCERY </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <!-- SIDEBAR -->
    <?php

    include('sidebar.php');

    ?>
    <!-- SIDEBAR -->

    <!-- OBLIGATORY CONTENT -->
    <div id="wrapper">
        <div class="container">
            <div class="header-box">
                <div class="header-box-c">
                    <button id="menu-btn" class="fa fa-bars" onclick="toggle()"></button>
                    <span>ORDER EDIT</span>
                </div>
                <div class="header-box-c">
                    <button id="add-order-btn-s" class="fa fa-save add-btn" title="Save"></button>
                    <button id="add-order-btn-l" class="add-btn" title="Save">Save</button>
                </div>
            </div>
            <!-- OBLIGATORY CONTENT -->

            <!-- CONTENT -->
            <div class="container rounded bg-white mt-5">
                <div class="row">
                    <div class="col-md-4 border-right">
                        <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" src="../Image/profile.jpg" width="90"><span class="font-weight-bold">John Doe</span><span class="text-black-50">john_doe12@bbb.com</span><span>United States</span></div>
                    </div>
                    <div class="col-md-8">
                        <div class="p-3 py-5">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div class="d-flex flex-row align-items-center back"><i class="fa fa-long-arrow-left mr-1 mb-1"></i>
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
                </div>
            </div>
            <!-- CONTENT -->

            <!-- OBLIGATORY CONTENT -->
        </div>
    </div>
    <!-- OBLIGATORY CONTENT -->
</body>

</html>