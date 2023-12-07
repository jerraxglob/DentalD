@extends('frontend.partials.main')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="card">
                <h6 class="px-3 mb-3 py-3">Fiche patient.</h6>
                <!-- Tabs navs -->
                <ul class="nav nav-tabs mb-3" id="ex-with-icons" role="tablist">
                    <span><button class="btn btn-sm btn-white mx-2 border border-secondary"><i
                                class="fas fa-chevron-left"></i></button></span>
                    <li class="nav-item" role="presentation">
                        <a data-bs-toggle="tab" class="nav-link active" id="ex-with-icons-tab-1"
                            href="#ex-with-icons-tabs-1" role="tab" aria-controls="ex-with-icons-tabs-1"
                            aria-selected="true">
                            Photographies
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a data-bs-toggle="tab" class="nav-link" id="ex-with-icons-tab-2" href="#ex-with-icons-tabs-2"
                            role="tab" aria-controls="ex-with-icons-tabs-2" aria-selected="false">
                            Rappels et suivis
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a data-bs-toggle="tab" class="nav-link" id="ex-with-icons-tab-3" href="#ex-with-icons-tabs-3"
                            role="tab" aria-controls="ex-with-icons-tabs-3" aria-selected="false">
                            Communication
                        </a>
                    </li> <span><button class="btn btn-sm btn-white mx-2 border border-secondary"><i
                                class="fas fa-chevron-right"></i></button></span>
                </ul>
                <!-- Tabs navs -->

                <!-- Tabs content -->
                <div class="tab-content" id="ex-with-icons-content">
                    <div class="tab-pane fade show active" id="ex-with-icons-tabs-1" role="tabpanel"
                        aria-labelledby="ex-with-icons-tab-1">
                        Tab 1 content
                    </div>
                    <div class="tab-pane fade" id="ex-with-icons-tabs-2" role="tabpanel"
                        aria-labelledby="ex-with-icons-tab-2">
                        Tab 2 content
                    </div>
                    <div class="tab-pane fade" id="ex-with-icons-tabs-3" role="tabpanel"
                        aria-labelledby="ex-with-icons-tab-3">
                        <div class="card-header">
                            <div class="container">
                                <div class="row align-content-center align-items-center">
                                    <!-- Avatar and Name -->
                                    <div class="col-lg-3 col-sm-12 col-md-6 col-sm-6">
                                        <div class="row align-items-center justify-content-center">
                                            <div class="col-12 col-md-6 col-lg-6">
                                                <img src="https://shots.codepen.io/username/pen/egBPwO-1280.jpg?version=1487190581"
                                                    alt="Avatar" class="img-fluid rounded-circle">
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                                <h6 class="text-center mt-2">Evelyn Thomas <br>
                                                    N°284740</h6>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Information patient -->
                                    <div class="col-sm-12 col-md-4 col-lg-3 text-center justify-content-center">
                                        <h6>Information patient.</h6> <br>
                                        <i class="fas fa-exclamation-triangle text-danger mx-2"> </i><span
                                            class="text-danger">Mauvais payeur</span>
                                    </div>
                                    <!-- Prochain(s) rendez-vous -->
                                    <div class="col-sm-12 col-md-4 col-lg-3 text-center justify-content-center">
                                        <h6>Prochain(s) rendez-vous.</h6>
                                        <br>
                                        <span class="fs-6 bg-info text-nowrap bd-highlight p-0">
                                            Motif deconsultation Statut patient</span>
                                    </div>
                                    <!-- Médicament(s) -->
                                    <div class="col-sm-12 col-md-4 col-lg-3 text-center justify-content-center">
                                        <h6>Médicament(s).</h6><br>
                                        <span class="text-warning">Nom médicament</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body mt-4">
                            <div class="row">
                                <div class="col-12 col-md-4 col-lg-4">
                                    <div class="d-flex justify-content-end mb-3">
                                        <!-- Filter button on the right side -->
                                        <button type="button" class="btn btn-white border border-dark">
                                            Ajouter un filtre <i class="fa-solid fa-bars"></i>
                                        </button>
                                    </div>
                                    <div class="col-md-12 col-lg-12 col-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h6 class="card-title"><b>Evelyn Thomas</b></h6>
                                                    </div>
                                                    <div class="col-md-6 text-muted ">
                                                        <span class="date text-end">Date</span>
                                                    </div>
                                                </div>
                                                <p class="card-text text-start text-muted">Lorem Ipsum is simply
                                                    dummy text of
                                                    the
                                                    printing. Lorem Ipsum is simply dummy text of the printing …</p>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h6 class="card-title"><b>Dr Sarah Dib</b></h6>
                                                    </div>
                                                    <div class="col-md-6 text-muted ">
                                                        <span class="date text-end text-muted">Date</span>
                                                    </div>
                                                </div>
                                                <p class="card-text text-start text-muted">Lorem Ipsum is simply
                                                    dummy text of
                                                    the
                                                    printing. Lorem Ipsum is simply dummy text of the printing …</p>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h6 class="card-title"><b>Evelyn Thomas</b></h6>
                                                    </div>
                                                    <div class="col-md-6 text-muted ">
                                                        <span class="date text-end">Date</span>
                                                    </div>
                                                </div>
                                                <p class="card-text text-start text-muted">Lorem Ipsum is simply
                                                    dummy text of
                                                    the
                                                    printing. Lorem Ipsum is simply dummy text of the printing …</p>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h6 class="card-title"><b>Dr Sarah Dib</b></h6>
                                                    </div>
                                                    <div class="col-md-6 text-muted ">
                                                        <span class="date text-end">Date</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-grid  col-12  mx-auto  py-4 mb-2">
                                                <button class="btn btn-primary" type="button"><i
                                                        class="fas fa-plus text-white"></i>
                                                    Nouveau
                                                    message</button>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="col-12 col-md-8 col-lg-8">
                                    <h6 class="text-right mt-2">Objet du message</h6>
                                    <b class="text-muted mt-2">Date</b><br>
                                    <b class="mt-2">Message</b>
                                    <p class="text-left mt-2">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the
                                        industry's standard dummy text ever since the 1500s, when an unknown printer took a
                                        galley of type and scrambled it to make a type specimen book.
                                    </p>
                                    <form action="">
                                        <div class="form-outline">
                                            <label class="form-label" for="textAreaExample">Message</label>
                                            <textarea class="form-control" id="textAreaExample1" rows="8"></textarea>
                                        </div>
                                        <div class="d-grid col-12 pb-3 w-25 m-left py-2 mb-2">
                                            <button class="btn btn-primary" type="button">
                                                Envoyer</button>
                                        </div>
                                    </form>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Tabs content -->
    </div>
@endsection
