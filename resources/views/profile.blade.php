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
            <form method="post" enctype="multipart/form-data" id="profile">
              @csrf
              <div class="profile-img-1">
                <img src="{{url('profileimage/'.Auth::user()->image)}}" alt="img" id="profile-img" style="max-width: 200px; max-height: 200px;">
                <a aria-label="anchor" href="#" class="rounded-pill avatar-icons bg-primary tx-fixed-white p-2">
                  <input type="file" onchange="SelectImage(this)" name="image" class="position-absolute w-100 h-100 op-0" id="profile-change">
                  <i class="fe fe-camera lh-base"></i>
                </a>
              </div>
            </form>


            <div class="profile-img-content text-dark my-2">
              <div>
                <h5 class="mb-0">{{Auth::user()->name}}</h5>
                <p class="text-muted mb-0"></p>
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

              <li class="nav-item" role="presentation">
                <button class="nav-link" id="changepassword-tab" data-bs-toggle="pill" data-bs-target="#changepassword" type="button" role="tab" aria-controls="changepassword" aria-selected="false">Change Password</button>
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
                          <span class="fs-15">{{Auth::user()->address}}</span>
                        </div>
                      </div>
                      <div class="row row-sm mt-3">
                        <div class="col-md-3">
                          <span class="fw-semibold fs-14">Phone : </span>
                        </div>
                        <div class="col-md-9">
                          <span class="fs-15 text-primary">{{Auth::user()->mobile}}</span>
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
                      <form method="post" action="{{route('updateProfile')}}" id="form1">
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
                                  <input type="text" class="form-control" name="name" value="{{ Auth::user()->name }}">
                                  @if ($errors->has('name'))
                                  <span class="text-danger">{{ $errors->first('name') }}</span>
                                  @endif
                                </div>

                              </div>
                            </div>

                            <div class="form-group ">
                              <div class="row">
                                <div class="col-md-2">
                                  <label class="form-label">Email</label>
                                </div>
                                <div class="col-md-10">
                                  <input type="email" class="form-control" name="email" value="{{ Auth::user()->email }}">
                                  @if ($errors->has('email'))
                                  <span class="text-danger">{{ $errors->first('email') }}</span>
                                  @endif
                                </div>
                              </div>
                            </div>

                            <div class="form-group ">
                              <div class="row">
                                <div class="col-md-2">
                                  <label class="form-label">Address</label>
                                </div>
                                <div class="col-md-10">
                                  <input type="text" class="form-control" name="address" value="{{ Auth::user()->address }}">
                                  @if ($errors->has('address'))
                                  <span class="text-danger">{{ $errors->first('address') }}</span>
                                  @endif
                                </div>
                              </div>
                            </div>

                            <div class="form-group ">
                              <div class="row">
                                <div class="col-md-2">
                                  <label class="form-label">Phone</label>
                                </div>
                                <div class="col-md-10">
                                  <input type="text" class="form-control" name="phone" value="{{ Auth::user()->mobile }}">
                                  @if ($errors->has('mobile'))
                                  <span class="text-danger">{{ $errors->first('mobile') }}</span>
                                  @endif
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

              <div class="tab-pane fade" id="changepassword">
                <div class="row">
                  <div class="col-xl-12">
                    <div class="">
                      <form method="post" action="{{route('updatePassword')}}" id="form2">
                        @csrf
                        <div class="p-5">
                          <div class="mb-4 main-content-label">Change Password</div>
                          <div class="form-horizontal">
                            <div class="form-group ">
                              <div class="row">
                                <div class="col-md-2">
                                  <label class="form-label">Old Password</label>
                                </div>
                                <div class="col-md-10">
                                  <input type="text" class="form-control" name="old_password" value="">
                                  @if ($errors->has('old_password'))
                                  <span class="text-danger">{{ $errors->first('old_password') }}</span>
                                  @endif
                                </div>

                              </div>
                            </div>

                            <div class="form-group ">
                              <div class="row">
                                <div class="col-md-2">
                                  <label class="form-label">New Password</label>
                                </div>
                                <div class="col-md-10">
                                  <input type="password" class="form-control" name="new_password" value="">
                                  @if ($errors->has('new_password'))
                                  <span class="text-danger">{{ $errors->first('new_password') }}</span>
                                  @endif
                                </div>
                              </div>
                            </div>

                            <div class="form-group ">
                              <div class="row">
                                <div class="col-md-2">
                                  <label class="form-label">Confirm New Password</label>
                                </div>
                                <div class="col-md-10">
                                  <input type="password" class="form-control" name="confirm_password" value="">
                                  @if ($errors->has('confirm_password'))
                                  <span class="text-danger">{{ $errors->first('confirm_password') }}</span>
                                  @endif
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
@section("externaljs")
<style>
  .error {
    color: red;
  }
</style>
<script>
  $(document).ready(function($) {

    $("#form1").validate({
      rules: {
        name: "required",
        email: "required",
        address: "required",
        phone: {
          required: true,
          number: true,
          maxlength: 10,
          minlength: 10
        }
      },
      messages: {
        name: "Please enter name",
        email: "Please enter email",
        address: "Please enter address",
        phone: {
          required: "Please enter phone",
          number: "Please enter valid mobile number",
          maxlength: "Mobile number must be 10 digits",
          minlength: "Mobile number should not be less than  10 digits"
        }
      },
      errorPlacement: function(error, element) {
        if (element.is(":radio")) {
          error.appendTo(element.parents('.form-group'));
        } else { // This is the default behavior 
          error.insertAfter(element);
        }
      },
      submitHandler: function(form) {
        form.submit();
      }

    });
  });

  $('input').keypress(function(e) {
    if (this.value.length === 0 && e.which === 32) e.preventDefault();
  });

  $(document).ready(function($) {

    $("#form2").validate({
      rules: {
        old_password: "required",
        new_password: "required",
        confirm_password: "required",
      },
      messages: {
        old_password: "Please enter old password",
        new_password: "Please enter new password",
        confirm_password: "Please enter confirm password",

      },
      errorPlacement: function(error, element) {
        if (element.is(":radio")) {
          error.appendTo(element.parents('.form-group'));
        } else { // This is the default behavior 
          error.insertAfter(element);
        }
      },
      submitHandler: function(form) {
        form.submit();
      }

    });
  });
</script>

<script>
  function SelectImage(input) {
    readURL(input);
    uploadImage();
  }

  function readURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('#profile-img').attr('src', e.target.result);
      };
      reader.readAsDataURL(input.files[0]);
    }
  }

  function uploadImage() {
    var myForm = document.getElementById('profile');
    var formData = new FormData(myForm);
    console.log("form", formData);
    $.ajax({
      type: 'POST',
      data: formData,
      dataType: 'JSON',
      contentType: false,
      cache: false,
      processData: false,
      url: '{{route("updateImage")}}',
      success: function(res) {
        if (res) {
          $('#profile-img').attr('src', res.image_path);
          toastr.success(res.message);
        }
      }
    });
  }
</script>
@endsection