@extends('app')

@section('body-class', 'community')

@section('content')
    <nav id="slide-menu" class="slide-menu" role="navigation">
        <div class="brand">
            <a href="/">
                <img src="/assets/img/laravel-logo-white.png" height="50" alt="Laravel white logo">
            </a>
        </div>

        <ul class="slide-main-nav">
            @include('partials.main-nav')
        </ul>
    </nav>

    <section class="hero">
        <div class="container">

            <div class="content">
                <h1>About the author</h1>

                <p>Blaz Orazem is a professional web developer from Ljubljana, Slovenia.</p>
                <p>He primarily develops back end on the LAMP / LEMP stack and has more than 12 years of experience
                    with back-end and front-end development.</p>
                <p>He excels at providing superior user interface and user experience.</p>

                <h2>Personal homepage</h2>
                <p><a href="https://www.orazem.si" target="_blank">www.orazem.si</a></p>
            </div>
        </div>
    </section>
@endsection
