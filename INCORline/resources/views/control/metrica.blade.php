@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1><b>Control</b>/control pediatrico</h1>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
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
{{--   
  <div class="hidden sm:block" aria-hidden="true">
    <div class="py-5">
      <div class="border-t border-gray-200"></div>
    </div>
  </div> --}}
  
  <div class="mt-10 sm:mt-0">
    <div class="md:grid md:grid-cols-3 md:gap-6">
      <div class="mt-2 md:mt-0 md:col-span-2">
        <form action="{{ route('control.store') }}" method="POST">
          @csrf
          <div class="shadow overflow-hidden sm:rounded-md">
            <div class="card-header bg-blue-900 flex justify-center">
              <h3 class="text-lg font-medium leading-6 text-white uppercase">Formulario de registro</h3>
            </div>
            <div class="p-4 bg-white sm:p-6">
              <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-6">
                  <h3 class="text-lg font-medium leading-6 text-blue-900 uppercase">Formulario de registro de Metrica</h3>
                  <hr>
                </div>
                <div class="col-span-6 sm:col-span-3">
                  <label for="first_name" class="block text-sm font-medium text-gray-700">Peso</label>
                  <input type="text" name="peso" id="peso" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
  
                <div class="col-span-6 sm:col-span-3">
                  <label for="last_name" class="block text-sm font-medium text-gray-700">Talla</label>
                  <input type="text" name="talla" id="talla" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-3">
                    <label for="first_name" class="block text-sm font-medium text-gray-700">IMC</label>
                    <input type="text" name="imc" id="imc" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
    
                <div class="col-span-6 sm:col-span-3">
                    <label for="last_name" class="block text-sm font-medium text-gray-700">Fecha</label>
                    <input type="date" name="fecha" id="fecha" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
  
                <div class="col-span-6 sm:col-span-3">
                  <label for="email_address" class="block text-sm font-medium text-gray-700">Paciente</label>
                  <input type="text" name="paciente" id="paciente" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>  
              </div>
              
              <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-6 mt-4">
                  <h3 class="text-lg font-medium leading-6 text-blue-900 uppercase">Formulario de registro de Vacuna</h3>
                  <hr>
                </div>
                <div class="col-span-6 sm:col-span-3">
                  <label for="first_name" class="block text-sm font-medium text-gray-700">Nombre</label>
                  <input type="text" name="nombrev" id="nombrev" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
  
                <div class="col-span-6 sm:col-span-3">
                  <label for="last_name" class="block text-sm font-medium text-gray-700">Descripcion</label>
                  <input type="text" name="descripcionv" id="descripcionv" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-3">
                    <label for="first_name" class="block text-sm font-medium text-gray-700">Dosis</label>
                    <input type="text" name="dosisv" id="dosisv" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
    
                <div class="col-span-6 sm:col-span-3">
                    <label for="last_name" class="block text-sm font-medium text-gray-700">Fecha</label>
                    <input type="date" name="fechav" id="fechav" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
  
                <div class="col-span-6 sm:col-span-3">
                  <label for="email_address" class="block text-sm font-medium text-gray-700">Edad</label>
                  <input type="text" name="edadv" id="edadv" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                {{-- <div class="col-span-6 sm:col-span-3">
                    <label for="email_address" class="block text-sm font-medium text-gray-700">Paciente</label>
                    <input type="date" name="email_address" id="email_address" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div> --}}
              </div>
              <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-6 mt-4">
                  <h3 class="text-lg font-medium leading-6 text-blue-900 uppercase">Formulario de registro de Receta</h3>
                  <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  <hr>
                </div>
                <div class="col-span-6 sm:col-span-3">
                  <label for="first_name" class="block text-sm font-medium text-gray-700">Medicamento</label>
                  <input type="text" name="medicamento" id="medicamento" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
  
                <div class="col-span-6 sm:col-span-3">
                  <label for="last_name" class="block text-sm font-medium text-gray-700">Dosis</label>
                  <input type="text" name="dosism" id="dosism" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-3">
                    <label for="first_name" class="block text-sm font-medium text-gray-700">Indicaciones</label>
                    <input type="text" name="indicaciones" id="indicaciones" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
    
                <div class="col-span-6 sm:col-span-3">
                    <label for="last_name" class="block text-sm font-medium text-gray-700">Fecha</label>
                    <input type="date" name="fecham" id="fecham" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
  
                {{-- <div class="col-span-6 sm:col-span-3">
                  <label for="email_address" class="block text-sm font-medium text-gray-700">Paciente</label>
                  <input type="text" name="email_address" id="email_address" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div> --}}

                  
              </div>
            </div>
            <div class="px-4 py-3 bg-white text-right sm:px-6">
              <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Guardar
              </button>
            </div>
          </div>
        </form>
      </div>
      <div class="md:col-span-1 mt-2">
        <div class="card ">
          <div class="card-header bg-blue-900">
            <h3 class="text-lg font-medium leading-6 text-white">Personal Information</h3>
            <p class="mt-1 text-sm text-white">
              Use a permanent address where you can receive mail.
            </p>
          </div>
          <div class="card-body"> 
            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-900 hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 m-8">
            Nuevo Personal
            </button>
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
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop