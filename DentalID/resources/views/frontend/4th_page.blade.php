@extends('frontend.partials.main')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="container rounded-3 mt-5">
                    <div class="row align-items-center rounded-3 bg-white p-3">
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <strong class="text-start"> Stock management</strong>
                        </div>
                        <div class="col-sm-12 col-md-2 col-lg-2"></div>
                        <div class="col-sm-12 col-md-4 col-lg-4 d-flex justify-content-end">
                            <button class="btn btn-sm btn-outline-info"> Order</button>
                            <button class="btn btn-sm btn-info mx-2"><i class="fas fa-plus text-white"></i> Add new
                                product</button>

                        </div>
                    </div>
                    <div class="row align-items-center rounded-3 bg-white p-3">
                        <div class="col-sm-12 col-md-6 col-lg-6 align-items-center">
                            <div class="input-icons position-relative d-flex align-items-center">
                                <i class="fas  fa-search position-absolute translate-bottom mt-2 px-  text-start  text-secondary"
                                    style="padding-left:21px; padding-bottom:6px;"></i>
                                <input class="form-control form-control-sm w-50 mx-2 px-5" id="searchInput" type="text"
                                    placeholder="Search for a consultation …" />
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-2 col-lg-2"></div>
                        <div class="col-sm-12 col-md-4 col-lg-4 d-flex justify-content-end">
                            <button type="button" class="btn btn-sm btn-white border border-dark px-2">
                                Add filter <i class="fas fa-bars mr-3"></i>
                            </button>

                        </div>
                    </div>
                    <div class="row align-items-center rounded-3  bg-white p-3">
                        <div class="col-sm-12 col-md-1 col-lg-1"></div>
                        <div class="col-sm-12 col-md-11 col-lg-11 d-flex justify-content-center">
                            <table class="table table-borderless table-responsive">
                                <thead>
                                    <tr>
                                        <th>Reference</th>
                                        <th>Product name</th>
                                        <th>Category</th>
                                        <th>In stock</th>
                                        <th>Limit</th>
                                        <th>Expiration date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#1ied8n2</td>
                                        <td>Lorem ipsum </td>
                                        <td>Lorem ipsum</td>
                                        <td>320</td>
                                        <td>390</td>
                                        <td>---</td>
                                        <td>
                                            <button class="btn btn-sm btn-info px-3 rounded-pill">Edit</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#1ied8n2</td>
                                        <td>Lorem ipsum </td>
                                        <td>Lorem ipsum</td>
                                        <td>320</td>
                                        <td>390</td>
                                        <td>---</td>
                                        <td>
                                            <button class="btn btn-sm btn-info px-3 rounded-pill">Edit</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#1ied8n2</td>
                                        <td>Lorem ipsum </td>
                                        <td>Lorem ipsum</td>
                                        <td>320</td>
                                        <td>390</td>
                                        <td>---</td>
                                        <td>
                                            <button class="btn btn-sm btn-info px-3 rounded-pill">Edit</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#1ied8n2</td>
                                        <td>Lorem ipsum </td>
                                        <td>Lorem ipsum</td>
                                        <td>320</td>
                                        <td>390</td>
                                        <td>---</td>
                                        <td>
                                            <button class="btn btn-sm btn-info px-3 rounded-pill">Edit</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#1ied8n2</td>
                                        <td>Lorem ipsum </td>
                                        <td>Lorem ipsum</td>
                                        <td>320</td>
                                        <td>390</td>
                                        <td>---</td>
                                        <td>
                                            <button class="btn btn-sm btn-info px-3 rounded-pill">Edit</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#1ied8n2</td>
                                        <td>Lorem ipsum </td>
                                        <td>Lorem ipsum</td>
                                        <td>320</td>
                                        <td>390</td>
                                        <td>---</td>
                                        <td>
                                            <button class="btn btn-sm btn-info px-3 rounded-pill">Edit</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="col-sm-12 col-md-1 col-lg-1"></div>
                    </div>
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
            </div>
            <div class="col-md-4 mt-5 px-3">
                <div class="container bg-white">
                    <div class="row p-3">
                        <div class="col-sm-12 col-md-6 col-lg-6 py-3">
                            <strong class="text-nowrap">Articles les plus consommés.</strong>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-1 col-lg-1"></div>
                        <div class="col-sm-12 col-md-11 col-lg-11">
                            <table class="table table-borderless table-responsive">
                                <thead>
                                    <tr>
                                        <th>Reference</th>
                                        <th>Nom du produit</th>
                                        <th>Quantité</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#1ied8n2</td>
                                        <td>Lorem ipsum </td>
                                        <td>1239</td>
                                    </tr>
                                    <tr>
                                        <td>#1ied8n2</td>
                                        <td>Lorem ipsum </td>
                                        <td>1239</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <div class="col-sm-12 col-md-1 col-lg-1"></div>
                    </div>
                </div>
                <div class="container mt-3 bg-white">
                    <div class="row p-3">
                        <div class="col-sm-12 col-md-6 col-lg-6 py-3 text-md-end d-flex align-items-center">
                            <strong class="text-nowrap">Commandes.</strong>
                            <a href="#" class="text-decoration-none text-nowrap tout_voir">Tout voir</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-1 col-lg-1"></div>
                        <div class="col-sm-12 col-md-11 col-lg-11">
                            <table class="table table-borderless table-responsive">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>N°commande</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>12/07/23</td>
                                        <td>Lorem ipsum </td>
                                        <td>
                                            <button class="btn btn-sm btn-info px-3 text-nowrap rounded-pill">Voir la
                                                commande</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>12/07/23</td>
                                        <td>Lorem ipsum </td>
                                        <td>
                                            <button class="btn btn-sm btn-info px-3 text-nowrap rounded-pill">Voir la
                                                commande</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>12/07/23</td>
                                        <td>Lorem ipsum </td>
                                        <td>
                                            <button class="btn btn-sm btn-info px-3 text-nowrap rounded-pill">Voir la
                                                commande</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-sm-12 col-md-1 col-lg-1"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7">
                <div class="container rounded-3 mt-5">
                    <div class="row align-items-center rounded-3 bg-white p-3">
                        <div class="col-sm-12 col-md-2 col-lg-2"></div>
                        <div class="col-md-9 col-lg-9 bg-white  px-3 py-3">
                            <strong class="py-2">Report.</strong> <span class="float-right">This year</span>
                            <canvas class="py-2 pb-4" id="repot"></canvas>
                        </div>
                        <div class="col-sm-12 col-md-1 col-lg-1"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 bg-white mt-5 px-3 py-3">
                <strong class="py-2">Distribution by category.</strong> <span class="float-right">Last 6 month</span>
                <canvas class="py-2 pb-4" id="barchart2"></canvas>
            </div>
        </div>

    </div>
    </div>
@endsection
