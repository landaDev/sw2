@extends('adminlte::page')

@section('title', 'INCORline')

@section('content_header')
<h1><b>Personal</b>/registrar</h1>
    
@stop

@section('content')

    <!--
  This example requires Tailwind CSS v2.0+ 
  
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ]
  }
  ```
-->
  
  <div class="mt-10 sm:mt-0">
    <div class="md:grid md:grid-cols-3 md:gap-6">
      
      <div class="mt-2 md:mt-0 md:col-span-2">
        
        <form action="{{ route('personal.store')}}" method="POST">
          @csrf
          <div class="shadow overflow-hidden sm:rounded-md">
            <div class="card-header bg-blue-900 flex justify-center">
              <h3 class="text-lg font-medium leading-6 text-white uppercase">Formulario de registro</h3>
            </div>
            <div class="px-4 py-3 bg-white sm:p-6">
              
              <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                  <label  class="block text-sm font-medium text-gray-700">Nombre</label>
                  <input type="text" name="nombre" id="nombre" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
  
                <div class="col-span-6 sm:col-span-3">
                  <label  class="block text-sm font-medium text-gray-700">Apellido</label>
                  <input type="text" name="apellido" id="apellido" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-3">
                    <label  class="block text-sm font-medium text-gray-700">C.I.</label>
                    <input type="text" name="ci" id="ci" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
    
                <div class="col-span-6 sm:col-span-3">
                    <label  class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="text" name="email" id="email" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
  
                <div class="col-span-6 sm:col-span-3">
                  <label  class="block text-sm font-medium text-gray-700">Celular</label>
                  <input type="text" name="celular" id="celular" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-3">
                    <label  class="block text-sm font-medium text-gray-700">Fecha de Nacimiento</label>
                    <input type="date" name="fechanac" id="fechanac" autocomplete="email" class=" mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-3">
                    <label  class="block text-sm font-medium text-gray-700">Ciudad</label>
                    <input type="text" name="ciudad" id="ciudad" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-3">
                    <label  class="block text-sm font-medium text-gray-700">Currículum</label>
                    <input type="file" name="cv" id="cv" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6">
                    <label  class="block text-sm font-medium text-gray-700">Direccion</label>
                    <input type="text" name="direccion" id="direccion" autocomplete="street-address" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
  
                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                  <label  class="block text-sm font-medium text-gray-700">Usuario</label>
                  <input type="text" name="user" id="user" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
  
                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                  <label  class="block text-sm font-medium text-gray-700">Contraseña</label>
                  <input type="text" name="contrasena" id="contrasena" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="col-span-6 sm:col-span-2">
                  <label  class="block text-sm font-medium text-gray-700">Grupo de usuario</label>
                  <select id="grupousuario" name="grupousuario" autocomplete="country" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required="required">
                    <option value="">Seleccionar</option>
                    <option value="1">ADM</option>
                    <option value="2">Pediatra</option>
                    <option value="3">Recepcionista</option>
                  </select>
                </div>
                {{-- <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                  <label for="postal_code" class="block text-sm font-medium text-gray-700">ZIP / Postal</label>
                  <input type="text" name="postal_code" id="postal_code" autocomplete="postal-code" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div> --}}
              </div>
            </div>
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
              <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-900 hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Guardar Nuevo
              </button>
            </div>
          </div>
        </form>
      </div>
      <div class="md:col-span-1 mt-2">
        <div class="card ">
        <div class="card-header bg-blue-900">
          <h3 class="text-lg font-medium leading-6 text-white">Personal authenticado</h3>
          <p class="mt-1 text-sm text-white">
            Responsable del registro actual
          </p>

        </div>
        <div class="card-body"> 
          <div class="col-span-6 sm:col-span-6 lg:col-span-2">
            <label  class="block text-sm font-medium text-gray-700">Usuario</label>
            <input type="text" name="useractual" id="useractual" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            
          </div>
          <div class="col-span-6 sm:col-span-6 lg:col-span-2 m-5">
            <img class="w-full float-right rounded-3xl" src="https://images.unsplash.com/photo-1566492031773-4f4e44671857?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="photo">
          </div>
          {{-- <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-900 hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 m-8">
          Nuevo Personal
          </button> --}}
        </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="hidden sm:block" aria-hidden="true">
    <div class="py-5">
      <div class="border-t border-gray-200"></div>
    </div>
  </div>
  
  </div> 

@stop

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop