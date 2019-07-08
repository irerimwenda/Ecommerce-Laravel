@extends('layouts.main')

@section('content')
<!-- START OF PAGE CONTENT -->

<!-- Check the main layout for the default template includes in their order. Includes are in the partials folder. -->

<!-- Welcome Page Includes -->
@include('partials._banner')
@include('partials._bottom-banner')
@include('partials._bottom-banner-1')
@include('partials._special-deals')
@include('partials._new-products')
@include('partials._top-brands')
@include('partials._newsletter')
@include('partials._footer-section')
<!--// End of Page Includes -->

<!-- END OF PAGE CONTENT -->
@endsection()


@section('scripts')

<!-- start-smooth-scrolling -->
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();
            $('html,body').animate({ scrollTop: $(this.hash).offset().top }, 1000);
        });
    });
</script>
<!-- //end-smooth-scrolling -->

<!-- cart-js -->
<script src="{{ asset('js/minicart.js') }}"></script>
<script type="text/javascript">
    w3ls.render();

    w3ls.cart.on('w3sb_checkout', function (evt) {
        var items, len, i;

        if (this.subtotal() > 0) {
            items = this.items();

            for (i = 0, len = items.length; i < len; i++) { 
            }
        }
    });
</script>  
<!-- //cart-js -->   

@endsection()