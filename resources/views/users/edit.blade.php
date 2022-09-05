<x-app-layout>
   
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Asignar rol') }}
        </h2>
    </x-slot>
    @if(session('info'))
  <div class = "alert alert-primary">
    <strong>{{session('info')}}</strong>
  </div>
  @endif
    
<div class="card">
    <div class="card-body">

          <p class="h4">Nombre</p>
       <p class="form-control"> {{$user->name}}</p><br>
       <h2 class="h5"> Listado de roles</h2>
       {!! Form::model($user, ['route' => ['users.update',$user], 'method'=> 'put'])!!}    
          
       @foreach ($roles as $role)
           <div>
               <label>
                   {!! Form::checkbox('roles[]', $role->id, null,['class'=>'mr-1'])!!}
                   {{$role->name}}
               </label>
           </div>
           @endforeach
           
       {!! Form::submit('Asignar rol',['class' => 'btn btn-outline-primary mt-2'])!!}
       {!! Form::close()!!}
         
   </div>
   </div>
      
    
   </x-app-layout>