
<footer class="main-footer">
    <div class="pull-right hidden-xs">
         Processed in：<?php
        $Runtime->Stop();
        echo $Runtime->SpendTime()."ms";
        ?>
    </div>
    <strong>Copyright &copy; 2014-<?php echo date('Y'); ?> <a href="#"><?php echo $site_name;  ?></a> </strong>
            All rights reserved.  Powered by  <b>ss-panel</b><?php echo $version; ?>
</footer>
</div><!-- ./wrapper -->
<?php
include_once '../ana.php';
?>

<!-- jQuery 2.1.3 -->
<script src="https://dn-ssnode.qbox.me/js/jQuery.min.js"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="https://dn-ssnode.qbox.me/js/bootstrap.min.js" type="text/javascript"></script>
<!-- SlimScroll -->
<script src="https://dn-ssnode.qbox.me/plugins/slimScroll/jquery.slimScroll.min.js" type="text/javascript"></script>
<!-- FastClick -->
<script src='https://dn-ssnode.qbox.me/plugins/fastclick/fastclick.min.js'></script>
<!-- AdminLTE App -->
<script src="https://dn-ssnode.qbox.me/js/app.min.js" type="text/javascript"></script>
</body>
</html>
