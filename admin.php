<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" href="./admin.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudfare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div style="background-color: gold;">
        <table id="headerdash" style="margin-left: 700px; padding-bottom: 0px; color: black;">
            <thead>
                <tr>
                    <th style="padding-top: 0px; font-size: 20px; padding-right: 550px; color: black; padding-bottom: 0%;">Welcome to Oberon! The New Cryptocurrency Exchange</th>
                    <th id="logout_btn" style="padding-top: 0px; font-size: 20px; padding-right: 700px; padding-bottom: 0%;"><a href="logout.php">Logout</a></th>
                </tr>
            </thead>
        </table>
    </div>

    <div id="mySidenav" class="sidenav">
        <p class="logo"><img src="images/oberonlogo.png" alt="logo" width="250px"></p>
        <p style="text-align: center; color: goldenrod; font-size: 25px;">ADMIN-PANEL</p>
        <a href="#" class="icon-a"><i class="fa fa-dashboard icons"></i>&nbsp;&nbsp;Dashboard</a>
        <a href="#" class="icon-a"><i class="fa fa-dashboard icons"></i>&nbsp;&nbsp;Finance</a>
        <a href="#" class="icon-a"><i class="fa fa-dashboard icons"></i>&nbsp;&nbsp;Trade</a>
        <a href="#" class="icon-a"><i class="fa fa-dashboard icons"></i>&nbsp;&nbsp;Exchanger</a>
        <a href="#" class="icon-a"><i class="fa fa-users icons"></i>&nbsp;&nbsp;Users</a>
        <a href="#" class="icon-a"><i class="fa fa-dashboard icons"></i>&nbsp;&nbsp;Settings</a>
        <a href="#" class="icon-a"><i class="fa fa-user icons"></i>&nbsp;&nbsp;Admin</a>
        <a href="#" class="icon-a"><i class="fa fa-dashboard icons"></i>&nbsp;&nbsp;CMS</a>
        <a href="#" class="icon-a"><i class="fa fa-dashboard icons"></i>&nbsp;&nbsp;Update</a>
        <a href="#" class="icon-a"><i class="fa fa-dashboard icons"></i>&nbsp;&nbsp;Support</a>
    </div>

    <div id="main">
        <div class="head">
            <div class="col-div-6">
                <span style="font-size: 30px; cursor: pointer; color: white;" class="nav">
                    &#9776; Dashboard</span>
            </div>

            <div class="col-div-6">
                <div class="profile">
                    <img src="images/yaman_circle.png" class="pro-img">
                    <p>Greetings, Admin</p>
                </div>
            </div>

            <div class="clearfix"></div>
        </div>

        <div class="col-div-3">
            <div class="box">
                <p><?php
                    include("connection.php");
                    $sql = "SELECT COUNT(user_id) as Total FROM Users";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($result);
                    echo $row["Total"];
                    ?><br /><span>Total Users</span></p>
                <i class="fa fa-users box icon"></i>
            </div>
        </div>
        <div class="col-div-3">
            <div class="box">
                <p>0<br /><span>Exchange Market</span></p>
                <i class="fa fa-users box icon"></i>
            </div>
        </div>
        <div class="col-div-3">
            <div class="box">
                <p>0<br /><span>Max Buy Currency Amount</span></p>
                <i class="fa fa-users box icon"></i>
            </div>
        </div>
        <div class="col-div-3">
            <div class="box">
                <p>0<br /><span>Max Sell Currency Amount</span></p>
                <i class="fa fa-users box icon"></i>
            </div>
        </div>
        <div class="col-div-3">
            <div class="box">
                <p>0<br /><span>Total Crypto Fees</span></p>
                <i class="fa fa-users box icon"></i>
            </div>
        </div>
        <div class="col-div-3">
            <div class="box">
                <p>0<br /><span>Total USD Fees</span></p>
                <i class="fa fa-users box icon"></i>
            </div>
        </div>
        <div class="col-div-3">
            <div class="box">
                <p>0<br /><span>Referral Bonus USD</span></p>
                <i class="fa fa-users box icon"></i>
            </div>
        </div>
        <div class="col-div-3">
            <div class="box">
                <p>0<br /><span>Total Trade</span></p>
                <i class="fa fa-users box icon"></i>
            </div>
        </div>

        <div class="clearfix"></div>
        <br /><br />

        <div class="col-div-8">
            <div class="box-8">
                <div class="content-box">
                    <p>All Users <span>View All</span></p>
                    <br />
                    <table>
                        <tr>
                            <th>Company</th>
                            <th>Contact</th>
                            <th>Country</th>
                        </tr>
                        <tr>
                            <td>Oberon Inc.</td>
                            <td>Oberon</td>
                            <td>Bangladesh</td>
                        </tr>
                        <tr>
                            <td>Oberon Inc.</td>
                            <td>Oberon</td>
                            <td>Bangladesh</td>
                        </tr>
                        <tr>
                            <td>Oberon Inc.</td>
                            <td>Oberon</td>
                            <td>Bangladesh</td>
                        </tr>
                        <tr>
                            <td>Oberon Inc.</td>
                            <td>Oberon</td>
                            <td>Bangladesh</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-div-4">
            <div class="box-4">
                <div class="content-box">
                    <p>Deposits<span>View All</span></p>
                    <div class="circle-wrap">
                        <div class="circle">
                            <div class="mask full">
                                <div class="fill"></div>
                            </div>
                            <div class="mask half">
                                <div class="fill"></div>
                            </div>
                            <div class="inside-circle">70%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

    </div>
</body>

</html>