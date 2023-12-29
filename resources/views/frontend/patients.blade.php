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
                                    <i class="fas  fa-search position-absolute translate-bottom  text-start  text-secondary"
                                        style="left : 3%"></i>
                                    <input class="form-control form-control-sm w-50 mx-2 px-4" id="PatientsearchInput" placeholder="Search for a patient …">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-7 col-lg-7 d-flex gap-2">
                                <div class="d-flex justify-content-between wd-200 px-3 py-0 bg-light align-items-center">
                                    <span class="font-14 clr-br px-2">Ongoing treatment
                                    plane</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#707070" class="bi bi-x" viewBox="0 0 16 16">
  <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
</svg>
                                </div>
                                <div class="d-flex justify-content-between wd-200 px-3 py-0 bg-light align-items-center">
                                    <span class="font-14 clr-br px-2">Last consultation (+2 years)</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#707070" class="bi bi-x" viewBox="0 0 16 16">
  <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
</svg>
                                </div>
                                <!-- <small class="text-nowrap bg-light px-2 fs-6">Ongoing treatment
                                    plane X</small> -->
                                <!-- <small class="text-nowrap bg-light px-2 fs-6">Last consultation (+2
                                    years) </small> -->
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
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">

                                                </label>
                                            </div>
                                        </th>
                                        <th>First name </th>
                                        <th>Last name </th>
                                        <th>Birth</th>
                                        <th>File status </th>
                                        <th>Last consultation</th>
                                        <th>Mobile application</th>
                                        <th>Action</th>

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
                                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
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
                                                class="btn btn-sm mx-2 text-dark bg-white text-decoration-none text-nowrap  px-4 py-2"><i
                                                    class="fas fa-pencil-alt pr-1"></i>Edit
                                            </a></td>
                                    </tr>
                                    <tr>
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
                                                class="btn btn-sm mx-2 text-dark bg-white text-decoration-none text-nowrap  px-4 py-2"><i
                                                    class="fas fa-pencil-alt pr-1"></i>Edit
                                            </a></td>
                                    </tr>
                                    <tr>
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
                                                class="btn btn-sm mx-2 text-dark bg-white text-decoration-none text-nowrap  px-4 py-2"><i
                                                    class="fas fa-pencil-alt pr-1"></i>Edit
                                            </a></td>
                                    </tr>
                                    <tr>
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
                                                    <li><a class="dropdown-item" href="#">Another action</a></li>
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
                                                class="btn btn-sm mx-2 text-dark bg-white text-decoration-none text-nowrap  px-4 py-2"><i
                                                    class="fas fa-pencil-alt pr-1"></i>Edit
                                            </a></td>
                                    </tr>
                                    <tr>
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
                                                class="btn btn-sm mx-2 text-dark bg-white text-decoration-none text-nowrap  px-4 py-2"><i
                                                    class="fas fa-pencil-alt pr-1"></i>Edit
                                            </a></td>
                                    </tr>
                                    <tr>
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
                                                class="btn btn-sm mx-2 text-dark bg-white text-decoration-none text-nowrap  px-4 py-2"><i
                                                    class="fas fa-pencil-alt pr-1"></i>Edit
                                            </a></td>
                                    </tr>
                                    <tr>
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
                                                class="btn btn-sm mx-2 text-dark bg-white text-decoration-none text-nowrap  px-4 py-2"><i
                                                    class="fas fa-pencil-alt pr-1"></i>Edit
                                            </a></td>
                                    </tr>
                                    <tr>
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
                                                class="btn btn-sm mx-2 text-dark bg-white text-decoration-none text-nowrap  px-4 py-2"><i
                                                    class="fas fa-pencil-alt pr-1"></i>Edit
                                            </a></td>
                                    </tr>
                                    <tr>
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
                                                class="btn btn-sm mx-2 text-dark bg-white text-decoration-none text-nowrap  px-4 py-2"><i
                                                    class="fas fa-pencil-alt pr-1"></i>Edit
                                            </a></td>
                                    </tr>
                                </tbody>
                            </table>
                            <nav aria-label="Page navigation ">
                                <ul class="pagination d-flex justify-content-end">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
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
