@extends('frontend.partials.main')
@section('content')
    <div class="container py-5 px-4">
        <div class="row  d-flex align-items-center">
            <div class="col-md-12 col-lg-12 py-2  d-flex justify-content-between bg-white align-items-center ">
                <h5 class="py-2 ">Patient list</h5>
                <a class="btn btn-sm btn-info mx-2 text-white text-decoration-none "><i
                        class="fas fa-plus px-1 text-white"></i>Create a new patient
                </a>
            </div>
        </div>
        <div class="row d-flex align-items-cente ">
            <div class="col-md-12 col-lg-12  gx-5    py-3 rounded-3  bg-white">
                <ul class="nav nav-tabs mb-3 " id="ex-with-icons" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a data-bs-toggle="tab" class="nav-link active" id="ex-with-icons-tab-1"
                            href="#ex-with-icons-tabs-1" role="tab" aria-controls="ex-with-icons-tabs-1"
                            aria-selected="true">
                            All patients
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a data-bs-toggle="tab" class="nav-link" id="ex-with-icons-tab-2" href="#ex-with-icons-tabs-2"
                            role="tab" aria-controls="ex-with-icons-tabs-2 border" aria-selected="false">
                            Draft consultation
                        </a>
                    </li>
                </ul>
                <!-- Tabs navs -->
                <!-- Tabs content -->
                <div class="tab-content" id="ex-with-icons-content">
                    <div class="tab-pane fade show active" id="ex-with-icons-tabs-1" role="tabpanel"
                        aria-labelledby="ex-with-icons-tab-1">
                        <div class="row d-flex  justify-content-between">
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <div class="input-icons position-relative d-flex align-items-center">
                                    <svg class="fas  fa-search position-absolute translate-bottom  text-start  text-secondary"
                                        style="left : 3%" id="Box_1" data-name="Box 1"
                                        xmlns="http://www.w3.org/2000/svg" width="15.012" height="15.012"
                                        viewBox="0 0 15.012 15.012">
                                        <g id="Group_1" data-name="Group 1">
                                            <path id="Union"
                                                d="M6.736,0a6.736,6.736,0,1,0,4.338,11.89l2.953,2.953a.577.577,0,0,0,.817-.817L11.89,11.074A6.736,6.736,0,0,0,6.736,0ZM1.155,6.736a5.582,5.582,0,1,1,5.582,5.582A5.582,5.582,0,0,1,1.155,6.736Z"
                                                fill="#8e999a" />
                                        </g>
                                    </svg>
                                    <input class="form-control form-control-sm w-50 mx-2 px-4" id="PatientsearchInput"
                                        placeholder="Search for a patient …">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-7 col-lg-7 d-flex gap-2">
                                <div class="d-flex justify-content-between wd-200 px-3 py-0 bg-light align-items-center">
                                    <span class="font-14 clr-br px-2">Ongoing treatment
                                        plane</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#707070"
                                        class="bi bi-x" viewBox="0 0 16 16">
                                        <path
                                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708" />
                                    </svg>
                                </div>
                                <div class="d-flex justify-content-between wd-200 px-3 py-0 bg-light align-items-center">
                                    <span class="font-14 clr-br px-2">Last consultation (+2 years)</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#707070"
                                        class="bi bi-x" viewBox="0 0 16 16">
                                        <path
                                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708" />
                                    </svg>
                                </div>
                                <span class="px-2"> <button type="button"
                                        class="btn btn-sm btn-white border border-dark w-10 h-60">
                                        Add filter <i class="fas fa-bars mr-3"></i>
                                    </button> </span>
                                <span class="pl-3 px-2">
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-white  border border-dark w-10 h-60 dropdown-toggle"
                                            type="button" id="dropdownMenuButton" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            Action
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <li><a class="dropdown-item" href="#">Action 1</a></li>
                                            <li><a class="dropdown-item" href="#">Action 2</a></li>

                                        </ul>
                                    </div>
                                </span>

                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>
                                            <div class="form-check mb-0 d-flex align-items-end">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">

                                                </label>
                                            </div>
                                        </th>
                                        <th>
                                            <span class="d-flex gap-2 align-items-center">
                                                <p class="clr-th mb-0 font-14">First name </p>
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
                                            <span class="d-flex gap-2 align-items-center">
                                                <p class="clr-th mb-0 font-14">Last name </p>
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
                                            <span class="d-flex gap-2 align-items-center">
                                                <p class="clr-th mb-0 font-14">Birth</p>
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
                                            <span class="d-flex gap-2 align-items-center">
                                                <p class="clr-th mb-0 font-14">File status </p>
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
                                            <span class="d-flex gap-2 align-items-center">
                                                <p class="clr-th mb-0 font-14">Last consultation</p>
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
                                            <span class="d-flex gap-2 align-items-center">
                                                <p class="clr-th mb-0 font-14">Mobile application</p>
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
                                            <span class="d-flex gap-2 align-items-center">
                                                <p class="clr-th mb-0 font-14">Action </p>
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
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="border-b-br">
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">

                                                </label>
                                        </td>
                                        <td>Stanley</td>
                                        <td>Glenn</td>
                                        <td>23/12/1980</td>
                                        <td>
                                            <div class="btn-group">
                                                <button
                                                    class="btn btn-outline-dark bg-white text-dark btn-sm dropdown-toggle"
                                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Ongoing treatment
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li><a class="dropdown-item" href="#">Something else here</a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </td>

                                        <td>
                                            1 week
                                        </td>
                                        <td>
                                            <i class="fas fa-mobile-alt pr-1"></i> Connected
                                        </td>
                                        <td>
                                            <a
                                                class="btn btn-sm text-dark bg-white text-decoration-none text-nowrap px-0 py-2"><svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="13.37"
                                                    height="14.526" viewBox="0 0 13.37 14.526">
                                                    <defs>
                                                        <clipPath id="clip-path">
                                                            <rect id="Rectangle_34" data-name="Rectangle 34"
                                                                width="4.029" height="15.744" fill="#102940" />
                                                        </clipPath>
                                                    </defs>
                                                    <g id="Group_393" data-name="Group 393"
                                                        transform="translate(10.329) rotate(41)">
                                                        <g id="Group_244" data-name="Group 244"
                                                            transform="translate(0 0)" clip-path="url(#clip-path)">
                                                            <path id="Path_29" data-name="Path 29"
                                                                d="M2.014,0A2.016,2.016,0,0,0,0,2.014V12.27a.549.549,0,0,0,.058.245l1.465,2.93a.554.554,0,0,0,.983,0l1.465-2.93a.549.549,0,0,0,.058-.245V2.014A2.016,2.016,0,0,0,2.014,0M2.93,12.14l-.916,1.831L1.1,12.14v-.053H2.93Zm0-1.152H1.1V4.029H2.93Zm0-8.058H1.1V2.014a.916.916,0,1,1,1.831,0Z"
                                                                transform="translate(0 0)" fill="#102940" />
                                                        </g>
                                                    </g>
                                                </svg>
                                                Edit
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="border-b-br">
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">

                                                </label>
                                        </td>
                                        <td>Stanley</td>
                                        <td>Glenn</td>
                                        <td>23/12/1980</td>
                                        <td>
                                            <div class="btn-group">
                                                <button
                                                    class="btn btn-outline-dark bg-white text-dark btn-sm dropdown-toggle"
                                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Ongoing treatment
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li><a class="dropdown-item" href="#">Something else here</a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </td>

                                        <td>
                                            1 week
                                        </td>
                                        <td>
                                            <i class="fas fa-mobile-alt pr-1"></i> Connected
                                        </td>
                                        <td>
                                            <a
                                                class="btn btn-sm text-dark bg-white text-decoration-none text-nowrap px-0 py-2"><svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="13.37"
                                                    height="14.526" viewBox="0 0 13.37 14.526">
                                                    <defs>
                                                        <clipPath id="clip-path">
                                                            <rect id="Rectangle_34" data-name="Rectangle 34"
                                                                width="4.029" height="15.744" fill="#102940" />
                                                        </clipPath>
                                                    </defs>
                                                    <g id="Group_393" data-name="Group 393"
                                                        transform="translate(10.329) rotate(41)">
                                                        <g id="Group_244" data-name="Group 244"
                                                            transform="translate(0 0)" clip-path="url(#clip-path)">
                                                            <path id="Path_29" data-name="Path 29"
                                                                d="M2.014,0A2.016,2.016,0,0,0,0,2.014V12.27a.549.549,0,0,0,.058.245l1.465,2.93a.554.554,0,0,0,.983,0l1.465-2.93a.549.549,0,0,0,.058-.245V2.014A2.016,2.016,0,0,0,2.014,0M2.93,12.14l-.916,1.831L1.1,12.14v-.053H2.93Zm0-1.152H1.1V4.029H2.93Zm0-8.058H1.1V2.014a.916.916,0,1,1,1.831,0Z"
                                                                transform="translate(0 0)" fill="#102940" />
                                                        </g>
                                                    </g>
                                                </svg>
                                                Edit
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="border-b-br">
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">

                                                </label>
                                        </td>
                                        <td>Stanley</td>
                                        <td>Glenn</td>
                                        <td>23/12/1980</td>
                                        <td>
                                            <div class="btn-group">
                                                <button
                                                    class="btn btn-outline-dark bg-white text-dark btn-sm dropdown-toggle"
                                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Ongoing treatment
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li><a class="dropdown-item" href="#">Something else here</a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </td>

                                        <td>
                                            1 week
                                        </td>
                                        <td>
                                            <i class="fas fa-mobile-alt pr-1"></i> Connected
                                        </td>
                                        <td> <a
                                                class="btn btn-sm text-dark bg-white text-decoration-none text-nowrap px-0 py-2">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="13.37"
                                                    height="14.526" viewBox="0 0 13.37 14.526">
                                                    <defs>
                                                        <clipPath id="clip-path">
                                                            <rect id="Rectangle_34" data-name="Rectangle 34"
                                                                width="4.029" height="15.744" fill="#102940" />
                                                        </clipPath>
                                                    </defs>
                                                    <g id="Group_393" data-name="Group 393"
                                                        transform="translate(10.329) rotate(41)">
                                                        <g id="Group_244" data-name="Group 244"
                                                            transform="translate(0 0)" clip-path="url(#clip-path)">
                                                            <path id="Path_29" data-name="Path 29"
                                                                d="M2.014,0A2.016,2.016,0,0,0,0,2.014V12.27a.549.549,0,0,0,.058.245l1.465,2.93a.554.554,0,0,0,.983,0l1.465-2.93a.549.549,0,0,0,.058-.245V2.014A2.016,2.016,0,0,0,2.014,0M2.93,12.14l-.916,1.831L1.1,12.14v-.053H2.93Zm0-1.152H1.1V4.029H2.93Zm0-8.058H1.1V2.014a.916.916,0,1,1,1.831,0Z"
                                                                transform="translate(0 0)" fill="#102940" />
                                                        </g>
                                                    </g>
                                                </svg>
                                                Edit
                                            </a></td>
                                    </tr>
                                    <tr class="border-b-br">
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">

                                                </label>
                                        </td>
                                        <td>Stanley</td>
                                        <td>Glenn</td>
                                        <td>23/12/1980</td>
                                        <td>
                                            <div class="btn-group">
                                                <button
                                                    class="btn btn-outline-dark bg-white text-dark btn-sm dropdown-toggle"
                                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Ongoing treatment
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li><a class="dropdown-item" href="#">Something else here</a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </td>

                                        <td>
                                            1 week
                                        </td>
                                        <td>
                                            <i class="fas fa-mobile-alt pr-1"></i> Connected
                                        </td>
                                        <td> <a
                                                class="btn btn-sm text-dark bg-white text-decoration-none text-nowrap px-0 py-2"><svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="13.37"
                                                    height="14.526" viewBox="0 0 13.37 14.526">
                                                    <defs>
                                                        <clipPath id="clip-path">
                                                            <rect id="Rectangle_34" data-name="Rectangle 34"
                                                                width="4.029" height="15.744" fill="#102940" />
                                                        </clipPath>
                                                    </defs>
                                                    <g id="Group_393" data-name="Group 393"
                                                        transform="translate(10.329) rotate(41)">
                                                        <g id="Group_244" data-name="Group 244"
                                                            transform="translate(0 0)" clip-path="url(#clip-path)">
                                                            <path id="Path_29" data-name="Path 29"
                                                                d="M2.014,0A2.016,2.016,0,0,0,0,2.014V12.27a.549.549,0,0,0,.058.245l1.465,2.93a.554.554,0,0,0,.983,0l1.465-2.93a.549.549,0,0,0,.058-.245V2.014A2.016,2.016,0,0,0,2.014,0M2.93,12.14l-.916,1.831L1.1,12.14v-.053H2.93Zm0-1.152H1.1V4.029H2.93Zm0-8.058H1.1V2.014a.916.916,0,1,1,1.831,0Z"
                                                                transform="translate(0 0)" fill="#102940" />
                                                        </g>
                                                    </g>
                                                </svg>
                                                Edit
                                            </a></td>
                                    </tr>
                                    <tr class="border-b-br">
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">

                                                </label>
                                        </td>
                                        <td>Stanley</td>
                                        <td>Glenn</td>
                                        <td>23/12/1980</td>
                                        <td>
                                            <div class="btn-group">
                                                <button
                                                    class="btn btn-outline-dark bg-white text-dark btn-sm dropdown-toggle"
                                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Ongoing treatment
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li><a class="dropdown-item" href="#">Something else here</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>
                                            1 week
                                        </td>
                                        <td>
                                            <i class="fas fa-mobile-alt pr-1"></i> Connected
                                        </td>
                                        <td> <a
                                                class="btn btn-sm text-dark bg-white text-decoration-none text-nowrap px-0 py-2"><svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="13.37"
                                                    height="14.526" viewBox="0 0 13.37 14.526">
                                                    <defs>
                                                        <clipPath id="clip-path">
                                                            <rect id="Rectangle_34" data-name="Rectangle 34"
                                                                width="4.029" height="15.744" fill="#102940" />
                                                        </clipPath>
                                                    </defs>
                                                    <g id="Group_393" data-name="Group 393"
                                                        transform="translate(10.329) rotate(41)">
                                                        <g id="Group_244" data-name="Group 244"
                                                            transform="translate(0 0)" clip-path="url(#clip-path)">
                                                            <path id="Path_29" data-name="Path 29"
                                                                d="M2.014,0A2.016,2.016,0,0,0,0,2.014V12.27a.549.549,0,0,0,.058.245l1.465,2.93a.554.554,0,0,0,.983,0l1.465-2.93a.549.549,0,0,0,.058-.245V2.014A2.016,2.016,0,0,0,2.014,0M2.93,12.14l-.916,1.831L1.1,12.14v-.053H2.93Zm0-1.152H1.1V4.029H2.93Zm0-8.058H1.1V2.014a.916.916,0,1,1,1.831,0Z"
                                                                transform="translate(0 0)" fill="#102940" />
                                                        </g>
                                                    </g>
                                                </svg>
                                                Edit
                                            </a></td>
                                    </tr>
                                    <tr class="border-b-br">
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">

                                                </label>
                                        </td>
                                        <td>Stanley</td>
                                        <td>Glenn</td>
                                        <td>23/12/1980</td>
                                        <td>
                                            <div class="btn-group">
                                                <button
                                                    class="btn btn-outline-dark bg-white text-dark btn-sm dropdown-toggle"
                                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Ongoing treatment
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li><a class="dropdown-item" href="#">Something else here</a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </td>

                                        <td>
                                            1 week
                                        </td>
                                        <td>
                                            <i class="fas fa-mobile-alt pr-1"></i> Connected
                                        </td>
                                        <td> <a
                                                class="btn btn-sm text-dark bg-white text-decoration-none text-nowrap px-0 py-2"><svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="13.37"
                                                    height="14.526" viewBox="0 0 13.37 14.526">
                                                    <defs>
                                                        <clipPath id="clip-path">
                                                            <rect id="Rectangle_34" data-name="Rectangle 34"
                                                                width="4.029" height="15.744" fill="#102940" />
                                                        </clipPath>
                                                    </defs>
                                                    <g id="Group_393" data-name="Group 393"
                                                        transform="translate(10.329) rotate(41)">
                                                        <g id="Group_244" data-name="Group 244"
                                                            transform="translate(0 0)" clip-path="url(#clip-path)">
                                                            <path id="Path_29" data-name="Path 29"
                                                                d="M2.014,0A2.016,2.016,0,0,0,0,2.014V12.27a.549.549,0,0,0,.058.245l1.465,2.93a.554.554,0,0,0,.983,0l1.465-2.93a.549.549,0,0,0,.058-.245V2.014A2.016,2.016,0,0,0,2.014,0M2.93,12.14l-.916,1.831L1.1,12.14v-.053H2.93Zm0-1.152H1.1V4.029H2.93Zm0-8.058H1.1V2.014a.916.916,0,1,1,1.831,0Z"
                                                                transform="translate(0 0)" fill="#102940" />
                                                        </g>
                                                    </g>
                                                </svg>
                                                Edit
                                            </a></td>
                                    </tr>
                                    <tr class="border-b-br">
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">

                                                </label>
                                        </td>
                                        <td>Stanley</td>
                                        <td>Glenn</td>
                                        <td>23/12/1980</td>
                                        <td>
                                            <div class="btn-group">
                                                <button
                                                    class="btn btn-outline-dark bg-white text-dark btn-sm dropdown-toggle"
                                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Ongoing treatment
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li><a class="dropdown-item" href="#">Something else here</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>
                                            1 week
                                        </td>
                                        <td>
                                            <i class="fas fa-mobile-alt pr-1"></i> Connected
                                        </td>
                                        <td> <a
                                                class="btn btn-sm text-dark bg-white text-decoration-none text-nowrap px-0 py-2"><svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="13.37"
                                                    height="14.526" viewBox="0 0 13.37 14.526">
                                                    <defs>
                                                        <clipPath id="clip-path">
                                                            <rect id="Rectangle_34" data-name="Rectangle 34"
                                                                width="4.029" height="15.744" fill="#102940" />
                                                        </clipPath>
                                                    </defs>
                                                    <g id="Group_393" data-name="Group 393"
                                                        transform="translate(10.329) rotate(41)">
                                                        <g id="Group_244" data-name="Group 244"
                                                            transform="translate(0 0)" clip-path="url(#clip-path)">
                                                            <path id="Path_29" data-name="Path 29"
                                                                d="M2.014,0A2.016,2.016,0,0,0,0,2.014V12.27a.549.549,0,0,0,.058.245l1.465,2.93a.554.554,0,0,0,.983,0l1.465-2.93a.549.549,0,0,0,.058-.245V2.014A2.016,2.016,0,0,0,2.014,0M2.93,12.14l-.916,1.831L1.1,12.14v-.053H2.93Zm0-1.152H1.1V4.029H2.93Zm0-8.058H1.1V2.014a.916.916,0,1,1,1.831,0Z"
                                                                transform="translate(0 0)" fill="#102940" />
                                                        </g>
                                                    </g>
                                                </svg>
                                                Edit
                                            </a></td>
                                    </tr>
                                    <tr class="border-b-br">
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">

                                                </label>
                                        </td>
                                        <td>Stanley</td>
                                        <td>Glenn</td>
                                        <td>23/12/1980</td>
                                        <td>
                                            <div class="btn-group">
                                                <button
                                                    class="btn btn-outline-dark bg-white text-dark btn-sm dropdown-toggle"
                                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Ongoing treatment
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li><a class="dropdown-item" href="#">Something else here</a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </td>

                                        <td>
                                            1 week
                                        </td>
                                        <td>
                                            <i class="fas fa-mobile-alt pr-1"></i> Connected
                                        </td>
                                        <td> <a
                                                class="btn btn-sm text-dark bg-white text-decoration-none text-nowrap px-0 py-2"><svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="13.37"
                                                    height="14.526" viewBox="0 0 13.37 14.526">
                                                    <defs>
                                                        <clipPath id="clip-path">
                                                            <rect id="Rectangle_34" data-name="Rectangle 34"
                                                                width="4.029" height="15.744" fill="#102940" />
                                                        </clipPath>
                                                    </defs>
                                                    <g id="Group_393" data-name="Group 393"
                                                        transform="translate(10.329) rotate(41)">
                                                        <g id="Group_244" data-name="Group 244"
                                                            transform="translate(0 0)" clip-path="url(#clip-path)">
                                                            <path id="Path_29" data-name="Path 29"
                                                                d="M2.014,0A2.016,2.016,0,0,0,0,2.014V12.27a.549.549,0,0,0,.058.245l1.465,2.93a.554.554,0,0,0,.983,0l1.465-2.93a.549.549,0,0,0,.058-.245V2.014A2.016,2.016,0,0,0,2.014,0M2.93,12.14l-.916,1.831L1.1,12.14v-.053H2.93Zm0-1.152H1.1V4.029H2.93Zm0-8.058H1.1V2.014a.916.916,0,1,1,1.831,0Z"
                                                                transform="translate(0 0)" fill="#102940" />
                                                        </g>
                                                    </g>
                                                </svg>
                                                Edit
                                            </a></td>
                                    </tr>

                                </tbody>
                            </table>
                            <nav aria-label="Page navigation ">
                                <ul class="pagination d-flex justify-content-end">
                                    <span class="clr-pg font-14 px-4  d-flex align-items-center">1000 results</span>

                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true"><svg style="transform: rotate(90deg);"
                                                    xmlns="http://www.w3.org/2000/svg" width="14.08" height="8.448"
                                                    viewBox="0 0 14.08 8.448">
                                                    <path id="Vector_22_Stroke_" data-name="Vector 22 (Stroke)"
                                                        d="M.295.326a.938.938,0,0,1,1.422,0L7.04,6.22,12.363.326a.938.938,0,0,1,1.422,0,1.2,1.2,0,0,1,0,1.575L8.462,7.8a1.877,1.877,0,0,1-2.844,0L.295,1.9A1.2,1.2,0,0,1,.295.326Z"
                                                        fill="#8791a3" />
                                                </svg>
                                            </span>
                                            <span aria-hidden="true"><svg style="  transform: rotate(90deg);"
                                                    xmlns="http://www.w3.org/2000/svg" width="14.08" height="8.448"
                                                    viewBox="0 0 14.08 8.448">
                                                    <path id="Vector_22_Stroke_" data-name="Vector 22 (Stroke)"
                                                        d="M.295.326a.938.938,0,0,1,1.422,0L7.04,6.22,12.363.326a.938.938,0,0,1,1.422,0,1.2,1.2,0,0,1,0,1.575L8.462,7.8a1.877,1.877,0,0,1-2.844,0L.295,1.9A1.2,1.2,0,0,1,.295.326Z"
                                                        fill="#8791a3" />
                                                </svg>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="page-item disabled"><a class="page-link" href="#">Page 1/3</a></li>
                                    <!-- <li class="page-item"><a class="page-link" href="#">2</a></li> -->
                                    <!-- <li class="page-item"><a class="page-link" href="#">3</a></li> -->
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true"><svg style="  transform: rotate(270deg);"
                                                    xmlns="http://www.w3.org/2000/svg" width="14.08" height="8.448"
                                                    viewBox="0 0 14.08 8.448">
                                                    <path id="Vector_22_Stroke_" data-name="Vector 22 (Stroke)"
                                                        d="M.295.326a.938.938,0,0,1,1.422,0L7.04,6.22,12.363.326a.938.938,0,0,1,1.422,0,1.2,1.2,0,0,1,0,1.575L8.462,7.8a1.877,1.877,0,0,1-2.844,0L.295,1.9A1.2,1.2,0,0,1,.295.326Z"
                                                        fill="#8791a3" />
                                                </svg></span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
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
@endsection
