@extends('frontend.partials.main')
@section('content')
    <div class="container bg-color mt-3 justify-content-between align-items-center py-3">
        <div class="row bg-white d-flex justify-content-between rounded-3 align-items-center">
            <div class="col-md-4">
                <h5 class="text-nowrap px-2 py-2">Statistics & Financial report</h5>
                <small class="text-muted text-nowrap px-2  pb-2">Data for CHD clinic</small>
            </div>

            <div class="col-md-4 text-center">
                <button class="btn btn-sm btn-primary mb-2"><i class="fas fa-file text-white px-2"></i>Export</button>
                <button class="btn btn-sm btn-primary me-2 mb-2"><i class="fas fa-print text-white px-2"></i>Print
                    report</button>
            </div>

            <div class="col-md-4 text-end">
                <div class="btn-group">
                    <button class="btn btn-white border border-dark btn-sm dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="fas fa-user"></i> Every specialist
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>

                <span>Period</span>

                <div class="btn-group">
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

                <span> Vs </span>

                <div class="btn-group">
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

        <div class="row py-3 justify-content-center   align-items-center">
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><b>Income.</b></h5>
                        <strong class="card-text fs-2">CHF 100 000.-</strong><br>
                        <span class="text-success py-1">+ 3.49% compared to the period</span> <br>
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-success" width="23" height="23"
                            fill="currentColor" class="bi bi-arrow-up-right py-1" viewBox="0 0 17 16">
                            <path fill-rule="evenodd"
                                d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z" />
                        </svg>
                    </div>
                </div>

            </div>
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><b>Spending.</b></h5>
                        <strong class="card-text fs-2">CHF 20 000.-</strong><br>
                        <span class="text-success py-1">+ 3.49% compared to the period</span> <br>
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-success" width="23" height="23"
                            fill="currentColor" class="bi bi-arrow-up-right py-1" viewBox="0 0 17 16">
                            <path fill-rule="evenodd"
                                d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z" />
                        </svg>
                    </div>
                </div>

            </div>
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><b>Number of patient.</b></h5>
                        <strong class="card-text fs-2">CHF 20 000.-</strong><br>
                        <span class="text-success py-1">+ 3.49% compared to the period</span> <br>
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-success" width="23" height="23"
                            fill="currentColor" class="bi bi-arrow-up-right text-success py-1" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z" />
                        </svg>
                    </div>
                </div>

            </div>
        </div>
        <div class="row py-3 justify-content-center   align-items-center">
            <div class="col-sm-12 col-md-3 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><b>Number of
                                appointment.</b></h5>
                        <strong class="card-text fs-2">109 <i class="fas px-3 fa-calendar-alt text-muted"></i></strong><br>
                        <span class="text-danger py-1">-30 compared to the period</span> <br>
                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor"
                            class="bi bi-arrow-down-right text-danger" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M14 13.5a.5.5 0 0 1-.5.5h-6a.5.5 0 0 1 0-1h4.793L2.146 2.854a.5.5 0 1 1 .708-.708L13 12.293V7.5a.5.5 0 0 1 1 0z" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><b>Average
                                appointment time</b></h5>
                        <strong class="card-text fs-2">70 min <i class="fas px-3 fa-clock text-muted"></i>

                        </strong><br>
                        <span class="text-success py-1">+ 8mincompared to the period</span> <br>
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-success" width="23" height="23"
                            fill="currentColor" class="bi bi-arrow-up-right py-1" viewBox="0 0 17 16">
                            <path fill-rule="evenodd"
                                d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><b>Number of
                                appointments cancelled.</b></h5>
                        <strong class="card-text fs-2">30 <i class="fas px-3 fa-times text-muted"></i>
                        </strong><br>
                        <span class="text-success py-1">-10compared to the period</span> <br>
                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor"
                            class="bi bi-arrow-down-right text-danger" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M14 13.5a.5.5 0 0 1-.5.5h-6a.5.5 0 0 1 0-1h4.793L2.146 2.854a.5.5 0 1 1 .708-.708L13 12.293V7.5a.5.5 0 0 1 1 0z" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><b>Occupancy
                                rate.</b></h5>
                        <strong class="card-text fs-2">80% <i class="fas fa-chart-bar "></i>
                        </strong><br>
                        <span class="text-success py-1">+ 8mincompared to the period</span> <br>
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-success" width="23" height="23"
                            fill="currentColor" class="bi bi-arrow-up-right py-1" viewBox="0 0 17 16">
                            <path fill-rule="evenodd"
                                d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-4 bg-color">
        <div class="row justify-content-center   align-items-center bg-white">
            <div class="col-sm-12 col-md-2 col-lg-2 "></div>
            <div class="col-sm-12 col-md-8 col-lg-8 py-3">
                <h5>Sales.</h5>
            </div>
            <div class="col-sm-12 col-md-2 col-lg-2"></div>
        </div>
        <div class="row py-5  bg-white justify-content-center   align-items-center">
            <div class="col-sm-12 col-md-2 col-lg-2"></div>

            <div class="col-sm-12 col-md-8 col-lg-8 ">
                <canvas class="pb-4" id="myLineChart"></canvas>
            </div>
            <div class="col-sm-12 col-md-2 col-lg-2"></div>
        </div>
        <br>
        <div class="row bg-white justify-content-center   align-items-center">
            <div class="col-sm-12 col-md-2 col-lg-2 "></div>
            <div class="col-sm-12 col-md-8 col-lg-8 py-3">
                <h5>Breakdown of sales by treatment.</h5>
            </div>
            <div class="col-sm-12 col-md-2 col-lg-2"></div>
        </div>
        <div class="row py-5 bg-white  justify-content-center   align-items-center">
            <div class="col-sm-12 col-md-2 col-lg-2"></div>

            <div class="col-sm-12 col-md-8 col-lg-8 ">
                <canvas class="pb-4" id="barchart"></canvas>
            </div>
            <div class="col-sm-12 col-md-1 col-lg-1"></div>
        </div>
        <br>
        <br>
        <div class="row justify-content-center    align-items-center">
            <div class="col-12 col-md-12 col-lg-12 py-4 rounded-3 d-flex bg-white align-items-center">
                <h5 class="py-2">Productivity.</h5>
            </div>
        </div>

        <div class="row justify-content-center   align-items-center bg-white ">
            <div class=" col-sm-12 col-md-10 col-lg-10  rounded-3  d-flex d-flex justify-content-end ">

            </div>
            <div class="col-sm-12 col-md-2 col-lg-2">
                <button type="button" class="btn btn-sm btn-white border border-dark px-2">
                    Add filter <i class="fas fa-bars mr-3"></i>
                </button>
            </div>
        </div>
        <div class="row justify-content-center   align-items-center">
            <div class="col-md-12 col-lg-12 rounded-3 bg-white">
                <div class="table-responsive">
                    <table class="table table-borderless">
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
        <div class="row bg-color py-4 justify-content-center   align-items-center">
            <div class="col-sm-12 p-3 col-md-6 bg-white col-lg-6 ">
                <strong class="py-2">Rapport de stock.</strong>
                <canvas class="pb-4" id="linechart"></canvas>
            </div>
            <div class="col-sm-12 col-md-1 col-lg-1"></div>
            <div class="col-sm-12 col-md-5 p-3 col-lg-5 bg-white">
                <strong class="py-2">Distribution by category.</strong>
                <canvas class="py-2 pb-4" id="barchart2"></canvas>
            </div>
        </div>
        <div class="row justify-content-center   align-items-center">
            <div class="col-12 py-4 rounded-3 d-flex justify-content-between bg-white align-items-center">
                <h5 class="py-2 px-2">Most popular items.</h5>
            </div>
        </div>
        <div class="row justify-content-center   align-items-center">
            <div class="col-12 gx-5 py-3 rounded-3 bg-white justify-content-center   align-items-center">
                <div class="table-responsive">
                    <table class="table table-borderless">
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
        <div class="row bg-color py-4 justify-content-center   align-items-center">
            <div class="col-sm-12 p-3 col-md-6 bg-white col-lg-6 ">
                <strong class="py-2">The most common treatments.</strong>
                <canvas id="line_chart" class="pb-4"></canvas>
            </div>
            <div class="col-sm-12 col-md-1 col-lg-1"></div>
            <div class="col-sm-12 col-md-5 p-3 col-lg-5 bg-white">
                <strong class="py-2">Demographic distribution.</strong>
                <canvas class="py-2" id="barchart_3" class="pb-4"></canvas>
            </div>
        </div>

        <div class="row py-3 justify-content-center   align-items-center">
            <div class="col-12 col-md-6 bg-white">
                <strong class="py-2">Invoice</strong>
                <canvas id="line_chart1" class="pb-4"></canvas>
            </div>
            <div class="col-12 col-md-1"></div>
            <div class="col-12 col-md-5 bg-white">
                <strong class="py-2">Payment deadlines.</strong>
                <canvas id="line_chart2" class="pb-4"></canvas>
            </div>
        </div>

    </div>
@endsection
