@extends('frontend.partials.main')
@section('content')
    <div class="modal fade" id="addneworder" tabindex="-1" aria-labelledby="addneworderLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="  d-flex justify-content-center align-items-center mt-3 mb-4">
                        <div class="d-flex flex-column justify-content-center align-items-center w-full">

                            <h5 class="modal-title font-22 clr-db border-b-bl" id="addnewsupplier">Add new order</h5>

                        </div>
                        <a type="" class="" data-bs-dismiss="modal" aria-label="Close"><svg
                                xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28">
                                <g id="Group_252" data-name="Group 252" transform="translate(-573.941 -28.352)">
                                    <g id="Ellipse_1" data-name="Ellipse 1" transform="translate(573.941 28.352)"
                                        fill="#eff1f2" stroke="#102940" stroke-width="1">
                                        <circle cx="14" cy="14" r="14" stroke="none" />
                                        <circle cx="14" cy="14" r="13.5" fill="none" />
                                    </g>
                                    <g id="Group_212" data-name="Group 212"
                                        transform="translate(587.991 31.377) rotate(45)">
                                        <line id="Line_2" data-name="Line 2" y2="15.591" transform="translate(7.986)"
                                            fill="none" stroke="#102940" stroke-linecap="round" stroke-width="2" />
                                        <line id="Line_3" data-name="Line 3" x2="15.591"
                                            transform="translate(0 7.985)" fill="none" stroke="#102940"
                                            stroke-linecap="round" stroke-width="2" />
                                    </g>
                                </g>
                            </svg>
                        </a>

                    </div>
                    <form role="form" method="POST" action="" style="
    margin-left: 50px;
">
                        <div class="row mb-3 align-items-center">
                            <div class="col-md-4">
                                <label for="pay-method" class="form-label font-14 clr-db">Supplier</label>
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
                                <label for="reference" class="form-label font-14 clr-db">Reference</label>
                                <input type="text" class="form-control form-control-sm" id="reference" name="reference"
                                    value="">
                            </div>
                            <div class="col-md-3">
                                <label for="pro-name" class="form-label font-14 clr-db">Product name</label>
                                <input type="text" class="form-control form-control-sm" id="pro-name" name="pro-name"
                                    value="">
                            </div>
                            <div class="col-md-2">
                                <label for="quantity" class="form-label font-14 clr-db">Quantity</label>
                                <input type="number" class="form-control form-control-sm" id="quantity" name="quantity"
                                    value="">
                            </div>
                            <div class="col-md-2">
                                <label for="price" class="form-label font-14 clr-db">Price</label>
                                <input type="text" class="form-control form-control-sm" id="Price" name="Price"
                                    value="">
                            </div>
                            <div class="col-md-2 mt-4">
                                <strong class="text-danger px-2">X</strong>
                            </div>

                        </div>
                        <div class="row mb-3 align-items-center">
                            <div class="col-md-3">
                                <label for="reference" class="form-label font-14 clr-db">Reference</label>
                                <input type="text" class="form-control form-control-sm" id="reference"
                                    name="reference" value="">
                            </div>
                            <div class="col-md-3">
                                <label for="pro-name" class="form-label font-14 clr-db">Product name</label>
                                <input type="text" class="form-control form-control-sm" id="pro-name"
                                    name="pro-name" value="">
                            </div>
                            <div class="col-md-2">
                                <label for="quantity" class="form-label font-14 clr-db">Quantity</label>
                                <input type="number" class="form-control form-control-sm" id="quantity"
                                    name="quantity" value="">
                            </div>
                            <div class="col-md-2">
                                <label for="price" class="form-label font-14 clr-db">Price</label>
                                <input type="text" class="form-control form-control-sm" id="Price" name="Price"
                                    value="">
                            </div>
                            <div class="col-md-2 mt-4">
                                <strong class="text-danger px-2">X</strong>
                            </div>
                        </div>
                        <div class="row mb-3 align-items-center border-b-br pb-3">
                            <div class="col-md-3">
                                <label for="reference" class="form-label font-14 clr-db">Reference</label>
                                <input type="text" class="form-control form-control-sm" id="reference"
                                    name="reference" value="">
                            </div>
                            <div class="col-md-3">
                                <label for="pro-name" class="form-label font-14 clr-db">Product name</label>
                                <input type="text" class="form-control form-control-sm" id="pro-name"
                                    name="pro-name" value="">
                            </div>
                            <div class="col-md-2">
                                <label for="quantity" class="form-label font-14 clr-db">Quantity</label>
                                <input type="number" class="form-control form-control-sm" id="quantity"
                                    name="quantity" value="">
                            </div>
                            <div class="col-md-2">
                                <label for="price" class="form-label font-14 clr-db">Price</label>
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
                class=" col-12 col-md-12 col-lg-12 d-flex justify-content-between align-items-center px-5 rounded-3 bg-white pt-5 pb-4">
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
                                        <th> <span class="d-flex gap-2 align-items-center">
                                                <p class="clr-th mb-0 font-14">Order no. </p>
                                                <svg id="Group_921" data-name="Group 921"
                                                    xmlns="http://www.w3.org/2000/svg" width="16.667" height="16.667"
                                                    viewBox="0 0 16.667 16.667">
                                                    <rect id="Rectangle_850" data-name="Rectangle 850" width="16.667"
                                                        height="16.667" fill="none" />
                                                    <path id="Vector_22_Stroke_" data-name="Vector 22 (Stroke)"
                                                        d="M.174.193a.555.555,0,0,1,.842,0L4.167,3.682,7.317.193a.555.555,0,0,1,.842,0,.71.71,0,0,1,0,.932L5.008,4.614a1.111,1.111,0,0,1-1.684,0L.174,1.125A.71.71,0,0,1,.174.193Z"
                                                        transform="translate(4.167 5.833)" fill="#2a283b" />
                                                </svg>

                                            </span>
                                        </th>
                                        <th>

                                            <span class="d-flex gap-2 align-items-center">
                                                <p class="clr-th mb-0 font-14">Order date </p>
                                                <svg id="Group_921" data-name="Group 921"
                                                    xmlns="http://www.w3.org/2000/svg" width="16.667" height="16.667"
                                                    viewBox="0 0 16.667 16.667">
                                                    <rect id="Rectangle_850" data-name="Rectangle 850" width="16.667"
                                                        height="16.667" fill="none" />
                                                    <path id="Vector_22_Stroke_" data-name="Vector 22 (Stroke)"
                                                        d="M.174.193a.555.555,0,0,1,.842,0L4.167,3.682,7.317.193a.555.555,0,0,1,.842,0,.71.71,0,0,1,0,.932L5.008,4.614a1.111,1.111,0,0,1-1.684,0L.174,1.125A.71.71,0,0,1,.174.193Z"
                                                        transform="translate(4.167 5.833)" fill="#2a283b" />
                                                </svg>

                                            </span>

                                        </th>
                                        <th>
                                            <span class="d-flex gap-2 align-items-center">
                                                <p class="clr-th mb-0 font-14">Number of product </p>
                                                <svg id="Group_921" data-name="Group 921"
                                                    xmlns="http://www.w3.org/2000/svg" width="16.667" height="16.667"
                                                    viewBox="0 0 16.667 16.667">
                                                    <rect id="Rectangle_850" data-name="Rectangle 850" width="16.667"
                                                        height="16.667" fill="none" />
                                                    <path id="Vector_22_Stroke_" data-name="Vector 22 (Stroke)"
                                                        d="M.174.193a.555.555,0,0,1,.842,0L4.167,3.682,7.317.193a.555.555,0,0,1,.842,0,.71.71,0,0,1,0,.932L5.008,4.614a1.111,1.111,0,0,1-1.684,0L.174,1.125A.71.71,0,0,1,.174.193Z"
                                                        transform="translate(4.167 5.833)" fill="#2a283b" />
                                                </svg>

                                            </span>

                                        </th>
                                        <th>
                                            <span class="d-flex gap-2 align-items-center">
                                                <p class="clr-th mb-0 font-14">Order status </p>
                                                <svg id="Group_921" data-name="Group 921"
                                                    xmlns="http://www.w3.org/2000/svg" width="16.667" height="16.667"
                                                    viewBox="0 0 16.667 16.667">
                                                    <rect id="Rectangle_850" data-name="Rectangle 850" width="16.667"
                                                        height="16.667" fill="none" />
                                                    <path id="Vector_22_Stroke_" data-name="Vector 22 (Stroke)"
                                                        d="M.174.193a.555.555,0,0,1,.842,0L4.167,3.682,7.317.193a.555.555,0,0,1,.842,0,.71.71,0,0,1,0,.932L5.008,4.614a1.111,1.111,0,0,1-1.684,0L.174,1.125A.71.71,0,0,1,.174.193Z"
                                                        transform="translate(4.167 5.833)" fill="#2a283b" />
                                                </svg>

                                            </span>

                                        </th>
                                        <th>
                                            <span class="d-flex gap-2 align-items-center">
                                                <p class="clr-th mb-0 font-14">Supplier</p>
                                                <svg id="Group_921" data-name="Group 921"
                                                    xmlns="http://www.w3.org/2000/svg" width="16.667" height="16.667"
                                                    viewBox="0 0 16.667 16.667">
                                                    <rect id="Rectangle_850" data-name="Rectangle 850" width="16.667"
                                                        height="16.667" fill="none" />
                                                    <path id="Vector_22_Stroke_" data-name="Vector 22 (Stroke)"
                                                        d="M.174.193a.555.555,0,0,1,.842,0L4.167,3.682,7.317.193a.555.555,0,0,1,.842,0,.71.71,0,0,1,0,.932L5.008,4.614a1.111,1.111,0,0,1-1.684,0L.174,1.125A.71.71,0,0,1,.174.193Z"
                                                        transform="translate(4.167 5.833)" fill="#2a283b" />
                                                </svg>

                                            </span>

                                        </th>
                                        <th>
                                            <span class="d-flex gap-2 align-items-center">
                                                <p class="clr-th mb-0 font-14">Action</p>
                                                <svg id="Group_921" data-name="Group 921"
                                                    xmlns="http://www.w3.org/2000/svg" width="16.667" height="16.667"
                                                    viewBox="0 0 16.667 16.667">
                                                    <rect id="Rectangle_850" data-name="Rectangle 850" width="16.667"
                                                        height="16.667" fill="none" />
                                                    <path id="Vector_22_Stroke_" data-name="Vector 22 (Stroke)"
                                                        d="M.174.193a.555.555,0,0,1,.842,0L4.167,3.682,7.317.193a.555.555,0,0,1,.842,0,.71.71,0,0,1,0,.932L5.008,4.614a1.111,1.111,0,0,1-1.684,0L.174,1.125A.71.71,0,0,1,.174.193Z"
                                                        transform="translate(4.167 5.833)" fill="#2a283b" />
                                                </svg>

                                            </span>

                                        </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="border-b-br">
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
                                    <tr class="border-b-br">
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
                                    <tr class="border-b-br">
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
                                    <tr class="border-b-br">
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
                                    <tr class="border-b-br">
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
                                    <tr class="border-b-br">
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
                            <nav aria-label="Page navigation ">
                                <ul class="pagination d-flex justify-content-end">
                                    <span class="clr-pg font-14 px-4  d-flex align-items-center">1000 results</span>
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li class="page-item disabled"><a class="page-link" href="#">Page 1/3</a></li>
                                    <!-- <li class="page-item"><a class="page-link" href="#">2</a></li> -->
                                    <!-- <li class="page-item"><a class="page-link" href="#">3</a></li> -->
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
