@extends('Clinics.partials.main')
@section('content')
    <div class=" bg-color">
        <div class="container-fluid responsive">
            <div class="row">
                <div class="col-12 col-md-8 col-lg-8 mr-0">
                    <div class="container">
                        <div class="row  d-flex justify-content-center align-items-center mt-5">
                            <div class="col-12 col-md-4 mb-small rounded-3 p_f my-auto mx-auto ">
                                <div class="card   p_f rounded-3 d-flex align-items-center justify-content-center">
                                    <div class="card-body text-center">
                                        <div class="card-title  text-center">
                                            <img src="{{ asset('assets/img/CHD-Logo_200.png') }}"
                                                class="rounded p-3 logo-img img-fluid  p_f" alt="...">
                                        </div>
                                        <h6 class="text-white  ">Clinique Dentaire CHD Meyrin</h6>
                                        <span class="c_p ">12</span><span class="text-white">connected people
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-7 rounded-3 card-sm col-md-7 bg-white mx-auto h-60">
                                <div class="row py-4 px-4 d-flex justify-center align-items-center">
                                    <!-- Sub-columns inside the Second Card -->
                                    <div class="col-12 col-md-4">
                                        <strong class="text-dark p-3">Statistics</strong>
                                    </div>
                                    <div class="col-12 col-md-4 d-flex align-items-center gap-2">
                                        <h2 class="font-14 fw-bold mb-0">
                                            Periode
                                        </h2>
                                        <div class="dropdown">
                                            <a class="btn btn-white btn-sm border border-dark dropdown-toggle"
                                                href="#" role="button" id="dropdownMenuLink"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <svg id="Map" xmlns="http://www.w3.org/2000/svg" width="19.5"
                                                    height="17.5" viewBox="0 0 19.5 17.5">
                                                    <g id="Group_14" data-name="Group 14">
                                                        <path id="Union"
                                                            d="M13.75,9a.75.75,0,0,0,0,1.5h2a.75.75,0,0,0,0-1.5Z"
                                                            fill="#102940" />
                                                        <path id="Union-2" data-name="Union"
                                                            d="M8,9.75A.75.75,0,0,1,8.75,9h2a.75.75,0,0,1,0,1.5h-2A.75.75,0,0,1,8,9.75Z"
                                                            fill="#102940" />
                                                        <path id="Union-3" data-name="Union"
                                                            d="M3.75,12a.75.75,0,0,0,0,1.5h2a.75.75,0,0,0,0-1.5Z"
                                                            fill="#102940" />
                                                        <path id="Union-4" data-name="Union"
                                                            d="M13,12.75a.75.75,0,0,1,.75-.75h2a.75.75,0,0,1,0,1.5h-2A.75.75,0,0,1,13,12.75Z"
                                                            fill="#102940" />
                                                        <path id="Union-5" data-name="Union"
                                                            d="M8.75,12a.75.75,0,0,0,0,1.5h2a.75.75,0,0,0,0-1.5Z"
                                                            fill="#102940" />
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
                                                </svg> Month to date
                                            </a>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            </ul>
                                        </div>
                                        <a href="" class="text-decoration-none see-all text-nowrap float-end p-3">See
                                            All</a>
                                    </div>
                                </div>
                                <div class="row d-flex justify-center align-items-center pr-4 pb-3 ">
                                    <div class=" col-sm-12 col-md-4 col-mg-4">
                                        <div class="card-body d-flex justify-center align-items-center">
                                            <div class="col-sm-12 col-md-3 col-lg-3">
                                                <div class="avatar-container">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-person-plus text-muted"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664z" />
                                                        <path fill-rule="evenodd"
                                                            d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-3 col-lg-3  text-center">
                                                <strong class="card-title text-dark px-3 fw-bold">17</strong>
                                                <p class="card-text  text-dark px-3 text-nowrap">Employees</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-sm-12 col-md-4 col-mg-4">
                                        <div class="card-body d-flex justify-center align-items-center">
                                            <div class="col-sm-12 col-md-3 col-lg-3">
                                                <div class="avatar-container">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-person text-muted"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664z" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-3 col-lg-3 text-center">
                                                <strong class="card-title text-dark px-3 fw-bold">831</strong>
                                                <p class="card-text  px-3 text-dark text-nowrap">Total patients</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-sm-12 col-md-4 col-mg-4">
                                        <div class="card-body d-flex justify-center align-items-center">
                                            <div class="col-sm-12 col-md-3 col-lg-3">
                                                <div class="avatar-container">
                                                    <svg id="Map" xmlns="http://www.w3.org/2000/svg" width="19.5"
                                                        height="17.5" viewBox="0 0 19.5 17.5">
                                                        <g id="Group_14" data-name="Group 14">
                                                            <path id="Union"
                                                                d="M13.75,9a.75.75,0,0,0,0,1.5h2a.75.75,0,0,0,0-1.5Z"
                                                                fill="#102940" />
                                                            <path id="Union-2" data-name="Union"
                                                                d="M8,9.75A.75.75,0,0,1,8.75,9h2a.75.75,0,0,1,0,1.5h-2A.75.75,0,0,1,8,9.75Z"
                                                                fill="#102940" />
                                                            <path id="Union-3" data-name="Union"
                                                                d="M3.75,12a.75.75,0,0,0,0,1.5h2a.75.75,0,0,0,0-1.5Z"
                                                                fill="#102940" />
                                                            <path id="Union-4" data-name="Union"
                                                                d="M13,12.75a.75.75,0,0,1,.75-.75h2a.75.75,0,0,1,0,1.5h-2A.75.75,0,0,1,13,12.75Z"
                                                                fill="#102940" />
                                                            <path id="Union-5" data-name="Union"
                                                                d="M8.75,12a.75.75,0,0,0,0,1.5h2a.75.75,0,0,0,0-1.5Z"
                                                                fill="#102940" />
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

                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-3 col-lg-3 text-center">
                                                <strong class="card-title text-dark px-3 fw-bold">500</strong>
                                                <p class="card-text px-3 text-dark text-nowrap">Appointment</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-sm-12 col-md-4 col-mg-4">
                                        <div class="card-body d-flex justify-center align-items-center">
                                            <div class="col-sm-12 col-md-3 col-lg-3">
                                                <div class="avatar-container">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-clock text-muted"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z" />
                                                        <path
                                                            d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-3 col-lg-3 w-full">
                                                <strong class="card-title px-3 text-dark fw-bold">45 min</strong>
                                                <p class="card-text px-3 text-dark text-nowrap">Average time</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-sm-12 col-md-4 col-mg-4">
                                        <div class="card-body d-flex justify-center align-items-center">
                                            <div class="col-sm-12 col-md-3 col-lg-3">
                                                <div class="avatar-container">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-x-circle text-muted"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                                        <path
                                                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-3 col-lg-3">
                                                <strong class="card-title text-dark px-3 fw-bold">13</strong>
                                                <p class="card-text px-3 text-dark text-nowrap ">Missed appointment</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-sm-12 col-md-4 col-mg-4">
                                        <div class="card-body d-flex justify-center align-items-center">
                                            <div class="col-sm-12 col-md-3 col-lg-3">
                                                <div class="avatar-container">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-bar-chart text-muted"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M4 11H2v3h2zm5-4H7v7h2zm5-5v12h-2V2zm-2-1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM6 7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1zm-5 4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1z" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-3 col-lg-3 text-center">
                                                <strong class="card-title text-dark px-3 fw-bold">20%</strong>
                                                <p class="card-text px-3 text-dark text-nowrap">Occupancy rate</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container  rounded-3 task-sm bg-white mt-4">
                                <div class="row d-flex align-items-center  ">
                                    <div
                                        class="col-sm-12 col-md-12 col-lg-12 task_m align-items-center py-2 d-flex justify-content-between rounded-3 bg-white">
                                        <h5 class="py-2 px-3  task-m">Task management</h5>
                                        <a href="#" class="text-decoration-none see-all py-2">+ New
                                            ticket</a>
                                    </div>
                                    <div
                                        class="col-sm-12 col-md-12 col-lg-12 task_m align-items-center  d-flex justify-content-end bg-white mt-4">
                                        <div class="dropdown">
                                            <button
                                                class="btn btn-sm dropdown-toggle d-flex align-items-center  custom-no-outline"
                                                type="button" id="dropdownMenuButton" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664z" />
                                                </svg> <span> Everybody</span>
                                                <i class='fas fa-angle-down thin-arrow p-3'></i>
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <li><a class="dropdown-item" href="#">Item 1</a></li>
                                                <li><a class="dropdown-item" href="#">Item 2</a></li>
                                            </ul>
                                        </div>
                                        <a href="#" class="btn btn-sm btn-white border border-dark w-200 h-60">
                                            Add filter <i class="fas fa-bars mr-3"></i>
                                        </a>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Tasks <i class='fas fa-angle-down p-3 thin-arrow'></i>
                                                    </th>
                                                    <th>Assigned to
                                                    </th>
                                                    <th>Date
                                                    </th>
                                                    <th>Priority </th>
                                                    <th>Status
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Lorem ipsum dolor sit amet, cons…</td>
                                                    <td>Daniel</td>
                                                    <td>12/07/23</td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <button
                                                                class="emergency-btn btn btn-white border border-dark btn-sm dropdown-toggle"
                                                                type="button" id="emergencyDropdown"
                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                Emergency <i class='fas fa-angle-down thin-arrow'></i>
                                                            </button>
                                                            <ul class="dropdown-menu" aria-labelledby="emergencyDropdown">
                                                                <li><a class="dropdown-item" href="#">Action</a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">Another
                                                                        action</a></li>
                                                                <li><a class="dropdown-item" href="#">Something else
                                                                        here</a></li>
                                                                <li>
                                                                    <hr class="dropdown-divider">
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">Separated
                                                                        link</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <button
                                                                class="processing-btn btn btn-white border border-dark btn-sm dropdown-toggle"
                                                                type="button" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                Processing <i
                                                                    class='fas  text-success fa-angle-down thin-arrow'></i>
                                                            </button>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="#">Action</a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">Another
                                                                        action</a></li>
                                                                <li><a class="dropdown-item" href="#">Something else
                                                                        here</a></li>
                                                                <li>
                                                                    <hr class="dropdown-divider" />
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">Separated
                                                                        link</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Lorem ipsum dolor sit amet, cons…</td>
                                                    <td>Daniel</td>
                                                    <td>12/07/23</td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <button
                                                                class="wd100 medium-btn btn btn-white border border-dark btn-sm dropdown-toggle"
                                                                type="button" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                Medium <i class='fas fa-angle-down thin-arrow'></i>
                                                            </button>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="#">Action</a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">Another
                                                                        action</a></li>
                                                                <li><a class="dropdown-item" href="#">Something else
                                                                        here</a></li>
                                                                <li>
                                                                    <hr class="dropdown-divider" />
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">Separated
                                                                        link</a></li>
                                                            </ul>
                                                        </div>

                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <button
                                                                class="processing-btn btn btn-white border border-dark btn-sm dropdown-toggle"
                                                                type="button" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                Processing <i class='fas fa-angle-down thin-arrow'></i>
                                                            </button>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="#">Action</a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">Another
                                                                        action</a></li>
                                                                <li><a class="dropdown-item" href="#">Something else
                                                                        here</a></li>
                                                                <li>
                                                                    <hr class="dropdown-divider" />
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">Separated
                                                                        link</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Lorem ipsum dolor sit amet, cons…</td>
                                                    <td>Daniel</td>
                                                    <td>12/07/23</td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <button
                                                                class="btn btn-white border border-dark btn-sm dropdown-toggle"
                                                                type="button" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                Emergency <i class='fas fa-angle-down thin-arrow'></i>
                                                            </button>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="#">Action</a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">Another
                                                                        action</a></li>
                                                                <li><a class="dropdown-item" href="#">Something else
                                                                        here</a></li>
                                                                <li>
                                                                    <hr class="dropdown-divider">
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">Separated
                                                                        link</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <button
                                                                class="wd100 todo-btn btn btn-white border border-dark btn-sm dropdown-toggle"
                                                                type="button" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                To do <i class='fas fa-angle-down thin-arrow'></i>
                                                            </button>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="#">Action</a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">Another
                                                                        action</a></li>
                                                                <li><a class="dropdown-item" href="#">Something else
                                                                        here</a></li>
                                                                <li>
                                                                    <hr class="dropdown-divider" />
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">Separated
                                                                        link</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Lorem ipsum dolor sit amet, cons…</td>
                                                    <td>Daniel</td>
                                                    <td>12/07/23</td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <button
                                                                class="btn btn-white border border-dark btn-sm dropdown-toggle"
                                                                type="button" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                Emergency <i class='fas fa-angle-down thin-arrow'></i>
                                                            </button>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="#">Action</a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">Another
                                                                        action</a></li>
                                                                <li><a class="dropdown-item" href="#">Something else
                                                                        here</a></li>
                                                                <li>
                                                                    <hr class="dropdown-divider" />
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">Separated
                                                                        link</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <button
                                                                class="wd100 todo-btn btn btn-white border border-dark btn-sm dropdown-toggle"
                                                                type="button" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                To do <i class='fas fa-angle-down thin-arrow'></i>
                                                            </button>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="#">Action</a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">Another
                                                                        action</a></li>
                                                                <li><a class="dropdown-item" href="#">Something else
                                                                        here</a></li>
                                                                <li>
                                                                    <hr class="dropdown-divider" />
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">Separated
                                                                        link</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Lorem ipsum dolor sit amet, cons…</td>
                                                    <td>Daniel</td>
                                                    <td>12/07/23</td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <button
                                                                class="btn btn-white border border-dark btn-sm dropdown-toggle"
                                                                type="button" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                Emergency <i class='fas fa-angle-down thin-arrow'></i>
                                                            </button>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="#">Action</a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">Another
                                                                        action</a></li>
                                                                <li><a class="dropdown-item" href="#">Something else
                                                                        here</a></li>
                                                                <li>
                                                                    <hr class="dropdown-divider" />
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">Separated
                                                                        link</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <button
                                                                class="wd100 todo-btn btn btn-white border border-dark btn-sm dropdown-toggle"
                                                                type="button" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                To do <i class='fas fa-angle-down thin-arrow'></i>
                                                            </button>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="#">Action</a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">Another
                                                                        action</a></li>
                                                                <li><a class="dropdown-item" href="#">Something else
                                                                        here</a></li>
                                                                <li>
                                                                    <hr class="dropdown-divider" />
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">Separated
                                                                        link</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Lorem ipsum dolor sit amet, cons…</td>
                                                    <td>Daniel</td>
                                                    <td>12/07/23</td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <button
                                                                class="btn btn-white border border-dark btn-sm dropdown-toggle"
                                                                type="button" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                Emergency <i class='fas fa-angle-down thin-arrow'></i>
                                                            </button>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="#">Action</a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">Another
                                                                        action</a></li>
                                                                <li><a class="dropdown-item" href="#">Something else
                                                                        here</a></li>
                                                                <li>
                                                                    <hr class="dropdown-divider" />
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">Separated
                                                                        link</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <button
                                                                class="wd100 todo-btn btn btn-white border border-dark btn-sm dropdown-toggle"
                                                                type="button" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                To do <i class='fas fa-angle-down thin-arrow'></i>
                                                            </button>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="#">Action</a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">Another
                                                                        action</a></li>
                                                                <li><a class="dropdown-item" href="#">Something else
                                                                        here</a></li>
                                                                <li>
                                                                    <hr class="dropdown-divider" />
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">Separated
                                                                        link</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Lorem ipsum dolor sit amet, cons…</td>
                                                    <td>Daniel</td>
                                                    <td>12/07/23</td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <button
                                                                class="btn btn-white border border-dark btn-sm dropdown-toggle"
                                                                type="button" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                Emergency <i class='fas fa-angle-down thin-arrow'></i>
                                                            </button>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="#">Action</a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">Another
                                                                        action</a></li>
                                                                <li><a class="dropdown-item" href="#">Something else
                                                                        here</a></li>
                                                                <li>
                                                                    <hr class="dropdown-divider" />
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">Separated
                                                                        link</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <button
                                                                class="wd100 todo-btn btn btn-white border border-dark btn-sm dropdown-toggle"
                                                                type="button" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                To do <i class='fas fa-angle-down thin-arrow'></i>
                                                            </button>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="#">Action</a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">Another
                                                                        action</a></li>
                                                                <li><a class="dropdown-item" href="#">Something else
                                                                        here</a></li>
                                                                <li>
                                                                    <hr class="dropdown-divider" />
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">Separated
                                                                        link</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="d-flex justify-content-center pb-4"> <a href="#"
                                                class="btn btn-info btn-sm text-white">
                                                View all tasks</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sidebar Column -->
                <div class="col-md-4 col-lg-4  mx-auto stock-sm">
                    <!-- Sidebar Content -->
                    <form class="dark-mode-form container">
                        <!-- Stock Report Header -->
                        <div class="row py-3 align-items-center">
                            <div class="col-md-6">
                                <h5 class="">Stock report</h5>
                                <small class="text-nowrap">Wed 15th July 2023</small>
                            </div>
                            <div class="col-md-6 text-md-right mt-md-0 mt-2">
                                <a href="#" class="btn btn-info  text-nowrap text-white btn-sm font-12">Inventory
                                    Management</a>
                            </div>
                        </div>
                        <div class="stock">
                            <div class="row col-with-line">
                                <div class="col-md-4 mb-3">
                                    <label for="name" class="form-label">Specialist</label>
                                    <input type="text" class="form-control form-control-sm dark-input" name="name"
                                        id="name" placeholder="Dr. Soufi Daniel" aria-describedby="emailHelp">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="material" class="form-label">Material</label>
                                    <input type="text" class="form-control form-control-sm dark-input" name="material"
                                        id="material" placeholder="" aria-describedby="emailHelp">
                                </div>
                                <div class="col-md-2 mb-3">
                                    <label for="qty" class="form-label qty ">Qty</label>
                                    <input type="text" name="qty"
                                        class="form-control qty form-control-sm dark-input" value=""
                                        id="qty">
                                </div>
                            </div>
                            <div class="row col-with-line">
                                <div class="col-md-4 mb-3">
                                    <label for="name" class="form-label">Specialist</label>
                                    <input type="text" class="form-control form-control-sm dark-input" name="name"
                                        id="name" placeholder="Dr. Soufi Daniel" aria-describedby="emailHelp">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="material" class="form-label">Material</label>
                                    <input type="text" class="form-control form-control-sm dark-input" name="material"
                                        id="material" placeholder="" aria-describedby="emailHelp">
                                </div>
                                <div class="col-md-2 mb-3">
                                    <label for="qty" class="form-label qty ">Qty</label>
                                    <input type="text" name="qty"
                                        class="form-control qty form-control-sm dark-input" value=""
                                        id="qty">
                                </div>
                            </div>
                            <div class="row col-with-line">
                                <div class="col-md-4 mb-3">
                                    <label for="name" class="form-label">Specialist</label>
                                    <input type="text" class="form-control form-control-sm dark-input" name="name"
                                        id="name" placeholder="Dr. Soufi Daniel" aria-describedby="emailHelp">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="material" class="form-label">Material</label>
                                    <input type="text" class="form-control form-control-sm dark-input" name="material"
                                        id="material" placeholder="" aria-describedby="emailHelp">
                                </div>
                                <div class="col-md-2 mb-3">
                                    <label for="qty" class="form-label qty ">Qty</label>
                                    <input type="text" name="qty"
                                        class="form-control qty form-control-sm dark-input " value=""
                                        id="qty">
                                </div>
                            </div>
                            <div class="row col-with-line">
                                <div class="col-md-4 mb-3">
                                    <label for="name" class="form-label">Specialist</label>
                                    <input type="text" class="form-control form-control-sm dark-input" name="name"
                                        id="name" placeholder="Dr. Soufi Daniel" aria-describedby="emailHelp">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="material" class="form-label">Material</label>
                                    <input type="text" class="form-control form-control-sm dark-input" name="material"
                                        id="material" placeholder="" aria-describedby="emailHelp">
                                </div>
                                <!-- Qty -->
                                <div class="col-md-2 mb-3">
                                    <label for="qty" class="form-label qty ">Qty</label>
                                    <input type="text" name="qty"
                                        class="form-control qty form-control-sm dark-input " value=""
                                        id="qty">
                                </div>

                            </div>
                            <div class="row col-with-line">
                                <div class="col-md-4 mb-3">
                                    <label for="name" class="form-label">Specialist</label>
                                    <input type="text" class="form-control form-control-sm dark-input" name="name"
                                        id="name" placeholder="Dr. Soufi Daniel" aria-describedby="emailHelp">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="material" class="form-label">Material</label>
                                    <input type="text" class="form-control form-control-sm dark-input" name="material"
                                        id="material" placeholder="" aria-describedby="emailHelp">
                                </div>
                                <div class="col-md-2 mb-3">
                                    <label for="qty" class="form-label qty ">Qty</label>
                                    <input type="text" name="qty"
                                        class="form-control qty form-control-sm dark-input " value=""
                                        id="qty">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5 d-flex stock-sm justify-content-center align-items-center">
                            <div class="col-md-10 py-3">
                                <h5 class="text-nowrap px-5">Important communication.</h5>
                            </div>
                            <div class="col-md-2 py-3 text-md-right">
                                <a href="#" class="text-decoration-none see-all text-nowrap">Sell all</a>
                            </div>
                        </div>
                        <div class="row d-flex stock-sm justify-content-center align-items-center">
                            <div class="col-md-12 d-flex justify-content-center align-items-center ">
                                <div class=" d-flex justify-content-center align-items-center ">
                                    <table class="table stock-sm table-borderless">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="text-white">Date</th>
                                                <th scope="col" class="text-white">Object</th>
                                                <th scope="col" class="text-white">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr class="col-with-line">
                                                <td class="text-white">12/07/23</td>
                                                <td class="text-white text-nowrap">Change of regulations …</td>
                                                <td>
                                                    <div class="mb-3">
                                                        <span
                                                            class="wd100 form-control float-left form-control-sm dark-input processing-btn text-center">
                                                            Sent </span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="col-with-line">
                                                <td class="text-white">12/07/23</td>
                                                <td class="text-white text-nowrap">Change of regulations …</td>
                                                <td>
                                                    <div class="mb-3">
                                                        <span
                                                            class="wd100 form-control float-left form-control-sm dark-input text-center">
                                                            Draft </span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="col-with-line">
                                                <td class="text-white">12/07/23</td>
                                                <td class="text-white text-nowrap">Change of regulations …</td>
                                                <td>
                                                    <div class="mb-3">
                                                        <span
                                                            class="wd100 form-control float-left form-control-sm dark-input text-center">
                                                            Draft </span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="col-with-line">
                                                <td class="text-white">12/07/23</td>
                                                <td class="text-white text-nowrap">Change of regulations …</td>
                                                <td>
                                                    <div class="mb-3">
                                                        <span
                                                            class="wd100 form-control float-left form-control-sm dark-input text-center">
                                                            Draft </span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="col-with-line">
                                                <td class="text-white">12/07/23</td>
                                                <td class="text-white text-nowrap">Change of regulations …</td>
                                                <td>
                                                    <div class="mb-3">
                                                        <span
                                                            class="wd100 form-control float-left form-control-sm dark-input text-center">
                                                            Draft </span>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="text-center pb-4 mt-3">
                            <div class="d-grid gap-2 col-6 col-md-4 mx-auto">
                                <button type="submit" class="btn btn-nowrap btn-sm btn-info text-white">Add a new
                                    note</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="">
            <div class="row">
                <div class="col-md-12 col-lg-12 bg-color ">
                    <div class="container  mt-5">
                        <div class="row cons-sm mx-auto align-items-center rounded-3 justify-content-center bg-white p-3">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="row">
                                    <div class="col-md-12 col-lg-12  bg-white d-flex justify-content-between mb-5">
                                        <h5 class="py-2">Consultations</h5>
                                        <div class="align-items-center pl-3 d-flex align-items-center">
                                            <div class="dropdown align-items-center">
                                                <span class="px-3 fs-6">period</span>
                                                <div class="btn-group float-end">
                                                    <button class="btn btn-white border-color  btn-sm dropdown-toggle"
                                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <svg id="Map" xmlns="http://www.w3.org/2000/svg"
                                                            width="19.5" height="17.5" viewBox="0 0 19.5 17.5">
                                                            <g id="Group_14" data-name="Group 14">
                                                                <path id="Union"
                                                                    d="M13.75,9a.75.75,0,0,0,0,1.5h2a.75.75,0,0,0,0-1.5Z"
                                                                    fill="#102940"></path>
                                                                <path id="Union-2" data-name="Union"
                                                                    d="M8,9.75A.75.75,0,0,1,8.75,9h2a.75.75,0,0,1,0,1.5h-2A.75.75,0,0,1,8,9.75Z"
                                                                    fill="#102940"></path>
                                                                <path id="Union-3" data-name="Union"
                                                                    d="M3.75,12a.75.75,0,0,0,0,1.5h2a.75.75,0,0,0,0-1.5Z"
                                                                    fill="#102940"></path>
                                                                <path id="Union-4" data-name="Union"
                                                                    d="M13,12.75a.75.75,0,0,1,.75-.75h2a.75.75,0,0,1,0,1.5h-2A.75.75,0,0,1,13,12.75Z"
                                                                    fill="#102940"></path>
                                                                <path id="Union-5" data-name="Union"
                                                                    d="M8.75,12a.75.75,0,0,0,0,1.5h2a.75.75,0,0,0,0-1.5Z"
                                                                    fill="#102940"></path>
                                                                <g id="Group_1" data-name="Group 1">
                                                                    <g id="Union-6" data-name="Union" fill="none">
                                                                        <path
                                                                            d="M3,9.75A.75.75,0,0,1,3.75,9h2a.75.75,0,0,1,0,1.5h-2A.75.75,0,0,1,3,9.75Z"
                                                                            stroke="none"></path>
                                                                        <path
                                                                            d="M 3.75 9 L 5.75 9 C 6.164210319519043 9 6.5 9.335789680480957 6.5 9.75 C 6.5 10.16421031951904 6.164210319519043 10.5 5.75 10.5 L 3.75 10.5 C 3.335790157318115 10.5 3 10.16421031951904 3 9.75 C 3 9.335789680480957 3.335790157318115 9 3.75 9 Z"
                                                                            stroke="none" fill="#102940"></path>
                                                                    </g>
                                                                    <g id="Union-7" data-name="Union" fill="none">
                                                                        <path
                                                                            d="M4.75,0A.75.75,0,0,1,5.5.75V1H14V.75a.75.75,0,0,1,1.5,0V1h1.25A2.75,2.75,0,0,1,19.5,3.75v11a2.75,2.75,0,0,1-2.75,2.75h-14A2.75,2.75,0,0,1,0,14.75v-11A2.75,2.75,0,0,1,2.75,1H4V.75A.75.75,0,0,1,4.75,0ZM14,2.5v.25a.75.75,0,0,0,1.5,0V2.5h1.25A1.25,1.25,0,0,1,18,3.75v2a.25.25,0,0,1-.25.25h-16a.25.25,0,0,1-.25-.25v-2A1.25,1.25,0,0,1,2.75,2.5H4v.25a.75.75,0,0,0,1.5,0V2.5ZM1.5,7.482a1.765,1.765,0,0,0,.25.018h16A1.765,1.765,0,0,0,18,7.482V14.75A1.25,1.25,0,0,1,16.75,16h-14A1.25,1.25,0,0,1,1.5,14.75Z"
                                                                            stroke="none"></path>
                                                                        <path
                                                                            d="M 4.75 0 C 5.164210319519043 0 5.5 0.3357906341552734 5.5 0.75 L 5.5 1 L 14 1 L 14 0.75 C 14 0.3357906341552734 14.33579063415527 0 14.75 0 C 15.16420936584473 0 15.5 0.3357906341552734 15.5 0.75 L 15.5 1 L 16.75 1 C 18.26877975463867 1 19.5 2.231220245361328 19.5 3.75 L 19.5 14.75 C 19.5 16.26877975463867 18.26877975463867 17.5 16.75 17.5 L 2.75 17.5 C 1.231220245361328 17.5 0 16.26877975463867 0 14.75 L 0 3.75 C 0 2.231220245361328 1.231220245361328 1 2.75 1 L 4 1 L 4 0.75 C 4 0.3357906341552734 4.335789680480957 0 4.75 0 Z M 4.75 3.5 C 4.335789680480957 3.5 4 3.164210319519043 4 2.75 L 4 2.5 L 2.75 2.5 C 2.059640884399414 2.5 1.5 3.059639930725098 1.5 3.75 L 1.5 5.75 C 1.5 5.888070106506348 1.611930847167969 6 1.75 6 L 17.75 6 C 17.88806915283203 6 18 5.888070106506348 18 5.75 L 18 3.75 C 18 3.059639930725098 17.44034957885742 2.5 16.75 2.5 L 15.5 2.5 L 15.5 2.75 C 15.5 3.164210319519043 15.16420936584473 3.5 14.75 3.5 C 14.33579063415527 3.5 14 3.164210319519043 14 2.75 L 14 2.5 L 5.5 2.5 L 5.5 2.75 C 5.5 3.164210319519043 5.164210319519043 3.5 4.75 3.5 Z M 17.75 7.5 L 1.75 7.5 C 1.665119171142578 7.5 1.581649780273438 7.493960380554199 1.5 7.482279777526855 L 1.5 14.75 C 1.5 15.4403600692749 2.059640884399414 16 2.75 16 L 16.75 16 C 17.44034957885742 16 18 15.4403600692749 18 14.75 L 18 7.482279777526855 C 17.91835021972656 7.493960380554199 17.83488082885742 7.5 17.75 7.5 Z"
                                                                            stroke="none" fill="#102940"></path>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </svg> Month to date
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                                        <li><a class="dropdown-item" href="#">Another action</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="#">Something else
                                                                here</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <a href="#" class="text-decoration-none see-all px-4 py-2">See
                                                all</a>
                                        </div>
                                    </div>
                                    <div
                                        class="col-md-12 col-lg-12 py-2 lign-items-center bg-white d-flex justify-content-between mb-3">
                                        <div class=" w-50  search-padding">
                                            <div class="input-icons position-relative d-flex align-items-center">
                                                <svg class="fas  fa-search position-absolute translate-bottom  text-start  text-secondary"
                                                    style="left : 2%" id="Box_1" data-name="Box 1"
                                                    xmlns="http://www.w3.org/2000/svg" width="15.012" height="15.012"
                                                    viewBox="0 0 15.012 15.012">
                                                    <g id="Group_1" data-name="Group 1">
                                                        <path id="Union"
                                                            d="M6.736,0a6.736,6.736,0,1,0,4.338,11.89l2.953,2.953a.577.577,0,0,0,.817-.817L11.89,11.074A6.736,6.736,0,0,0,6.736,0ZM1.155,6.736a5.582,5.582,0,1,1,5.582,5.582A5.582,5.582,0,0,1,1.155,6.736Z"
                                                            fill="#8e999a" />
                                                    </g>
                                                </svg>
                                                <input class="form-control form-control-sm w-50 mx-2 px-4"
                                                    id="PatientsearchInput" placeholder="Rechercher un patient">
                                            </div>
                                        </div>
                                        <div class="align-items-center pl-3 d-flex align-items-center">
                                            <div class="ml-auto d-flex gap-3 text-center align-items-center">
                                                <div class="date-range mr-3 text-dark">
                                                    <span>
                                                        Date range
                                                    </span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                                        <path
                                                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708" />
                                                    </svg>
                                                </div>
                                                <button type="button" class="btn btn-white border border-dark w-10 h-60">
                                                    Add filter <i class="fas fa-bars mr-3"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="col-md-12 col-lg-12 gx-5 py-3 rounded-3 bg-white d-flex align-items-center">
                                        <ul class="nav nav-tabs mb-3" id="ex-with-icons" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <a data-bs-toggle="tab" class="nav-link active" id="ex-with-icons-tab-1"
                                                    href="#ex-with-icons-tabs-1" role="tab"
                                                    aria-controls="ex-with-icons-tabs-1" aria-selected="true">
                                                    Consultations
                                                </a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a data-bs-toggle="tab" class="nav-link" id="ex-with-icons-tab-2"
                                                    href="#ex-with-icons-tabs-2" role="tab"
                                                    aria-controls="ex-with-icons-tabs-2" aria-selected="false">
                                                    Draft
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Tabs content -->
                                    <div class="tab-content" id="ex-with-icons-content">
                                        <div class="  tab-pane fade show active" id="ex-with-icons-tabs-1"
                                            role="tabpanel" aria-labelledby="ex-with-icons-tab-1">
                                            <div class="table-responsive table-left-padding">
                                                <table class="table table-borderless ">
                                                    <thead>
                                                        <tr class="">
                                                            <th>
                                                                <span class="d-flex gap-2 align-items-center">
                                                                    <p class="clr-th mb-0 font-14">Date</p>
                                                                    <svg id="Group_921" data-name="Group 921"
                                                                        xmlns="http://www.w3.org/2000/svg" width="16.667"
                                                                        height="16.667" viewBox="0 0 16.667 16.667">
                                                                        <rect id="Rectangle_850" data-name="Rectangle 850"
                                                                            width="16.667" height="16.667"
                                                                            fill="none" />
                                                                        <path id="Vector_22_Stroke_"
                                                                            data-name="Vector 22 (Stroke)"
                                                                            d="M.174.193a.555.555,0,0,1,.842,0L4.167,3.682,7.317.193a.555.555,0,0,1,.842,0,.71.71,0,0,1,0,.932L5.008,4.614a1.111,1.111,0,0,1-1.684,0L.174,1.125A.71.71,0,0,1,.174.193Z"
                                                                            transform="translate(4.167 5.833)"
                                                                            fill="#2a283b" />
                                                                    </svg>

                                                                </span>
                                                            </th>
                                                            <th>Patient </th>
                                                            <th>Patient number</th>
                                                            <th>Specialist</th>
                                                            <th>Reason for visit</th>
                                                            <th>Treatment</th>
                                                            <th>Invoicing</th>
                                                            <th>Recipient</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <!-- Sample data, replace with your dynamic data -->
                                                        <tr>
                                                            <td>12/07/23</td>
                                                            <td>Bonnet Pierre</td>
                                                            <td>Daniel</td>
                                                            <td>273633</td>
                                                            <td>Dr. Daniel Soufi</td>
                                                            <td>Reason for visit</td>
                                                            <td>Treatment</td>
                                                            <td>CHF XXXX-.</td>
                                                            <td><a href="#"
                                                                    class="btn btn-info  text-white rounded-pill btn-sm">View</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>12/07/23</td>
                                                            <td>Bonnet Pierre</td>
                                                            <td>Daniel</td>
                                                            <td>273633</td>
                                                            <td>Dr. Daniel Soufi</td>
                                                            <td>Reason for visit</td>
                                                            <td>Treatment</td>
                                                            <td>CHF XXXX-.</td>
                                                            <td><button type="button"
                                                                    class="btn btn-info text-white rounded-pill btn-sm">View</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>12/07/23</td>
                                                            <td>Bonnet Pierre</td>
                                                            <td>Daniel</td>
                                                            <td>273633</td>
                                                            <td>Dr. Daniel Soufi</td>
                                                            <td>Reason for visit</td>
                                                            <td>Treatment</td>
                                                            <td>CHF XXXX-.</td>
                                                            <td><button type="button"
                                                                    class="btn btn-info text-white rounded-pill btn-sm">View</button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="ex-with-icons-tabs-2" role="tabpanel"
                                            aria-labelledby="ex-with-icons-tab-2">
                                            Tab 2 content
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                
                        <!-- Tabs content -->
                        <div class="tab-pane fade" id="ex-with-icons-tabs-2" role="tabpanel"
                            aria-labelledby="ex-with-icons-tab-2">
                            Tab 2 content
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12 col-lg-12 bg-color ">
            <div class="container rounded-3 mt-5">
                <div
                    class="w-full row cons-sm mx-auto mt-4 align-items-center custom-margin rounded-3 justify-content-center bg-white p-3">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="row">
                            <div class="col-md-12 py-2 rounded-3 bg-white d-flex justify-content-between">
                                <h5 class="py-2 ">Files to be invoiced.</h5>
                                <a href="#" class="text-decoration-none text-info px-4 py-2">See
                                    all</a>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12 gx-5 py-3 rounded-3 bg-white d-flex align-items-center">
                            <table class="table table-borderless table-responsive">

                                <thead>
                                    <tr>

                                        <th>
                                            <p class="clr-th mb-0 font-14">Patient </p>
                                        </th>
                                        <th>
                                            <p class="clr-th mb-0 font-14">Specialist </p>
                                        </th>
                                        <th>
                                            <span class="d-flex gap-2 align-items-center">
                                                <p class="clr-th mb-0 font-14">Date</p>
                                                <svg id="Group_921" data-name="Group 921"
                                                    xmlns="http://www.w3.org/2000/svg" width="16.667" height="16.667"
                                                    viewBox="0 0 16.667 16.667">
                                                    <rect id="Rectangle_850" data-name="Rectangle 850" width="16.667"
                                                        height="16.667" fill="none" />
                                                    <path id="Vector_22_Stroke_" data-name="Vector 22 (Stroke)"
                                                        d="M.174.193a.555.555,0,0,1,.842,0L4.167,3.682,7.317.193a.555.555,0,0,1,.842,0,.71.71,0,0,1,0,.932L5.008,4.614a1.111,1.111,0,0,1-1.684,0L.174,1.125A.71.71,0,0,1,.174.193Z"
                                                        transform="translate(4.167 5.833)" fill="#2a283b" />
                                                </svg>

                                            </span>
                                        </th>
                                        <th>
                                            <p class="clr-th mb-0 font-14">Treatment</p>
                                        </th>
                                        <th>
                                            <p class="clr-th mb-0 font-14">Treatment Plan</p>

                                        </th>
                                        <th>

                                            <p class="clr-th mb-0 font-14">Amount </p>
                                        </th>
                                        <th>
                                            <span class="d-flex gap-2 align-items-center">
                                                <p class="clr-th mb-0 font-14">Status</p>
                                                <svg id="Group_921" data-name="Group 921"
                                                    xmlns="http://www.w3.org/2000/svg" width="16.667" height="16.667"
                                                    viewBox="0 0 16.667 16.667">
                                                    <rect id="Rectangle_850" data-name="Rectangle 850" width="16.667"
                                                        height="16.667" fill="none" />
                                                    <path id="Vector_22_Stroke_" data-name="Vector 22 (Stroke)"
                                                        d="M.174.193a.555.555,0,0,1,.842,0L4.167,3.682,7.317.193a.555.555,0,0,1,.842,0,.71.71,0,0,1,0,.932L5.008,4.614a1.111,1.111,0,0,1-1.684,0L.174,1.125A.71.71,0,0,1,.174.193Z"
                                                        transform="translate(4.167 5.833)" fill="#2a283b" />
                                                </svg>

                                            </span>
                                        </th>
                                        <th>
                                            <p class="clr-th mb-0 font-14">Next appointment</p>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Glenn Stanley</td>
                                        <td>Dr. Daniel Soufi</td>
                                        <td>
                                            12 July 2023
                                        </td>
                                        <td>
                                            Ongoing treatment
                                        </td>
                                        <td>
                                            12 months
                                        </td>
                                        <td>
                                            CHF XXXX-.
                                        </td>
                                        <td>
                                            Unbilled
                                        </td>
                                        <td>
                                            12 July 2023
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Glenn Stanley</td>
                                        <td>Dr. Daniel Soufi</td>
                                        <td>
                                            12 July 2023
                                        </td>
                                        <td>
                                            Ongoing treatment
                                        </td>
                                        <td>
                                            12 months
                                        </td>
                                        <td>
                                            CHF XXXX-.
                                        </td>
                                        <td>
                                            Unbilled
                                        </td>
                                        <td>
                                            12 July 2023
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Glenn Stanley</td>
                                        <td>Dr. Daniel Soufi</td>
                                        <td>
                                            12 July 2023
                                        </td>
                                        <td>
                                            Ongoing treatment
                                        </td>
                                        <td>
                                            12 months
                                        </td>
                                        <td>
                                            CHF XXXX-.
                                        </td>
                                        <td>
                                            Unbilled
                                        </td>
                                        <td>
                                            12 July 2023
                                    </tr>
                                    <tr>
                                        <td>Glenn Stanley</td>
                                        <td>Dr. Daniel Soufi</td>
                                        <td>
                                            12 July 2023
                                        </td>
                                        <td>
                                            Ongoing treatment
                                        </td>
                                        <td>
                                            12 months
                                        </td>
                                        <td>
                                            CHF XXXX-.
                                        </td>
                                        <td>
                                            Unbilled
                                        </td>
                                        <td>
                                            12 July 2023
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Glenn Stanley</td>
                                        <td>Dr. Daniel Soufi</td>
                                        <td>
                                            12 July 2023
                                        </td>
                                        <td>
                                            Ongoing treatment
                                        </td>
                                        <td>
                                            12 months
                                        </td>
                                        <td>
                                            CHF XXXX-.
                                        </td>
                                        <td>
                                            Unbilled
                                        </td>
                                        <td>
                                            12 July 2023
                                        </td>
                                    </tr>

                                </tbody>

                            </table>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>

    </div>
@endsection
