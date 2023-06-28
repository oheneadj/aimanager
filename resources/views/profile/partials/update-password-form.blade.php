

        {{-- <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif --}}
       

<div class="card mb-4">
    <h5 class="card-header">Update Password</h5>
    <!-- Account -->
    <div class="card-body">
        <small>
            Ensure your account is using a long, random password to stay secure.
        </small> 
    </div>
    <hr class="my-0" />
    <div class="card-body">
        <form id="formAccountSettings" method="post" action="{{ route('password.update') }}">
            @csrf
            @method('put')
        <div class="row">
          <div class="mb-3 col-md-12">
            <label for="current_password" class="form-label">Current Password</label>
            <input class="form-control" type="password" name="current_password" id="current_password" autocomplete="current-password"/>
            @error('current_password')
                <small class="mt-2 text-danger">{{$message}}</small>
            @enderror
          </div>
          <div class="mb-3 col-md-12">
            <label for="password" class="form-label">New Password</label>
            <input class="form-control" type="password" name="password" id="password" autocomplete="new-password"/>
            @error('password')
                <small class="mt-2 text-danger">{{$message}}</small>
            @enderror
          </div>
          <div class="mb-3 col-md-12">
            <label for="password_confirmation" class="form-label">Confirm Password</label>
            <input class="form-control" type="password" name="password_confirmation" id="password_confirmation" autocomplete="new-password"/>
            @error('password_confirmation')
                <small class="mt-2 text-danger">{{$message}}</small>
            @enderror
          </div>
        </div>
        <div class="mt-2">
          <button type="submit" class="btn btn-primary me-2">Save changes</button>
          <button type="reset" class="btn btn-outline-secondary">Cancel</button>
        </div>
      </form>
    </div>
    <!-- /Account -->
  </div>
