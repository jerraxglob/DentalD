<nav class="navbar navbar-expand-lg navbar-light bg-light  ">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ URL::route('home') }}">
            <img class="logo-img img-fluid " src="{{ asset('assets/img/Group 100.png') }}" alt="" srcset="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <form class="form-inline my-2 my-lg-0 px-3 search-form">
            <div class="input-icons position-relative align-items-center d-flex">
                <svg class="fas fa-search position-absolute translate-bottom  px-text-start text-secondary"
                    style="left: 8%" id="Box_1" data-name="Box 1" xmlns="http://www.w3.org/2000/svg" width="15.012"
                    height="15.012" viewBox="0 0 15.012 15.012">
                    <g id="Group_1" data-name="Group 1">
                        <path id="Union"
                            d="M6.736,0a6.736,6.736,0,1,0,4.338,11.89l2.953,2.953a.577.577,0,0,0,.817-.817L11.89,11.074A6.736,6.736,0,0,0,6.736,0ZM1.155,6.736a5.582,5.582,0,1,1,5.582,5.582A5.582,5.582,0,0,1,1.155,6.736Z"
                            fill="#8e999a" />
                    </g>
                </svg>
                <input class="form-control mx-2 px-5 align-self-center" id="searchInput" type="text"
                    id="PatientsearchInput" placeholder="Search..">
            </div>
        </form>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  mb-2 mb-lg-0 d-flex flex-wrap align-items-center justify-content-between  w-full">
                <li class="nav-item mr-2">
                    <a class="nav-link d-flex align-items-center" href="{{ URL::route('dashboard') }}">
                        <svg id="Tube" xmlns="http://www.w3.org/2000/svg" width="19.5" height="19.5"
                            viewBox="0 0 19.5 19.5">
                            <g id="Group_20" data-name="Group 20">
                                <path id="Union"
                                    d="M2.75,0A2.75,2.75,0,0,0,0,2.75v3A2.75,2.75,0,0,0,2.75,8.5h3A2.75,2.75,0,0,0,8.5,5.75v-3A2.75,2.75,0,0,0,5.75,0ZM1.5,2.75A1.25,1.25,0,0,1,2.75,1.5h3A1.25,1.25,0,0,1,7,2.75v3A1.25,1.25,0,0,1,5.75,7h-3A1.25,1.25,0,0,1,1.5,5.75Z"
                                    fill="#102940" />
                                <path id="Union-2" data-name="Union"
                                    d="M2.75,11A2.75,2.75,0,0,0,0,13.75v3A2.75,2.75,0,0,0,2.75,19.5h3A2.75,2.75,0,0,0,8.5,16.75v-3A2.75,2.75,0,0,0,5.75,11ZM1.5,13.75A1.25,1.25,0,0,1,2.75,12.5h3A1.25,1.25,0,0,1,7,13.75v3A1.25,1.25,0,0,1,5.75,18h-3A1.25,1.25,0,0,1,1.5,16.75Z"
                                    fill="#102940" />
                                <path id="Union-3" data-name="Union"
                                    d="M11,13.75A2.75,2.75,0,0,1,13.75,11h3a2.75,2.75,0,0,1,2.75,2.75v3a2.75,2.75,0,0,1-2.75,2.75h-3A2.75,2.75,0,0,1,11,16.75Zm2.75-1.25a1.25,1.25,0,0,0-1.25,1.25v3A1.25,1.25,0,0,0,13.75,18h3A1.25,1.25,0,0,0,18,16.75v-3a1.25,1.25,0,0,0-1.25-1.25Z"
                                    fill="#102940" />
                                <path id="Union-4" data-name="Union"
                                    d="M13.75,0A2.75,2.75,0,0,0,11,2.75v3A2.75,2.75,0,0,0,13.75,8.5h3A2.75,2.75,0,0,0,19.5,5.75v-3A2.75,2.75,0,0,0,16.75,0ZM12.5,2.75A1.25,1.25,0,0,1,13.75,1.5h3A1.25,1.25,0,0,1,18,2.75v3A1.25,1.25,0,0,1,16.75,7h-3A1.25,1.25,0,0,1,12.5,5.75Z"
                                    fill="#102940" />
                            </g>
                        </svg>
                        <span class="d-inline-block px-1"> Dashboard </span>
                    </a>
                </li>
                <li class="nav-item mr-2">
                    <a class="nav-link d-flex align-items-center" href="{{ URL::route('statistics') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="23.196" height="20.817" viewBox="0 0 23.196 20.817">
                            <defs>
                                <clipPath id="clip-path">
                                    <rect id="Rectangle_25" data-name="Rectangle 25" width="23.196" height="20.817"
                                        transform="translate(0 0)" fill="#16283e" stroke="#16283e"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" />
                                </clipPath>
                            </defs>
                            <g id="Group_216" data-name="Group 216" transform="translate(4.606 129.344)">
                                <g id="Group_216-2" data-name="Group 216" transform="translate(-4.606 -129.344)"
                                    clip-path="url(#clip-path)">
                                    <path id="Path_20" data-name="Path 20"
                                        d="M4.621,16.45H.443A.442.442,0,0,1,0,16.007V9.291a.442.442,0,0,1,.443-.443H4.621a.442.442,0,0,1,.443.443v6.716a.442.442,0,0,1-.443.443M.885,15.564H4.178V9.734H.885ZM11.5,16.45H7.325a.442.442,0,0,1-.443-.443V5.358a.442.442,0,0,1,.443-.443H11.5a.442.442,0,0,1,.443.443V16.007a.442.442,0,0,1-.443.443m-3.736-.885h3.293V5.8H7.768v9.763m10.618.885H14.207a.442.442,0,0,1-.443-.443V.443A.442.442,0,0,1,14.207,0h4.179a.442.442,0,0,1,.443.443V16.007a.442.442,0,0,1-.443.443m-3.736-.885h3.293V.885H14.65Z"
                                        transform="translate(2.184 2.184)" fill="#16283e" stroke="#16283e"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" />
                                </g>
                            </g>
                        </svg>

                        <span class="d-inline-block px-2">Statistics </span>
                    </a>
                </li>
                <li class="nav-item mr-2">
                    <a class="nav-link d-flex align-items-center" href="{{ URL::route('Patients') }}">
                        <svg id="Megaphone" xmlns="http://www.w3.org/2000/svg" width="19.42" height="19.5"
                            viewBox="0 0 19.42 19.5">
                            <path id="Union"
                                d="M3.75,0A3.75,3.75,0,0,0,0,3.75v12A3.75,3.75,0,0,0,3.75,19.5h2a.75.75,0,0,0,0-1.5h-2A2.25,2.25,0,0,1,1.5,15.75v-12A2.25,2.25,0,0,1,3.75,1.5h10A2.25,2.25,0,0,1,16,3.75V5.985a.75.75,0,0,0,1.5,0V3.75A3.75,3.75,0,0,0,13.75,0Z"
                                fill="#102940" />
                            <path id="Union-2" data-name="Union"
                                d="M13.75,7A2.75,2.75,0,1,0,16.5,9.75,2.75,2.75,0,0,0,13.75,7ZM12.5,9.75A1.25,1.25,0,1,1,13.75,11,1.25,1.25,0,0,1,12.5,9.75Z"
                                fill="#102940" />
                            <path id="Union-3" data-name="Union"
                                d="M8.114,17.608a5.751,5.751,0,0,1,11.273,0A1.612,1.612,0,0,1,17.75,19.5h-8A1.612,1.612,0,0,1,8.114,17.608ZM13.75,14.5a4.252,4.252,0,0,0-4.166,3.4.064.064,0,0,0,0,.013v0a.068.068,0,0,0,.015.022A.212.212,0,0,0,9.75,18h8a.212.212,0,0,0,.152-.058.068.068,0,0,0,.015-.022v0h0a.064.064,0,0,0,0-.013A4.252,4.252,0,0,0,13.75,14.5Z"
                                fill="#102940" />
                            <path id="Union-4" data-name="Union"
                                d="M4.75,9a.75.75,0,0,0,0,1.5h5a.75.75,0,0,0,0-1.5Z" fill="#102940" />
                            <path id="Union-5" data-name="Union"
                                d="M4,6.75A.75.75,0,0,1,4.75,6h6a.75.75,0,0,1,0,1.5h-6A.75.75,0,0,1,4,6.75Z"
                                fill="#102940" />
                            <path id="Union-6" data-name="Union"
                                d="M4.75,12a.75.75,0,0,0,0,1.5h4a.75.75,0,0,0,0-1.5Z" fill="#102940" />
                        </svg>
                        <span class="d-inline-block px-1">Patients</span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="16" height="16" viewBox="0 0 16 16">
                            <defs>
                                <clipPath id="clip-path">
                                    <rect id="Rectangle_227" data-name="Rectangle 227" width="16" height="16"
                                        fill="none" stroke="#000" stroke-width="1.5" />
                                </clipPath>
                            </defs>
                            <g id="Megaphone" transform="translate(-5.751 -2)">
                                <g id="Group_1381" data-name="Group 1381" transform="translate(5.751 2)">
                                    <g id="Group_1380" data-name="Group 1380" clip-path="url(#clip-path)">
                                        <rect id="Rectangle_226" data-name="Rectangle 226" width="14"
                                            height="14" transform="translate(1 1)" fill="none" stroke="#000"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                        <path id="Path_69" data-name="Path 69" d="M14.571,2v8L12.286,8.857,10,10V2"
                                            transform="translate(-4.286 -0.857)" fill="none" stroke="#000"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                    </g>
                                </g>
                            </g>
                        </svg>

                        Inventory <svg id="Group_921" data-name="Group 921" xmlns="http://www.w3.org/2000/svg"
                            width="16.667" height="16.667" viewBox="0 0 16.667 16.667">
                            <rect id="Rectangle_850" data-name="Rectangle 850" width="16.667" height="16.667"
                                fill="none" />
                            <path id="Vector_22_Stroke_" data-name="Vector 22 (Stroke)"
                                d="M.174.193a.555.555,0,0,1,.842,0L4.167,3.682,7.317.193a.555.555,0,0,1,.842,0,.71.71,0,0,1,0,.932L5.008,4.614a1.111,1.111,0,0,1-1.684,0L.174,1.125A.71.71,0,0,1,.174.193Z"
                                transform="translate(4.167 5.833)" fill="#2a283b" />
                        </svg>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ URL::route('inventory') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="18" height="18" viewBox="0 0 18 18">
                                <defs>
                                    <clipPath id="clip-path">
                                        <rect id="Rectangle_222" data-name="Rectangle 222" width="18"
                                            height="18" transform="translate(-0.229 -0.229)" fill="none"
                                            stroke="#000" stroke-width="1.2" />
                                    </clipPath>
                                </defs>
                                <g id="Megaphone" transform="translate(-0.75 -1)">
                                    <g id="Group_1359" data-name="Group 1359" transform="translate(-14.277 4.973)">
                                        <g id="Group_1358" data-name="Group 1358"
                                            transform="translate(15.257 -3.743)">
                                            <g id="Group_1357" data-name="Group 1357" clip-path="url(#clip-path)">
                                                <rect id="Rectangle_219" data-name="Rectangle 219" width="7"
                                                    height="7" transform="translate(1.771 8.771)" fill="none"
                                                    stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="1.2" />
                                                <rect id="Rectangle_220" data-name="Rectangle 220" width="7"
                                                    height="7" transform="translate(8.771 8.771)" fill="none"
                                                    stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="1.2" />
                                                <rect id="Rectangle_221" data-name="Rectangle 221" width="12"
                                                    height="7" transform="translate(2.771 1.771)" fill="none"
                                                    stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="1.2" />
                                            </g>
                                        </g>
                                    </g>
                                    <g id="Rectangle_223" data-name="Rectangle 223" transform="translate(5.751 6)"
                                        fill="#000" stroke="#000" stroke-width="1">
                                        <rect width="8" height="1" stroke="none" />
                                        <rect x="0.5" y="0.5" width="7" fill="none" />
                                    </g>
                                    <g id="Rectangle_224" data-name="Rectangle 224" transform="translate(4.751 13)"
                                        fill="#000" stroke="#000" stroke-width="1">
                                        <rect width="3" height="1" stroke="none" />
                                        <rect x="0.5" y="0.5" width="2" fill="none" />
                                    </g>
                                    <g id="Rectangle_225" data-name="Rectangle 225" transform="translate(11.751 13)"
                                        fill="#000" stroke="#000" stroke-width="1">
                                        <rect width="3" height="1" stroke="none" />
                                        <rect x="0.5" y="0.5" width="2" fill="none" />
                                    </g>
                                </g>
                            </svg>

                            Gestion de stock
                        </a>
                        <a class="dropdown-item" href="{{ URL::route('order') }}"> <i
                                class="fas fa-clipboard-list"></i>
                            Order
                        </a>
                        <a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="22" height="15"
                                viewBox="0 0 22 15">
                                <defs>
                                    <clipPath id="clip-path">
                                        <rect id="Rectangle_228" data-name="Rectangle 228" width="22"
                                            height="15" transform="translate(-1 -0.734)" fill="none"
                                            stroke="#102940" stroke-width="1" />
                                    </clipPath>
                                </defs>
                                <g id="Group_1395" data-name="Group 1395" transform="translate(1 0.733)">
                                    <g id="Group_1394" data-name="Group 1394" clip-path="url(#clip-path)">
                                        <circle id="Ellipse_14" data-name="Ellipse 14" cx="1.5" cy="1.5"
                                            r="1.5" transform="translate(4 9.266)" fill="none" stroke="#102940"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="1" />
                                        <circle id="Ellipse_15" data-name="Ellipse 15" cx="1.5" cy="1.5"
                                            r="1.5" transform="translate(13 9.266)" fill="none" stroke="#102940"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="1" />
                                        <line id="Line_23" data-name="Line 23" x2="6"
                                            transform="translate(7 11.266)" fill="none" stroke="#102940"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="1" />
                                        <path id="Path_70" data-name="Path 70"
                                            d="M31.8,11.95h2.487v-5.8L31.8,2H26v9.95"
                                            transform="translate(-15.221 -1.171)" fill="none" stroke="#102940"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="1" />
                                        <path id="Path_71" data-name="Path 71" d="M5.1,11.95H2V2h9.95"
                                            transform="translate(-1.171 -1.171)" fill="none" stroke="#102940"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="1" />
                                        <line id="Line_24" data-name="Line 24" x1="8"
                                            transform="translate(11 6.267)" fill="none" stroke="#102940"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="1" />
                                        <line id="Line_25" data-name="Line 25" x2="9"
                                            transform="translate(1 3.266)" fill="none" stroke="#102940"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="1" />
                                        <line id="Line_26" data-name="Line 26" x2="10"
                                            transform="translate(1 6.267)" fill="none" stroke="#102940"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="1" />
                                    </g>
                                </g>
                            </svg>

                            Commandes
                        </a>

                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{ URL::route('calander') }}" id="navbarDropdown"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <svg id="Map" xmlns="http://www.w3.org/2000/svg" width="19.5" height="17.5"
                            viewBox="0 0 19.5 17.5">
                            <g id="Group_14" data-name="Group 14">
                                <path id="Union" d="M13.75,9a.75.75,0,0,0,0,1.5h2a.75.75,0,0,0,0-1.5Z"
                                    fill="#102940" />
                                <path id="Union-2" data-name="Union"
                                    d="M8,9.75A.75.75,0,0,1,8.75,9h2a.75.75,0,0,1,0,1.5h-2A.75.75,0,0,1,8,9.75Z"
                                    fill="#102940" />
                                <path id="Union-3" data-name="Union"
                                    d="M3.75,12a.75.75,0,0,0,0,1.5h2a.75.75,0,0,0,0-1.5Z" fill="#102940" />
                                <path id="Union-4" data-name="Union"
                                    d="M13,12.75a.75.75,0,0,1,.75-.75h2a.75.75,0,0,1,0,1.5h-2A.75.75,0,0,1,13,12.75Z"
                                    fill="#102940" />
                                <path id="Union-5" data-name="Union"
                                    d="M8.75,12a.75.75,0,0,0,0,1.5h2a.75.75,0,0,0,0-1.5Z" fill="#102940" />
                                <g id="Group_1" data-name="Group 1">
                                    <g id="Union-6" data-name="Union" fill="none">
                                        <path
                                            d="M3,9.75A.75.75,0,0,1,3.75,9h2a.75.75,0,0,1,0,1.5h-2A.75.75,0,0,1,3,9.75Z"
                                            stroke="none" />
                                        <path
                                            d="M 3.75 9 L 5.75 9 C 6.164210319519043 9 6.5 9.335789680480957 6.5 9.75 C 6.5 10.16421031951904 6.164210319519043 10.5 5.75 10.5 L 3.75 10.5 C 3.335790157318115 10.5 3 10.16421031951904 3 9.75 C 3 9.335789680480957 3.335790157318115 9 3.75 9 Z"
                                            stroke="none" fill="#102940" />
                                    </g>
                                    <g id="Union-7" data-name="Union" fill="none">
                                        <path
                                            d="M4.75,0A.75.75,0,0,1,5.5.75V1H14V.75a.75.75,0,0,1,1.5,0V1h1.25A2.75,2.75,0,0,1,19.5,3.75v11a2.75,2.75,0,0,1-2.75,2.75h-14A2.75,2.75,0,0,1,0,14.75v-11A2.75,2.75,0,0,1,2.75,1H4V.75A.75.75,0,0,1,4.75,0ZM14,2.5v.25a.75.75,0,0,0,1.5,0V2.5h1.25A1.25,1.25,0,0,1,18,3.75v2a.25.25,0,0,1-.25.25h-16a.25.25,0,0,1-.25-.25v-2A1.25,1.25,0,0,1,2.75,2.5H4v.25a.75.75,0,0,0,1.5,0V2.5ZM1.5,7.482a1.765,1.765,0,0,0,.25.018h16A1.765,1.765,0,0,0,18,7.482V14.75A1.25,1.25,0,0,1,16.75,16h-14A1.25,1.25,0,0,1,1.5,14.75Z"
                                            stroke="none" />
                                        <path
                                            d="M 4.75 0 C 5.164210319519043 0 5.5 0.3357906341552734 5.5 0.75 L 5.5 1 L 14 1 L 14 0.75 C 14 0.3357906341552734 14.33579063415527 0 14.75 0 C 15.16420936584473 0 15.5 0.3357906341552734 15.5 0.75 L 15.5 1 L 16.75 1 C 18.26877975463867 1 19.5 2.231220245361328 19.5 3.75 L 19.5 14.75 C 19.5 16.26877975463867 18.26877975463867 17.5 16.75 17.5 L 2.75 17.5 C 1.231220245361328 17.5 0 16.26877975463867 0 14.75 L 0 3.75 C 0 2.231220245361328 1.231220245361328 1 2.75 1 L 4 1 L 4 0.75 C 4 0.3357906341552734 4.335789680480957 0 4.75 0 Z M 4.75 3.5 C 4.335789680480957 3.5 4 3.164210319519043 4 2.75 L 4 2.5 L 2.75 2.5 C 2.059640884399414 2.5 1.5 3.059639930725098 1.5 3.75 L 1.5 5.75 C 1.5 5.888070106506348 1.611930847167969 6 1.75 6 L 17.75 6 C 17.88806915283203 6 18 5.888070106506348 18 5.75 L 18 3.75 C 18 3.059639930725098 17.44034957885742 2.5 16.75 2.5 L 15.5 2.5 L 15.5 2.75 C 15.5 3.164210319519043 15.16420936584473 3.5 14.75 3.5 C 14.33579063415527 3.5 14 3.164210319519043 14 2.75 L 14 2.5 L 5.5 2.5 L 5.5 2.75 C 5.5 3.164210319519043 5.164210319519043 3.5 4.75 3.5 Z M 17.75 7.5 L 1.75 7.5 C 1.665119171142578 7.5 1.581649780273438 7.493960380554199 1.5 7.482279777526855 L 1.5 14.75 C 1.5 15.4403600692749 2.059640884399414 16 2.75 16 L 16.75 16 C 17.44034957885742 16 18 15.4403600692749 18 14.75 L 18 7.482279777526855 C 17.91835021972656 7.493960380554199 17.83488082885742 7.5 17.75 7.5 Z"
                                            stroke="none" fill="#102940" />
                                    </g>
                                </g>
                            </g>
                        </svg>
                        Calendar <svg id="Group_921" data-name="Group 921" xmlns="http://www.w3.org/2000/svg"
                            width="16.667" height="16.667" viewBox="0 0 16.667 16.667">
                            <rect id="Rectangle_850" data-name="Rectangle 850" width="16.667" height="16.667"
                                fill="none" />
                            <path id="Vector_22_Stroke_" data-name="Vector 22 (Stroke)"
                                d="M.174.193a.555.555,0,0,1,.842,0L4.167,3.682,7.317.193a.555.555,0,0,1,.842,0,.71.71,0,0,1,0,.932L5.008,4.614a1.111,1.111,0,0,1-1.684,0L.174,1.125A.71.71,0,0,1,.174.193Z"
                                transform="translate(4.167 5.833)" fill="#2a283b" />
                        </svg>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ URL::route('calander') }}">
                            <svg id="Map" xmlns="http://www.w3.org/2000/svg" width="19.5" height="17.5"
                                viewBox="0 0 19.5 17.5">
                                <g id="Group_14" data-name="Group 14">
                                    <path id="Union" d="M13.75,9a.75.75,0,0,0,0,1.5h2a.75.75,0,0,0,0-1.5Z"
                                        fill="#102940" />
                                    <path id="Union-2" data-name="Union"
                                        d="M8,9.75A.75.75,0,0,1,8.75,9h2a.75.75,0,0,1,0,1.5h-2A.75.75,0,0,1,8,9.75Z"
                                        fill="#102940" />
                                    <path id="Union-3" data-name="Union"
                                        d="M3.75,12a.75.75,0,0,0,0,1.5h2a.75.75,0,0,0,0-1.5Z" fill="#102940" />
                                    <path id="Union-4" data-name="Union"
                                        d="M13,12.75a.75.75,0,0,1,.75-.75h2a.75.75,0,0,1,0,1.5h-2A.75.75,0,0,1,13,12.75Z"
                                        fill="#102940" />
                                    <path id="Union-5" data-name="Union"
                                        d="M8.75,12a.75.75,0,0,0,0,1.5h2a.75.75,0,0,0,0-1.5Z" fill="#102940" />
                                    <g id="Group_1" data-name="Group 1">
                                        <g id="Union-6" data-name="Union" fill="none">
                                            <path
                                                d="M3,9.75A.75.75,0,0,1,3.75,9h2a.75.75,0,0,1,0,1.5h-2A.75.75,0,0,1,3,9.75Z"
                                                stroke="none" />
                                            <path
                                                d="M 3.75 9 L 5.75 9 C 6.164210319519043 9 6.5 9.335789680480957 6.5 9.75 C 6.5 10.16421031951904 6.164210319519043 10.5 5.75 10.5 L 3.75 10.5 C 3.335790157318115 10.5 3 10.16421031951904 3 9.75 C 3 9.335789680480957 3.335790157318115 9 3.75 9 Z"
                                                stroke="none" fill="#102940" />
                                        </g>
                                        <g id="Union-7" data-name="Union" fill="none">
                                            <path
                                                d="M4.75,0A.75.75,0,0,1,5.5.75V1H14V.75a.75.75,0,0,1,1.5,0V1h1.25A2.75,2.75,0,0,1,19.5,3.75v11a2.75,2.75,0,0,1-2.75,2.75h-14A2.75,2.75,0,0,1,0,14.75v-11A2.75,2.75,0,0,1,2.75,1H4V.75A.75.75,0,0,1,4.75,0ZM14,2.5v.25a.75.75,0,0,0,1.5,0V2.5h1.25A1.25,1.25,0,0,1,18,3.75v2a.25.25,0,0,1-.25.25h-16a.25.25,0,0,1-.25-.25v-2A1.25,1.25,0,0,1,2.75,2.5H4v.25a.75.75,0,0,0,1.5,0V2.5ZM1.5,7.482a1.765,1.765,0,0,0,.25.018h16A1.765,1.765,0,0,0,18,7.482V14.75A1.25,1.25,0,0,1,16.75,16h-14A1.25,1.25,0,0,1,1.5,14.75Z"
                                                stroke="none" />
                                            <path
                                                d="M 4.75 0 C 5.164210319519043 0 5.5 0.3357906341552734 5.5 0.75 L 5.5 1 L 14 1 L 14 0.75 C 14 0.3357906341552734 14.33579063415527 0 14.75 0 C 15.16420936584473 0 15.5 0.3357906341552734 15.5 0.75 L 15.5 1 L 16.75 1 C 18.26877975463867 1 19.5 2.231220245361328 19.5 3.75 L 19.5 14.75 C 19.5 16.26877975463867 18.26877975463867 17.5 16.75 17.5 L 2.75 17.5 C 1.231220245361328 17.5 0 16.26877975463867 0 14.75 L 0 3.75 C 0 2.231220245361328 1.231220245361328 1 2.75 1 L 4 1 L 4 0.75 C 4 0.3357906341552734 4.335789680480957 0 4.75 0 Z M 4.75 3.5 C 4.335789680480957 3.5 4 3.164210319519043 4 2.75 L 4 2.5 L 2.75 2.5 C 2.059640884399414 2.5 1.5 3.059639930725098 1.5 3.75 L 1.5 5.75 C 1.5 5.888070106506348 1.611930847167969 6 1.75 6 L 17.75 6 C 17.88806915283203 6 18 5.888070106506348 18 5.75 L 18 3.75 C 18 3.059639930725098 17.44034957885742 2.5 16.75 2.5 L 15.5 2.5 L 15.5 2.75 C 15.5 3.164210319519043 15.16420936584473 3.5 14.75 3.5 C 14.33579063415527 3.5 14 3.164210319519043 14 2.75 L 14 2.5 L 5.5 2.5 L 5.5 2.75 C 5.5 3.164210319519043 5.164210319519043 3.5 4.75 3.5 Z M 17.75 7.5 L 1.75 7.5 C 1.665119171142578 7.5 1.581649780273438 7.493960380554199 1.5 7.482279777526855 L 1.5 14.75 C 1.5 15.4403600692749 2.059640884399414 16 2.75 16 L 16.75 16 C 17.44034957885742 16 18 15.4403600692749 18 14.75 L 18 7.482279777526855 C 17.91835021972656 7.493960380554199 17.83488082885742 7.5 17.75 7.5 Z"
                                                stroke="none" fill="#102940" />
                                        </g>
                                    </g>
                                </g>
                            </svg>
                            Calendar
                        </a>
                        <a class="dropdown-item" href="#"><svg id="Map"
                                xmlns="http://www.w3.org/2000/svg" width="19.5" height="17.5"
                                viewBox="0 0 19.5 17.5">
                                <g id="Group_14" data-name="Group 14">
                                    <g id="Group_1" data-name="Group 1">
                                        <g id="Union" fill="none">
                                            <path
                                                d="M4.75,0A.75.75,0,0,1,5.5.75V1H14V.75a.75.75,0,0,1,1.5,0V1h1.25A2.75,2.75,0,0,1,19.5,3.75v11a2.75,2.75,0,0,1-2.75,2.75h-14A2.75,2.75,0,0,1,0,14.75v-11A2.75,2.75,0,0,1,2.75,1H4V.75A.75.75,0,0,1,4.75,0ZM14,2.5v.25a.75.75,0,0,0,1.5,0V2.5h1.25A1.25,1.25,0,0,1,18,3.75v2a.25.25,0,0,1-.25.25h-16a.25.25,0,0,1-.25-.25v-2A1.25,1.25,0,0,1,2.75,2.5H4v.25a.75.75,0,0,0,1.5,0V2.5ZM1.5,7.482a1.765,1.765,0,0,0,.25.018h16A1.765,1.765,0,0,0,18,7.482V14.75A1.25,1.25,0,0,1,16.75,16h-14A1.25,1.25,0,0,1,1.5,14.75Z"
                                                stroke="none" />
                                            <path
                                                d="M 4.75 0 C 5.164210319519043 0 5.5 0.3357906341552734 5.5 0.75 L 5.5 1 L 14 1 L 14 0.75 C 14 0.3357906341552734 14.33579063415527 0 14.75 0 C 15.16420936584473 0 15.5 0.3357906341552734 15.5 0.75 L 15.5 1 L 16.75 1 C 18.26877975463867 1 19.5 2.231220245361328 19.5 3.75 L 19.5 14.75 C 19.5 16.26877975463867 18.26877975463867 17.5 16.75 17.5 L 2.75 17.5 C 1.231220245361328 17.5 0 16.26877975463867 0 14.75 L 0 3.75 C 0 2.231220245361328 1.231220245361328 1 2.75 1 L 4 1 L 4 0.75 C 4 0.3357906341552734 4.335789680480957 0 4.75 0 Z M 4.75 3.5 C 4.335789680480957 3.5 4 3.164210319519043 4 2.75 L 4 2.5 L 2.75 2.5 C 2.059640884399414 2.5 1.5 3.059639930725098 1.5 3.75 L 1.5 5.75 C 1.5 5.888070106506348 1.611930847167969 6 1.75 6 L 17.75 6 C 17.88806915283203 6 18 5.888070106506348 18 5.75 L 18 3.75 C 18 3.059639930725098 17.44034957885742 2.5 16.75 2.5 L 15.5 2.5 L 15.5 2.75 C 15.5 3.164210319519043 15.16420936584473 3.5 14.75 3.5 C 14.33579063415527 3.5 14 3.164210319519043 14 2.75 L 14 2.5 L 5.5 2.5 L 5.5 2.75 C 5.5 3.164210319519043 5.164210319519043 3.5 4.75 3.5 Z M 17.75 7.5 L 1.75 7.5 C 1.665119171142578 7.5 1.581649780273438 7.493960380554199 1.5 7.482279777526855 L 1.5 14.75 C 1.5 15.4403600692749 2.059640884399414 16 2.75 16 L 16.75 16 C 17.44034957885742 16 18 15.4403600692749 18 14.75 L 18 7.482279777526855 C 17.91835021972656 7.493960380554199 17.83488082885742 7.5 17.75 7.5 Z"
                                                stroke="none" fill="#102940" />
                                        </g>
                                    </g>
                                </g>
                                <path id="Path_72" data-name="Path 72"
                                    d="M2.629,0l-.847,1.58L0,1.776,1.241,3.07.878,4.826l1.614-.78,1.557.888L3.806,3.158,5.131,1.951,3.367,1.633Z"
                                    transform="translate(7.184 8.75)" fill="#102940" />
                            </svg>
                            Eevent
                        </a>

                    </ul>
                </li>
                <li class="nav-item mr-2">
                    <a class="nav-link d-flex align-items-center" href="{{ URL::route('invoicing') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14.43" height="17.7"
                            viewBox="0 0 14.43 17.7">
                            <g id="Group_52" data-name="Group 52" transform="translate(724.982 -186.244)">
                                <g id="Icon" transform="translate(-724.382 186.844)">
                                    <path id="Path"
                                        d="M8.269,0H1.654A1.652,1.652,0,0,0,0,1.65v13.2A1.652,1.652,0,0,0,1.654,16.5h9.923a1.652,1.652,0,0,0,1.654-1.65V4.95Z"
                                        fill="none" stroke="#102940" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.2" />
                                    <path id="Path-2" data-name="Path" d="M0,0V5.194H5.843"
                                        transform="translate(7.387)" fill="none" stroke="#102940"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                        stroke-width="1.2" />
                                    <path id="Path-3" data-name="Path" d="M7.139.5H0"
                                        transform="translate(3.046 8.575)" fill="none" stroke="#102940"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                        stroke-width="1.2" />
                                    <path id="Path-4" data-name="Path" d="M2.253.5H0"
                                        transform="translate(2.875 5.716)" fill="none" stroke="#102940"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                        stroke-width="1.2" />
                                    <g id="Rectangle_33" data-name="Rectangle 33" transform="translate(2.382 10.344)"
                                        fill="none" stroke="#102940" stroke-width="0.7">
                                        <rect width="8.349" height="4" rx="1" stroke="none" />
                                        <rect x="0.35" y="0.35" width="7.649" height="3.3" rx="0.65"
                                            fill="none" />
                                    </g>
                                </g>
                            </g>
                        </svg>

                        <span class="d-inline-block px-1">Invoice</span>
                    </a>
                </li>
                <li class="nav-item mr-2">
                    <a class="nav-link" href="{{ URL::route('tasks') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="18.26" height="16.448" viewBox="0 0 18.26 16.448">
                            <defs>
                                <clipPath id="clip-path">
                                    <rect id="Rectangle_29" data-name="Rectangle 29" width="18.26" height="16.448"
                                        transform="translate(0 0)" fill="none" />
                                </clipPath>
                            </defs>
                            <g id="Group_218" data-name="Group 218" transform="translate(0 0)">
                                <g id="Group_217" data-name="Group 217" clip-path="url(#clip-path)">
                                    <rect id="Rectangle_26" data-name="Rectangle 26" width="4.345" height="4.345"
                                        rx="0.987" transform="translate(0.375 0.375)" fill="none"
                                        stroke="#102940" stroke-miterlimit="10" stroke-width="0.75" />
                                    <path id="Path_21" data-name="Path 21"
                                        d="M7.746,1.548a1,1,0,0,0-.028,2h9.528a1,1,0,0,0,.028-2H7.746Z"
                                        fill="#102940" />
                                    <path id="Rectangle_27" data-name="Rectangle 27"
                                        d="M.987,0H3.358a.987.987,0,0,1,.987.987V3.358a.987.987,0,0,1-.987.987H.988A.988.988,0,0,1,0,3.357V.987A.987.987,0,0,1,.987,0Z"
                                        transform="translate(0.375 6.052)" fill="none" stroke="#102940"
                                        stroke-miterlimit="10" stroke-width="0.75" />
                                    <path id="Path_22" data-name="Path 22"
                                        d="M7.746,7.224a1,1,0,0,0-.028,2h9.528a1,1,0,1,0,.028-2H7.746Z"
                                        fill="#102940" />
                                    <path id="Rectangle_28" data-name="Rectangle 28"
                                        d="M.987,0H3.358a.987.987,0,0,1,.987.987V3.358a.987.987,0,0,1-.987.987H.988A.988.988,0,0,1,0,3.357V.987A.987.987,0,0,1,.987,0Z"
                                        transform="translate(0.375 11.728)" fill="none" stroke="#102940"
                                        stroke-miterlimit="10" stroke-width="0.75" />
                                    <path id="Path_23" data-name="Path 23"
                                        d="M7.746,12.9a1,1,0,1,0-.028,2h9.528a1,1,0,1,0,.028-2H7.746Z"
                                        fill="#102940" />
                                </g>
                            </g>
                        </svg>
                        <span class="d-inline-block">Tasks</span>
                    </a>
                </li>
                <li class="nav-item ml-lg-auto">
                    <a class="nav-link" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-eye" viewBox="0 0 16 16">
                            <path
                                d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                            <path
                                d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0" />
                        </svg>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-bell" viewBox="0 0 16 16">
                            <path
                                d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2M8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6" />
                        </svg>
                    </a>
                </li>
                <li class="nav-item dropdown px-5">
                    <a class="nav-link dropdown-toggle d-flex align-items-center" href="#"
                        id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img (31).webp" class="rounded-circle"
                            height="22" alt="Avatar" loading="lazy" />
                        <svg id="Group_921" data-name="Group 921" xmlns="http://www.w3.org/2000/svg" width="16.667"
                            height="16.667" viewBox="0 0 16.667 16.667">
                            <rect id="Rectangle_850" data-name="Rectangle 850" width="16.667" height="16.667"
                                fill="none"></rect>
                            <path id="Vector_22_Stroke_" data-name="Vector 22 (Stroke)"
                                d="M.174.193a.555.555,0,0,1,.842,0L4.167,3.682,7.317.193a.555.555,0,0,1,.842,0,.71.71,0,0,1,0,.932L5.008,4.614a1.111,1.111,0,0,1-1.684,0L.174,1.125A.71.71,0,0,1,.174.193Z"
                                transform="translate(4.167 5.833)" fill="#2a283b"></path>
                        </svg>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink px-3">
                        <li>
                            <a class="dropdown-item" href="#">My profile</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ URL::route('setting') }}">Settings</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>

        </div>
    </div>
</nav>
