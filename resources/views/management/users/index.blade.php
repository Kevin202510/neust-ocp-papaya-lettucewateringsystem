@extends('layouts.app')

@section('title')
    MMS
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Users</h3>
            {{-- <div class="section-header-breadcrumb">
            <nav aria-label="breadcrumb">
              @include('layouts.breadcrum')
            </nav> --}}
            <!-- <button type="button" class="btn btn-primary" id="generateReport" >Generate Report <i class="far fa-file-invoice"></i></button> -->
            {{-- </div> --}}
        </div>
        <div class="section-body">
          <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>List of Users</h4>
                    <div class="card-header-form">
                    <div class="text-right" style="margin-bottom:15px;">
                          <a href="{{ route('Users') }}" class="btn btn-primary"><i class="fas fa-download"></i></a>
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#uploadUsersDataModal"><i class="fas fa-upload"></i></button>
                          <a href="javascript:void(0)" class="btn btn-success my-2 my-sm-0" id="btn-new"><span class="fa fa-plus"></span></a>
                      </div>
                     <form>
                        <div class="input-group">
                          <input type="text" class="form-control" id="searchData" placeholder="Search by Fullname">
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
                                    <th>ID</th>
                                    <th>Role</th>
                                    <th>Fullname</th>
                                    <th>Address</th>
                                    <th>Status</th>
                                    <th>Email</th>
                                    <th>Action</th>
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
@include('management/users/modal')
@include('management/users/uploadUsersData')
@endsection

@section('javascript')
<script type="module" src="{{ asset('js/users/index.js') }}"></script>
<script type="module" src="{{ asset('js/users/pending.js') }}"></script>
@endsection

