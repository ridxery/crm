<div>
    @if($darkMode)
    <link href="/assets/css/darkly/bootstrap.min.css" rel="stylesheet" id="mainCSSTheme">
    @else
    <link href="/assets/css/flatly/bootstrap.min.css" rel="stylesheet" id="mainCSSTheme">
    @endif
    <nav class="navbar navbar-expand-lg @if($darkMode) navbar-dark @else navbar-light @endif">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{url('/')}}">CRM</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">
                            Link
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">

                    </li>
                </ul>
                <div class="form-check form-switch" wire:click.prevent="changeMode">
                    <input class="form-check-input" type="checkbox" id="darkModeBtn"
                           @if($darkMode) checked @endif>
                    <label class="form-check-label" for="darkModeBtn">
                        <i class="fa fa-moon @if(!$darkMode) text-muted @endif"></i>
                    </label>
                </div>
                <div class="d-flex mx-2">
                    <button class="nav-item btn btn-sm btn-outline-danger" wire:click="logout">
                        <i class="fa fa-sign-out-alt"></i> Logout
                    </button>
                </div>
            </div>
        </div>
    </nav>
</div>
