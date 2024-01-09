@extends('frontend.partials.main')

@section('content')
    <div class="container py-5 pl-3 pl-md-5">
        <div class="row d-flex align-items-center">
            <div class="col-md-12 col-lg-12 py-4 rounded-3 d-flex justify-content-lg-between bg-white align-items-center">
                <h5 class="py-2">Fiche patient</h5>
            </div>
        </div>
        <div class="row d-flex align-items-center">
            <div class="col-md-12 col-lg-12 gx-3 gx-md-5 py-3 rounded-3 bg-white">
                <ul class="nav nav-tabs mb-3" id="ex-with-icons" role="tablist">
                    <li class="px-3"><button class="bg-white custom-btn  text-dark prev" onclick="prevTab()"></button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a data-bs-toggle="tab" class="nav-link" id="ex-with-icons-tab-1" href="#ex-with-icons-tabs-1"
                            role="tab" aria-controls="ex-with-icons-tabs-1" aria-selected="true">
                            Photographies
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a data-bs-toggle="tab" class="nav-link" id="ex-with-icons-tab-2" href="#ex-with-icons-tabs-2"
                            role="tab" aria-controls="ex-with-icons-tabs-2" aria-selected="true">
                            Rappels et suivis
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a data-bs-toggle="tab" class="nav-link active" id="ex-with-icons-tab-3"
                            href="#ex-with-icons-tabs-3" role="tab" aria-controls="ex-with-icons-tabs-3"
                            aria-selected="false">
                            Communication
                        </a>
                    </li>
                    <li class="px-3">
                        <button class="bg-white custom-btn text-dark next mr-3" onclick="nextTab()"></button>
                    </li>
                </ul>
                <div class="tab-content" id="ex-with-icons-content">
                    <div class="tab-pane fade" id="ex-with-icons-tabs-1" role="tabpanel"
                        aria-labelledby="ex-with-icons-tab-1">
                        Tab 1 content
                    </div>
                    <div class="tab-pane fade" id="ex-with-icons-tabs-2" role="tabpanel"
                        aria-labelledby="ex-with-icons-tab-2">
                        Tab 2 content
                    </div>
                    <div class="tab-pane fade show active" id="ex-with-icons-tabs-3" role="tabpanel"
                        aria-labelledby="ex-with-icons-tab-3">
                        <div class="container">
                            <div class="row align-items-center border border-bottom">
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="row justify-content-center align-items-center">
                                        <div class="col-md-6 col-lg-6 text-center">
                                            <img src="data:image/jpeg;base64,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"
                                                alt="Avatar" class="img-fluid rounded-circle">
                                        </div>
                                        <div class="col-md-6 col-lg-6 text-center text-dark">
                                            <h6>Evelyn Thomas</h6>
                                            <span class="text-black text-dark">N°284740</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                                    <h6 class="text-dark">Information patient.</h6>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        fill="currentColor" class="bi bi-exclamation-triangle text-danger pb-1"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z" />
                                        <path
                                            d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z" />
                                    </svg>
                                    <span class="text-danger">Mauvais payeur</span>
                                </div>
                                <div class="col-lg-3 col-md-6 mt-3 col-sm-12 text-center">
                                    <h6 class="text-dark">Prochain(s) rendez-vous.</h6>
                                    <span class="fs-6 custom-color d-flex text-dark p-1 rounded-3">
                                        25/08/23 | 14:30 - 15:30 | Reason of consultation
                                    </span>
                                </div>
                                <div class="col-lg-3 col-md-6 mt-3 col-sm-12 text-center">
                                    <h6 class="text-dark">Médicament(s).</h6>
                                    <span class="text-warning">Nom médicament</span>
                                </div>
                            </div>
                            <div class="row  mt-4 gx-4">
                                <div class="col-12 col-md-4 col-lg-4">
                                    <div class="d-flex justify-content-end mb-3">
                                        <!-- Filter button on the right side -->
                                        <button type="button" class="btn btn-white btn-sm border border-dark">
                                            Ajouter un filtre <i class="fas fa-bars"></i>
                                        </button>
                                    </div>
                                    <!-- Person 1 -->
                                    <div class="row justify-content-between align-items-center">
                                        <div class="col-12 col-sm-12 col-md-9">
                                            <strong class="fs-6">Evelyn Thomas</strong>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-3 text-muted">
                                            <span class="date text-end">Date</span>
                                        </div>
                                    </div>
                                    <p class="card-text text-start mt-1 text-muted">Lorem Ipsum is simply dummy text of
                                        the printing. Lorem Ipsum is simply dummy text of the printing …</p>

                                    <!-- Person 2 -->
                                    <div class="row justify-content-between align-items-center">
                                        <div class="col-12 col-sm-12 col-md-9">
                                            <strong class="fs-6">Dr Sarah Dib</strong>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-3 text-muted">
                                            <span class="date text-end text-muted">Date</span>
                                        </div>
                                    </div>
                                    <p class="card-text text-start text-muted">Lorem Ipsum is simply dummy text of
                                        the printing. Lorem Ipsum is simply dummy text of the printing …</p>

                                    <!-- Person 3 -->
                                    <div class="row justify-content-between align-items-center">
                                        <div class="col-12 col-sm-12 col-md-9">
                                            <strong class="fs-6">Evelyn Thomas</strong>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-3 text-muted">
                                            <span class="date text-end">Date</span>
                                        </div>
                                    </div>
                                    <p class="card-text text-start text-muted">Lorem Ipsum is simply dummy text of
                                        the printing. Lorem Ipsum is simply dummy text of the printing …</p>
                                    <!-- Person 4 -->
                                    <div class="row justify-content-between align-items-center">
                                        <div class="col-12 col-sm-12 col-md-9">
                                            <strong class="fs-6">Dr Sarah Dib</strong>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-3 text-muted">
                                            <span class="date text-end">Date</span>
                                        </div>
                                    </div>
                                    <div class="row mt-5">
                                        <div class="col-12 col-md-6 col-lg-6 p-0">
                                            <button type="button" class="btn btn-info text-white">
                                                <i class="fas fa-plus text-white"></i> Nouveau message
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-7 col-lg-7 mt-3">
                                    <div class="mb-3 d-flex justify-content-between">
                                        <strong>Objet du message</strong> <span class="text-danger">X Supprimer le
                                            message</span>
                                    </div>
                                    <div class="mb-3">
                                        <span class="text-muted">Date</span>
                                    </div>
                                    <span>Message</span>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the
                                        industry's standard dummy text ever since the 1500s, when an unknown printer
                                        took a
                                        galley of type
                                        and scrambled it to make a type specimen book.</p>
                                    <form action="">
                                        <div class="mb-3">
                                            <label for="répondre" class="form-label">Répondre</label>
                                            <textarea class="form-control" name="répondre" id="répondre" rows="10"></textarea>
                                        </div>
                                        <button type="button" class="btn btn-info text-white">Envoyer</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
