@extends('frontend.partials.main')
@section('content')
    <div class="container py-4">
        <div class="row gx-5 ">
            <div class="col-12 col-md-9 col-lg-9 bg-white  rounded-3">
                <div class="d-flex justify-content-between">
                    <h5 class="py-4 mb-4  ">Assigned tasks.</h5>
                    <a href="#"
                        class=" mx-2 py-4 mb-4 float-right text-info text-decoration-none text-nowrap  px-4 py-2"><i
                            class="fas fa-plus px-1 text-white"></i>Create new ticket
                    </a>
                </div>
                <ul class="nav nav-tabs mb-3 justify-content-between" id="ex-with-icons" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a data-bs-toggle="tab" class="nav-link active" id="ex-with-icons-tab-1"
                            href="#ex-with-icons-tabs-1" role="tab" aria-controls="ex-with-icons-tabs-1"
                            aria-selected="true">
                            Active tasks
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a data-bs-toggle="tab" class="nav-link" id="ex-with-icons-tab-2" href="#ex-with-icons-tabs-2"
                            role="tab" aria-controls="ex-with-icons-tabs-2" aria-selected="false">
                            Completed tasks
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a data-bs-toggle="tab" class="nav-link" id="ex-with-icons-tab-3" href="#ex-with-icons-tabs-3"
                            role="tab" aria-controls="ex-with-icons-tabs-3" aria-selected="false">
                            Archive
                        </a>
                    </li>
                    <li class="d-flex justify-content-end ms-auto pb-2">
                        <div class="btn-group">
                            <button class="btn btn-outline-dark text-dark action_btn btn-sm bg-white dropdown-toggle"
                                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Action
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
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <div class="tab-content" id="ex-with-icons-content">
                    <div class="tab-pane fade show active" id="ex-with-icons-tabs-1" role="tabpanel"
                        aria-labelledby="ex-with-icons-tab-1">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr style="border-color : transparent">
                                        <th>

                                        </th>
                                        <th> <span class="d-flex gap-2 align-items-center">
                                                <p class="clr-th mb-0 font-14">ID</p>
                                                <svg id="Group_921" data-name="Group 921" xmlns="http://www.w3.org/2000/svg"
                                                    width="16.667" height="16.667" viewBox="0 0 16.667 16.667">
                                                    <rect id="Rectangle_850" data-name="Rectangle 850" width="16.667"
                                                        height="16.667" fill="none" />
                                                    <path id="Vector_22_Stroke_" data-name="Vector 22 (Stroke)"
                                                        d="M.174.193a.555.555,0,0,1,.842,0L4.167,3.682,7.317.193a.555.555,0,0,1,.842,0,.71.71,0,0,1,0,.932L5.008,4.614a1.111,1.111,0,0,1-1.684,0L.174,1.125A.71.71,0,0,1,.174.193Z"
                                                        transform="translate(4.167 5.833)" fill="#2a283b" />
                                                </svg>

                                            </span>
                                        </th>
                                        <th> <span class="d-flex gap-2 align-items-center">
                                                <p class="clr-th mb-0 font-14">Tasks</p>
                                                <svg id="Group_921" data-name="Group 921" xmlns="http://www.w3.org/2000/svg"
                                                    width="16.667" height="16.667" viewBox="0 0 16.667 16.667">
                                                    <rect id="Rectangle_850" data-name="Rectangle 850" width="16.667"
                                                        height="16.667" fill="none" />
                                                    <path id="Vector_22_Stroke_" data-name="Vector 22 (Stroke)"
                                                        d="M.174.193a.555.555,0,0,1,.842,0L4.167,3.682,7.317.193a.555.555,0,0,1,.842,0,.71.71,0,0,1,0,.932L5.008,4.614a1.111,1.111,0,0,1-1.684,0L.174,1.125A.71.71,0,0,1,.174.193Z"
                                                        transform="translate(4.167 5.833)" fill="#2a283b" />
                                                </svg>

                                            </span>
                                        </th>
                                        <th> <span class="d-flex gap-2 align-items-center">
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
                                        <th> <span class="d-flex gap-2 align-items-center">
                                                <p class="clr-th mb-0 font-14">Assigned to</p>
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
                                        <th> <span class="d-flex gap-2 align-items-center">
                                                <p class="clr-th mb-0 font-14">Date of creation</p>
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
                                        <th> <span class="d-flex gap-2 align-items-center">
                                                <p class="clr-th mb-0 font-14">Due date</p>
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
                                        <th> <span class="d-flex gap-2 align-items-center">
                                                <p class="clr-th mb-0 font-14">Priority</p>
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
                                        <th> <span class="d-flex gap-2 align-items-center">
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

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">

                                                </label>
                                        </td>
                                        <td>Lorem ipsum dolor sit amet…</td>
                                        <td>Soufi Daniel</td>
                                        <td>23/12/1980</td>
                                        <td>
                                        <td>23/12/1980</td>
                                        <td>
                                        <td>
                                            <button class="btn btn-outline-dark bg-white text-danger btn-sm "
                                                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Emergency
                                            </button>

                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <button
                                                    class="btn btn-outline-dark bg-white btn-sm text-success dropdown-toggle"
                                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Ongoing
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li><a class="dropdown-item" href="#">Another action</a>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    </li>
                                                    <li><a class="dropdown-item" href="#">Something else
                                                            here</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">

                                                </label>
                                        </td>
                                        <td>Lorem ipsum dolor sit amet…</td>
                                        <td>Soufi Daniel</td>
                                        <td>23/12/1980</td>
                                        <td>
                                        <td>23/12/1980</td>
                                        <td>
                                        <td>
                                            <button class="btn btn-outline-dark bg-white text-danger btn-sm "
                                                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Emergency
                                            </button>

                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <button
                                                    class="btn btn-outline-dark bg-white btn-sm text-success dropdown-toggle"
                                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Ongoing
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li><a class="dropdown-item" href="#">Another action</a>
                                                    </li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li><a class="dropdown-item" href="#">Something else
                                                            here</a>
                                                    </li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">

                                                </label>
                                        </td>
                                        <td>Lorem ipsum dolor sit amet…</td>
                                        <td>Soufi Daniel</td>
                                        <td>23/12/1980</td>
                                        <td>
                                        <td>23/12/1980</td>
                                        <td>
                                        <td>
                                            <button class="btn btn-outline-dark bg-white text-danger btn-sm "
                                                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Emergency
                                            </button>

                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <button
                                                    class="btn btn-outline-dark bg-white btn-sm text-success dropdown-toggle"
                                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Ongoing
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li><a class="dropdown-item" href="#">Another action</a>
                                                    </li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li><a class="dropdown-item" href="#">Something else
                                                            here</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">

                                                </label>
                                        </td>
                                        <td>Lorem ipsum dolor sit amet…</td>
                                        <td>Soufi Daniel</td>
                                        <td>23/12/1980</td>
                                        <td>
                                        <td>23/12/1980</td>
                                        <td>
                                        <td>
                                            <button class="btn btn-outline-dark bg-white text-danger btn-sm "
                                                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Emergency
                                            </button>

                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <button
                                                    class="btn btn-outline-dark bg-white btn-sm text-success dropdown-toggle"
                                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Ongoing
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li><a class="dropdown-item" href="#">Another action</a>
                                                    </li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li><a class="dropdown-item" href="#">Something else
                                                            here</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">

                                                </label>
                                        </td>
                                        <td>Lorem ipsum dolor sit amet…</td>
                                        <td>Soufi Daniel</td>
                                        <td>23/12/1980</td>
                                        <td>
                                        <td>23/12/1980</td>
                                        <td>
                                        <td>
                                            <button class="btn btn-outline-dark bg-white text-danger btn-sm "
                                                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Emergency
                                            </button>

                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <button
                                                    class="btn btn-outline-dark bg-white btn-sm text-success dropdown-toggle"
                                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Ongoing
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li><a class="dropdown-item" href="#">Another action</a>
                                                    </li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li><a class="dropdown-item" href="#">Something else
                                                            here</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">

                                                </label>
                                        </td>
                                        <td>Lorem ipsum dolor sit amet…</td>
                                        <td>Soufi Daniel</td>
                                        <td>23/12/1980</td>
                                        <td>
                                        <td>23/12/1980</td>
                                        <td>
                                        <td>
                                            <button class="btn btn-outline-dark bg-white text-danger btn-sm "
                                                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Emergency
                                            </button>

                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <button
                                                    class="btn btn-outline-dark bg-white btn-sm text-success dropdown-toggle"
                                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Ongoing
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li><a class="dropdown-item" href="#">Another action</a>
                                                    </li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li><a class="dropdown-item" href="#">Something else
                                                            here</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">

                                                </label>
                                        </td>
                                        <td>Lorem ipsum dolor sit amet…</td>
                                        <td>Soufi Daniel</td>
                                        <td>23/12/1980</td>
                                        <td>
                                        <td>23/12/1980</td>
                                        <td>
                                        <td>
                                            <button class="btn btn-outline-dark bg-white text-danger btn-sm "
                                                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Emergency
                                            </button>

                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <button
                                                    class="btn btn-outline-dark bg-white btn-sm text-success dropdown-toggle"
                                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Ongoing
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li><a class="dropdown-item" href="#">Another action</a>
                                                    </li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li><a class="dropdown-item" href="#">Something else
                                                            here</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">

                                                </label>
                                        </td>
                                        <td>Lorem ipsum dolor sit amet…</td>
                                        <td>Soufi Daniel</td>
                                        <td>23/12/1980</td>
                                        <td>
                                        <td>23/12/1980</td>
                                        <td>
                                        <td>
                                            <button class="btn btn-outline-dark bg-white text-danger btn-sm "
                                                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Emergency
                                            </button>

                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <button
                                                    class="btn btn-outline-dark bg-white btn-sm text-success dropdown-toggle"
                                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Ongoing
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li><a class="dropdown-item" href="#">Another action</a>
                                                    </li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li><a class="dropdown-item" href="#">Something else
                                                            here</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                            <nav aria-label="Page navigation ">
                                <ul class="pagination d-flex justify-content-end">
                                    <span class="clr-pg font-14 px-4  d-flex align-items-center">1000 results</span>

                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true"><svg style="
    transform: rotate(90deg);
"
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
                                            <span aria-hidden="true"><svg style="
    transform: rotate(270deg);
"
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
                    <div class="tab-pane fade" id="ex-with-icons-tabs-3" role="tabpanel"
                        aria-labelledby="ex-with-icons-tab-3">
                        Tab 3 content
                    </div>

                </div>
            </div>
            <div class="col-12 col-md-3  col-lg-3">
                <div class="p-3 border bg-white  rounded-3">
                    <h5 class=" py-3"> Recent activity</h5>
                    <ul class="list-group  pb-4">
                        <li class="list-group-item extra-small-text border-b-br border-none">Task <b>#1256</b> has been
                            archived
                            <br><small class=" extra-small-text ">10 min ago</small>
                        </li>
                        <li class="list-group-item extra-small-text border-b-br border-none ">Task <b>#1256</b> has been
                            archived
                            <br><small class=" extra-small-text">10 min ago</small>
                        </li>
                        <li class="list-group-item extra-small-text border-b-br border-none">Task <b>#1256</b> has been
                            archived
                            <br><small class=" extra-small-text">10 min ago</small>
                        </li>
                        <li class="list-group-item extra-small-text border-b-br border-none">Task <b>#1256</b> has been
                            archived
                            <br><small class=" extra-small-text">10 min ago</small>
                        </li>
                        <li class="list-group-item extra-small-text border-b-br border-none">Task <b>#1256</b> has been
                            archived
                            <br><small class=" extra-small-text">10 min ago</small>
                        </li>
                        <li class="list-group-item extra-small-text border-b-br border-none">Task <b>#1256</b> has been
                            archived
                            <br><small class=" extra-small-text">10 min ago</small>
                        </li>
                        <li class="list-group-item extra-small-text border-b-br border-none">Task <b>#1256</b> has been
                            archived
                            <br><small class=" extra-small-text">10 min ago</small>
                        </li>
                        <li class="list-group-item extra-small-text border-b-br border-none">Task <b>#1256</b> has been
                            archived
                            <br><small class=" extra-small-text">10 min ago</small>
                        </li>
                        <li class="list-group-item extra-small-text border-b-br border-none">Task <b>#1256</b> has been
                            archived
                            <br><small class=" extra-small-text">10 min ago</small>
                        </li>
                        <li class="list-group-item extra-small-text border-b-br border-none">Task <b>#1256</b> has been
                            archived
                            <br><small class=" extra-small-text">10 min ago</small>
                        </li>
                        <li class="list-group-item extra-small-text border-b-br border-none">Task <b>#1256</b> has been
                            archived
                            <br><small class=" extra-small-text">10 min ago</small>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="row py-5">
            <div class="col-12 col-md-12 col-lg-12 bg-white">
                <div class="d-flex justify-content-between">
                    <h5 class="py-4 mb-4">Specialists tickets.</h5>
                </div>
                <div class="table-responsive">
                    <table class="table table-borderless px-5">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Specialist</th>
                                <th>Category</th>
                                <th>Note</th>
                                <th>
                                    <span class="d-flex gap-2 align-items-center">
                                        <p class="clr-th mb-0 font-14">Priority</p>
                                        <svg id="Group_921" data-name="Group 921" xmlns="http://www.w3.org/2000/svg"
                                            width="16.667" height="16.667" viewBox="0 0 16.667 16.667">
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
                                        <p class="clr-th mb-0 font-14">Status</p>
                                        <svg id="Group_921" data-name="Group 921" xmlns="http://www.w3.org/2000/svg"
                                            width="16.667" height="16.667" viewBox="0 0 16.667 16.667">
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
                            <tr>
                                <td>#1ied8n2</td>
                                <td>Lorem ipsum dolor sit amet…</td>
                                <td>Lorem ipsum dolor sit amet…</td>
                                <td>Stock</td>
                                <td>
                                    <button class="btn btn-outline-dark bg-white text-danger btn-sm" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Emergency
                                    </button>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-outline-dark bg-white btn-sm text-success dropdown-toggle"
                                            type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Ongoing
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
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>#1ied8n2</td>
                                <td>Lorem ipsum dolor sit amet…</td>
                                <td>Lorem ipsum dolor sit amet…</td>
                                <td>Stock</td>
                                <td>
                                    <button class="btn btn-outline-dark bg-white text-danger btn-sm" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Emergency
                                    </button>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-outline-dark bg-white btn-sm text-success dropdown-toggle"
                                            type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Ongoing
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
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>#1ied8n2</td>
                                <td>Lorem ipsum dolor sit amet…</td>
                                <td>Lorem ipsum dolor sit amet…</td>
                                <td>Stock</td>
                                <td>
                                    <button class="btn btn-outline-dark bg-white text-danger btn-sm" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Emergency
                                    </button>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-outline-dark bg-white btn-sm text-success dropdown-toggle"
                                            type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Ongoing
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
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>#1ied8n2</td>
                                <td>Lorem ipsum dolor sit amet…</td>
                                <td>Lorem ipsum dolor sit amet…</td>
                                <td>Stock</td>
                                <td>
                                    <button class="btn btn-outline-dark bg-white text-danger btn-sm" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Emergency
                                    </button>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-outline-dark bg-white btn-sm text-success dropdown-toggle"
                                            type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Ongoing
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
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>#1ied8n2</td>
                                <td>Lorem ipsum dolor sit amet…</td>
                                <td>Lorem ipsum dolor sit amet…</td>
                                <td>Stock</td>
                                <td>
                                    <button class="btn btn-outline-dark bg-white text-danger btn-sm" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Emergency
                                    </button>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-outline-dark bg-white btn-sm text-success dropdown-toggle"
                                            type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Ongoing
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
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <nav aria-label="Page navigation ">
                        <ul class="pagination d-flex justify-content-end">
                            <span class="clr-pg font-14 px-4  d-flex align-items-center">1000 results</span>

                            <li class="page-item disabled">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true"><svg style="
    transform: rotate(90deg);
"
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
                                    <span aria-hidden="true"><svg style="
    transform: rotate(270deg);
"
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

        </div>

    </div>
@endsection
