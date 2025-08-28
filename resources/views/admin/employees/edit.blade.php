@extends('layouts/contentNavbarLayout')

@section('title', 'Account settings - Account')

@section('page-style')
  {{-- @vite(['resources/assets/vendor/libs/select2/select2.css']) --}}



@section('content')

  <div class="row">
    <div class="col-md-12">
      <div class="nav-align-top">
        <h3>Edición del empleado</h3>
      </div>
    </div>

    <div class="card mb-6">
      <div class="card-header nav-align-top p-0 pb-6">
        <ul class="nav nav-tabs pt-5 " role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link waves-effect active" data-bs-toggle="tab" data-bs-target="#form-tabs-personal"
              role="tab" aria-selected="true">
              <span class="icon-base ri ri-user-line d-sm-none"></span>
              <span class="d-none d-sm-block">Informacion Personal</span>
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link waves-effect" data-bs-toggle="tab" data-bs-target="#form-tabs-work" role="tab"
              aria-selected="false" tabindex="-1"><span class="icon-base ri ri-folder-user-line d-sm-none"></span><span
                class="d-none d-sm-block">Informacion laboral</span></button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link waves-effect " data-bs-toggle="tab" data-bs-target="#form-tabs-qualities"
              role="tab" aria-selected="true"><span
                class="icon-base ri ri-facebook-circle-fill d-sm-none"></span><span class="d-none d-sm-block">
                Cualidades</span></button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link waves-effect " data-bs-toggle="tab" data-bs-target="#form-tabs-references"
              role="tab" aria-selected="true"><span
                class="icon-base ri ri-facebook-circle-fill d-sm-none"></span><span class="d-none d-sm-block">
                Referencias</span></button>
          </li>
          <span class="tab-slider" style="left: 295.078px; width: 129.234px; bottom: 0px;"></span>
        </ul>
      </div>

      <div class="tab-content">
        <div class="tab-pane fade show active" id="form-tabs-personal" role="tabpanel">
          @include('admin.employees._parts.personal')
        </div>
        <div class="tab-pane fade" id="form-tabs-work" role="tabpanel">

          @include('admin.employees._parts.work')


        </div>
        <div class="tab-pane fade " id="form-tabs-qualities" role="tabpanel">
          @include('admin.employees._parts.qualities')
        </div>

        <div class="tab-pane fade " id="form-tabs-references" role="tabpanel">
          @include('admin.employees._parts.references')


        </div>
      </div>
    </div>
  </div>
@endsection
