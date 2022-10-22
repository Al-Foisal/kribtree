@php
    $UsefullLink = App\Models\UsefullLink::where('status', 1)
        ->orderBy('orderBy')
        ->get();
    $Leadership = App\Models\Leadership::where('status', 1)
        ->orderBy('orderBy')
        ->get();
    $Contact = App\Models\Contact::where('status', 1)
        ->orderBy('orderBy')
        ->get();
    $SocialSite = App\Models\SocialSite::where('status', 1)
        ->orderBy('orderBy')
        ->get();
@endphp
<style>
    .home-newsletter {
        padding: 80px 0;
        background: #f84e77;
    }

    .home-newsletter .single {
        max-width: 650px;
        margin: 0 auto;
        text-align: center;
        position: relative;
        z-index: 2;
    }

    .home-newsletter .single h2 {
        font-size: 22px;
        color: white;
        text-transform: uppercase;
        margin-bottom: 40px;
    }

    .home-newsletter .single .form-control {
        height: 50px;
        background: rgba(255, 255, 255, 0.6);
        border-color: transparent;
        border-radius: 20px 0 0 20px;
    }

    .home-newsletter .single .form-control:focus {
        box-shadow: none;
        border-color: #243c4f;
    }

    .home-newsletter .single .btn {
        min-height: 50px;
        border-radius: 0 20px 20px 0;
        background: #243c4f;
        color: #fff;
    }
</style>
<section class="home-newsletter">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="single">
                    <form action="{{ route('subscribtion') }}" method="post">
                        @csrf
                        <h2>Subscribe to our Newsletter</h2>
                        <div class="input-group">
                            <input type="email" name="email" required class="form-control" placeholder="Enter your email">
                            <span class="input-group-btn">
                                <button class="btn btn-theme" type="submit" style="margin: 0">Subscribe</button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="row justify-content-center mx-0">

        <div class="col-md-3 ">
            <ul>
                <h4>Useful links</h4>
                @foreach ($UsefullLink as $item)
                    <li><a href="{{ $item->url }}" target="_blank"> {{ $item->title }}</a></li>
                @endforeach
            </ul>
        </div>

        <div class="col-md-3 ">
            <ul>
                <h4>Thought leadership</h4>
                @foreach ($Leadership as $item)
                    <li><a href="{{ $item->url }}" target="_blank"> {{ $item->title }}</a></li>
                @endforeach
            </ul>
        </div>

        <div class="col-md-3 ">
            <ul>
                <h4>Contact</h4>
                @foreach ($Contact as $item)
                    <li>{!! $item->logo !!} {!! $item->details !!} </li>
                @endforeach
            </ul>
        </div>

        <div class="col-md-3">
            <ul class="social">
                <h4>Social</h4>
                @foreach ($SocialSite as $item)
                    <li>
                        <a href="{!! $item->socialUrl !!}" target="_blank" title="{!! $item->socialName !!}">
                            {!! $item->socialLogo !!}
                        </a>
                    </li>
                @endforeach
            </ul>

            <ul>
                <li>
                    <a href="#" target="_blank">Subscribe</a>
                </li>
                <li>
                    <a href="#" target="_blank">Privacy policy</a>
                </li>
            </ul>
        </div>

    </div>
</footer>


<!-- jQuery -->
<script src="{{ asset('frontend/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/js/dataTables.min.js') }}"></script>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"></script>

{{-- script --}}
{{-- Navbar Fixed --}}
<script type="text/javascript">
    // if ($(window).width() > 992) {
    $(window).scroll(function() {
        if ($(this).scrollTop() > 0) { //default: 40
            $('#navbar_top').addClass("fixed-top");
            // add padding top to show content behind navbar
            $('body').css('padding-top', $('.navbar').outerHeight() + 'px');
        } else {
            $('#navbar_top').removeClass("fixed-top");
            // remove padding top from body
            $('body').css('padding-top', '0');
        }
    });
    // } // end
</script>

{{-- Bootstrap alert --}}
<script type="text/javascript">
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function() {
            $(this).remove();
        });
    }, 5000);
</script>

{{-- Datatable --}}
<script type="text/javascript">
    $(document).ready(function() {
        $('.table').DataTable();
    });
    // $('.table').dataTable( {
    //    "pageLength": 3
    // } );

    $('.table').DataTable({
        "lengthMenu": [
            [10, 25, 50, -1],
            [10, 25, 50, "All"]
        ]
    });
</script>

{{-- Home page side_menu --}}
<script>
    $(document).ready(function() {

        $(document).on('click', '.js-menu_toggle.closed', function(e) {
            e.preventDefault();
            $('.list_load, .list_item').stop();
            $(this).removeClass('closed').addClass('opened');
            $('.side_menu').css({
                'right': '0px'
            });
            var count = $('.list_item').length;
            $('.list_load').slideDown((count * .6) * 100);

            $('.list_item').each(function(i) {
                var thisLI = $(this);
                timeOut = 100 * i;
                setTimeout(function() {
                    thisLI.css({
                        'opacity': '1',
                        'margin-left': '0'
                    });
                }, 100 * i);
            });
        });

        $(document).on('click', '.js-menu_toggle.opened', function(e) {
            e.preventDefault();
            $('.list_load, .list_item').stop();
            $(this).removeClass('opened').addClass('closed');

            $('.side_menu').css({
                'right': '-250px'
            });

            var count = $('.list_item').length;
            $('.list_item').css({
                'opacity': '0',
                'margin-left': '-20px'
            });
            $('.list_load').slideUp(300);
        });
    });
</script>

{{-- Botman --}}
<script src="{{ asset('frontend/js/widget.js') }}"></script>
<script>
    var botmanWidget = {
        aboutText: 'Write Something',
        introMessage: "✋ Hi! I'm form KRIBTREE"
    };
</script>

{{-- Navbar hover --}}
<script type="text/javascript">
    window.addEventListener("resize", function() {
        "use strict";
        window.location.reload();
    });

    document.addEventListener("DOMContentLoaded", function() {

        // make it as accordion for smaller screens
        if (window.innerWidth > 992) {

            document.querySelectorAll('.navbar .nav-item').forEach(function(everyitem) {

                everyitem.addEventListener('mouseover', function(e) {

                    let el_link = this.querySelector('a[data-bs-toggle]');

                    if (el_link != null) {
                        let nextEl = el_link.nextElementSibling;
                        el_link.classList.add('show');
                        nextEl.classList.add('show');
                    }

                });
                everyitem.addEventListener('mouseleave', function(e) {
                    let el_link = this.querySelector('a[data-bs-toggle]');

                    if (el_link != null) {
                        let nextEl = el_link.nextElementSibling;
                        el_link.classList.remove('show');
                        nextEl.classList.remove('show');
                    }

                })
            });

        }
        // end if innerWidth
    });
    // DOMContentLoaded  end
</script>
