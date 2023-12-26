@extends('frontend.partials.main')
@section('content')
<div class="modal fade" id="Stock_modification" tabindex="-1" aria-labelledby="Stock_modification" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header  d-flex justify-content-center align-items-center">
                    <h5 class="modal-title  mx-auto-no-right  fw-bold" id="addnewsupplier">Stock modification</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form role="form" method="POST" action="">
                        <div class="row mb-3">
                            <p>You have changed the product stock.
Check the quantity entered, select a reason and specify the reason for the change</p>
                            <div class="col-md-4">
                                <label for="date" class="form-label">Actual stock</label>
                                <input type="number" class="form-control form-control-sm" id="Actual_stock" name="Actual_stock">
                            </div>
                            <div class="col-md-4">
                                <label for="Modification " class="form-label">Modification </label>
                                <input type="text" class="form-control form-control-sm" id="Modification " name="Modification "
                                    placeholder="Nom du Modification ">
                            </div>
                            <div class="col-md-4">
                                <label for="Limit" class="form-label">Limit</label>
                                <input type="number" class="form-control form-control-sm" id="Limit"
                                    name="Limit" placeholder="8277t3d">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label for="Reason" class="form-label">Reason</label>
                                <input type="text" class="form-control form-control-sm" id="Reason" name="Reason"
                                    placeholder="Type d’assurance">
                            </div>
                            <div class="col-md-8">
                                <label for="Comment" class="form-label">Comment</label>
                                <input type="text" class="form-control form-control-sm" id="Comment"
                                    name="Comment">
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="d-grid  col-md-6 d-flex justify-content-center w-full">
                                <button type="submit" class="btn btn-info btn-sm text-white">Confirm modification</button>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

<div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-lg-8">
                <div class="container rounded-3 mt-5">
                    <div class="row align-items-center rounded-3 bg-white p-3">
                        <div class="col-sm-12 col-md-4 col-lg-4 align-items-center">
                            <strong class="text-start"> Stock management</strong>
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4 align-items-center"> </div>
                        <div class="col-sm-12 col-md-4 col-lg-4 align-items-center">
                            <a href="#" class="btn btn-sm btn-outline-info px-2"> Order</a>
                            <a href="#" class="btn btn-sm btn-info text-white px-2" data-bs-toggle="modal"
                                data-bs-target="#addnewproduct"><i class="fas fa-plus text-white"></i>
                                Add new
                                product</a>
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
                            <a href="#" type="button" class="btn btn-sm btn-white border border-dark px-2">
                                Add filter <i class="fas fa-bars mr-3"></i>
                            </a>

                        </div>
                    </div>
                    <div class="row align-items-center rounded-3 bg-white p-3">
                        <div class="col-sm-12 col-md-1 col-lg-1"></div>
                        <div class="col-sm-12 col-md-10 col-lg-10">
                            <div class="table-responsive">
                                <table class="table table-borderless ">
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
                                            <button type="button" class="btn btn-sm btn-info px-3 rounded-pill" data-bs-toggle="modal"
                                        data-bs-target="#Stock_modification">
                                        Edit
                                    </button>

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
                                <nav aria-label="Page navigation ">
                                    <ul class="pagination  d-flex justify-content-end">
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
            <div class="col-md-4 col-lg-4 mt-5 px-3">
                <div class="container bg-white">
                    <div class="row p-3">
                        <div class="col-sm-12 col-md-6 col-lg-6 py-3">
                            <strong class="text-nowrap">Articles les plus consommés.</strong>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-1 col-lg-1"></div>
                        <div class="col-sm-12 col-md-11 col-lg-11">
                            <div class="table-responsive">
                                <table class="table table-borderless ">
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
                        </div>
                        <div class="col-sm-12 col-md-1 col-lg-1"></div>
                    </div>
                </div>
                <div class="container mt-3 bg-white">
                    <div class="row p-3 d-flex align-items-center ">
                        <div class="col-sm-12 col-md-3 col-lg-3 py-3 text-md-end d-flex align-items-center">
                            <strong class="text-nowrap">Commandes.</strong>
                        </div>
                        <div class="col-12 col-md-3 col-lg-3">
                            <a href="#" class="text-decoration-none text-nowrap tout_voir">Tout voir</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-1 col-lg-1"></div>
                        <div class="col-sm-12 col-md-11 col-lg-11">
                            <div class="table-responsive">
                                <table class="table table-borderless ">
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
                            <strong class="py-2">Report.</strong> <span class="float-end">This year</span>
                            <canvas class="py-2 pb-4" id="report"></canvas>
                        </div>
                        <div class="col-sm-12 col-md-1 col-lg-1"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 bg-white mt-5 px-3 py-3">
                <strong class="py-2">Distribution by category.</strong> <span class="float-end">Last 6 month</span>
                <canvas class="py-2 pb-4" id="dis_category"></canvas>
            </div>
        </div>
    </div>

    {{-- add new product modal --}}
    <div class="modal fade" id="addnewproduct" tabindex="-1" aria-labelledby="addnewproductLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header  d-flex justify-content-center align-items-center">
                    <h5 class="modal-title  mx-auto-no-right  fw-bold" id="addnewsupplier">Add new product</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form role="form" method="POST" action="">
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label for="refrence" class="form-label">Reference</label>
                                <input type="text" class="form-control form-control-sm" id="refrence"
                                    name="refrence" value="">
                            </div>
                            <div class="col-md-4">
                                <label for="pro-name" class="form-label">Product name</label>
                                <input type="text" class="form-control form-control-sm" id="pro-name"
                                    name="pro-name" value="">
                            </div>
                            <div class="col-md-4">
                                <label for="category" class="form-label">Category</label>
                                <select class="form-select form-select-sm" name="category"
                                    aria-label=".form-select-sm example">
                                    <option selected>Chose Category</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label for="address" class="form-label">Quantity</label>
                                <input type="number" class="form-control form-control-sm" id="quantity"
                                    name="quantity">
                            </div>
                            <div class="col-md-4">
                                <label for="best-quant" class="form-label">Best quantity</label>
                                <input type="number" class="form-control form-control-sm" id="best-quant"
                                    name="best-quant">
                            </div>
                            <div class="col-md-4">
                                <label for="limit-alert" class="form-label">Limit for alert</label>
                                <input type="text" class="form-control form-control-sm" id="limit-alert"
                                    name="limit-alert">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label for="supplier" class="form-label">Supplier</label>
                                <select class="form-select form-select-sm" name="supplier"
                                    aria-label=".form-select-sm example">
                                    <option selected>Chose Supplier</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="buy-price" class="form-label">Buying price (1pcs)</label>
                                <input type="text" class="form-control form-control-sm" id="buy-price"
                                    name="buy-price">
                            </div>
                            <div class="col-md-4">

                            </div>
                        </div>

                        <div class="row mb-3 d-flex align-items-center">
                            <div class="col-md-8">
                                <div class="form-check">
                                    <input class="form-check-input" name="exp-date" type="checkbox" value=""
                                        id="flexCheckDefault">
                                    <label class="form-check-label text-nowrap" for="flexCheckDefault">
                                        This product has an expiration date
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="date" class="form-label">Date</label>
                                <input type="date" class="form-control form-control-sm" id="date"
                                    name="date">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-2"></div>
                            <div class="d-grid  col-md-6 ">
                                <button type="submit" class="btn btn-info btn-sm text-white">Add new product</button>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
