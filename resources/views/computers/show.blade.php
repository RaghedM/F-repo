@extends('layout')
@section('title', 'Show Computer')
@section('content')



<div class=" blabla max-w-6xl mx-auto sm:px-6 lg:px-8 ">
    <div class="flex justify-center " style="margin-bottom: 0px;">
         <h1  style="margin-bottom: 0px;" >Computers </h1>
    </div>

    <div class="mt-2 flex justify-center ">
       <h3>{{$computer['name']}} ({{$computer['origin']}})  <strong> ${{$computer['price']}}</strong></h3> 
       
        </div>
        <div>
            <a class="edit-btn" href="{{route('computers.edit', $computer->id)}}">edit</a>
            
        </div>
        <div>
            <form class="delete_form" action="{{route('computers.destroy', $computer->id)}}" method="POST">
                @csrf 
                @method('DELETE')
                <input  class="deletee-btn" type="submit" value = "delete">
 
            </form>
        </div>
        
    
@endsection

