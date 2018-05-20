@extends('app')

@section('body-class', 'home')

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
                <h1>Love beautiful code? We do too.</h1>
                <p>The Numencode Content Management System</p>
            </div>

            <div class="callout rule">
                <span class="text">Start a demo!</span>
            </div>

            <div class="callouts">
                <a href="/docs/horizon" class="callout minimal third">
                    <div class="callout-head">
                        <div class="callout-title">Laravel Horizon</div>
                        <div class="callout-icon">{!! svg('logo-horizon')!!}</div>
                    </div>
                    <p>Laravel Horizon provides a beautiful dashboard and code-driven configuration for your Redis queues.</p>
                </a>
                <a href="/docs/dusk" class="callout minimal third">
                    <div class="callout-head">
                        <div class="callout-title">Laravel Dusk</div>
                        <div class="callout-icon">{!! svg('logo-dusk')!!}</div>
                    </div>
                    <p>Laravel Dusk provides an expressive, easy-to-use browser automation and testing API. You'll love it.</p>
                </a>
                <a href="/docs/broadcasting" class="callout minimal third">
                    <div class="callout-head">
                        <div class="callout-title">Laravel Echo</div>
                        <div class="callout-icon">{!! svg('logo-echo')!!}</div>
                    </div>
                    <p>Event broadcasting, evolved. Bring the power of WebSockets to your application without the complexity.</p>
                </a>
            </div>

        </div>
    </section>
@endsection
