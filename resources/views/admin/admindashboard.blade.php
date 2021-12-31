<!DOCTYPE html>
<html lang="en">
    <head>
        @include("admin.admincss")
        <style>
            td:hover{
                color: cyan !important;
            }
            /* tr:hover{
                color: cyan !important;
            } */
        </style>
    </head>
    <body>
        <div class="container-scroller">
            @include("admin.navbar")
            <div class="container-fluid page-body-wrapper">
                @include("admin.topbar")
                <div class="main-panel">
                    <div class="content-wrapper">
                        <div class="row">
                            <div class="col-lg-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title" style="font-size: 30px;">Admin Dashboard</h4>
                                        <table class="table table-hover">
                                            <div style="padding: 10px">
                                                <img class="rounded-circle" src="admin/assets/images/faces/face15.jpg" alt="">
                                            </div>    
                                            <tbody>
                                                <tr>
                                                    <td style="color: white; font-size: 20px;"> Name: <span style="float: right;"> {{Auth::user()->name}} </span> </td>
                                                    <td style="color: white; font-size: 20px; width: 70%;">  </td>
                                                </tr>
                                                <tr>
                                                    <td style="color: white; font-size: 15px;"> Email: <span style="float: right;"> {{Auth::user()->email}} </span> </td>
                                                </tr>
                                                <tr>
                                                    <td style="color: white; font-size: 15px;"> User Type: <span style="float: right;"> ADMIN </span> </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <p class="card-description"><code> Summarized Data </code></p>
                                        <table class="table table-hover">
                                            <tbody>
                                                <tr>
                                                    <td style="color: white; font-size: 15px;"> Total Number of User Account(s): <span style="float: right;"> {{$ucount}} </span> </td>
                                                    <td style="color: white; font-size: 20px; width: 70%;">  </td>
                                                </tr>
                                                <tr>
                                                    <td style="color: white; font-size: 15px;"> Total Number of Food Item(s): <span style="float: right;"> {{$mcount}} </span> </td>
                                                </tr>
                                                <tr>
                                                    <td style="color: white; font-size: 15px;"> Total Number of Active Order(s): <span style="float: right;"> {{$aocount}} </span> </td>
                                                </tr>
                                                <tr>
                                                    <td style="color: white; font-size: 15px;"> Total Number of Completed Cart(s): <span style="float: right;"> {{$cocount}} </span> </td>
                                                </tr>
                                                <tr>
                                                    <td style="color: white; font-size: 15px;"> Total Number of Active Cart(s): <span style="float: right;"> {{$ccount}} </span> </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @include("admin.footer")
                </div>
            </div>
        </div>
        @include("admin.adminscript")
    </body>
</html>
