<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="/">
    <link rel="stylesheet" href="/css/irescue.css">

</head>

<body>

    <div>
        <div class="irescue_container container">
            <div class="form_header py-4">
                <h1 class="text-end header_one text-dark">iRescue App</h1>
                <div class="col-md-2 col-4">
                    <a href=""><img class="img-fluid"
                            src="{{ asset('https://media.licdn.com/dms/image/D4D03AQFvNPCqjkuZbg/profile-displayphoto-shrink_800_800/0/1668789360822?e=1690416000&v=beta&t=0Q0khy1hNiepv4O_WnzFR5MZ5e8QelH2nmtKGrOihyE') }}"
                            alt="Bliip Logo"></a>
                </div>
                <h5 class="fw-bold">Employment Application
                    </h6>
                    <h6 class="main_bg_color text-center text-light">Applicant Information </h6>
            </div>
            <div class="form_body">
                <div class="row my-4">
                    <div class="col-md-8 mb-4 ">
                        <div class="d-flex">
                            <label class="text-nowrap me-2" for="fullname">Full Name:</label>
                            <input class=" border-bottom-3 " type="text" name="" id="fullname">
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="d-flex">
                            <label class="text-nowrap me-2" for="date">Date:</label>
                            <input type="text" name="" id="date">
                        </div>
                    </div>
                    <div class="d-flex mb-4">
                        <label class="text-nowrap me-2" for="address">Address:</label>
                        <input type="text" name="" id="address">
                    </div>
                    <div class="d-flex mb-4">
                        <label class="text-nowrap me-2" for="streetaddress"><i>Street Address:</i></label>
                        <input type="text" name="" id="streetaddress">
                    </div>

                    <div class="col-md-6 mb-4 ">
                        <div class="d-flex">
                            <label class="text-nowrap me-2" for="phoneNumber">Phone:</label>
                            <input class=" border-bottom-3 " type="text" name="" id="phoneNumber">
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="d-flex">
                            <label class="text-nowrap me-2" for="email">Email:</label>
                            <input type="text" name="" id="email">
                        </div>
                    </div>
                    <div class="col-md-5 mb-4">
                        <div class="d-flex">
                            <label class="text-nowrap me-2" for="DateAvailable">Date Available:</label>
                            <input type="text" name="" id="DateAvailable">
                        </div>
                    </div </div>
                    <div class="row">
                        <span class="co-5 col-md-2">Position Applied for: </span>
                        <p class="border-bottom border-dark text-dark col">
                            <b>ONLINE CUSTOMER ACQUISITION TRAINEE</b>
                        </p>
                    </div>
                    <h6 class="main_bg_color text-center mt-4 mb-3 text-light">Education</h6>
                    <div class="row">

                        <div class="col-md-6 mb-4 ">
                            <div class="d-flex">
                                <label class="text-nowrap me-2" for="highSchool">High School:</label>
                                <input class=" border-bottom-3 " type="text" name="" id="highSchool">
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="d-flex">
                                <label class="text-nowrap me-2" for="Course">Course:</label>
                                <input type="text" name="" id="Course">
                            </div>
                        </div>
                        <div class="col-md-6 mb-4 ">
                            <div class="row">
                                <div class="col-6">
                                    <div class="d-flex">
                                        <label class="text-nowrap me-2" for="from">From:</label>
                                        <input type="text" name="" id="from">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-flex">
                                        <label class="text-nowrap me-2" for="to">To:</label>
                                        <input type="text" name="" id="to">
                                    </div>
                                </div>
                                {{-- <div class="col-6"></div> --}}
                            </div>
                        </div>

                        <div class="col-md-6 mb-4 mt-n4">
                            <div class="d-flex">
                                <label class="text-nowrap me-2" for="Course">Type of <br>
                                    Certificate:</label>
                                <input type="text" name="" id="Course">
                            </div>
                        </div>

                        <div class="col-md-6 mb-4 ">
                            <div class="d-flex">
                                <label class="text-nowrap me-2" for="college">College:</label>
                                <input class=" border-bottom-3 " type="text" name="" id="college">
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="d-flex">
                                <label class="text-nowrap me-2" for="Course">Course:</label>
                                <input type="text" name="" id="Course">
                            </div>
                        </div>

                        <div class="col-md-6 mb-4 ">
                            <div class="row">
                                <div class="col-6">
                                    <div class="d-flex">
                                        <label class="text-nowrap me-2" for="from">From:</label>
                                        <input type="text" name="" id="from">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-flex">
                                        <label class="text-nowrap me-2" for="to">To:</label>
                                        <input type="text" name="" id="to">
                                    </div>
                                </div>
                                {{-- <div class="col-6"></div> --}}
                            </div>
                        </div>

                        <div class="col-md-6 mb-4 mt-n4">
                            <div class="d-flex">
                                <label class="text-nowrap me-2" for="Course">Type of <br>
                                    Certificate:</label>
                                <input type="text" name="" id="Course">
                            </div>
                        </div>
                        <div class="col-md-6 mb-4 ">
                            <div class="d-flex">
                                <label class="text-nowrap me-2" for="other">Other:</label>
                                <input class=" border-bottom-3 " type="text" name="" id="other">
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="d-flex">
                                <label class="text-nowrap me-2" for="Course">Course:</label>
                                <input type="text" name="" id="Course">
                            </div>
                        </div>
                        <div class="col-md-6 mb-4 ">
                            <div class="row">
                                <div class="col-6">
                                    <div class="d-flex">
                                        <label class="text-nowrap me-2" for="from">From:</label>
                                        <input type="text" name="" id="from">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-flex">
                                        <label class="text-nowrap me-2" for="to">To:</label>
                                        <input type="text" name="" id="to">
                                    </div>
                                </div>
                                {{-- <div class="col-6"></div> --}}
                            </div>
                        </div>

                        <div class="col-md-6 mb-4 mt-n4">
                            <div class="d-flex">
                                <label class="text-nowrap me-2" for="Course">Type of <br>
                                    Certificate:</label>
                                <input type="text" name="" id="Course">
                            </div>
                        </div>

                        <h6 class="main_bg_color text-center mt-4 mb-3 text-light">References</h6>
                        <p><i>Please list three professional references. </i></p>
                        <div class="row">
                            <div class="col-md-8 mb-4 ">
                                <div class="d-flex">
                                    <label class="text-nowrap me-2" for="refFullName">Full Name:</label>
                                    <input class=" border-bottom-3 " type="text" name="" id="refFullName">
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="d-flex">
                                    <label class="text-nowrap me-2" for="refRelationship">Relationship:</label>
                                    <input type="text" name="" id="refRelationship">
                                </div>
                            </div>
                            <div class="col-md-8 mb-4 ">
                                <div class="d-flex">
                                    <label class="text-nowrap me-2" for="refCompany">Company:</label>
                                    <input class=" border-bottom-3 " type="text" name="" id="refCompany">
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="d-flex">
                                    <label class="text-nowrap me-2" for="refPhone">Phone:</label>
                                    <input type="text" name="" id="refPhone">
                                </div>
                            </div>
                            <div class="">
                                <div class="d-flex">
                                    <label class="text-nowrap me-2" for="refAddress">Address:</label>
                                    <input class="border-0" type="text" name="" id="refAddress">
                                </div>
                                <div class="py-2 border_space"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 mb-4 ">
                                <div class="d-flex">
                                    <label class="text-nowrap me-2" for="refFullName">Full Name:</label>
                                    <input class=" border-bottom-3 " type="text" name="" id="refFullName">
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="d-flex">
                                    <label class="text-nowrap me-2" for="refRelationship">Relationship:</label>
                                    <input type="text" name="" id="refRelationship">
                                </div>
                            </div>
                            <div class="col-md-8 mb-4 ">
                                <div class="d-flex">
                                    <label class="text-nowrap me-2" for="refCompany">Company:</label>
                                    <input class=" border-bottom-3 " type="text" name="" id="refCompany">
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="d-flex">
                                    <label class="text-nowrap me-2" for="refPhone">Phone:</label>
                                    <input type="text" name="" id="refPhone">
                                </div>
                            </div>
                            <div class="">
                                <div class="d-flex">
                                    <label class="text-nowrap me-2" for="refAddress">Address:</label>
                                    <input class="border-0" type="text" name="" id="refAddress">
                                </div>
                                <div class="py-2 border_space"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 mb-4 ">
                                <div class="d-flex">
                                    <label class="text-nowrap me-2" for="refFullName">Full Name:</label>
                                    <input class=" border-bottom-3 " type="text" name="" id="refFullName">
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="d-flex">
                                    <label class="text-nowrap me-2" for="refRelationship">Relationship:</label>
                                    <input type="text" name="" id="refRelationship">
                                </div>
                            </div>
                            <div class="col-md-8 mb-4 ">
                                <div class="d-flex">
                                    <label class="text-nowrap me-2" for="refCompany">Company:</label>
                                    <input class=" border-bottom-3 " type="text" name="" id="refCompany">
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="d-flex">
                                    <label class="text-nowrap me-2" for="refPhone">Phone:</label>
                                    <input type="text" name="" id="refPhone">
                                </div>
                            </div>
                            <div class="">
                                <div class="d-flex">
                                    <label class="text-nowrap me-2" for="refAddress">Address:</label>
                                    <input class="border-0" type="text" name="" id="refAddress">
                                </div>
                                <div class="py-2 border_space"></div>
                            </div>
                        </div>

                        <h6 class="main_bg_color text-center mt-4 mb-3 text-light">Previous Employment </h6>

                        <div class="row">
                            <div class="col-md-8 mb-4 ">
                                <div class="d-flex">
                                    <label class="text-nowrap me-2" for="prevCompany">Company:</label>
                                    <input class=" border-bottom-3 " type="text" name="" id="prevCompany">
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="d-flex">
                                    <label class="text-nowrap me-2" for="prevPhone">Phone:</label>
                                    <input type="text" name="" id="prevPhone">
                                </div>
                            </div>
                            <div class="col-md-8 mb-4 ">
                                <div class="d-flex">
                                    <label class="text-nowrap me-2" for="prevAddress">Address:</label>
                                    <input class=" border-bottom-3 " type="text" name="" id="prevAddress">
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="d-flex">
                                    <label class="text-nowrap me-2" for="prevSupervisor">Supervisor:</label>
                                    <input type="text" name="" id="prevSupervisor">
                                </div>
                            </div>
                            <div class="col-md-4 mb-4 ">
                                <div class="d-flex">
                                    <label class="text-nowrap me-2" for="prevJobTitle">Job Title:</label>
                                    <input class=" border-bottom-3 " type="text" name=""
                                        id="prevJobTitle">
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="d-flex">
                                    <label class="text-nowrap me-2" for="prevStartSalary">Starting Salary:</label>
                                    <input type="text" name="" id="prevStartSalary">
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="d-flex">
                                    <label class="text-nowrap me-2" for="prevEndSalary">Ending Salary:</label>
                                    <input type="text" name="" id="prevEndSalary">
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="d-flex">
                                    <label class="text-nowrap me-2" for="refAddress">Responsibilities:</label>
                                    <input class="" type="text" name="" id="refAddress">
                                </div>
                            </div>
                            <div class="col-md-6 mb-4 ">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="d-flex">
                                            <label class="text-nowrap me-2" for="from">From:</label>
                                            <input type="text" name="" id="from">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="d-flex">
                                            <label class="text-nowrap me-2" for="to">To:</label>
                                            <input type="text" name="" id="to">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="d-flex">
                                    <label class="text-nowrap me-2" for="Course">Reason for Leaving:</label>
                                    <input type="text" name="" id="Course">
                                </div>
                            </div>
                            <div class="d-flex">
                                <p>May we contact your previous supervisor for a reference?</p>
                                <div class="ms-3">
                                    <div class="label">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Yes
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault1">
                                    </div>
                                </div>
                                <div class="ms-3">
                                    <div class="label">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            No
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault1">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h6 class="main_bg_color text-center mt-4 mb-3 text-light">Customer Acquisition T&C </h6>
                        <div class="mb-4">
                            <div class="d-md-flex align-items-end">
                                <label class="col-md-4 d-md-block col-12 " for="refAddress">
                                    <i>
                                        All efforts will be
                                        rewarded as
                                        follows: Register <b>2000</b> user in a
                                        month and get paid <b>50,000</b>naira
                                        only. Fall short and the
                                        calculation will be based on the
                                        numbers that was collated by
                                        the system.
                                        <br>
                                        I understand that this is not a
                                        full-time employment and i
                                        consent to the terms and
                                        condition guiding the customer
                                        acquisition contract.
                                    </i>
                                </label>
                                <input class="col-md-8" type="text" name="" id="refAddress">
                            </div>
                        </div>

                        <h6 class="main_bg_color text-center mt-4 mb-3 text-light">Disclaimer and Signature </h6>
                        <p><i>I certify that my answers are true and complete to the best of my knowledge.
                                <br>
                                If this application leads to employment, I understand that false or misleading
                                information in my application or
                                interview may result in my disqualification.
                            </i>
                        </p>
                        <div class="row">
                            <div class="col-md-8 mb-4 ">
                                <div class="d-flex">
                                    <label class="text-nowrap me-2" for="prevCompany">Signature:</label>
                                    <input class=" border-bottom-3 " type="text" name="" id="prevCompany">
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="d-flex">
                                    <label class="text-nowrap me-2" for="prevPhone">Date:</label>
                                    <input type="text" name="" id="prevPhone">
                                </div>
                            </div>
                            <p class="mt-n5">Full Name</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
