



<script src="{{ URL::asset('form/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{ URL::asset('form/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{ URL::asset('form/vendor/bootstrap/js/popper.js')}}"></script>
<script src="{{ URL::asset('form/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{ URL::asset('vendor/select2/select2.min.js')}}"></script>
<script>
    $(".selection-2").select2({
        minimumResultsForSearch: 20,
        dropdownParent: $('#dropDownSelect1')
    });
</script>
<!--===============================================================================================-->
<script src="{{ URL::asset('form/vendor/daterangepicker/moment.min.js')}}"></script>
<script src="{{ URL::asset('form/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
<script src="{{ URL::asset('form/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
<script src="{{ URL::asset('form/js/main.js')}}"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script type="text/javascript">

    $(document).ready(function() {

        $(".btn-success").click(function(){
            var html = $(".clone").html();
            $(".increment").after(html);
        });

        $("body").on("click",".btn-danger",function(){
            $(this).parents(".control-group").remove();
        });

    });

</script>