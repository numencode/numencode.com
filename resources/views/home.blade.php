@extends('app')

@section('body-class', 'home')

@section('content')
    <div class="master-head">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <h1>Hi, how can we help you?</h1>
                    <form>
                        <input type="text" class="search-field" placeholder="Search documentation ... ">
                        <button type="submit">
                            <i class="icon icon-search"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

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

            <div class="content text-center">
                <h1>Numencode Content Management System</h1>
                <p>The source code is available on GitHub, you can grab it and twist it to your heart’s content!</p>
            </div>

            <div class="callout rule"></div>

            <div class="callouts">
                <a href="/docs/horizon" class="callout minimal third">
                    <div class="media-body">
                        <span class="icon">
                            <img src="assets/img/icon-documentation.png" alt="">
                        </span>
                        <h3 class="p-t-b-20">Help &amp; Documentation</h3>
                        <p>Unlike other Frameworks which try to cover everything, It has been built specifically for wordpress</p>
                    </div>
                </a>
                <a href="/docs/dusk" class="callout minimal third">
                    <div class="media-body">
                        <span class="icon">
                            <img src="assets/img/icon-settings.png" alt="">
                        </span>
                        <h3 class="p-t-b-20">Simple Installation</h3>
                        <p>Unlike other Frameworks which try to cover everything, It has been built specifically for wordpress</p>
                    </div>
                </a>
                <a href="/docs/broadcasting" class="callout minimal third">
                    <div class="media-body">
                        <span class="icon">
                            <img src="assets/img/icon-community.png" alt="">
                        </span>
                        <h3 class="p-t-b-20">Community Support</h3>
                        <p>Unlike other Frameworks which try to cover everything, It has been built specifically for wordpress</p>
                    </div>
                </a>
            </div>

        </div>
    </section>

@endsection
