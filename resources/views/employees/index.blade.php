@extends('layouts.app')

@section('content')
<div class="container">

    

    <div class="row">
        <div class="col-md-10 offset-md-1">
       
            <div class="card mb-5">
              <div style="width: 100%; margin: auto; margin-bottom:1%; background-color: black; padding-bottom: 5%">
                <h1 align="center" class="mt-5" style="color: white;"><b>Employee Management</b></h1>
              </div>
            
                <div class="card-body">
                    <form method="POST" action="{{ route('employees.store') }}" class="form-horizontal needs-validation" style="padding: 1%;" novalidate>
                        @csrf

                        <label for="first_name" class="form-label">First name</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" style="width: 100%; margin: auto; margin-bottom:1%;" required>

                        <label for="last_name" class="form-label">Last name</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" style="width: 100%; margin: auto; margin-bottom:1%;" required>

                        <label for="middle_name" class="form-label">Middle name</label>
                        <input type="text" class="form-control" id="middle_name" name="middle_name" style="width: 100%; margin: auto; margin-bottom:1%;" required>
                        
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" name="address" style="width: 100%; margin: auto; margin-bottom:1%;" required>

                        <label for="country" class="form-label">Country</label>
                        <select class="form-control" id="country" name="country" style="width: 100%; margin: auto; margin-bottom:1%;" required>
                            <option selected disabled value="">Please Select Your Country</option>
                            <option>Philippines</option>
                        </select>

                        <label for="state" class="form-label">State</label>
                        <select class="form-control" id="state" name="state" style="width: 100%; margin: auto; margin-bottom:1%;" required>
                            <option selected disabled value="">Please Select Your State</option>
                            <option>Pampanga</option>
                        </select>

                        <label for="city" class="form-label">City</label>
                        <select class="form-control" id="city" name="city" style="width: 100%; margin: auto; margin-bottom:1%;" required>
                            <option selected disabled value="">Please Select Your City</option>
                            <option>Macabebe</option>
                        </select>

                        <label for="zip" class="form-label">ZIP</label>
                        <input type="number" class="form-control" id="zip" name="zip" style="width: 100%; margin: auto; margin-bottom:1%;" inputmode="numeric" required>

                        <label for="age" class="form-label">AGE</label>
                        <input type="number" class="form-control" id="age" name="age" style="width: 100%; margin: auto; margin-bottom:1%;" inputmode="numeric" required>

                        <label style="margin-right: 10.5%;">Birthday:</label>
                        <div class="input-group-prepend">
                            <input type="date" class="form-control" id="birthday" name="birthday" style="width: 100%; margin: auto; margin-bottom:1%;" required>
                        </div>

                        <label style="margin-right: 10.5%;">Hired Date:</label>
                        <div class="input-group-prepend">
                            <input type="date" class="form-control" id="hire_date" name="hire_date" style="width: 100%; margin: auto; margin-bottom:1%;" required>
                        </div>

                        <label for="department" class="form-label">Department</label>
                        <select class="form-control" id="department" name="department" style="width: 100%; margin: auto; margin-bottom:1%;" required>
                            <option selected disabled value="">Please Select Your Department</option>
                            <option>Computing Studies</option>
                        </select>

                        <label for="division" class="form-label">Division</label>
                        <select class="form-control" id="division" name="division" style="width: 100%; margin: auto; margin-bottom:1%;" required>
                            <option selected disabled value="">Please Select Your Division</option>
                            <option>QWERTY</option>
                        </select>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" style="margin-bottom:3%;" required>
                            <label class="form-check-label" for="invalidCheck">
                                Agree to terms and conditions
                            </label>
                        </div>
                        <button type="submit" class="btn btn-info">Submit</button>

                    </form>
                </div>
            </div>
           