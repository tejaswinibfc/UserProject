@extends('layout.main_template')

<div class="main-content app-content mt-0">
  <!-- PAGE-HEADER -->
  <div class="page-header d-flex align-items-center justify-content-between border-bottom mb-4">
    <h1 class="page-title">Profile</h1>
    <div>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
        <li class="breadcrumb-item active" aria-current="page">Profile</li>
      </ol>
    </div>
  </div>
  <!-- CONTAINER -->
  <div class="main-container container-fluid">
    <!-- ROW-1 -->
    <div class="row">
      <div class="col-xxl-3 col-xl-4 col-lg-5 col-md-5">
        <div class="card text-center shadow-none border profile-cover__img">
          <div class="card-body">
            <div class="profile-img-1">
              <img src="build/assets/images/users/18.jpg" alt="img" id="profile-img">
              <a aria-label="anchor" href="#" class="rounded-pill avatar-icons bg-primary tx-fixed-white p-2">
                <input type="file" name="photo" class="position-absolute w-100 h-100 op-0" id="profile-change">
                <i class="fe fe-camera lh-base"></i>
              </a>
            </div>
            <div class="profile-img-content text-dark my-2">
              <div>
                <h5 class="mb-0">{{Auth::user()->name}}</h5>
                <p class="text-muted mb-0">UI Developer</p>
              </div>
            </div>
            <div>
            </div>
          </div>
        </div>

      </div>
      <div class="col-xxl-9 col-xl-8 col-lg-7 col-md-7">
        <div class="card">
          <div class="card-header">
            <ul class="nav nav-pills gap-2" id="pills-tab" role="tablist">
              <li class="nav-item" role="presentation">
                <button type="button" aria-label="anchor" class="nav-link active" id="about-tab" data-bs-toggle="pill" data-bs-target="#about">About</button>
              </li>

              <li class="nav-item" role="presentation">
                <button class="nav-link" id="editprofile-tab" data-bs-toggle="pill" data-bs-target="#editprofile" type="button" role="tab" aria-controls="editprofile" aria-selected="false">Edit Profile</button>
              </li>

            </ul>
          </div>
          <div class="card-body p-0">
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="about">

                <div class="table-responsive p-5">
                  <h5 class="mb-3">Personal Info</h5>
                  <div class="row">
                    <div class="col-xl-8 ms-3">
                      <div class="row row-sm">
                        <div class="col-md-3">
                          <span class="fw-semibold fs-14">First Name : </span>
                        </div>
                        <div class="col-md-9">
                          <span class="fs-15">{{Auth::user()->name}}</span>
                        </div>
                      </div>
                      <div class="row row-sm mt-3">
                        <div class="col-md-3">
                          <span class="fw-semibold fs-14">Last Name : </span>
                        </div>
                        <div class="col-md-9">
                          <span class="fs-15"></span>
                        </div>
                      </div>

                      <div class="row row-sm mt-3">
                        <div class="col-md-3">
                          <span class="fw-semibold fs-14">Email : </span>
                        </div>
                        <div class="col-md-9">
                          <span class="fs-15 ">{{Auth::user()->email}}</span>
                        </div>
                      </div>

                      <div class="row row-sm mt-3">
                        <div class="col-md-3">
                          <span class="fw-semibold fs-14">Address : </span>
                        </div>
                        <div class="col-md-9">
                          <span class="fs-15">San franscisko, UAE</span>
                        </div>
                      </div>
                      <div class="row row-sm mt-3">
                        <div class="col-md-3">
                          <span class="fw-semibold fs-14">Phone : </span>
                        </div>
                        <div class="col-md-9">
                          <span class="fs-15 text-primary">(+65) 7894 5612 3212</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


              </div>

              <div class="tab-pane fade" id="editprofile">
                <div class="row">
                  <div class="col-xl-12">
                    <div class="">
                      <form method="post" action="{{route('updateProfile')}}">
                        @csrf
                        <div class="p-5">
                          <div class="mb-4 main-content-label">Personal Information</div>
                          <div class="form-horizontal">
                            <div class="form-group ">
                              <div class="row">
                                <div class="col-md-2">
                                  <label class="form-label">First Name</label>
                                </div>
                                <div class="col-md-10">
                                  <input type="text" class="form-control" placeholder="First Name" name="firstname" value="{{ Auth::user()->name }}">
                                </div>
                              </div>
                            </div>

                            <div class="form-group ">
                              <div class="row">
                                <div class="col-md-2">
                                  <label class="form-label">Email</label>
                                </div>
                                <div class="col-md-10">
                                  <input type="text" class="form-control" placeholder="" name="email" value="{{ Auth::user()->email }}">
                                </div>
                              </div>
                            </div>

                            <div class="form-group ">
                              <div class="row">
                                <div class="col-md-2">
                                  <label class="form-label">Address</label>
                                </div>
                                <div class="col-md-10">
                                  <input type="text" class="form-control" placeholder="" name="address" value="{{ Auth::user()->address }}">
                                </div>
                              </div>
                            </div>

                            <div class="form-group ">
                              <div class="row">
                                <div class="col-md-2">
                                  <label class="form-label">Phone</label>
                                </div>
                                <div class="col-md-10">
                                  <input type="text" class="form-control" placeholder="" name="phone" value="{{ Auth::user()->mobile }}">
                                </div>
                              </div>
                            </div>


                          </div>
                        </div>
                        <div class="card-footer d-flex justify-content-end">
                          <button type="submit" class="btn ripple btn-primary w-sm">Save</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ROW-1 CLOSED -->

  </div>
  <!-- CONTAINER CLOSED -->


</div>