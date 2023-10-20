@extends('layout.mainlayout')
@section('Content')
    <section id="seccion1">
        <h2>Sección 1</h2>
        <p>Contenido de la sección 1...</p>
    </section>

    <section id="seccion2">
        <h2>Sección 2</h2>
        <p>Contenido de la sección 2...</p>
    </section>

    <section id="seccion3">
        <h2>Sección 3</h2>
        <p>Contenido de la sección 3...</p>
    </section>

    <section style="height: 100vh; background-image: url('ruta_de_tu_imagen.jpg'); background-size: cover; background-position: center; display: flex; align-items: center; justify-content: center; color: white; text-align: center;">
        <h2>Imagen Full Height</h2>
        <!-- Contenido opcional sobre la imagen full height -->
    </section>

    <section id="socios">
        <h2>Socios</h2>
        <p>Información sobre socios...</p>
    </section>

    @stop
