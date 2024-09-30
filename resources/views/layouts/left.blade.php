<div class="techwave_fn_leftpanel">

    <div class="mobile_extra_closer"></div>

    <!-- logo (left panel) -->
    <div class="leftpanel_logo">
        <a href="index.html" class="fn_logo">
            <span class="full_logo">
                <img src="img/logo-desktop-full.png" alt="" class="desktop_logo">
                <img src="img/logo-retina-full.png" alt="" class="retina_logo">
            </span>
            <span class="short_logo">
                <img src="img/logo-desktop-mini.png" alt="" class="desktop_logo">
                <img src="img/logo-retina-mini.png" alt="" class="retina_logo">
            </span>
        </a>
        <a href="#" class="fn__closer fn__icon_button desktop_closer">
            <img src="svg/arrow.svg" alt="" class="fn__svg">
        </a>
        <a href="#" class="fn__closer fn__icon_button mobile_closer">
            <img src="svg/arrow.svg" alt="" class="fn__svg">
        </a>
    </div>
    <!-- !logo (left panel) -->

    <!-- content (left panel) -->
    <div class="leftpanel_content">

        <!-- #1 navigation group -->

        <!-- !#1 navigation group -->

        <!-- #2 navigation group -->
        <div class="nav_group">
            <h2 class="group__title">User Tools</h2>
            <ul class="group__list">
                <li>
                    <a href="{{ route('ai.chat.bot') }}"
                        class="fn__tooltip {{ request()->routeIs('ai.chat.bot') ? 'active' : '' }} menu__item"
                        data-position="right" title="AI Chat Bot">
                        <span class="icon"><img src="svg/chat.svg" alt="" class="fn__svg"></span>
                        <span class="text">AI Chat Bot</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('ai.image.bot') }}"
                        class="fn__tooltip {{ request()->routeIs('ai.image.bot') ? 'active' : '' }} menu__item"
                        data-position="right" title="Image Generation">
                        <span class="icon"><img src="svg/image.svg" alt="" class="fn__svg"></span>
                        <span class="text">Image Generation</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('ai.voice.bot') }}"
                        class="fn__tooltip {{ request()->routeIs('ai.voice.bot') ? 'active' : '' }} menu__item"
                        data-position="right" title="Voice Generation">
                        <span class="icon"><img src="svg/bell.svg" alt="" class="fn__svg"></span>
                        <span class="text">Voice Generation</span>
                    </a>
                </li>


            </ul>
        </div>
        <!-- !#2 navigation group -->

        <!-- #3 navigation group -->

        <!-- !#3 navigation group -->


    </div>
    <!-- !content (left panel) -->

</div>
