@extends('layouts.default');

@section('content');

<div>
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-md-6 ">
                <div class="container px-5">
                    <h2 class="navy-text display-3 fw-bold py-3">Verify your phone number</h2>
                    <div class="">
                        <p class="p-2">We have sent a verification code to *******8008</p>
                        <label for="exampleFormControlInput1" class="form-label">Enter code</label>
                        <div class="mb-3 d-flex">
                            <input type="email" class="form-control navy-border" id="exampleFormControlInput1" placeholder="name@example.com">
                            <button class="btn ms-3 navy-btn text-white">Verify</button>
                        </div>
                    </div>
                    <div>
                    <p>Resend code in (48 secs)</p>
                       <a href=""> <p>Change Phone Number</p> </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-none d-md-block">
                <div class="container p-5 border-start">
                    <h2 class="navy-text py-2 display-3 fw-bolder">Tell us about yourself</h2>
                    <div>
                        <p>Let us know a little more about you, so we can serve you better.</p>
                        <p>What is your role?</p>
                    </div>
                    <form action="">
                        <div class="py-2">
                            <input class="form-control navy-border1" list="datalistOptions" id="exampleDataList" placeholder="Develpoer">
                            <datalist id="datalistOptions">
                                <option value="San Francisco">
                                <option value="New York">
                                <option value="Seattle">
                                <option value="Los Angeles">
                                <option value="Chicago">
                            </datalist>
                        </div>
                        <div class="py-2">
                            <input class="form-control navy-border1" list="datalistOptions" id="exampleDataList" placeholder="Marketer">
                            <datalist id="datalistOptions">
                                <option value="San Francisco">
                                <option value="New York">
                                <option value="Seattle">
                                <option value="Los Angeles">
                                <option value="Chicago">
                            </datalist>
                        </div>
                        <div class="py-2">
                            <input class="form-control navy-border1" list="datalistOptions" id="exampleDataList" placeholder="Researcher">
                            <datalist id="datalistOptions">
                                <option value="San Francisco">
                                <option value="New York">
                                <option value="Seattle">
                                <option value="Los Angeles">
                                <option value="Chicago">
                            </datalist>
                        </div>
                        <div class="py-2">
                            <input class="form-control navy-border1" list="datalistOptions" id="exampleDataList" placeholder="Product Manager">
                            <datalist id="datalistOptions">
                                <option value="San Francisco">
                                <option value="New York">
                                <option value="Seattle">
                                <option value="Los Angeles">
                                <option value="Chicago">
                            </datalist>
                        </div>
                        <div class="py-2">
                            <input class="form-control navy-border1" list="datalistOptions" id="exampleDataList" placeholder="Others">
                            <datalist id="datalistOptions">
                                <option value="San Francisco">
                                <option value="New York">
                                <option value="Seattle">
                                <option value="Los Angeles">
                                <option value="Chicago">
                            </datalist>
                        </div>
                        <div class="d-grid my-4 gap-2 col-6 mx-auto">
                            <button class="btn navy-btn text-white" type="button">Next</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

@stop