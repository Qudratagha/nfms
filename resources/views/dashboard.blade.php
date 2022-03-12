@extends('layouts.app')

@section(('main-content'))
    <div class="container content-area">
        <div class="side-app">

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="mb-0 card-title">Default Form Input Fields</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="input" placeholder="Enter Your Name" value="Enter Your Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="example-disabled-input" placeholder="Read Only Text area." value="Read Only Text area. " readonly="">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="example-disabled-input" placeholder="Disabled text area.." value="" disabled="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group has-success">
                                        <input type="text" class="form-control is-valid state-valid" name="example-text-input-valid" placeholder="Valid Email..">
                                    </div>
                                    <div class="form-group  has-danger">
                                        <input type="text" class="form-control is-invalid state-invalid" name="example-text-input-invalid" placeholder="Invalid feedback">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="example-password-input" placeholder="Password..">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Write a large text here ..."></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
