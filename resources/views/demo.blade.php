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
                <h1>Numencode CMS Demo</h1>

                <h2>Admin</h2>
                <p><strong>URL</strong>: <a href="https://www.numencode.eu/admin" target="_blank">https://www.numencode.eu/admin</a></p>
                <p><strong>User</strong>: admin</p>
                <p><strong>Pass</strong>: admin</p>

                <h2>Website</h2>
                <p><strong>URL</strong>: <a href="https://www.numencode.eu" target="_blank">https://www.numencode.eu</a></p>
            </div>
        </div>
    </section>
@endsection
