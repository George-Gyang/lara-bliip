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
                    <div class=" mb-5 justify-content-between">
                        <!-- <p class="text-black">Hi Moyin</p> -->
                        <div>
                            <h4 class="fw-bold text-primary">Subscription</h4>
                            <div class="card-shadow p-md-5">
                                <div>
                                    <p class="fw-bolder text-dark">My Plan</p>
                                    <div class="sky-bg p-3 mb-5 rounded-4">
                                        <div class="">
                                            <div class="d-flex justify-content-between">
                                                <p class="text-primary text-uppercase">Subscription Info</p>
                                                <button class=" btn navy-btn rounded-pill text-white">Free Trial</button>
                                            </div>
                                            <div class="d-flex pt-3">
                                                <p class="me-3">AKVM124</p>
                                                <p class="text-success">Active </p>
                                            </div>
                                            <div class="border border-white"></div>
                                            <div>
                                                <p class="my-5">Remaining API request: 10</p>
                                                <div class="d-grid gap-2 col-6 mb-3">
                                                    <button class="btn btn-primary" type="button">Manage your Subscription</button>
                                                    <!-- <button class="btn btn-primary" type="button">Button</button> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="fw-bolder text-da">Subscription History</p>
                                    <div class=" border p-3 p-md-4 mb-5 rounded-4">
                                        <div class="table-responsveness">
                                            <!-- <table class="table table-">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">First</th>
                                                        <th scope="col">Last</th>
                                                        <th scope="col">Handle</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>Mark</td>
                                                        <td>Otto</td>
                                                        <td>@mdo</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2</th>
                                                        <td>Jacob</td>
                                                        <td>Thornton</td>
                                                        <td>@fat</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td colspan="2">Larry the Bird</td>
                                                        <td>@twitter</td>
                                                    </tr>
                                                </tbody>
                                            </table> -->
                                            <table class="table sub-table">
                                                <tr class="sub-tr">
                                                    <th class="border-end sub-th">Date</th>
                                                    <th class="border-end sub-th">Plan</th>
                                                    <th class="border-end sub-th">Code</th>
                                                    <th class="border-end sub-th">Amount</th>
                                                </tr>
                                                <tr class="sub-tr">
                                                    <td class="border-end sub-td"> 31st December 2023</td>
                                                    <td class="border-end sub-td">Free Trial</td>
                                                    <td class="border-end sub-td">AKVM 124</td>
                                                    <td class="border-end sub-td">--</td>
                                                </tr>
                                            </table>
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