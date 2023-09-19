    <!-- {{-- JS.index.js --}} -->
    <script src="{{ url('akathospital/JS/index.js') }}"></script>

    <!-- {{-- JS Bootstrap 5 --}} -->
    <!-- {{-- Bundle Bootstrap 5 --}} -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- {{-- Separate Bootstrap 5 --}} -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <!-- {{-- END JS Bootstrap 5 --}} -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>

    <!-- AOS JS CDN -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- JS AOS -->
    <script>
        AOS.init();
    </script>


    <!-- #region Jssor Slider Begin -->
    <!-- Generator: Jssor Slider Composer -->
    <!-- Source: https://www.jssor.com/demos/image-gallery.slider/=edit -->
    <script src="{{ url('akathospital/JS/jquery-1.11.3.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('akathospital/JS/jssor.slider-28.1.0.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('akathospital/JS/slider.js') }}" type="text/javascript"></script>

    <script>
        const navbar = document.getElementById('navbar');
        let isFixed = true;
    
        window.addEventListener('scroll', () => {
          if (window.scrollY > 50 && isFixed) {
            navbar.classList.remove('fixed-top');
            isFixed = false;
          } else if (window.scrollY <= 50 && !isFixed) {
            navbar.classList.add('fixed-top');
            isFixed = true;
          }
        });
      </script>



    