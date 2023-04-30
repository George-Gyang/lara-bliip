@extends('layouts.default')

@section('content')

<div>
    <div>
        <div class="row mx-0">
            <div class=" d-none d-md-block col-md-3">
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
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="M5 22q-.825 0-1.413-.588T3 20V6q0-.825.588-1.413T5 4h1V2h2v2h8V2h2v2h1q.825 0 1.413.588T21 6v14q0 .825-.588 1.413T19 22H5Zm0-2h14V10H5v10ZM5 8h14V6H5v2Zm0 0V6v2Z" />
                                    </svg>
                                    <span>Subscription</span>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="d-flex px-3 py-2 rounded mb-3 side-btn navy-border">
                                <a href="" class="text-center mb-0 text-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path fill="none" stroke="currentColor" stroke-width="2" d="M18 17v1c0 3-2 4-5 4h-2c-3 0-5-1-5-4v-1A5 5 0 0 1 6 7h6M6 7V6c0-3 2-4 5-4h2c3 0 5 1 5 4v1a5 5 0 0 1 0 10h-6" />
                                    </svg>
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
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15">
                                        <path fill="currentColor" fill-rule="evenodd" d="M0 7.5a7.5 7.5 0 1 1 15 0a7.5 7.5 0 0 1-15 0Zm7.072 3.21l4.318-5.398l-.78-.624l-3.682 4.601L4.32 7.116l-.64.768l3.392 2.827Z" clip-rule="evenodd" />
                                    </svg>
                                    <span>Risky Domains</span>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="d-flex px-3 py-2 rounded mb-3 side-btn navy-border">
                                <a href="" class="text-center mb-0 text-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 256 256">
                                        <path fill="currentColor" d="M165.66 101.66L139.31 128l26.35 26.34a8 8 0 0 1-11.32 11.32L128 139.31l-26.34 26.35a8 8 0 0 1-11.32-11.32L116.69 128l-26.35-26.34a8 8 0 0 1 11.32-11.32L128 116.69l26.34-26.35a8 8 0 0 1 11.32 11.32ZM232 128A104 104 0 1 1 128 24a104.11 104.11 0 0 1 104 104Zm-16 0a88 88 0 1 0-88 88a88.1 88.1 0 0 0 88-88Z" />
                                    </svg>
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
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="M20 2H4c-1.1 0-1.99.9-1.99 2L2 22l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-7 12h-2v-2h2v2zm0-4h-2V6h2v4z" />
                                    </svg>
                                    <span>Feedback</span>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="d-flex px-3 py-2 rounded mb-3 side-btn navy-border">
                                <a href="" class="text-center mb-0 text-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="M20.5 14.5V16H19v-1.5h1.5m-2-5H17V9a3 3 0 0 1 3-3a3 3 0 0 1 3 3c0 .97-.5 1.88-1.29 2.41l-.3.19c-.57.4-.91 1.01-.91 1.7v.2H19v-.2c0-1.19.6-2.3 1.59-2.95l.29-.19c.39-.26.62-.69.62-1.16A1.5 1.5 0 0 0 20 7.5A1.5 1.5 0 0 0 18.5 9v.5M9 13c2.67 0 8 1.34 8 4v3H1v-3c0-2.66 5.33-4 8-4m0-9a4 4 0 0 1 4 4a4 4 0 0 1-4 4a4 4 0 0 1-4-4a4 4 0 0 1 4-4m0 10.9c-2.97 0-6.1 1.46-6.1 2.1v1.1h12.2V17c0-.64-3.13-2.1-6.1-2.1m0-9A2.1 2.1 0 0 0 6.9 8A2.1 2.1 0 0 0 9 10.1A2.1 2.1 0 0 0 11.1 8A2.1 2.1 0 0 0 9 5.9Z" />
                                    </svg>
                                    <span>Customer Support</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9 px-5 px-md-0">
                <div class="container px-md-5 py-5">
                    <div class=" mb-5 justify-content-between">
                        <!-- <p class="text-black">Hi Moyin</p> -->
                        <div>
                            <h4 class="fw-bolder text-primary">Non-Risky Dormains</h4>
                            <div class="card-shadow p-md-5">
                                <div>
                                    <div class="d-flex justify-content-between mb-3">
                                        <p class="fw-bolder text-dark">Risky dormain list</p>
                                        <div class="d-grid gap-1 col-4">
                                            <button class="btn navy-btn text-white" type="button">+ Add Dormain</button>
                                        </div>
                                    </div>
                                    <div class=" border p-3 p-md-4 mb-5 rounded-4">
                                        <div class="table-responsveness">
                                            <table class="table sub-table">
                                                <tr class="sub-tr">
                                                    <th class="border-end sub-th">Dormain</th>
                                                    <th class="border-end sub-th">Time Added</th>
                                                    <th class="border-end sub-th">Action</th>
                                                </tr>
                                                <tr class="sub-tr">
                                                    <td class="border-end sub-td">--</td>
                                                    <td class="border-end sub-td">--</td>
                                                    <td class="border-end sub-td">--</td>
                                                </tr>
                                            </table>
                                            <p class="text-center d-none d-md-block">Nothing here yet</p>
                                        </div>
                                    </div>

                                </div>
                                <p class="ps-3 pb-3 ps-md-0 text-decoration-underline "><a href="">Contact us for further help</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop