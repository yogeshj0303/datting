@extends('frontend.layout.main')
@section('main.container')

    {{-- ===========================================
                    PAGE HEADER
    =========================================== --}}
    <section class="page-header-section style-1 breadcrumb-section">
        <div class="container">
            <div class="page-header-content">
                <div class="page-header-inner">
                    <div class="page-title">
                        <h2>Register</h2>
                    </div>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Register</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
<style>
    img{
  max-width:100px;
}
input[type=file]{
padding:10px;
background:#2d2d2d;
}
</style>
    <div class="container-fluid login-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-9 col-sm-12 mx-auto form-box">
                    <div class="text-center mt-3 section-heading">
                        <h3>OPTIONS</h3>
                    </div>
                    <div class="login-form sign-up-form">
                        <div class="login-head">
                            <h4>Sign Up</h4>
                            <hr class="border-top">
                            <p class="text-muted text-center"> Join for free at <span>Options</span>. Find your perfect Relationship.</p>
                        </div>
                        <form action="signupuser" method="post" enctype="multipart/form-data">
                            @csrf
                            <div id="form1">
                                <div class="login-inputs">
                                    <div class="real-date-section">
                                        <div class="join-radio">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="radio-head">I am</div>
                                                    <div class="radio">
                                                        <label class="mb-0"><input type="radio" name="gender" value="Man" class="mr-2">Man</label>
                                                    </div>
                                                    <div class="radio">
                                                        <label class="mb-0"><input type="radio" name="gender" value="Woman" class="mr-2">Woman</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="radio-head">Looking For</div>
                                                    <div class="radio">
                                                        <label class="mb-0"><input type="radio" name="intrest" value="Man" class="mr-2">Man</label>
                                                    </div>
                                                    <div class="radio">
                                                        <label class="mb-0"><input type="radio" name="intrest" value="Woman" class="mr-2">Woman</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 mt-2">
                                                    <div class="radio-head">I want to meet someone who has</div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="radio">
                                                                <label class="mb-0"><input type="radio" value="Success & Wealth" name="personaliity" value="" class="mr-2">Success & Wealth</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="radio">
                                                                <label class="mb-0"><input type="radio" value="Looks & Charms" name="personaliity" class="mr-2">Looks & Charms</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="login-btn">
                                    <button id="next1">Next</button>
                                </div>
                            </div>
                            <div id="form2">
                                <div class="login-inputs">
                                    <div class="group-input">
                                        <input type="email" name="email" placeholder="E-Mail*" required class="w-100">
                                    </div>
                                    <div class="group-input">
                                        <input type="text" name="dob" placeholder="Birth Date*" onfocus="(this.type='date')" required class="w-100">
                                    </div>
                                    <div class="group-input">
                                        <input type="password" name="password" placeholder="Password*" required class="w-100">
                                    </div>
                                </div>
                                <div class="login-btn d-flex justify-content-between">
                                    <button id="back2">Back</button>
                                    <button id="next2">Next</button>
                                </div>
                            </div>
                            <div id="form3">
                                <div class="login-inputs">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="group-input">
                                                <input type="text" name="username" placeholder="Username*" required class="w-100">
                                            </div>
                                            <div class="group-input">
                                                <input type="text" name="locate" placeholder="City*" required class="w-100">
                                            </div>
                                            <div class="group-input">
                                                <input type="number" name="pincode" placeholder="Pincode*" required class="w-100">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 text-center">
                                            <div class="input-img">
                                                  <img id="blah" src="{{ asset('assets/images/icons/user.png') }}" alt="..." >
                                            <!--<img id="blah" src="http://placehold.it/180" alt="your image" />-->
                                                <label class="file-btn" for="profile-img" style="margin-top:40px; margin-left:-53px;">
                                                    <i class="fa-solid fa-camera-retro"></i>
                                                </label>
                                                <input type='file' onchange="readURL(this);"  name="image" id="profile-img" class="d-none"/>
                                                <!--<input type="file" name="image" id="profile-img" class="d-none">-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="login-btn d-flex justify-content-between">
                                    <button id="back3">Back</button>
                                    <button id="next3">Next</button>
                                </div>
                            </div>
                            <div id="form4">
                                <div class="login-inputs">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="group-dropdown">
                                                <label for="height">Height : </label>
                                                <select name="height" class="flex-fill">
                                                    <option value="">---</option>
                                                    <option value="137cm">137cm</option>
                                                    <option value="137cm">137cm</option>
                                                    <option value="137cm">137cm</option>
                                                    <option value="137cm">137cm</option>
                                                    <option value="137cm">137cm</option>
                                                    <option value="137cm">137cm</option>
                                                </select>
                                            </div>
                                            <div class="group-dropdown">
                                                <label for="body">Body Type : </label>
                                                <select name="bodytype" class="flex-fill" >
                                                    <option value="">---</option>
                                                    <option value="slim">Slim</option>
                                                    <option value="athletic">Athletic</option>
                                                    <option value="average">Average</option>
                                                    <option value="curvy">Curvy</option>
                                                    <option value="overweight">Overweight</option>
                                                </select>
                                            </div>
                                            <div class="group-dropdown">
                                                <label for="ethinicity">Ethnicity : </label>
                                                <select name="ethnicity" class="flex-fill" >
                                                    <option value="">---</option>
                                                    <option value="asian">Asian</option>
                                                    <option value="african">African</option>
                                                    <option value="east-indian">East Indian</option>
                                                    <option value="middle-east">Middle Eastern</option>
                                                    <option value="asian">Asian</option>
                                                    <option value="african">African</option>
                                                    <option value="east-indian">East Indian</option>
                                                    <option value="middle-east">Middle Eastern</option>
                                                </select>
                                            </div>
                                            <div class="group-dropdown">
                                                <label for="education">Education : </label>
                                                <select name="education" class="flex-fill" >
                                                    <option value="">---</option>
                                                    <option value="high-school">High School</option>
                                                    <option value="intermediate">Intermediate</option>
                                                    <option value="bachelors">Bachelor Degree</option>
                                                    <option value="graduate">Graduate Degree</option>
                                                    <option value="phd">PhD</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="group-dropdown">
                                                <label for="relationship">Relationship : </label>
                                                <select name="relationship" class="flex-fill" >
                                                    <option value="">---</option>
                                                    <option value="single">Single</option>
                                                    <option value="married">Married</option>
                                                    <option value="open">Open Relationship</option>
                                                    <option value="divorced">Divorced</option>
                                                    <option value="widowed">Widowed</option>
                                                </select>
                                            </div>
                                            <div class="group-dropdown">
                                                <label for="children">Children : </label>
                                                <select name="children" class="flex-fill" >
                                                    <option value="">---</option>
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>
                                                </select>
                                            </div>
                                            <div class="group-dropdown">
                                                <label for="smoke">Smoke : </label>
                                                <select name="smoke" class="flex-fill" >
                                                    <option value="">---</option>
                                                    <option value="non">Non Smoker</option>
                                                    <option value="light">Light Smoker</option>
                                                    <option value="heavy">Heavy Smoker</option>
                                                </select>
                                            </div>
                                            <div class="group-dropdown">
                                                <label for="drink">Drink : </label>
                                                <select name="drink" class="flex-fill" >
                                                    <option value="">---</option>
                                                    <option value="non">Non Drinker</option>
                                                    <option value="social">Social Drinker</option>
                                                    <option value="heavy">Heavy Drinker</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="login-btn d-flex justify-content-between">
                                    <button id="back4">Back</button>
                                    <button id="next4">Next</button>
                                </div>
                            </div>
                            <div id="form5">
                                <div class="login-inputs">
                                    <div class="group-input">
                                        <textarea name="impression" rows="2" class="w-100" placeholder="For an eye-catching first impression!" required></textarea>
                                    </div>
                                    <div class="group-input">
                                        <textarea name="aboutme" rows="6" class="w-100" placeholder="Tell a bit about yourself" required></textarea>
                                    </div>
                                </div>
                                <div class="login-btn d-flex justify-content-between">
                                    <button id="back5">Back</button>
                                    <button type="submit">Register</button>
                                </div>
                            </div>
                        </form>
                        <div class="price-container">
                            <hr class="border-top">
                            <div class="price-box">
                                <h6>
                                    <i class="fa-solid fa-heart-pulse"></i>
                                    Already a Member?
                                    <a href="loginfront" class="text-danger">Log In</a>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <small class="text-muted">
                        By continuing you agree to Options Terms and Privacy Policy.
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script>
      function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>
@endsection
