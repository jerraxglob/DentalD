@extends('frontend.partials.main')
@section('content')
    <div class="container mt-3">
        <div class="row  mt-3 bg-white p-3 rounded-3 align-items-center">
            <div class="col-md-3 col-lg-3   d-flex  justify-content-start align-items-center">
                <div>
                    <h5 class="text-nowrap ">Statistics & Financial report</h5>
                    <small class=" text-muted font-12 p-0">Data for CHD clinic</small>
                </div>

            </div>
            <div class="col-12 col-md-2 col-lg-2  d-flex justify-content-between ">
                <button class="btn btn-sm   css-primary-btn "><i class="fas fa-file text-white px-1 "></i>Export</button>
                <button class="btn btn-sm  css-primary-btn "><i class="fas fa-print text-white px-1 "></i>Print
                    report</button>
            </div>
            <div class="col-12 col-md-3 col-lg-3 text-center">
                <div class="dropdown">
                    <button class="btn btn-sm dropdown-toggle custom-no-outline" type="button" id="dropdownMenuButton"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-person" viewBox="0 0 16 16">
                            <path
                                d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664z" />
                        </svg> Every specialist
                        <i class="fas fa-angle-down thin-arrow p-3"></i>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item" href="#">Item 1</a></li>
                        <li><a class="dropdown-item" href="#">Item 2</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4 d-flex justify-content-between text-center align-items-center">
                <span class="">Period</span>
                <div class=" btn-group">
                    <button
                        class="btn btn-white p-0  d-flex justify-content-start border btn-custom border-dark btn-sm dropdown-toggle"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class=" fas px-1  fa-calendar-alt"></i> Last 6 months
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <hr class="dropdown-divider">
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <hr class="dropdown-divider">
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>

                <span> Vs </span>

                <div class="btn-group">
                    <button class="btn btn-white btn-custom border border-dark btn-sm dropdown-toggle"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class=" float-start fas fa-calendar-alt"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row align-items-center  rounded-3 d-flex justify-content-between mt-3  ">
            <div class=" col-12 col-md-4  col-lg-4  ">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><b>Income.</b></h5>
                        <span class="card-text fs-2 stats-heading">CHF 100 000.-</span><br>
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-success" width="16" height="16"
                            fill="currentColor" class="bi bi-arrow-up-right py-1" viewBox="0 0 17 16">
                            <path fill-rule="evenodd"
                                d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z" />
                        </svg>
                        <span class="text-success py-1">+ 3.49% compared to the period</span> <br>

                    </div>
                </div>
            </div>
            <div class=" col-12 col-md-4 col-lg-4 ">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><b>Spending.</b></h5>
                        <span class="card-text fs-2 stats-heading">CHF 20 000.-</span><br>
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
                        <span class="card-text fs-2 stats-heading">CHF 20 000.-</span><br>
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
        <div class="row align-items-center mt-3">
            <div class=" col-12 col-md-3 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><b class="">Number of
                                appointment.</b></h5>
                        <span class="card-text fs-2 stats-heading">109 <i
                                class="fas px-3 fa-calendar-alt text-muted"></i></span><br>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-arrow-down-right text-danger" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M14 13.5a.5.5 0 0 1-.5.5h-6a.5.5 0 0 1 0-1h4.793L2.146 2.854a.5.5 0 1 1 .708-.708L13 12.293V7.5a.5.5 0 0 1 1 0z" />
                        </svg>
                        <span class="text-danger py-1">-30 compared to the period</span> <br>
                    </div>
                </div>
            </div>
            <div class=" col-12 col-md-3 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title "><b>Average appointment time</b></h5>
                        <span class="card-text fs-2 stats-heading">70 min<i class="fas px-3 fa-clock text-muted"></i>
                        </span><br>
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
                        <h6 class="card-title"><b>Number of appointments cancelled.</b>
                        </h6>
                        <span class="card-text fs-2 stats-heading">30 <i class="fas px-3 fa-times text-muted"></i>
                        </span><br>
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
                        <span class="card-text fs-2 stats-heading">80% <i class="fas fa-chart-bar "></i>
                        </span><br>
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
        <div class="row align-item-center mt-3 ">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header bg-white">
                        <h5 class="text-dark">Sales</h5>
                    </div>
                    <div class="card-body">
                        <canvas class="pb-4" id="sales_Chart"></canvas>
                    </div>
                </div>

            </div>
        </div>
        <div class="row align-item-center mt-3 ">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header bg-white">
                        <h5 class="text-dark">Breakdown of sales by treatment.</h5>
                    </div>
                    <div class="card-body">
                        <canvas class="pb-4" id="sales_by_treatment"></canvas>
                    </div>
                </div>

            </div>
        </div>
        <div class="row align-item-center mt-3">
            <div class="col-12 col-md-12 col-lg-12 rounded-3">
                <div class="card">
                    <div class="card-header bg-white d-flex justify-content-between custom-card-header">
                        <h5 class="text-dark ">Productivity.</h5>
                        <button type="button" class="btn btn-sm btn-white border border-dark px-2 ">
                            Add filter <i class="fas fa-bars mr-3"></i>
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table ">
                                <thead>
                                    <tr>
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
                                        <td>Lorem ipsum dolor si amet</td>
                                        <td>320</td>
                                        <td>320</td>
                                        <td>60%</td>
                                        <td>1000</td>
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
        </div>
        <div class="row gx-5 align-item-center mt-3">
            <div class="col-12 col-md-6 col-lg-6 ">
                <div class="card">
                    <div class="card-header bg-white">
                        <h5 class="text-dark">Rapport de stock.</h5>
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
        <div class="row align-item-center mt-3">
            <div class="col-12 col-md-12 col-lg-12 rounded-3">
                <div class="card">
                    <div class="card-header bg-white d-flex justify-content-between custom-card-header">
                        <h5 class="text-dark">Most popular items.</h5>
                    </div>
                    <div class="card-body">
                        <table class="table  table-responsive">
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
        <div class="row gx-5 align-item-center mt-3">
            <div class="col-12 col-md-6 col-lg-6 ">
                <div class="card">
                    <div class="card-header bg-white">
                        <h5 class="text-dark">The most common treatments</h5>
                    </div>
                    <div class="card-body">
                        <canvas class="pb-4" id="comm_treat"></canvas>
                    </div>
                </div>

            </div>
            <div class="col-12 col-md-6 col-lg-6 ">
                <div class="card">
                    <div class="card-header bg-white">
                        <h5 class="text-dark">Demographic distribution.</h5>
                    </div>
                    <div class="card-body">
                        <canvas class="pb-4" id="demo_dis"></canvas>
                    </div>
                </div>

            </div>
        </div>
        <div class="row align-items-center mt-3 ">
            <div class=" col-12 col-md-4 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><b>Patients undergoing treatment.</b></h5>
                        <span class="card-text fs-2 stats-heading">1 000</span><br>
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-success" width="16" height="16"
                            fill="currentColor" class="bi bi-arrow-up-right py-1" viewBox="0 0 17 16">
                            <path fill-rule="evenodd"
                                d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z" />
                        </svg>
                        <span class="text-success">+ 3.49% over the period</span> <br>
                    </div>
                </div>
            </div>
            <div class=" col-12 col-md-4 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><b>Patients with appointment reminders.</b></h5>
                        <span class="card-text fs-2 stats-heading">650</span><br>
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-success" width="16" height="16"
                            fill="currentColor" class="bi bi-arrow-up-right py-1" viewBox="0 0 17 16">
                            <path fill-rule="evenodd"
                                d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z" />
                        </svg>
                        <span class="text-success py-1">+ 3.49% over the period</span> <br>
                    </div>
                </div>
            </div>
            <div class=" col-12 col-md-4 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><b>Walk-in patients.</b></h5>
                        <span class="card-text fs-2 stats-heading">350</span><br>
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-success" width="16" height="16"
                            fill="currentColor" class="bi bi-arrow-up-right py-1" viewBox="0 0 17 16">
                            <path fill-rule="evenodd"
                                d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z" />
                        </svg>
                        <span class="text-success py-1">+ 3.49% over the period</span> <br>
                    </div>
                </div>
            </div>

        </div>
        <div class="row gx-5 align-item-center mt-3">
            <div class="col-12 col-md-6 col-lg-6 ">
                <div class="card">
                    <div class="card-header bg-white">
                        <h5 class="text-dark">Invoice.</h5>
                    </div>
                    <div class="card-body">
                        <canvas class="pb-4" id="invoive"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6 ">
                <div class="card">
                    <div class="card-header bg-white">
                        <h5 class="text-dark">Payment deadlines.</h5>
                    </div>
                    <div class="card-body">
                        <canvas class="pb-4" id="pay_deadline"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
