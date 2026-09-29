<!doctype html>
<html lang="en" dir="ltr">
<head>
    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sash – Bootstrap 5  Admin & Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords" content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="admin/assets/images/brand/favicon.ico" />
    <!-- TITLE -->
    <title>Sash – Bootstrap 5 Admin & Dashboard Template</title>
    <!-- BOOTSTRAP CSS -->
    <link id="style" href="admin/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="admin/assets/css/style.css" rel="stylesheet" />
    <link href="admin/assets/css/dark-style.css" rel="stylesheet" />
    <link href="admin/assets/css/transparent-style.css" rel="stylesheet">
    <link href="admin/assets/css/skin-modes.css" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="admin/assets/css/icons.css" rel="stylesheet" />

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="admin/assets/colors/color1.css" />

</head>

<body class="app sidebar-mini ltr login-img">

    <!-- BACKGROUND-IMAGE -->
    <div class="">

        <!-- GLOABAL LOADER -->
        <div id="global-loader">
            <img src="admin/assets/images/loader.svg" class="loader-img" alt="Loader">
        </div>
        <!-- /GLOABAL LOADER -->

        <!-- PAGE -->
        <div class="page">
            <div class="">

                <!-- CONTAINER OPEN -->
                <div class="col col-login mx-auto mt-7">
                    <div class="text-center">
                        <img style="width:300px" src="admin/assets/images/brand/logo.png" class="header-brand-img" alt="">
                    </div>
                </div>

                <div class="container-login100">
                    <div class="wrap-login100 p-6">
                        <form action="admin/function/action.php" class="login100-form validate-form" method="post" enctype="multipart/form-data">
                            <span class="login100-form-title pb-5">
                              Check A coad in your GoldMaker Admin Email
                            </span>
                            <div class="panel panel-primary">
                                <div class="tab-menu-heading">
                                    <div class="tabs-menu1">
                                        <!-- Tabs -->
                                        <ul class="nav panel-tabs">
                                            <li class="mx-0"><a href="#tab5" class="active" data-bs-toggle="tab">Email And Password</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel-body tabs-menu-body p-0 pt-5">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab5">
                                            <div class="wrap-input100 validate-input input-group" data-bs-validate="">
                                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                    <i class="zmdi zmdi-email text-muted" aria-hidden="true"></i>
                                                </a>
                                                <input name="admin_email" class="input100 border-start-0 form-control ms-0" type="email" placeholder="Email">
                                            </div>
                                            <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                    <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                                </a>
                                                <input name="admin_password" class="input100 border-start-0 form-control ms-0" type="password" placeholder="Password">
                                            </div>
                                            <div class="text-end pt-4">
                                                <p class="mb-0"><a onclick="return confirm('Are you sure?')" href="verify_admin.php" class="text-primary ms-1">Forgot Password?</a></p>
                                            </div>
                                            <div class="container-login100-form-btn">
                                              <input type="submit" name="admin_login_submit" class="btn btn-primary" value="Login">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- CONTAINER CLOSED -->
            </div>
        </div>
        <!-- End PAGE -->
    </div>
    <!-- BACKGROUND-IMAGE CLOSED -->
    <!-- JQUERY JS -->
    <script src="admin/assets/js/jquery.min.js"></script>
    <!-- BOOTSTRAP JS -->
    <script src="admin/assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="admin/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- SHOW PASSWORD JS -->
    <script src="admin/assets/js/show-password.min.js"></script>
    <!-- GENERATE OTP JS -->
    <script src="admin/assets/js/generate-otp.js"></script>
    <!-- Perfect SCROLLBAR JS-->
    <script src="admin/assets/plugins/p-scroll/perfect-scrollbar.js"></script>
    <!-- Color Theme js -->
    <script src="admin/assets/js/themeColors.js"></script>
    <!-- CUSTOM JS -->
    <script src="admin/assets/js/custom.js"></script>

</body>

</html>
