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
                            <h4 class="fw-bold navy-text">Profile</h4>
                            <div class="card-shadow p-5">
                                <div>
                                    <form>
                                        <!-- 2 column grid layout with text inputs for the first and last names -->
                                        <div class="form-floating mb-3 border border-0">
                                            <input type="text" name="profileName"  class="form-control  input-outline " id="floatingInput" placeholder="name@example.com">
                                            <label for="floatingInput">Name</label>
                                        </div>

                                        <!-- Text input -->
                                        <div class="form-floating mb-3 border border-0">
                                            <input type="email" name="profileEmail" class="form-control  input-outline " id="floatingInput" placeholder="name@example.com">
                                            <label for="floatingInput">Email</label>
                                        </div>

                                        <!-- Email input -->
                                        <div class="form-floating mb-5 border border-0">
                                            <input type="tel" name="profileNumber" class="form-control input-outline " id="floatingInput" placeholder="name@example.com">
                                            <label for="floatingInput">Phone</label>
                                        </div>
                                        <!-- Submit button -->
                                        <button type="submit" class="btn navy-btn text-light my-5">Change</button>
                                    </form>
                                </div>
                                <p><a href="">Contact us for further help</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop