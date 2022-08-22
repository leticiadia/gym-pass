<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="/css/style.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>GymPass</title>
</head>

<body class="bg-zinc-800">
  <nav class="flex items-center justify-between flex-wrap p-4">
    <div class="flex items-center flex-shrink-0 text-white mr-6">
      <a href="/" class="font-semibold text-xl text-transparent tracking-tight text-white bg-clip-text bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500">GymPass</a>
    </div>
  </nav>

  <main>
    @yield('content')
  </main>
</body>

</html>