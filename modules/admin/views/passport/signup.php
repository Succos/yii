<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>H+ 后台主题UI框架 - 注册</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

    <link rel="shortcut icon" href="favicon.ico"> <link href="admin/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="admin/css/font-awesome.css?v=4.4.0" rel="stylesheet">

    <link href="admin/css/animate.css" rel="stylesheet">
    <link href="admin/css/style.css?v=4.1.0" rel="stylesheet">
    <!--[if lt IE 9]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->
    <script>var _csrf = "<?=Yii::$app->request->csrfToken?>";</script>
    <script>if(window.top !== window.self){ window.top.location = window.location;}</script>
</head>
<body class="gray-bg">

<div class="middle-box text-center loginscreen  animated fadeInDown">
    <div>
        <div>

            <h1 class="logo-name">H+</h1>

        </div>
        <h3>欢迎使用 H+</h3>

        <form class="m-t" role="form" action="index.php?r=admin/login/sign" method="post">
            <div class="form-group">
                <input type="username" class="form-control" placeholder="用户名" required="" name="username">
            </div>
            <div class="form-group">
                <input name="_csrf-frontend" type="hidden" value="<?= Yii::$app->request->csrfToken ?>"/>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="密码" required="" name="password">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" placeholder="邮箱" required="" name="email">
            </div>
            <button type="submit" class="btn btn-primary block full-width m-b">注  册</button>

        </form>
    </div>
</div>

<!-- 全局js -->
<script src="admin/js/jquery.min.js?v=2.1.4"></script>
<script src="admin/js/bootstrap.min.js?v=3.3.6"></script>

<script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
<!--统计代码，可删除-->

</body>

</html>