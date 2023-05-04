@extends('layouts.default')

@section('content')

<div>
    <div>
        <div class="row mx-0">
            <div class=" d-none d-md-block col-md-4">
            @include('includes.aside')
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
                                <div class="col-md-6 my-3 my-md-0 px-md-3 px-lg-5">
                                    <a href="">
                                        <div class="d-grid gap-2">
                                            <button class="btn navy-btn text-white py-3 py-sm-2" type="button">Manage your API keys</button>
                                            <!-- <button class="btn btn-primary" type="button">Button</button> -->
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-6 my-3 my-md-0 px-md-3 px-lg-5">
                                    <a href="">
                                        <div class="d-grid gap-2">
                                            <button class="btn navy-btn text-white py-3 py-sm-2" type="button">Manage your Subscriptions</button>
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
                                <div class="col-md-6 my-3 my-md-0 px-md-3 px-lg-5">
                                    <a href="">
                                        <div class="d-grid gap-2">
                                            <button class="btn navy-border text-primary py-3" type="button">
                                                <span class="me-3">email otp</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 36 36">
                                                    <path fill="currentColor" d="M32 13.22V29H4V7h18.57a7.447 7.447 0 0 1-.07-1c.001-.335.024-.669.07-1H4a2 2 0 0 0-2 2v22a2 2 0 0 0 2 2h28a2 2 0 0 0 2-2V12.34c-.62.39-1.294.686-2 .88Z" class="clr-i-outline--badged clr-i-outline-path-1--badged" />
                                                    <path fill="currentColor" d="m15.62 15.222l-6.018 8.746l-4.052-3.584l1.06-1.198l2.698 2.386l6.326-9.192l6.75 10.015l6.754-8.925l1.276.966l-8.106 10.709z" class="clr-i-outline--badged clr-i-outline-path-2--badged" />
                                                    <circle cx="30" cy="6" r="5" fill="currentColor" class="clr-i-outline--badged clr-i-outline-path-3--badged clr-i-badge" />
                                                    <path fill="none" d="M0 0h36v36H0z" />
                                                </svg>
                                            </button>
                                            <!-- <button class="btn btn-primary" type="button">Button</button> -->
                                        </div>
                                    </a>


                                </div>
                                <div class="col-md-6 my-3 my-md-0 px-md-3 px-lg-5">
                                    <a href="">
                                        <div class="d-grid gap-2">
                                            <button class="btn navy-border text-primary py-3" type="button">
                                                <span class="me-3">sms otp</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 1024 1024">
                                                    <path fill="currentColor" d="M464 512a48 48 0 1 0 96 0a48 48 0 1 0-96 0zm200 0a48 48 0 1 0 96 0a48 48 0 1 0-96 0zm-400 0a48 48 0 1 0 96 0a48 48 0 1 0-96 0zm661.2-173.6c-22.6-53.7-55-101.9-96.3-143.3a444.35 444.35 0 0 0-143.3-96.3C630.6 75.7 572.2 64 512 64h-2c-60.6.3-119.3 12.3-174.5 35.9a445.35 445.35 0 0 0-142 96.5c-40.9 41.3-73 89.3-95.2 142.8c-23 55.4-34.6 114.3-34.3 174.9A449.4 449.4 0 0 0 112 714v152a46 46 0 0 0 46 46h152.1A449.4 449.4 0 0 0 510 960h2.1c59.9 0 118-11.6 172.7-34.3a444.48 444.48 0 0 0 142.8-95.2c41.3-40.9 73.8-88.7 96.5-142c23.6-55.2 35.6-113.9 35.9-174.5c.3-60.9-11.5-120-34.8-175.6zm-151.1 438C704 845.8 611 884 512 884h-1.7c-60.3-.3-120.2-15.3-173.1-43.5l-8.4-4.5H188V695.2l-4.5-8.4C155.3 633.9 140.3 574 140 513.7c-.4-99.7 37.7-193.3 107.6-263.8c69.8-70.5 163.1-109.5 262.8-109.9h1.7c50 0 98.5 9.7 144.2 28.9c44.6 18.7 84.6 45.6 119 80c34.3 34.3 61.3 74.4 80 119c19.4 46.2 29.1 95.2 28.9 145.8c-.6 99.6-39.7 192.9-110.1 262.7z" />
                                                </svg>
                                            </button>
                                            <!-- <button class="btn btn-primary" type="button">Button</button> -->
                                        </div>
                                    </a>


                                </div>

                                <div class="col-md-6 px-md-3 px-lg-5">
                                    <div class="py-3 px-2 rounded-5 sky-bg mt-4">
                                        <p class="text-dark">Need help?</p>
                                        <a href="">Check out our Documentation</a>
                                        <br>
                                        <a href="">Contact your account manager</a>
                                    </div>
                                </div>



                                <div class="col-md-6 px-md-3 px-lg-5">
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