@extends('frontend.partials.main')
@section('content')
    {{-- <div class="container  mt-4">
        <div class="row gap-x-2 d-flex justify-content-center">
            <div class="col-12 col-md-8 col-lg-8 bg-white p-4">

            </div>

            <div class="col-12 col-md-3 col-lg-3 p-4 bg-white">
                <h5 class="d-flex justify-content-start">Next events.</h5>

            </div>
        </div>
    </div> --}}
    <div class="container mt-4 px-4">
        <div class="row gx-5">
            <div class="col-12 col-md-8 col-lg-8">
                <div class="p-3 border bg-white">
                    <div id="calendar"></div>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4">
                <div class="p-3 border bg-white">
                    <strong>Next events.</strong>
                    <hr>
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
                                        class="btn btn-sm bg-white btn-outline-secondary text-success text-nowrap">Information
                                        sent</button>
                                </td>
                            </tr>
                            <tr>
                                <td>22/05/23</td>
                                <td class="text-nowrap">Event name</td>
                                <td><button
                                        class="btn btn-sm bg-white btn-outline-secondary text-success text-nowrap">Information
                                        sent</button>
                                </td>
                            </tr>
                            <tr>
                                <td>22/05/23</td>
                                <td class="text-nowrap">Event name</td>
                                <td><button
                                        class="btn btn-sm bg-white btn-outline-secondary text-success text-nowrap">Information
                                        sent</button>
                                </td>
                            </tr>
                            <tr>
                                <td>22/05/23</td>
                                <td class="text-nowrap">Event name</td>
                                <td><button
                                        class="btn btn-sm bg-white btn-outline-secondary text-success text-nowrap">Information
                                        sent</button>
                                </td>
                            </tr>
                            <tr>
                                <td>22/05/23</td>
                                <td class="text-nowrap">Event name</td>
                                <td><button
                                        class="btn btn-sm bg-white btn-outline-secondary text-success text-nowrap">Information
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
                                <td><button class="btn btn-sm bg-white btn-outline-secondary text-muted text-nowrap">pedding
                                    </button>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
