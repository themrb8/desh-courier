<x-app-layout>
    <x-app-layout>
        <div class="bg-white flex justify-between items-center p-4 border-b border-color-900/30">
            <div class="min-w-max">
                <a href="{{ route('home') }}" class="flex items-center">
                    <img class="mr-4" src="{{ asset('assets/img') }}/logo.svg" alt="{{ config('app.name') }}">
                    <h1 class="font-bold text-2xl">{{ config('app.name') }}</h1>
                </a>
            </div>
            <div class="w-full flex justify-end p-4">
                <input type="search" name="search" id="" class="w-[600px] bg-gray-300/30 border-none focus:outline-none  focus:border-none focus:ring-0 placeholder:text-sm placeholder:text-gray-400" placeholder="Search by anything">
                <button class="inline-block bg-primary border-none px-3 mr-12"><img
                    src="{{ asset('assets/img/search.svg') }}" alt=""></button>
                <span class="border-r-2 border-gray-900/30 mr-8"></span>
                <img src="{{asset('assets/img/notification.svg')}}" alt="notification" class="mr-4">
                <img src="{{asset('assets/img/profile.png')}}" alt="user image">
            </div>
        </div>
        {{-- section --}}
        <div class="flex">
            <div class="w-64 pt-8 border border-gray-300/30">
                <div class="flex flex-col justify-between">
                    <div class="menu ml-2 mb-8 p-4">
                        <h3 class="uppercase font-bold mb-4">Menu</h3>
                        <a href="" class="flex ml-2">
                            <img src="{{asset('assets/img/dashboard.svg')}}" alt="">
                            <span class="ml-2 text-gray-400">Dashboard</span>
                        </a>
                        <a href="{{route('shipment')}}" class="flex mt-4 ml-2">
                            <img src="{{asset('assets/img/shipment.svg')}}" alt="">
                            <span class="ml-2  text-gray-400">Shipments</span>
                        </a>
                        <a href="{{route('payment')}}" class="flex mt-4 ml-2">
                            <img src="{{asset('assets/img/card.svg')}}" alt="">
                            <span class="ml-2 text-gray-400">Payments</span>
                        </a>
                        <a href="" class="flex mt-4 ml-2">
                            <img src="{{asset('assets/img/location.svg')}}" alt="">
                            <span class="ml-2 text-gray-400">Location</span>
                        </a>
                    </div>
                    <div class="menu ml-2 mb-8 p-4">
                        <h3 class="uppercase font-bold mb-4">Organization</h3>
                        <a href="{{route('employee')}}" class="flex ml-2">
                            <img src="{{asset('assets/img/user.svg')}}" alt="">
                            <span class="ml-2 text-gray-400">Employees</span>
                        </a>
                        <a href="{{route('vehicle')}}" class="flex mt-4 ml-2">
                            <img src="{{asset('assets/img/truck.svg')}}" alt="">
                            <span class="ml-2 text-gray-400">Vehicles</span>
                        </a>
                    </div>
                    <div class="p-4 flex flex-col  justify-end">
                        <div class="pb-6 border-b border-gray-300/30">
                            <a href="{{route('profile-edit')}}" class="bg-gray-100/50 p-4 flex gap-4 mb-2.5 ml-2">
                                <img src="{{ asset('assets/img/setting.svg') }}" alt="">
                                Settings
                            </a>
                            <a href="#" class="bg-gray-100/50 p-4 flex gap-4 ml-2">
                                <img src="{{ asset('assets/img/logout.svg') }}" alt="">
                                Log Out
                            </a>
                        </div>
                        <div class="py-4 flex items-center">
                            <img src="{{asset('assets/img/profile.png')}}" alt="" class="inline-block">
                            <div class="ml-4">
                                <h3 class="font-medium">Ratul Ahmed</h3>
                                <p class="text-sm text-gray-300">Admin</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full p-8 bg-gray-50">
                <div class="bg-white py-2 px-4 w-96">
                    <div class="border-b border-gray-300/30 mb-6">
                        <div class="flex justify-between items-center m-4">
                            <div class="flex">
                                <img src="{{asset('assets/img/profile.png')}}" alt="" class="inline-block">
                                <div class="ml-4">
                                    <h3 class="font-medium">Ratul Ahmed</h3>
                                    <p class="text-sm text-gray-300">Admin</p>
                                </div>
                            </div>
                            <div class="">
                                <a href="" class="bg-primary text-white inline-block py-2 px-4 text-sm">Edit Profile</a>
                            </div>
                        </div>
                    </div>
                    <form action="" class="m-4 pb-20">
                        <div class="grid grid-cols-2 gap-6 mb-8">
                            <div class="flex flex-col border-b border-gray-300/30">
                                <label for="" class="text-gray-400 text-sm">First Name</label>
                                <input type="text" value="Ratul" class="font-medium p-0 border-none focus:border-none focus:outline-none focus:ring-0 w-full">
                            </div>
                            <div class="flex flex-col border-b border-gray-300/30">
                                <label for="" class="text-gray-400 text-sm">Last Name</label>
                                <input type="text" value="Ahmed" class="font-medium p-0 border-none focus:border-none focus:outline-none focus:ring-0 w-full">
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-6 mb-8">
                            <div class="flex flex-col border-b border-gray-300/30">
                                <label for="" class="text-gray-400 text-sm">Date of Birth</label>
                                <input type="date" value="Ratul" class="font-medium p-0 border-none focus:border-none focus:outline-none focus:ring-0 w-full">
                            </div>
                            <div class="flex flex-col border-b border-gray-300/30">
                                <label for="" class="text-gray-400 text-sm">Date of Joining</label>
                                <input type="date" value="Ahmed" class="font-medium p-0 border-none focus:border-none focus:outline-none focus:ring-0 w-full">
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-6 mb-8">
                            <div class="flex flex-col border-b border-gray-300/30">
                                <label for="" class="text-gray-400 text-sm">Mobile Number</label>
                                <input type="tel" value="01700000000" class="font-medium p-0 border-none focus:border-none focus:outline-none focus:ring-0 w-full">
                            </div>
                            <div class="flex flex-col border-b border-gray-300/30">
                                <label for="" class="text-gray-400 text-sm">Email Address</label>
                                <input type="email" value="ratul@desh.test" class="font-medium p-0 border-none focus:border-none focus:outline-none focus:ring-0 w-full">
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-6 mb-8">
                            <div class="flex flex-col border-b border-gray-300/30">
                                <label for="" class="text-gray-400 text-sm">NID Card Number</label>
                                <input type="text" value="5118284645637" class="font-medium p-0 border-none focus:border-none focus:outline-none focus:ring-0 w-full">
                            </div>
                            <div class="flex flex-col border-b border-gray-300/30">
                                <label for="" class="text-gray-400 text-sm">Profile ID Number</label>
                                <input type="text" value="#924862547" class="font-medium p-0 border-none focus:border-none focus:outline-none focus:ring-0 w-full">
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-6 mb-8">
                            <div class="flex flex-col border-b border-gray-300/30">
                                <label for="" class="text-gray-400 text-sm">Address</label>
                                <input type="text" value="Bheramara, Kushtia" class="font-medium p-0 border-none focus:border-none focus:outline-none focus:ring-0 w-full">
                            </div>
                            <div class="flex flex-col border-b border-gray-300/30">
                                <label for="" class="text-gray-400 text-sm">Hub</label>
                                <input type="text" value="Bheramara" class="font-medium p-0 border-none focus:border-none focus:outline-none focus:ring-0 w-full">
                            </div>
                        </div>

                        <button class="uppercase text-primary border w-full py-2 font-medium">See all Details</button>
                    </form>
                </div>
            </div>
        </div>
    </x-app-layout>

</x-app-layout>
