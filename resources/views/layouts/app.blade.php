<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>@yield('title', 'novALight')</title>
    <meta name="description" content="@yield('meta_description', 'Al Enayah Al Kamlah Excellence in Beauty Manufacturing. At Al Enayah Al Kamlah, we are proud to be a trusted leader in crafting and supplying top-tier cosmetic tools and professional-grade beauty products. With decades of experience in the beauty industry, we proudly serve salons, spas, and global retailers by delivering an extensive range of premium solutions thoughtfully designed to meet the unique needs of both beauty professionals and consumers.')">
    <meta name="keywords" content="excellence in beauty manufacturing, trusted leader, cosmetic tools, professional-grade beauty products, decades of experience, beauty industry, salons, spas, global retailers, premium solutions, thoughtfully designed, unique needs, beauty professionals, consumers, auraray, Al Enayah Al Kamlah, Hair care, skincare, shaving, grooming essentials, salon-focused, private label manufacturing, custom product development, bespoke packaging solutions, expertly formulated, effective ingredients, luxurious textures, captivating fragrance profiles, uncompromising quality, safety, ISO certifications, dedicated customer support, 24/7 assistance, seamless assistance, empowering beauty businesses, reliable, sophisticated, performance-driven, signature brands, inspired innovation, flawless execution, unique beauty visions">
    <meta name="author" content="Al Enayah Al Kamlah Manufacture of Cosmetic Tools & Supply L.L.C.">
    <meta name="robots" content="index, follow">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/galaxy.png') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Space+Grotesk&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css') }} " rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

</head>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-F5EKBPNVP7"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-F5EKBPNVP7');
</script>

<body class="index-page">

    <!-- Start spinner -->
    @include('includes.spinner-start')
    <!-- End spinner -->

    <!-- Start Navbar -->
    @include('includes.navbar')
    <!-- End Navbar -->

    <!--content-->
    @yield('content')
    <!--end content-->

    <!-- Start Footer Area -->
    @include('includes.footer')
    <!-- End Footer Area -->

    @include('sweetalert::alert')
    @yield('scripts')
    <!--JQuery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>


    <!-- Back to Top -->
    <a href="#!" class="btn btn-lg btn-primary btn-lg-square back-to-top">
        <i class="bi bi-arrow-up"></i>
    </a>

    <!-- Floating WhatsApp Button -->
    <a href="https://wa.me/971569660428?text=Hello,%20I%20would%20like%20to%20connect."
        target="_blank"
        class="btn btn-lg btn-success btn-lg-square back-to-whatsapp">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
            <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
        </svg>
    </a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/lib/easing/easing.min.js') }} "></script>
    <script src="{{ asset('assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }} "></script>

    <!-- Template Javascript -->
    <script src="{{ asset('assets/js/main.js') }} "></script>

</body>

</html>