@extends('layouts.default')

@section('content')

<div>
    <div>
        <div class="row mx-0">
            <div class="col-md-4">
                <div class="sky-bg px-3 py-5">
                    <div class="py-2">
                        <div class="d-flex justify-content-center">
                            <div class="d-flex px-3 py-2 rounded mb-3 side-btn navy-bg">
                                <a href="">
                                    <p class="text-center mb-0 text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M11 21H5q-.825 0-1.413-.588T3 19V5q0-.825.588-1.413T5 3h6v18Zm-2-2V5H5v14h4Zm4-8V3h6q.825 0 1.413.588T21 5v6h-8Zm2-2h4V5h-4v4Zm-2 12v-8h8v6q0 .825-.588 1.413T19 21h-6Zm2-2h4v-4h-4v4Zm-6-7Zm6-3Zm0 6Z" />
                                        </svg>
                                        <span>Dashboard</span>
                                    </p>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="d-flex px-3 py-2 rounded mb-3 side-btn navy-border">
                                <a href="" class="text-center mb-0 text-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path fill="none" stroke="currentColor" stroke-width="2" d="m1 23l3-3l-3 3ZM20 4l3-3l-3 3ZM9 11l3-3l-3 3Zm4 4l3-3l-3 3ZM10 5l9 9l1-1c2-2 4.053-5 0-9s-7-2-9 0l-1 1Zm-6 6l1-1l9 9l-1 1c-2 2-5 4.087-9 0s-2-7 0-9Z" />
                                    </svg>
                                    <span>Api Keys</span>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="d-flex px-3 py-2 rounded mb-3 side-btn navy-border">
                                <a href="" class="text-center mb-0 text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M5 22q-.825 0-1.413-.588T3 20V6q0-.825.588-1.413T5 4h1V2h2v2h8V2h2v2h1q.825 0 1.413.588T21 6v14q0 .825-.588 1.413T19 22H5Zm0-2h14V10H5v10ZM5 8h14V6H5v2Zm0 0V6v2Z"/></svg>
                                    <span>Subscription</span>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="d-flex px-3 py-2 rounded mb-3 side-btn navy-border">
                                <a href="" class="text-center mb-0 text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-width="2" d="M18 17v1c0 3-2 4-5 4h-2c-3 0-5-1-5-4v-1A5 5 0 0 1 6 7h6M6 7V6c0-3 2-4 5-4h2c3 0 5 1 5 4v1a5 5 0 0 1 0 10h-6"/></svg>
                                    <span>Api Usage Log</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <hr>
                    <div class="py-2">
                        <p class="text-black text-center pv-2">Domain Management</p>
                        <div class="d-flex justify-content-center">
                            <div class="d-flex px-3 py-2 rounded mb-3 side-btn navy-border">
                                <a href="" class="text-center mb-0 text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15"><path fill="currentColor" fill-rule="evenodd" d="M0 7.5a7.5 7.5 0 1 1 15 0a7.5 7.5 0 0 1-15 0Zm7.072 3.21l4.318-5.398l-.78-.624l-3.682 4.601L4.32 7.116l-.64.768l3.392 2.827Z" clip-rule="evenodd"/></svg>
                                    <span>Risky Domains</span>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="d-flex px-3 py-2 rounded mb-3 side-btn navy-border">
                                <a href="" class="text-center mb-0 text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 256 256"><path fill="currentColor" d="M165.66 101.66L139.31 128l26.35 26.34a8 8 0 0 1-11.32 11.32L128 139.31l-26.34 26.35a8 8 0 0 1-11.32-11.32L116.69 128l-26.35-26.34a8 8 0 0 1 11.32-11.32L128 116.69l26.34-26.35a8 8 0 0 1 11.32 11.32ZM232 128A104 104 0 1 1 128 24a104.11 104.11 0 0 1 104 104Zm-16 0a88 88 0 1 0-88 88a88.1 88.1 0 0 0 88-88Z"/></svg>
                                    <span>Non-risky Domains</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <hr>
                    <div class="py-2">
                        <div class="d-flex justify-content-center">
                            <div class="d-flex px-3 py-2 rounded mb-3 side-btn navy-border">
                                <a href="" class="text-center mb-0 text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M20 2H4c-1.1 0-1.99.9-1.99 2L2 22l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-7 12h-2v-2h2v2zm0-4h-2V6h2v4z"/></svg>
                                    <span>Feedback</span>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="d-flex px-3 py-2 rounded mb-3 side-btn navy-border">
                                <a href="" class="text-center mb-0 text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M20.5 14.5V16H19v-1.5h1.5m-2-5H17V9a3 3 0 0 1 3-3a3 3 0 0 1 3 3c0 .97-.5 1.88-1.29 2.41l-.3.19c-.57.4-.91 1.01-.91 1.7v.2H19v-.2c0-1.19.6-2.3 1.59-2.95l.29-.19c.39-.26.62-.69.62-1.16A1.5 1.5 0 0 0 20 7.5A1.5 1.5 0 0 0 18.5 9v.5M9 13c2.67 0 8 1.34 8 4v3H1v-3c0-2.66 5.33-4 8-4m0-9a4 4 0 0 1 4 4a4 4 0 0 1-4 4a4 4 0 0 1-4-4a4 4 0 0 1 4-4m0 10.9c-2.97 0-6.1 1.46-6.1 2.1v1.1h12.2V17c0-.64-3.13-2.1-6.1-2.1m0-9A2.1 2.1 0 0 0 6.9 8A2.1 2.1 0 0 0 9 10.1A2.1 2.1 0 0 0 11.1 8A2.1 2.1 0 0 0 9 5.9Z"/></svg>
                                    <span>Customer Support</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 px-5 px-md-0">
                <div class="container px-md-5 py-5">
                    <div class="d-flex mb-5 justify-content-between">
                        <h4 class="fw-bold navy-text">DASHBOARD</h4>
                        <p class="text-black">Hi Moyin</p>
                    </div>
                    <div>
                        <p class="fw-bolder mb-5 text-center">Welcome to your Dashboard</p>
                        <div class="container-md">
                            <div class="row">
                                <div class="col-6 px-md-3 px-lg-5">
                                    <a href="">
                                        <div class="d-grid gap-2">
                                            <button class="btn navy-btn text-white py-3" type="button">Manage your API keys</button>
                                            <!-- <button class="btn btn-primary" type="button">Button</button> -->
                                        </div>
                                    </a>
                                </div>
                                <div class="col-6 px-md-3 px-lg-5">
                                    <a href="">
                                        <div class="d-grid gap-2">
                                            <button class="btn navy-btn text-white py-3" type="button">Manage your Subscriptions</button>
                                            <!-- <button class="btn btn-primary" type="button">Button</button> -->
                                        </div>
                                    </a>
                                </div>
                                <div class="py-3 px-5">
                                    <div class="px-5">
                                        <hr>
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <p class="fw-bolder mb-5 text-center text-primary">Continue with...</p>
                                <div class="col-6 px-md-3 px-lg-5">
                                    <a href="">
                                        <div class="d-grid gap-2">
                                            <button class="btn navy-border text-primary py-3" type="button">
                                            <span class="me-3">email otp</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 36 36"><path fill="currentColor" d="M32 13.22V29H4V7h18.57a7.447 7.447 0 0 1-.07-1c.001-.335.024-.669.07-1H4a2 2 0 0 0-2 2v22a2 2 0 0 0 2 2h28a2 2 0 0 0 2-2V12.34c-.62.39-1.294.686-2 .88Z" class="clr-i-outline--badged clr-i-outline-path-1--badged"/><path fill="currentColor" d="m15.62 15.222l-6.018 8.746l-4.052-3.584l1.06-1.198l2.698 2.386l6.326-9.192l6.75 10.015l6.754-8.925l1.276.966l-8.106 10.709z" class="clr-i-outline--badged clr-i-outline-path-2--badged"/><circle cx="30" cy="6" r="5" fill="currentColor" class="clr-i-outline--badged clr-i-outline-path-3--badged clr-i-badge"/><path fill="none" d="M0 0h36v36H0z"/></svg>    
                                        </button>
                                            <!-- <button class="btn btn-primary" type="button">Button</button> -->
                                        </div>
                                    </a>

                                    <div class="py-3 px-2 rounded-5 sky-bg mt-4">
                                        <p class="text-dark">Need help?</p>
                                        <a href="">Check out our Documentation</a>
                                        <br>
                                        <a href="">Contact your account manager</a>
                                    </div>
                                </div>
                                <div class="col-6 px-md-3 px-lg-5">
                                    <a href="">
                                        <div class="d-grid gap-2">
                                            <button class="btn navy-border text-primary py-3" type="button">
                                            <span class="me-3">sms otp</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 1024 1024"><path fill="currentColor" d="M464 512a48 48 0 1 0 96 0a48 48 0 1 0-96 0zm200 0a48 48 0 1 0 96 0a48 48 0 1 0-96 0zm-400 0a48 48 0 1 0 96 0a48 48 0 1 0-96 0zm661.2-173.6c-22.6-53.7-55-101.9-96.3-143.3a444.35 444.35 0 0 0-143.3-96.3C630.6 75.7 572.2 64 512 64h-2c-60.6.3-119.3 12.3-174.5 35.9a445.35 445.35 0 0 0-142 96.5c-40.9 41.3-73 89.3-95.2 142.8c-23 55.4-34.6 114.3-34.3 174.9A449.4 449.4 0 0 0 112 714v152a46 46 0 0 0 46 46h152.1A449.4 449.4 0 0 0 510 960h2.1c59.9 0 118-11.6 172.7-34.3a444.48 444.48 0 0 0 142.8-95.2c41.3-40.9 73.8-88.7 96.5-142c23.6-55.2 35.6-113.9 35.9-174.5c.3-60.9-11.5-120-34.8-175.6zm-151.1 438C704 845.8 611 884 512 884h-1.7c-60.3-.3-120.2-15.3-173.1-43.5l-8.4-4.5H188V695.2l-4.5-8.4C155.3 633.9 140.3 574 140 513.7c-.4-99.7 37.7-193.3 107.6-263.8c69.8-70.5 163.1-109.5 262.8-109.9h1.7c50 0 98.5 9.7 144.2 28.9c44.6 18.7 84.6 45.6 119 80c34.3 34.3 61.3 74.4 80 119c19.4 46.2 29.1 95.2 28.9 145.8c-.6 99.6-39.7 192.9-110.1 262.7z"/></svg>
                                            </button>
                                            <!-- <button class="btn btn-primary" type="button">Button</button> -->
                                        </div>
                                    </a>

                                    <div class="py-3 px-2 rounded-5 sky-bg mt-4">
                                        <p class="text-dark">Invite your team</p>
                                        <a href="">Start collaborating by adding more users</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="my-5">
                            <a class="text-decoration-underline" href="">
                                contact us for further details
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop