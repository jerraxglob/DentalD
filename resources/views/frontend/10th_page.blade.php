@extends('frontend.partials.main')
@section('content')
    <div class="container mt-3">
        <div class="row p-1 align-items-center rounded mt-3 bg-white">
            <div class="col-md-3 col-lg-3 ">
                <h5 class="text-nowrap px-2 py-2 ">Invoicing</h5>
                <small class="px-2">Data for CHD clinic</small>
            </div>
            <div class=" col-12 col-md-3 col-lg-3">
                <button class="btn btn-sm btn-primary mb-2"><i class="fas fa-file text-white px-2"></i>Export</button>
                <button class="btn btn-sm btn-primary me-2 mb-2"><i class="fas fa-print text-white px-2"></i>Print
                    report</button>
            </div>
            <div class=" col-12 col-md-2 col-lg-2">
                <div class="btn-group">
                    <button class="btn btn-white border border-dark btn-sm dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="fas fa-user"></i> All specialists
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <hr class="dropdown-divider">
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <hr class="dropdown-divider">
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
            </div>
            <div class=" d-flex col-12 col-md-2 col-lg-2">
                <span class="px-1">Period</span>
                <div class=" px-1 btn-group">
                    <button class="btn btn-white border px-2 border-dark btn-sm dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="fas fa-calendar-alt"></i> Last 6 months
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
            </div>
            <div class=" d-flex col-12 col-md-2 col-lg-2">
                <span class="px-1"> Vs </span>
                <div class="btn-group px-1">
                    <button class="btn btn-white border border-dark btn-sm dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="fas fa-calendar-alt"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <hr class="dropdown-divider">
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <hr class="dropdown-divider">
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row align-items-center mt-3 bg-color">
            <div class=" col-12 col-md-3 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Sales.</h5>
                        <strong class="card-text fs-2">CHF XXXX.-</strong><br>
                        <span class="text-success text-nowrap">3.49% over the period</span> <br>
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-success" width="23" height="23"
                            fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 17 16">
                            <path fill-rule="evenodd"
                                d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class=" col-12 col-md-3 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Laboratry.</h5>
                        <strong class="card-text fs-2">CHF XXXX.-</strong><br>
                        <span class="text-success">+ 3.49% over the period</span> <br>
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-success" width="23" height="23"
                            fill="currentColor" class="bi bi-arrow-up-right " viewBox="0 0 17 16">
                            <path fill-rule="evenodd"
                                d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class=" col-12 col-md-3 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row  align-item-center">
                            <div class="col d-flex justify-content-between align-item-center">
                                <h5 class="card-title">Salary.</h5>
                                <a href="#" class="text-decoration-none "><i
                                        class='fas fa-pencil-alt text-primary'></i>percentage</a>
                            </div>
                        </div>

                        <strong class="card-text fs-2">CHF XXXX.-</strong><br>
                        <span class="text-success">+ 3.49% over the period</span> <br>
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-success" width="23" height="23"
                            fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 17 16">
                            <path fill-rule="evenodd"
                                d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class=" col-12 col-md-3 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Number of patients.</h5>
                        <strong class="card-text fs-2">XXXX</strong><br>
                        <span class="text-success">3.49% over the period</span> <br>
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-success" width="23" height="23"
                            fill="currentColor" class="bi bi-arrow-up-right " viewBox="0 0 17 16">
                            <path fill-rule="evenodd"
                                d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="row gx-5 align-item-center mt-3 bg-color">
            <div class="col-12 col-md-6 col-lg-6 ">
                <div class="card">
                    <div class="card-header bg-white d-flex justify-content-between">
                        <h5>Financial report.</h5>
                        <a href="#" class="text-decoration-none bg-info text-white px-2">Edit data</a>
                    </div>
                    <div class="card-body">
                        <canvas class="pb-4" id="finance_report"></canvas>
                    </div>
                </div>

            </div>
            <div class="col-12 col-md-6 col-lg-6 ">
                <div class="card">
                    <div class="card-header bg-white">
                        <h5>Revenues by type of service.</h5>
                    </div>
                    <div class="card-body">
                        <canvas class="pb-4" id="services"></canvas>
                    </div>
                </div>

            </div>
        </div>
        <div class="row align-item-center mt-3 bg-color">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header bg-white d-flex justify-content-between">
                        <h5>Outstanding invoices.</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-md-10 col-lg-10 py-3 d-flex justify-content-between">
                                <div class="input-icons position-relative d-flex align-items-center">
                                    <i class="fas  fa-search position-absolute translate-bottom mt-2 px-  text-start  text-secondary"
                                        style="padding-left:21px; padding-bottom:6px;"></i>
                                    <input class="form-control form-control-sm w-100 mx-2 text-nowrap px-5"
                                        id="searchInput" placeholder="Invoice number / Service …">
                                </div>
                                <button type="button" class="btn btn-sm btn-white border border-dark px-2">
                                    Add filter <i class="fas fa-bars mr-3"></i>
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-10 col-lg-10 py-3 d-flex justify-content-between">
                                <table class="table table-borderless table-responsive">
                                    <thead>
                                        <tr>
                                            <th scope="col">Invoice no.</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Specialist</th>
                                            <th scope="col">Patient</th>
                                            <th scope="col">Treatment</th>
                                            <th scope="col">Insurance</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Payment</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1234</td>
                                            <td>12/07/2023</td>
                                            <td>Praticien</td>
                                            <td>
                                                Patient name
                                            </td>
                                            <td>
                                                Treatment
                                            </td>
                                            <td>
                                                Private
                                            </td>
                                            <td>CHF XXXX.-</td>
                                            <td><button type="button"
                                                    class="btn btn-sm btn-outline-danger bg-white text-danger">Unpaid</button>
                                            </td>
                                            <td><button type="button"
                                                    class="btn btn-sm btn-info bg-info text-white rounded-pill px-2">Payment
                                                    reminder</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1234</td>
                                            <td>12/07/2023</td>
                                            <td>Praticien</td>
                                            <td>
                                                Patient name
                                            </td>
                                            <td>
                                                Treatment
                                            </td>
                                            <td>
                                                Private
                                            </td>
                                            <td>CHF XXXX.-</td>
                                            <td><button type="button"
                                                    class="btn btn-sm btn-outline-danger bg-white text-danger">Unpaid</button>
                                            </td>
                                            <td><button type="button"
                                                    class="btn btn-sm btn-info bg-info text-white rounded-pill px-2">Payment
                                                    reminder</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1234</td>
                                            <td>12/07/2023</td>
                                            <td>Praticien</td>
                                            <td>
                                                Patient name
                                            </td>
                                            <td>
                                                Treatment
                                            </td>
                                            <td>
                                                Private
                                            </td>
                                            <td>CHF XXXX.-</td>
                                            <td><button type="button"
                                                    class="btn btn-sm btn-outline-danger bg-white text-danger">Unpaid</button>
                                            </td>
                                            <td><button type="button"
                                                    class="btn btn-sm btn-info bg-info text-white rounded-pill px-2">Payment
                                                    reminder</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1234</td>
                                            <td>12/07/2023</td>
                                            <td>Praticien</td>
                                            <td>
                                                Patient name
                                            </td>
                                            <td>
                                                Treatment
                                            </td>
                                            <td>
                                                Private
                                            </td>
                                            <td>CHF XXXX.-</td>
                                            <td><button type="button"
                                                    class="btn btn-sm btn-outline-danger bg-white text-danger">Unpaid</button>
                                            </td>
                                            <td><button type="button"
                                                    class="btn btn-sm btn-info bg-info text-white rounded-pill px-2">Payment
                                                    reminder</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1234</td>
                                            <td>12/07/2023</td>
                                            <td>Praticien</td>
                                            <td>
                                                Patient name
                                            </td>
                                            <td>
                                                Treatment
                                            </td>
                                            <td>
                                                Private
                                            </td>
                                            <td>CHF XXXX.-</td>
                                            <td><button type="button"
                                                    class="btn btn-sm btn-outline-danger bg-white text-danger">Unpaid</button>
                                            </td>
                                            <td><button type="button"
                                                    class="btn btn-sm btn-info bg-info text-white rounded-pill px-2">Payment
                                                    reminder</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1234</td>
                                            <td>12/07/2023</td>
                                            <td>Praticien</td>
                                            <td>
                                                Patient name
                                            </td>
                                            <td>
                                                Treatment
                                            </td>
                                            <td>
                                                Private
                                            </td>
                                            <td>CHF XXXX.-</td>
                                            <td><button type="button"
                                                    class="btn btn-sm btn-outline-danger bg-white text-danger">Unpaid</button>
                                            </td>
                                            <td><button type="button"
                                                    class="btn btn-sm btn-info bg-info text-white rounded-pill px-2">Payment
                                                    reminder</button>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>

                            </div>

                        </div>
                        <div class=" row bg-white d-flex justify-content-end py-1">
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
                </div>

            </div>
        </div>
        <div class="row align-item-center mt-3 bg-color">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header bg-white d-flex justify-content-between">
                        <h5>Billing files.</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-md-10 col-lg-10 py-3 d-flex justify-content-between">
                                <div class="input-icons position-relative d-flex align-items-center">
                                    <i class="fas  fa-search position-absolute translate-bottom mt-2 px-  text-start  text-secondary"
                                        style="padding-left:21px; padding-bottom:6px;"></i>
                                    <input class="form-control form-control-sm w-100 mx-2 text-nowrap px-5"
                                        id="searchInput" placeholder="Search for a consultation …">
                                </div>
                                <div>
                                    <small class="bg-light px-4">Last 7 days X </small> <button type="button"
                                        class="btn btn-sm btn-white border border-dark px-2"> Add filter <i
                                            class="fas fa-bars mr-3"></i>
                                    </button>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-10 col-lg-10 py-3 ">
                                <table class="table table-borderless table-responsive  col-lg-12">
                                    <thead>
                                        <tr>
                                            <th class="text-nowrap">Patient</th>
                                            <th class="text-nowrap">Specialist</th>
                                            <th class="text-nowrap">Date</th>
                                            <th class="text-nowrap">Treatment</th>
                                            <th class="text-nowrap">Treatment plan</th>
                                            <th class="text-nowrap">Amount</th>
                                            <th class="text-nowrap">Status</th>
                                            <th class="text-nowrap">Next appointment</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Glenn Stanley</td>
                                            <td>Dr.Daniel Soufi</td>
                                            <td>12 juillet 2023</td>
                                            <td>Ongoing treatment</td>
                                            <td>12 months</td>
                                            <td>CHF XXXX.-</td>
                                            <td>Not invoiced</td>
                                            <td>July 12th 2023</td>
                                        </tr>
                                        <tr>
                                            <td>Glenn Stanley</td>
                                            <td>Dr.Daniel Soufi</td>
                                            <td>12 juillet 2023</td>
                                            <td>Ongoing treatment</td>
                                            <td>12 months</td>
                                            <td>CHF XXXX.-</td>
                                            <td>Not invoiced</td>
                                            <td>July 12th 2023</td>
                                        </tr>
                                        <tr>
                                            <td>Glenn Stanley</td>
                                            <td>Dr.Daniel Soufi</td>
                                            <td>12 juillet 2023</td>
                                            <td>Ongoing treatment</td>
                                            <td>12 months</td>
                                            <td>CHF XXXX.-</td>
                                            <td>Not invoiced</td>
                                            <td>July 12th 2023</td>
                                        </tr>
                                        <tr>
                                            <td>Glenn Stanley</td>
                                            <td>Dr.Daniel Soufi</td>
                                            <td>12 juillet 2023</td>
                                            <td>Ongoing treatment</td>
                                            <td>12 months</td>
                                            <td>CHF XXXX.-</td>
                                            <td>Not invoiced</td>
                                            <td>July 12th 2023</td>
                                        </tr>
                                        <tr>
                                            <td>Glenn Stanley</td>
                                            <td>Dr.Daniel Soufi</td>
                                            <td>12 juillet 2023</td>
                                            <td>Ongoing treatment</td>
                                            <td>12 months</td>
                                            <td>CHF XXXX.-</td>
                                            <td>Not invoiced</td>
                                            <td>July 12th 2023</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                        <div class=" row bg-white d-flex justify-content-end py-1">
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
                </div>

            </div>
        </div>
        <div class="row align-item-center mt-3 bg-color">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header bg-white d-flex justify-content-between">
                        <h5>Refund and adjustment.</h5>
                        <button class="btn btn-sm btn-info text-white">Add a new entry</button>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-md-10 col-lg-10 py-3 d-flex justify-content-between">
                                <div class="input-icons position-relative d-flex align-items-center">
                                </div>
                                <div>
                                    <button type="button" class="btn btn-sm btn-white border border-dark px-2"> Add
                                        filter <i class="fas fa-bars mr-3"></i>
                                    </button>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-10 col-lg-10 py-3 d-flex justify-content-between">
                                <table class="table table-borderless table-responsive">
                                    <thead>
                                        <tr>
                                            <th scope="col">Invoice no.</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Specialist</th>
                                            <th scope="col">Patient</th>
                                            <th scope="col">Treatment</th>
                                            <th scope="col">Recipient</th>
                                            <th scope="col">Montant</th>
                                            <th scope="col">Reason</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Payment</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1234</td>
                                            <td>12/07/2023</td>
                                            <td>Praticien</td>
                                            <td>
                                                Patient name
                                            </td>
                                            <td>
                                                Treatment
                                            </td>
                                            <td>
                                                Private
                                            </td>
                                            <td>CHF XXXX.-</td>
                                            <td>Lorem ipsum dolor</td>
                                            <td><button
                                                    type="button"class="btn btn-sm btn-outline-danger bg-white text-nowrap text-danger px-4">To
                                                    refund</button>
                                            </td>
                                            <td><button type="button"
                                                    class="btn btn-sm btn-info bg-info text-white rounded-pill px-2">Update</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1234</td>
                                            <td>12/07/2023</td>
                                            <td>Praticien</td>
                                            <td>
                                                Patient name
                                            </td>
                                            <td>
                                                Treatment
                                            </td>
                                            <td>
                                                Private
                                            </td>
                                            <td>CHF XXXX.-</td>
                                            <td>Lorem ipsum dolor</td>
                                            <td><button
                                                    type="button"class="btn btn-sm btn-outline-danger bg-white text-nowrap text-danger px-4">To
                                                    refund</button>
                                            </td>
                                            <td><button type="button"
                                                    class="btn btn-sm btn-info bg-info text-white rounded-pill px-2">Update</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1234</td>
                                            <td>12/07/2023</td>
                                            <td>Praticien</td>
                                            <td>
                                                Patient name
                                            </td>
                                            <td>
                                                Treatment
                                            </td>
                                            <td>
                                                Private
                                            </td>
                                            <td>CHF XXXX.-</td>
                                            <td>Lorem ipsum dolor</td>
                                            <td><button
                                                    type="button"class="btn btn-sm btn-outline-danger bg-white text-nowrap text-danger px-4">To
                                                    refund</button>
                                            </td>
                                            <td><button type="button"
                                                    class="btn btn-sm btn-info bg-info text-white rounded-pill px-2">Update</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1234</td>
                                            <td>12/07/2023</td>
                                            <td>Praticien</td>
                                            <td>
                                                Patient name
                                            </td>
                                            <td>
                                                Treatment
                                            </td>
                                            <td>
                                                Private
                                            </td>
                                            <td>CHF XXXX.-</td>
                                            <td>Lorem ipsum dolor</td>
                                            <td><button
                                                    type="button"class="btn btn-sm btn-outline-danger bg-white text-nowrap text-danger px-4">To
                                                    refund</button>
                                            </td>
                                            <td><button type="button"
                                                    class="btn btn-sm btn-info bg-info text-white rounded-pill px-2">Update</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1234</td>
                                            <td>12/07/2023</td>
                                            <td>Praticien</td>
                                            <td>
                                                Patient name
                                            </td>
                                            <td>
                                                Treatment
                                            </td>
                                            <td>
                                                Private
                                            </td>
                                            <td>CHF XXXX.-</td>
                                            <td>Lorem ipsum dolor</td>
                                            <td><button
                                                    type="button"class="btn btn-sm btn-outline-danger bg-white text-nowrap text-danger px-4">To
                                                    refund</button>
                                            </td>
                                            <td><button type="button"
                                                    class="btn btn-sm btn-info bg-info text-white rounded-pill px-2">Update</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1234</td>
                                            <td>12/07/2023</td>
                                            <td>Praticien</td>
                                            <td>
                                                Patient name
                                            </td>
                                            <td>
                                                Treatment
                                            </td>
                                            <td>
                                                Private
                                            </td>
                                            <td>CHF XXXX.-</td>
                                            <td>Lorem ipsum dolor</td>
                                            <td><button
                                                    type="button"class="btn btn-sm btn-outline-danger bg-white text-nowrap text-danger px-4">To
                                                    refund</button>
                                            </td>
                                            <td><button type="button"
                                                    class="btn btn-sm btn-info bg-info text-white rounded-pill px-2">Update</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <div class=" row bg-white d-flex justify-content-end py-1">
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
                </div>

            </div>
        </div>
        <div class="row align-item-center mt-3 bg-color">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header bg-white d-flex justify-content-between">
                        <h5>Staff payments.</h5>
                        <button class="btn btn-sm btn-info text-white">Add a new entry</button>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-md-10 col-lg-10 py-3 d-flex justify-content-between">
                                <div class="input-icons position-relative d-flex align-items-center">
                                </div>
                                <div>
                                    <button type="button" class="btn btn-sm btn-white border border-dark px-2"> Add
                                        filter <i class="fas fa-bars mr-3"></i>
                                    </button>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-10 col-lg-10 py-3 d-flex justify-content-between">
                                <table class="table table-borderless table-responsive">
                                    <thead>
                                        <tr>
                                            <th scope="col">Date</th>
                                            <th scope="col">Specialist</th>
                                            <th scope="col">Salary type</th>
                                            <th scope="col">Sales</th>
                                            <th scope="col">Note</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>12/07/2023</td>
                                            <td>Praticien</td>
                                            <td>Fixed salary</td>
                                            <td>
                                                Sales : CHF XXXX.-
                                                Invoiced : CHF XXXX.-
                                            </td>
                                            <td>
                                                CHF XXXX.-
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>12/07/2023</td>
                                            <td>Praticien</td>
                                            <td>Fixed salary</td>
                                            <td>
                                                Sales : CHF XXXX.-
                                                Invoiced : CHF XXXX.-
                                            </td>
                                            <td>
                                                CHF XXXX.-
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>12/07/2023</td>
                                            <td>Praticien</td>
                                            <td>Fixed salary</td>
                                            <td>
                                                Sales : CHF XXXX.-
                                                Invoiced : CHF XXXX.-
                                            </td>
                                            <td>
                                                CHF XXXX.-
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>12/07/2023</td>
                                            <td>Praticien</td>
                                            <td>Fixed salary</td>
                                            <td>
                                                Sales : CHF XXXX.-
                                                Invoiced : CHF XXXX.-
                                            </td>
                                            <td>
                                                CHF XXXX.-
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>12/07/2023</td>
                                            <td>Praticien</td>
                                            <td>Fixed salary</td>
                                            <td>
                                                Sales : CHF XXXX.-
                                                Invoiced : CHF XXXX.-
                                            </td>
                                            <td>
                                                CHF XXXX.-
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>12/07/2023</td>
                                            <td>Praticien</td>
                                            <td>Fixed salary</td>
                                            <td>
                                                Sales : CHF XXXX.-
                                                Invoiced : CHF XXXX.-
                                            </td>
                                            <td>
                                                CHF XXXX.-
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <div class=" row bg-white d-flex justify-content-end py-1">
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
                </div>

            </div>
        </div>
        <div class="row align-item-center mt-3 bg-color">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header bg-white d-flex justify-content-between">
                        <h5>Invoice codes.</h5>
                        <button class="btn btn-sm btn-info text-white">Add a new entry</button>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-md-10 col-lg-10 py-3 d-flex justify-content-between">
                                <div class="input-icons position-relative d-flex align-items-center">
                                </div>
                                <div>
                                    <button type="button" class="btn btn-sm btn-white border border-dark px-2"> Add
                                        filter <i class="fas fa-bars mr-3"></i>
                                    </button>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-10 col-lg-10 py-3 ">
                                <table class="table table-borderless table-responsive">
                                    <thead>
                                        <tr>
                                            <th scope="col">Date</th>
                                            <th scope="col">Code</th>
                                            <th scope="col">Service</th>
                                            <th scope="col">Group</th>
                                            <th scope="col">Tarif</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>12/07/2023</td>
                                            <td>1234</td>
                                            <td>
                                                <div class="btn-group">
                                                    <button
                                                        class="btn btn-outline-dark bg-white text-dark btn-sm dropdown-toggle"
                                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        Services
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
                                                                here</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                Group code
                                            </td>
                                            <td>
                                                CHF XXXX.-
                                            </td>
                                            <td> <a
                                                    class="btn btn-sm mx-2 text-dark bg-white text-decoration-none text-nowrap  px-4 py-2"><i
                                                        class="fas fa-pencil-alt pr-1"></i>Edit
                                                </a>
                                                <a
                                                    class="btn btn-sm mx-2 text-danger bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                    X Delete
                                                </a>
                                            </td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>12/07/2023</td>
                                            <td>1234</td>
                                            <td>
                                                <div class="btn-group">
                                                    <button
                                                        class="btn btn-outline-dark bg-white text-dark btn-sm dropdown-toggle"
                                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        Services
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
                                                                here</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                Group code
                                            </td>
                                            <td>
                                                CHF XXXX.-
                                            </td>
                                            <td> <a
                                                    class="btn btn-sm mx-2 text-dark bg-white text-decoration-none text-nowrap  px-4 py-2"><i
                                                        class="fas fa-pencil-alt pr-1"></i>Edit
                                                </a>
                                                <a
                                                    class="btn btn-sm mx-2 text-danger bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                    X Delete
                                                </a>
                                            </td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>12/07/2023</td>
                                            <td>1234</td>
                                            <td>
                                                <div class="btn-group">
                                                    <button
                                                        class="btn btn-outline-dark bg-white text-dark btn-sm dropdown-toggle"
                                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        Services
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
                                                                here</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                Group code
                                            </td>
                                            <td>
                                                CHF XXXX.-
                                            </td>
                                            <td> <a
                                                    class="btn btn-sm mx-2 text-dark bg-white text-decoration-none text-nowrap  px-4 py-2"><i
                                                        class="fas fa-pencil-alt pr-1"></i>Edit
                                                </a>
                                                <a
                                                    class="btn btn-sm mx-2 text-danger bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                    X Delete
                                                </a>
                                            </td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>12/07/2023</td>
                                            <td>1234</td>
                                            <td>
                                                <div class="btn-group">
                                                    <button
                                                        class="btn btn-outline-dark bg-white text-dark btn-sm dropdown-toggle"
                                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        Services
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
                                                                here</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                Group code
                                            </td>
                                            <td>
                                                CHF XXXX.-
                                            </td>
                                            <td> <a
                                                    class="btn btn-sm mx-2 text-dark bg-white text-decoration-none text-nowrap  px-4 py-2"><i
                                                        class="fas fa-pencil-alt pr-1"></i>Edit
                                                </a>
                                                <a
                                                    class="btn btn-sm mx-2 text-danger bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                    X Delete
                                                </a>
                                            </td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>12/07/2023</td>
                                            <td>1234</td>
                                            <td>
                                                <div class="btn-group">
                                                    <button
                                                        class="btn btn-outline-dark bg-white text-dark btn-sm dropdown-toggle"
                                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        Services
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
                                                                here</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                Group code
                                            </td>
                                            <td>
                                                CHF XXXX.-
                                            </td>
                                            <td> <a
                                                    class="btn btn-sm mx-2 text-dark bg-white text-decoration-none text-nowrap  px-4 py-2"><i
                                                        class="fas fa-pencil-alt pr-1"></i>Edit
                                                </a>
                                                <a
                                                    class="btn btn-sm mx-2 text-danger bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                    X Delete
                                                </a>
                                            </td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>12/07/2023</td>
                                            <td>1234</td>
                                            <td>
                                                <div class="btn-group">
                                                    <button
                                                        class="btn btn-outline-dark bg-white text-dark btn-sm dropdown-toggle"
                                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        Services
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
                                                                here</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                Group code
                                            </td>
                                            <td>
                                                CHF XXXX.-
                                            </td>
                                            <td> <a
                                                    class="btn btn-sm mx-2 text-dark bg-white text-decoration-none text-nowrap  px-4 py-2"><i
                                                        class="fas fa-pencil-alt pr-1"></i>Edit
                                                </a>
                                                <a
                                                    class="btn btn-sm mx-2 text-danger bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                    X Delete
                                                </a>
                                            </td>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class=" row bg-white d-flex justify-content-end py-1">
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
                </div>
            </div>
        </div>
    </div>
@endsection