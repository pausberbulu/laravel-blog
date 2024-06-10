<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>EvelenB</title>
</head>
<body>
    <main class="w-full h-screen flex items-center justify-center">
        <div class="w-2/5 h-96 shadow-lg bg-sky-50 rounded">
            <h3 class="py-2 text-xl text-center mb-3">Login ElevenB</h3>
            @if(session('error'))
            <div class="w-3/4 mx-auto bg-red-500 p-3">
                <span>{{ session('error') }}</span>
            </div>
            @endif
            
            <form action="{{ route('check') }}" method="post">
                @csrf
            <div class="flex flex-col w-3/4 mx-auto mb-3">
                <label for="email">Email :</label>
                <input type="email" id="email" name="email" class="rounded">
            </div>
            <div class="flex flex-col w-3/4 mx-auto mb-3">
                <label for="password">Password :</label>
                <input type="password" id="password" name="password" class="rounded">
            </div>
            <button type="submit" class="w-28 h-8 block mx-auto bg-green-500">Login</button>
            </form>
        </div>
    </main>
</body>
</html>