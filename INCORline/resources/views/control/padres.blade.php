@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1><b>Control</b>/registrar padres</h1>
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
  
  <div class="mt-10 sm:mt-0">
    <div class="md:grid md:grid-cols-3 md:gap-6">
      <div class="mt-2 md:mt-0 md:col-span-2">
        <form action="{{ route('guardarPadres') }}" method="POST">
          @csrf
          <div class="shadow overflow-hidden sm:rounded-md">
            <div class="card-header bg-blue-900 flex justify-center">
              <h3 class="text-lg font-medium leading-6 text-white uppercase">Formulario de registro</h3>
            </div>
            <div class="px-4 py-5 bg-white sm:p-6">
              <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                  <label for="first_name" class="block text-sm font-medium text-gray-700">Nombre Madre</label>
                  <input type="text" name="nombrem" id="nombrem" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
  
                <div class="col-span-6 sm:col-span-3">
                  <label for="last_name" class="block text-sm font-medium text-gray-700">Apellido Madre</label>
                  <input type="text" name="apellidom" id="apellidom" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-3">
                    <label for="first_name" class="block text-sm font-medium text-gray-700">C.I. Madre</label>
                    <input type="text" name="cim" id="cim" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
    
                <div class="col-span-6 sm:col-span-3">
                    <label for="last_name" class="block text-sm font-medium text-gray-700">Fecha de nacimiento Madre</label>
                    <input type="date" name="fechanacm" id="fechanacm" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="first_name" class="block text-sm font-medium text-gray-700">Nombre Padre</label>
                    <input type="text" name="nombrep" id="nombrep" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                  </div>
    
                  <div class="col-span-6 sm:col-span-3">
                    <label for="last_name" class="block text-sm font-medium text-gray-700">Apellido Padre</label>
                    <input type="text" name="apellidop" id="apellidop" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                  </div>
  
                  <div class="col-span-6 sm:col-span-3">
                      <label for="first_name" class="block text-sm font-medium text-gray-700">C.I. Padre</label>
                      <input type="text" name="cip" id="cip" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                  </div>
      
                  <div class="col-span-6 sm:col-span-3">
                      <label for="last_name" class="block text-sm font-medium text-gray-700">Fecha de nacimiento Padre</label>
                      <input type="date" name="fechanacp" id="fechanacp" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                  </div>
                  <div class="col-span-6 sm:col-span-3">
                    <label for="email_address" class="block text-sm font-medium text-gray-700">Telefono</label>
                    <input type="text" name="telefono" id="telefono" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                  </div>
                <div class="col-span-6 sm:col-span-3">
                  <label for="email_address" class="block text-sm font-medium text-gray-700">Celular Madre</label>
                  <input type="text" name="celularm" id="celularm" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="email_address" class="block text-sm font-medium text-gray-700">Celular Padre</label>
                    <input type="text" name="celularp" id="celularp" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="email_address" class="block text-sm font-medium text-gray-700">Medico tratante</label>
                    <input type="text" name="medicotratante" id="medicotratante" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="email_address" class="block text-sm font-medium text-gray-700">Paciente</label>
                    <input type="text" name="idpaciente" id="idpaciente" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
              </div>
            </div>
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
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