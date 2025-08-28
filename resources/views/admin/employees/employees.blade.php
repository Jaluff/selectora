@extends('layouts/contentNavbarLayout')

@section('title', 'Empleadas - Lsitado')


@section('content')
  <div class="card mb-6">
    <div class="card-widget-separator-wrapper">
      <div class="card-body card-widget-separator">
        <div class="row gy-4 gy-sm-1">
          <div class="col-sm-6 col-lg-3">
            <div class="d-flex justify-content-between align-items-start card-widget-1 border-end pb-4 pb-sm-0">
              <div>
                <h4 class="mb-0">24</h4>
                <p class="mb-0">Empleadas</p>
              </div>
              <div class="avatar me-sm-6">
                <span class="avatar-initial rounded bg-label-success">
                  <i class="icon-base ri ri-user-line text-heading bg-label-success icon-26px"></i>
                </span>
              </div>
            </div>
            <hr class="d-none d-sm-block d-lg-none me-6">
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="d-flex justify-content-between align-items-start card-widget-2 border-end pb-4 pb-sm-0">
              <div>
                <h4 class="mb-0">165</h4>
                <p class="mb-0">Nuevas</p>
              </div>
              <div class="avatar me-lg-6">
                <span class="avatar-initial rounded bg-label-info">
                  <i class="icon-base ri ri-user-line text-heading bg-label-info icon-26px"></i>
                </span>
              </div>
            </div>
            <hr class="d-none d-sm-block d-lg-none">
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="d-flex justify-content-between align-items-start border-end pb-4 pb-sm-0 card-widget-3">
              <div>
                <h4 class="mb-0">6</h4>
                <p class="mb-0">Rechazadas</p>
              </div>
              <div class="avatar me-sm-6">
                <span class="avatar-initial rounded bg-label-danger">
                  <i class="icon-base ri ri-user-line text-heading bg-label-danger icon-26px"></i>
                </span>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="d-flex justify-content-between align-items-start">
              <div>
                <h4 class="mb-0">76</h4>
                <p class="mb-0">Entrevisadas</p>
              </div>
              <div class="avatar">
                <span class="avatar-initial rounded bg-label-primar">
                  <i class=" icon-base ri ri-user-line text-heading bg-label-primary icon-26px"></i>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Hoverable Table rows -->
  <div class="card">
    <div class="card-header border-bottom">
      <h5 class="mb-0">Filter</h5>
      <div class="d-flex flex-column flex-md-row justify-content-between align-items-center row pt-4 gap-4 gap-md-0">
        {{-- Inicio filtros dinamicos --}}
        <div id="dynamic-filters" class="mb-3 w-100">
          <div class="filter-row row g-2 align-items-end mb-2 p-2 rounded border">
            <div class="col-md-2">
              <label class="form-label mb-1 small text-muted">Campo</label>
              <select class="form-select form-select-sm field">
                <option value="nombre" data-type="text">Nombre</option>
                <option value="telefono" data-type="text">Teléfono</option>
                <option value="edad" data-type="text">Edad</option>
                <option value="jobProfile.experiencia" data-type="text">Experiencia</option>
              </select>
            </div>

            <div class="col-md-2">
              <label class="form-label mb-1 small text-muted">Operador</label>
              <select class="form-select form-select-sm operator"></select>
            </div>

            <div class="col-md-3 value-container">
              <label class="form-label mb-1 small text-muted">Valor</label>
              <input type="text" class="form-control form-control-sm value" placeholder="Valor">
            </div>

            <div class="col-md-1 d-flex align-items-end justify-content-end">
              <button type="button" class="btn btn-outline-danger  btn-remove">
                <i class="ri-close-line"></i> Quitar
              </button>
            </div>
          </div>
        </div>

        <div class="d-flex flex-wrap gap-2 justify-content-end w-100">
          <button type="button" id="add-filter" class="btn btn-outline-secondary btn-sm">
            <i class="ri-add-line"></i> Añadir filtro
          </button>
          <button type="button" id="apply-filters" class="btn btn-primary btn-sm">
            <i class="ri-filter-3-line"></i> Aplicar
          </button>
        </div>
        {{-- fin filtros dinamicos --}}
      </div>
    </div>
    {{-- <h5 class="card-header">Listado de empleadas</h5> --}}
    <div class="table-responsive text-nowrap">
      <table class="table table-hover table-sm" data-url="{{ route('employee.getData') }}"
        data-img-base="{{ asset('storage/img_employee') }}"
        data-img-default="{{ asset('assets/img/avatars/default.png') }}" id="employeesTable">
        <thead>
          <tr>
            <th>ID</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Documento</th>
            <th>Teléfono</th>
            <th>Experiencia</th>
            <th>Estado</th>
            <th>Acciones</th>
          </tr>
        </thead>
        {{-- <tbody class="table-border-bottom-0">
          @foreach ($employees as $employee)
            <tr>
              <td class="text-center">
                <img
                  src="{{ $employee->foto ? asset('storage/img_employee/' . $employee->foto) : asset('assets/img/avatars/default.png') }}"
                  alt="{{ $employee->nombre }}" class="rounded" width="30">
              </td>
              <td>{{ $employee->nombre }}</td>
              <td>{{ $employee->edad }}</td>
              <td>{{ $employee->dni }}</td>
              <td>{{ $employee->experiencia }}</td>
              <td><span class="badge rounded-pill bg-label-primary me-1">{{ $employee->estado }}</span></td>
              <td>
                <div class="dropdown">
                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i
                      class="ri-more-2-line"></i></button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="javascript:void(0);"><i class="ri-pencil-line me-1"></i> Edit</a>
                    <a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-6-line me-1"></i>
                      Delete</a>
                  </div>
                </div>
              </td>
            </tr>
          @endforeach
        </tbody> --}}
      </table>
    </div>
  </div>
  <!--/ Hoverable Table rows -->

  <hr class="my-12">
@endsection
@section('page-script')
  @vite(['resources/js/pages/employees.js'])
@endsection
