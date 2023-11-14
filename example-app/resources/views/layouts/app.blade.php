
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
    .guitar-store {
     background-color: bg-blue-500;
     color: text-white;
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
           
    </div>
<div class="relative isolate px-6 pt-14 lg:px-8">
        <!-- Your content for the home page can go here -->
        @yield('content')
    </div>

    </body>
</html>