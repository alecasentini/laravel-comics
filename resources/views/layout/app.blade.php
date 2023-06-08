<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DC Comics</title>
    @vite('resources/js/app.js')
    @vite('resources/scss/app.scss')
</head>

<body>
    @include ( 'partials.header' )

    <main>
        @include ( 'partials.jumbotron' )
        <div class="top">
            <div id="current-series">
                <span>current series</span>
                @yield('content')
            </div>
            <div id="more">load more</div>
        </div>
        <div class="bottom">
            <div>
                <ul>
                    <li>
                        <img src="{{ Vite::asset(resources/img/buy-comics-digital-comics.png" alt="digital-comics">
                        <a href="/digital-comics">digital comics</a>
                    </li>
                    <li>
                        <img src="{{ Vite::asset(resources/img/buy-comics-merchandise.png" alt="dc-merchandise">
                        <a href="/dc-merchandise">dc merchandise</a>
                    </li>
                    <li>
                        <img src="{{ Vite::asset(resources/img/buy-comics-subscriptions.png" alt="subscription">
                        <a href="/subscription">subscription</a>
                    </li>
                    <li>
                        <img src="{{ Vite::asset(resources/img/buy-comics-shop-locator.png" alt="comic-shop-locator">
                        <a href="comic-shop-locator">comic shop locator</a>
                    </li>
                    <li>
                        <img src="{{ Vite::asset(resources/img/buy-dc-power-visa.svg" alt="dc-power-visa">
                        <a href="/dc-power-visa">dc power visa</a>
                    </li>
                </ul>
            </div>
        </div>
    </main>




    @include ( 'partials.footer' )

</body>

</html>