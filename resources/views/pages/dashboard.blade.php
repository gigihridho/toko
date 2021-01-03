@extends('layouts.dashboard')

@section('title')
    Store Dashboard
@endsection

@section('content')
<div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Dashboard</h2>
            <p class="dashboard-subtitle">Look what you have made today!</p>
        </div>
        <div class="dashboard-content">
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-2">
                        <div class="card-body">
                            <div class="dashboard-card-title">
                                Customer
                            </div>
                            <div class="dashboard-card-subtitle">
                                $99.000
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                  <div class="card mb-2">
                      <div class="card-body">
                          <div class="dashboard-card-title">
                              Revenue
                          </div>
                          <div class="dashboard-card-subtitle">
                              $80.000
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="card mb-2">
                      <div class="card-body">
                          <div class="dashboard-card-title">
                              Transaction
                          </div>
                          <div class="dashboard-card-subtitle">
                              $1.999.000
                          </div>
                      </div>
                  </div>
              </div>
            </div>
            <div class="row mt-3">
                <div class="col-12 mt-2">
                    <h5 class="mb-3">Recent Transactions</h5>
                    <a href="/dashboard-transaction.details.html" class="card card-list d-block">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-1">
                                    <img src="/images/dashboard/product-detail-1.png" alt="">
                                </div>
                                <div class="col-md-4">
                                    Zhupa zhup
                                </div>
                                <div class="col-md-3">
                                    Agung Hapsah
                                </div>
                                <div class="col-md-3">
                                    31 January 2020
                                </div>
                                <div class="col-md-1 d-none d-md-block">
                                    <img src="/images/dashboard/arrow-expand.svg" alt="">
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="/dashboard-transaction.details.html" class="card card-list d-block">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-1">
                                    <img src="/images/dashboard/product-detail-2.png" alt="">
                                </div>
                                <div class="col-md-4">
                                    Sofa Lembut
                                </div>
                                <div class="col-md-3">
                                    Aulion
                                </div>
                                <div class="col-md-3">
                                    29 January 2020
                                </div>
                                <div class="col-md-1 d-none d-md-block">
                                    <img src="/images/dashboard/arrow-expand.svg" alt="">
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="/dashboard-transaction.details.html" class="card card-list d-block">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-1">
                                    <img src="/images/dashboard/product-detail-3.png" alt="">
                                </div>
                                <div class="col-md-4">
                                    Le Brone X
                                </div>
                                <div class="col-md-3">
                                    Shani
                                </div>
                                <div class="col-md-3">
                                    28 January 2020
                                </div>
                                <div class="col-md-1 d-none d-md-block">
                                    <img src="/images/dashboard/arrow-expand.svg" alt="">
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
