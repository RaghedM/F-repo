@extends('layout')
@section('title', 'edit')
@section('content')


<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <div class="flex justify-center ">
         <h1> edit an old  Computer  </h1>
    </div>
    <div class="flex justify-center ">
      
        <form action="{{route('computers.update', ['computer'=> $computer->id])}}" method="POST" class= "form bg-white p-6 border-1">
         @csrf
         @method('PUT')
             <div>
                <label for="computer-name">Computer Name</label>
                <input type="text" name="computer-name" id="computer-name" value="{{$computer->name}}"">
                @error('computer-name')
                <div class="form-error">
                  {{$message }}
                </div>
              
                @enderror
             </div>

             <div>
                <label for="computer-origin">Computer origin</label>
                <input type="text" name="computer-origin" id="computer-origin" value="{{$computer->origin}}">
                @error('computer-origin')
                <div class="form-error">
                  {{$message }}
                </div>
                @enderror
             </div>

             <div>
                <label for="computer-price">Computer price</label>
                <input type="text" name="computer-price" id="computer-price"  value="{{$computer->price}}">
                @error('computer-price')
                <div class="form-error">
                  {{$message }}
                </div>
                @enderror
             </div>

             <div>
                <button type="submit"> Submit</button>
             </div>
        </form>
   </div>
   
@endsection

