<!-- js placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/jquery.scrollTo.min.js"></script>
<script src="js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="js/jquery.sparkline.js" type="text/javascript"></script>
<script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
<script src="js/owl.carousel.js" ></script>
<!--common script for all pages-->
<script src="js/common-scripts.js"></script>
<!--script for this page only-->
<script src="js/sparkline-chart.js"></script>
<script src="js/easy-pie-chart.js"></script>
<!--custom checkbox & radio-->
<script type="text/javascript" src="js/ga.js"></script>

<script>
  //    sidebar dropdown menu
  jQuery('#sidebar .sub-menu > a').click(function () {
    var last = jQuery('.sub-menu.open', $('#sidebar'));
    last.removeClass("open");
    jQuery('.arrow', last).removeClass("open");
    jQuery('.sub', last).slideUp(200);
    var sub = jQuery(this).next();
    if (sub.is(":visible")) {
        jQuery('.arrow', jQuery(this)).removeClass("open");
        jQuery(this).parent().removeClass("open");
        sub.slideUp(200);
    } else {
        jQuery('.arrow', jQuery(this)).addClass("open");
        jQuery(this).parent().addClass("open");
        sub.slideDown(200);
    }
    var o = ($(this).offset());
    diff = 200 - o.top;
    if(diff>0)
        $("#sidebar").scrollTo("-="+Math.abs(diff),500);
    else
        $("#sidebar").scrollTo("+="+Math.abs(diff),500);
});


  <?php if(isset($inject_js)) echo $inject_js; ?>

</script>
</body>
</html>