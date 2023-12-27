@extends('frontend.partials.main')
@section('content')
    <div class="modal fade" id="addneworder" tabindex="-1" aria-labelledby="addneworderLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header  d-flex justify-content-center align-items-center">
                    <h5 class="modal-title  mx-auto-no-right  fw-bold" id="addneworder">Add new order</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form role="form" method="POST" action="">
                        <div class="row mb-3 align-items-center">
                            <div class="col-md-4">
                                <label for="pay-method" class="form-label">Supplier</label>
                                <select class="form-select form-select-sm" name="pay-method"
                                    aria-label=".form-select-sm example">
                                    <option selected>Choose Supplier</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3 align-items-center">
                            <div class="col-md-3">
                                <label for="reference" class="form-label">Reference</label>
                                <input type="text" class="form-control form-control-sm" id="reference" name="reference"
                                    value="">
                            </div>
                            <div class="col-md-3">
                                <label for="pro-name" class="form-label">Product name</label>
                                <input type="text" class="form-control form-control-sm" id="pro-name" name="pro-name"
                                    value="">
                            </div>
                            <div class="col-md-2">
                                <label for="quantity" class="form-label">Quantity</label>
                                <input type="number" class="form-control form-control-sm" id="quantity" name="quantity"
                                    value="">
                            </div>
                            <div class="col-md-2">
                                <label for="price" class="form-label">Price</label>
                                <input type="text" class="form-control form-control-sm" id="Price" name="Price"
                                    value="">
                            </div>
                            <div class="col-md-2 mt-4">
                                <strong class="text-danger px-2">X</strong>
                            </div>

                        </div>
                        <div class="row mb-3 align-items-center">
                            <div class="col-md-3">
                                <label for="reference" class="form-label">Reference</label>
                                <input type="text" class="form-control form-control-sm" id="reference" name="reference"
                                    value="">
                            </div>
                            <div class="col-md-3">
                                <label for="pro-name" class="form-label">Product name</label>
                                <input type="text" class="form-control form-control-sm" id="pro-name" name="pro-name"
                                    value="">
                            </div>
                            <div class="col-md-2">
                                <label for="quantity" class="form-label">Quantity</label>
                                <input type="number" class="form-control form-control-sm" id="quantity" name="quantity"
                                    value="">
                            </div>
                            <div class="col-md-2">
                                <label for="price" class="form-label">Price</label>
                                <input type="text" class="form-control form-control-sm" id="Price" name="Price"
                                    value="">
                            </div>
                            <div class="col-md-2 mt-4">
                                <strong class="text-danger px-2">X</strong>
                            </div>

                        </div>
                        <div class="row mb-3 align-items-center">
                            <div class="col-md-3">
                                <label for="reference" class="form-label">Reference</label>
                                <input type="text" class="form-control form-control-sm" id="reference"
                                    name="reference" value="">
                            </div>
                            <div class="col-md-3">
                                <label for="pro-name" class="form-label">Product name</label>
                                <input type="text" class="form-control form-control-sm" id="pro-name"
                                    name="pro-name" value="">
                            </div>
                            <div class="col-md-2">
                                <label for="quantity" class="form-label">Quantity</label>
                                <input type="number" class="form-control form-control-sm" id="quantity"
                                    name="quantity" value="">
                            </div>
                            <div class="col-md-2">
                                <label for="price" class="form-label">Price</label>
                                <input type="text" class="form-control form-control-sm" id="Price" name="Price"
                                    value="">
                            </div>
                            <div class="col-md-2 mt-4">
                                <strong class="text-danger px-2">X</strong>
                            </div>

                        </div>

                        <div class="row mb-3 align-items-center">
                            <div class="col-md-8">
                            </div>
                            <div class="col-md-4">
                                <h6>Total : CHF XXX .-</h6>
                            </div>

                        </div>
                        <div class="row mb-3">
                            <div class="col-md-2"></div>
                            <div class="d-grid  col-md-6 ">
                                <button type="submit" class="btn btn-info btn-sm text-white">Add new order</button>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <div class="container py-5 px-4">
        <div class="row d-flex align-items-center">
            <div
                class=" col-12 col-md-12 col-lg-12 d-flex justify-content-between align-items-center py-3 rounded-3 bg-white ">
                <h5>Orders</h5>
                <a href="#" class="btn btn-sm btn-info text-white text-decoration-none" data-bs-toggle="modal"
                    data-bs-target="#addneworder"><i class="fas fa-plus px-1 text-center text-white"></i>Add new order
                </a>
            </div>
        </div>
        <div class="row d-flex align-items-center">
            <div class=" col-12 col-md-12 col-lg-12 bg-white ">
                <ul class="nav nav-tabs mb-3" id="ex-with-icons" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a data-bs-toggle="tab" class="nav-link active" id="ex-with-icons-tab-1"
                            href="#ex-with-icons-tabs-1" role="tab" aria-controls="ex-with-icons-tabs-1"
                            aria-selected="true">
                            Ongoing orders
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a data-bs-toggle="tab" class="nav-link" id="ex-with-icons-tab-2" href="#ex-with-icons-tabs-2"
                            role="tab" aria-controls="ex-with-icons-tabs-2" aria-selected="false">
                            Archived orders
                        </a>
                    </li>

                </ul>
                <div class="tab-content" id="ex-with-icons-content">
                    <div class="tab-pane fade show active" id="ex-with-icons-tabs-1" role="tabpanel"
                        aria-labelledby="ex-with-icons-tab-1">
                        <div class="table-responsive container">
                            <table class="table table-borderless ">
                                <thead>
                                    <tr>
                                        <th>Order no. </th>
                                        <th>Order date </th>
                                        <th>Number of product </th>
                                        <th>Order status </th>
                                        <th>Supplier</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>183736e</td>
                                        <td>23/08/2023</td>
                                        <td>130</td>
                                        <td>
                                            <a href="#" class=" btn btn-outline-dark bg-white btn-sm">Ongoing</a>
                                        </td>
                                        <td>
                                            Supplier 1
                                        </td>
                                        <td> <a href="{{ URL::route('update_order') }}"
                                                class="btn btn-sm btn-info mx-2 text-white text-decoration-none text-nowrap  px-4 py-2"><i
                                                    class="fas fa-plus px-1 text-white"></i>Update order
                                            </a></td>
                                    </tr>
                                    <tr>
                                        <td>183736e</td>
                                        <td>23/08/2023</td>
                                        <td>130</td>
                                        <td>
                                            <a href="#" class=" btn btn-outline-dark bg-white btn-sm">Ongoing</a>
                                        </td>
                                        <td>
                                            Supplier 1
                                        </td>
                                        <td> <a href="{{ URL::route('update_order') }}"
                                                class="btn btn-sm btn-info mx-2 text-white text-decoration-none text-nowrap  px-4 py-2"><i
                                                    class="fas fa-plus px-1 text-white"></i>Update order
                                            </a></td>
                                    </tr>
                                    <tr>
                                        <td>183736e</td>
                                        <td>23/08/2023</td>
                                        <td>130</td>
                                        <td>
                                            <a href="#" class=" btn btn-outline-dark bg-white btn-sm">Ongoing</a>
                                        </td>
                                        <td>
                                            Supplier 1
                                        </td>
                                        <td> <a href="{{ URL::route('update_order') }}"
                                                class="btn btn-sm btn-info mx-2 text-white text-decoration-none text-nowrap  px-4 py-2"><i
                                                    class="fas fa-plus px-1 text-white"></i>Update order
                                            </a></td>
                                    </tr>
                                    <tr>
                                        <td>183736e</td>
                                        <td>23/08/2023</td>
                                        <td>130</td>
                                        <td>
                                            <a href="#" class=" btn btn-outline-dark bg-white btn-sm">Ongoing</a>
                                        </td>
                                        <td> Supplier 1</td>

                                        <td> <a href="{{ URL::route('update_order') }}"
                                                class="btn btn-sm btn-info mx-2 text-white text-decoration-none text-nowrap  px-4 py-2"><i
                                                    class="fas fa-plus px-1 text-white"></i>Update order
                                            </a></td>
                                    </tr>
                                    <tr>
                                        <td>183736e</td>
                                        <td>23/08/2023</td>
                                        <td>130</td>
                                        <td>
                                            <a href="#" class=" btn btn-outline-dark bg-white btn-sm">Ongoing</a>
                                        </td>
                                        <td>
                                            Supplier 1
                                        </td>
                                        <td> <a href="{{ URL::route('update_order') }}"
                                                class="btn btn-sm btn-info mx-2 text-white text-decoration-none text-nowrap  px-4 py-2"><i
                                                    class="fas fa-plus px-1 text-white"></i>Update order
                                            </a></td>
                                    </tr>
                                    <tr>
                                        <td>183736e</td>
                                        <td>23/08/2023</td>
                                        <td>130</td>
                                        <td>
                                            <a href="#" class=" btn btn-outline-dark bg-white btn-sm">Ongoing</a>
                                        </td>
                                        <td>
                                            Supplier 1
                                        </td>
                                        <td> <a href="{{ URL::route('update_order') }}"
                                                class="btn btn-sm btn-info mx-2 text-white text-decoration-none text-nowrap  px-4 py-2"><i
                                                    class="fas fa-plus px-1 text-white"></i>Update order
                                            </a></td>
                                    </tr>
                                </tbody>
                            </table>
                            <nav aria-label="Page navigation">
                                <ul class="pagination d-flex justify-content-end">
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

                </div>
            </div>
        </div>
    </div>
@endsection
