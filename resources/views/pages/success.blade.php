@extends('layouts.default')

@section('content')

<div class="sky-bg">
    <div class="py-5 px-2">
        <div class="car mx-auto rounded-3 p-2 success-card bg-white" style="max-width: 25rem;">
            <img src="{{ asset('images/success.png') }}" class="img-fluid" alt="image description">
            <div class="card-body text-center">
                <h3 class="card-title fw-bold prime-text">Verification Successful</h3>
                <p class="card-text">You will be directed to your destination shortly...</p>
                <div class="py-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M12 2A10 10 0 1 0 22 12A10 10 0 0 0 12 2Zm0 18a8 8 0 1 1 8-8A8 8 0 0 1 12 20Z" opacity=".5" />
                        <path fill="currentColor" d="M20 12h2A10 10 0 0 0 12 2V4A8 8 0 0 1 20 12Z">
                            <animateTransform attributeName="transform" dur="1s" from="0 12 12" repeatCount="indefinite" to="360 12 12" type="rotate" />
                        </path>
                    </svg>
                </div>
                <small class="text-black"> peowered by <span class="text-primary pt-1">BliiP</span></small>
            </div>
        </div>
    </div>
</div>

@stop