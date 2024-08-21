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

    <a href="{{ route('productos.index') }}"
        class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-300">VOLVER</a>

    <div class="container mx-auto p-6">
        <a href="{{ route('productos.edit', $product) }}">Editar producto</a>
        <!-- Contenedor del Producto -->
        <div class="bg-white shadow-lg rounded-lg flex flex-col md:flex-row overflow-hidden">
            <!-- Imagen del Producto -->
            <div class="md:w-1/2">
                <img class="object-cover w-full h-full" src="https://via.placeholder.com/500x400"
                    alt="Imagen del Producto">
            </div>

            <!-- Detalles del Producto -->
            <div class="md:w-1/2 p-6 flex flex-col justify-between">
                <div>
                    <h1 class="text-2xl font-bold text-gray-800">{{ $product->name }}</h1>
                    <p class="text-gray-600 mt-4">${{ $product->price }}</p>
                    <p class="text-gray-600 mt-4">{{ $product->description }}</p>
                </div>
                <div class="flex items-center justify-between ">
                    <div class="mt-6">
                        <button
                            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-300">Comprar
                            Ahora</button>
                    </div>
                    <form action="{{ route('productos.destroy', $product) }}" method="POST">
                        @csrf

                        @method('delete')

                        <button type="submit"
                            class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded flex items-center">
                            <!-- Icono opcional -->
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor" class="w-5 h-5 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Delete
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </div>

</body>

</html>
