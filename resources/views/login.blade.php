<!DOCTYPE html>
<html lang>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body class="flex items-center justify-center px-[120px] min-h-screen">
    <div class="flex flex-col border-black border p-5">
        <img src="{{ asset('images/logo.png') }}" class="max-w-[150px] max-h-[63px]">
        <form class="flex flex-col gap-5">
            <div class="flex flex-col gap-3">
                <label>Email :</label>
                <input type="text" name="email" placeholder="Masukan email" class="border-black border">
            </div>
            <div class="flex flex-col gap-3">
                <label>password :</label>
                <input type="password" name="password" placeholder="Masukan password" class="border-black border">
            </div>
            <button class="w-full bg-blue-300">Submit</button>
        </form>
    </div>
</body>
</html>
