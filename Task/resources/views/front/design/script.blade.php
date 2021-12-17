
        <script src="{{asset('front3')}}/bootstrap-5.1.1-dist/js/bootstrap.js ">
        </script>
        <script src="{{asset('front3')}}/bootstrap-5.1.1-dist/js/bootstrap.min.js "></script>
        <script src=" {{asset('front3')}}/js/all.js "></script>
        <script src="{{asset('front3')}}/js/fontawesome.js "></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js " integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q " crossorigin="anonymous ">
        </script>
      <script src=" {{asset('front3/js/owl.js')}} "></script>

        <script>
            jQuery("#carousel ").owlCarousel({
                autoplay: true,
                lazyLoad: true,
                loop: true,
                margin: 20,
                responsiveClass: true,
                autoHeight: true,
                autoplayTimeout: 3000,
                smartSpeed: 8000,
                nav: true,
                responsive: {
                    0: {
                        items: 1
                    },

                    600: {
                        items: 1
                    },

                    1024: {
                        items: 1
                    },

                    1366: {
                        items: 1
                    }
                }
            });
        </script>