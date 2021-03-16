@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1><b>Horario</b>/agendar horarios</h1>
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
  
  <div class="hidden sm:block" aria-hidden="true">
  </div>
  <div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5">
    <!--Card 1-->
    <div class="rounded overflow-hidden shadow-lg card">
      
      {{-- <div class="p-2 bg-gradient-to-r from-blue-400 to-blue-900 card-header rounded-b-3xl"> --}}
        <div class="p-2 bg-blue-900 card-header rounded-b-3xl">
        <div class="font-bold text-xl mb-2 text-white">Pediatra</div>
        <p class="text-white text-base">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
        </p>
      </div>
      <div class="flex justify-center card-body">
        <div class="grid grid-cols-2">
          <div>
            <p class="text-gray-800 text-base">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
            </p>
          </div>
          <div>
            <img class="w-full float-right rounded-3xl" src="https://images.unsplash.com/photo-1566492031773-4f4e44671857?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="photo">
          </div>
        </div>
        
        
      </div>
      
    </div>
    <!--Card 2-->
    <div class="rounded overflow-hidden shadow-lg card">
      
      <div class="p-2 bg-blue-900 card-header rounded-b-3xl">
        <div class="font-bold text-xl mb-2 text-white">Pediatra</div>
        <p class="text-white text-base">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
        </p>
      </div>
      <div class="flex justify-center card-body">
        <div class="grid grid-cols-2">
          <div>
            <p class="text-gray-800 text-base">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
            </p>
          </div>
          <div>
            <img class="w-full float-right rounded-3xl" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="photo">
          </div>
        </div>
        
      </div>
      
    </div>

    <!--Card 3-->
    <div class="rounded overflow-hidden shadow-lg card">
      
      <div class="p-2 bg-blue-900 card-header rounded-b-3xl">
        <div class="font-bold text-xl mb-2 text-white">Pediatra</div>
        <p class="text-white text-base">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
        </p>
      </div>
      <div class="flex justify-center card-body">
        <div class="grid grid-cols-2">
          <div>
            <p class="text-gray-800 text-base">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
            </p>
          </div>
          <div>
            <img class="w-full float-right rounded-3xl" src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="photo">
          </div>
        </div>
        
      </div>
      
    </div>
  </div>

  <div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-6">
      <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
          <form action="{{ route('horario.store') }}" method="post">
          @csrf
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-blue-900">
              <tr>
                <th scope="col" class="p-2 text-left text-xs font-medium text-white uppercase tracking-wider">
                  Horario
                </th>
                <th scope="col" class="p-2 text-left text-xs font-medium text-white uppercase tracking-wider">
                  Lunes
                </th>
                <th scope="col" class="p-2 text-left text-xs font-medium text-white uppercase tracking-wider">
                  Martes
                </th>
                <th scope="col" class="p-2 text-left text-xs font-medium text-white uppercase tracking-wider">
                  Miercoles
                </th>
                <th scope="col" class="p-2 text-left text-xs font-medium text-white uppercase tracking-wider">
                  Jueves
                </th>
                <th scope="col" class="p-2 text-left text-xs font-medium text-white uppercase tracking-wider">
                  Viernes
                </th>
                <th scope="col" class="p-2 text-left text-xs font-medium text-white uppercase tracking-wider">
                  Sabado
                </th>
                <th scope="col" class="p-2 text-left text-xs font-medium text-white uppercase tracking-wider">
                  Domingo
                </th>
                <th scope="col" class="p-2 text-left text-xs font-medium text-white uppercase tracking-wider">
                  Pediatra
                </th>
                {{-- <th scope="col" class="relative px-6 py-3">
                  <span class="sr-only">Edit</span>
                </th>
                <th scope="col" class="relative px-6 py-3">
                  <span class="sr-only">Edit</span>
                </th>
                <th scope="col" class="relative px-6 py-3">
                  <span class="sr-only">Edit</span>
                </th> --}}
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
              {{-- @foreach ($tiempos as $tiempo) --}}
              @foreach ($horarios as $horario)
              
              <tr>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    {{-- <input type="text" value="1" name="hora" id="hora" hidden="hidden"> --}}
                    <div class="ml-4">
                      <div class="text-sm font-medium text-gray-900">
                        {{$horario->hora}}
                      </div>
                      <div class="text-sm text-gray-500">
                        AM
                      </div>
                      {{-- <input type="text" value="{{$horario->hora}}" hidden> --}}
                    </div>
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      name="hora[]"
                      value=""
                      {{-- checked="{{($horario->estado =='activo'?'checked':'')}}" --}}
                      />
                      
                      {{-- <input type="text" value="{{$horario->idmedicohorario}}"> --}}
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      name="hora[]"
                      value=""
                      {{-- checked="{{($horario->estado =='activo'?'checked':'')}}" --}}
                      />
                      
                      {{-- <input type="text" value="{{$horario->idmedicohorario}}"> --}}
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                   
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      name="hora[]"
                      value=""
                      {{-- checked="{{($horario->estado =='activo'?'checked':'')}}" --}}
                      />
                      
                      {{-- <input type="text" value="{{$horario->idmedicohorario}}"> --}}
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      name="hora[]"
                      value=""
                      {{-- checked="{{($horario->estado =='activo'?'checked':'')}}" --}}
                      />
                      
                      {{-- <input type="text" value="{{$horario->idmedicohorario}}"> --}}
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      name="hora[]"
                      value=""
                      {{-- checked="{{($horario->estado =='activo'?'checked':'')}}" --}}
                      />
                      
                      {{-- <input type="text" value="{{$horario->idmedicohorario}}"> --}}
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      name="hora[]"
                      value=""
                      {{-- checked="{{($horario->estado =='activo'?'checked':'')}}" --}}
                      />
                      
                      {{-- <input type="text" value="{{$horario->idmedicohorario}}"> --}}
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      name="hora[]"
                      value=""
                      {{-- checked="{{($horario->estado =='activo'?'checked':'')}}" --}}
                      />
                      
                      {{-- <input type="text" value="{{$horario->idmedicohorario}}"> --}}
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="text-sm text-gray-900">Regional Paradigm Technician</div>
                  <div class="text-sm text-gray-500">Optimization</div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                    Active
                  </span>
                </td>
                
              </tr>
              @endforeach
              {{-- @endforeach --}}
              <tr>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    
                    <div class="ml-4">
                      <div class="text-sm font-medium text-gray-900">
                        8:00-9:00
                      </div>
                      <div class="text-sm text-gray-500">
                        AM
                      </div>
                    </div>
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="text-sm text-gray-900">Regional Paradigm Technician</div>
                  <div class="text-sm text-gray-500">Optimization</div>
                </td>
              </tr>
              <tr>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    
                    <div class="ml-4">
                      <div class="text-sm font-medium text-gray-900">
                        9:00-10:00
                      </div>
                      <div class="text-sm text-gray-500">
                        AM
                      </div>
                    </div>
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="text-sm text-gray-900">Regional Paradigm Technician</div>
                  <div class="text-sm text-gray-500">Optimization</div>
                </td>
              </tr>
              <tr>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    
                    <div class="ml-4">
                      <div class="text-sm font-medium text-gray-900">
                        10:00-11:00
                      </div>
                      <div class="text-sm text-gray-500">
                        AM
                      </div>
                    </div>
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="text-sm text-gray-900">Regional Paradigm Technician</div>
                  <div class="text-sm text-gray-500">Optimization</div>
                </td>
              </tr>
              <tr>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    
                    <div class="ml-4">
                      <div class="text-sm font-medium text-gray-900">
                        11:00-12:00
                      </div>
                      <div class="text-sm text-gray-500">
                        PM
                      </div>
                    </div>
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="text-sm text-gray-900">Regional Paradigm Technician</div>
                  <div class="text-sm text-gray-500">Optimization</div>
                </td>
              </tr>
              <tr>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    
                    <div class="ml-4">
                      <div class="text-sm font-medium text-gray-900">
                        12:00-13:00
                      </div>
                      <div class="text-sm text-gray-500">
                        AM
                      </div>
                    </div>
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="text-sm text-gray-900">Regional Paradigm Technician</div>
                  <div class="text-sm text-gray-500">Optimization</div>
                </td>
              </tr>
              <tr>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    
                    <div class="ml-4">
                      <div class="text-sm font-medium text-gray-900">
                        13:00-14:00
                      </div>
                      <div class="text-sm text-gray-500">
                        AM
                      </div>
                    </div>
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="text-sm text-gray-900">Regional Paradigm Technician</div>
                  <div class="text-sm text-gray-500">Optimization</div>
                </td>
              </tr>
              <tr>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    
                    <div class="ml-4">
                      <div class="text-sm font-medium text-gray-900">
                        14:00-15:00
                      </div>
                      <div class="text-sm text-gray-500">
                        AM
                      </div>
                    </div>
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="text-sm text-gray-900">Regional Paradigm Technician</div>
                  <div class="text-sm text-gray-500">Optimization</div>
                </td>
              </tr>
              <tr>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    
                    <div class="ml-4">
                      <div class="text-sm font-medium text-gray-900">
                        15:00-16:00
                      </div>
                      <div class="text-sm text-gray-500">
                        AM
                      </div>
                    </div>
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="text-sm text-gray-900">Regional Paradigm Technician</div>
                  <div class="text-sm text-gray-500">Optimization</div>
                </td>
              </tr>
              <tr>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    
                    <div class="ml-4">
                      <div class="text-sm font-medium text-gray-900">
                        16:00-17:00
                      </div>
                      <div class="text-sm text-gray-500">
                        AM
                      </div>
                    </div>
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="text-sm text-gray-900">Regional Paradigm Technician</div>
                  <div class="text-sm text-gray-500">Optimization</div>
                </td>
              </tr>
              <tr>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    
                    <div class="ml-4">
                      <div class="text-sm font-medium text-gray-900">
                        17:00-18:00
                      </div>
                      <div class="text-sm text-gray-500">
                        AM
                      </div>
                    </div>
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="text-sm text-gray-900">Regional Paradigm Technician</div>
                  <div class="text-sm text-gray-500">Optimization</div>
                </td>
              </tr>
              <tr>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    
                    <div class="ml-4">
                      <div class="text-sm font-medium text-gray-900">
                        18:00-19:00
                      </div>
                      <div class="text-sm text-gray-500">
                        AM
                      </div>
                    </div>
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="text-sm text-gray-900">Regional Paradigm Technician</div>
                  <div class="text-sm text-gray-500">Optimization</div>
                </td>
              </tr>
              <tr>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    
                    <div class="ml-4">
                      <div class="text-sm font-medium text-gray-900">
                        19:00-20:00
                      </div>
                      <div class="text-sm text-gray-500">
                        AM
                      </div>
                    </div>
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="flex items-center">
                    <input
                        type="checkbox"
                        class="rounded border-blue-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      />
                  </div>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <div class="text-sm text-gray-900">Regional Paradigm Technician</div>
                  <div class="text-sm text-gray-500">Optimization</div>
                </td>
              </tr>
              <!-- More items... -->
            </tbody>
          </table>
        
          <div class="flex justify-center p-4 bg-white">
            <button type="submit" class=" py-2 px-4 border border-white shadow-sm text-sm font-medium rounded-md text-white bg-blue-900 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
              Guardar cambios
             </button>
          </div>
        </form>
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

