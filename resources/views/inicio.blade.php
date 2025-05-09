@extends('layout')

@section('content')
<style>
  body {
    margin: 0;
    font-family: 'Poppins', sans-serif;
    background: #0f2027;
    background: linear-gradient(to right, #2c5364, #203a43, #0f2027);
    color: white;
}

.homepage {
    display: flex;
    flex-direction: column;
    min-height: 100vh;
}

.hero-header {
    text-align: center;
    padding: 100px 20px 60px;
    background-image: url('https://www.transparenttextures.com/patterns/stardust.png');
    background-color: rgba(0, 0, 0, 0.6);
}

.hero-header h1 {
    font-size: 3.5rem;
    margin-bottom: 10px;
    color: #f1c40f;
}

.hero-header p {
    font-size: 1.3rem;
    max-width: 600px;
    margin: 0 auto 30px;
    color: #ecf0f1;
}

.btn-explore {
    padding: 14px 28px;
    font-size: 1rem;
    background-color: #e74c3c;
    color: white;
    border: none;
    border-radius: 8px;
    text-decoration: none;
    font-weight: bold;
    transition: background 0.3s ease;
}

.btn-explore:hover {
    background-color: #c0392b;
}

.features {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 30px;
    padding: 60px 40px;
    background-color: rgba(255, 255, 255, 0.05);
}

.feature-box {
    background: rgba(255, 255, 255, 0.1);
    padding: 30px;
    border-radius: 15px;
    text-align: center;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
}

.feature-box:hover {
    transform: translateY(-8px);
}

.feature-box h3 {
    margin-bottom: 15px;
    color: #f1c40f;
}

.footer-home {
    text-align: center;
    padding: 20px;
    font-size: 0.9rem;
    background-color: #111;
    color: #ccc;
    margin-top: auto;
}

</style>
<div class="homepage">

    <header class="hero-header">
        <h1>🎬 RepelisHD</h1>
        <p>Tu portal de películas, series y entretenimiento sin límites</p>
        <a href="{{ route('peliculas.index') }}" class="btn-explore">Explorar Catálogo</a>
    </header>

    <section class="features">
        <div class="feature-box">
            <h3>📺 Series y Películas</h3>
            <p>Catálogo completo para todos los gustos: acción, drama, comedia, anime y más.</p>
        </div>
        <div class="feature-box">
            <h3>📱 Acceso desde cualquier dispositivo</h3>
            <p>Disfruta donde quieras, cuando quieras. Todo tu contenido favorito al alcance.</p>
        </div>
        <div class="feature-box">
            <h3>⏱️ Sin esperas</h3>
            <p>Streaming instantáneo y sin interrupciones. Solo presiona play.</p>
        </div>
    </section>

    <footer class="footer-home">
        &copy; 2025 RepelisHD — Todos los derechos reservados.
    </footer>

</div>
@endsection
