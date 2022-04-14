<!DOCTYPE html>
<html lang="en">

<head>
    <title> LEGROCERY </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- STYLESHEET -->
    <link rel="stylesheet" type="text/css" href="orderlist.css">
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
                    <span>ORDER LIST</span>
                </div>
                <div class="header-box-c">
                    <button id="add-order-btn-s" class="fa fa-plus add-btn" title="Create Order"></button>
                    <button id="add-order-btn-l" class="add-btn" title="Create Order">Create Order</button>
                </div>
            </div>
            <!-- OBLIGATORY CONTENT -->

            <!-- CONTENT -->
            <div class="container" style="padding: 0px;">
                <div class="content-box">
                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th class="col-1">ORDER</th>
                                    <th class="col-2">DATE</th>
                                    <th class="col-5">CUSTOMER</th>
                                    <th class="col-2">FULLFILLMENT</th>
                                    <th class="col-1">TOTAL</th>
                                    <th class="col-1"></th>
                                </tr>
                            </thead>
                            <tbody id="table-body">
                                <tr>
                                    <td>1545</td>
                                    <td>27/03/2022</td>
                                    <td>Jerry</td>
                                    <td>Unfullfilled</td>
                                    <td>34.50$</td>
                                    <td class="table-icon">
                                        <a href="orderedit.php"><button id="edit-btn"><i class="fa fa-edit" title="Edit"></i></button></a>
                                        <!-- HREF will be removed when button implemented-->
                                        <button id="delete-btn"><i class="fa fa-trash" title="Delete"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2646</td>
                                    <td>27/03/2022</td>
                                    <td>Tom</td>
                                    <td>Unfullfilled</td>
                                    <td>15.00$</td>
                                    <td class="table-icon">
                                        <a href="orderedit.php"><button id="edit-btn"><i class="fa fa-edit" title="Edit"></i></button></a>
                                        <!-- HREF will be removed when button implemented-->
                                        <button id="delete-btn"><i class="fa fa-trash" title="Delete"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4691</td>
                                    <td>29/03/2022</td>
                                    <td>Tim</td>
                                    <td>Fullfilled</td>
                                    <td>30.00$</td>
                                    <td class="table-icon">
                                        <a href="orderedit.php"><button id="edit-btn"><i class="fa fa-edit" title="Edit"></i></button></a>
                                        <!-- HREF will be removed when button implemented-->
                                        <button id="delete-btn"><i class="fa fa-trash" title="Delete"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
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