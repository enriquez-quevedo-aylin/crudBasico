<!DOCTYPE html>
<html>
<head>
    <title>Catálogo de Películas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <style>
      body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #0f0f1a;
      color: #f0f0f0;
    }

    header {
      background: linear-gradient(90deg, #5f27cd, #341f97);
      padding: 20px 40px;
      text-align: center;
    }

    header h1 {
      margin: 0;
      font-size: 2.8em;
      color: #ffffff;
    }

    nav {
      background-color: #1e1e2f;
      padding: 12px 0;
      text-align: center;
    }

    nav a {
      color: #00d2ff;
      text-decoration: none;
      margin: 0 25px;
      font-weight: 600;
      transition: color 0.3s ease;
    }

    nav a:hover {
      color: #ffffff;
    }

    .hero {
      background: linear-gradient(to right, #00c9ff, #92fe9d);
      padding: 80px 20px;
      text-align: center;
      color: #0f0f1a;
    }

    .hero h2 {
      font-size: 2.5em;
      margin-bottom: 10px;
    }

    .hero p {
      font-size: 1.2em;
      max-width: 600px;
      margin: auto;
    }

    .catalogo {
      padding: 50px 20px;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 30px;
      max-width: 1200px;
      margin: auto;
    }

    .pelicula {
      background-color: #1e1e2f;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 6px 15px rgba(0,0,0,0.6);
      transition: transform 0.3s;
    }

    footer {
      background-color: #1e1e2f;
      text-align: center;
      padding: 25px;
      color: #aaa;
      margin-top: 50px;
    }

    .datatable{
      background: rgb(13, 107, 222);
    }
    </style>


<section class="v-100">
    @include('navbar')
    <div class="container mt-4">
        @yield('content') <!-- permite generar herencia -->
    </div>
{{--     @include('navbar')
    @yield('content') --}}


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
