<!DOCTYPE html>
<html lang="en">

<head>
    @include('component.header')
</head>

<body id="body" class="tt-transition tt-boxed tt-smooth-scroll tt-magic-cursor">
    <main id="body-inner">
        <div id="page-transition">
            <div class="ptr-overlay"></div>
            <div class="ptr-preloader">
                <div class="ptr-prel-content">

                    <img src="{{ asset('assets/img/logo-light.png') }}" class="ptr-prel-image tt-logo-light"
                        alt="Logo">
                </div>
            </div>
        </div>
        <div id="magic-cursor">
            <div id="ball"></div>
        </div>
        <div class="bg-noise"></div>
        <div id="scroll-container">
            @include('component.navbar')
            <div id="content-wrap">
                @yield('content')
                @include('component.footer')
            </div>
        </div>
    </main>
    @include('component.javascript')
</body>

</html>
