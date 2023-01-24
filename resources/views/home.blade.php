<x-guest-layout>
    <div class="h-screen relative bg-[url('../../public/assets/img/hero-bg-right.png')] bg-no-repeat bg-right-top">
        {{-- header --}}
    <div class="bg-white flex justify-between items-center p-4 border-b border-color-900/30">
        <div class="min-w-max">
            <a href="{{ route('home') }}" class="flex items-center">
                <img class="mr-4" src="{{ asset('assets/img') }}/logo.svg" alt="{{ config('app.name') }}">
                <h1 class="font-bold text-2xl">{{ config('app.name') }}</h1>
            </a>
        </div>
        <div class="w-full flex justify-end p-4">
            <a href="" class="inline-block ml-10 text-gray-500/30">Contact</a>
            <a href="" class="inline-block ml-10 text-gray-500/30">Help</a>
            <a href="" class="inline-block ml-10 text-gray-500/30">Website</a>
            <a href="" class="inline-block ml-10 text-primary font-medium">Login</a>
        </div>
    </div>
    {{-- hero-section --}}
    <div class="flex bg-no-repeat bg-right-top items-center">
        <div class="flex-1 ">
            <img  class="absolute bottom-0 md:w-[35%]" src="{{ asset('assets/img') }}/hero-bg-left.png" alt="">
        </div>

        <div class="flex-1 py-10 flex justify-center items-center">
            <div class="dc-login-box bg-white p-10 shadow mt-10">
                <h3 class="text-lg  font-medium mb-1">Welcome Back!</h3>
                <p>Log in your account & Manage your system</p>
                <form action="{{route('shipment')}}" class="mt-12" method="GET">
                    <div class="border-b border-color-900/30 flex items-center mb-10">
                        <div class="min-w-max mr-3">
                            <img src="{{ asset('assets') }}/img/Profile.svg" alt="">
                        </div>
                        <input type="email" name="" id="" placeholder="Email"
                            class="w-full border-none p-3 focus:outline-none focus:border-none focus:ring-0">
                    </div>
                    <label for="" class="text-sm">Password</label>
                    <div class="border-b border-color-900/30 flex items-center mb-4">
                        <div class="min-w-max mr-3">
                            <img src="{{ asset('assets') }}/img/Lock.svg" alt="">
                        </div>
                        <input type="password" name="" id="" placeholder="Password"
                            class="w-full p-3 border-none focus:outline-none focus:border-none focus:ring-0">
                        <div class="min-w-max mr-3">
                            <img src="{{ asset('assets') }}/img/Hide.svg" alt="">
                        </div>
                    </div>
                    <a href="" class="italic text-sm text-gray-300">Forgot Password?</a>
                    <div class="flex justify-between mt-8">
                        <span class="font-semibold text-gray-600">Save Password</span>
                        <div class="min-w-max mr-3">
                            <img src="{{ asset('assets') }}/img/Hide.svg" alt="">
                        </div>
                    </div>

                    <button class="uppercase bg-primary text-white font-medium w-full py-4 mt-6">Log In</button>
                </form>
            </div>
        </div>
    </div>
    </div>
</x-guest-layout>
