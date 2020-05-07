
		<div class="page construction-image">
                  <div class="page-content z-index-10">
                      <div class="container">
                          <div class="row">
                              <div class="col-xl-4 col-md-12 col-md-12 d-block mx-auto">
                                  <div class="card mb-xl-0">
                                      <div class="card-header">
                                          @if (Cookie::get('referral'))
                                          <h3 class="card-title">{{json_decode(Cookie::get('referral'))->name}} Invited You!</h3>
                                          @else
                                          <h3 class="card-title">Register</h3>
                                          @endif
                                      </div>
                                      <form class="card-body" method="POST" action="{{ route('register') }}">
                                          @csrf
                                          <div class="form-group">
                                              <label class="form-label text-dark  for=" name">Name</label>
                                              <input type="text" wire:model="name" name="name" class="form-control @error('name') is-invalid @enderror" placeholder=" Enter name" id="name">
                                              @error('name')
                                              <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                              </span>
                                              @enderror
                                          </div>
                                          <div class="form-group">
                                              <label class="form-label text-dark" for="email">Email address</label>
                                              <input type="email" wire:model="email" name="email" class="form-control @error('email') is-invalid @enderror"" placeholder=" Enter email" id="email">
                                              @error('email')
                                              <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                              </span>
                                              @enderror
                                          </div>
                                          <div class="form-group">
                                              <label class="form-label text-dark" for="phone_number">Phone Number</label>
                                              <input type="string" wire:model="phone_number" name="phone_number" class="form-control @error('phone_number') is-invalid @enderror"" placeholder=" Enter email" id="phone_number">
                                              @error('phone_number')
                                              <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                              </span>
                                              @enderror
                                          </div>
                                          <div class="form-group">
                                              <label class="form-label text-dark" for="password">Password</label>
                                              <input type="password" wire:model="password" name="password" class="form-control @error('password') is-invalid @enderror"" id=" password" placeholder="Password">
                                              @error('password')
                                              <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                              </span>
                                              @enderror
                                          </div>
                                          <div class="form-group">
                                              <label class="form-label text-dark" for="password_confirmation">Confirm Password</label>
                                              <input type="password" wire:model="password_confirmation" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror"" id=" confirm_password" placeholder="Password">
                                              @error('password_confirmation')
                                              <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                              </span>
                                              @enderror
                                          </div>
                                          <div class="form-footer mt-2">
                                              <button type="submit" class="btn btn-primary btn-block">Create New Account</a>
                                          </div>
                                          <div class="text-center  mt-3 text-dark">
                                              Already have account?<a href="/login"> Login</a>
                                          </div>

                                      </form>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

		<!-- JQuery js-->
		<script src="{{url('/assets/js/vendors/jquery-3.2.1.min.js')}}" defer></script>

		<script src="{{url('/assets/plugins/bootstrap-4.3.1-dist/js/bootstrap.min.js')}}" defer></script>