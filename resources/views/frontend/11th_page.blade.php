@extends('frontend.partials.main')
@section('content')
    <div class="container-fluid py-5">
        <div class="row d-flex align-items-center position-relative">
            <div class="col-md-8 col-lg-8 col-12 gx-3 gx-md-5 py-3 rounded-3 bg-white">
                <h5 class="py-2">Settings.</h5>
                <ul class="nav nav-tabs mb-3" id="ex-with-icons" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a data-bs-toggle="tab" class="nav-link active " id="ex-with-icons-tab-1"
                            href="#ex-with-icons-tabs-1" role="tab" aria-controls="ex-with-icons-tabs-1"
                            aria-selected="true">
                            Clinic
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a data-bs-toggle="tab" class="nav-link " id="ex-with-icons-tab-2" href="#ex-with-icons-tabs-2"
                            role="tab" aria-controls="ex-with-icons-tabs-2" aria-selected="false">
                            Users
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a data-bs-toggle="tab" class="nav-link" id="ex-with-icons-tab-3" href="#ex-with-icons-tabs-3"
                            role="tab" aria-controls="ex-with-icons-tabs-3" aria-selected="false">
                            Calendar
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a data-bs-toggle="tab" class="nav-link" id="ex-with-icons-tab-5" href="#ex-with-icons-tabs-5"
                            role="tab" aria-controls="ex-with-icons-tabs-5" aria-selected="false">
                            Inventory & Suppliers
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a data-bs-toggle="tab" class="nav-link" id="ex-with-icons-tab-6" href="#ex-with-icons-tabs-6"
                            role="tab" aria-controls="ex-with-icons-tabs-6" aria-selected="false">
                            Documents
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a data-bs-toggle="tab" class="nav-link" id="ex-with-icons-tab-7" href="#ex-with-icons-tabs-7"
                            role="tab" aria-controls="ex-with-icons-tabs-7" aria-selected="false">
                            Notifications et reminders
                        </a>
                    </li>
                </ul>
                <!-- Tabs navs -->
                <!-- Tabs content -->
                <div class="tab-content" id="ex-with-icons-content">
                    <div class="tab-pane fade show active" id="ex-with-icons-tabs-1" role="tabpanel"
                        aria-labelledby="ex-with-icons-tab-1">
                        <div class="card-header">
                            <div class="container">
                                <div class="row align-items-center d-flex justify-content-between">
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <div class="row  justify-content-center align-items-center">
                                            <div class="col-md-6 col-lg-6 text-center">
                                                <img src="data:image/jpeg;base64,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"
                                                    alt="Avatar" class="img-fluid rounded-circle">
                                            </div>
                                            <div class="col-md-6 col-lg-6 text-center ">
                                                <h5 class="text-dark fw-bold">Clinic</h5>
                                                <span class="text-dark">CHD Meyrin</span>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-12 text-center">
                                        <div class="d-grid gap-2">
                                            <button class="btn btn-primary" type="button">Import a new photo</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="card-body mt-4 "style="
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    border-bottom: 2px solid grey;">
                            <div class="row">
                                <div class="col-12 col-md-6 col-lg-6">
                                    <div class="d-flex justify-content-start mb-3 mt-2">
                                        <form action="" method="">
                                            <h5>General information.</h5>
                                            <div class="row mb-4 mt-2">
                                                <div class="col">
                                                    <div data-mdb-input-init class="form-outline">
                                                        <label class="clinic_name" for="form3Example1">Clinic name</label>
                                                        <input type="text" id="clinic_name" name="clinic_name"
                                                            placeholder="Name" class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div data-mdb-input-init class="form-outline">
                                                        <label class="phone" for="form3Example2">Phone</label>
                                                        <input type="text" id="phone" name="phone"
                                                            placeholder="phone" class="form-control" />

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-4 mt-2">
                                                <div class="col">
                                                    <div data-mdb-input-init class="form-outline">
                                                        <label class="clinic_name" for="form3Example1">Email</label>
                                                        <input type="email" id="Email" name="Email"
                                                            placeholder="email" class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="col lang_mar">
                                                    <div data-mdb-input-init class="form-outline">
                                                        <label class="lang" for="lang">Language</label>
                                                        <select class="js-example-basic-multiple form-select p-5 px-6"
                                                            name="lang[]" multiple="multiple">
                                                            <option selected value="urdu">Urdu</option>
                                                            <option value="eng">English</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-4 mt-2">
                                                <div class="col">
                                                    <div data-mdb-input-init class="form-outline">
                                                        <label class="clinic_name" for="address">Address</label>
                                                        <input type="text" id="address" name="address"
                                                            placeholder="Address" class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div data-mdb-input-init class="form-outline">
                                                        <label class="State" for="State">State</label>
                                                        <input type="text" id="State" name="State"
                                                            placeholder="State" class="form-control" />

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-4 mt-2">
                                                <div class="col">
                                                    <div data-mdb-input-init class="form-outline">
                                                        <label class="npa" for="npa">NPA</label>
                                                        <input type="text" id="npa" name="npa"
                                                            placeholder="NPA" class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div data-mdb-input-init class="form-outline">
                                                        <label class="city" for="city">City</label>
                                                        <input type="text" id="city" name="city"
                                                            placeholder="City" class="form-control" />

                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row mb-4 mt-5 text-center">
                                                <div class="col">
                                                    <div class="d-grid ">
                                                        <button class="btn btn-info" type="button">Update
                                                            information</button>

                                                    </div>
                                                </div>
                                            </div>

                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-6">
                                    <div class="form-outline">
                                        <label class="form-label" for="textAreaExample">Description</label>
                                        <textarea class="form-control" id="textAreaExample1" rows="8">
                                              Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores sequi distinctio consectetur delectus a, itaque sapiente sint eaque aliquam similique in laboriosam fugit alias! Incidunt blanditiis cupiditate delectus eligendi cumque!
                                            </textarea>
                                        <div class="row mt-4">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Website</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput1"
                                                    placeholder="URL">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-12 mb-2">
                                            Social
                                        </div>

                                        <div class="col-12">
                                            <a class="btn btn-info btn-sm rounded-circle mb-3" href="#!"
                                                role="button">
                                                <i class="fab fa-facebook text-white"></i>
                                            </a> <span class="px-1"> Your Facebook profile url</span>
                                        </div>
                                        <div class="col-12">
                                            <a class="btn btn-info btn-sm rounded-circle mb-3" href="#!"
                                                role="button">
                                                <i class="fab fa-instagram text-white"></i>
                                            </a>
                                            <span class="px-1">Your Instagram profile url</span>
                                        </div>
                                        <div class="col-12">
                                            <a class="btn btn-info btn-sm rounded-circle mb-3" href="#!"
                                                role="button">
                                                <i class="fab fa-linkedin text-white"></i>
                                            </a> <span class="px-1">Your LinkedIn profile url</span>
                                        </div>
                                    </div>

                                    </form>
                                </div>
                            </div>

                        </div>
                        <div class="card-header mt-4">
                            <div class="container">
                                <div class="row align-items-center d-flex justify-content-between">
                                    <div class="col-12 col-md-1 col-lg-1">
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-12">
                                        <h4 class="text-nowrap text-dark"> Billing and payment methods.</h4>
                                    </div>
                                    <div class="col-12 col-md-1 col-lg-1">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body mt-4">
                            <div class="row">
                                <div class="col-12 col-md-12 col-lg-12">
                                    <div class="d-flex  mb-3 mt-2">
                                        <form action="" method="">
                                            <div class="row mb-4 mt-2 d-flex justify-content-between align-items-center">
                                                <div class="col-12 col-md-1 col-lg-1"></div>
                                                <div class="col-12 col-md-2 col-lg-2">
                                                    <div data-mdb-input-init class="form-outline">
                                                        <label class="clinic_points" for="clinic_points">Clinic
                                                            points</label>
                                                        <input type="text" id="clinic_points" name="clinic_points"
                                                            placeholder="points" class="form-control" />
                                                    </div>
                                                </div>

                                                <div class="col-12 col-md-2 col-lg-2">
                                                    <div data-mdb-input-init class="form-outline">
                                                        <label class="p_points text-nowrap" for="p_points">Private
                                                            patient points
                                                        </label>
                                                        <input type="text" id="p_points" name="p_points"
                                                            placeholder="points" class="form-control" />
                                                    </div>
                                                </div>

                                                <div class="col-12 col-md-2 col-lg-2">
                                                    <div data-mdb-input-init class="form-outline">
                                                        <label class="ins_points" for="ins_points text-nowrap">Insurance
                                                            points
                                                        </label>
                                                        <input type="text" id="ins_points" name="ins_points"
                                                            placeholder="points" class="form-control" />
                                                    </div>
                                                </div>

                                                <!-- Fourth Input -->
                                                <div class="col-12 col-md-2 col-lg-2">
                                                    <div data-mdb-input-init class="form-outline">
                                                        <label class="Soci_points" for="Soci_points">Social points
                                                        </label>
                                                        <input type="text" id="Soci_points" name="Soci_points"
                                                            placeholder="points" class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-2 col-lg-2">
                                                    <div data-mdb-input-init class="form-outline">
                                                        <label class="tva_applic" for="tva_applic">TVA applicable
                                                        </label>
                                                        <input type="text" id="tva_applic" name="tva_applic"
                                                            placeholder="%" class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-1 col-lg-1"></div>
                                            </div>
                                            <div class="row mb-4 mt-2 d-flex justify-content-between align-items-center">
                                                <div class="col-12 col-md-1 col-lg-1"></div>

                                                <div class="col-12 col-md-10 col-lg-10">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Date</th>
                                                                <th scope="col">Payment method</th>
                                                                <th scope="col">State</th>
                                                                <th scope="col">Comments</th>
                                                                <th scope="col">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>12/07/23</td>
                                                                <td>On site</td>
                                                                <td>Live</td>
                                                                <td>Lorem ipsum dolor si amet net ipsum me</td>
                                                                <td> <a
                                                                        class="btn btn-sm mx-2 text-dark bg-white text-decoration-none text-nowrap  px-4 py-2"><i
                                                                            class="fas fa-pencil-alt pr-1"></i>Edit
                                                                    </a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>12/07/23</td>
                                                                <td>On site</td>
                                                                <td>Live</td>
                                                                <td>Lorem ipsum dolor si amet net ipsum me</td>
                                                                <td> <a
                                                                        class="btn btn-sm mx-2 text-dark bg-white text-decoration-none text-nowrap  px-4 py-2"><i
                                                                            class="fas fa-pencil-alt pr-1"></i>Edit
                                                                    </a></td>
                                                            </tr>

                                                            <tr>
                                                                <td>12/07/23</td>
                                                                <td>On site</td>
                                                                <td>Live</td>
                                                                <td>Lorem ipsum dolor si amet net ipsum me</td>
                                                                <td> <a
                                                                        class="btn btn-sm mx-2 text-dark bg-white text-decoration-none text-nowrap  px-4 py-2"><i
                                                                            class="fas fa-pencil-alt pr-1"></i>Edit
                                                                    </a></td>
                                                            </tr>

                                                            <tr>
                                                                <td>12/07/23</td>
                                                                <td>On site</td>
                                                                <td>Live</td>
                                                                <td>Lorem ipsum dolor si amet net ipsum me</td>
                                                                <td> <a
                                                                        class="btn btn-sm mx-2 text-dark bg-white text-decoration-none text-nowrap  px-4 py-2"><i
                                                                            class="fas fa-pencil-alt pr-1"></i>Edit
                                                                    </a></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="mt-2">
                                                                    <button type="button"
                                                                        class="btn btn-info">Add</button>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="col-12 col-md-1 col-lg-1"></div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="ex-with-icons-tabs-2" role="tabpanel"
                        aria-labelledby="ex-with-icons-tab-2">
                        <div class="card-header">
                            <div class="container">
                                <div class="row align-items-center d-flex justify-content-between">
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <div class="row  justify-content-center align-items-center">
                                            <div class="col-md-6 col-lg-6 text-center">
                                                <h4 class="text-dark text-nowrap"> All users.</h4>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-12 text-center">
                                        <div class="d-grid ">
                                            <button class="btn  btn-sm btn-primary" type="button">Add new user</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body mt-4">
                            <div class="row mb-4 mt-2 d-flex align-items-center">
                                <div class="col-12 col-md-12 col-lg-12">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Full name</th>
                                                <th scope="col">E-mail</th>
                                                <th scope="col">Role</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>39384</td>
                                                <td>First name Last name</td>
                                                <td>nompraticien@gmail.com</td>
                                                <td>Administrator</td>
                                                <td> <a
                                                        class="btn btn-sm mx-2 text-danger bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                        X Delete
                                                    </a>
                                                    <a
                                                        class="btn btn-sm mx-2 text-dark bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                        <i class="fas fa-user"></i>
                                                        Connexion
                                                    </a>
                                                    <a
                                                        class="btn btn-sm mx-2 text-dark bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                        <i class="fas fa-pencil-alt pr-1"></i>Edit
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>39384</td>
                                                <td>First name Last name</td>
                                                <td>nompraticien@gmail.com</td>
                                                <td>Administrator</td>
                                                <td> <a
                                                        class="btn btn-sm mx-2 text-danger bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                        X Delete
                                                    </a>
                                                    <a
                                                        class="btn btn-sm mx-2 text-dark bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                        <i class="fas fa-user"></i>
                                                        Connexion
                                                    </a>
                                                    <a
                                                        class="btn btn-sm mx-2 text-dark bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                        <i class="fas fa-pencil-alt pr-1"></i>Edit
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>39384</td>
                                                <td>First name Last name</td>
                                                <td>nompraticien@gmail.com</td>
                                                <td>Administrator</td>
                                                <td> <a
                                                        class="btn btn-sm mx-2 text-danger bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                        X Delete
                                                    </a>
                                                    <a
                                                        class="btn btn-sm mx-2 text-dark bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                        <i class="fas fa-user"></i>
                                                        Connexion
                                                    </a>
                                                    <a
                                                        class="btn btn-sm mx-2 text-dark bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                        <i class="fas fa-pencil-alt pr-1"></i>Edit
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>39384</td>
                                                <td>First name Last name</td>
                                                <td>nompraticien@gmail.com</td>
                                                <td>Administrator</td>
                                                <td> <a
                                                        class="btn btn-sm mx-2 text-danger bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                        X Delete
                                                    </a>
                                                    <a
                                                        class="btn btn-sm mx-2 text-dark bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                        <i class="fas fa-user"></i>
                                                        Connexion
                                                    </a>
                                                    <a
                                                        class="btn btn-sm mx-2 text-dark bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                        <i class="fas fa-pencil-alt pr-1"></i>Edit
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>39384</td>
                                                <td>First name Last name</td>
                                                <td>nompraticien@gmail.com</td>
                                                <td>Administrator</td>
                                                <td> <a
                                                        class="btn btn-sm mx-2 text-danger bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                        X Delete
                                                    </a>
                                                    <a
                                                        class="btn btn-sm mx-2 text-dark bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                        <i class="fas fa-user"></i>
                                                        Connexion
                                                    </a>
                                                    <a
                                                        class="btn btn-sm mx-2 text-dark bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                        <i class="fas fa-pencil-alt pr-1"></i>Edit
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>39384</td>
                                                <td>First name Last name</td>
                                                <td>nompraticien@gmail.com</td>
                                                <td>Administrator</td>
                                                <td> <a
                                                        class="btn btn-sm mx-2 text-danger bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                        X Delete
                                                    </a>
                                                    <a
                                                        class="btn btn-sm mx-2 text-dark bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                        <i class="fas fa-user"></i>
                                                        Connexion
                                                    </a>
                                                    <a
                                                        class="btn btn-sm mx-2 text-dark bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                        <i class="fas fa-pencil-alt pr-1"></i>Edit
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>39384</td>
                                                <td>First name Last name</td>
                                                <td>nompraticien@gmail.com</td>
                                                <td>Administrator</td>
                                                <td> <a
                                                        class="btn btn-sm mx-2 text-danger bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                        X Delete
                                                    </a>
                                                    <a
                                                        class="btn btn-sm mx-2 text-dark bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                        <i class="fas fa-user"></i>
                                                        Connexion
                                                    </a>
                                                    <a
                                                        class="btn btn-sm mx-2 text-dark bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                        <i class="fas fa-pencil-alt pr-1"></i>Edit
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>39384</td>
                                                <td>First name Last name</td>
                                                <td>nompraticien@gmail.com</td>
                                                <td>Administrator</td>
                                                <td> <a
                                                        class="btn btn-sm mx-2 text-danger bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                        X Delete
                                                    </a>
                                                    <a
                                                        class="btn btn-sm mx-2 text-dark bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                        <i class="fas fa-user"></i>
                                                        Connexion
                                                    </a>
                                                    <a
                                                        class="btn btn-sm mx-2 text-dark bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                        <i class="fas fa-pencil-alt pr-1"></i>Edit
                                                    </a>
                                                </td>
                                            </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade " id="ex-with-icons-tabs-3" role="tabpanel"
                        aria-labelledby="ex-with-icons-tab-3">
                        tab3
                    </div>
                    <div class="tab-pane fade  " id="ex-with-icons-tabs-5" role="tabpanel"
                        aria-labelledby="ex-with-icons-tab-5">
                        <div class="card-header ">
                            <div class="container">
                                <div class="row align-items-center d-flex justify-content-between">
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <div class="row  justify-content-center align-items-center">
                                            <div class="col-md-6 col-lg-6 text-center">
                                                <h4 class="text-dark text-nowrap">Fournisseurs.</h4>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-12 text-center">
                                        <div class="d-grid ">
                                            <button class="btn  btn-sm btn-primary" type="button">Add supplier</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body mt-4">
                            <div class="row mb-4 mt-2 d-flex align-items-center">
                                <div class="col-12 col-md-12 col-lg-12">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Full name</th>
                                                <th scope="col">Country</th>
                                                <th scope="col">Phone</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>21</td>
                                                <td>Supplier’s name</td>
                                                <td>
                                                    Switzerland</td>
                                                <td>022 345 46 35</td>
                                                <td> <a
                                                        class="btn btn-sm mx-2 text-danger bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                        X Delete
                                                    </a>
                                                    <a
                                                        class="btn btn-sm mx-2 text-dark bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                        <i class="fas fa-user"></i>
                                                        Connexion
                                                    </a>
                                                    <a
                                                        class="btn btn-sm mx-2 text-dark bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                        <i class="fas fa-pencil-alt pr-1"></i>Edit
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>21</td>
                                                <td>Supplier name</td>
                                                <td>
                                                    Switzerland</td>
                                                <td>022 345 46 35</td>
                                                <td> <a
                                                        class="btn btn-sm mx-2 text-danger bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                        X Delete
                                                    </a>
                                                    <a
                                                        class="btn btn-sm mx-2 text-dark bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                        <i class="fas fa-user"></i>
                                                        Connexion
                                                    </a>
                                                    <a
                                                        class="btn btn-sm mx-2 text-dark bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                        <i class="fas fa-pencil-alt pr-1"></i>Edit
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>21</td>
                                                <td>Suppliers name</td>
                                                <td>
                                                    Switzerland</td>
                                                <td>022 345 46 35</td>
                                                <td> <a
                                                        class="btn btn-sm mx-2 text-danger bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                        X Delete
                                                    </a>
                                                    <a
                                                        class="btn btn-sm mx-2 text-dark bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                        <i class="fas fa-user"></i>
                                                        Connexion
                                                    </a>
                                                    <a
                                                        class="btn btn-sm mx-2 text-dark bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                        <i class="fas fa-pencil-alt pr-1"></i>Edit
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>21</td>
                                                <td>Suppliers name</td>
                                                <td>
                                                    Switzerland</td>
                                                <td>022 345 46 35</td>
                                                <td> <a
                                                        class="btn btn-sm mx-2 text-danger bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                        X Delete
                                                    </a>
                                                    <a
                                                        class="btn btn-sm mx-2 text-dark bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                        <i class="fas fa-user"></i>
                                                        Connexion
                                                    </a>
                                                    <a
                                                        class="btn btn-sm mx-2 text-dark bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                        <i class="fas fa-pencil-alt pr-1"></i>Edit
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>21</td>
                                                <td>Suppliers name</td>
                                                <td>
                                                    Switzerland</td>
                                                <td>022 345 46 35</td>
                                                <td> <a
                                                        class="btn btn-sm mx-2 text-danger bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                        X Delete
                                                    </a>
                                                    <a
                                                        class="btn btn-sm mx-2 text-dark bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                        <i class="fas fa-user"></i>
                                                        Connexion
                                                    </a>
                                                    <a
                                                        class="btn btn-sm mx-2 text-dark bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                        <i class="fas fa-pencil-alt pr-1"></i>Edit
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>21</td>
                                                <td>Suppliers name</td>
                                                <td>
                                                    Switzerland</td>
                                                <td>022 345 46 35</td>
                                                <td> <a
                                                        class="btn btn-sm mx-2 text-danger bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                        X Delete
                                                    </a>
                                                    <a
                                                        class="btn btn-sm mx-2 text-dark bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                        <i class="fas fa-user"></i>
                                                        Connexion
                                                    </a>
                                                    <a
                                                        class="btn btn-sm mx-2 text-dark bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                        <i class="fas fa-pencil-alt pr-1"></i>Edit
                                                    </a>
                                                </td>
                                            </tr>

                                    </table>
                                    <div class="row d-flex justify-content-end pr-4">
                                        <nav aria-label="Page navigation example  ">
                                            <ul class="pagination">
                                                <li class="page-item">
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

                        <div class="card-header">
                            <div class="container">
                                <div class="row align-items-center d-flex justify-content-between">
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <div class="row  justify-content-center align-items-center">
                                            <div class="col-md-6 col-lg-6 text-center">
                                                <h4 class="text-dark text-nowrap">Categories.</h4>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-12 text-center">
                                        <div class="d-grid ">
                                            <a href="#" class="btn  btn-sm btn-primary">Add new category</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body mt-4">
                            <div class="row mb-4 mt-2 d-flex align-items-center">
                                <div class="col-12 col-md-12 col-lg-12">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Category</th>
                                                <th scope="col">Product name</th>
                                                <th scope="col">Description</th>
                                                <th scope="col">Phone</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Category 1</td>
                                                <td>2</td>
                                                <td>
                                                    Lorem ipsum dolor si amet net laid e</td>
                                                <td> <a
                                                        class="btn btn-sm mx-2 text-danger bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                        X Delete
                                                    </a>
                                                    <a
                                                        class="btn btn-sm mx-2 text-dark bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                        <i class="fas fa-pencil-alt pr-1"></i>Edit
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Category 1</td>
                                                <td>2</td>
                                                <td>
                                                    Lorem ipsum dolor si amet net laid e</td>
                                                <td> <a
                                                        class="btn btn-sm mx-2 text-danger bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                        X Delete
                                                    </a>
                                                    <a
                                                        class="btn btn-sm mx-2 text-dark bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                        <i class="fas fa-pencil-alt pr-1"></i>Edit
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Category 1</td>
                                                <td>2</td>
                                                <td>
                                                    Lorem ipsum dolor si amet net laid e</td>
                                                <td> <a
                                                        class="btn btn-sm mx-2 text-danger bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                        X Delete
                                                    </a>
                                                    <a
                                                        class="btn btn-sm mx-2 text-dark bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                        <i class="fas fa-pencil-alt pr-1"></i>Edit
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Category 1</td>
                                                <td>2</td>
                                                <td>
                                                    Lorem ipsum dolor si amet net laid e</td>
                                                <td> <a
                                                        class="btn btn-sm mx-2 text-danger bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                        X Delete
                                                    </a>
                                                    <a
                                                        class="btn btn-sm mx-2 text-dark bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                        <i class="fas fa-pencil-alt pr-1"></i>Edit
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Category 1</td>
                                                <td>2</td>
                                                <td>
                                                    Lorem ipsum dolor si amet net laid e</td>
                                                <td> <a
                                                        class="btn btn-sm mx-2 text-danger bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                        X Delete
                                                    </a>
                                                    <a
                                                        class="btn btn-sm mx-2 text-dark bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                        <i class="fas fa-pencil-alt pr-1"></i>Edit
                                                    </a>
                                                </td>
                                            </tr>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade " id="ex-with-icons-tabs-6" role="tabpanel"
                        aria-labelledby="ex-with-icons-tab-6">
                        <div class="row ">
                            <div class="col-12">
                                <h4 class="text-start">Documents center.</h4>
                            </div>
                            <div class="col-12 col-md-12 col-lg-12   mt-5">
                                <h1 class="h4 text-center mb-3 mt-4">Drag and drop a document,</h1>
                                <div class="card card-with-dash-border  ">
                                    <form>
                                        <fieldset class="upload_dropZone text-center mb-3 p-4">

                                            or <a href="#" class="text-center mb-3 ">browse
                                                your computer</a>
                                            <br>

                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                                fill="currentColor"
                                                class="text-primary mt-3 bi bi-file-earmark-arrow-up-fill"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M6.354 9.854a.5.5 0 0 1-.708-.708l2-2a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 8.707V12.5a.5.5 0 0 1-1 0V8.707z" />
                                            </svg>

                                            <p class="small my-2 mt-2">Supported files: word, pdf…
                                            </p>
                                            <input id="upload_image_background" data-post-name="image_background"
                                                data-post-url="https://someplace.com/image/uploads/backgrounds/"
                                                class="position-absolute invisible" type="file" multiple
                                                accept="image/jpeg, image/png, image/svg+xml" />

                                            <label class="btn btn-upload mb-3" for="upload_image_background">Choose
                                                file(s)</label>

                                            <div class="upload_gallery d-flex flex-wrap justify-content-center gap-3 mb-0">
                                            </div>

                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-12">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Date</th>
                                            <th scope="col">Document name</th>
                                            <th scope="col">File type</th>
                                            <th scope="col">Category</th>
                                            <th scope="col">State</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td>12/07/23</td>
                                            <td>Document name</td>
                                            <td>
                                                PDF</td>
                                            <td>
                                                Prescription
                                            </td>
                                            <td>
                                                Online
                                            </td>
                                            <td>
                                                <a
                                                    class="btn btn-sm mx-2 text-dark bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                    <i class="fas fa-pencil-alt pr-1"></i>Edit
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>12/07/23</td>
                                            <td>Document name</td>
                                            <td>
                                                PDF</td>
                                            <td>
                                                Prescription
                                            </td>
                                            <td>
                                                Online
                                            </td>
                                            <td>
                                                <a
                                                    class="btn btn-sm mx-2 text-dark bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                    <i class="fas fa-pencil-alt pr-1"></i>Edit
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>12/07/23</td>
                                            <td>Document name</td>
                                            <td>
                                                PDF</td>
                                            <td>
                                                Prescription
                                            </td>
                                            <td>
                                                Online
                                            </td>
                                            <td>
                                                <a
                                                    class="btn btn-sm mx-2 text-dark bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                    <i class="fas fa-pencil-alt pr-1"></i>Edit
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>12/07/23</td>
                                            <td>Document name</td>
                                            <td>
                                                PDF</td>
                                            <td>
                                                Prescription
                                            </td>
                                            <td>
                                                Online
                                            </td>
                                            <td>
                                                <a
                                                    class="btn btn-sm mx-2 text-dark bg-white text-decoration-none text-nowrap  px-4 py-2">
                                                    <i class="fas fa-pencil-alt pr-1"></i>Edit
                                                </a>
                                            </td>
                                        </tr>

                                </table>
                                <div class="row d-flex justify-content-end pr-4">
                                    <nav aria-label="Page navigation example  ">
                                        <ul class="pagination">
                                            <li class="page-item">
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
                        <div class="row d-flex justify-content-end pr-4">
                            <nav aria-label="Page navigation example  ">
                                <ul class="pagination">
                                    <li class="page-item">
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
                    <div class="tab-pane fade " id="ex-with-icons-tabs-7" role="tabpanel"
                        aria-labelledby="ex-with-icons-tab-7">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="card-header bg-white d-flex justify-content-between">
                                    <span>Appointment reminder</span> <span>Invoice</span>
                                    <span>Administrative</span>
                                </div>
                            </div>
                        </div>
                        <form action="">
                            <div class="row">
                                <div class="col-12 col-md-4 col-lg-4 mt-3">
                                    <h6 class="px-2 text-nowrap mb-2">Notification support.</h6>
                                    <div class="row">
                                        <div class="col-12 d-flex align-item-center justify-content-between mt-2 ">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="mail"
                                                    value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Mail
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="sms"
                                                    value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    SMS
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="app-noti"
                                                    value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    In-app notification
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-12 col-md-4 col-lg-4 mt-3">
                                    <h6 class="px-2 text-nowrap">Reminder frequency.</h6>
                                    <div class="row">
                                        <div class="col-12 col-md-4 ">
                                            <div class="mb-3">
                                                <label for="afterDays" class="form-label">After</label>
                                                <input type="number" name="afterDays" class="form-control"
                                                    id="afterDays" placeholder="days">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4 ">
                                            <div class="mb-3">
                                                <label for="everyDays" class="form-label">Every</label>
                                                <input type="number" name="everyDays" class="form-control"
                                                    id="everyDays" placeholder=" days">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row  align-middle">
                                <div class="col-12 col-md-7 col-lg-7 mt-3">
                                    <h6 class="px-2 text-nowrap mb-2">Email notification.</h6>
                                    <div class="row">
                                        <div class="col-12 col-md-6 col-lg-6 align-item-center">
                                            <div class="mb-3 mt-2">
                                                <label for="object" class="form-label">Object</label>
                                                <input type="text" class="form-control" id="object"
                                                    placeholder="">
                                            </div>
                                            <div class="mb-3 ">
                                                <label for="msg1" class="form-label">Message</label>
                                                <textarea class="form-control text-justify" id="msg1" name="msg1" rows="6" cols="6">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                    Integer pulvinar
                                                  </textarea>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-6 mid-msg">
                                            <div class="mb-3 mt-2  ">
                                                <div class="row gx-2">
                                                    <div class="col-12 col-md-6 col-lg-6 ">
                                                        <strong>Shortcode</strong>
                                                        <p>{name}
                                                        </p>
                                                        <p>{clinic_name}</p>
                                                        <p>{appointment_date}</p>
                                                        <p>{appointment_time}</p>
                                                    </div>
                                                    <div class="col-12 col-md-6 col-lg-6">
                                                        <strong>Description</strong>
                                                        <p>Patient name
                                                        </p>
                                                        <p>Clinic name</p>
                                                        <p>Appointment date</p>
                                                        <p>Appointment time</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-5 col-lg-5 mt-3">
                                    <h6 class="px-2 text-nowrap">SMS notification.</h6>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mb-3 mt-2">
                                                <label for="msg2" class="form-label">Message</label>
                                                <textarea class="form-control text-justify " id="msg1" name="msg2" rows="6" cols="6">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                    Integer pulvinar, orci vitae molestie dapibus,
                                                  </textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mx-auto">
                                    <div class="d-grid gap-2 col-12 ">
                                        <button class="btn btn-primary " type="button">Update</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 chat bg-white rounded-3">
                <div class="card p-5  py-3 bg-white rounded">
                    <div class="card-header bg-white">
                        <h4 class="text-dark"> Help & Support</h4>
                    </div>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <strong class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    Getting started
                                </button>
                            </strong>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item text-muted">Modify my profile</li>
                                        <li class="list-group-item text-muted">Add a patient</li>
                                        <li class="list-group-item text-muted">Calendar</li>
                                        <li class="list-group-item text-muted">Tools and services</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <strong class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    Features
                                </button>
                            </strong>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item text-muted">Modify my profile</li>
                                        <li class="list-group-item text-muted">Add a patient</li>
                                        <li class="list-group-item text-muted">Calendar</li>
                                        <li class="list-group-item text-muted">Tools and services</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <strong class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    Treatment plans
                                </button>
                            </strong>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item text-muted">Modify my profile</li>
                                        <li class="list-group-item text-muted">Add a patient</li>
                                        <li class="list-group-item text-muted">Calendar</li>
                                        <li class="list-group-item text-muted">Tools and services</li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <strong class="accordion-header" id="flush-headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFour" aria-expanded="false"
                                    aria-controls="flush-collapseFour">
                                    Recommandations
                                </button>
                            </strong>
                            <div id="flush-collapseFour" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item text-muted">Modify my profile</li>
                                        <li class="list-group-item text-muted">Add a patient</li>
                                        <li class="list-group-item text-muted">Calendar</li>
                                        <li class="list-group-item text-muted">Tools and services</li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <strong class="accordion-header" id="flush-headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFive" aria-expanded="false"
                                    aria-controls="flush-collapseFive">
                                    Mobile application
                                </button>
                            </strong>
                            <div id="flush-collapseFive" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item text-muted">Modify my profile</li>
                                        <li class="list-group-item text-muted">Add a patient</li>
                                        <li class="list-group-item text-muted">Calendar</li>
                                        <li class="list-group-item text-muted">Tools and services</li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="d-grid  text-center">
                            <button class="btn btn-info" type="button">Contact support</button>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    @endsection
