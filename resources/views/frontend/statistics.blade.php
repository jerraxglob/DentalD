@extends('frontend.partials.main')
@section('content')
    <div class="container mt-3">
        <div class="row p-1 d-flex align-items-center justify-content-center rounded mt-3 bg-white">
            <div class="col-md-3 col-lg-3">
                <h5 class="text-nowrap px-2 py-2 ">Statistics & Financial report</h5>
                <small class="px-2 text-muted font-12">Data for CHD clinic</small>
            </div>
            <div class=" col-12 col-md-3 col-lg-3 text-center mt-2">
                <button class="btn btn-sm css-primary-btn mb-2"><i class="fas fa-file text-white px-2"></i>Export</button>
                <button class="btn btn-sm css-primary-btn me-2 mb-2"><i class="fas fa-print text-white px-2"></i>Print
                    report</button>
            </div>
            <div class=" col-12 col-md-2 col-lg-2 text-center">
                <div class="btn-group">
                    <button class="btn btn-white btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user"></i> Every specialist
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
            <div class=" d-flex col-12 col-md-2 col-lg-2 text-center align-items-center">
                <span class="px-1">Period</span>
                <div class=" px-1 btn-group">
                    <button class="btn btn-white border px-2 border-dark btn-sm dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="fas fa-calendar-alt"></i> Last 6 months
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
            <div class=" d-flex col-12 col-md-2 col-lg-2 text-center">
                <span class="px-2 d-flex align-items-center"> Vs </span>
                <div class="btn-group px-1">
                    <button class="btn btn-white border border-dark btn-sm dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="fas fa-calendar-alt"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row align-items-center mt-3 bg-white">
            <div class=" col-12 col-md-4 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><b>Income.</b></h5>
                        <strong class="card-text fs-2">CHF 100 000.-</strong><br>
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-success" width="16" height="16"
                            fill="currentColor" class="bi bi-arrow-up-right py-1" viewBox="0 0 17 16">
                            <path fill-rule="evenodd"
                                d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z" />
                        </svg>
                        <span class="text-success py-1">+ 3.49% compared to the period</span> <br>

                    </div>
                </div>
            </div>
            <div class=" col-12 col-md-4 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><b>Spending.</b></h5>
                        <strong class="card-text fs-2">CHF 20 000.-</strong><br>
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-success" width="16" height="16"
                            fill="currentColor" class="bi bi-arrow-up-right py-1" viewBox="0 0 17 16">
                            <path fill-rule="evenodd"
                                d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z" />
                        </svg>
                        <span class="text-success py-1">+ 3.49% compared to the period</span> <br>
                    </div>
                </div>
            </div>
            <div class=" col-12 col-md-4 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><b>Number of patient.</b></h5>
                        <strong class="card-text fs-2">CHF 20 000.-</strong><br>
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-success" width="16" height="16"
                            fill="currentColor" class="bi bi-arrow-up-right py-1" viewBox="0 0 17 16">
                            <path fill-rule="evenodd"
                                d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z" />
                        </svg>
                        <span class="text-success py-1">+ 3.49% compared to the period</span> <br>
                    </div>
                </div>
            </div>

        </div>
        <div class="row align-items-center mt-3 bg-white">
            <div class=" col-12 col-md-3 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><b class="text-nowrap">Number of
                                appointment.</b></h5>
                        <strong class="card-text fs-2">109 <i
                                class="fas px-3 fa-calendar-alt text-muted"></i></strong><br>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-arrow-down-right text-danger" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M14 13.5a.5.5 0 0 1-.5.5h-6a.5.5 0 0 1 0-1h4.793L2.146 2.854a.5.5 0 1 1 .708-.708L13 12.293V7.5a.5.5 0 0 1 1 0z" />
                                </svg>
                        <span class="text-danger text-nowrap py-1">-30 compared to the period</span> <br>
                    </div>
                </div>
            </div>
            <div class=" col-12 col-md-3 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-nowrap"><b>Average appointment time</b></h5>
                        <strong class="card-text fs-2">70 min<i class="fas px-3 fa-clock text-muted"></i>
                        </strong><br>
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-success" width="16" height="16"
                            fill="currentColor" class="bi bi-arrow-up-right py-1" viewBox="0 0 17 16">
                            <path fill-rule="evenodd"
                                d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z" />
                        </svg>
                        <span class="text-success text-nowrap py-1">+ 8 compared to the period</span> <br>
                    </div>
                </div>
            </div>
            <div class=" col-12 col-md-3 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title text-nowrap"><b>Number of appointments cancelled.</b>
                        </h6>
                        <strong class="card-text fs-2">30 <i class="fas px-3 fa-times text-muted"></i>
                        </strong><br>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-arrow-down-right text-danger" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M14 13.5a.5.5 0 0 1-.5.5h-6a.5.5 0 0 1 0-1h4.793L2.146 2.854a.5.5 0 1 1 .708-.708L13 12.293V7.5a.5.5 0 0 1 1 0z" />
                        </svg>
                        <span class="text-danger text-nowrap py-1">-10 compared to the period</span> <br>
                    </div>
                </div>
            </div>
            <div class=" col-12 col-md-3 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-nowrap"><b>Occupancy
                                rate.</b></h5>
                        <strong class="card-text fs-2">80% <i class="fas fa-chart-bar "></i>
                        </strong><br>
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-success" width="16" height="16"
                            fill="currentColor" class="bi bi-arrow-up-right py-1" viewBox="0 0 17 16">
                            <path fill-rule="evenodd"
                                d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z" />
                        </svg>
                        <span class="text-success py-1 text-nowrap">+8 compared to the period</span> <br>
                    </div>
                </div>
            </div>

        </div>
        <div class="row align-item-center mt-3 bg-white">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header bg-white">
                        <h5>Sales</h5>
                    </div>
                    <div class="card-body">
                        <canvas class="pb-4" id="sales_Chart"></canvas>
                    </div>
                </div>

            </div>
        </div>
        <div class="row align-item-center mt-3  bg-white">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header bg-white">
                        <h5>Breakdown of sales by treatment.</h5>
                    </div>
                    <div class="card-body">
                        <canvas class="pb-4" id="sales_by_treatment"></canvas>
                    </div>
                </div>

            </div>
        </div>
        <div class="row align-item-center mt-3 bg-white">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header bg-white d-flex justify-content-between">
                        <h5>Productivity.</h5>
                        <button type="button" class="btn btn-sm btn-white border border-dark px-2">
                            Add filter <i class="fas fa-bars mr-3"></i>
                        </button>
                    </div>
                    <div class="card-body">
                        <table class="table table-responsive table-borderless table">
                            <thead>
                                <tr class="">
                                    <th scope="col">ID</th>
                                    <th scope="col">Specialist</th>
                                    <th scope="col">Appointment</th>
                                    <th scope="col">Missed</th>
                                    <th scope="col">Occupancy rate</th>
                                    <th scope="col">Average sales</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#1ied8n2</td>
                                    bg-whiteem ip bg-white si amet</td>
                                    <td>320</td>
                                    <td>
                                        320
                                    </td>
                                    <td>
                                        60%
                                    </td>
                                    <td>
                                        1000

                                </tr>
                                <tr>
                                    <td>#1ied8n2</td>
                                    <td>Lorem ipsum dolor si amet</td>
                                    <td>320</td>
                                    <td>
                                        320
                                    </td>
                                    <td>
                                        60%
                                    </td>
                                    <td>
                                        1000

                                </tr>
                                <tr>
                                    <td>#1ied8n2</td>
                                    <td>Lorem ipsum dolor si amet</td>
                                    <td>320</td>
                                    <td>
                                        320
                                    </td>
                                    <td>
                                        60%
                                    </td>
                                    <td>
                                        1000

                                </tr>
                                <tr>
                                    <td>#1ied8n2</td>
                                    <td>Lorem ipsum dolor si amet</td>
                                    <td>320</td>
                                    <td>
                                        320
                                    </td>
                                    <td>
                                        60%
                                    </td>
                                    <td>
                                        1000

                                </tr>
                                <tr>
                                    <td>#1ied8n2</td>
                                    <td>Lorem ipsum dolor si amet</td>
                                    <td>320</td>
                                    <td>
                                        320
                                    </td>
                                    <td>
                                        60%
                                    </td>
                                    <td>
                                        1000

                                </tr>
                                <tr>
                                    <td>#1ied8n2</td>
                                    <td>Lorem ipsum dolor si amet</td>
                                    <td>320</td>
                                    <td>
                                        320
                                    </td>
                                    <td>
                                        60%
                                    </td>
                                    <td>
                                        1000

                                </tr>
                                <tr>
                                    <td>#1ied8n2</td>
                                    <td>Lorem ipsum dolor si amet</td>
                                    <td>320</td>
                                    <td>
                                        320
                                    </td>
                                    <td>
                                        60%
                                    </td>
                                    <td>
                                        1000

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
        <div class="row gx-5 align-item-center mt-3 bg-white">
            <div class="col-12 col-md-6 col-lg-6 ">
                <div class="card">
                    <div class="card-header bg-white">
                        <h5>Rapport de stock.</h5>
                    </div>
                    <div class="card-body">
                        <canvas class="pb-4" id="re_de_stock"></canvas>
                    </div>
                </div>

            </div>
            <div class="col-12 col-md-6 col-lg-6 ">
                <div class="card">
                    <div class="card-header bg-white">
                        <h5>Distribution by category.</h5>
                    </div>
                    <div class="card-body">
                        <canvas class="pb-4" id="d_by_cate"></canvas>
                    </div>
                </div>

            </div>
        </div>
        <div class="row align-item-center mt-3 bg-white">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header bg-white d-flex justify-content-between">
                        <h5>Most popular items.</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-borderless table-responsive">
                            <thead>
                                <tr>
                                    <th scope="col">Reference</th>
                                    <th scope="col">Product name</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Supplier</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Costs</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#1ied8n2</td>
                                    <td>Lorem ipsum dolor si amet</td>
                                    <td>Lorem ipsum dolor si amet</td>
                                    <td>
                                        Lorem ipsum dolor si amet
                                    </td>
                                    <td>
                                        1239
                                    </td>
                                    <td>
                                        1239
                                    </td>
                                </tr>
                                <tr>
                                    <td>#1ied8n2</td>
                                    <td>Lorem ipsum dolor si amet</td>
                                    <td>Lorem ipsum dolor si amet</td>
                                    <td>
                                        Lorem ipsum dolor si amet
                                    </td>
                                    <td>
                                        1239
                                    </td>
                                    <td>
                                        1239
                                    </td>
                                </tr>
                                <tr>
                                    <td>#1ied8n2</td>
                                    <td>Lorem ipsum dolor si amet</td>
                                    <td>Lorem ipsum dolor si amet</td>
                                    <td>
                                        Lorem ipsum dolor si amet
                                    </td>
                                    <td>
                                        1239
                                    </td>
                                    <td>
                                        1239
                                    </td>
                                </tr>
                                <tr>
                                    <td>#1ied8n2</td>
                                    <td>Lorem ipsum dolor si amet</td>
                                    <td>Lorem ipsum dolor si amet</td>
                                    <td>
                                        Lorem ipsum dolor si amet
                                    </td>
                                    <td>
                                        1239
                                    </td>
                                    <td>
                                        1239
                                    </td>
                                </tr>
                                <tr>
                                    <td>#1ied8n2</td>
                                    <td>Lorem ipsum dolor si amet</td>
                                    <td>Lorem ipsum dolor si amet</td>
                                    <td>
                                        Lorem ipsum dolor si amet
                                    </td>
                                    <td>
                                        1239
                                    </td>
                                    <td>
                                        1239
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
        <div class="row gx-5 align-item-center mt-3 bg-white">
            <div class="col-12 col-md-6 col-lg-6 ">
                <div class="card">
                    <div class="card-header bg-white">
                        <h5>The most common treatments</h5>
                    </div>
                    <div class="card-body">
                        <canvas class="pb-4" id="comm_treat"></canvas>
                    </div>
                </div>

            </div>
            <div class="col-12 col-md-6 col-lg-6 ">
                <div class="card">
                    <div class="card-header bg-white">
                        <h5>Demographic distribution.</h5>
                    </div>
                    <div class="card-body">
                        <canvas class="pb-4" id="demo_dis"></canvas>
                    </div>
                </div>

            </div>
        </div>
        <div class="row align-items-center mt-3 bg-white">
            <div class=" col-12 col-md-4 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><b>Patients undergoing treatment.</b></h5>
                        <strong class="card-text fs-2">1 000</strong><br>
                        <span class="text-success">+ 3.49% over the period</span> <br>
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-success" width="23" height="23"
                            fill="currentColor" class="bi bi-arrow-up-right py-1" viewBox="0 0 17 16">
                            <path fill-rule="evenodd"
                                d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class=" col-12 col-md-4 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><b>Patients with appointment reminders.</b></h5>
                        <strong class="card-text fs-2">650</strong><br>
                        <span class="text-success py-1">+ 3.49% over the period</span> <br>
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-success" width="23" height="23"
                            fill="currentColor" class="bi bi-arrow-up-right py-1" viewBox="0 0 17 16">
                            <path fill-rule="evenodd"
                                d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class=" col-12 col-md-4 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><b>Walk-in patients.</b></h5>
                        <strong class="card-text fs-2">350</strong><br>
                        <span class="text-success py-1">+ 3.49% over the period</span> <br>
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-success" width="23" height="23"
                            fill="currentColor" class="bi bi-arrow-up-right py-1" viewBox="0 0 17 16">
                            <path fill-rule="evenodd"
                                d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z" />
                        </svg>
                    </div>
                </div>
            </div>

        </div>
        <div class="row gx-5 align-item-center mt-3 bg-white">
            <div class="col-12 col-md-6 col-lg-6 ">
                <div class="card">
                    <div class="card-header bg-white">
                        <h5>Invoice.</h5>
                    </div>
                    <div class="card-body">
                        <canvas class="pb-4" id="invoive"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6 ">
                <div class="card">
                    <div class="card-header bg-white">
                        <h5>Payment deadlines.</h5>
                    </div>
                    <div class="card-body">
                        <canvas class="pb-4" id="pay_deadline"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
