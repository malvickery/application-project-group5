@extends('layouts.dashboard')

@section('content')
    <div class="container-fluid d-flex justify-content-center mt-10">
        <div class=col-12">
            <div class="row">
                <div class="card bg-grey-lighter">
                    <div class="card-body">
                        <form action="/instructor-info" method="post">
                            @csrf
                            <div class="col-12">
                                <div class="row pb-4">
                                    <div class="col-12">

                                        <h3 class="card-title">New Track Three Instructor Registration Form</h3>
                                        <hr class="pt-2">
                                        <h4 class="card-title pt-2">Instructor Information</h4>
                                    </div>

                                    <div class="col-lg-3">
                                        <span>Filler Text</span>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="form-row">
                                            <div class="col-md-3 mb-3">
                                                <label for="first_name">First Name</label>
                                                <input type="text" class="form-control" id="first_name"
                                                       name="first_name"
                                                       placeholder="First"
                                                       required>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="last_name">Last Name</label>
                                                <input type="text" class="form-control" id="last_name" name="last_name"
                                                       placeholder="Last"
                                                       required>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="email">Email</label>
                                                <input type="text" class="form-control" id="email"
                                                       name="email" placeholder="example@example.com" required>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="date_of_birth">Date of Birth</label>
                                                <input type="date" class="form-control" id="date_of_birth"
                                                       name="date_of_birth"
                                                       required>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="col-md-4 mb-3">
                                                <label for="gender">Gender</label>
                                                <select class="form-control" id="gender" name="gender">
                                                    <option selected></option>
                                                    <option value="m">Male</option>
                                                    <option value="f">Female</option>
                                                    <option value="o">Other</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="weight">Weight</label>
                                                <input type="number" class="form-control" id="weight" name="weight"
                                                       placeholder="Student's Weight" required>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="height_feet">Height</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="height_feet">Feet</span>
                                                    </div>
                                                    <input type="number" class="form-control" id="height_feet"
                                                           placeholder="0"
                                                           aria-describedby="inputGroupPrepend2" name="height_feet"
                                                           required>
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"
                                                              id="inputGroupPrepend2">Inches</span>
                                                    </div>
                                                    <input type="number" class="form-control" id="height_inch"
                                                           placeholder="0"
                                                           aria-describedby="inputGroupPrepend2" name="height_inch"
                                                           required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="col-md-4 mb-3">
                                                <label for="ski_type">Ski Type</label>
                                                <select class="form-control" id="ski_type" name="ski_type">
                                                    <option value="ski">Skiing</option>
                                                    <option value="snow-board">Snowboarding</option>
                                                    <option value="sit-ski">Sit Skiing</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="preferred_day">Preferred Day</label>
                                                <select class="form-control" id="preferred_day" name="preferred_day">
                                                    <option value="mon">Monday</option>
                                                    <option value="tues">Tuesday</option>
                                                    <option value="wed">Wednesday</option>
                                                    <option value="thurs">Thursday</option>
                                                    <option value="fri">Friday</option>
                                                    <option value="sat">Saturday AM</option>
                                                    <option value="sat">Saturday PM</option>
                                                    <option value="sun">Sunday</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="alternate_day">Alternate Day</label>
                                                <select class="form-control" id="alternate_day" name="alternate_day">
                                                    <option value="mon">Monday</option>
                                                    <option value="tues">Tuesday</option>
                                                    <option value="wed">Wednesday</option>
                                                    <option value="thurs">Thursday</option>
                                                    <option value="fri">Friday</option>
                                                    <option value="sat">Saturday AM</option>
                                                    <option value="sat">Saturday PM</option>
                                                    <option value="sun">Sunday</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <hr class="pt-4">
                                <div class="row pb-4">
                                    <div class="col-lg-3">
                                        <h4 class="card-title pt-2">Address</h4>
                                        <span>Filler Text</span>
                                    </div>

                                    <div class="col-lg-9">
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="address_line_one">Address 1</label>
                                                <input type="text" class="form-control" id="address_line_one"
                                                       name="address_line_one"
                                                       required>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="address_line_two">Address 2</label>
                                                <input type="text" class="form-control" id="address_line_two"
                                                       name="address_line_two"
                                                       required>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label for="city">City</label>
                                                <input type="text" class="form-control" id="city" name="city"
                                                       placeholder="City"
                                                       required>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="province">Province</label>
                                                <input type="text" class="form-control" id="province"
                                                       name="province"
                                                       placeholder="Province"
                                                       required>
                                            </div>

                                            <div class="col-md-3 mb-3">
                                                <label for="postal_code">Postal Code</label>
                                                <input type="text" class="form-control" id="postal_code"
                                                       name="postal_code"
                                                       placeholder="XXX XXX"
                                                       required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <hr class="pt-4">
                                <div class="row pb-4">
                                    <div class="col-lg-3">
                                        <h4 class="card-title pt-2">Contact Information</h4>
                                        <span>Filler Text</span>
                                    </div>

                                    <div class="col-lg-9">
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="phone">Phone Number</label>
                                                <input type="number" class="form-control" id="phone" name="phone"
                                                       placeholder="(xxx) xxx-xxxx"
                                                       required>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="alt_phone">Alternate Phone Number</label>
                                                <input type="number" class="form-control" id="alt_phone"
                                                       name="alt_phone"
                                                       placeholder="(xxx) xxx-xxxx"
                                                       required>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label for="emergency_contact">Emergency Contact</label>
                                                <input type="text" class="form-control" id="emergency_contact"
                                                       name="emergency_contact"
                                                       placeholder=""
                                                       required>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="relationship">Relationship</label>
                                                <input type="text" class="form-control" id="relationship"
                                                       name="relationship"
                                                       placeholder="ie. Mother"
                                                       required>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label for="emergency_phone">Emergency Contact Phone Number</label>
                                                <input type="number" class="form-control" id="emergency_phone"
                                                       name="emergency_phone"
                                                       placeholder="(xxx) xxx-xxxx"
                                                       required>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="emergency_alt_phone">Emergency Contact Alternate Phone
                                                    Number</label>
                                                <input type="number" class="form-control" id="emergency_alt_phone"
                                                       name="emergency_alt_phone" placeholder="(xxx) xxx-xxxx"
                                                       required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <hr class="pt-4">
                                <div class="row pb-4">
                                    <div class="col-lg-3">
                                        <h4 class="card-title pt-2">Certifications and Experience</h4>
                                        <span>Filler Text</span>
                                    </div>

                                    <div class="col-lg-9">
                                    <div class="form-row align-items-center">

                                        <div class="col-md-4">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" name="is_CSIA"
                                                       id="is_CSIA">
                                                <label class="form-check-label" for="is_CSIA">
                                                    Are you CSIA Certified?
                                                </label>
                                            </div>
                                            <label class="sr-only" for="CSIA_number">CSIA Certification #:</label>
                                            <input type="text" class="form-control mb-2" name="CSIA_number"
                                                   id="CSIA_number"
                                                   placeholder="CSIA Certification # ">
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" name="is_CSCF"
                                                       id="is_CSCF">
                                                <label class="form-check-label" for="is_CSCF">
                                                    Are you CSCF Certified?
                                                </label>
                                            </div>
                                            <label class="sr-only" for="inlineFormInput">CSCF Certification
                                                #:</label>
                                            <input type="text" class="form-control mb-2" name="CSCF_number"
                                                   id="CSCF_number"
                                                   placeholder="CSCF Certification # ">
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" name="is_CASI"
                                                       id="is_CASI">
                                                <label class="form-check-label" for="is_CASI">
                                                    Are you CASI Certified?
                                                </label>
                                            </div>
                                            <label class="sr-only" for="CASI_number">CASI Certification #:</label>
                                            <input type="text" class="form-control mb-2" name="CASI_number"
                                                   id="CASI_number"
                                                   placeholder="CASI Certification # ">
                                        </div>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Submit form</button>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
