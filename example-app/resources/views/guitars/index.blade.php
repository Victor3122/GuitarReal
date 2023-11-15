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
    <title>Home Page</title>
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
<body class="h-screen flex flex-col">

    <div class="navbar">
        <div class="navbar-start">
            <a class="navbar-item text-yellow-500 hover:text-gray-700" href="/index">VT Guitar</a>
        </div>
        <div class="navbar-center">
             <a class="my-1 text-amber-400 font-medium md:mx-4 md:my-0 hover:text-gray-700" href="/about_us">About</a> 
        </div>
        <div class='navbar-end'>
            <button class="bg-black text-white font-bold py-2 px-4 rounded-md hover:bg-gray-700"  href="/create">
                Add
            </button>
        </div>
    </div>

    <div class="bg-cover bg-center h-screen w-screen" style="background-image: url('{{URL("storage/5.jpg")}}'); background-size: cover; background-position: center;">
        <div class="h-screen flex justify-center items-center">
            <div class="flex-grow flex justify-center items-center bg-yellow guitar-store">
                <div class="text-center text-white">
                    <h1 class="text-4xl md:text-6xl font-bold mb-4">Welcome</h1>
                    <p class="text-xl md:text-2xl">Guitar Store</br>Music is my life</p></br>
                    <a href="/guitar" class="my-8 px-6 py-3 bg-red-500 text-white rounded-full hover:bg-yellow-600 text-lg font-semibold transition duration-300">Show All Items</a>
                </div>
            </div>
        </div>
    </div>

    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src='https://unpkg.com/ripple-ui@0.0.6/dist/ripple-ui.min.js'></script>
</body>
</html>
