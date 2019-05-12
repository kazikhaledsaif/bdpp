

<!--   Core JS Files   -->
<script src="{{ asset('frontend/js/core/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('frontend/js/core/popper.min.js"') }}" type="text/javascript"></script>
<script src="{{ asset('frontend/js/core/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('frontend/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="{{ asset('frontend/js/plugins/bootstrap-switch.js') }}"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="{{ asset('frontend/js/plugins/nouislider.min.js') }}" type="text/javascript"></script>
<!-- Chart JS -->
<script src="{{ asset('frontend/js/plugins/chartjs.min.js') }}"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="{{ asset('frontend/js/plugins/moment.min.js') }}./assets/js/plugins/moment.min.js"></script>
<script src="{{ asset('frontend/js/plugins/bootstrap-datetimepicker.jss') }}" type="text/javascript"></script>
<!-- Black Dashboard DEMO methods, don't include it in your project! -->
<script src="{{ asset('frontend/demo/demo.js') }}./assets/demo/demo.js"></script>

<!-- Control Center for Black UI Kit: parallax effects, scripts for the example pages etc -->
<script src="{{ asset('frontend/js/blk-design-system.min.js?v=1.0.0') }}" type="text/javascript"></script>


<script>
    $('.carousel').carousel();
    $(document).ready(function() {
        blackKit.initDatePicker();
        blackKit.initSliders();
    });

    function scrollToDownload() {

        if ($('.section-download').length != 0) {
            $("html, body").animate({
                scrollTop: $('.section-download').offset().top
            }, 1000);
        }
    }
</script>