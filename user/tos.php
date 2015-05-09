<?php
require_once '../lib/config.php';
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $site_name;  ?></title>
    <!-- Bootstrap core CSS -->
    <link href="https://dn-ssnode.qbox.me/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://dn-ssnode.qbox.me/css/flat-ui.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="https://dn-ssnode.qbox.me/css/sticky-footer-navbar.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><?php echo $site_name;  ?></a>
        </div>

    </div>
</nav>

<!-- Begin page content -->
<div class="container">
    <div class="page-header">
        <h1>Terms of Service </h1>
    </div>
    <p>歡迎使用Lop集團的「SSNODE TAIWAN」，我們秉持著熱忱的精神為您服務，在此同時也請遵守以下規則。</p>
    <h3>隱私</h3>
    <p>
        <ul>
            <li>註冊時請填寫真實的數據，請勿造假e-mail，這將會用於忘記密碼時使用。</li>
            <li>密碼將加密保存，且所有信息均不外流。</li>
        </ul>
    </p>

    <h3>使用條款</h3>
    <p>
        <ul>
            <li>使用本服務須遵守中華民國以及服務節點所在國家之法律。</li>
            <li>禁止濫用，例如：使用任何P2P(Peer to Peer)軟體、發送垃圾E-Mail。</li>
            <li>請勿一人註冊多個帳號，若發現立刻刪除。</li>
            <li>我們有權利在不另行通知的情況下刪除刪除任何人的帳戶。</li>
            <li>倘若違反使用條款，我們將無條件刪除帳戶。</li>
       </ul>
    </p>

    <h3>其它</h3>
    <p>
    <ul>
        <li>SSNODE TAIWAN為 Lop集團 授權在中華民國使用之商標，請勿隨意使用，若造成侵權，我方保留法律追訴權。</li>
	<li>最終解釋權為 SSNODE TAIWAN 所有。</li>
        <li>本條約經 Lop集團倫理委員會 核定後實施，修正時赤同。
    </ul>
    </p>
    <p>最後編輯: 2015 年 04 月 27 日 01:02<GMT+8></p>
</div>

<footer class="footer">
    <div class="container">
        <p class="text-muted"><strong>Copyright &copy; <?php echo date('Y'); ?> <a href="#"><?php echo $site_name;  ?></a>.</strong> All rights reserved. Powered by  <b>ss-panel</b> <?php echo $version; ?> </p>
    </div>
</footer>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://dn-ssnode.qbox.me/js/jQuery.min.js"></script>
<script src="https://dn-ssnode.qbox.me/js/bootstrap.min.js"></script>

</body>
</html>
