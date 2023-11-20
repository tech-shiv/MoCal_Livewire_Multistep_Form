<section class="signin-bg">
    <div class="d-flex align-items-center justify-content-between h-100 flex-wrap">
        <div class="mocal-animation">
            <h1 class="TextWhite">
                <span class="OpacityFifty">Kickstart Your</span><br />
                Time Management Regime With <span class="TextYellow">MoCal</span>
            </h1>
            <h6 class="TextWhite">
                Risk-Free 30-Day Trial <br />
                <span class="OpacityFifty">No Credit Card Details Required</span>
            </h6>
            <dotlottie-player src="https://lottie.host/881e64b8-e799-49f1-a3be-6d247d51fbbd/goJ2dFDvzS.json"
                background="transparent" speed="1" loop autoplay></dotlottie-player>
        </div>
        <div class="signin-card">
            <form id="myForm" class="form">
                <div id="step-1" class="clientFrom step p-0" data-id="1">
                    <div class="text-center pt-5">
                        <img src="assets/images/register-assets/mocal-logo.svg" />
                    </div>
                    @if ($currentStep == 1)
                        <div class="modal-px-60 pt-5">
                            <input type="email" wire:model="email" name="email" placeholder="Enter Email Address"
                                class="input-style input-font-bold" />
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <div class="d-flex mt-4">
                                <div class="ui fluid search selection dropdown input-font-bold" id="country">
                                    <input type="hidden" name="country_s" wire:model="country_s" id="country_s" />
                                    <i class="dropdown icon"></i>
                                    <div class="default text">Select Country</div>
                                    <div class="menu">
                                        @foreach ($countries as $country)
                                            <div class="item" data-value="{{ $country['code'] }}">
                                                <i class="{{ $country['flag-class'] }}"></i>{{ $country['name'] }}
                                            </div>
                                        @endforeach
                                    </div>
                                    @error('country_s')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                </div>

                                <input type="tel" placeholder="Enter Phone Number" wire:model="phone"
                                    class="input-style input-font-bold ps-3" name="phone" />
                                @error('phone')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="text-center">
                                <button type="button" class="btn-purple-fill btn-width-sm mt-5 nextScreen next"
                                    wire:click="stepOne()">
                                    Get Started
                                </button>
                                <div class="or"></div>
                                <a href="register-google.html" class="btn-gray-border signupbtn mb-3">
                                    <img src="assets/images/register-assets/ic-google.svg" /> Sign Up
                                    with Google </a><br />

                                <a href="#.html" class="btn-gray-border signupbtn mb-3">
                                    <img src="assets/images/register-assets/ic-microsoft.svg" /> Sign
                                    Up with Microsoft </a><br />

                                <p class="mt-4 mb-5">
                                    Already have an account?
                                    <a href="#" class="anchor-blue text-decoration">Log in</a>
                                </p>
                            </div>
                        </div>
                    @elseif ($currentStep == 2)
                        <div class="modal-body pt-4 modal-px-60">
                            <div class="mb-4">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-check d-inline-block me-3 ps-0 ms-0">
                                            <label for="individual">Company Details</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-5">
                                <textarea id="editor" wire:model="company_details" name="company_details"> </textarea>
                            </div>
                            @error('company_details')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="text-center mt-5 pt-5 mb-5">
                            <button type="button" class="btn btn-white-fill prevScreen prev" wire:click="prevStep()">
                                < Back </button>
                                    <button type="button" class="btn btn-purple-fill nextScreen next"
                                        wire:click="stepTwo()">
                                        Next
                                    </button>
                        </div>
                    @elseif ($currentStep == 3)
                        <div class="modal-body pt-5 modal-px-60">
                            <div class="mb-4">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="inputfiles">
                                            <div class="fileUploadWrap">
                                                <div>
                                                    <img src="assets/images/register-assets/upload-files.png"
                                                        alt="" class="DropIcon" />
                                                    <input type="file" name="profile_picture"
                                                        wire:model="profile_picture" accept="image" />
                                                </div>
                                                <div class="parawrap">
                                                    <p class="fileNames">
                                                        File Chosen : No File Chosen
                                                    </p>
                                                    <p class="fileName">Profile Picture</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mb-5">
                            <button type="button" class="btn btn-white-fill prevScreen prev" wire:click="prevStep()">
                                < Back </button>
                                    <button type="button" class="btn btn-purple-fill nextScreen next"
                                        wire:click="summary()">
                                        Sign Up
                                    </button>
                        </div>
                    @else
                        <div class="modal-body pt-5 modal-px-60">
                            <div class="mb-4">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h2>Summary of Your Information</h2>
                                        <div class="summary-details">
                                            {{-- image --}}
                                            <div class="summary-image">
                                                <img src="{{ $profile_picture }}" alt="" />
                                            </div>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">Email</th>
                                                        <td>{{ $email }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Country</th>
                                                        <td>{{ $country_s }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Phone Number</th>
                                                        <td>{{ $phone }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Company Details</th>
                                                        <td>{{ $company_details }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mb-5">
                            <button type="button" class="btn btn-white-fill prevScreen prev"
                                wire:click="prevStep()">
                                < Back </button>
                                    <button type="button" class="btn btn-purple-fill nextScreen next"
                                        wire:click="signUp()">
                                        Submit
                                    </button>
                        </div>
                    @endif
                </div>
            </form>
        </div>

        <div class="signin-circle-animation">
            <img src="assets/images/register-assets/clock-animation.gif" />
            <h3>We'll help you find the perfect time with your clients. Please enter your details to start with and
                we'll fit you right in.</h3>
        </div>
    </div>
</section>
