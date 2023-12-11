@extends('frontend.partials.main')
@section('content')
    <div class="container py-5 pl-5">
        <div class="row  d-flex align-items-center">
            <div class="col-md-12 col-lg-12  py-4 rounded-3  d-flex justify-content-lg-between bg-white align-items-center ">
                <h5 class="py-2 ">Patient list</h5>
                <div class=" align-items-center  pl-3 d-flex align-items-center">
                    <a class="btn btn-sm btn-info mx-2 text-white text-decoration-none text-nowrap  px-4 py-2"><i
                            class="fas fa-plus px-1 text-white"></i>Create a new patient
                    </a>
                </div>

            </div>
        </div>
        <div class="row d-flex align-items-center">
            <div class="col-md-12 col-lg-12  gx-5    py-3 rounded-3  bg-white ">
                <ul class="nav nav-tabs mb-3" id="ex-with-icons" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a data-bs-toggle="tab" class="nav-link active" id="ex-with-icons-tab-1"
                            href="#ex-with-icons-tabs-1" role="tab" aria-controls="ex-with-icons-tabs-1"
                            aria-selected="true">
                            All patients
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a data-bs-toggle="tab" class="nav-link" id="ex-with-icons-tab-2" href="#ex-with-icons-tabs-2"
                            role="tab" aria-controls="ex-with-icons-tabs-2" aria-selected="false">
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
                                    <i class="fas  fa-search position-absolute translate-bottom mt-2 px-  text-start  text-secondary"
                                        style="padding-left:21px; padding-bottom:6px;"></i>
                                    <input class="form-control form-control-sm w-50 mx-2 px-5" id="searchInput">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-8 col-lg-8">
                                <span class="text-nowrap bg-light px-2">Ongoing treatment
                                    plane X</span>
                                <span class="text-nowrap bg-light px-2">Last consultation (+2
                                    years) </span>
                                <span> <button type="button" class="btn btn-sm btn-white border border-dark w-10 h-60">
                                        Add filter <i class="fas fa-bars mr-3"></i>
                                    </button> </span>
                                <span> <button type="button" class="btn btn-sm btn-white border border-dark w-10 h-60">
                                        Action </i>
                                    </button></span>

                            </div>
                        </div>
                        <table class="table table-borderless table-responsive">
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
                                    <td>
                                        <div class="btn-group">
                                            <button class="btn btn-outline-dark btn-sm dropdown-toggle" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                treatment Ongoing
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            </ul>
                                        </div>

                                    </td>
                                    </td>
                                    <td>
                                        1 week
                                    </td>
                                    <td>
                                        Connected
                                    </td>
                                    <td> <a
                                            class="btn btn-sm mx-2 text-dark bg-white text-decoration-none text-nowrap  px-4 py-2"><i
                                                class="fas fa-pen px-1 text-dark"></i>Edit
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
                                    <td>
                                        <div class="btn-group">
                                            <button class="btn btn-outline-dark btn-sm dropdown-toggle" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                treatment Ongoing
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            </ul>
                                        </div>

                                    </td>
                                    </td>
                                    <td>
                                        1 week
                                    </td>
                                    <td>
                                        Connected
                                    </td>
                                    <td> <a
                                            class="btn btn-sm mx-2 text-dark bg-white text-decoration-none text-nowrap  px-4 py-2"><i
                                                class="fas fa-pen px-1 text-dark"></i>Edit
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
                                    <td>
                                        <div class="btn-group">
                                            <button class="btn btn-outline-dark btn-sm dropdown-toggle" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                treatment Ongoing
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            </ul>
                                        </div>

                                    </td>
                                    </td>
                                    <td>
                                        1 week
                                    </td>
                                    <td>
                                        Connected
                                    </td>
                                    <td> <a
                                            class="btn btn-sm mx-2 text-dark bg-white text-decoration-none text-nowrap  px-4 py-2"><i
                                                class="fas fa-pen px-1 text-dark"></i>Edit
                                        </a></td>
                                </tr>

                            </tbody>

                        </table>
                        <div class=" row bg-white d-flex justify-content-center py-1">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
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
