@extends('frontend.partials.main')
@section('content')
    <div class="container py-4">
        <div class="row gx-5 ">
            <div class="col-12 col-md-9 col-lg-9 bg-white">
                <div class="d-flex justify-content-between">
                    <h5 class="py-4 mb-4  ">Assigned tasks.</h5>
                    <a class=" mx-2 py-4 mb-4 float-right text-info text-decoration-none text-nowrap  px-4 py-2"><i
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
                                    <tr>
                                        <th>

                                        </th>
                                        <th>ID</th>
                                        <th>Tasks</th>
                                        <th>Birth</th>
                                        <th>Assigned to</th>
                                        <th>Date of creation</th>
                                        <th>Due date</th>
                                        <th>Priority</th>
                                        <th>Status</th>

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
                                            <button class="btn btn-outline-dark bg-white text-danger btn-sm " type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
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
                                            <button class="btn btn-outline-dark bg-white text-danger btn-sm " type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
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

                                </tbody>
                            </table>
                        </div>

                        <div class="row justify-content-end px-4">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination text-center">
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
                    <div class="tab-pane fade" id="ex-with-icons-tabs-3" role="tabpanel"
                        aria-labelledby="ex-with-icons-tab-3">
                        Tab 3 content
                    </div>

                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3">
                <div class="p-3 border bg-white">
                    <h5 class="text-center p-3"> Recent activity</h5>
                    <ul class="list-group  pb-4">
                        <li class="list-group-item extra-small-text ">Task <b>#1256</b> has been archived
                            <br><small class=" extra-small-text ">10 min ago</small>
                        </li>
                        <li class="list-group-item extra-small-text ">Task <b>#1256</b> has been archived
                            <br><small class=" extra-small-text">10 min ago</small>
                        </li>
                        <li class="list-group-item extra-small-text ">Task <b>#1256</b> has been archived
                            <br><small class=" extra-small-text">10 min ago</small>
                        </li>
                        <li class="list-group-item extra-small-text ">Task <b>#1256</b> has been archived
                            <br><small class=" extra-small-text">10 min ago</small>
                        </li>
                        <li class="list-group-item extra-small-text ">Task <b>#1256</b> has been archived
                            <br><small class=" extra-small-text">10 min ago</small>
                        </li>
                        <li class="list-group-item extra-small-text ">Task <b>#1256</b> has been archived
                            <br><small class=" extra-small-text">10 min ago</small>
                        </li>
                        <li class="list-group-item extra-small-text ">Task <b>#1256</b> has been archived
                            <br><small class=" extra-small-text">10 min ago</small>
                        </li>
                        <li class="list-group-item extra-small-text ">Task <b>#1256</b> has been archived
                            <br><small class=" extra-small-text">10 min ago</small>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="row py-4">
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
                                <th>Priority</th>
                                <th>Status</th>
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
                </div>
                <div class="row justify-content-end px-4">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination text-center">
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

        </div>

    </div>
@endsection
