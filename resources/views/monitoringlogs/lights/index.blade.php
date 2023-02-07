@extends('layouts.app')

@section('title')
    MMS
@endsection

@section('content')
    <section class="section">
    <div class="section-header">
            <h3 class="page__heading">Lights</h3>
            {{-- <div class="section-header-breadcrumb">
            <nav aria-label="breadcrumb">
              @include('layouts.breadcrum')
            </nav> --}}
            <!-- <button type="button" class="btn btn-primary" id="generateReport" >Generate Report <i class="far fa-file-invoice"></i></button> -->
            {{-- </div> --}}
        </div>
        <div class="section-body">
        <div class="col">
          <div class="col-12 col-md-12">
              <div class="card">
                  <div class="card-header">
                      <h4>Light Sensor</h4>
                  </div>
                  <div class="card-body">
                      <canvas style="width: 1002px; height: 180px;" id="lightChart"></canvas>
                      <center id="lightstat"></center>
                      <center style="margin-top:10px;">
                          <div class="badge badge-warning" id="warning"></div>
                          <div class="badge badge-success" id="success"></div>
                          <div style="margin-top:5px;" class="badge badge-danger" id="danger"></div>
                      </center>
                  </div>
              </div>
          </div>
        </div>
        <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Lights Sensor Data</h4>
                    <div class="card-header-form">
                    <!-- <div class="card-header-form"> -->
                    <form>
                        <div class="input-group">
                        <input type="text" class="form-control" id="searchData" placeholder="Search by Lights">
                          <div class="input-group-btn">
                            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Light Amount</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                </tr>
                            </thead>
                            <tbody id="table-main"></tbody>
                        </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </section>
@endsection

@section('javascript')
<script type="module" src="{{ asset('js/light/light.js') }}"></script>
@endsection