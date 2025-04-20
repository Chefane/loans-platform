<div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 260px; height: 990px;">
    <a href="{{ route('dashboard') }}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-decoration-none">
        <span class="fs-4">Dashboard</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item mb-7">
            <a href="{{ route('dashboard') }}" 
               class="nav-link text-dark {{ request()->routeIs('dashboard') ? 'bg-dark text-white' : '' }}">
               <i class="bi bi-bar-chart-fill me-2"></i>Loans Statistics
            </a>
        </li>
        <li class="nav-item mb-7">
            <a href="{{ route('requests.loan-requests') }}" 
               class="nav-link text-dark {{ request()->routeIs('requests.loan-requests') ? 'bg-dark text-white' : '' }}">
               <i class="bi bi-envelope-paper-fill me-2"></i> Loans Requests
            </a>
        </li>
        <li class="nav-item mb-7">
            <a href="{{ route('history.loan-history') }}" 
               class="nav-link text-dark {{ request()->routeIs('history.loan-history') ? 'bg-dark text-white' : '' }}">
               <i class="bi bi-book-fill me-2"></i>Loans History
            </a>
        </li>
        <li class="nav-item mb-7">
            <a href="{{ route('payments.index') }}" 
               class="nav-link text-dark  {{ request()->routeIs('payments.index') ? 'bg-dark text-white' : '' }}">
               <i class="bi bi-wallet-fill me-2"></i>Payments
            </a>
        </li>
        <li class="nav-item mb-7">
            <a href="{{ route('reports.index') }}" 
               class="nav-link text-dark {{ request()->routeIs('reports.index') ? 'bg-dark text-white' : '' }}">
               <i class="bi bi-clipboard-fill me-2"></i>Reports
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link text-dark">
                <i class="bi bi-info-square-fill me-2"></i>System Manual
            </a>
        </li>
    </ul>
    <hr>
    <div class="">
        <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-person-circle fs-1 me-2"></i>
            <strong class="fs-6">Nosi Chefane</strong>
        </a>
    </div>
</div>
