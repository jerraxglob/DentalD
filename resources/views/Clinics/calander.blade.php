@extends('Clinics.partials.main')
@section('content')
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body mx-4">
                    <div class="d-flex justify-content-center position-relative mb-4">
                        <h5 class="clr-db font-22" id="exampleModalLabel">Add an event.</h5>
                        <a type="" class="position-absolute" style="  right: 0; "data-bs-dismiss="modal"
                            aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                viewBox="0 0 28 28">
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
                    <div class="conatiner">
                        <form action="">
                            <div class=" d-flex justify-content-start align-items-center gap-4 mb-3">
                                <div class="">
                                    <a href="#" class="btn btn-outline-dark btn-sm bg-white text-dark">Public</a>
                                </div>
                                <div class="">
                                    <a href="#" class="btn btn-info btn-sm text-white">Private</a>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center align-items-center">
                                <div class=" mt-2 d-flex align-items-center gap-2">
                                    <svg id="Group_4" data-name="Group 4" xmlns="http://www.w3.org/2000/svg"
                                        width="17.442" height="15.653" viewBox="0 0 17.442 15.653">
                                        <g id="Map">
                                            <g id="Group_14" data-name="Group 14">
                                                <path id="Union"
                                                    d="M13.671,9a.671.671,0,0,0,0,1.342H15.46A.671.671,0,0,0,15.46,9Z"
                                                    transform="translate(-1.372 -0.95)" fill="#102940" />
                                                <path id="Union-2" data-name="Union"
                                                    d="M8,9.671A.671.671,0,0,1,8.671,9H10.46a.671.671,0,1,1,0,1.342H8.671A.671.671,0,0,1,8,9.671Z"
                                                    transform="translate(-0.844 -0.95)" fill="#102940" />
                                                <path id="Union-3" data-name="Union"
                                                    d="M3.671,12a.671.671,0,1,0,0,1.342H5.46A.671.671,0,1,0,5.46,12Z"
                                                    transform="translate(-0.317 -1.266)" fill="#102940" />
                                                <path id="Union-4" data-name="Union"
                                                    d="M13,12.671A.671.671,0,0,1,13.671,12H15.46a.671.671,0,0,1,0,1.342H13.671A.671.671,0,0,1,13,12.671Z"
                                                    transform="translate(-1.372 -1.266)" fill="#102940" />
                                                <path id="Union-5" data-name="Union"
                                                    d="M8.671,12a.671.671,0,1,0,0,1.342H10.46a.671.671,0,1,0,0-1.342Z"
                                                    transform="translate(-0.844 -1.266)" fill="#102940" />
                                                <g id="Group_1" data-name="Group 1">
                                                    <g id="Union-6" data-name="Union" transform="translate(-0.317 -0.95)"
                                                        fill="none">
                                                        <path
                                                            d="M3,9.671A.671.671,0,0,1,3.671,9H5.46a.671.671,0,1,1,0,1.342H3.671A.671.671,0,0,1,3,9.671Z"
                                                            stroke="none" />
                                                        <path
                                                            d="M 3.670844554901123 8.999995231628418 L 5.45976448059082 8.999995231628418 C 5.830265045166016 8.999995231628418 6.13060474395752 9.300345420837402 6.13060474395752 9.670845031738281 C 6.13060474395752 10.04134464263916 5.830265045166016 10.34168529510498 5.45976448059082 10.34168529510498 L 3.670844554901123 10.34168529510498 C 3.300344944000244 10.34168529510498 3.000004768371582 10.04134464263916 3.000004768371582 9.670845031738281 C 3.000004768371582 9.300345420837402 3.300344944000244 8.999995231628418 3.670844554901123 8.999995231628418 Z"
                                                            stroke="none" fill="#102940" />
                                                    </g>
                                                    <g id="Union-7" data-name="Union" fill="none">
                                                        <path
                                                            d="M4.249,0A.671.671,0,0,1,4.92.671V.894h7.6V.671a.671.671,0,0,1,1.342,0V.894h1.118a2.46,2.46,0,0,1,2.46,2.46v9.839a2.46,2.46,0,0,1-2.46,2.46H2.46A2.46,2.46,0,0,1,0,13.193V3.354A2.46,2.46,0,0,1,2.46.894H3.578V.671A.671.671,0,0,1,4.249,0Zm8.274,2.236V2.46a.671.671,0,0,0,1.342,0V2.236h1.118A1.118,1.118,0,0,1,16.1,3.354V5.143a.224.224,0,0,1-.224.224H1.565a.224.224,0,0,1-.224-.224V3.354A1.118,1.118,0,0,1,2.46,2.236H3.578V2.46a.671.671,0,1,0,1.342,0V2.236ZM1.342,6.693a1.579,1.579,0,0,0,.224.016H15.877a1.579,1.579,0,0,0,.224-.016v6.5a1.118,1.118,0,0,1-1.118,1.118H2.46a1.118,1.118,0,0,1-1.118-1.118Z"
                                                            stroke="none" />
                                                        <path
                                                            d="M 4.248682975769043 2.86102294921875e-06 C 4.619182586669922 2.86102294921875e-06 4.919532775878906 0.3003425598144531 4.919532775878906 0.6708431243896484 L 4.919532775878906 0.8944625854492188 L 12.52243232727051 0.8944625854492188 L 12.52243232727051 0.6708431243896484 C 12.52243232727051 0.3003425598144531 12.82278251647949 2.86102294921875e-06 13.19328308105469 2.86102294921875e-06 C 13.56378269195557 2.86102294921875e-06 13.86412239074707 0.3003425598144531 13.86412239074707 0.6708431243896484 L 13.86412239074707 0.8944625854492188 L 14.98220252990723 0.8944625854492188 C 16.3406925201416 0.8944625854492188 17.44196319580078 1.995733261108398 17.44196319580078 3.354223251342773 L 17.44196319580078 13.19328308105469 C 17.44196319580078 14.55177307128906 16.3406925201416 15.65304279327393 14.98220252990723 15.65304279327393 L 2.459762573242188 15.65304279327393 C 1.101272583007812 15.65304279327393 1.9073486328125e-06 14.55177307128906 1.9073486328125e-06 13.19328308105469 L 1.9073486328125e-06 3.354223251342773 C 1.9073486328125e-06 1.995733261108398 1.101272583007812 0.8944625854492188 2.459762573242188 0.8944625854492188 L 3.577842712402344 0.8944625854492188 L 3.577842712402344 0.6708431243896484 C 3.577842712402344 0.3003425598144531 3.878182411193848 2.86102294921875e-06 4.248682975769043 2.86102294921875e-06 Z M 4.248682975769043 3.130612373352051 C 3.878182411193848 3.130612373352051 3.577842712402344 2.830263137817383 3.577842712402344 2.459762573242188 L 3.577842712402344 2.236152648925781 L 2.459762573242188 2.236152648925781 C 1.842272758483887 2.236152648925781 1.341691970825195 2.736732482910156 1.341691970825195 3.354223251342773 L 1.341691970825195 5.143142700195312 C 1.341691970825195 5.266642570495605 1.441802978515625 5.366763114929199 1.565302848815918 5.366763114929199 L 15.8766622543335 5.366763114929199 C 16.00016212463379 5.366763114929199 16.10027313232422 5.266642570495605 16.10027313232422 5.143142700195312 L 16.10027313232422 3.354223251342773 C 16.10027313232422 2.736732482910156 15.59969234466553 2.236152648925781 14.98220252990723 2.236152648925781 L 13.86412239074707 2.236152648925781 L 13.86412239074707 2.459762573242188 C 13.86412239074707 2.830263137817383 13.56378269195557 3.130612373352051 13.19328308105469 3.130612373352051 C 12.82278251647949 3.130612373352051 12.52243232727051 2.830263137817383 12.52243232727051 2.459762573242188 L 12.52243232727051 2.236152648925781 L 4.919532775878906 2.236152648925781 L 4.919532775878906 2.459762573242188 C 4.919532775878906 2.830263137817383 4.619182586669922 3.130612373352051 4.248682975769043 3.130612373352051 Z M 15.8766622543335 6.708453178405762 L 1.565302848815918 6.708453178405762 C 1.489382743835449 6.708453178405762 1.414722442626953 6.703042984008789 1.341691970825195 6.692592620849609 L 1.341691970825195 13.19328308105469 C 1.341691970825195 13.81077289581299 1.842272758483887 14.31135272979736 2.459762573242188 14.31135272979736 L 14.98220252990723 14.31135272979736 C 15.59969234466553 14.31135272979736 16.10027313232422 13.81077289581299 16.10027313232422 13.19328308105469 L 16.10027313232422 6.692592620849609 C 16.02724266052246 6.703042984008789 15.95258235931396 6.708453178405762 15.8766622543335 6.708453178405762 Z"
                                                            stroke="none" fill="#102940" />
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                    <span>Wednesday,</span> <span>July 24, 2023</span>
                                    <small class="adevtime">10:30 </small>
                                    <small>-</small>
                                    <small class="adevtime"> 11:30 </small>
                                    <small>(60min)</small>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center align-items-center">
                                <div class="col-12 col-md-12 col-lg-12 mt-2">
                                    <div class="mb-3">
                                        <label for="address" class="clr-db font-14">Address</label>
                                        <input class="form-control form-control-sm" type="text" name="address"
                                            aria-label=".form-control-sm">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-12 mt-2">
                                <div class="mb-3 border-top-0">
                                    <label for="des" class="clr-db font-14">Add guests</label>
                                    <textarea class="form-control des" rows="3">
                                      </textarea>
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
                                    <label for="title" class="clr-db font-14">Title</label>
                                    <input class="form-control form-control-sm" type="text" name="title"
                                        aria-label=".form-control-sm">
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-12 mt-2">
                                <div class="mb-3">
                                    <label for="des" class="clr-db font-14">Description</label>
                                    <textarea class="form-control des" rows="4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet in hic ipsa minus assumenda vel sapiente, saepe dolorem totam voluptatibus velit praesentium at accusantium.
                                      </textarea>
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-12 mt-2">
                                <div class="mb-3 border-top-0">
                                    <div class="form-check border-bottom  pb-4">
                                        <input class="form-check-input" name="obli" type="checkbox" value=""
                                            id="obli">
                                        <label class="clr-db font-14" for="obli">
                                            Obligatory?
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class=" d-flex justify-content-center">
                        <button type="button" class="btn btn-info btn-sm text-white">Publish new event</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4 px-4">
        <div class="row gx-5">
            <div class="col-12 col-md-8 col-lg-8 mt-4 mb-3">
                <div class="p-3 border bg-white position-relative">
                    <div class="calendar-search-div">
                        <div class="input-icons position-relative d-flex align-items-center wd-200">
                            <svg class="fas  fa-search position-absolute translate-bottom  text-start  text-secondary"
                                style="left : 7%" id="Box_1" data-name="Box 1" xmlns="http://www.w3.org/2000/svg"
                                width="15.012" height="15.012" viewBox="0 0 15.012 15.012">
                                <g id="Group_1" data-name="Group 1">
                                    <path id="Union"
                                        d="M6.736,0a6.736,6.736,0,1,0,4.338,11.89l2.953,2.953a.577.577,0,0,0,.817-.817L11.89,11.074A6.736,6.736,0,0,0,6.736,0ZM1.155,6.736a5.582,5.582,0,1,1,5.582,5.582A5.582,5.582,0,0,1,1.155,6.736Z"
                                        fill="#8e999a" />
                                </g>
                            </svg>
                            <input class="form-control form-control-sm wd-200 mx-2 px-4" id="PatientsearchInput"
                                placeholder="Find a meeting event …" />
                        </div>
                    </div>
                    <div id="calendar"></div>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4 mt-4">
                <div class="p-3 border bg-white">
                    <span class="font-22 clr-db mb-4">Next events.</span>

                    <div class="table-responsive mt-4">
                        <table class="table">
                            <thead>
                                <tr style="border-color: transparent">
                                    <th class="font-14 clr-db fw450 ">Date</th>
                                    <th class="font-14 clr-db fw450 ">Event</th>
                                    <th class="font-14 clr-db fw450  d-flex justify-content-end">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>22/05/23</td>
                                    <td class="text-nowrap">Event name</td>
                                    <td class="d-flex justify-content-end"><button
                                            class="btn btn-sm bg-white outline-success text-success text-nowrap">Information
                                            sent</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>22/05/23</td>
                                    <td class="text-nowrap">Event name</td>
                                    <td class="d-flex justify-content-end"><button
                                            class="btn btn-sm bg-white outline-success text-success text-nowrap">Information
                                            sent</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>22/05/23</td>
                                    <td class="text-nowrap">Event name</td>
                                    <td class="d-flex justify-content-end"><button
                                            class="btn btn-sm bg-white outline-success text-success text-nowrap">Information
                                            sent</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>22/05/23</td>
                                    <td class="text-nowrap">Event name</td>
                                    <td class="d-flex justify-content-end"><button
                                            class="btn btn-sm bg-white outline-success text-success text-nowrap">Information
                                            sent</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>22/05/23</td>
                                    <td class="text-nowrap">Event name</td>
                                    <td class="d-flex justify-content-end"><button
                                            class="btn btn-sm bg-white outline-success text-success text-nowrap">Information
                                            sent</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>22/05/23</td>
                                    <td class="text-nowrap">Event name</td>
                                    <td class="d-flex justify-content-end"><button
                                            class="btn btn-sm bg-white outline-pending text-pending text-nowrap">pending
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>22/05/23</td>
                                    <td class="text-nowrap">Event name</td>
                                    <td class="d-flex justify-content-end"><button
                                            class="btn btn-sm bg-white outline-pending text-pending text-nowrap">pending
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>22/05/23</td>
                                    <td class="text-nowrap">Event name</td>
                                    <td class="d-flex justify-content-end"><button
                                            class="btn btn-sm bg-white outline-pending text-pending text-nowrap">pending
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
