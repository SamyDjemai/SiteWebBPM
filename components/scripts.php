<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="js/jquery.min.js"></script>
<!-- Bootstrap popper Core JavaScript -->
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--Custom JavaScript -->
<script src="js/custom.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->
<script type="text/javascript">
    $('a').on('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - 90
        }, 1000);
        event.preventDefault();
        // code 

    });
    AOS.init({
        once: true // Permet de n'animer qu'une seule fois les éléments
    });
</script>
