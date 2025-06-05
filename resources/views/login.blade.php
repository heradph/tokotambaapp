<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    <title>{{ $title }}</title>
</head>

<body>
    <section class="bg-[#f5f5dc]">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <div class="w-full bg-white rounded-lg shadow  md:mt-0 sm:max-w-md xl:p-0 ">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl ">
                        Login
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="/login/submit" method="post">
                        @csrf
                        <div>
                            <label for="username" class="block mb-2 text-sm font-medium text-gray-900 ">Username</label>
                            <input type="username" name="username" id="username"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#32620e] focus:border-[#32620e] block w-full p-2.5 "
                                placeholder="username" required="">
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 ">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#32620e] focus:border-[#32620e] block w-full p-2.5 "
                                required="">
                        </div>
                        <button type="submit"
                            class="w-full text-white bg-[#32620e] hover:bg-[#498913] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Login</button>
                        <p class="text-sm font-light text-gray-500 ">
                            Don't have an account? <a href="/register"
                                class="font-medium text-[#32620e] hover:underline">Register here</a>
                        </p>
                    </form>

                    @if (session('failed'))
                        <p class=" text-red-500">{{ session('failed') }}</p>
                    @endif
                </div>
            </div>
        </div>
    </section>
</body>

</html>
