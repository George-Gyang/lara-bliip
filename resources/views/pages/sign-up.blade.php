@extends('layouts.default')

@section('content')

<div class="py-5">
    <div class="py-5">
        <div class="container">
            <div class="row">
                <h2 class="text-center py-4 fw-bolder navy-text">Create your Account</h2>

                <div class="col-md-6">
                    <div class="form-container p-3 rounded">
                        <form>

                            <div class="form-outline  input-group-lg mb-4">
                                <input type="text" id="form3Example1" name="firstName" class="form-control" />
                                <label class="form-label" for="form3Example1">First name</label>
                            </div>
                            <div class="form-outline input-group-lg mb-4">
                                <input type="text" id="form3Example2" name="lastName" class="form-control" />
                                <label class="form-label" for="form3Example2">Last name</label>
                            </div>
                            <!-- Email input -->
                            <div class="form-outline input-group-lg mb-4">
                                <input type="email" id="form3Example3" name="email" class="form-control" />
                                <label class="form-label" for="form3Example3">Email</label>
                            </div>


                            <select class="form-select mb-4" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <!-- Password input -->
                            <div class="form-outline input-group-lg mb-4">
                                <input type="password" id="form3Example4" name="" class="form-control" />
                                <label class="form-label" for="form3Example4">Password</label>
                            </div>

                            <!-- Checkbox -->
                            <div class="form-check d-flex justify-content-center mb-4">
                                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                                <label class="form-check-label" for="form2Example33">
                                    Subscribe to our newsletter
                                </label>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" class="btn navy-btn text-white fs-5 btn-block mb-4">Sign Up</button>

                            <!-- Register buttons -->
                            <div class="text-center">
                                <p>or sign up with:</p>
                                <button type="button" class="btn btn-secondary btn-floating mx-1">
                                    <i class="fab fa-facebook-f"></i>
                                </button>

                                <button type="button" class="btn btn-secondary btn-floating mx-1">
                                    <i class="fab fa-google"></i>
                                </button>

                                <button type="button" class="btn btn-secondary btn-floating mx-1">
                                    <i class="fab fa-twitter"></i>
                                </button>

                                <button type="button" class="btn btn-secondary btn-floating mx-1">
                                    <i class="fab fa-github"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 d-none d-md-flex align-items-center">
                    <div class="container">
                        <div>
                            <img src="{{ asset('images/sign-up.png') }}" class="img-fluid" alt="image description">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop