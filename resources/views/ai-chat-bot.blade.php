<!DOCTYPE html>

<html lang="en">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <meta name="description" content="TechWave">
    <meta name="author" content="Frenify">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>AI Chat Bot - TechWave</title>


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

    <div class="techwave_fn_font">
        <a class="font__closer_link fn__icon_button" href="#"><img src="svg/close.svg" alt=""
                class="fn__svg"></a>
        <div class="font__closer"></div>
        <div class="font__dialog">
            <h3 class="title">Font Options</h3>
            <label for="font_size">Font Size</label>
            <select id="font_size">
                <option value="10">10 px</option>
                <option value="12">12 px</option>
                <option value="14">14 px</option>
                <option value="16" selected>16 px</option>
                <option value="18">18 px</option>
                <option value="20">20 px</option>
                <option value="22">22 px</option>
                <option value="24">24 px</option>
                <option value="26">26 px</option>
                <option value="28">28 px</option>
            </select>
            <a href="#" class="apply techwave_fn_button"><span>Apply</span></a>
        </div>
    </div>


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

                    <!-- AI Chat Bot Page -->
                    <div class="techwave_fn_aichatbot_page fn__chatbot">

                        <div class="chat__page">

                            <div class="font__trigger">
                                <span></span>
                            </div>

                            <div class="fn__title_holder">
                                <div class="container">
                                    <!-- Active chat title -->
                                    <h1 class="title">Yazışma Botu</h1>
                                    <!-- !Active chat title -->
                                </div>
                            </div>

                            <div class="container">
                                <div class="chat__list">

                                    <div id="chat0" class="chat__item"></div>

                                    <div class="chat__item active" id="chat1">
                                        @foreach ($messages as $message)
                                            <div class="chat__box your__chat">
                                                <div class="author"><span>{{Auth::user()->name}}</span></div>
                                                <div class="chat">
                                                    <p>{!! $message->promt !!}</p>
                                                </div>
                                            </div>
                                            <div class="chat__box bot__chat">
                                                <div class="author"><span>İLİM AI</span></div>
                                                <div class="chat">
                                                    <p>{!! $message->answer !!}</p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>

                                </div>
                            </div>

                            <form>
                                <div class="chat__comment">
                                    <div class="container">
                                        <div class="fn__chat_comment">
                                            <div class="new__chat">
                                                <p>Ask it questions, engage in discussions, or simply enjoy a friendly
                                                    chat.</p>
                                            </div>
                                            <textarea rows="1" class="fn__hidden_textarea" tabindex="-1"></textarea>
                                            <textarea rows="1" placeholder="Send a message..." id="message" name="message" required></textarea>
                                            <button type="submit"><img src="svg/enter.svg" alt=""
                                                    class="fn__svg"></button>
                                        </div>
                                    </div>
                                </div>
                            </form>


                        </div>



                        <div class="chat__sidebar">
                            <div class="sidebar_header">
                                <a href="#chat0" class="fn__new_chat_link">
                                    <span class="icon"></span>
                                    <span class="text">New Chat</span>
                                </a>
                            </div>
                            <div class="sidebar_content">
                                <div class="chat__group new">
                                    <h2 class="group__title">Today</h2>
                                    <ul class="group__list">
                                        <li class="group__item">
                                            <div class="fn__chat_link active" href="#chat1">
                                                <span class="text">Chat Bot Definition</span>
                                                <input type="text" value="Chat Bot Definition">
                                                <span class="options">
                                                    <button class="trigger"><span></span></button>
                                                    <span class="options__popup">
                                                        <span class="options__list">
                                                            <button class="edit">Edit</button>
                                                            <button class="delete">Delete</button>
                                                        </span>
                                                    </span>
                                                </span>
                                                <span class="save_options">
                                                    <button class="save">
                                                        <img src="svg/check.svg" alt="" class="fn__svg">
                                                    </button>
                                                    <button class="cancel">
                                                        <img src="svg/close.svg" alt="" class="fn__svg">
                                                    </button>
                                                </span>
                                            </div>
                                        </li>
                                        <li class="group__item">
                                            <div class="fn__chat_link" href="#chat2">
                                                <span class="text">Essay: Marketing</span>
                                                <input type="text" value="Essay: Marketing">
                                                <span class="options">
                                                    <button class="trigger"><span></span></button>
                                                    <span class="options__popup">
                                                        <span class="options__list">
                                                            <button class="edit">Edit</button>
                                                            <button class="delete">Delete</button>
                                                        </span>
                                                    </span>
                                                </span>
                                                <span class="save_options">
                                                    <button class="save">
                                                        <img src="svg/check.svg" alt="" class="fn__svg">
                                                    </button>
                                                    <button class="cancel">
                                                        <img src="svg/close.svg" alt="" class="fn__svg">
                                                    </button>
                                                </span>
                                            </div>
                                        </li>
                                        <li class="group__item">
                                            <div class="fn__chat_link" href="#chat3">
                                                <span class="text">Future of Social Media</span>
                                                <input type="text" value="Future of Social Media">
                                                <span class="options">
                                                    <button class="trigger"><span></span></button>
                                                    <span class="options__popup">
                                                        <span class="options__list">
                                                            <button class="edit">Edit</button>
                                                            <button class="delete">Delete</button>
                                                        </span>
                                                    </span>
                                                </span>
                                                <span class="save_options">
                                                    <button class="save">
                                                        <img src="svg/check.svg" alt="" class="fn__svg">
                                                    </button>
                                                    <button class="cancel">
                                                        <img src="svg/close.svg" alt="" class="fn__svg">
                                                    </button>
                                                </span>
                                            </div>
                                        </li>
                                        <li class="group__item">
                                            <div class="fn__chat_link" href="#chat4">
                                                <span class="text">Business Ideas</span>
                                                <input type="text" value="Business Ideas">
                                                <span class="options">
                                                    <button class="trigger"><span></span></button>
                                                    <span class="options__popup">
                                                        <span class="options__list">
                                                            <button class="edit">Edit</button>
                                                            <button class="delete">Delete</button>
                                                        </span>
                                                    </span>
                                                </span>
                                                <span class="save_options">
                                                    <button class="save">
                                                        <img src="svg/check.svg" alt="" class="fn__svg">
                                                    </button>
                                                    <button class="cancel">
                                                        <img src="svg/close.svg" alt="" class="fn__svg">
                                                    </button>
                                                </span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- !AI Chat Bot Page -->

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



    <!-- Scripts -->

    <script>
        //Broadcast messages
        $("form").submit(function(event) {
            event.preventDefault();

            //Stop empty messages
            if ($("form #message").val().trim() === '') {
                return;
            }

            //Disable form
            $("form #message").prop('disabled', true);
            $("form button").prop('disabled', true);
            var userName = "{{ Auth::user()->name }}";

            $.ajax({
                url: "/chat",
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                },
                data: {
                    "content": $("form #message").val()
                }
            }).done(function(res) {

                $("#chat1").append('<div class="chat__box your__chat">' +
                    '<div class="author"><span>' + userName + '</span></div>' +
                    '<div class="chat">' +
                    '<p>' + $("form #message").val() + '</p>' +
                    '</div>' +
                    '</div>');

                $("#chat1").append('<div class="chat__box bot__chat">' +
                    '<div class="author"><span>Bot</span></div>' +
                    '<div class="chat">' +
                    '<p>' + res + '</p>' +
                    '</div>' +
                    '</div>');


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
</html>
