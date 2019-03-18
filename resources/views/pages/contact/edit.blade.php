@extends('layouts.dashboard')

@section('content')
    <div class="container-fluid d-flex justify-content-center">
        <div class="card">
            <div class="card-body">
                <form action="/contact/{{ $contact->ID  }}" method="post">
                    @csrf
                    <h3 class="card-title">Update Contact</h3>

                    <h4 class="card-title pt-2">Contact Information</h4>
                    <hr>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="phone">Phone Number</label>
                            <input type="number" class="form-control" id="phone" name="phone" value="{{ $contact->phone }}"
                                   placeholder="(xxx) xxx-xxxx"
                                   required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="alt_phone">Alternate Phone Number</label>
                            <input type="number" class="form-control" id="alt_phone" name="alt_phone" value="{{ $contact->alt_phone }}"
                                   placeholder="(xxx) xxx-xxxx"
                                   required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="emergency_contact">Emergency Contact</label>
                            <input type="text" class="form-control" id="emergency_contact" name="emergency_contact" value="{{ $contact->emergency_contact }}"
                                   placeholder=""
                                   required>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="relationship">Relationship</label>
                            <input type="text" class="form-control" id="relationship" name="relationship" value="{{ $contact->relationship }}"
                                   placeholder="ie. Mother"
                                   required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="emergency_phone">Emergency Contact Phone Number</label>
                            <input type="number" class="form-control" id="emergency_phone" name="emergency_phone" value="{{ $contact->emergency_phone }}"
                                   placeholder="(xxx) xxx-xxxx"
                                   required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="emergency_alt_phone">Emergency Contact Alternate Phone Number</label>
                            <input type="number" class="form-control" id="emergency_alt_phone" value="{{ $contact->emergency_alt_phone }}"
                                   name="emergency_alt_phone" placeholder="(xxx) xxx-xxxx"
                                   required>
                        </div>
                    </div>
                    <button class="btn btn-info" type="submit">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection