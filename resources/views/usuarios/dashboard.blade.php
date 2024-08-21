<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">

    <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-md">
        <a href="{{ route('productos.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            Volver a productos
        </a>
        <h2 class="text-2xl font-bold text-center mb-6">Tu Dashboard</h2>

        <!-- Mostrar los datos del usuario -->
        <div class="mb-4">
            <p class="text-gray-700"><strong>Nombre:</strong> {{ Auth::user()->name }}</p>
            <p class="text-gray-700"><strong>Correo Electrónico:</strong> {{ Auth::user()->email }}</p>
        </div>

        <!-- Botón para volver -->
        <div class="flex items-center justify-between">
            <a href="{{ url()->previous() }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                Volver
            </a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-red-500">
                    Cerrar Sesión
                </button>
            </form>
        </div>
    </div>

</body>
</html>
