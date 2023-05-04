@extends('layouts.default')

@section('content')

<div class="sky-bg">
    <div class="py-5 px-2">
        <div class="card mx-auto rounded-3 p-2 success-card bg-white" style="max-width: 25rem;">
            <div class="text-center py-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24">
                    <path fill="#aadbff" d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10s10-4.5 10-10S17.5 2 12 2m-2 15l-5-5l1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9Z" />
                </svg>
            </div>
            <div class="card-body text-center">
                <h3 class="card-title fw-bold prime-text">Thanks for Registration!</h3>
                <p class="card-text">Start using your <span class="text-primary pt-1">BliiP</span> account now</p>

            </div>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn navy-btn text-white mb-3" type="button">Login</button>
                <!-- <button class="btn btn-primary" type="button">Button</button> mamas aqnd papas-->
            </div>
        </div>
    </div>
</div>

@stop