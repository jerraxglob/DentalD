@extends('frontend.partials.main')
@section('content')
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add an event.</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="conatiner">
                        <form action="">
                            <div class="row d-flex justify-content-start align-items-center  for-btn-private">
                                <div class="col-12 col-md-6 col-lg-6">
                                    <a href="#" class="btn btn-info btn-sm text-white">Public</a>
                                </div>
                                <div class="col-12 col-md-6 col-lg-6">
                                    <a href="#" class="btn btn-outline-dark btn-sm bg-white text-dark">Private</a>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center align-items-center">
                                <div class="col-12 col-md-12 col-lg-12 mt-2">
                                    <i class="fas fa-calendar-alt"></i> <span>Wednesday,</span> <span>July 24, 2023</span>

                                    <small>10:30 - 11:30 (60min)</small>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center align-items-center">
                                <div class="col-12 col-md-12 col-lg-12 mt-2">
                                    <div class="mb-3">
                                        <label for="address" class="form-label">Address</label>
                                        <input class="form-control form-control-sm" type="text" name="address"
                                            aria-label=".form-control-sm">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-12 mt-2">
                                <div class="mb-3 border-top-0">
                                    <div class="form-check border-bottom  ">
                                        <input class="form-check-input" name="send-email" type="checkbox" value=""
                                            id="flexCheckDefault">
                                        <label class="form-check-label text-dark" for="flexCheckDefault">
                                            Send an email notification to the whole team
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-6 mt-2">
                                <div class="mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input class="form-control form-control-sm" type="text" name="title"
                                        aria-label=".form-control-sm">
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-12 mt-2">
                                <div class="mb-3">
                                    <label for="des" class="form-label">Description</label>
                                    <textarea class="form-control des" rows="4">
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                        Eveniet in hic ipsa minus assumenda vel sapiente, saepe
                                        dolorem totam voluptatibus velit praesentium at accusantium.
                                      </textarea>
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-12 mt-2">
                                <div class="mb-3 border-top-0">
                                    <div class="form-check border-bottom  ">
                                        <input class="form-check-input" name="obli" type="checkbox" value=""
                                            id="obli">
                                        <label class="form-check-label text-dark" for="obli">
                                            Obligatory?
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer d-flext justify-content-center">
                    <button type="button" class="btn btn-info btn-sm text-white">Publish new event</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4 px-4">
        <div class="row gx-5">
            <div class="col-12 col-md-8 col-lg-8 mt-4 mb-3">
                <div class="p-3 border bg-white">
                    <div id="calendar"></div>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4 mt-4">
                <div class="p-3  bg-white">
                    <h6 class="text-start fw-bold">Next events.</h6>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Event</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>22/05/23</td>
                                    <td class="text-nowrap">Event name</td>
                                    <td><button
                                            class="btn btn-sm bg-white btn-outline-success text-success text-nowrap">Information
                                            sent</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>22/05/23</td>
                                    <td class="text-nowrap">Event name</td>
                                    <td><button
                                            class="btn btn-sm bg-white btn-outline-success text-success text-nowrap">Information
                                            sent</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>22/05/23</td>
                                    <td class="text-nowrap">Event name</td>
                                    <td><button
                                            class="btn btn-sm bg-white btn-outline-success text-success text-nowrap">Information
                                            sent</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>22/05/23</td>
                                    <td class="text-nowrap">Event name</td>
                                    <td><button
                                            class="btn btn-sm bg-white btn-outline-success text-success text-nowrap">Information
                                            sent</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>22/05/23</td>
                                    <td class="text-nowrap">Event name</td>
                                    <td><button
                                            class="btn btn-sm bg-white btn-outline-success text-success text-nowrap">Information
                                            sent</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>22/05/23</td>
                                    <td class="text-nowrap">Event name</td>
                                    <td><button
                                            class="btn btn-sm bg-white btn-outline-secondary text-muted text-nowrap">pendding
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>22/05/23</td>
                                    <td class="text-nowrap">Event name</td>
                                    <td><button
                                            class="btn btn-sm bg-white btn-outline-secondary text-muted text-nowrap">pendding
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>22/05/23</td>
                                    <td class="text-nowrap">Event name</td>
                                    <td><button
                                            class="btn btn-sm bg-white btn-outline-secondary text-muted text-nowrap">pedding
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
