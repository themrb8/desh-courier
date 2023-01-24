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
                        <img src="{{asset('assets/img/active-truck.svg')}}" alt="">
                        <span class="ml-2 text-primary font-bold">Vehicles</span>
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
            <div class="flex justify-between items-center">
                <div>
                    <h3 class="font-bold text-xl">Vehicles</h3>
                    <p class="text-sm text-gray-500 mt-1">19 Vehicles Found</p>
                </div>
                <div class="min-w-width flex gap-4 items-center">
                    <p class="text-gray-500">Sort By:-</p>
                    <div class="flex bg-white border border-gray-300/30">
                        <img src="{{asset('assets/img/paper.svg')}}" alt="" class="pl-2">
                        <select name="" id="" class="border-none focus:outline-none focus:border-none focus:ring-0">
                            <option value="">All Orders</option>
                        </select>
                    </div>
                    <div class="flex bg-white border border-gray-300/30">
                        <img src="{{asset('assets/img/calendar.svg')}}" alt="" class="pl-2">
                        <select name="" id="" class="border-none focus:outline-none focus:border-none focus:ring-0">
                            <option value="">June</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="w-full mt-8">
                <table class="w-full text-left border-separate border-spacing-y-3">
                    <thead class="py-6">
                      <tr class="bg-primary text-white">
                        <th class="font-medium text-left py-2 px-4">Booking ID</th>
                        <th class="font-medium text-left py-2 px-4">Driver Name</th>
                        <th class="font-medium text-left py-2 px-4">Driver ID</th>
                        <th class="font-medium text-left py-2 px-4">Type</th>
                        <th class="font-medium text-left py-2 px-4">Hub</th>
                        <th class="font-medium text-left py-2 px-4">Status</th>
                      </tr>
                    </thead>
                    <tbody class="bg-white gap-4">
                      <tr>
                        <td class="py-2 px-4">126802736</td>
                        <td class="py-2 px-4">Ratul Ahmed</td>
                        <td class="py-2 px-4">#834002736</td>
                        <td class="py-2 px-4">Bike</td>
                        <td class="py-2 px-4">Bheramara</td>
                        <td class="py-2 px-4">
                            <div class="flex justify-between">
                                <div class="flex border border-green-100 p-1 text-sm text-green-400">
                                    <img src="{{asset('assets/img/tick-square.svg')}}" alt="" class="mr-1"> Active
                                </div>
                                <img src="{{asset('assets/img/3more.svg')}}" alt="" class="ml-4">
                            </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="py-2 px-4">126802736</td>
                        <td class="py-2 px-4">Ratul Ahmed</td>
                        <td class="py-2 px-4">#834002736</td>
                        <td class="py-2 px-4">Bike</td>
                        <td class="py-2 px-4">Bheramara</td>
                        <td class="py-2 px-4">
                            <div class="flex justify-between">
                                <div class="flex border border-green-100 p-1 text-sm text-green-400">
                                    <img src="{{asset('assets/img/tick-square.svg')}}" alt="" class="mr-1"> Active
                                </div>
                                <img src="{{asset('assets/img/3more.svg')}}" alt="" class="ml-4">
                            </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="py-2 px-4">126802736</td>
                        <td class="py-2 px-4">Ratul Ahmed</td>
                        <td class="py-2 px-4">#834002736</td>
                        <td class="py-2 px-4">Bike</td>
                        <td class="py-2 px-4">Bheramara</td>
                        <td class="py-2 px-4">
                            <div class="flex justify-between">
                                <div class="flex border border-red-100 p-1 text-sm text-red-500">
                                    <img src="{{asset('assets/img/close-square.svg')}}" alt="" class="mr-1"> Inactive
                                </div>
                                <img src="{{asset('assets/img/3more.svg')}}" alt="" class="ml-4">
                            </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="py-2 px-4">126802736</td>
                        <td class="py-2 px-4">Ratul Ahmed</td>
                        <td class="py-2 px-4">#834002736</td>
                        <td class="py-2 px-4">Bike</td>
                        <td class="py-2 px-4">Bheramara</td>
                        <td class="py-2 px-4">
                            <div class="flex justify-between">
                                <div class="flex border border-green-100 p-1 text-sm text-green-400">
                                    <img src="{{asset('assets/img/tick-square.svg')}}" alt="" class="mr-1"> Active
                                </div>
                                <img src="{{asset('assets/img/3more.svg')}}" alt="" class="ml-4">
                            </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="py-2 px-4">126802736</td>
                        <td class="py-2 px-4">Ratul Ahmed</td>
                        <td class="py-2 px-4">#834002736</td>
                        <td class="py-2 px-4">Bike</td>
                        <td class="py-2 px-4">Bheramara</td>
                        <td class="py-2 px-4">
                            <div class="flex justify-between">
                                <div class="flex border border-green-100 p-1 text-sm text-green-400">
                                    <img src="{{asset('assets/img/tick-square.svg')}}" alt="" class="mr-1"> Active
                                </div>
                                <img src="{{asset('assets/img/3more.svg')}}" alt="" class="ml-4">
                            </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="py-2 px-4">126802736</td>
                        <td class="py-2 px-4">Ratul Ahmed</td>
                        <td class="py-2 px-4">#834002736</td>
                        <td class="py-2 px-4">Cycle</td>
                        <td class="py-2 px-4">Bheramara</td>
                        <td class="py-2 px-4">
                            <div class="flex justify-between">
                                <div class="flex border border-green-100 p-1 text-sm text-green-400">
                                    <img src="{{asset('assets/img/tick-square.svg')}}" alt="" class="mr-1"> Active
                                </div>
                                <img src="{{asset('assets/img/3more.svg')}}" alt="" class="ml-4">
                            </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="py-2 px-4">126802736</td>
                        <td class="py-2 px-4">Ratul Ahmed</td>
                        <td class="py-2 px-4">#834002736</td>
                        <td class="py-2 px-4">Bike</td>
                        <td class="py-2 px-4">Bheramara</td>
                        <td class="py-2 px-4">
                            <div class="flex justify-between">
                                <div class="flex border border-green-100 p-1 text-sm text-green-400">
                                    <img src="{{asset('assets/img/tick-square.svg')}}" alt="" class="mr-1"> Active
                                </div>
                                <img src="{{asset('assets/img/3more.svg')}}" alt="" class="ml-4">
                            </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="py-2 px-4">126802736</td>
                        <td class="py-2 px-4">Ratul Ahmed</td>
                        <td class="py-2 px-4">#834002736</td>
                        <td class="py-2 px-4">Bike</td>
                        <td class="py-2 px-4">Bheramara</td>
                        <td class="py-2 px-4">
                            <div class="flex justify-between">
                                <div class="flex border border-green-100 p-1 text-sm text-green-400">
                                    <img src="{{asset('assets/img/tick-square.svg')}}" alt="" class="mr-1"> Active
                                </div>
                                <img src="{{asset('assets/img/3more.svg')}}" alt="" class="ml-4">
                            </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="py-2 px-4">126802736</td>
                        <td class="py-2 px-4">Ratul Ahmed</td>
                        <td class="py-2 px-4">#834002736</td>
                        <td class="py-2 px-4">Truck</td>
                        <td class="py-2 px-4">Bheramara</td>
                        <td class="py-2 px-4">
                            <div class="flex justify-between">
                                <div class="flex border border-green-100 p-1 text-sm text-green-400">
                                    <img src="{{asset('assets/img/tick-square.svg')}}" alt="" class="mr-1"> Active
                                </div>
                                <img src="{{asset('assets/img/3more.svg')}}" alt="" class="ml-4">
                            </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="py-2 px-4">126802736</td>
                        <td class="py-2 px-4">Ratul Ahmed</td>
                        <td class="py-2 px-4">#834002736</td>
                        <td class="py-2 px-4">Bike</td>
                        <td class="py-2 px-4">Bheramara</td>
                        <td class="py-2 px-4">
                            <div class="flex justify-between">
                                <div class="flex border border-green-100 p-1 text-sm text-green-400">
                                    <img src="{{asset('assets/img/tick-square.svg')}}" alt="" class="mr-1"> Active
                                </div>
                                <img src="{{asset('assets/img/3more.svg')}}" alt="" class="ml-4">
                            </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="py-2 px-4">126802736</td>
                        <td class="py-2 px-4">Ratul Ahmed</td>
                        <td class="py-2 px-4">#834002736</td>
                        <td class="py-2 px-4">Bike</td>
                        <td class="py-2 px-4">Bheramara</td>
                        <td class="py-2 px-4">
                            <div class="flex justify-between">
                                <div class="flex border border-green-100 p-1 text-sm text-green-400">
                                    <img src="{{asset('assets/img/tick-square.svg')}}" alt="" class="mr-1"> Active
                                </div>
                                <img src="{{asset('assets/img/3more.svg')}}" alt="" class="ml-4">
                            </div>
                        </td>
                      </tr>

                    </tbody>
                </table>
            </div>
            <div class="flex justify-between items-center">
                <div>
                    <p class="text-sm text-gray-500 mt-1">Showing Results 10 of 109</p>
                </div>
                <div class="min-w-width flex gap-2 items-center">
                    <button class="w-8 h-8 bg-white flex items-center justify-center -rotate-180"><img src="{{asset('assets/img/arrow-right.svg')}}" alt=""></button>
                    <p
                    class="w-8 h-8 bg-white border border-gray-100 flex items-center justify-center text-primary text-xs font-bold">
                    10</p>
                <p class="text-xs text-gray-600">of <span class="text-gray-900 ">128</span></p>
                    <button class="w-8 h-8 bg-white flex items-center justify-center"><img src="{{asset('assets/img/arrow-right.svg')}}" alt=""></button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
