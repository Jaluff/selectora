 <div class="card shadow-none mb-6">
   <!-- Account -->
   <div class="card-body">
     <div class="d-flex align-items-start align-items-sm-center gap-6">
       <img
         src="
            @if ($employee->foto) {{ asset('storage/img_employee/' . $employee->foto) }}
                 @else
                {{ asset('img/avatars/1.png') }} @endif
             "
         alt="user-avatar" class="d-block w-px-100  rounded" class="rounded" id="uploadedAvatar" />
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
             <input class="form-control" type="text" id="firstName" name="firstName" value="{{ $employee->nombre }}"
               autofocus />
             <label for="firstName">Nombre completo</label>
           </div>
         </div>
         <div class="col-md-6">
           <div class="form-floating form-floating-outline">
             <input class="form-control" type="text" name="lastName" id="lastName" value="{{ $employee->edad }}" />
             <label for="lastName">Edad</label>
           </div>
         </div>
         <div class="col-md-6">
           <div class="form-floating form-floating-outline">
             <input class="form-control" type="text" id="email" name="email"
               value="{{ $employee->correo_electronico }}" placeholder="john.doe@example.com" />
             <label for="email">E-mail</label>
           </div>
         </div>
         <div class="col-md-6">
           <div class="form-floating form-floating-outline">
             <input type="text" class="form-control" id="organization" name="organization"
               value="{{ $employee->dni }}" />
             <label for="organization">Documento</label>
           </div>
         </div>
         <div class="col-md-6">
           <div class="input-group input-group-merge">
             <div class="form-floating form-floating-outline">
               <input type="text" id="phoneNumber" name="phoneNumber" class="form-control" placeholder=""
                 value="{{ $employee->telefono }}" />
               <label for="phoneNumber">Telefono principal</label>
             </div>
             <span class="input-group-text">Celular</span>
           </div>
         </div>
         <div class="col-md-6">
           <div class="form-floating form-floating-outline">
             <input type="text" class="form-control" id="address" name="address" placeholder="Address"
               value="{{ $employee->telefono2 }}" />
             <label for="address">Telefono alternativo</label>
           </div>
         </div>
         <div class="col-md-6">
           <div class="form-floating form-floating-outline">
             <input class="form-control" type="text" id="state" name="state" placeholder="California"
               value="{{ $employee->direccion }}" />
             <label for="state">Direccion</label>
           </div>
         </div>
         <div class="col-md-6">
           <div class="form-floating form-floating-outline">
             <input type="text" class="form-control" id="zipCode" name="zipCode" placeholder="231465"
               maxlength="6" value="{{ $employee->localidad }}" />
             <label for="zipCode">Localidad</label>
           </div>
         </div>
         <div class="col-md">
           <div class="card shadow-none border border-secondary p-3 text-center">
             <div class="card-content">
               <h6 class="fw-semibold d-block">Prioridad?</h6>
               <div class="form-check form-check-inline">
                 <input type="radio" id="prioridadAlta" name="prioridad" class="form-check-input" value="Alta"
                   {{ $employee->prioridad == 'Alta' ? 'checked' : '' }}>
                 <label class="form-check-label" for="prioridad">Alta</label>
               </div>
               <div class="form-check form-check-inline">
                 <input type="radio" id="prioridadNormal" name="prioridad" class="form-check-input"
                   value="Normal" {{ $employee->prioridad == 'Normal' ? 'checked' : '' }}>
                 <label class="form-check-label" for="prioridadNormal">Normal</label>
               </div>
               <div class="form-check form-check-inline">
                 <input type="radio" id="prioridadBaja" name="prioridad" class="form-check-input" value="Baja"
                   {{ $employee->prioridad == 'Baja' ? 'checked' : '' }}>
                 <label class="form-check-label" for="movilidad">Baja</label>
               </div>
             </div>
           </div>
         </div>
         <div class="col-md">
           <div class="card shadow-none border border-secondary p-3 text-center">
             <div class="card-content">
               <h6 class="fw-semibold d-block">Tiene movilidad propia?</h6>
               <div class="form-check form-check-inline">
                 <input type="radio" id="movilidad" name="movilidad" class="form-check-input" value="Si"
                   {{ $employee->movilidad == 'Si' ? 'checked' : '' }}>
                 <label class="form-check-label" for="movilidad">Si</label>
               </div>
               <div class="form-check form-check-inline">
                 <input type="radio" id="movilidad" name="movilidad" class="form-check-input" value="So"
                   {{ $employee->movilidad == 'No' ? 'checked' : '' }}>
                 <label class="form-check-label" for="movilidad">No</label>
               </div>
             </div>
           </div>
         </div>

         <div class="col-md">
           <div class="card shadow-none border border-secondary p-3 text-center">
             <div class="card-content">
               <h6 class="fw-semibold d-block">Secundario completo?</h6>
               <div class="form-check form-check-inline">
                 <input type="radio" id="secundario" name="secundario" class="form-check-input" value="si"
                   {{ $employee->secundario == 'Si' ? 'checked' : '' }}>
                 <label class="form-check-label" for="secundario">Si</label>
               </div>
               <div class="form-check form-check-inline">
                 <input type="radio" id="secundario" name="secundario" class="form-check-input" value="no"
                   {{ $employee->secundario == 'No' ? 'checked' : '' }}>
                 <label class="form-check-label" for="secundario">No</label>
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
