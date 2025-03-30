@extends('layouts.loan-default')
@section('content')
        <div class="min-h-screen flex flex-col sm:justify-center items-center sm:pt-0">
            <div class="w-full mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
@endsection