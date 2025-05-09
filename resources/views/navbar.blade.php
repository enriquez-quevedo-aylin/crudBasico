<style>
    nav {
        background-color: #1e1e2f;
        border-radius: 0 0 12px 12px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
        padding: 10px 0;
    }

    .navbar-brand {
        color: #f1c40f;
        font-weight: bold;
        font-size: 1.5rem;
        transition: color 0.3s ease;
    }

    .navbar-brand:hover {
        color: #f39c12;
    }

    .nav-link {
        color: white;
        margin-left: 20px;
        transition: color 0.3s ease, transform 0.2s ease;
    }

    .nav-link:hover {
        color: #f1c40f;
        transform: translateY(-2px);
    }

    .navbar-toggler {
        background-color: white;
        border: none;
        border-radius: 4px;
    }

    .navbar-toggler-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='black' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
    }
</style>



<nav class="navbar navbar-expand-lg ">
    <div class="container">
        <a class="navbar-brand" href="{{ route('inicio') }}">RepelisHD <i class="fa-solid fa-video"></i></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('inicio') }}">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('peliculas.index') }}">Catalogo</a></li>
{{--                     <li class="nav-item"><a class="nav-link" href="{{ route('vista4') }}">Editar</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('vista5') }}">Eliminar</a></li> --}}
            </ul>
        </div>
    </div>
</nav>