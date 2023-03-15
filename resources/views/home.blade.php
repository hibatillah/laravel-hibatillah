<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
    
    <div class="w-full h-screen grid grid-cols-2">
        <div class="col-span-1 bg-blue-800">

        </div>
        <div class="col-span-1 grid place-items-center">
            <div class="w-2/3 text-center space-y-4">
                <h1 class="text-3xl font-extrabold bg-gradient-to-br from-blue-500 to-blue-700 bg-clip-text text-transparent">School Project</h1>
                <div class="text-slate-600">
                    <h2 class="text-xl font-medium text-slate-700">Hello there!</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, sint?
                    </p>
                </div>
                <form action="" class="text-left space-y-2">
                    <div class="">
                        <label for="email" class="pl-1 text-blue-700 font-medium">Email</label>
                        <input type="email" name="email" id="email" class="w-full px-3 py-3 bg-slate-200 text-slate-800 rounded-md font-medium active:outline-none active:ring-1 active:ring-blue-700 focus:outline-none focus:ring-1 focus:ring-blue-700 caret-blue-700">

                    </div>
                    <div class="">
                        <label for="password" class="pl-1 text-blue-700 font-medium">Password</label>
                        <input type="password" name="password" id="password" class="w-full px-3 py-3 bg-slate-200 text-slate-800 rounded-md font-medium active:outline-none active:ring-1 active:ring-blue-700 focus:outline-none focus:ring-1 focus:ring-blue-700 caret-blue-700">
                        <div class="text-right text-sm text-blue-700 cursor-pointer hover:underline">Forgot Password?</div>
                    </div>
                    <button type="submit" class="w-full py-3 bg-blue-700 text-center font-semibold text-white rounded-md hover:bg-blue-600 active:bg-blue-900">Login</button>
                </form>
                <div class="w-full py-3 flex justify-center items-center gap-2 bg-white text-center font-semibold text-blue-700 border border-blue-700 rounded-md hover:bg-slate-50 active:bg-slate-100 cursor-pointer select-none">
                    <img src="img/google.png" alt="google" class="w-5 object-contain hover:border-1 hover:border-white">
                    Login dengan Google
                </div>
            </div>
        </div>
    </div>

</body>
</html>