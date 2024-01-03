@extends('frontend.partials.main')
@section('content')
    <div class="container mt-3">
        <div class="row  mt-3 bg-white p-3 rounded-3 align-items-center">
            <div class="col-md-3 col-lg-3   d-flex  justify-content-start align-items-center">
                <div>

                    <h5 class="text-nowrap font-22">Invoicing</h5>
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
                    <button class="btn btn-sm dropdown-toggle custom-no-outline font-16" type="button" id="dropdownMenuButton"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-person" viewBox="0 0 16 16">
                            <path
                                d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664z" />
                        </svg> All specialists
                        <i class="fas fa-angle-down thin-arrow p-3"></i>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item" href="#">Item 1</a></li>
                        <li><a class="dropdown-item" href="#">Item 2</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4 d-flex justify-content-between text-center align-items-center">
                <span class="font-14">Period</span>
                <div class=" btn-group">
                    <button
                        class="btn btn-white p-0  font-14 d-flex justify-content-start border btn-custom border-dark btn-sm dropdown-toggle"
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

                <span class="font-14"> Vs </span>

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
        <div class="row align-items-center mt-3">
            <div class=" col-12 col-md-3 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title py-2 font-14 clr-db">Sales.</h5>
                        <span class="stats-heading-2 fs-2">CHF XXXX.-</span><br>
                        <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-success" width="16" height="16"
                        fill="currentColor" class="bi bi-arrow-up-right " viewBox="0 0 17 16">
                        <path fill-rule="evenodd"
                        d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z" />
                    </svg>
                    <span class="text-success font-10 py-1">3.49% over the period</span> <br>
                        </div>                    </div>
                </div>
            </div>
            <div class=" col-12 col-md-3 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title py-2  font-14 clr-db">Laboratry.</h5>
                        <span class="card-text fs-2 stats-heading-2">CHF XXXX.-</span><br>
                        <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-success" width="16" height="16"
                        fill="currentColor" class="bi bi-arrow-up-right " viewBox="0 0 17 16">
                        <path fill-rule="evenodd"
                        d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z" />
                    </svg>
                    <span class="text-success font-10 py-1">3.49% over the period</span> <br>
                        </div>                    </div>
                </div>
            </div>
            <div class=" col-12 col-md-3 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row  align-item-center">
                            <div class="col d-flex justify-content-between align-item-center">
                                <h5 class="card-title  font-14 clr-db py-2">Salary.</h5>
                                <a href="#" class="text-decoration-none text-info py-2 "><i
                                        class='fas px-1 fa-pencil-alt text-info'></i>Edit percentage</a>
                            </div>
                        </div>
                        <span class="card-text fs-2 stats-heading-2">CHF XXXX.-</span><br>
                        <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-success" width="16" height="16"
                        fill="currentColor" class="bi bi-arrow-up-right " viewBox="0 0 17 16">
                        <path fill-rule="evenodd"
                        d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z" />
                    </svg>
                    <span class="text-success font-10 py-1">3.49% over the period</span> <br>
                        </div>                    </div>
                </div>
            </div>
            <div class=" col-12 col-md-3 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title py-2  font-14 clr-db">Number of patients.</h5>
                        <span class="card-text fs-2 stats-heading-2">XXXX</span><br>
                        <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-success" width="16" height="16"
                        fill="currentColor" class="bi bi-arrow-up-right " viewBox="0 0 17 16">
                        <path fill-rule="evenodd"
                        d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z" />
                    </svg>
                    <span class="text-success font-10 py-1">3.49% over the period</span> <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row gx-5 align-item-center mt-3">
            <div class="col-12 col-md-6 col-lg-6 ">
                <div class="card">
                    <div class="card-header bg-white align-items-center d-flex justify-content-between">
                        <h5 class="font-22 clr-db">Financial report.</h5>
                        <a href="#" class="text-decoration-none css-primary-btn text-white px-2 font-12">Edit data</a>
                    </div>
                    <div class="card-body">
                        <canvas class="pb-4" id="finance_report"></canvas>
                    </div>
                </div>

            </div>
            <div class="col-12 col-md-6 col-lg-6 ">
                <div class="card">
                    <div class="card-header bg-white">
                        <h5 class="font-22 clr-db">Revenues by type of service.</h5>
                    </div>
                    <div class="card-body">
                        <canvas class="pb-4" id="services"></canvas>
                    </div>
                </div>

            </div>
        </div>
        <div class="row align-item-center rounded-3 mt-3">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header bg-white d-flex justify-content-between custom-card-header">
                        <h5 class="font-22 clr-db px-3 pb-4">Outstanding invoices.</h5>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="input-icons position-relative align-items-center">
                                <svg class="fas  fa-search position-absolute translate-bottom  mt-2 px-text-start text-secondar"
                                    style="left:8%" id="Box_1" data-name="Box 1" xmlns="http://www.w3.org/2000/svg"
                                    width="15.012" height="15.012" viewBox="0 0 15.012 15.012">
                                    <g id="Group_1" data-name="Group 1">
                                        <path id="Union"
                                            d="M6.736,0a6.736,6.736,0,1,0,4.338,11.89l2.953,2.953a.577.577,0,0,0,.817-.817L11.89,11.074A6.736,6.736,0,0,0,6.736,0ZM1.155,6.736a5.582,5.582,0,1,1,5.582,5.582A5.582,5.582,0,0,1,1.155,6.736Z"
                                            fill="#8e999a" />
                                    </g>
                                </svg>

                                <input class="form-control mx-2 px-5" id="searchInput" type="text"
                                    id="PatientsearchInput" placeholder="Invoice number / Service …">
                            </div>
                            <button type="button" class="btn btn-sm btn-white border border-dark mr-right">
                                Add filter <i class="fas fa-bars mr-3"></i>
                            </button>
                        </div>
                        <table class="table  table-responsive mt-5">
                            <thead>
                                <tr>
                                    <th scope="col" class="font-14 clr-db fw450">Invoice no.
                                    <svg class="ml-3" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
  <g id="Arrow_Bottom" data-name="Arrow Bottom" transform="translate(-0.146)">
    <rect id="Rectangle_849" data-name="Rectangle 849" width="20" height="20" transform="translate(0.146)" fill="none"/>
    <g id="Group_921" data-name="Group 921" transform="translate(1.85 1.667)">
      <rect id="Rectangle_850" data-name="Rectangle 850" width="16.667" height="16.667" fill="none"/>
      <path id="Vector_22_Stroke_" data-name="Vector 22 (Stroke)" d="M.174.193a.555.555,0,0,1,.842,0L4.167,3.682,7.317.193a.555.555,0,0,1,.842,0,.71.71,0,0,1,0,.932L5.008,4.614a1.111,1.111,0,0,1-1.684,0L.174,1.125A.71.71,0,0,1,.174.193Z" transform="translate(4.167 5.833)" fill="#102940"/>
    </g>
  </g>
</svg>

                                    </th>
                                    <th scope="col"  class="font-14 clr-db fw450">Date 
                                    <svg class="ml-3" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
  <g id="Arrow_Bottom" data-name="Arrow Bottom" transform="translate(-0.146)">
    <rect id="Rectangle_849" data-name="Rectangle 849" width="20" height="20" transform="translate(0.146)" fill="none"/>
    <g id="Group_921" data-name="Group 921" transform="translate(1.85 1.667)">
      <rect id="Rectangle_850" data-name="Rectangle 850" width="16.667" height="16.667" fill="none"/>
      <path id="Vector_22_Stroke_" data-name="Vector 22 (Stroke)" d="M.174.193a.555.555,0,0,1,.842,0L4.167,3.682,7.317.193a.555.555,0,0,1,.842,0,.71.71,0,0,1,0,.932L5.008,4.614a1.111,1.111,0,0,1-1.684,0L.174,1.125A.71.71,0,0,1,.174.193Z" transform="translate(4.167 5.833)" fill="#102940"/>
    </g>
  </g>
</svg>

                                    </th>
                                    <th scope="col"  class="font-14 clr-db fw450">Specialist 
                                    <svg class="ml-3" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
  <g id="Arrow_Bottom" data-name="Arrow Bottom" transform="translate(-0.146)">
    <rect id="Rectangle_849" data-name="Rectangle 849" width="20" height="20" transform="translate(0.146)" fill="none"/>
    <g id="Group_921" data-name="Group 921" transform="translate(1.85 1.667)">
      <rect id="Rectangle_850" data-name="Rectangle 850" width="16.667" height="16.667" fill="none"/>
      <path id="Vector_22_Stroke_" data-name="Vector 22 (Stroke)" d="M.174.193a.555.555,0,0,1,.842,0L4.167,3.682,7.317.193a.555.555,0,0,1,.842,0,.71.71,0,0,1,0,.932L5.008,4.614a1.111,1.111,0,0,1-1.684,0L.174,1.125A.71.71,0,0,1,.174.193Z" transform="translate(4.167 5.833)" fill="#102940"/>
    </g>
  </g>
</svg>

                                    </th>
                                    <th scope="col"  class="font-14 clr-db fw450">Patient </th>
                                    <th scope="col"  class="font-14 clr-db fw450">Treatment </th>
                                    <th scope="col"  class="font-14 clr-db fw450">Insurance </th>
                                    <th scope="col"  class="font-14 clr-db fw450">Amount </th>
                                    <th scope="col"  class="font-14 clr-db fw450">Status 
                                    <svg class="ml-3" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
  <g id="Arrow_Bottom" data-name="Arrow Bottom" transform="translate(-0.146)">
    <rect id="Rectangle_849" data-name="Rectangle 849" width="20" height="20" transform="translate(0.146)" fill="none"/>
    <g id="Group_921" data-name="Group 921" transform="translate(1.85 1.667)">
      <rect id="Rectangle_850" data-name="Rectangle 850" width="16.667" height="16.667" fill="none"/>
      <path id="Vector_22_Stroke_" data-name="Vector 22 (Stroke)" d="M.174.193a.555.555,0,0,1,.842,0L4.167,3.682,7.317.193a.555.555,0,0,1,.842,0,.71.71,0,0,1,0,.932L5.008,4.614a1.111,1.111,0,0,1-1.684,0L.174,1.125A.71.71,0,0,1,.174.193Z" transform="translate(4.167 5.833)" fill="#102940"/>
    </g>
  </g>
</svg>

                                    </th>
                                    <th scope="col"  class="font-14 clr-db fw450">Payment </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="font-14 clr-db">1234</td>
                                    <td class="font-14 clr-db">12/07/2023</td>
                                    <td class="font-14 clr-db">Praticien</td>
                                    <td class="font-14 clr-db">
                                        Patient name
                                    </td>
                                    <td class="font-14 clr-db">
                                        Treatment
                                    </td>
                                    <td class="font-14 clr-db">
                                        Private
                                    </td>
                                    <td class="font-14 clr-db">CHF XXXX.-</td>
                                    <td class="font-14 clr-db"><button type="button"
                                            class="btn btn-sm outline-unpaid bg-white text-danger">Unpaid</button>
                                    </td>
                                    <td class="font-14 clr-db"><button type="button"
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
                                            class="btn btn-sm outline-unpaid bg-white text-danger">Unpaid</button>
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
                                            class="btn btn-sm outline-unpaid bg-white text-danger">Unpaid</button>
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
                                            class="btn btn-sm outline-Overdue bg-white text-danger">Overdue</button>
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
                                            class="btn btn-sm outline-Overdue bg-white text-danger">Overdue</button>
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
                                            class="btn btn-sm outline-unpaid bg-white text-danger">Unpaid</button>
                                    </td>
                                    <td><button type="button"
                                            class="btn btn-sm btn-info bg-info text-white rounded-pill px-2">Payment
                                            reminder</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <nav aria-label="Page navigation ">
                            <ul class="pagination d-flex justify-content-end">
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
                                    </a>
                                </li>
                                <li class="page-item disabled"><a class="page-link" href="#">Page 1/3</a></li>
                                <!-- <li class="page-item"><a class="page-link" href="#">2</a></li> -->
                                <!-- <li class="page-item"><a class="page-link" href="#">3</a></li> -->
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true"><svg style=" transform: rotate(270deg);"
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
        <div class="row align-item-center mt-3">
            <div class="col-12 col-md-12 col-lg-12 rounded-3">
                <div class="card">
                    <div class="card-header bg-white d-flex justify-content-between custom-card-header">
                        <h5 class="font-22 clr-db px-3">Billing files.</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-md-10 col-lg-10 py-3 d-flex justify-content-between">
                                <div class="input-icons position-relative d-flex align-items-center">
                                    <div class="input-icons position-relative align-items-center">
                                        <svg class="fas  fa-search position-absolute translate-bottom  mt-2 px- text-start text-secondar"
                                            style="left: 8%;top: 10%;" id="Box_1" data-name="Box 1"
                                            xmlns="http://www.w3.org/2000/svg" width="15.012" height="15.012"
                                            viewBox="0 0 15.012 15.012">
                                            <g id="Group_1" data-name="Group 1">
                                                <path id="Union"
                                                    d="M6.736,0a6.736,6.736,0,1,0,4.338,11.89l2.953,2.953a.577.577,0,0,0,.817-.817L11.89,11.074A6.736,6.736,0,0,0,6.736,0ZM1.155,6.736a5.582,5.582,0,1,1,5.582,5.582A5.582,5.582,0,0,1,1.155,6.736Z"
                                                    fill="#8e999a" />
                                            </g>
                                        </svg>

                                        <input class="form-control mx-2 px-5" id="searchInput" type="text"
                                            id="PatientsearchInput" placeholder="Search for a consultation …">
                                    </div>
                                </div>
                                <div>
                                    <div class=" pl-3 d-flex align-items-center justify-content-between">
                                        <div
                                            class="ml-auto d-flex gap-3 text-center align-items-center justify-content-between">
                                            <div class="date-range mr-3 text-dark ">
                                                <span>
                                                    Last 7 days
                                                </span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                                    <path
                                                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708" />
                                                </svg>
                                            </div>
                                            <button type="button" class="btn btn-white border border-dark">
                                                Add filter <i class="fas fa-bars mr-3"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <table class="table  table-responsive mt-3 ">
                            <thead>
                                <tr>
                                    <th  class="font-14 clr-db fw450">Patient</th>
                                    <th class="font-14 clr-db fw450">Specialist</th>
                                    <th class="font-14 clr-db fw450">Date
                                    <svg class="ml-3" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
  <g id="Arrow_Bottom" data-name="Arrow Bottom" transform="translate(-0.146)">
    <rect id="Rectangle_849" data-name="Rectangle 849" width="20" height="20" transform="translate(0.146)" fill="none"/>
    <g id="Group_921" data-name="Group 921" transform="translate(1.85 1.667)">
      <rect id="Rectangle_850" data-name="Rectangle 850" width="16.667" height="16.667" fill="none"/>
      <path id="Vector_22_Stroke_" data-name="Vector 22 (Stroke)" d="M.174.193a.555.555,0,0,1,.842,0L4.167,3.682,7.317.193a.555.555,0,0,1,.842,0,.71.71,0,0,1,0,.932L5.008,4.614a1.111,1.111,0,0,1-1.684,0L.174,1.125A.71.71,0,0,1,.174.193Z" transform="translate(4.167 5.833)" fill="#102940"/>
    </g>
  </g>
</svg>

                                    </th>
                                    <th class="font-14 clr-db fw450">Treatment</th>
                                    <th class="font-14 clr-db fw450">Treatment plan</th>
                                    <th class="font-14 clr-db fw450">Amount</th>
                                    <th class="font-14 clr-db fw450">Status
                                    <svg class="ml-3" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
  <g id="Arrow_Bottom" data-name="Arrow Bottom" transform="translate(-0.146)">
    <rect id="Rectangle_849" data-name="Rectangle 849" width="20" height="20" transform="translate(0.146)" fill="none"/>
    <g id="Group_921" data-name="Group 921" transform="translate(1.85 1.667)">
      <rect id="Rectangle_850" data-name="Rectangle 850" width="16.667" height="16.667" fill="none"/>
      <path id="Vector_22_Stroke_" data-name="Vector 22 (Stroke)" d="M.174.193a.555.555,0,0,1,.842,0L4.167,3.682,7.317.193a.555.555,0,0,1,.842,0,.71.71,0,0,1,0,.932L5.008,4.614a1.111,1.111,0,0,1-1.684,0L.174,1.125A.71.71,0,0,1,.174.193Z" transform="translate(4.167 5.833)" fill="#102940"/>
    </g>
  </g>
</svg>

                                    </th>
                                    <th class="font-14 clr-db fw450">Next appointment</th>
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
                        <nav aria-label="Page navigation ">
                            <ul class="pagination d-flex justify-content-end">
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
                                    </a>
                                </li>
                                <li class="page-item disabled"><a class="page-link" href="#">Page 1/3</a></li>
                                <!-- <li class="page-item"><a class="page-link" href="#">2</a></li> -->
                                <!-- <li class="page-item"><a class="page-link" href="#">3</a></li> -->
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true"><svg style=" transform: rotate(270deg);"
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
        <div class="row align-item-center mt-3">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header d-flex mt-3  bg-white d-flex justify-content-between custom-card-header">
                        <h5 class="font-22 clr-db px-3">Refund and adjustment.</h5>
                        <button class="btn btn-sm btn-info text-white  ">Add a new entry</button>
                    </div>
                    <div class="card-header d-flex mt-1  bg-white d-flex justify-content-end custom-card-header">
                        <button type="button" class="btn btn-sm btn-white border border-dark"> Add
                            filter <i class="fas fa-bars mr-3"></i>
                        </button>
                    </div>
                    <div class="card-body">
                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th scope="col" class="font-14 clr-db fw450">Invoice no.</th>
                                    <th scope="col"  class="font-14 clr-db fw450">Date
                                    <svg class="ml-3" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
  <g id="Arrow_Bottom" data-name="Arrow Bottom" transform="translate(-0.146)">
    <rect id="Rectangle_849" data-name="Rectangle 849" width="20" height="20" transform="translate(0.146)" fill="none"/>
    <g id="Group_921" data-name="Group 921" transform="translate(1.85 1.667)">
      <rect id="Rectangle_850" data-name="Rectangle 850" width="16.667" height="16.667" fill="none"/>
      <path id="Vector_22_Stroke_" data-name="Vector 22 (Stroke)" d="M.174.193a.555.555,0,0,1,.842,0L4.167,3.682,7.317.193a.555.555,0,0,1,.842,0,.71.71,0,0,1,0,.932L5.008,4.614a1.111,1.111,0,0,1-1.684,0L.174,1.125A.71.71,0,0,1,.174.193Z" transform="translate(4.167 5.833)" fill="#102940"/>
    </g>
  </g>
</svg>

                                    </th>
                                    <th scope="col"  class="font-14 clr-db fw450">Specialist
                                    <svg class="ml-3" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
  <g id="Arrow_Bottom" data-name="Arrow Bottom" transform="translate(-0.146)">
    <rect id="Rectangle_849" data-name="Rectangle 849" width="20" height="20" transform="translate(0.146)" fill="none"/>
    <g id="Group_921" data-name="Group 921" transform="translate(1.85 1.667)">
      <rect id="Rectangle_850" data-name="Rectangle 850" width="16.667" height="16.667" fill="none"/>
      <path id="Vector_22_Stroke_" data-name="Vector 22 (Stroke)" d="M.174.193a.555.555,0,0,1,.842,0L4.167,3.682,7.317.193a.555.555,0,0,1,.842,0,.71.71,0,0,1,0,.932L5.008,4.614a1.111,1.111,0,0,1-1.684,0L.174,1.125A.71.71,0,0,1,.174.193Z" transform="translate(4.167 5.833)" fill="#102940"/>
    </g>
  </g>
</svg>

                                    </th>
                                    <th scope="col"  class="font-14 clr-db fw450">Patient</th>
                                    <th scope="col"  class="font-14 clr-db fw450">Treatment</th>
                                    <th scope="col"  class="font-14 clr-db fw450">Recipient</th>
                                    <th scope="col"  class="font-14 clr-db fw450">Montant</th>
                                    <th scope="col"  class="font-14 clr-db fw450">Reason</th>
                                    <th scope="col"  class="font-14 clr-db fw450">Status

                                    <svg class="ml-3" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
  <g id="Arrow_Bottom" data-name="Arrow Bottom" transform="translate(-0.146)">
    <rect id="Rectangle_849" data-name="Rectangle 849" width="20" height="20" transform="translate(0.146)" fill="none"/>
    <g id="Group_921" data-name="Group 921" transform="translate(1.85 1.667)">
      <rect id="Rectangle_850" data-name="Rectangle 850" width="16.667" height="16.667" fill="none"/>
      <path id="Vector_22_Stroke_" data-name="Vector 22 (Stroke)" d="M.174.193a.555.555,0,0,1,.842,0L4.167,3.682,7.317.193a.555.555,0,0,1,.842,0,.71.71,0,0,1,0,.932L5.008,4.614a1.111,1.111,0,0,1-1.684,0L.174,1.125A.71.71,0,0,1,.174.193Z" transform="translate(4.167 5.833)" fill="#102940"/>
    </g>
  </g>
</svg>

                                    </th>
                                    <th scope="col"  class="font-14 clr-db fw450">Payment</th>
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
                                            type="button"class="btn btn-sm outline-refund bg-white text-nowrap text-danger px-4">To
                                            refund</button>
                                    </td>
                                    <td><button type="button"
                                            class="btn btn-sm btn-info bg-info text-white rounded-pill px-4">Update</button>
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
                                            type="button"class="btn btn-sm outline-Overdue bg-white text-nowrap text-danger px-4">To
                                            Adjustment</button>
                                    </td>
                                    <td><button type="button"
                                            class="btn btn-sm btn-info bg-info text-white rounded-pill px-4">Update</button>
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
                                            type="button"class="btn btn-sm outline-unpaid bg-white text-nowrap text-danger px-4">To
                                            Credit</button>
                                    </td>
                                    <td><button type="button"
                                            class="btn btn-sm btn-info bg-info text-white rounded-pill px-4">Update</button>
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
                                            class="btn btn-sm btn-info bg-info text-white rounded-pill px-4">Update</button>
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
                                            class="btn btn-sm btn-info bg-info text-white rounded-pill px-4">Update</button>
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
                                            class="btn btn-sm btn-info bg-info text-white rounded-pill px-4">Update</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <nav aria-label="Page navigation ">
                            <ul class="pagination d-flex justify-content-end">
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
                                    </a>
                                </li>
                                <li class="page-item disabled"><a class="page-link" href="#">Page 1/3</a></li>
                                <!-- <li class="page-item"><a class="page-link" href="#">2</a></li> -->
                                <!-- <li class="page-item"><a class="page-link" href="#">3</a></li> -->
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true"><svg style=" transform: rotate(270deg);"
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
        <div class="row align-item-center mt-3">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header d-flex mt-3  bg-white d-flex justify-content-between custom-card-header">
                        <h5 class="font-22 clr-db px-3">Staff payments.</h5>
                        <button class="btn btn-sm btn-info text-white  ">Add a new entry</button>
                    </div>
                    <div class="card-header d-flex mt-1  bg-white d-flex justify-content-end custom-card-header">
                        <button type="button" class="btn btn-sm btn-white border border-dark"> Add
                            filter <i class="fas fa-bars mr-3"></i>
                        </button>
                    </div>
                    <div class="card-body">
                        <table class="table  table-responsive">
                            <thead>
                                <tr>
                                    <th scope="col"  class="font-14 clr-db fw450">Date
                                    <svg class="ml-3" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
  <g id="Arrow_Bottom" data-name="Arrow Bottom" transform="translate(-0.146)">
    <rect id="Rectangle_849" data-name="Rectangle 849" width="20" height="20" transform="translate(0.146)" fill="none"/>
    <g id="Group_921" data-name="Group 921" transform="translate(1.85 1.667)">
      <rect id="Rectangle_850" data-name="Rectangle 850" width="16.667" height="16.667" fill="none"/>
      <path id="Vector_22_Stroke_" data-name="Vector 22 (Stroke)" d="M.174.193a.555.555,0,0,1,.842,0L4.167,3.682,7.317.193a.555.555,0,0,1,.842,0,.71.71,0,0,1,0,.932L5.008,4.614a1.111,1.111,0,0,1-1.684,0L.174,1.125A.71.71,0,0,1,.174.193Z" transform="translate(4.167 5.833)" fill="#102940"/>
    </g>
  </g>
</svg>

                                    </th>
                                    <th scope="col"  class="font-14 clr-db fw450">Specialist
                                    <svg class="ml-3" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
  <g id="Arrow_Bottom" data-name="Arrow Bottom" transform="translate(-0.146)">
    <rect id="Rectangle_849" data-name="Rectangle 849" width="20" height="20" transform="translate(0.146)" fill="none"/>
    <g id="Group_921" data-name="Group 921" transform="translate(1.85 1.667)">
      <rect id="Rectangle_850" data-name="Rectangle 850" width="16.667" height="16.667" fill="none"/>
      <path id="Vector_22_Stroke_" data-name="Vector 22 (Stroke)" d="M.174.193a.555.555,0,0,1,.842,0L4.167,3.682,7.317.193a.555.555,0,0,1,.842,0,.71.71,0,0,1,0,.932L5.008,4.614a1.111,1.111,0,0,1-1.684,0L.174,1.125A.71.71,0,0,1,.174.193Z" transform="translate(4.167 5.833)" fill="#102940"/>
    </g>
  </g>
</svg>

                                    </th>
                                    <th scope="col"  class="font-14 clr-db fw450">Salary type</th>
                                    <th scope="col"  class="font-14 clr-db fw450">Sales</th>
                                    <th scope="col"  class="font-14 clr-db fw450">Note</th>
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
                        <nav aria-label="Page navigation ">
                            <ul class="pagination d-flex justify-content-end">
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
                                    </a>
                                </li>
                                <li class="page-item disabled"><a class="page-link" href="#">Page 1/3</a></li>
                                <!-- <li class="page-item"><a class="page-link" href="#">2</a></li> -->
                                <!-- <li class="page-item"><a class="page-link" href="#">3</a></li> -->
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true"><svg style=" transform: rotate(270deg);"
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
        <div class="row align-item-center mt-3">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header d-flex mt-3  bg-white d-flex justify-content-between custom-card-header">
                        <h5 class="font-22 clr-db px-3">Invoice codes.</h5>
                        <button class="btn btn-sm btn-info text-white">Add a new entry</button>
                    </div>
                    <div class="card-header d-flex mt-1  bg-white d-flex justify-content-end custom-card-header">
                        <button type="button" class="btn btn-sm btn-white border border-dark"> Add
                            filter <i class="fas fa-bars mr-3"></i>
                        </button>
                    </div>
                    <div class="card-body">
                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th scope="col"  class="font-14 clr-db fw450">Date 
                                    <svg class="ml-3" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
  <g id="Arrow_Bottom" data-name="Arrow Bottom" transform="translate(-0.146)">
    <rect id="Rectangle_849" data-name="Rectangle 849" width="20" height="20" transform="translate(0.146)" fill="none"/>
    <g id="Group_921" data-name="Group 921" transform="translate(1.85 1.667)">
      <rect id="Rectangle_850" data-name="Rectangle 850" width="16.667" height="16.667" fill="none"/>
      <path id="Vector_22_Stroke_" data-name="Vector 22 (Stroke)" d="M.174.193a.555.555,0,0,1,.842,0L4.167,3.682,7.317.193a.555.555,0,0,1,.842,0,.71.71,0,0,1,0,.932L5.008,4.614a1.111,1.111,0,0,1-1.684,0L.174,1.125A.71.71,0,0,1,.174.193Z" transform="translate(4.167 5.833)" fill="#102940"/>
    </g>
  </g>
</svg>

                                    </th>
                                    <th scope="col"  class="font-14 clr-db fw450">Code
                                    <svg class="ml-3" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
  <g id="Arrow_Bottom" data-name="Arrow Bottom" transform="translate(-0.146)">
    <rect id="Rectangle_849" data-name="Rectangle 849" width="20" height="20" transform="translate(0.146)" fill="none"/>
    <g id="Group_921" data-name="Group 921" transform="translate(1.85 1.667)">
      <rect id="Rectangle_850" data-name="Rectangle 850" width="16.667" height="16.667" fill="none"/>
      <path id="Vector_22_Stroke_" data-name="Vector 22 (Stroke)" d="M.174.193a.555.555,0,0,1,.842,0L4.167,3.682,7.317.193a.555.555,0,0,1,.842,0,.71.71,0,0,1,0,.932L5.008,4.614a1.111,1.111,0,0,1-1.684,0L.174,1.125A.71.71,0,0,1,.174.193Z" transform="translate(4.167 5.833)" fill="#102940"/>
    </g>
  </g>
</svg>

                                    </th>
                                    <th scope="col"  class="font-14 clr-db fw450">Service
                                    <svg class="ml-3" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
  <g id="Arrow_Bottom" data-name="Arrow Bottom" transform="translate(-0.146)">
    <rect id="Rectangle_849" data-name="Rectangle 849" width="20" height="20" transform="translate(0.146)" fill="none"/>
    <g id="Group_921" data-name="Group 921" transform="translate(1.85 1.667)">
      <rect id="Rectangle_850" data-name="Rectangle 850" width="16.667" height="16.667" fill="none"/>
      <path id="Vector_22_Stroke_" data-name="Vector 22 (Stroke)" d="M.174.193a.555.555,0,0,1,.842,0L4.167,3.682,7.317.193a.555.555,0,0,1,.842,0,.71.71,0,0,1,0,.932L5.008,4.614a1.111,1.111,0,0,1-1.684,0L.174,1.125A.71.71,0,0,1,.174.193Z" transform="translate(4.167 5.833)" fill="#102940"/>
    </g>
  </g>
</svg>

                                    </th>
                                    <th scope="col"  class="font-14 clr-db fw450">Group</th>
                                    <th scope="col"  class="font-14 clr-db fw450">Tarif</th>
                                    <th scope="col"  class="font-14 clr-db fw450">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>12/07/2023</td>
                                    <td>1234</td>
                                    <td>
                                        <div class="btn-group">
                                            <button class="btn btn-outline-dark bg-white text-dark btn-sm dropdown-toggle"
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
                                            class="btn btn-sm text-dark bg-white text-decoration-none text-nowrap px-0 py-2"><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="13.37" height="14.526"
                                                viewBox="0 0 13.37 14.526">
                                                <defs>
                                                    <clipPath id="clip-path">
                                                        <rect id="Rectangle_34" data-name="Rectangle 34" width="4.029"
                                                            height="15.744" fill="#102940" />
                                                    </clipPath>
                                                </defs>
                                                <g id="Group_393" data-name="Group 393"
                                                    transform="translate(10.329) rotate(41)">
                                                    <g id="Group_244" data-name="Group 244" transform="translate(0 0)"
                                                        clip-path="url(#clip-path)">
                                                        <path id="Path_29" data-name="Path 29"
                                                            d="M2.014,0A2.016,2.016,0,0,0,0,2.014V12.27a.549.549,0,0,0,.058.245l1.465,2.93a.554.554,0,0,0,.983,0l1.465-2.93a.549.549,0,0,0,.058-.245V2.014A2.016,2.016,0,0,0,2.014,0M2.93,12.14l-.916,1.831L1.1,12.14v-.053H2.93Zm0-1.152H1.1V4.029H2.93Zm0-8.058H1.1V2.014a.916.916,0,1,1,1.831,0Z"
                                                            transform="translate(0 0)" fill="#102940" />
                                                    </g>
                                                </g>
                                            </svg>
                                            Edit
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
                                            <button class="btn btn-outline-dark bg-white text-dark btn-sm dropdown-toggle"
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
                                            class="btn btn-sm text-dark bg-white text-decoration-none text-nowrap px-0 py-2"><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="13.37" height="14.526"
                                                viewBox="0 0 13.37 14.526">
                                                <defs>
                                                    <clipPath id="clip-path">
                                                        <rect id="Rectangle_34" data-name="Rectangle 34" width="4.029"
                                                            height="15.744" fill="#102940" />
                                                    </clipPath>
                                                </defs>
                                                <g id="Group_393" data-name="Group 393"
                                                    transform="translate(10.329) rotate(41)">
                                                    <g id="Group_244" data-name="Group 244" transform="translate(0 0)"
                                                        clip-path="url(#clip-path)">
                                                        <path id="Path_29" data-name="Path 29"
                                                            d="M2.014,0A2.016,2.016,0,0,0,0,2.014V12.27a.549.549,0,0,0,.058.245l1.465,2.93a.554.554,0,0,0,.983,0l1.465-2.93a.549.549,0,0,0,.058-.245V2.014A2.016,2.016,0,0,0,2.014,0M2.93,12.14l-.916,1.831L1.1,12.14v-.053H2.93Zm0-1.152H1.1V4.029H2.93Zm0-8.058H1.1V2.014a.916.916,0,1,1,1.831,0Z"
                                                            transform="translate(0 0)" fill="#102940" />
                                                    </g>
                                                </g>
                                            </svg>
                                            Edit
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
                                            <button class="btn btn-outline-dark bg-white text-dark btn-sm dropdown-toggle"
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
                                            class="btn btn-sm text-dark bg-white text-decoration-none text-nowrap px-0 py-2"><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="13.37" height="14.526"
                                                viewBox="0 0 13.37 14.526">
                                                <defs>
                                                    <clipPath id="clip-path">
                                                        <rect id="Rectangle_34" data-name="Rectangle 34" width="4.029"
                                                            height="15.744" fill="#102940" />
                                                    </clipPath>
                                                </defs>
                                                <g id="Group_393" data-name="Group 393"
                                                    transform="translate(10.329) rotate(41)">
                                                    <g id="Group_244" data-name="Group 244" transform="translate(0 0)"
                                                        clip-path="url(#clip-path)">
                                                        <path id="Path_29" data-name="Path 29"
                                                            d="M2.014,0A2.016,2.016,0,0,0,0,2.014V12.27a.549.549,0,0,0,.058.245l1.465,2.93a.554.554,0,0,0,.983,0l1.465-2.93a.549.549,0,0,0,.058-.245V2.014A2.016,2.016,0,0,0,2.014,0M2.93,12.14l-.916,1.831L1.1,12.14v-.053H2.93Zm0-1.152H1.1V4.029H2.93Zm0-8.058H1.1V2.014a.916.916,0,1,1,1.831,0Z"
                                                            transform="translate(0 0)" fill="#102940" />
                                                    </g>
                                                </g>
                                            </svg>
                                            Edit
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
                                            <button class="btn btn-outline-dark bg-white text-dark btn-sm dropdown-toggle"
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
                                            class="btn btn-sm text-dark bg-white text-decoration-none text-nowrap px-0 py-2"><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="13.37" height="14.526"
                                                viewBox="0 0 13.37 14.526">
                                                <defs>
                                                    <clipPath id="clip-path">
                                                        <rect id="Rectangle_34" data-name="Rectangle 34" width="4.029"
                                                            height="15.744" fill="#102940" />
                                                    </clipPath>
                                                </defs>
                                                <g id="Group_393" data-name="Group 393"
                                                    transform="translate(10.329) rotate(41)">
                                                    <g id="Group_244" data-name="Group 244" transform="translate(0 0)"
                                                        clip-path="url(#clip-path)">
                                                        <path id="Path_29" data-name="Path 29"
                                                            d="M2.014,0A2.016,2.016,0,0,0,0,2.014V12.27a.549.549,0,0,0,.058.245l1.465,2.93a.554.554,0,0,0,.983,0l1.465-2.93a.549.549,0,0,0,.058-.245V2.014A2.016,2.016,0,0,0,2.014,0M2.93,12.14l-.916,1.831L1.1,12.14v-.053H2.93Zm0-1.152H1.1V4.029H2.93Zm0-8.058H1.1V2.014a.916.916,0,1,1,1.831,0Z"
                                                            transform="translate(0 0)" fill="#102940" />
                                                    </g>
                                                </g>
                                            </svg>
                                            Edit
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
                                            <button class="btn btn-outline-dark bg-white text-dark btn-sm dropdown-toggle"
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
                                            class="btn btn-sm text-dark bg-white text-decoration-none text-nowrap px-0 py-2"><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="13.37" height="14.526"
                                                viewBox="0 0 13.37 14.526">
                                                <defs>
                                                    <clipPath id="clip-path">
                                                        <rect id="Rectangle_34" data-name="Rectangle 34" width="4.029"
                                                            height="15.744" fill="#102940" />
                                                    </clipPath>
                                                </defs>
                                                <g id="Group_393" data-name="Group 393"
                                                    transform="translate(10.329) rotate(41)">
                                                    <g id="Group_244" data-name="Group 244" transform="translate(0 0)"
                                                        clip-path="url(#clip-path)">
                                                        <path id="Path_29" data-name="Path 29"
                                                            d="M2.014,0A2.016,2.016,0,0,0,0,2.014V12.27a.549.549,0,0,0,.058.245l1.465,2.93a.554.554,0,0,0,.983,0l1.465-2.93a.549.549,0,0,0,.058-.245V2.014A2.016,2.016,0,0,0,2.014,0M2.93,12.14l-.916,1.831L1.1,12.14v-.053H2.93Zm0-1.152H1.1V4.029H2.93Zm0-8.058H1.1V2.014a.916.916,0,1,1,1.831,0Z"
                                                            transform="translate(0 0)" fill="#102940" />
                                                    </g>
                                                </g>
                                            </svg>
                                            Edit
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
                                            <button class="btn btn-outline-dark bg-white text-dark btn-sm dropdown-toggle"
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
                                            class="btn btn-sm text-dark bg-white text-decoration-none text-nowrap px-0 py-2"><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="13.37" height="14.526"
                                                viewBox="0 0 13.37 14.526">
                                                <defs>
                                                    <clipPath id="clip-path">
                                                        <rect id="Rectangle_34" data-name="Rectangle 34" width="4.029"
                                                            height="15.744" fill="#102940" />
                                                    </clipPath>
                                                </defs>
                                                <g id="Group_393" data-name="Group 393"
                                                    transform="translate(10.329) rotate(41)">
                                                    <g id="Group_244" data-name="Group 244" transform="translate(0 0)"
                                                        clip-path="url(#clip-path)">
                                                        <path id="Path_29" data-name="Path 29"
                                                            d="M2.014,0A2.016,2.016,0,0,0,0,2.014V12.27a.549.549,0,0,0,.058.245l1.465,2.93a.554.554,0,0,0,.983,0l1.465-2.93a.549.549,0,0,0,.058-.245V2.014A2.016,2.016,0,0,0,2.014,0M2.93,12.14l-.916,1.831L1.1,12.14v-.053H2.93Zm0-1.152H1.1V4.029H2.93Zm0-8.058H1.1V2.014a.916.916,0,1,1,1.831,0Z"
                                                            transform="translate(0 0)" fill="#102940" />
                                                    </g>
                                                </g>
                                            </svg>
                                            Edit
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
                        <nav aria-label="Page navigation ">
                            <ul class="pagination d-flex justify-content-end">
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
                                    </a>
                                </li>
                                <li class="page-item disabled"><a class="page-link" href="#">Page 1/3</a></li>
                                <!-- <li class="page-item"><a class="page-link" href="#">2</a></li> -->
                                <!-- <li class="page-item"><a class="page-link" href="#">3</a></li> -->
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true"><svg style=" transform: rotate(270deg);"
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
    </div>
@endsection
