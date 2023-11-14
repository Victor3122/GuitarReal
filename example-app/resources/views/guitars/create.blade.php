@extends('layouts.app')
@section('content')
        <div class="container mx-auto mt-8">
            <h2 class="text-2xl font-semibold mb-4">Create a New Guitar</h2>
            <form action="{{ route('store') }}" enctype="multipart/form-data" method="POST">
                @csrf
                @method('POST')
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-bold">Name</label>
                    <input type="text" name="name" id="name" class="form-input w-full color text-amber-300">
                </div>
        
                <div class="mb-4">
                    <label for="price" class="block text-gray-700 font-bold">Price</label>
                    <input type="text" name="price" id="price" class="form-input w-full">
                </div>
        
                <div class="mb-4">
                    <label for="description" class="block text-gray-700 font-bold">Description</label>
                    <textarea name="description" id="description" class="form-textarea w-full"></textarea>
                </div>
        
                <div class="mt-8">
                    <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Create Guitar</button>
                </div>
            </form>
        </div>
            </form>
        </div>
    @endsection