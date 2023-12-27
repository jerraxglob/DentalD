<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">ClinicalD</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <form class="form-inline my-2 my-lg-0 px-3 search-form">
            <div class="input-icons position-relative align-items-center">
                <i class="fas fa-search position-absolute translate-bottom mt-2 px- text-start text-secondary"
                    style="padding-left: 21px"></i>
                <input class="form-control mx-2 px-5" id="searchInput" type="text" placeholder="Search.." />
            </div>
        </form>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  mb-2 mb-lg-0 d-flex flex-wrap align-items-center justify-content-between  w-full">
                <li class="nav-item mr-2">
                    <a class="nav-link" href="{{ URL::route('dashboard') }}">
                        <i class="fas fa-tachometer-alt px-1"></i><span class="d-inline-block"> Dashboard </span>
                    </a>
                </li>
                <li class="nav-item mr-2">
                    <a class="nav-link" href="{{ URL::route('statistics') }}">
                        <i class="fas fa-chart-bar px-1"></i><span class="d-inline-block">Statistiques </span>
                    </a>
                </li>
                <li class="nav-item mr-2">
                    <a class="nav-link" href="{{ URL::route('Patients') }}">
                        <i class="fas fa-users px-1"></i><span class="d-inline-block">Patients</span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-clipboard-list px-1"></i> Inventory
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ URL::route('inventory') }}"> <i
                                class="fas fa-clipboard-list"></i>
                            Gestion de stock
                        </a>
                        <a class="dropdown-item" href="{{ URL::route('order') }}"> <i class="fas fa-clipboard-list"></i>
                            Order
                        </a>
                        <a class="dropdown-item" href="#"><i class="fas fa-truck"></i>
                            Commandes
                        </a>

                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{ URL::route('calander') }}" id="navbarDropdown"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-calendar-alt"></i> Calendar
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ URL::route('calander') }}"><i class="fas fa-calendar-alt"></i>
                            Calendar
                        </a>
                        <a class="dropdown-item" href="#"><i class="fas fa-calendar-alt"></i>
                            Eevent
                        </a>

                    </ul>
                </li>
                <li class="nav-item mr-2">
                    <a class="nav-link" href="{{ URL::route('invoicing') }}">
                        <i class="fas fa-file px-1"></i><span class="d-inline-block">Invoice</span>
                    </a>
                </li>
                <li class="nav-item mr-2">
                    <a class="nav-link" href="{{ URL::route('tasks') }}">
                        <i class="fas fa-list px-1"></i><span class="d-inline-block">Tasks</span>
                    </a>
                </li>
                <li class="nav-item ml-lg-auto">
                    <a class="nav-link" href="#">
                        <i class="fas fa-eye"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-bell"></i>
                    </a>
                </li>
                <li class="nav-item dropdown px-5">
                    <a class="nav-link dropdown-toggle d-flex align-items-center" href="#"
                        id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img (31).webp" class="rounded-circle"
                            height="22" alt="Avatar" loading="lazy" />
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink px-3">
                        <li>
                            <a class="dropdown-item" href="#">My profile</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ URL::route('setting') }}">Settings</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>

        </div>
    </div>
</nav>
