@include('front.layouts.head')
@include('front.pages.page_slider')
@section('body')
@show()

@include('front.layouts.border')
@include('front.layouts.footer')
<script type="text/javascript">
;( function( $ ) {

  $( '.swipebox' ).swipebox( {
    useCSS : true, // false will force the use of jQuery for animations
    useSVG : true, // false to force the use of png for buttons
    initialIndexOnArray : 0, // which image index to init when a array is passed
    hideCloseButtonOnMobile : false, // true will hide the close button on mobile devices
    removeBarsOnMobile : true, // false will show top bar on mobile devices
    hideBarsDelay : 3000, // delay before hiding bars on desktop
    videoMaxWidth : 1140, // videos max width
    beforeOpen: function() {}, // called before opening
    afterOpen: null, // called after opening
    afterClose: function() {}, // called after closing
    loopAtEnd: false // true will return to the first image after the last image is reached
  } );

} )( jQuery );

</script>