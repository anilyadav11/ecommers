@extends('user.app')
@section('content')
<div class="container-fluid">
    <div class="row mb-5">
        <div class="col-lg-10 col-md-8 ml-auto">
            <div class="row align-items-center">
                <!-- First Table -->
                <div class="col-12 col-xl-12 mb-4 mb-xl-0">


                    <!-- Profile 1 - Bootstrap Brain Component -->
                    <section class="bg-light py-3 py-md-5 py-xl-8">
                        <div class="container">
                            <div class="row justify-content-md-center">
                                <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
                                    <h2 class="mb-4 display-5 text-center">User Profile</h2>

                                    <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
                                </div>
                            </div>
                        </div>

                        <div class="container">
                            <div class="row gy-4 gy-lg-0">
                                <div class="col-12 col-lg-4 col-xl-3">
                                    <div class="row gy-4">
                                        <div class="col-12">
                                            <div class="card widget-card border-light shadow-sm">
                                                <div class="card-header text-bg-primary">Welcome, {{$user->name}}</div>
                                                <div class="card-body">
                                                    <div class="text-center mb-3">
                                                        <img src="./assets/img/profile-img-1.jpg" class="img-fluid rounded-circle" alt="Luna John">
                                                    </div>
                                                    <h5 class="text-center mb-1"> {{$user->name}}</h5>
                                                    <!-- 
                                                    <ul class="list-group list-group-flush mb-4">
                                                        
                                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                                            <h6 class="m-0">Friends</h6>
                                                            <span>4,620</span>
                                                        </li>
                                                    </ul> -->
                                                    <div class="d-grid m-0">
                                                        <button class="btn btn-outline-primary" type="button">Follow</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="card widget-card border-light shadow-sm">
                                                <div class="card-header text-bg-primary">Social Accounts</div>
                                                <div class="card-body">
                                                    <a href="#!" class="d-inline-block bg-dark link-light lh-1 p-2 rounded">
                                                        <i class="bi bi-youtube"></i>
                                                    </a>
                                                    <a href="#!" class="d-inline-block bg-dark link-light lh-1 p-2 rounded">
                                                        <i class="bi bi-twitter-x"></i>
                                                    </a>
                                                    <a href="#!" class="d-inline-block bg-dark link-light lh-1 p-2 rounded">
                                                        <i class="bi bi-facebook"></i>
                                                    </a>
                                                    <a href="#!" class="d-inline-block bg-dark link-light lh-1 p-2 rounded">
                                                        <i class="bi bi-linkedin"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <div class="col-12 col-lg-8 col-xl-9">
                                    <div class="card widget-card border-light shadow-sm">
                                        <div class="card-body p-4">
                                            <ul class="nav nav-tabs" id="profileTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link active" id="overview-tab" data-bs-toggle="tab" data-bs-target="#overview-tab-pane" type="button" role="tab" aria-controls="overview-tab-pane" aria-selected="true">Overview</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Profile</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="email-tab" data-bs-toggle="tab" data-bs-target="#email-tab-pane" type="button" role="tab" aria-controls="email-tab-pane" aria-selected="false">Emails</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="password-tab" data-bs-toggle="tab" data-bs-target="#password-tab-pane" type="button" role="tab" aria-controls="password-tab-pane" aria-selected="false">Password</button>
                                                </li>
                                            </ul>
                                            <div class="tab-content pt-4" id="profileTabContent">
                                                <div class="tab-pane fade show active" id="overview-tab-pane" role="tabpanel" aria-labelledby="overview-tab" tabindex="0">

                                                    <h5 class="mb-3">Profile</h5>
                                                    <div class="row g-0">
                                                        <div class="col-5 col-md-3 bg-light border-bottom border-white border-3">
                                                            <div class="p-2">First Name</div>
                                                        </div>
                                                        <div class="col-7 col-md-9 bg-light border-start border-bottom border-white border-3">
                                                            <div class="p-2">{{$user->name}}</div>
                                                        </div>


                                                        <div class="col-5 col-md-3 bg-light border-bottom border-white border-3">
                                                            <div class="p-2">Address</div>
                                                        </div>
                                                        <div class="col-7 col-md-9 bg-light border-start border-bottom border-white border-3">
                                                            <div class="p-2">{{$user->address}}</div>
                                                        </div>
                                                        <div class="col-5 col-md-3 bg-light border-bottom border-white border-3">
                                                            <div class="p-2">Country</div>
                                                        </div>
                                                        <div class="col-7 col-md-9 bg-light border-start border-bottom border-white border-3">
                                                            <div class="p-2">{{$user->country}}</div>
                                                        </div>


                                                        <div class="col-5 col-md-3 bg-light border-bottom border-white border-3">
                                                            <div class="p-2">Phone</div>
                                                        </div>
                                                        <div class="col-7 col-md-9 bg-light border-start border-bottom border-white border-3">
                                                            <div class="p-2">+91 {{$user->phone}}</div>
                                                        </div>
                                                        <div class="col-5 col-md-3 bg-light border-bottom border-white border-3">
                                                            <div class="p-2">Email</div>
                                                        </div>
                                                        <div class="col-7 col-md-9 bg-light border-start border-bottom border-white border-3">
                                                            <div class="p-2"> {{$user->email}}</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                                                    <form action="#!" class="row gy-3 gy-xxl-4">
                                                        <div class="col-12">
                                                            <div class="row gy-2">
                                                                <label class="col-12 form-label m-0">Profile Image</label>
                                                                <div class="col-12">
                                                                    <img src="./assets/img/profile-img-1.jpg" class="img-fluid" alt="Luna John">
                                                                </div>
                                                                <div class="col-12">
                                                                    <a href="#!" class="d-inline-block bg-primary link-light lh-1 p-2 rounded">
                                                                        <i class="bi bi-upload"></i>
                                                                    </a>
                                                                    <a href="#!" class="d-inline-block bg-danger link-light lh-1 p-2 rounded">
                                                                        <i class="bi bi-trash"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <label for="inputFirstName" class="form-label">First Name</label>
                                                            <input type="text" class="form-control" id="inputFirstName" value="Ethan">
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <label for="inputLastName" class="form-label">Last Name</label>
                                                            <input type="text" class="form-control" id="inputLastName" value="Leo">
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <label for="inputEducation" class="form-label">Education</label>
                                                            <input type="text" class="form-control" id="inputEducation" value="M.S Computer Science">
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <label for="inputSkills" class="form-label">Skills</label>
                                                            <input type="text" class="form-control" id="inputSkills" value="HTML, SCSS, Javascript, React, Vue, Angular, UI, UX">
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <label for="inputJob" class="form-label">Job</label>
                                                            <input type="text" class="form-control" id="inputJob" value="Project Manager">
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <label for="inputCompany" class="form-label">Company</label>
                                                            <input type="text" class="form-control" id="inputCompany" value="GitHub Inc">
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <label for="inputPhone" class="form-label">Phone</label>
                                                            <input type="tel" class="form-control" id="inputPhone" value="+12486798745">
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <label for="inputEmail" class="form-label">Email</label>
                                                            <input type="email" class="form-control" id="inputEmail" value="leo@example.com">
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <label for="inputAddress" class="form-label">Address</label>
                                                            <input type="text" class="form-control" id="inputAddress" value="Mountain View, California">
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <label for="inputCountry" class="form-label">Country</label>
                                                            <select class="form-select" id="inputCountry">
                                                                <option value="Afghanistan">Afghanistan</option>
                                                                <option value="Åland Islands">Åland Islands</option>


                                                                <option value="Zimbabwe">Zimbabwe</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <label for="inputYouTube" class="form-label">YouTube</label>
                                                            <input type="text" class="form-control" id="inputYouTube" value="https://www.youtube.com/EthanLeo">
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <label for="inputX" class="form-label">X</label>
                                                            <input type="text" class="form-control" id="inputX" value="https://twitter.com/EthanLeo">
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <label for="inputFacebook" class="form-label">Facebook</label>
                                                            <input type="text" class="form-control" id="inputFacebook" value="https://www.facebook.com/EthanLeo">
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <label for="inputLinkedIn" class="form-label">LinkedIn</label>
                                                            <input type="text" class="form-control" id="inputLinkedIn" value="https://www.linkedin.com/EthanLeo">
                                                        </div>
                                                        <div class="col-12">
                                                            <label for="inputAbout" class="form-label">About</label>
                                                            <textarea class="form-control" id="inputAbout">Ethan Leo is a seasoned and results-driven Project Manager who brings experience and expertise to project management. With a proven track record of successfully delivering complex projects on time and within budget, Ethan Leo is the go-to professional for organizations seeking efficient and effective project leadership.</textarea>
                                                        </div>
                                                        <div class="col-12">
                                                            <button type="submit" class="btn btn-primary">Save Changes</button>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="tab-pane fade" id="email-tab-pane" role="tabpanel" aria-labelledby="email-tab" tabindex="0">
                                                    <form action="#!">
                                                        <fieldset class="row gy-3 gy-md-0">
                                                            <legend class="col-form-label col-12 col-md-3 col-xl-2">Email Alerts</legend>
                                                            <div class="col-12 col-md-9 col-xl-10">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" id="emailChange">
                                                                    <label class="form-check-label" for="emailChange">
                                                                        Email Changed
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" id="passwordChange">
                                                                    <label class="form-check-label" for="passwordChange">
                                                                        Password Changed
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" id="weeklyNewsletter">
                                                                    <label class="form-check-label" for="weeklyNewsletter">
                                                                        Weekly Newsletter
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" id="productPromotions">
                                                                    <label class="form-check-label" for="productPromotions">
                                                                        Product Promotions
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <button type="submit" class="btn btn-primary mt-4">Save Changes</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="tab-pane fade" id="password-tab-pane" role="tabpanel" aria-labelledby="password-tab" tabindex="0">
                                                    <form action="#!">
                                                        <div class="row gy-3 gy-xxl-4">
                                                            <div class="col-12">
                                                                <label for="currentPassword" class="form-label">Current Password</label>
                                                                <input type="password" class="form-control" id="currentPassword">
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="newPassword" class="form-label">New Password</label>
                                                                <input type="password" class="form-control" id="newPassword">
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="confirmPassword" class="form-label">Confirm Password</label>
                                                                <input type="password" class="form-control" id="confirmPassword">
                                                            </div>
                                                            <div class="col-12">
                                                                <button type="submit" class="btn btn-primary">Change Password</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </section>

                </div>
                <!-- Second Table -->

            </div>
        </div>
    </div>
</div>
@endsection