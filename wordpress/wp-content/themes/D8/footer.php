</section>
<footer class="footer">
    <div class="footer-inner">
        <div class="copyright pull-left">
            版权所有，保留一切权利！ &copy; <?php echo date('Y'); ?> <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>　Theme <a href="http://www.daqianduan.com/" target="_blank"><?php echo get_current_theme(); ?></a>
        </div>
        <div class="trackcode pull-right">
            <?php if( dopt('d_track_b') ) echo dopt('d_track'); ?>
        </div>
    </div>
</footer>
<?php 
wp_footer(); 
global $dHasShare; 
if($dHasShare == true){ 
    echo '<script id="bdshare_js" data="type=tools&amp;uid='.(dopt('d_bdshare')?dopt('d_bdshare'):13688).'" ></script><script id="bdshell_js"></script><script>document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?t=" + new Date().getHours();</script>';
} 
if( dopt('d_footcode_b') ) echo dopt('d_footcode'); 
?>
</body>
</html>