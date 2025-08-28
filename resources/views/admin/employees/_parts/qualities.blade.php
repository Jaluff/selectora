<div class="card shadow-none mb-6">
  <div class="card-body pt-0">
    <form id="formAccountSettings" method="POST" onsubmit="return false">
      <div class="row mt-1 g-5">



        <div class="col-md-12">
          <div class="form-floating form-floating-outline">
            <input class="form-control" type="text" name="food" id="Food" value="{{ $employee->comidas }}" />
            <label for="Food">Comidas que prepara</label>
          </div>
        </div>


        <div class="col-md-3">
          <div class="form-floating form-floating-outline">

            <select id="trabajaSabados" name="trabajaSabados" class="form-select">
              <option value="si" {{ $employee->trabaja_sabados ? 'selected' : '' }}>Sí</option>
              <option value="no" {{ !$employee->trabaja_sabados ? 'selected' : '' }}>No</option>
              <option value="Únicamante medio día" {{ !$employee->trabaja_sabados ? 'selected' : '' }}>
                Únicamante medio día</option>
            </select>
            <label for="firstName">Trabaja los sabados?</label>
          </div>
        </div>

        <div class="col-md-3">
          <div class="form-floating form-floating-outline">

            <select id="trabajaSabados" name="trabajaSabados" class="form-select">
              <option value="5" {{ $employee->limpias == '5' ? 'selected' : '' }}>Excelente</option>
              <option value="4" {{ $employee->limpias == '4' ? 'selected' : '' }}>Muy bien</option>
              <option value="3" {{ $employee->limpias == '3' ? 'selected' : '' }}>Bien</option>
              <option value="2" {{ $employee->limpias == '2' ? 'selected' : '' }}>Mal</option>
              <option value="1" {{ $employee->limpias == '1' ? 'selected' : '' }}>Muy mal</option>
            </select>
            <label for="firstName">Limpia</label>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-floating form-floating-outline">

            <select id="cocinas" name="cocinas" class="form-select">
              <option value="5" {{ $employee->cocinas == '5' ? 'selected' : '' }}>Excelente</option>
              <option value="4" {{ $employee->cocinas == '4' ? 'selected' : '' }}>Muy bien</option>
              <option value="3" {{ $employee->cocinas == '3' ? 'selected' : '' }}>Bien</option>
              <option value="2" {{ $employee->cocinas == '2' ? 'selected' : '' }}>Mal</option>
              <option value="1" {{ $employee->cocinas == '1' ? 'selected' : '' }}>Muy mal</option>
            </select>
            <label for="cocinas">Cocina</label>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-floating form-floating-outline">

            <select id="planchas" name="planchas" class="form-select">
              <option value="5" {{ $employee->planchas == '5' ? 'selected' : '' }}>Excelente</option>
              <option value="4" {{ $employee->planchas == '4' ? 'selected' : '' }}>Muy bien</option>
              <option value="3" {{ $employee->planchas == '3' ? 'selected' : '' }}>Bien</option>
              <option value="2" {{ $employee->planchas == '2' ? 'selected' : '' }}>Mal</option>
              <option value="1" {{ $employee->planchas == '1' ? 'selected' : '' }}>Muy mal</option>
            </select>
            <label for="planchas">Plancha</label>
          </div>
        </div>


        <div class="col-md">
          <div class="card shadow-none border border-secondary p-3 text-center">
            <div class="card-content">
              <h6 class="fw-semibold d-block">Trabaja <br>con Niños</h6>

              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="workWithChildren_si" name="workWithChildren"
                  value="Si" {{ $employee->ninios === 'Si' ? 'checked' : '' }} />
                <label class="form-check-label" for="workWithChildren_si">Si</label>
              </div>

              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="workWithChildren_no" name="workWithChildren"
                  value="No" {{ $employee->ninios === 'No' ? 'checked' : '' }} />
                <label class="form-check-label" for="workWithChildren_no">No</label>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md">
          <div class="card shadow-none border border-secondary p-3 text-center">
            <div class="card-content">
              <h6 class="fw-semibold d-block">Trabaja <br>en Casa Grande</h6>

              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="bigHouse_si" name="casa_grande" value="Si"
                  {{ $employee->casa_grande ? 'checked' : '' }} />
                <label class="form-check-label" for="bigHouse_si">Si</label>
              </div>

              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="bigHouse_no" name="casa_grande" value="No"
                  {{ !$employee->casa_grande ? 'checked' : '' }} />
                <label class="form-check-label" for="bigHouse_no">No</label>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md">
          <div class="card shadow-none border border-secondary p-3 text-center">
            <div class="card-content">
              <h6 class="fw-semibold d-block">Roba?<br><br></h6>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="roba_si" name="roba" value="Si"
                  {{ $employee->roba == 'Si' ? 'checked' : '' }} />
                <label class="form-check-label" for="roba_si">Si</label>
              </div>

              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="roba_no" name="roba" value="No"
                  {{ $employee->roba == 'No' ? 'checked' : '' }} />
                <label class="form-check-label" for="roba_no">No</label>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md">
          <div class="card shadow-none border border-secondary p-3 text-center">
            <div class="card-content">
              <h6 class="fw-semibold d-block">Trabaja <br> en Barrio privado</h6>

              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="barrio_privado_si" name="barrio_privado"
                  value="si" {{ $employee->barrio_privado ? 'checked' : '' }} />
                <label class="form-check-label" for="barrio_privado_si">Si</label>
              </div>

              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="barrio_privado_no" name="barrio_privado"
                  value="no" {{ !$employee->barrio_privado ? 'checked' : '' }} />
                <label class="form-check-label" for="barrio_privado">No</label>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md">
          <div class="card shadow-none border border-secondary p-3 text-center">
            <div class="card-content">
              <h6 class="fw-semibold d-block">Patrones <br> Detallistas<br></h6>

              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="cleansi" name="clean" value="Si"
                  {{ $employee->detallista === 'si' ? 'checked' : '' }} />
                <label class="form-check-label" for="clean">Si</label>
              </div>

              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="cleanno" name="clean" value="No"
                  {{ $employee->detallista === 'No' ? 'checked' : '' }} />
                <label class="form-check-label" for="clean">No</label>
              </div>
            </div>
          </div>
        </div>





      </div>
      <div class="mt-6">
        <button type="submit" class="btn btn-primary me-3">Guardar cambios</button>

      </div>
    </form>
  </div>
  <!-- /Account -->
</div>
