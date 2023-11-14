@extends('layouts.app')
@section('content')
        <div class="container mx-auto mt-8">
            <h2 class="text-2xl font-semibold mb-4">Update a New Guitar</h2>
            <form action="{{ url("/update/$guitar->id") }}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-bold">Name</label>
                    <input type="text" name="name" id="name" class="form-input w-full color text-amber-300" value="{{$guitar->name}}">
                </div>
        
                <div class="mb-4">
                    <label for="price" class="block text-gray-700 font-bold">Price</label>
                    <input type="text" name="price" id="price" class="form-input w-full" value="{{$guitar->price}}">
                </div>
        
                <div class="mb-4">
                    <label for="description" class="block text-gray-700 font-bold">Description</label>
                    <textarea name="description" id="description" class="form-textarea w-full"> {{$guitar->description}}</textarea>
                </div>
        
                <div class="mt-8">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update Guitar</button>
                </div>
            </form>
        </div>
        </div>
    @endsection