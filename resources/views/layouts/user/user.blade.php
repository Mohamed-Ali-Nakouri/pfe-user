
                          @extends('layouts.dashboard')
                          @section('content')
                              <div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header card-header-icon card-header-rose">
              <div class="card-icon">
                <i class="material-icons">perm_identity</i>
              </div>
              <h4 class="card-title">Edit Profile - <small class="category">This is your profile</small></h4>

            </div>
            <div class="card-body">

                <form>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label class="bmd-label-floating">ID </label>
                                @auth
                                <input type="text" class="form-control" value="{{ Auth::user()->id }}" disabled>
                                    @else
                                    <input type="text" class="form-control" value="1" disabled>
                                @endauth
                            </div>
                        </div>
                        <div class="col-md-3">


                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="bmd-label-floating">Email address</label>
                                <input type="email" class="form-control" value="{{ Auth::user()->email }}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">Fist Name</label>
                                <input type="text" class="form-control" value="{{ Auth::user()->name }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">Last Name</label>
                                <input type="text" class="form-control"  value="{{ Auth::user()->surname }}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="bmd-label-floating">Adress</label>
                                <input type="text" class="form-control" >
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="bmd-label-floating">City</label>
                                <input type="text" class="form-control" >
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="bmd-label-floating">Country</label>
                                <input type="text" class="form-control" >
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="bmd-label-floating">Postal Code</label>
                                <input type="text" class="form-control" >
                            </div>
                        </div>
                    </div>



                    <button type="submit" class="btn btn-rose pull-right">Update Profile</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card card-profile">
            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                            <div class="fileinput-new thumbnail img-circle">
                                <img class="img" src="images\profile_img\{{Auth::User()->avatar}}" />
                            </div>
                            <div class="fileinput-preview fileinput-exists thumbnail img-circle"></div>
                            <div>
                                <form method="POST" action="/">
                                <span class="btn btn-round btn-rose btn-file">
                                    <span class="fileinput-new">Update Photo</span>
                                    <span class="fileinput-exists"></span>
                                    <input type="file" name="avatar" /></span>
                                    <span class="fileinput-new"> <input type="file" name="avatar" /></span>
                                <br />
                                <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                </form>
                            </div>
                        </div>

            <div class="card-body">
                <h6 class="card-category text-gray">Student</h6>
                @auth
                <h4 class="card-title"> {{ Auth::user()->surname }}&nbsp{{ Auth::user()->name }}</h4>
                @else
                    <h4 class="card-title"> Khaireddine Sarraj</h4>
                @endauth
                <p class="card-description">
                    Don't be scared of the truth because we need to restart the human foundation in truth
                </p>

            </div>
        </div>
    </div>
</div>





 @endsection
