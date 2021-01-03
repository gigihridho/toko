@extends('layouts.dashboard')

@section('title')
    Store Account
@endsection

@section('content')
<div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">My Account</h2>
            <p class="dashboard-subtitle">Update your current profile</p>
        </div>
        <div class="dashboard-content">
            <div class="row">
                <div class="col-12">
                    <form action="">
                        <div class="card">
                            <div class="card-body">
                              <div class="row" data-aos="fade-up" data-aos-delay="200">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="name">Your Name</label>
                                    <input type="text" class="form-control" id="name" name="name" value="Gigih Ridho">
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="email">Your Email</label>
                                    <input type="text" class="form-control" id="email" name="email" value="gigih@gmail.com">
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="addressOne">Address 1</label>
                                    <input type="text" class="form-control" id="addressOne" name="addressOne" value="Cemara Dua">
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="addressTwo">Address 2</label>
                                    <input type="text" class="form-control" id="addressTwo" name="addressTwo" value="Blok B2 No.99">
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="form-group">
                                    <label for="province">Province</label>
                                    <select name="province" id="province" class="form-control">
                                      <option value="Central Java">Central Java</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="form-group">
                                    <label for="city">City</label>
                                    <select name="city" id="city" class="form-control">
                                      <option value="Solo">Solo</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="form-group">
                                    <label for="postalCode">Postal Code</label>
                                    <input type="text" class="form-control" id="postalCode" name="postalCode" value="57554">
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="country">Country</label>
                                    <input type="text" class="form-control" id="country" name="country" value="Indonesia">
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="mobile">Mobile</label>
                                    <input type="text" class="form-control" id="mobile" name="mobile" value="0821414214">
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col text-right">
                                  <button type="submit" class="btn btn-success px-5">
                                    Save Now
                                  </button>
                                </div>
                              </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
