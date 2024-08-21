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
</body>

<body class="bg-gray-100 p-6">
    <div class="container mx-auto">
        <div class="bg-white p-8 rounded-lg shadow-md max-w-lg mx-auto">
            <h1 class="text-2xl font-bold mb-6 text-gray-800">Registrar Nuevo Producto</h1>

            <form action="{{route('productos.index')}}" method="POST">
                @csrf

                <!-- Nombre del Producto -->
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-semibold mb-2">Nombre del Producto:</label>
                    <input type="text" id="name" name="name"
                        class="w-full p-3 border border-gray-300 rounded-lg"
                        placeholder="Ingresa el nombre del producto" required>
                </div>

                <!-- Precio del Producto -->
                <div class="mb-4">
                    <label for="price" class="block text-gray-700 font-semibold mb-2">Precio:</label>
                    <input type="number" id="price" name="price"
                        class="w-full p-3 border border-gray-300 rounded-lg" placeholder="Ingresa el precio" required
                        step="0.01">
                </div>

                <!-- Descripción del Producto -->
                <div class="mb-4">
                    <label for="description" class="block text-gray-700 font-semibold mb-2">Descripción:</label>
                    <textarea id="description" name="description" class="w-full p-3 border border-gray-300 rounded-lg"
                        placeholder="Ingresa la descripción del producto" rows="4" required></textarea>
                </div>

                <!-- Botón de Enviar -->
                <div class="flex justify-end">
                    <button type="submit"
                        class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition duration-300">Registrar
                        Producto</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
