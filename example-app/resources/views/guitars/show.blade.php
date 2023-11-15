<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/rippleui@1.12.1/dist/css/styles.css" />
    <link href="/dist/output.css" rel="stylesheet">
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <title>Display Page</title>
</head>
<style>
    body {
        font-family: "Sofia", sans-serif;
        font-size: 30px;
        text-shadow: 3px 3px 3px #e4de27;
    }
    

    
    button {
        background-color: black;
        color: white;
        font-size: 16px;
        padding: 10px 20px;
        border-radius: 5px;
    }
</style>
<body>
    <body class=" h-screen flex flex-col">

        <div class="navbar">
            <div class="navbar-start">
                <a class="navbar-item text-yellow-500 hover:text-gray-700" href="/index">VT Guitar</a>
            </div>
            <div class="navbar-center">
                 <a class="my-1 text-amber-400 font-medium md:mx-4 md:my-0 hover:text-gray-700" href="/about_us">About</a> 
                
            </div>
            <div class='navbar-end'>
                <a <button class="bg-black text-white font-bold py-2 px-4 rounded-md hover:bg-gray-700"  href="/create">
                    Add
                  </button> </a>
                  
            </div>
           
        </div>
        <div class="bg-cover bg-center h-screen w-screen" style="background-image: url('{{URL("storage/10.jpg")}}'); background-size: cover; background-position: center;">
        @if(session('status'))
            <div class="alert alert-info">{{session('status')}}</div>
        @endif
        
        <div class="flex w-full overflow-x-auto text-red-600">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($guitars as $guitar)
                        <tr>
                            <td>{{ $guitar->id }}</td>
                            <td>{{ $guitar->name }}</td>
                            <td>{{ $guitar->price }}</td>
                            <td>{{ $guitar->description }}</td>
                            <td>
                                <a href="{{ route('edit', $guitar->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                                <form action="{{ url("/delete/$guitar->id") }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                                </form>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
</div>
    </body>
</html>
