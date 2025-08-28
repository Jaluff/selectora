@extends('layouts/contentNavbarLayout')

@section('title', 'Account settings - Account')

@section('page-style')
  {{-- @vite(['resources/assets/vendor/libs/select2/select2.css']) --}}



@section('content')


  <div class="row">
    <div class="col-md-12">
      <div class="nav-align-top">
        <ul class="nav nav-pills flex-column flex-md-row mb-6 gap-2 gap-lg-0">
          <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i class="ri-group-line me-1_5"></i>Datos
              personales</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('pages/account-settings-notifications') }}"><i
                class="ri-notification-4-line me-1_5"></i>Datos laborales</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('pages/account-settings-connections') }}"><i
                class="ri-link-m me-1_5"></i>Cualidades</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('pages/account-settings-connections') }}"><i
                class="ri-link-m me-1_5"></i>Referencias</a></li>
        </ul>
      </div>
      <div class="card mb-6">
        <!-- Account -->
        <div class="card-body">
          <div class="d-flex align-items-start align-items-sm-center gap-6">
            <img src="{{ asset('assets/img/avatars/1.png') }}" alt="user-avatar" class="d-block w-px-100 h-px-100 rounded"
              id="uploadedAvatar" />
            <div class="button-wrapper">
              <label for="upload" class="btn btn-sm btn-primary me-3 mb-4" tabindex="0">
                <span class="d-none d-sm-block">Subir nueva foto</span>
                <i class="ri-upload-2-line d-block d-sm-none"></i>
                <input type="file" id="upload" class="account-file-input" hidden accept="image/png, image/jpeg" />
              </label>
              <button type="button" class="btn btn-sm btn-outline-danger account-image-reset mb-4">
                <i class="ri-refresh-line d-block d-sm-none"></i>
                <span class="d-none d-sm-block">Reset</span>
              </button>

              <div>Permitido JPG, GIF o PNG. tamaño maximo 800K</div>
            </div>
          </div>
        </div>
        <div class="card-body pt-0">
          <form id="formAccountSettings" method="POST" onsubmit="return false">
            <div class="row mt-1 g-5">
              <div class="col-md-6">
                <div class="form-floating form-floating-outline">
                  <input class="form-control" type="text" id="firstName" name="firstName" value="John" autofocus />
                  <label for="firstName">Nombre completo</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-floating form-floating-outline">
                  <input class="form-control" type="text" name="lastName" id="lastName" value="Doe" />
                  <label for="lastName">Edad</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-floating form-floating-outline">
                  <input class="form-control" type="text" id="email" name="email" value="john.doe@example.com"
                    placeholder="john.doe@example.com" />
                  <label for="email">E-mail</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-floating form-floating-outline">
                  <input type="text" class="form-control" id="organization" name="organization"
                    value="{{ config('variables.creatorName') }}" />
                  <label for="organization">Documento</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="input-group input-group-merge">
                  <div class="form-floating form-floating-outline">
                    <input type="text" id="phoneNumber" name="phoneNumber" class="form-control"
                      placeholder="202 555 0111" />
                    <label for="phoneNumber">Telefono principal</label>
                  </div>
                  <span class="input-group-text">US (+1)</span>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-floating form-floating-outline">
                  <input type="text" class="form-control" id="address" name="address" placeholder="Address" />
                  <label for="address">Telefono alternativo</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-floating form-floating-outline">
                  <input class="form-control" type="text" id="state" name="state" placeholder="California" />
                  <label for="state">Direccion</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-floating form-floating-outline">
                  <input type="text" class="form-control" id="zipCode" name="zipCode" placeholder="231465"
                    maxlength="6" />
                  <label for="zipCode">Localidad</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-floating form-floating-outline">
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
                  <label for="country">Prioridad</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-floating form-floating-outline" multiple="multiple">
                  <select id="language" class="select2 form-select select2-hidden-accessible">
                    <option value="">Select Language</option>
                    <option value="en">English</option>
                    <option value="fr">French</option>
                    <option value="de">German</option>
                    <option value="pt">Portuguese</option>
                  </select>
                  <label for="language">Movilidad propia</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-floating form-floating-outline">
                  <select id="timeZones" class="select2 form-select">
                    <option value="">Select Timezone</option>
                    <option value="-12">(GMT-12:00) International Date Line West</option>
                    <option value="-11">(GMT-11:00) Midway Island, Samoa</option>
                    <option value="-10">(GMT-10:00) Hawaii</option>
                    <option value="-9">(GMT-09:00) Alaska</option>
                    <option value="-8">(GMT-08:00) Pacific Time (US & Canada)</option>
                    <option value="-8">(GMT-08:00) Tijuana, Baja California</option>
                    <option value="-7">(GMT-07:00) Arizona</option>
                    <option value="-7">(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>
                    <option value="-7">(GMT-07:00) Mountain Time (US & Canada)</option>
                    <option value="-6">(GMT-06:00) Central America</option>
                    <option value="-6">(GMT-06:00) Central Time (US & Canada)</option>
                    <option value="-6">(GMT-06:00) Guadalajara, Mexico City, Monterrey</option>
                    <option value="-6">(GMT-06:00) Saskatchewan</option>
                    <option value="-5">(GMT-05:00) Bogota, Lima, Quito, Rio Branco</option>
                    <option value="-5">(GMT-05:00) Eastern Time (US & Canada)</option>
                    <option value="-5">(GMT-05:00) Indiana (East)</option>
                    <option value="-4">(GMT-04:00) Atlantic Time (Canada)</option>
                    <option value="-4">(GMT-04:00) Caracas, La Paz</option>
                  </select>
                  <label for="timeZones">Secundario completo</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-floating form-floating-outline">
                  {{-- <select id="currency" class="select2 form-select">
                    <option value="">Select Currency</option>
                    <option value="usd">USD</option>
                    <option value="euro">Euro</option>
                    <option value="pound">Pound</option>
                    <option value="bitcoin">Bitcoin</option>
                  </select>
                  <label for="currency">Currency</label> --}}
                </div>
              </div>
            </div>
            <div class="mt-6">
              <button type="submit" class="btn btn-primary me-3">Guardar cambios</button>
              <button type="reset" class="btn btn-outline-secondary">Restablecer</button>
            </div>
          </form>
        </div>
        <!-- /Account -->
      </div>
      <div class="card">
        <h5 class="card-header">Desactivar cuenta</h5>
        <div class="card-body">
          <form id="formAccountDeactivation" onsubmit="return false">
            <div class="form-check mb-6 ms-3">
              <input class="form-check-input" type="checkbox" name="accountActivation" id="accountActivation" />
              <label class="form-check-label" for="accountActivation">Confirmo la desactivación de mi cuenta</label>
            </div>
            <button type="submit" class="btn btn-danger deactivate-account" disabled="disabled">Desactivar
              cuenta</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('page-script')
  {{-- @vite(['resources/assets/vendor/libs/jquery/jquery.js']) --}}
  <script>
    window.addEventListener('DOMContentLoaded', function() {
      if (window.$) {
        $('#language').select2({
          multiple: false
        });
      } else {
        console.error('jQuery no está disponible');
      }
    });
  </script>
@endsection
