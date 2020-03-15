<!DOCTYPE html>
<html lang="th">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>@yield('title')</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

      <!-- All in One SEO Pack -->
      <link rel="dns-prefetch" href="//fonts.googleapis.com">
      <link rel="dns-prefetch" href="//s.w.org">
      <link rel="stylesheet" id="external-fonts-css" href="//fonts.googleapis.com/css?family=Roboto%3A400%2C700%2C900&amp;ver=5.3.2" type="text/css" media="all">
      <link rel="stylesheet" id="merged-style-css" href="https://www.oneesports.gg/th/wp-content/themes/oneesports/assets/style-f5a08dfb0537b89167348a4d7fac8f5a-1579232189.min.css" type="text/css" media="all">
  </head>

  <body class="archive category category-aov category-13">

        <header id="site-navbar" class="fixed-top">
            <div id="search-bar" class="search-bar container">
                <form class="search-form-inline" method="GET" action="/page1" role="search">
                    <input type="text" name="s" placeholder="ค้นหา" required="required">
                    <input type="submit" class="ml-3" value="ไป">
                </form>
            </div>
            <nav class="navbar-main container">
            <a href="/"><h1>KNOW ESPORTS</h1></a>
                <div class="spacer"></div>

                <ul class="main"><li class="">
                            <a href="/page1">RoV</a>
                        </li><li class="">
                            <a href="/page2">LoL</a>
                        </li><li class="">
                            <a href="/page3">Dota2</a>
                        </li></ul>

                <ul class="extra">
                    <li class="action-search"><a href="javascript:;"><i class="fas fa-search"></i></a></li>
                </ul>

            </nav>
            <div class="darker"></div>
        </header>

        <script>
            document.addEventListener('DOMContentLoaded', (event) => {
                var html = document.documentElement;
                var actionMore = document.querySelector('#site-navbar .action-more');
                var actionSearch = document.querySelector('#site-navbar .action-search');

                var searchBar = document.getElementById('search-bar');
                var searchInput = searchBar.querySelector('input[type=text]');

                actionSearch.addEventListener('click', function (event) {
                    event.preventDefault();
                    searchBar.classList.toggle('show');
                    if (searchBar.classList.contains('show')) {
                        searchInput.focus();
                    }
                });

                searchInput.addEventListener('keydown', function (event) {
                    if (event.keyCode === 27) { // ESC
                        searchInput.blur();
                        searchBar.classList.remove('show');
                    }
                });

                actionMore.addEventListener('click', function (event) {
                    event.preventDefault();
                    html.classList.toggle('site-navbar-show-more');
                });

                document.querySelector('#site-navbar .navbar-more .action-close').addEventListener('click', function () {
                    html.classList.remove('site-navbar-show-more');
                });

                document.querySelector('#site-navbar .darker').addEventListener('click', function () {
                    html.classList.remove('site-navbar-show-more');
                });

                var main = document.querySelector('#site-navbar ul.main');
                var more = document.querySelector('#site-navbar ul.more');
                var spacer = document.querySelector('#site-navbar .spacer');

                var resizeHandler = function () {
                    var size = window.innerWidth;
                    var freeWidth = spacer.clientWidth;
                    var targetItem = more.firstElementChild;

                    var nextItemWidth = targetItem && targetItem.dataset.itemWidth ? parseInt(targetItem.dataset.itemWidth) : 80;

                    if (freeWidth > nextItemWidth) {
                        if (targetItem) {
                            main.append(targetItem);
                            resizeHandler();
                        }
                    } else if (freeWidth < 1 && main.childElementCount >= 1) {
                        targetItem = main.lastElementChild;
                        if (!targetItem.dataset.itemWidth) {
                            targetItem.dataset.itemWidth = targetItem.clientWidth;
                        }
                        more.prepend(targetItem);
                        resizeHandler();
                    }

                    actionMore.classList.toggle('d-none', !more.firstElementChild);

                };

                resizeHandler();

                window.addEventListener('resize', throttle(resizeHandler, 100));

                document.addEventListener('scroll', function () {
                    document.getElementById('site-navbar').classList.toggle('shadow', window.pageYOffset >= 4);
                });

            });
        </script>

        <main id="site-main">
            @yield('main')
        </main>

       <footer id="site-footer">
            <div class="container">
                <div class="copyright">
                    <a href="">ข้อตกลงในการใช้งาน</a>
                    <a href="">นโยบายความเป็นส่วนตัว</a>
                    © 2020 ONE Esports. All Rights Reserved.
                </div>
            </div>
        </footer>
  </body>
</html>
