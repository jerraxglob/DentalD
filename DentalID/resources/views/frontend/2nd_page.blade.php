@extends('frontend.partials.main')

@section('content')
    <div class="container">
        <div class="row gx-5">
            <div class="col-sm-12 col-md-8 col-lg-8">
                <div class="row   py-5   text-center">
                    <div class=" col-sm-12 col-md-4 col-lg-4 ">
                        <div class="card p_f  rounded-3 d-flex align-items-center justify-content-center">
                            <div class="card-body">
                                <div class="card-title pb-5">
                                    <img src="..." class="rounded  p-3  img-fluid img-thumbnail" alt="...">
                                </div>
                            </div>
                            <div class="card-footer">
                                <h6 class="text-white text-nowrap">Clinique Dentaire CHD Meyrin</h6>
                                <span class="c_p">12</span><span class="text-white">connected people </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                    <div class=" col-sm-12 col-md-7  px-3 col-lg-7    rounded-3  bg-white">
                        <div class="row px-3 d-flex justify-center align-items-center">
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <strong class="text-dark p-3">Statistics</strong>
                            </div>
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <div class="dropdown">
                                    <a class="btn btn-white btn-sm border border-dark dropdown-toggle" href="#"
                                        role="button" id="dropdownMenuLink" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fas fa-calendar-alt"></i> Month to date
                                    </a>

                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <a href="" class="text-decoration-none float-end p-3">See All</a>
                            </div>

                        </div>
                        <div class="row d-flex justify-center align-items-center ">
                            <div class=" col-sm-12 col-md-4 col-mg-4">
                                <div class="card-body d-flex justify-center align-items-center">
                                    <div class="col-sm-12 col-md-3 col-lg-3">
                                        <div class="avatar-container">
                                            <i class="fas fa-user-plus text-muted"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-3 col-lg-3  text-center">
                                        <strong class="card-title px-3">17</strong>
                                        <p class="card-text  px-3 text-nowrap">Employees</p>
                                    </div>

                                </div>

                            </div>
                            <div class=" col-sm-12 col-md-4 col-mg-4">
                                <div class="card-body d-flex justify-center align-items-center">
                                    <div class="col-sm-12 col-md-3 col-lg-3">
                                        <div class="avatar-container">
                                            <i class="fas fa-user text-muted"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-3 col-lg-3 text-center">
                                        <strong class="card-title px-3">831</strong>
                                        <p class="card-text  px-3 text-nowrap">Total patients</p>
                                    </div>

                                </div>

                            </div>
                            <div class=" col-sm-12 col-md-4 col-mg-4">
                                <div class="card-body d-flex justify-center align-items-center">
                                    <div class="col-sm-12 col-md-3 col-lg-3">
                                        <div class="avatar-container">
                                            <i class="fas fa-calendar-alt"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-3 col-lg-3 text-center">
                                        <strong class="card-title px-3">500</strong>
                                        <p class="card-text px-3 text-nowrap">Appointment</p>
                                    </div>

                                </div>

                            </div>

                            <div class=" col-sm-12 col-md-4 col-mg-4">
                                <div class="card-body d-flex justify-center align-items-center">
                                    <div class="col-sm-12 col-md-3 col-lg-3">
                                        <div class="avatar-container">
                                            <i class="fas fa-clock text-muted"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-3 col-lg-3 text-center">
                                        <strong class="card-title px-3">45mintus</strong>
                                        <p class="card-text px-3 text-nowrap">Average time</p>
                                    </div>

                                </div>

                            </div>
                            <div class=" col-sm-12 col-md-4 col-mg-4">
                                <div class="card-body d-flex justify-center align-items-center">
                                    <div class="col-sm-12 col-md-3 col-lg-3">
                                        <div class="avatar-container">
                                            <i class="fas fa-times text-muted"></i>

                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-3 col-lg-3">
                                        <strong class="card-title px-3 text-center">13</strong>
                                        <p class="card-text px-3 text-nowrap ">Missed appointment</p>
                                    </div>

                                </div>

                            </div>
                            <div class=" col-sm-12 col-md-4 col-mg-4">
                                <div class="card-body d-flex justify-center align-items-center">
                                    <div class="col-sm-12 col-md-3 col-lg-3">
                                        <div class="avatar-container">
                                            <i class="fas fa-chart-bar text-muted"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-3 col-lg-3 text-center">
                                        <strong class="card-title px-3">20%</strong>
                                        <p class="card-text px-3 text-nowrap">Occupancy rate</p>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12  py-2 rounded-3  bg-white d-flex justify-content-between">
                        <h5 class="py-2">Task management.</h5>
                        <a href="#" class="text-decoration-none text-info text-end py-2">+ New ticket</a>
                    </div>
                </div>
                <div class="row">
                    <div
                        class="col-md-12 col-lg-12 gx-5 py-3 rounded-3  bg-white d-flex justify-content-end align-items-center">

                        <h6> <i class="fas fa-user px-2"></i>
                            Everybody <i class='fas fa-angle-down thin-arrow p-3'></i></h6>
                        <button type="button" class="btn btn-sm btn-white border border-dark w-10 h-60">
                            Add filter <i class="fa-solid fa-bars mr-3"></i>
                        </button>
                    </div>
                </div>
                <div class="row">
                    <div
                        class="col-md-12 col-lg-12  gx-5    py-3 rounded-3  bg-white d-flex justify-content-end align-items-center">
                        <table class="table table-borderless">
                            <thead>
                                <tr class="">
                                    <th scope="col">Tasks <i class='fas fa-angle-down p-3 thin-arrow'></i>
                                    </th>
                                    <th scope="col">Assigned to <i class="fas fa-angle-down p-3 thin-arrow"></i>
                                    </th>
                                    <th scope="col">Date <i class="fas fa-angle-down p-3 thin-arrow"></i></th>
                                    <th scope="col">Priority <i class="fas fa-angle-down p-3 thin-arrow"></i></th>
                                    <th scope="col">Status <i class="fas fa-angle-down p-3 thin-arrow"></i></th </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Lorem ipsum dolor sit amet, cons…</td>
                                    <td>Daniel</td>
                                    <td>12/07/23</td>
                                    <td>
                                        <div class="btn-group">
                                            <button class="btn btn-white border border-dark btn-sm dropdown-toggle"
                                                type="button" data-mdb-dropdown-init data-mdb-ripple-init
                                                aria-expanded="false">
                                                Emergency</i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a>
                                                </li>
                                                <li>
                                                    <hr class="dropdown-divider" />
                                                </li>
                                                <li><a class="dropdown-item" href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <button class="btn btn-white border border-dark btn-sm dropdown-toggle"
                                                type="button" data-mdb-dropdown-init data-mdb-ripple-init
                                                aria-expanded="false">
                                                Processing</i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a>
                                                </li>
                                                <li>
                                                    <hr class="dropdown-divider" />
                                                </li>
                                                <li><a class="dropdown-item" href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Lorem ipsum dolor sit amet, cons…</td>
                                    <td>Daniel</td>
                                    <td>12/07/23</td>
                                    <td>
                                        <div class="btn-group">
                                            <button class="btn btn-white border border-dark btn-sm dropdown-toggle"
                                                type="button" data-mdb-dropdown-init data-mdb-ripple-init
                                                aria-expanded="false">
                                                Emergency</i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a>
                                                </li>
                                                <li>
                                                    <hr class="dropdown-divider" />
                                                </li>
                                                <li><a class="dropdown-item" href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <button class="btn btn-white border border-dark btn-sm dropdown-toggle"
                                                type="button" data-mdb-dropdown-init data-mdb-ripple-init
                                                aria-expanded="false">
                                                Processing</i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a>
                                                </li>
                                                <li>
                                                    <hr class="dropdown-divider" />
                                                </li>
                                                <li><a class="dropdown-item" href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Lorem ipsum dolor sit amet, cons…</td>
                                    <td>Daniel</td>
                                    <td>12/07/23</td>
                                    <td>
                                        <div class="btn-group">
                                            <button class="btn btn-white border border-dark btn-sm dropdown-toggle"
                                                type="button" data-mdb-dropdown-init data-mdb-ripple-init
                                                aria-expanded="false">
                                                Emergency</i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a>
                                                </li>
                                                <li>
                                                    <hr class="dropdown-divider" />
                                                </li>
                                                <li><a class="dropdown-item" href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <button class="btn btn-white border border-dark btn-sm dropdown-toggle"
                                                type="button" data-mdb-dropdown-init data-mdb-ripple-init
                                                aria-expanded="false">
                                                Processing</i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a>
                                                </li>
                                                <li>
                                                    <hr class="dropdown-divider" />
                                                </li>
                                                <li><a class="dropdown-item" href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <div class="d-grid  mx-auto  py-4 mb-2">
                                            <button class="btn btn-primary" type="button">
                                                View all tasks</button>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>

                            </tbody>

                        </table>

                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-4 col-lg-4 mt-4 dark-mode-form">

                <form class="dark-mode-form">
                    <div class="row py-3 align-content-center ">
                        <div class="row py-3">
                            <div class="col-sm-8 col-md-7 col-lg-7">
                                <h5 class="">Stock report</h5>
                                <small class="text-nowrap">Wed 15th July 2023</small>
                            </div>
                            <div class="col-sm-4 col-md-5 col-lg-5">
                                <button class="btn btn-info btn-sm text-nowrap" type="button">Inventory
                                    management</button>
                            </div>
                        </div>
                    </div>
                    <div class="row col-with-line d-flex  justify-content-center align-items-center">
                        <div class="col-sm-12 col-md-4 col-lg-4 ">
                            <div class="mb-3">
                                <label for="name" class="form-label">Specialist</label>
                                <input type="text" class="form-control form-control-sm dark-input" name="name"
                                    id="name" placeholder="Dr. Soufi Daniel" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-7 col-lg-7 ">
                            <div class="mb-3">
                                <label for="material" class="form-label">Material</label>
                                <input type="text" class="form-control form-control-sm dark-input" name="material"
                                    id="material" placeholder="" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-1 col-lg-1 ">
                            <div class="mb-3 py-6">
                                <label for="qty" class="form-label">Qty</label>
                                <input type="text" name="qty" class="form-control  form-control-sm dark-input"
                                    value="" id="qty">
                            </div>
                        </div>
                    </div>
                    <div class="row col-with-line d-flex  justify-content-center align-items-center">
                        <div class="col-sm-12 col-md-4 col-lg-4 ">
                            <div class="mb-3">
                                <label for="name" class="form-label">Specialist</label>
                                <input type="text" class="form-control form-control-sm dark-input" name="name"
                                    id="name" placeholder="Dr. Soufi Daniel" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-7 col-lg-7 ">
                            <div class="mb-3">
                                <label for="material" class="form-label">Material</label>
                                <input type="text" class="form-control form-control-sm dark-input" name="material"
                                    id="material" placeholder="" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-1 col-lg-1 ">
                            <div class="mb-3 py-6">
                                <label for="qty" class="form-label">Qty</label>
                                <input type="text" name="qty" class="form-control  form-control-sm dark-input"
                                    value="" id="qty">
                            </div>
                        </div>
                    </div>
                    <div class="row col-with-line d-flex  justify-content-center align-items-center">
                        <div class="col-sm-12 col-md-4 col-lg-4 ">
                            <div class="mb-3">
                                <label for="name" class="form-label">Specialist</label>
                                <input type="text" class="form-control form-control-sm dark-input" name="name"
                                    id="name" placeholder="Dr. Soufi Daniel" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-7 col-lg-7 ">
                            <div class="mb-3">
                                <label for="material" class="form-label">Material</label>
                                <input type="text" class="form-control form-control-sm dark-input" name="material"
                                    id="material" placeholder="" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-1 col-lg-1 ">
                            <div class="mb-3 py-6">
                                <label for="qty" class="form-label">Qty</label>
                                <input type="text" name="qty" class="form-control  form-control-sm dark-input"
                                    value="" id="qty">
                            </div>
                        </div>
                    </div>
                    <div class="row  d-flex  justify-content-center align-items-center">
                        <div class="col-sm-12 col-md-4 col-lg-4 ">
                            <div class="mb-3">
                                <label for="name" class="form-label">Specialist</label>
                                <input type="text" class="form-control form-control-sm dark-input" name="name"
                                    id="name" placeholder="Dr. Soufi Daniel" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-7 col-lg-7 ">
                            <div class="mb-3">
                                <label for="material" class="form-label">Material</label>
                                <input type="text" class="form-control form-control-sm dark-input" name="material"
                                    id="material" placeholder="" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-1 col-lg-1 ">
                            <div class="mb-3 py-6">
                                <label for="qty" class="form-label">Qty</label>
                                <input type="text" name="qty" class="form-control  form-control-sm dark-input"
                                    value="" id="qty">
                            </div>
                        </div>

                    </div>
                    <div class="row  d-flex  justify-content-center align-items-center">
                        <div class="col-sm-12 col-md-10 col-lg-10 py-3">
                            <h4 class="text-nowarp">Important communication.</h4>
                        </div>

                        <div class="col-sm-12 col-md-2 col-lg-2 py-3">
                            <a href="#" class="text-decoration-none text-nowarp">Sell all</a>
                        </div>

                    </div>
                    <div class="row  d-flex  justify-content-center align-items-center">
                        <table class="table table-borderless">
                            <thead>
                                <tr class="">

                                    <th scope="col" class="text-white">Date </th>
                                    <th scope="col" class="text-white">Object</th>
                                    <th></th>
                                    <th></th>
                                    <th scope="col" class="text-white">Status</th </tr>
                            </thead>
                            <tbody>
                                <tr class="col-with-line">

                                    <td class="text-white">12/07/23</td>
                                    <td class="text-white text-nowrap">Change of regulations …</td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <div class="mb-3">
                                            <input type="text"
                                                class="form-control float-left  form-control-sm dark-input" name="name"
                                                id="name" placeholder="Draft" aria-describedby="emailHelp">
                                        </div>
                                    </td>

                                </tr>
                                <tr class="col-with-line">

                                    <td class="text-white">12/07/23</td>
                                    <td class="text-white text-nowrap">Change of regulations …</td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <div class="mb-3">
                                            <input type="text"
                                                class="form-control float-left  form-control-sm dark-input" name="name"
                                                id="name" placeholder="Draft" aria-describedby="emailHelp">
                                        </div>
                                    </td>

                                </tr>
                                <tr class="col-with-line">

                                    <td class="text-white">12/07/23</td>
                                    <td class="text-white text-nowrap">Change of regulations …</td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <div class="mb-3">
                                            <input type="text"
                                                class="form-control float-left  form-control-sm dark-input" name="name"
                                                id="name" placeholder="Draft" aria-describedby="emailHelp">
                                        </div>
                                    </td>

                                </tr>
                                <tr class="col-with-line">

                                    <td class="text-white">12/07/23</td>
                                    <td class="text-white text-nowrap">Change of regulations …</td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <div class="mb-3">
                                            <input type="text"
                                                class="form-control float-left  form-control-sm dark-input" name="name"
                                                id="name" placeholder="Draft" aria-describedby="emailHelp">
                                        </div>
                                    </td>

                                </tr>
                                <tr class="col-with-line">
                                    <td class="text-white">12/07/23</td>
                                    <td class="text-white text-nowrap">Change of regulations …</td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <div class="mb-3">
                                            <input type="text"
                                                class="form-control float-left  form-control-sm dark-input" name="name"
                                                id="name" placeholder="Draft" aria-describedby="emailHelp">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="text-center pb-4">
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button type="submit" class="btn btn-sm btn-info  ">Add a new note</button>
                        </div>

                    </div>

            </div>
            </form>
        </div>

    </div>
    <div class="container py-5 pl-5">
        <div class="row  align-items-center">
            <div
                class="col-md-8 col-lg-10  py-4 rounded-3  d-flex justify-content-lg-between bg-white align-items-center ">
                <h5 class="py-2 ">Consultations.</h5>
                <div class=" align-items-center  pl-3 d-flex align-items-center">
                    <div class="dropdown align-items-center ">
                        <b class="px-2 py-2 px-3">period</b>
                        <a class="btn btn-white btn-sm py-2 float-end border border-dark dropdown-toggle" href="#"
                            role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-calendar-alt"></i> Month to date
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                    <a href="#" class="text-decoration-none text-info  px-4 py-2">See all</a>
                </div>

            </div>
            <div
                class="col-md-8 col-lg-10 gx-5 py-3 rounded-3  bg-white d-flex  justify-content-between align-items-center">
                <div class="mx-5 w-48">
                    <div class="input-icons position-relative align-items-center">
                        <i class="fas fa-search position-absolute translate-bottom mt-2 px-  text-start  text-secondary"
                            style="padding-left: 21px"></i>
                        <input class="form-control mx-2 px-5" id="searchInput" type="text"
                            placeholder="Rechercher un patient" />
                    </div>
                </div>
                <div>
                    <span class="date-range mr-3 text-dark">Date rangex</span>
                    <button type="button" class="btn btn-white border border-dark w-10 h-60">
                        Add filter <i class="fa-solid fa-bars mr-3"></i>
                    </button>
                </div>

            </div>
            <div class="col-md-8 col-lg-10  gx-5    py-3 rounded-3  bg-white ">
                <ul class="nav nav-tabs mb-3" id="ex-with-icons" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a data-bs-toggle="tab" class="nav-link active" id="ex-with-icons-tab-1"
                            href="#ex-with-icons-tabs-1" role="tab" aria-controls="ex-with-icons-tabs-1"
                            aria-selected="true">
                            Consultations
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a data-bs-toggle="tab" class="nav-link" id="ex-with-icons-tab-2" href="#ex-with-icons-tabs-2"
                            role="tab" aria-controls="ex-with-icons-tabs-2" aria-selected="false">
                            Draft
                        </a>
                    </li>

                </ul>
                <!-- Tabs navs -->

                <!-- Tabs content -->
                <div class="tab-content" id="ex-with-icons-content">
                    <div class="tab-pane fade show active" id="ex-with-icons-tabs-1" role="tabpanel"
                        aria-labelledby="ex-with-icons-tab-1">
                        <table class="table table-borderless">
                            <thead>
                                <tr class="">

                                    <th>Date <i class='fas fa-angle-down p-3'></i></th>
                                    <th>Patient </th>
                                    <th>Patient number </th>
                                    <th>Specialist</th>
                                    <th>Reason for visit</th>
                                    <th>Treatment</th>
                                    <th>Invoicing</th>
                                    <th>Recipient</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                    <td>12/07/23</td>
                                    <td>Bonnet Pierre</td>
                                    <td>Daniel</td>
                                    <td>
                                        273633
                                    </td>
                                    <td>
                                        Dr. Daniel Soufi
                                    </td>
                                    <td>
                                        Reason for visit
                                    </td>
                                    <td>
                                        Treatment
                                    </td>
                                    <td>
                                        CHF XXXX-.
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-info rounded-pill btn-sm">View</button>
                                    </td>

                                </tr>
                                <tr>

                                    <td>12/07/23</td>
                                    <td>Bonnet Pierre</td>
                                    <td>Daniel</td>
                                    <td>
                                        273633
                                    </td>
                                    <td>
                                        Dr. Daniel Soufi
                                    </td>
                                    <td>
                                        Reason for visit
                                    </td>
                                    <td>
                                        Treatment
                                    </td>
                                    <td>
                                        CHF XXXX-.
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-info rounded-pill btn-sm">View</button>
                                    </td>

                                </tr>
                                <tr>

                                    <td>12/07/23</td>
                                    <td>Bonnet Pierre</td>
                                    <td>Daniel</td>
                                    <td>
                                        273633
                                    </td>
                                    <td>
                                        Dr. Daniel Soufi
                                    </td>
                                    <td>
                                        Reason for visit
                                    </td>
                                    <td>
                                        Treatment
                                    </td>
                                    <td>
                                        CHF XXXX-.
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-info rounded-pill btn-sm">View</button>
                                    </td>

                                </tr>
                                <tr>

                                    <td>12/07/23</td>
                                    <td>Bonnet Pierre</td>
                                    <td>Daniel</td>
                                    <td>
                                        273633
                                    </td>
                                    <td>
                                        Dr. Daniel Soufi
                                    </td>
                                    <td>
                                        Reason for visit
                                    </td>
                                    <td>
                                        Treatment
                                    </td>
                                    <td>
                                        CHF XXXX-.
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-info rounded-pill btn-sm">View</button>
                                    </td>

                                </tr>

                            </tbody>

                        </table>
                    </div>
                    <div class="tab-pane fade" id="ex-with-icons-tabs-2" role="tabpanel"
                        aria-labelledby="ex-with-icons-tab-2">
                        Tab 2 content
                    </div>

                </div>
            </div>

        </div>

    </div>
    <div class="container py-5 pl-5">
        <div class="row  align-items-center">
            <div class="col-md-8 col-lg-10  py-4 rounded-3  d-flex justify-content-between bg-white align-items-center ">
                <h5 class="py-2 ">Files to be invoiced.</h5>

                <a href="#" class="text-decoration-none text-info  px-4 py-2">See all</a>
            </div>

            <div
                class="col-md-8 col-lg-10 gx-5 py-3 rounded-3  bg-white d-flex  justify-content-between align-items-center">
                <table class="table table-borderless">
                    <thead>
                        <tr class="">
                            <th scope="col">Patient
                            </th>
                            <th scope="col">Specialist </th>
                            <th scope="col">Date <i class='fas fa-angle-down p-3'></i></th>
                            <th scope="col">Treatment </th>
                            <th scope="col">Treatment plan</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Status<i class='fas fa-angle-down p-3'></i></th>
                            <th scope="col">Next appointment</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Glenn Stanley</td>
                            <td>Dr. Daniel Soufi</td>
                            <td>12 July 2023</td>
                            <td>
                                Ongoing treatment
                            </td>
                            <td>
                                12 months
                            </td>
                            <td>
                                CHF XXXX-.
                            </td>
                            <td>
                                Unbilled
                            </td>
                            <td>
                                12 July 2023
                            </td>
                        </tr>
                        <tr>
                            <td>Glenn Stanley</td>
                            <td>Dr. Daniel Soufi</td>
                            <td>12 July 2023</td>
                            <td>
                                Ongoing treatment
                            </td>
                            <td>
                                12 months
                            </td>
                            <td>
                                CHF XXXX-.
                            </td>
                            <td>
                                Unbilled
                            </td>
                            <td>
                                12 July 2023
                            </td>
                        </tr>
                        <tr>
                            <td>Glenn Stanley</td>
                            <td>Dr. Daniel Soufi</td>
                            <td>12 July 2023</td>
                            <td>
                                Ongoing treatment
                            </td>
                            <td>
                                12 months
                            </td>
                            <td>
                                CHF XXXX-.
                            </td>
                            <td>
                                Unbilled
                            </td>
                            <td>
                                12 July 2023
                            </td>
                        </tr>
                        <tr>
                            <td>Glenn Stanley</td>
                            <td>Dr. Daniel Soufi</td>
                            <td>12 July 2023</td>
                            <td>
                                Ongoing treatment
                            </td>
                            <td>
                                12 months
                            </td>
                            <td>
                                CHF XXXX-.
                            </td>
                            <td>
                                Unbilled
                            </td>
                            <td>
                                12 July 2023
                            </td>
                        </tr>
                        <tr>
                            <td>Glenn Stanley</td>
                            <td>Dr. Daniel Soufi</td>
                            <td>12 July 2023</td>
                            <td>
                                Ongoing treatment
                            </td>
                            <td>
                                12 months
                            </td>
                            <td>
                                CHF XXXX-.
                            </td>
                            <td>
                                Unbilled
                            </td>
                            <td>
                                12 July 2023
                            </td>
                        </tr>

                    </tbody>

                </table>
            </div>

        </div>
    </div>
@endsection
