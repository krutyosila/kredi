<nav class="navbar navbar-expand-lg p-3">
    <div class="container">
    <a class="navbar-brand align-items-center" href="{{ url('/') }}">
        <img src="{{ asset('img/favicon-32x32.png') }}" alt="Logo" height="24"
             class="d-inline-block align-text-top">
        KredimVarmı
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Bankalar
                </a>
                <ul class="dropdown-menu">
                    @foreach($banks as $bank)
                        <li><a class="dropdown-item" href="{{ route('bank', ['bank' => $bank->slug]) }}">
                                {{ $bank->name }}</a></li>
                    @endforeach
                </ul>
            </li>
        </ul>
        <div class="d-flex">
            <button class="theme-toggle" id="theme-toggle" aria-label="auto" aria-live="polite">
                <svg class="sun-and-moon" aria-hidden="true" width="24" height="24" viewBox="0 0 24 24">
                    <mask class="moon" id="moon-mask">
                        <rect x="0" y="0" width="100%" height="100%" fill="white"/>
                        <circle cx="24" cy="10" r="6" fill="black"/>
                    </mask>
                    <circle class="sun" cx="12" cy="12" r="6" mask="url(#moon-mask)" fill="currentColor"/>
                    <g class="sun-beams" stroke="currentColor">
                        <line x1="12" y1="1" x2="12" y2="3"/>
                        <line x1="12" y1="21" x2="12" y2="23"/>
                        <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"/>
                        <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"/>
                        <line x1="1" y1="12" x2="3" y2="12"/>
                        <line x1="21" y1="12" x2="23" y2="12"/>
                        <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"/>
                        <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"/>
                    </g>
                </svg>
            </button>
        </div>
    </div>
    </div>
</nav>
