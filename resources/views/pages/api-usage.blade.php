@extends('layouts.default')

@section('content')

<div>
    <div>
        <div class="row mx-0">
            <div class=" d-none d-md-block col-md-3">
            @include('includes.aside')
            </div>
            <div class="col-md-9 px-5 px-md-0">
                <div class="container px-md-5 py-5">
                    <div class=" mb-5 justify-content-between">
                        <!-- <p class="text-black">Hi Moyin</p> -->
                        <div>
                            <h4 class="fw-bolder text-primary">Api Usage Log</h4>
                            <div class="card-shadow p-md-5">
                                <div>
                                    <div class="d-flex justify-content-between mb-3">
                                        <p class="fw-bolder text-dark">Applied Filters</p>
                                        <button class="btn navy-btn btn-sm text-light" data-mdb-toggle="modal" data-mdb-target="#staticBackdrop">Filters</button>
                                    </div>

                                    <!-- modals -->
                                    <!-- Button trigger modal -->

                                    <!-- Modal -->
                                    <div class="modal fade" id="staticBackdrop" data-mdb-backdrop="static" data-mdb-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="staticBackdropLabel">Filter</h5>
                                                    <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form>
                                                        <div class="form-outline  input-group-lg mb-4">
                                                            <input type="text" id="form3Example1" name="firstName" class="form-control" />
                                                            <label class="form-label" for="form3Example1">OTP ID</label>
                                                        </div>
                                                        <label for="api-channel">Channel</label>
                                                        <select class="form-select form-select-lg mb-3" id="api-channel" aria-label=".form-select-lg example">
                                                            <option selected>All</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                        <label for="api-service">Service</label>
                                                        <select class="form-select form-select-lg mb-3" id="api-service" aria-label=".form-select-lg example">
                                                            <option selected>All</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>

                                                    </form>

                                                    <div class="d-grid my-2 gap-2">
                                                        <button class="btn btn-outline-primary" type="button"> <span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                                                    <path fill="none" stroke="#00308f" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6.758 17.243L12.001 12m5.243-5.243L12 12m0 0L6.758 6.757M12.001 12l5.243 5.243" />
                                                                </svg>
                                                            </span> <span>Clear</span></button>
                                                        <button class="btn navy-btn text-light" type="button">
                                                            <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                                                    <path fill="white" d="m19.6 21l-6.3-6.3q-.75.6-1.725.95T9.5 16q-2.725 0-4.612-1.888T3 9.5q0-2.725 1.888-4.612T9.5 3q2.725 0 4.612 1.888T16 9.5q0 1.1-.35 2.075T14.7 13.3l6.3 6.3l-1.4 1.4ZM9.5 14q1.875 0 3.188-1.313T14 9.5q0-1.875-1.313-3.188T9.5 5Q7.625 5 6.312 6.313T5 9.5q0 1.875 1.313 3.188T9.5 14Z" />
                                                                </svg>
                                                            </span> <span>Search</span> </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=" border p-3 p-md-4 mb-5 rounded-4">
                                        <div class="table-responsveness">
                                            <table class="table sub-table">
                                                <tr class="sub-tr">
                                                    <th class="border-end sub-th">Channel OTP</th>
                                                    <th class="border-end sub-th">Status</th>
                                                    <th class="border-end sub-th">Time Created</th>
                                                    <th class="border-end sub-th">Successful URL</th>
                                                    <th class="border-end sub-th">Callback URL</th>
                                                    <th class="border-end sub-th">Meta Data</th>
                                                    <th class="border-end sub-th">Score</th>
                                                </tr>
                                                <tr class="sub-tr">
                                                    <td class="border-end sub-td">--</td>
                                                    <td class="border-end sub-td">--</td>
                                                    <td class="border-end sub-td">--</td>
                                                    <td class="border-end sub-td">--</td>
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