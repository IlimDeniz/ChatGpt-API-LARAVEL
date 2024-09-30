<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en"> <!--<![endif]-->


<!-- Mirrored from frenify.com/work/envato/frenify/html/techwave/1/image-generation.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Sep 2024 10:56:12 GMT -->

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <meta name="description" content="TechWave">
    <meta name="author" content="Frenify">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>Image Generation - TechWave</title>


    <script>
        if (!localStorage.frenify_skin) {
            localStorage.frenify_skin = 'dark';
        }
        if (!localStorage.frenify_panel) {
            localStorage.frenify_panel = '';
        }
        document.documentElement.setAttribute("data-techwave-skin", localStorage.frenify_skin);
        if (localStorage.frenify_panel !== '') {
            document.documentElement.classList.add(localStorage.frenify_panel);
        }
    </script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;500;600;700;800;900&amp;family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <!-- !Google Fonts -->

    <!-- Styles -->
    <link type="text/css" rel="stylesheet" href="css/plugins8a54.css?ver=1.0.0" />
    <link type="text/css" rel="stylesheet" href="css/style8a54.css?ver=1.0.0" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <!--[if lt IE 9]> <script type="text/javascript" src="js/modernizr.custom.js"></script> <![endif]-->
    <!-- !Styles -->

</head>

<body>


    <!-- Moving Submenu -->
    <div class="techwave_fn_fixedsub">
        <ul></ul>
    </div>
    <!-- !Moving Submenu -->

    <!-- Preloader -->
    <div class="techwave_fn_preloader">
        <svg>
            <circle class="first_circle" cx="50%" cy="50%" r="110"></circle>
            <circle class="second_circle" cx="50%" cy="50%" r="110"></circle>
        </svg>
    </div>
    <!-- !Preloader -->


    <!-- MAIN WRAPPER -->
    <div class="techwave_fn_wrapper fn__has_sidebar">
        <div class="techwave_fn_wrap">


            <!-- Searchbar -->
            <div class="techwave_fn_searchbar">
                <div class="search__bar">
                    <input class="search__input" type="text" placeholder="Search here...">
                    <img src="svg/search.svg" alt="" class="fn__svg search__icon">
                    <a class="search__closer" href="#"><img src="svg/close.svg" alt=""
                            class="fn__svg"></a>
                </div>
                <div class="search__results">
                    <!-- Results will come here (via ajax after the integration you made after purchase as it doesn't work in HTML) -->
                    <div class="results__title">Results</div>
                    <div class="results__list">
                        <ul>
                            <li><a href="#">Artificial Intelligence</a></li>
                            <li><a href="#">Learn about the impact of AI on the financial industry</a></li>
                            <li><a href="#">Delve into the realm of AI-driven manufacturing</a></li>
                            <li><a href="#">Understand the ethical implications surrounding AI</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- !Searchbar -->

            <!-- HEADER -->
            @include('layouts.header')
            <!-- !HEADER -->


            <!-- LEFT PANEL -->
            @include('layouts.left')
            <!-- !LEFT PANEL -->


            <!-- CONTENT -->
            <div class="techwave_fn_content">

                <!-- PAGE (all pages go inside this div) -->
                <div class="techwave_fn_page">

                    <!-- Image Generation Page -->
                    <div class="techwave_fn_image_generation_page">

                        <div class="generation__page">

                            <!-- Generation Header -->
                            <div class="generation_header">
                                <div class="header_top">
                                    <h1 class="title">Fotoğraf Üret</h1>

                                </div>
                                <form>
                                    <div class="header_bottom">
                                        <div class="include_area">
                                            <textarea rows="1" id="message" name="message"></textarea>
                                            <textarea class="fn__hidden_textarea" rows="1" tabindex="-1"></textarea>
                                        </div>
                                    </div>
                                    <button type="submit"><img src="svg/enter.svg" alt=""
                                            class="fn__svg"></button>
                                </form>
                            </div>
                            <!-- !Generation Header -->

                            <div id="generation_history_first" class="generation_history">



                            </div>

                            <div id="generation_history" class="generation_history">

                                @foreach ($images as $image)
                                    <div class="fn__generation_item">
                                        <div class="item_header">
                                            <div class="title_holder">
                                                <h2 class="prompt_title">{{$image->promt}}</h2>
                                            </div>

                                        </div>
                                        <div class="item_list">
                                            <ul class="fn__generation_list">
                                                <li class="fn__gl_item">
                                                    <div class="fn__gl__item">
                                                        <div class="abs_item">
                                                            <img src="{{$image->image_name}}" alt="">
                                                            <div class="all_options">
                                                                <div class="fn__icon_options medium_size">
                                                                    <a href="#" class="fn__icon_button">
                                                                        <img src="svg/download.svg" alt=""
                                                                            class="fn__svg">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                @endforeach


                            </div>

                        </div>




                    </div>
                    <!-- !Image Generation Page -->

                </div>
                <!-- !PAGE (all pages go inside this div) -->


                <!-- FOOTER (inside the content) -->
                @include('layouts.footer')
                <!-- !FOOTER (inside the content) -->

            </div>
            <!-- !CONTENT -->


        </div>
    </div>
    <!-- !MAIN WRAPPER -->
    <script>
        //Broadcast messages
        $("form").submit(function(event) {
            event.preventDefault();

            if ($("form #message").val().trim() === '') {
                return;
            }

            //Disable form
            $("form #message").prop('disabled', true);
            $("form button").prop('disabled', true);
            var userName = "{{ Auth::user()->name }}";

            $.ajax({
                url: "/image",
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                },
                data: {
                    "content": $("form #message").val()
                }
            }).done(function(res) {
                $("#generation_history_first").append(
                    '<div class="fn__generation_item">' +
                    '<div class="item_header">' +
                    '<div class="title_holder">' +
                    '<h2 class="prompt_title">' + $("form #message").val() + '</h2>' +
                    '</div>' +
                    '</div>' +
                    '<div class="item_list">' +
                    '<ul class="fn__generation_list">' +
                    '<li class="fn__gl_item">' +
                    '<div class="fn__gl__item">' +
                    '<div class="abs_item">' +
                    '<img src="' + res + '" alt="">' +
                    '<div class="all_options">' +
                    '<div class="fn__icon_options medium_size">' +
                    '<a href="#" class="fn__icon_button">' +
                    '<img src="svg/download.svg" alt="" class="fn__svg">' +
                    '</a>' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '</li>' +
                    '</ul>' +
                    '</div>' +
                    '</div>'
                );

                //Cleanup
                $("form #message").val('');
                $(document).scrollTop($(document).height());

                //Enable form
                $("form #message").prop('disabled', false);
                $("form button").prop('disabled', false);
            });
        });
    </script>
    <!-- !Scripts -->

</body>

<!-- Mirrored from frenify.com/work/envato/frenify/html/techwave/1/image-generation.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Sep 2024 10:56:13 GMT -->

</html>
