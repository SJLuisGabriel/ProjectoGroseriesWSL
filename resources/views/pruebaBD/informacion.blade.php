<!-- resources/views/pruebaBD/informacion.blade.php -->

<h1>Información Recuperada</h1>

<ul>
    @foreach ($nombres as $key => $nombre)
        <li>{{ $nombre }} - Edad: {{ $edad[$key] }}</li>
    @endforeach 

    <br>
    <br>
        hola
        {{ $clientes[0]->nombre }}

    <br>
    <br>
        hola
        {{ $clientes[1]->nombre  }}
</ul>
