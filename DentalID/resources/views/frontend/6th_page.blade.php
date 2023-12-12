@extends('frontend.partials.main')
@section('content')
    <div class="container py-5 pl-5">
        <div class="row  d-flex align-items-center">
            <div class="col-sm-12 col-md-1 col-lg-1"></div>
            <div class="col-md-10 col-lg-10  py-4 rounded-3  d-flex justify-content-lg-between bg-white align-items-center ">
                <h5 class="py-2 ">Order</h5>
                <div class=" align-items-center  pl-3 d-flex align-items-center">
                    <a class="btn btn-sm btn-info mx-2 text-white text-decoration-none text-nowrap  px-4 py-2"><i
                            class="fas fa-plus px-1 text-white"></i>Add new order
                    </a>
                </div>

            </div>
            <div class="col-sm-12 col-md-1 col-lg-1"></div>
        </div>
        <div class="row d-flex align-items-center">
            <div class="col-sm-12 col-md-1 col-lg-1"></div>
            <div class="col-md-10 col-lg-10  gx-5    py-3 rounded-3  bg-white ">
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
                <!-- Tabs navs -->
                <!-- Tabs content -->
                <div class="tab-content" id="ex-with-icons-content">
                    <div class="tab-pane fade show active" id="ex-with-icons-tabs-1" role="tabpanel"
                        aria-labelledby="ex-with-icons-tab-1">
                        <table class="table table-borderless table-responsive">
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
                                        <button type="button" class=" btn btn-outline-dark btn-sm">Ongoing</button>
                                    </td>
                                    <td>
                                        Supplier 1
                                    </td>
                                    <td> <a
                                            class="btn btn-sm btn-info mx-2 text-white text-decoration-none text-nowrap  px-4 py-2"><i
                                                class="fas fa-plus px-1 text-white"></i>Update order
                                        </a></td>
                                </tr>
                                <tr>

                                    <td>183736e</td>
                                    <td>23/08/2023</td>
                                    <td>130</td>
                                    <td>
                                        <button type="button" class=" btn btn-outline-dark btn-sm">Ongoing</button>
                                    </td>
                                    <td>
                                        Supplier 1
                                    </td>
                                    <td> <a
                                            class="btn btn-sm btn-info mx-2 text-white text-decoration-none text-nowrap  px-4 py-2"><i
                                                class="fas fa-plus px-1 text-white"></i>Update order
                                        </a></td>
                                </tr>
                                <tr>

                                    <td>183736e</td>
                                    <td>23/08/2023</td>
                                    <td>130</td>
                                    <td>
                                        <button type="button" class=" btn btn-outline-dark btn-sm">Ongoing</button>
                                    </td>
                                    <td>
                                        Supplier 1
                                    </td>
                                    <td> <a
                                            class="btn btn-sm btn-info mx-2 text-white text-decoration-none text-nowrap  px-4 py-2"><i
                                                class="fas fa-plus px-1 text-white"></i>Update order
                                        </a></td>
                                </tr>
                                <tr>

                                    <td>183736e</td>
                                    <td>23/08/2023</td>
                                    <td>130</td>
                                    <td>
                                        <button type="button" class=" btn btn-outline-dark btn-sm">Ongoing</button>
                                    </td>
                                    <td>
                                        Supplier 1
                                    </td>
                                    <td> <a
                                            class="btn btn-sm btn-info mx-2 text-white text-decoration-none text-nowrap  px-4 py-2"><i
                                                class="fas fa-plus px-1 text-white"></i>Update order
                                        </a></td>
                                </tr>
                                <tr>

                                    <td>183736e</td>
                                    <td>23/08/2023</td>
                                    <td>130</td>
                                    <td>
                                        <button type="button" class=" btn btn-outline-dark btn-sm">Ongoing</button>
                                    </td>
                                    <td>
                                        Supplier 1
                                    </td>
                                    <td> <a
                                            class="btn btn-sm btn-info mx-2 text-white text-decoration-none text-nowrap  px-4 py-2"><i
                                                class="fas fa-plus px-1 text-white"></i>Update order
                                        </a></td>
                                </tr>
                                <tr>

                                    <td>183736e</td>
                                    <td>23/08/2023</td>
                                    <td>130</td>
                                    <td>
                                        <button type="button" class=" btn btn-outline-dark btn-sm">Ongoing</button>
                                    </td>
                                    <td>
                                        Supplier 1
                                    </td>
                                    <td> <a
                                            class="btn btn-sm btn-info mx-2 text-white text-decoration-none text-nowrap  px-4 py-2"><i
                                                class="fas fa-plus px-1 text-white"></i>Update order
                                        </a></td>
                                </tr>

                            </tbody>

                        </table>
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
                    <div class="tab-pane fade" id="ex-with-icons-tabs-2" role="tabpanel"
                        aria-labelledby="ex-with-icons-tab-2">
                        Tab 2 content
                    </div>

                </div>
            </div>
            <div class="col-sm-12 col-md-1 col-lg-1"></div>
        </div>

    </div>

    </div>
@endsection
