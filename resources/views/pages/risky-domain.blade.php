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
                            <h4 class="fw-bolder navy-text text-primry">Risky domains</h4>
                            <div class="card-shadow p-md-5">
                                <div>
                                    <div class="d-flex justify-content-between mb-3">
                                        <p class="fw-bolder text-dark">Risky domain list</p>
                                        <div class="d-grid gap-1 col-4">
                                            <button class="btn navy-btn text-white" type="button" data-mdb-toggle="modal" data-mdb-target="#staticBackdrop">+ Add domain</button>
                                        </div>
                                        <!-- Modal -->
                                        <div class="modal fade" id="staticBackdrop" data-mdb-backdrop="static" data-mdb-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="staticBackdropLabel">Add Domain</h5>
                                                        <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form>
                                                            <div class="form-outline  input-group-lg mb-4">
                                                                <input type="text" id="form3Example1" name="firstName" class="form-control" />
                                                                <label class="form-label" for="form3Example1">Domain name</label>
                                                            </div>
                                                        </form>

                                                        <div class="d-grid my-2 gap-2">
                                                            <button class="btn btn-outline-primary" type="button"> Cancel</button>
                                                            <button class="btn navy-btn text-light" type="button">Submit</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" border p-3 p-md-4 mb-5 rounded-4">
                                        <div class="table-responsveness">
                                            <table class="table sub-table">
                                                <tr class="sub-tr">
                                                    <th class="border-end sub-th">Domain</th>
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