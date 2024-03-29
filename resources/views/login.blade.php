<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="favicon.ico">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>School Project</title>
</head>
<body>
    
  <div class="w-full h-screen flex bg-blue-800">
    <div class="flex-auto w-2/5 hidden lg:grid lg:place-items-center">
      <div id="illustrations" class="max-w-[300px] xl:max-w-[350px] h-auto flex justify-center items-center overflow-hidden transition-all">
        <div class="flex-1 flex w-fit h-auto items-center gap-3">
          <div id="team" class="w-72 xl:w-[350px]">
            <img src="img/team.svg" alt="relationship ilustration" class="w-full h-full object-contain">
            <p class="mt-4 text-center text-slate-300/90 font-medium text-lg">
              "Make new friends, broaden relationships"
            </p>
          </div>
          <div id="docs" class="w-72 xl:w-[350px]">
            <img src="img/docs.svg" alt="document ilustration" loading="eager" class="w-full h-full object-contain">
            <p class="mt-4 text-center text-slate-300/90 font-medium text-lg">
              "Get a variety of interesting materials from us"
            </p>
          </div>
          <div id="math" class="w-72 xl:w-[350px]">
            <img src="img/math.svg" alt="school ilustration" class="w-full h-full object-contain">
            <p class="mt-4 text-center text-slate-300/90 font-medium text-lg">
              "Solve various problems using our reliable formula"
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="flex-auto lg:w-3/5 grid place-items-center bg-transparent lg:bg-white relative">
      <div class="w-full h-full rounded-none sm:shadow-2xl lg:shadow-none sm:w-2/3 md:w-1/2 lg:w-3/5 xl:w-1/2 px-3 py-5 sm:h-auto sm:px-5 sm:py-7 sm:rounded-lg text-center pt-24 flex flex-col sm:justify-center gap-2 sm:gap-4 bg-white overflow-hidden">
        <h1 class="text-2xl sm:text-3xl font-extrabold bg-gradient-to-br from-blue-500 to-blue-700 bg-clip-text text-transparent">School Project</h1>
        <div class="text-slate-600">
          <h2 class="text-base sm:text-xl font-medium text-slate-700">Hello there!</h2>
          <p class="text-xs">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, sint?
          </p>
        </div>
        <!-- login -->
        <form id="login" action="" class="w-full space-y-3 text-left">
          <div class="">
            <label for="email" class="pl-1 text-blue-700 font-medium text-sm sm:text-base">Email</label>
            <input type="email" name="email" id="email" require placeholder="Input email" class="w-full px-4 py-2 sm:py-2.5 bg-slate-200/70 text-slate-700 rounded-md text-sm sm:text-base font-medium active:outline-none active:ring-1 active:ring-blue-700 focus:outline-none focus:ring-1 focus:ring-blue-700 caret-blue-700 placeholder:text-sm sm:placeholder:text-base placeholder:font-normal placeholder:text-slate-400">
          </div>
          <div class="flex flex-col">
            <label for="password" class="pl-1 text-blue-700 font-medium text-sm sm:text-base">Password</label>
            <input type="password" name="password" id="password" require placeholder="Input password" class="w-full px-4 py-2 sm:py-2.5 bg-slate-200/70 text-slate-700 rounded-md text-sm sm:text-base font-medium active:outline-none active:ring-1 active:ring-blue-700 focus:outline-none focus:ring-1 focus:ring-blue-700 caret-blue-700 placeholder:text-sm sm:placeholder:text-base placeholder:font-normal placeholder:text-slate-400">
            <span class="ml-auto mt-px text-xs text-slate-700 cursor-pointer hover:underline">Forgot Password?</span>
          </div>
          <button type="submit" class="w-full py-2.5 sm:py-3 bg-blue-700 text-sm sm:text-base text-center font-semibold text-white rounded-md hover:bg-blue-600 active:bg-blue-900">Login</button>
          <div id="divider" class="py-0 sm:py-1 flex items-end">
            <div class="w-full h-px my-2 bg-slate-600"></div>
            <div class="mx-3 text-sm text-slate-700">or</div>
            <div class="w-full h-px my-2 bg-slate-600"></div>
          </div>
          <div id="form-google" class="w-full py-2.5 sm:py-3 flex justify-center items-center gap-2 bg-white text-sm sm:text-base text-center font-semibold text-blue-700 border border-blue-700 rounded-md hover:bg-slate-50 active:bg-slate-100 cursor-pointer select-none">
            <img src="img\google.png" alt="google" loading="eager" class="w-5 object-contain hover:border-1 hover:border-white">
            Login with Google
          </div>
        </form>
      </div>
      <div id="sc" class="absolute bottom-2 w-full justify-center gap-1 text-center text-sm sm:w-auto sm:text-base text-slate-400 sm:text-slate-300 lg:text-slate-600">
        Don't have an account?
        <a href="/register" class="text-slate-700 sm:text-white lg:text-blue-700 hover:underline cursor-pointer"> Register!</a>
      </div>
    </div>
  </div>

  <script type="text/javascript">
    // input focus
    const input = document.querySelectorAll('input');
    input.forEach((e) => {
      e.addEventListener('input', () => {
        e.value !== '' ? e.classList.add('ring-1', 'ring-blue-700') : e.classList.remove('ring-1', 'ring-blue-700');
      })
    })

  </script>
</body>
</html>