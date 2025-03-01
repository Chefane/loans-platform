@extends('layouts.master')

@section('content')
    <div class="d-flex min-vh-100">
        <!-- Sidebar -->
        <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px; height: 100vh;">
            @include('layouts.sidebar.menu')
        </div>

        <!-- Main Content Area -->
        <div class="flex-grow-1">
            <!-- Navigation Bar -->
            <div class="sticky-top ml-4">
                @include('layouts.navigation')
            </div>

            <!-- Page Content -->
            <main class="p-4">
                {{ $slot }}
            </main>
        </div>
    </div>
@endsection
