<?php
include_once 'lib/config.php';
include_once 'header.php';
?>
<body>
<div class="container">
    <?php include_once 'nav.php';?>

    <div class="jumbotron">
        <h2><?php echo $site_name; ?></h2>
        <p class="lead"> 初始流量 10GB</p>
	<p> 邀請碼先到先得: https://ssnode.net/code.php</p>
        <p><a class="btn btn-lg btn-success" href="user/register.php" role="button">立即注册</a></p>
    </div>
<?php
            include_once 'footer.php';
            include_once 'ana.php';?>
</div>
<!-- /container -->
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="https://dn-ssnode.qbox.me/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
