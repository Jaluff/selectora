 <div class="card shadow-none mb-6">
   <!-- Account -->

   <div class="card-body pt-0">
     <form id="formAccountSettings" method="POST" onsubmit="return false">
       <div class="row mt-1 g-5">


         <div class="col-md-6">
           <div class="form-floating form-floating-outline">
             <input class="form-control" type="text" id="firstName" name="firstName"
               value="{{ $employee->referencia_postulacion }}" autofocus />
             <label for="firstName">Referencia de postulación</label>
           </div>
         </div>

         <div class="col-md-6">
           <div class="form-floating form-floating-outline">
             <input type="text" class="form-control" id="organization" name="organization"
               value="{{ $employee->experiencia }}" />
             <label for="organization">Experiencia laboral (años o meses)</label>
           </div>
         </div>


         <div class="col-md-6">
           <div class="form-floating form-floating-outline">
             <select id="hours" name="hours" class="form-select">
               <option value="Todo el día (8 horas)"
                 {{ $employee->horas == 'Todo el día (8 horas)' ? 'selected' : '' }}>Todo el día (8 horas)</option>
               <option value="Cama afuera (4 horas) de mañana"
                 {{ $employee->horas == 'Cama afuera (4 horas) de mañana' ? 'selected' : '' }}>Cama afuera (4 horas) de
                 mañana</option>
               <option value="Cama afuera (4 horas) de tarde"
                 {{ $employee->horas == 'Cama afuera (4 horas) de tarde' ? 'selected' : '' }}>Cama afuera (4 horas) de
                 tarde</option>
               <option value="Cama adentro (semanal)"
                 {{ $employee->horas == 'Cama adentro (semanal)' ? 'selected' : '' }}>Cama adentro (semanal)</option>
               <option value="Cama adentro (fines de semana)"
                 {{ $employee->horas == 'Cama adentro (fines de semana)' ? 'selected' : '' }}>Cama adentro (fines de
                 semana)</option>
               <option value="Otros..." {{ $employee->horas == 'Otros...' ? 'selected' : '' }}>Otros...</option>
             </select>
             <label for="lastName">Preferencia de horarios</label>
           </div>
         </div>

         <div class="col-md-6">
           <div class="form-floating form-floating-outline">
             <select class="form-select" id="tasks" name="tasks">
               <option value="Tareas del hogar" {{ $employee->preferencias == 'Tareas del hogar' ? 'selected' : '' }}>
                 Tareas del hogar</option>
               <option value="Cuidado de niños" {{ $employee->preferencias == 'Cuidado de niños' ? 'selected' : '' }}>
                 Cuidado de niños</option>
               <option value="Cuidado de bebés" {{ $employee->preferencias == 'Cuidado de bebés' ? 'selected' : '' }}>
                 Cuidado de bebés</option>
               <option value="Cuidado de Adultos mayores"
                 {{ $employee->preferencias == 'Cuidado de Adultos mayores' ? 'selected' : '' }}>Cuidado de Adultos
                 mayores</option>
               <option value="Tareas del hogar y Cuidado de niños"
                 {{ $employee->preferencias == 'Tareas del hogar y Cuidado de niños' ? 'selected' : '' }}>Tareas del
                 hogar y Cuidado de niños</option>
               <option value="Tareas del hogar y Cuidado de bebés"
                 {{ $employee->preferencias == 'Tareas del hogar y Cuidado de bebés' ? 'selected' : '' }}>Tareas del
                 hogar y Cuidado de bebés</option>
               <option value="Tareas del hogar y Cuidado de Adultos mayores"
                 {{ $employee->preferencias == 'Tareas del hogar y Cuidado de Adultos mayores' ? 'selected' : '' }}>
                 Tareas del hogar y Cuidado de Adultos mayores</option>
             </select>
             <label for="tasks">Preferencia de tareas</label>
           </div>
         </div>

         <div class="col-md-6">
           <div class="input-group input-group-merge">
             <div class="form-floating form-floating-outline">
               <input type="text" id="phoneNumber" name="phoneNumber" class="form-control" placeholder=""
                 value="{{ $employee->zonas }}" />
               <label for="phoneNumber">Zonas de preferencias</label>
             </div>
           </div>
         </div>
         <div class="col-md-6">
           <div class="form-floating form-floating-outline">
             <select id="estado" name="estado" class="form-select">
               <option value="Nueva" {{ $employee->estado == 'Nueva' ? 'selected' : '' }}>Nueva</option>
               <option value="Entrevistada" {{ $employee->estado == 'Entrevistada' ? 'selected' : '' }}>Entrevistada
               </option>
               <option value="Referenciada" {{ $employee->estado == 'Referenciada' ? 'selected' : '' }}>Referenciada
               </option>
               <option value="Apta" {{ $employee->estado == 'Apta' ? 'selected' : '' }}>Apta</option>
               <option value="Trabajando" {{ $employee->estado == 'Trabajando' ? 'selected' : '' }}>Trabajando</option>
               <option value="Rechazada" {{ $employee->estado == 'Rechazada' ? 'selected' : '' }}>Rechazada</option>
             </select>
             <label for="address">Estado</label>
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

       </div>
     </form>
   </div>
   <!-- /Account -->
 </div>
