@extends('layouts/blankLayout')

@section('title', 'Register Basic - Pages')

@section('page-style')
  @vite(['resources/assets/vendor/scss/pages/page-auth.scss'])
@endsection


@section('content')
  <div class="position-relative">
    <div class="authentication-wrapper authentication-basic container-p-y">
      <div class="authentication-inner py-6 mx-4">

        <!-- Register Card -->
        <div class="card p-7">
          <!-- Logo -->
          <div class="app-brand justify-content-center mt-5">
            <a href="{{ url('/') }}" class="app-brand-link gap-3">
              <span class="app-brand-logo demo">@include('_partials.macros', ['height' => 20])</span>
              <span class="app-brand-text demo text-heading fw-semibold">{{ config('variables.templateName') }}</span>
            </a>
          </div>
          <!-- /Logo -->
          <div class="card-body mt-1">
            {{-- <h4 class="mb-1">Adventure starts here 🚀</h4> --}}
            <p class="mb-5">Registro para empezar a usar la aplicación!</p>

            <form id="formAuthentication" class="mb-5" action="{{ route('register') }}" method="POST">
              @csrf
              <div class="form-floating form-floating-outline mb-5">
                @error('name')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
                <input type="text" class="form-control" id="name" name="name" placeholder="Ingrese su nombre"
                  autofocus>
                <label for="name">Nombre</label>
              </div>

              <div class="form-floating form-floating-outline mb-5">
                <input type="text" class="form-control" id="email" name="email"
                  placeholder="Ingrese su correo electrónico">
                @error('email')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
                <label for="email">Correo Electrónico</label>
              </div>

              <div class="mb-5 form-password-toggle">
                <div class="input-group input-group-merge">
                  <div class="form-floating form-floating-outline">
                    <input type="password" id="password" class="form-control" name="password" placeholder=""
                      aria-describedby="password" />
                    @error('password')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                    <label for="password">Contraseña</label>
                  </div>
                  <span class="input-group-text cursor-pointer"><i class="ri-eye-off-line ri-20px"></i></span>
                </div>
              </div>

              <div class="mb-5 form-password-toggle">
                <div class="input-group input-group-merge">
                  <div class="form-floating form-floating-outline">
                    <input type="password" id="password-confirm" class="form-control" name="password_confirmation"
                      placeholder="" aria-describedby="password" />
                    @error('password')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                    <label for="password-confirm">Confirmar Contraseña</label>
                  </div>
                  <span class="input-group-text cursor-pointer"><i class="ri-eye-off-line ri-20px"></i></span>
                </div>
              </div>

              {{-- <div class="mb-5 py-2">
                <div class="form-check mb-0">
                  <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms">
                  <label class="form-check-label" for="terms-conditions">
                    I agree to
                    <a href="javascript:void(0);">privacy policy & terms</a>
                  </label>
                </div>
              </div> --}}
              <button class="btn btn-primary d-grid w-100 mb-5">
                Registrarse
              </button>
            </form>

            <p class="text-center mb-5">
              <span>Ya tiene una cuenta?</span>
              <a href="{{ url('auth/login-basic') }}">
                <span>Iniciar sesión</span>
              </a>
            </p>
          </div>
        </div>
        <!-- Register Card -->
        <img src="{{ asset('assets/img/illustrations/tree-3.png') }}" alt="auth-tree"
          class="authentication-image-object-left d-none d-lg-block">
        <img src="{{ asset('assets/img/illustrations/auth-basic-mask-light.png') }}"
          class="authentication-image d-none d-lg-block" height="172" alt="triangle-bg">
        <img src="{{ asset('assets/img/illustrations/tree.png') }}" alt="auth-tree"
          class="authentication-image-object-right d-none d-lg-block">
      </div>
    </div>
  </div>
@endsection
