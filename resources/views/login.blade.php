<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body class="flex h-screen bg-gray-100">
    <div class="min-h-screen bg-gray-100 text-gray-800 antialiased px-4 py-6 flex flex-col justify-center sm:py-12 m-auto">
        <div class="relative py-3 sm:max-w-xl mx-auto text-center">
          <span class="text-2xl font-light">Login Admin</span>
          <div class="relative mt-4 bg-white shadow-md sm:rounded-lg text-left">
            <div class="h-2 bg-blue-400 rounded-t-md"></div>
            <div class="py-6 px-8">
                <form action="">
                <label class="block font-semibold">Username<label>
                    <div class="flex justify-between w-full mb-4 relative rounded border-b-2 border-blue-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 pb-1 absolute bottom-0 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        <input type="text" placeholder="Email" class="w-full h-5 px-3 py-5 ml-5 mt-2 hover:outline-none focus:outline-none  rounded-md" autofocus required>
                    </div>
                <label class="block mt-3 font-semibold">Password<label>
                <input type="password" placeholder="Password" class=" border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-1 focus:ring-indigo-600 rounded-md" required>
                <div class="flex justify-between items-baseline">
                    <button class="mt-6 bg-blue-500 text-white py-2 px-6 rounded-lg" type="submit">Login <svg xmlns="http://www.w3.org/2000/svg" class="inline-block w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                      </svg></button>
                    {{-- forgot password button --}}
                    {{-- <a href="#" class="text-sm hover:underline">Forgot password?</a> --}}
                </div>
            </form>
            </div>
          </div>
        </div>
      </div>
   
</body>
</html>