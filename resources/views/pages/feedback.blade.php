@extends('layouts.default')

@section('content')

<div>
    <div>
        <div class="row mx-0">
            <div class=" d-none d-md-block col-md-3">
            @include('includes.aside')
            </div>
            <div class="col-md-9 px-md-0">
                <div class="container px-md-5 py-5">
                    <div class=" mb-5 justify-content-between">
                        <!-- <p class="text-black">Hi Moyin</p> -->
                        <div>
                            <h4 class="fw-bolder prime-text">Feedback</h4>
                            <div class="card-shadow p-md-5">
                                <div>
                                    <div style="max-width: 600px;" class=" mx-auto px-2 p-md-4 mb-5">
                                        <p class="neutral">Drop your observations, comments, reviews & complaints in the box below</p>
                                        <form action="">
                                            <div>
                                                <div class="form-floating">
                                                    <textarea name="comment" class="form-control comments" id="floatingTextarea"></textarea>
                                                    <label for="floatingTextarea">Type your meaasge here</label>
                                                </div>
                                                <div class="d-grid my-4 gap-2 col-6 mx-auto mx-md-0 ">
                                                    <button class="btn prime-btn text-white" type="submit">Send</button>
                                                    <!-- <button class="btn btn-primary" type="button">Button</button> -->
                                                </div>
                                                <!-- <button class="btn navy-btn">Send</button> -->
                                            </div>
                                        </form>
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