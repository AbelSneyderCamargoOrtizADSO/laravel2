<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VENTAS</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 p-4">

    <!-- Menú de Navegación -->
    <nav class="bg-blue-600 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="#" class="text-white text-lg font-semibold">Tienda en Línea</a>
            <div>
                <a href="#" class="text-white hover:text-gray-200 mx-4">Inicio</a>
                <a href="#" class="text-white hover:text-gray-200 mx-4">Productos</a>
                <a href="#" class="text-white hover:text-gray-200 mx-4">Contacto</a>
                <a href="{{route('productos.create')}}" class="text-white hover:text-gray-200 mx-4">REGISTRAR PRODUCTO</a>
                <a href="{{route('register')}}" class="text-white hover:text-gray-200 mx-4">REGISTRARSE</a>
                <a href="{{route('login')}}" class="text-white hover:text-gray-200 mx-4">LOGUEARSE</a>
                @auth
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-red-500">
                            Cerrar Sesión
                        </button>
                    </form>
                @endauth



            </div>
        </div>
    </nav>

    <!-- Título de la Página -->
    <header class="bg-white shadow">
        <div class="container mx-auto p-4">
            <h1 class="text-2xl font-bold text-gray-800">Bienvenido a Nuestra Tienda</h1>
            <p class="text-gray-600">Encuentra los mejores productos al mejor precio.</p>
            @auth
                <p>BIENVENIDO USUARIO: {{Auth::user()->name}}</p>
            @endauth
        </div>
    </header>

    <!-- Contenido Principal -->
    <main class="container mx-auto p-4 flex">
        <!-- Tarjeta de Producto -->
        @foreach ($products as $product)
            <a href="{{route('productos.show', $product)}}" class="max-w-sm mx-auto bg-white rounded-lg shadow-md overflow-hidden">
                <img class="w-full h-48 object-cover" src="https://via.placeholder.com/400x300"
                    alt="Imagen del Producto">
                <div class="p-4">
                    <h2 class="text-xl font-semibold text-gray-800">{{$product -> name}}</h2>
                    <p class="text-gray-600 mt-2">${{$product -> price}}</p>
                </div>
            </a>
        @endforeach
    </main>

    {{$products -> links()}}

    <!-- Pie de Página -->
    <footer class="bg-blue-600 p-4 mt-8">
        <div class="container mx-auto text-center text-white">
            <p>&copy; 2024 Tienda en Línea. Todos los derechos reservados.</p>
        </div>
    </footer>

</body>

</html>
