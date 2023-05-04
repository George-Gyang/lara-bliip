@extends('layouts.default')

@section('content')
<div>
    <div>

        <div class="row mx-0">
            <div class=" d-none d-md-block col-md-4">
            @include('includes.aside')

            </div>
            <div class="col-md-8 px-2 px-md-0">
                <div class="container px-md-5 py-5">
                    <div class=" mb-5 justify-content-between">
                        <!-- <p class="text-black">Hi Moyin</p> -->
                        <div>
                            <h4 class="fw-bold navy-text">Profile</h4>
                            <div class="pt-3"></div>
                            <div class="chatbox"></div>
                            <div class="px-1 px-md-3">
                                <div class="input-group  input-group-lg"">
                                    <input type="text" class="form-control chat-input border-0" placeholder="Type something..." aria-label="Recipient's username with two button addons">
                                    <button class="border border-start-0 border-0" type="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                            <circle cx="15.5" cy="9.5" r="1.5" fill="#001848" />
                                            <circle cx="8.5" cy="9.5" r="1.5" fill="#001848" />
                                            <path fill="#001848" d="M12 18c2.28 0 4.22-1.66 5-4H7c.78 2.34 2.72 4 5 4z" />
                                            <path fill="#001848" d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8s8 3.58 8 8s-3.58 8-8 8z" />
                                        </svg>
                                    </button>
                                    <button class="border border-0 rounded-end-3" type="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 256 256">
                                            <g fill="#001848">
                                                <path d="M168 64v64a40 40 0 0 1-40 40a40 40 0 0 1-40-40V64a40 40 0 0 1 40-40a40 40 0 0 1 40 40Z" opacity=".2" />
                                                <path d="M128 176a48.05 48.05 0 0 0 48-48V64a48 48 0 0 0-96 0v64a48.05 48.05 0 0 0 48 48ZM96 64a32 32 0 0 1 64 0v64a32 32 0 0 1-64 0Zm40 143.6V232a8 8 0 0 1-16 0v-24.4A80.11 80.11 0 0 1 48 128a8 8 0 0 1 16 0a64 64 0 0 0 128 0a8 8 0 0 1 16 0a80.11 80.11 0 0 1-72 79.6Z" />
                                            </g>
                                        </svg>
                                    </button>
                                    <button class="border-0 mx-2 bg-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24">
                                            <g transform="rotate(130 12 12) translate(24 0) scale(-1 1)">
                                                <path fill="#001848" d="M12 2a10 10 0 0 1 10 10a10 10 0 0 1-10 10A10 10 0 0 1 2 12A10 10 0 0 1 12 2M8 7.71v3.34l7.14.95l-7.14.95v3.34L18 12L8 7.71Z" />
                                            </g>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop