@extends('layouts.dashboard')

@section('content')
    <div class="container-fluid d-flex justify-content-center">
        <div class="card">
            <div class="card-body">
                <form action="/student-info" method="post">
                    @csrf
                    <h3 class="card-title">New Student Registration Form</h3>

                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="validationDefault03">First Name</label>
                            <input type="text" class="form-control" id="validationDefault03"  name="first_name" value="First"
                                   required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationDefault04">Last Name</label>
                            <input type="text" class="form-control" id="validationDefault04" name="last_name" value="Last"
                                   required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationDefault05">Email</label>
                            <input type="text" class="form-control" id="validationDefault05"
                                  name="email" value="example@example.com" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="validationDefault01">Gender</label>
                            <select class="form-control" name="gender">
                                <option value="m">Male</option>
                                <option value="f">Female</option>
                                <option value="o">Other</option>
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationDefault02">Weight</label>
                            <input type="number" class="form-control" id="validationDefault02" name="weight"
                                   value="99" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationDefaultUsername">Height</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupPrepend2">Feet</span>
                                </div>
                                <input type="number" class="form-control" id="validationDefaultUsername" value="0"
                                       aria-describedby="inputGroupPrepend2" name="height_feet" required>
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupPrepend2">Inches</span>
                                </div>
                                <input type="number" class="form-control" id="validationDefaultUsername" value="0"
                                       aria-describedby="inputGroupPrepend2" name="height_inch" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="validationDefault03">Date of Birth</label>
                            <input type="date" class="form-control" id="validationDefault03" name="date_of_birth" value="City"
                                   required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationDefault04">Number Of Years Skiing:</label>
                            <input type="number" class="form-control" id="validationDefault04" name="years_experience" value="2"
                                   required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationDefault04">Number Of Years In Track 3:</label>
                            <input type="number" class="form-control" id="validationDefault04" name="years_in_program" value="2"
                                   required>
                        </div>
                    </div>

                    <h4 class="card-title">Address</h4>
                    <hr>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="address_line_one">Address 1</label>
                            <input type="text" class="form-control" id="address_line_one" name="address_line_one" value="address_line_one"
                                   required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="address_line_two">Address 2</label>
                            <input type="text" class="form-control" id="address_line_two" name="address_line_two" value="address_line_two"
                                   required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="city">City</label>
                            <input type="text" class="form-control" id="city" name="city" value="City"
                                   required>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="province">Province</label>
                            <input type="text" class="form-control" id="province" name="province" value="Province"
                                   required>
                        </div>

                        <div class="col-md-3 mb-3">
                            <label for="postal_code">Postal Code</label>
                            <input type="text" class="form-control" id="postal_code" name="postal_code" value="0"
                                   required>
                        </div>
                    </div>


                    <h4 class="card-title">Contact Information</h4>
                    <hr>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="phone">Phone Number</label>
                            <input type="number"  class="form-control" id="phone" name="phone" value="1"
                                   required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="alt_phone">Alt Phone Number</label>
                            <input type="number"  class="form-control" id="alt_phone" name="alt_phone" value="1"
                                   required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="emergency_contact">Emergency Contact</label>
                            <input type="text" class="form-control" id="emergency_contact" name="emergency_contact" value="emergency_contact"
                                   required>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="relationship">Relationship</label>
                            <input type="text" class="form-control" id="relationship" name="relationship" value="relationship"
                                   required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="emergency_phone">Emergency Contact Phone Number</label>
                            <input type="number"  class="form-control" id="emergency_phone" name="emergency_phone" value="1"
                                   required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="emergency_alt_phone">Emergency Contact Alt Phone Number</label>
                            <input type="number"  class="form-control" id="emergency_alt_phone" name="emergency_alt_phone" value="1"
                                   required>
                        </div>
                    </div>



                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="true" id="invalidCheck2" name="photo_release">
                            <label class="form-check-label" for="invalidCheck2">
                                Do you agree to a photo release?
                            </label>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Submit form</button>
                </form>
            </div>
        </div>
    </div>
@endsection