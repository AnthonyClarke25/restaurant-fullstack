@extends('layouts.app')

@section('content')
    <div id="offers-page">
        <div class="content-box">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h1>Sign Up To Notifications For Deals</h1>
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for=firstnamenameinput">First Name</label>
                                    <input type="text" class="form-control" name="fname" id="firstnameinput"
                                        placeholder="John">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="lastnameinput">Last Name</label>
                                    <input type="text" class="form-control" name="lname" id="lastnameinput"
                                        placeholder="Doe">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="emailinput">Email address</label>
                                    <input type="email" class="form-control" name="email" id="emailinput"
                                        placeholder="name@example.com">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phoneinput">Phone #</label>
                                    <input type="text" class="form-control" name="phone" id="phoneinput"
                                        placeholder="012-345-789">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <P> In signing up I acknowledge that i am 18 years of age or older, want to recieve offers from BIllys Burgers and, if i select to join Dine Rewards, agree to the terms and conditions of the program.
                                    </P>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Confirm</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
