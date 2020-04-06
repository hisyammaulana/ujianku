<script src="{{asset('template/js/jquery.min.js')}}"></script>
<script src="{{asset('template/js/popper.min.js')}}"></script>
<script src="{{asset('template/js/bootstrap.min.js')}}"></script>
<!-- Appear JavaScript -->
<script src="{{asset('template/js/jquery.appear.js')}}"></script>
<!-- Countdown JavaScript -->
<script src="{{asset('template/js/countdown.min.js')}}"></script>
<!-- Counterup JavaScript -->
<script src="{{asset('template/js/waypoints.min.js')}}"></script>
<script src="{{asset('template/js/jquery.counterup.min.js')}}"></script>
<!-- Wow JavaScript -->
<script src="{{asset('template/js/wow.min.js')}}"></script>
<!-- Apexcharts JavaScript -->
<script src="{{asset('template/js/apexcharts.js')}}"></script>
<!-- Slick JavaScript -->
<script src="{{asset('template/js/slick.min.js')}}"></script>
<!-- Select2 JavaScript -->
<script src="{{asset('template/js/select2.min.js')}}"></script>
<!-- Owl Carousel JavaScript -->
<script src="{{asset('template/js/owl.carousel.min.js')}}"></script>
<!-- Magnific Popup JavaScript -->
<script src="{{asset('template/js/jquery.magnific-popup.min.js')}}"></script>
<!-- Smooth Scrollbar JavaScript -->
<script src="{{asset('template/js/smooth-scrollbar.js')}}"></script>
<!-- lottie JavaScript -->
<script src="{{asset('template/js/lottie.js')}}"></script>
<!-- Chart Custom JavaScript -->
<script src="{{asset('template/js/chart-custom.js')}}"></script>
<!-- Custom JavaScript -->
<script src="{{asset('template/js/custom.js')}}"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
    $('#name').select2({
        minimumInputLength: 1,
        ajax: {
            url: '{{route('siswa.search')}}',
            dataType: 'json',
        },
    });

    $('#no_peserta').change(function(){
    var value = $(this).val();

    // Set selected
    $('#name').val(value);
    $('#name').select2().trigger('change');

  });
});
  </script>

<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );

    $(document).ready(function() {
        $('#example1').DataTable();
    } );
</script>
