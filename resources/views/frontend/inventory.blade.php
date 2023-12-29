@extends('frontend.partials.main')
@section('content')
    <div class="modal fade" id="Stock_modification" tabindex="-1" aria-labelledby="Stock_modification" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header   no-border-bottom d-flex justify-content-center align-items-center">
                    <div class="d-flex flex-column justify-content-center align-items-center w-full">
                        <svg xmlns="http://www.w3.org/2000/svg" width="59" height="53" viewBox="0 0 59 53">
                            <g id="Group_604" data-name="Group 604" transform="translate(-89.504 -373.872)">
                                <text id="_" data-name="!" transform="translate(115.504 388.872)" fill="#102940"
                                    font-size="28" font-family="SegoeUI-Bold, Segoe UI" font-weight="700">
                                    <tspan x="-1" y="30">!</tspan>
                                </text>
                                <g id="Polygon_1" data-name="Polygon 1" transform="translate(89.504 373.872)" fill="none"
                                    stroke-linecap="round">
                                    <path
                                        d="M28.626,1.57a1,1,0,0,1,1.748,0l27.8,49.944A1,1,0,0,1,57.3,53H1.7a1,1,0,0,1-.874-1.486Z"
                                        stroke="none" />
                                    <path
                                        d="M 29.49999237060547 10.28081512451172 L 8.505359649658203 47.99999618530273 L 50.49463272094727 47.99999618530273 L 29.49999237060547 10.28081512451172 M 29.49999809265137 1.056167602539062 C 29.84158134460449 1.056167602539062 30.18316268920898 1.227386474609375 30.3737621307373 1.56982421875 L 58.17268753051758 51.5136604309082 C 58.543701171875 52.18019866943359 58.06176376342773 52.99999618530273 57.29892349243164 52.99999618530273 L 1.701076507568359 52.99999618530273 C 0.9382247924804688 52.99999618530273 0.456298828125 52.18019866943359 0.827301025390625 51.5136604309082 L 28.62622451782227 1.56982421875 C 28.81683158874512 1.227386474609375 29.15841484069824 1.056167602539062 29.49999809265137 1.056167602539062 Z"
                                        stroke="none" fill="#102940" />
                                </g>
                            </g>
                        </svg>
                        <h5 class="modal-title   fw-bold" id="addnewsupplier">Stock modification</h5>

                    </div>
                    <<<<<<< HEAD <button type="button" class="btn-close rounded-circle border border-dark text-dark"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                        =======
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
                        >>>>>>> aa39d50d4260ce46c6a8a0760ddb454508f2da49
                </div>
                <div class="modal-body">
                    <form role="form" method="POST" action="">
                        <div class="row mb-5">
                            <p>You have changed the product stock.
                                Check the quantity entered, select a reason and specify the reason for the change</p>
                            <div class="col-md-4 mt-4">
                                <label for="date" class="form-label">Actual stock</label>
                                <input type="number" class="form-control form-control-sm" id="Actual_stock"
                                    name="Actual_stock">
                            </div>
                            <div class="col-md-4 mt-4">
                                <label for="Modification " class="form-label">Modification </label>
                                <input type="text" class="form-control form-control-sm" id="Modification "
                                    name="Modification " placeholder="Nom du Modification ">
                            </div>
                            <div class="col-md-4 mt-4">
                                <label for="Limit" class="form-label">Limit</label>
                                <input type="number" class="form-control form-control-sm" id="Limit" name="Limit"
                                    placeholder="8277t3d">
                            </div>
                        </div>
                        <hr>
                        <div class="row mb-3 mt-5 mb-5">
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
                                <button type="submit" class="btn btn-info btn-sm text-white">Confirm
                                    modification</button>
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
                <div class="container rounded-3 mt-5 bg-white pt-4">
                    <div class=" align-items-center rounded-3 bg-white py-3 d-flex justify-content-between">
                        <div class="d-flex align-items-center">
                            <strong class="text-start"> Gestion de stock</strong>
                        </div>
                        <div class=" align-items-end d-flex gap-3 align-items-end">
                            <a href="#" class="btn btn-sm btn-outline-info px-2"> Order</a>
                            <a href="#" class="btn btn-sm btn-info text-white px-2" data-bs-toggle="modal"
                                data-bs-target="#addnewproduct"><i class="fas fa-plus text-white"></i>
                                Add new
                                product</a>
                        </div>
                    </div>
                    <div class="row align-items-center rounded-3 bg-white py-3">
                        <div class="col-sm-12 col-md-6 col-lg-6 align-items-center">
                            <div class="input-icons position-relative d-flex align-items-center">
                                <svg class="fas  fa-search position-absolute translate-bottom  text-start  text-secondary"
                                    style="left : 3%" id="Box_1" data-name="Box 1"
                                    xmlns="http://www.w3.org/2000/svg" width="15.012" height="15.012"
                                    viewBox="0 0 15.012 15.012">
                                    <g id="Group_1" data-name="Group 1">
                                        <path id="Union"
                                            d="M6.736,0a6.736,6.736,0,1,0,4.338,11.89l2.953,2.953a.577.577,0,0,0,.817-.817L11.89,11.074A6.736,6.736,0,0,0,6.736,0ZM1.155,6.736a5.582,5.582,0,1,1,5.582,5.582A5.582,5.582,0,0,1,1.155,6.736Z"
                                            fill="#8e999a" />
                                    </g>
                                </svg>
                                <input class="form-control form-control-sm w-50 mx-2 pl-8" id="searchInput"
                                    type="text" placeholder="Search for a product …" />
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-2 col-lg-2"></div>
                        <div class="col-sm-12 col-md-4 col-lg-4 d-flex justify-content-end">
                            <a href="#" type="button" class="btn btn-sm btn-white border border-dark px-2">
                                Add filter <i class="fas fa-bars mr-3"></i>
                            </a>

                        </div>
                    </div>
                    <div class="row align-items-center rounded-3 bg-white py-3">
                        <!-- <div class="col-sm-12 col-md-1 col-lg-1"></div> -->
                        <div class="w-full px-0">
                            <div class="table-responsive">
                                <table class="table table-borderless ">
                                    <thead>
                                        <tr>
                                            <th class="clr-th font-14">Reference</th>
                                            <th class="clr-th font-14">Product name</th>
                                            <th class="clr-th font-14">Category</th>
                                            <th class="clr-th font-14">In stock</th>
                                            <th class="clr-th font-14">Limit</th>
                                            <th class="clr-th font-14">Expiration date</th>
                                            <th class="clr-th font-14">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="border-b-br">
                                            <td>#1ied8n2</td>
                                            <td>Lorem ipsum </td>
                                            <td>Lorem ipsum</td>
                                            <td>320</td>
                                            <td>390</td>
                                            <td>---</td>
                                            <td>
                                                <button type="button"
                                                    class="btn btn-sm btn-info px-3 text-white rounded-pill"
                                                    data-bs-toggle="modal" data-bs-target="#Stock_modification">
                                                    Edit
                                                </button>

                                            </td>
                                        </tr>
                                        <tr class="border-b-br">
                                            <td>#1ied8n2</td>
                                            <td>Lorem ipsum </td>
                                            <td>Lorem ipsum</td>
                                            <td>320</td>
                                            <td>390</td>
                                            <td>---</td>
                                            <td>
                                                <button type="button"
                                                    class="btn btn-sm text-white btn-info px-3 rounded-pill"
                                                    data-bs-toggle="modal" data-bs-target="#Stock_modification">
                                                    Edit
                                                </button>

                                            </td>
                                        </tr>
                                        <tr class="border-b-br">
                                            <td>#1ied8n2</td>
                                            <td>Lorem ipsum </td>
                                            <td>Lorem ipsum</td>
                                            <td>320</td>
                                            <td>390</td>
                                            <td>---</td>
                                            <td>
                                                <button type="button"
                                                    class="btn text-white btn-sm btn-info px-3 rounded-pill"
                                                    data-bs-toggle="modal" data-bs-target="#Stock_modification">
                                                    Edit
                                                </button>

                                            </td>
                                        </tr>
                                        <tr class="border-b-br">
                                            <td>#1ied8n2</td>
                                            <td>Lorem ipsum </td>
                                            <td>Lorem ipsum</td>
                                            <td>320</td>
                                            <td>390</td>
                                            <td>---</td>
                                            <td>
                                                <button type="button"
                                                    class="btn text-white btn-sm btn-info px-3 rounded-pill"
                                                    data-bs-toggle="modal" data-bs-target="#Stock_modification">
                                                    Edit
                                                </button>

                                            </td>
                                        </tr>
                                        <tr class="border-b-br">
                                            <td>#1ied8n2</td>
                                            <td>Lorem ipsum </td>
                                            <td>Lorem ipsum</td>
                                            <td>320</td>
                                            <td>390</td>
                                            <td>---</td>
                                            <td>
                                                <button type="button"
                                                    class="btn text-white btn-sm btn-info px-3 rounded-pill"
                                                    data-bs-toggle="modal" data-bs-target="#Stock_modification">
                                                    Edit
                                                </button>

                                            </td>
                                        </tr>
                                        <tr class="border-b-br">
                                            <td>#1ied8n2</td>
                                            <td>Lorem ipsum </td>
                                            <td>Lorem ipsum</td>
                                            <td>320</td>
                                            <td>390</td>
                                            <td>---</td>
                                            <td>
                                                <button type="button"
                                                    class="btn btn-sm text-white btn-info px-3 rounded-pill"
                                                    data-bs-toggle="modal" data-bs-target="#Stock_modification">
                                                    Edit
                                                </button>

                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <nav aria-label="Page navigation ">
                                    <ul class="pagination d-flex justify-content-end">
                                        <span class="clr-pg font-14 px-4  d-flex align-items-center">1000 results</span>
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true"><svg style="
    transform: rotate(90deg);
"
                                                        xmlns="http://www.w3.org/2000/svg" width="14.08" height="8.448"
                                                        viewBox="0 0 14.08 8.448">
                                                        <path id="Vector_22_Stroke_" data-name="Vector 22 (Stroke)"
                                                            d="M.295.326a.938.938,0,0,1,1.422,0L7.04,6.22,12.363.326a.938.938,0,0,1,1.422,0,1.2,1.2,0,0,1,0,1.575L8.462,7.8a1.877,1.877,0,0,1-2.844,0L.295,1.9A1.2,1.2,0,0,1,.295.326Z"
                                                            fill="#8791a3" />
                                                    </svg>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="page-item disabled"><a class="page-link" href="#">Page 1/3</a>
                                        </li>
                                        <!-- <li class="page-item"><a class="page-link" href="#">2</a></li> -->
                                        <!-- <li class="page-item"><a class="page-link" href="#">3</a></li> -->
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span aria-hidden="true"><svg style="
    transform: rotate(270deg);
"
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
            <div class="col-md-4 col-lg-4 mt-5 px-3">
                <div class="container bg-white rounded-3">
                    <div class="row py-3">
                        <div class="col-sm-12 col-md-6 col-lg-6 py-3">
                            <span class="text-nowrap clr-db font-22">Articles les plus consommés.</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="">
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
                                        <tr class="border-b-br">
                                            <td>#1ied8n2</td>
                                            <td>Lorem ipsum </td>
                                            <td>1239</td>
                                        </tr>
                                        <tr class="border-b-br">
                                            <td>#1ied8n2</td>
                                            <td>Lorem ipsum </td>
                                            <td>1239</td>
                                        </tr>
                                        <tr class="border-b-br">
                                            <td>#1ied8n2</td>
                                            <td>Lorem ipsum </td>
                                            <td>1239</td>
                                        </tr>
                                        <tr class="border-b-br">
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
                <div class="container mt-3 bg-white rounded-3">
                    <div class="py-3 d-flex justify-content-between w-full align-items-center">
                        <div class="">
                            <span class="text-nowrap clr-db font-22">Commandes.</span>
                        </div>
                        <div class="">
                            <a href="#" class="text-decoration-none   text-nowrap font-16 lblue">Tout voir</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="">
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
                                        <tr class="border-b-br">
                                            <td>12/07/23</td>
                                            <td>Lorem ipsum </td>
                                            <td>
                                                <button
                                                    class="btn btn-sm btn-info px-3 text-nowrap text-white rounded-pill">Voir
                                                    la
                                                    commande</button>
                                            </td>
                                        </tr>
                                        <tr class="border-b-br">
                                            <td>12/07/23</td>
                                            <td>Lorem ipsum </td>
                                            <td>
                                                <button
                                                    class="btn btn-sm btn-info px-3 text-white text-nowrap rounded-pill">Voir
                                                    la
                                                    commande</button>
                                            </td>
                                        </tr>
                                        <tr class="border-b-br">
                                            <td>12/07/23</td>
                                            <td>Lorem ipsum </td>
                                            <td>
                                                <button
                                                    class="btn btn-sm btn-info px-3 text-white text-nowrap rounded-pill">Voir
                                                    la
                                                    commande</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

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
                            <span class="py-2 font-22 clr-bg">Report.</span> <span class="float-end font-14 clr-bg">This
                                year</span>
                            <canvas class="py-2 pb-4" id="report"></canvas>
                        </div>
                        <div class="col-sm-12 col-md-1 col-lg-1"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 bg-white mt-5 px-3 py-3">
                <span class="py-2 font-22 clr-bg">Distribution by category.</span> <span
                    class="float-end font-14 clr-db">Last 6 month

                    <svg xmlns="http://www.w3.org/2000/svg" width="8.333" height="5" viewBox="0 0 8.333 5"
                        class="ml-5">
                        <path id="Vector_22_Stroke_" data-name="Vector 22 (Stroke)"
                            d="M.174.193a.555.555,0,0,1,.842,0L4.167,3.682,7.317.193a.555.555,0,0,1,.842,0,.71.71,0,0,1,0,.932L5.008,4.614a1.111,1.111,0,0,1-1.684,0L.174,1.125A.71.71,0,0,1,.174.193Z"
                            fill="#2a283b" />
                    </svg>

                </span>
                <canvas class="py-2 pb-4" id="dis_category"></canvas>
            </div>
        </div>
    </div>
    {{-- add new product modal --}}
    <div class="modal fade" id="addnewproduct" tabindex="-1" aria-labelledby="addnewproductLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class=" mb-5 d-flex justify-content-center align-items-center position-relative">
                        <h5 class="modal-title  fw-bold" id="addnewsupplier">Add new product</h5>
                        <button type="button" class="btn-close position-absolute" data-bs-dismiss="modal"
                            aria-label="Close" style="
    right: 0%;
    font-size: 32px;
"></button>
                    </div>
                    <form role="form" method="POST" action="">
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label for="refrence" class="form-label">Reference</label>
                                <input type="text" class="form-control form-control-sm" id="refrence"
                                    name="refrence" value="">
                            </div>
                            <div class="col-md-4">
                                <label for="pro-name" class="form-label ">Product name</label>
                                <input type="text" class="form-control form-control-sm" id="pro-name"
                                    name="pro-name" value="">
                            </div>
                            <div class="col-md-4">
                                <label for="category" class="form-label">Category</label>
                                <select class="form-select form-select-sm" name="category" aria-label=".form-select-sm ">
                                    <option selected class="px-2">chose category</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label for="address" class="form-label ">Quantity</label>
                                <input type="number" class="form-control form-control-sm" id="quantity"
                                    name="quantity">
                            </div>
                            <div class="col-md-4">
                                <label for="best-quant" class="form-label ">Best quantity</label>
                                <input type="number" class="form-control form-control-sm" id="best-quant"
                                    name="best-quant">
                            </div>
                            <div class="col-md-4">
                                <label for="limit-alert" class="form-label ">Limit for alert</label>
                                <input type="text" class="form-control form-control-sm" id="limit-alert"
                                    name="limit-alert">
                            </div>
                        </div>
                        <div class="row mb-3 border-b-br pb-4">
                            <div class="col-md-4">
                                <label for="supplier" class="form-label ">Supplier</label>
                                <select class="form-select form-select-sm" name="supplier"
                                    aria-label=".form-select-sm example">
                                    <option selected>Chose Supplier</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="buy-price" class="form-label  font-14">Buying price (1pcs)</label>
                                <input type="text" class="form-control form-control-sm" id="buy-price"
                                    name="buy-price">
                            </div>
                            <div class="col-md-4">

                            </div>
                        </div>

                        <div class="row mb-3 d-flex align-items-center mt-4">
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
                                <label for="date" class="form-label fw-bold">Date</label>
                                <input type="date" class="form-control form-control-sm" id="date"
                                    name="date">
                            </div>
                        </div>
                        <div class="row mb-3">

                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-info btn-sm text-white">Add new product</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
