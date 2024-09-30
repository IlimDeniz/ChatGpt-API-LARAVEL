<header class="techwave_fn_header">

    <!-- Header left: token information -->
    <div class="header__left">

    </div>
    <!-- /Header left: token information -->


    <!-- Header right: navigation bar -->
    <div class="header__right">
        <div class="fn__nav_bar">

            <!-- Search (bar item) -->

            <!-- !Site Skin (bar item) -->

            <!-- User (bar item) -->
            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <span class="icon"><img src="svg/logout.svg" alt=""
                                            class="fn__svg"></span>
                                    <span class="text">Çıkış</span>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
            <!-- !User (bar item) -->


        </div>
    </div>
    <!-- !Header right: navigation bar -->

</header>
