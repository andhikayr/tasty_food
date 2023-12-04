@section('title')
   Login
@endsection
@extends('skeleton_dashboard')
<!--wrapper-->
<div class="wrapper">
   <form method="POST" action="{{ route('login') }}">
      @csrf
      <div class="section-authentication-signin d-flex align-items-center justify-content-center">
         <div class="container-fluid">
            <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
               <div class="col mx-auto">
                  <div class="mb-4 text-center">
                     <h1 class="fw-bold text-uppercase">tasty food</h1>
                  </div>
                  <div class="card">
                     <div class="card-body">
                        <div class="p-4 rounded">
                           <div class="text-center">
                              <h3 class="">Sign in</h3>
                           </div>
                           <div class="form-body">
                              <form class="row g-3">
                                 <div class="col-12 mb-3">
                                    <label for="inputEmailAddress" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="inputEmailAddress"
                                       placeholder="Email" type="email" name="email">
                                    @error('email')
                                       <div class="text-danger mt-2">{{ $message }}</div>
                                    @enderror
                                 </div>
                                 <div class="col-12 mb-3">
                                    <label for="inputChoosePassword" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="inputChoosePassword"
                                       placeholder="Password" name="password">
                                    @error('password')
                                       <div class="text-danger mt-2">{{ $message }}</div>
                                    @enderror
                                 </div>
                                 <div class="col-12 mb-3">
                                    <div class="form-check form-switch">
                                       <input class="form-check-input" type="checkbox" id="remember_me" name="remember">
                                       <label class="form-check-label" for="remember_me">Remember Me</label>
                                    </div>
                                 </div>
                                 <div class="col-12">
                                    <div class="d-grid">
                                       <button type="submit" class="btn btn-primary">Login</button>
                                    </div>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!--end row-->
         </div>
      </div>
   </form>
</div>
<!--end wrapper-->
