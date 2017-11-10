<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
   <meta charset="utf-8" />
   <title>登录</title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="" name="author" />

    <script src="https://cdn.bootcss.com/react/15.4.2/react.min.js"></script>
    <script src="https://cdn.bootcss.com/react/15.4.2/react-dom.min.js"></script>
    <script src="https://cdn.bootcss.com/babel-standalone/6.22.1/babel.min.js"></script>

   <link href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
   <link href="<?php echo base_url()?>assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
   <link href="<?php echo base_url()?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
   <link href="<?php echo base_url()?>css/style.css" rel="stylesheet" />
   <link href="<?php echo base_url()?>css/style-responsive.css" rel="stylesheet" />
   <link href="<?php echo base_url()?>css/style-default.css" rel="stylesheet" id="style_color" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->

<body class="lock">
    <div class="lock-header">
        <!-- BEGIN LOGO -->
        <a class="center" id="logo" href="<?php echo site_url('indexController')?>">
            <img class="center" alt="logo" src="<?php echo base_url()?>img/logo.png">
        </a>
        <!-- END LOGO -->
    </div>
    <div class="login-wrap">

        <div class="metro single-size red">
            <div class="locked">
                <i class="icon-lock"></i>
                <span>登录</span>
            </div>
        </div>
        <div class="metro double-size green">
            <form action="<?php echo site_url('indexController')?>">
                <div class="input-append lock-input">
                    <div id="user_box"></div>
                    <script type="text/babel" src="<?php echo base_url()?>widget/demo/user_box.js"></script>

                </div>
            </form>
        </div>
        <div class="metro double-size yellow">
            <form action="<?php echo site_url('indexController')?>">
                <div class="input-append lock-input">
                    <div id="pwd_box"></div>
                    <script type="text/babel" src="<?php echo base_url()?>widget/demo/pwd_box.js"> </script>
                </div>
            </form>
        </div>
        <div class="metro single-size terques login">
            <form action="<?php echo site_url('indexController')?>">
                <button type="submit" class="btn login-btn">
                    登录
                    <i class=" icon-long-arrow-right"></i>
                </button>
            </form>
        </div>

        <div class="login-footer">
            <div class="remember-hint pull-left">
                <input type="checkbox" id=""> 记住我
            </div>
        </div>
    </div>
</body>
<!-- END BODY -->
</html>