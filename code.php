<?php
require_once 'lib/config.php';
include_once 'header.php';
$c = new \Ss\User\Invite();
?>
<body>
<div class="container">
    <?php include_once 'nav.php';?>

    <div class="jumbotron">
        <p>本站不定期放出邀請碼 數量不定</p>
        <p>請遵守本站 <a href=https://ssnode.net/user/tos.php>Term of Service</a> 若違反直接刪除帳號</p>
    </div>

    <div class="row marketing">
        <h2 class="sub-header">邀請碼</h2>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Code</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $datas = $c->CodeArray();
                $a = 0;
                foreach($datas as $data ){
                ?>
                <tr>
                    <td><?php echo $a;$a++; ?></td>
                     <td><?php echo $data['code'];?></td>
                    <td>可使用</td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div><?php
            include_once 'footer.php';
            include_once 'ana.php';?>

</div> <!-- /container -->
</body>
</html>
