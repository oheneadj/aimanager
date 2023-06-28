


        {{-- <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div> --}}



<div class="card mb-8">
    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>
    <h5 class="card-header">Profile Details</h5>
    <!-- Account -->
    <div class="card-body">
      <div class="d-flex align-items-start align-items-sm-center gap-4">
        <img
          src="../assets/img/avatars/1.png"
          alt="user-avatar"
          class="d-block rounded"
          height="100"
          width="100"
          id="uploadedAvatar"
        />
        <div class="button-wrapper">
          <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
            <span class="d-none d-sm-block">Upload new photo</span>
            <i class="bx bx-upload d-block d-sm-none"></i>
            <input
              type="file"
              id="upload"
              class="account-file-input"
              hidden
              accept="image/png, image/jpeg"
            />
          </label>
          <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
            <i class="bx bx-reset d-block d-sm-none"></i>
            <span class="d-none d-sm-block">Reset</span>
          </button>

          <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
        </div>
      </div>
    </div>
    <hr class="my-0" />
    <div class="card-body">
        <form  id="formAccountSettings" method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
            @csrf
            @method('patch')
        <div class="row">
          <div class="mb-3 col-md-12">
            <label for="name" class="form-label">Full Name</label>
            <input
              class="form-control"
              type="text"
              id="name"
              name="name"
              value="{{old('name', $user->name)}}"
              autofocus
              autocomplete="name"
            />
          </div>
          @error('name')
            <small class="mt-2 text-danger">{{$message}}</small>
          @enderror
          
          <div class="mb-3 col-md-12">
            <label for="email" class="form-label">E-mail</label>
            <input
              class="form-control"
              type="text"
              id="email"
              name="email"
              value="{{old('email', $user->email)}}"
              placeholder="john.doe@example.com"
            />
          </div>
          @error('email')
            <small class="mt-2 text-danger">{{$message}}</small>
          @enderror
         
         
          
          {{-- <div class="mb-3 col-md-6">
            <label class="form-label" for="country">Country</label>
            <select id="country" class="select2 form-select">
              <option value="">Select</option>
              <option value="Australia">Australia</option>
              <option value="Bangladesh">Bangladesh</option>
              <option value="Belarus">Belarus</option>
              <option value="Brazil">Brazil</option>
              <option value="Canada">Canada</option>
              <option value="China">China</option>
              <option value="France">France</option>
              <option value="Germany">Germany</option>
              <option value="India">India</option>
              <option value="Indonesia">Indonesia</option>
              <option value="Israel">Israel</option>
              <option value="Italy">Italy</option>
              <option value="Japan">Japan</option>
              <option value="Korea">Korea, Republic of</option>
              <option value="Mexico">Mexico</option>
              <option value="Philippines">Philippines</option>
              <option value="Russia">Russian Federation</option>
              <option value="South Africa">South Africa</option>
              <option value="Thailand">Thailand</option>
              <option value="Turkey">Turkey</option>
              <option value="Ukraine">Ukraine</option>
              <option value="United Arab Emirates">United Arab Emirates</option>
              <option value="United Kingdom">United Kingdom</option>
              <option value="United States">United States</option>
            </select>
          </div> --}}
          @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
          <div>
              <p class="text-sm mt-2 text-muted">
                  {{ __('Your email address is unverified.') }}

                  <button form="send-verification" class="btn btn-info me-2">
                      {{ __('Click here to re-send the verification email.') }}
                  </button>
              </p>

              @if (session('status') === 'verification-link-sent')
                  <p class="mt-2 font-medium text-sm text-success">
                      {{ __('A new verification link has been sent to your email address.') }}
                  </p>
              @endif
          </div>
      @endif
        <div class="mt-2">
          <button type="submit" class="btn btn-primary me-2">Save changes</button>
          <button type="reset" class="btn btn-outline-secondary">Cancel</button>
        </div>
      </form>
    </div>

    <!-- /Account -->
  </div>
 
