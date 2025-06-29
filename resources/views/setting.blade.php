@extends('layouts.app')

@section('page-title','Setting')

@section('content')
    <div class="rounded-xl p-6 bg-white">
        <div x-data="{ tab: 'profile' }" class="space-y-6">
            <ul class="flex justify-between lg:justify-start space-x-8 border-b border-gray-200 mb-8">
                <li>
                    <button
                        @click="tab = 'profile'"
                        :class="tab==='profile' ? 'text-[#2D60FF] border-b-2 border-[#2D60FF] pb-2' : 'text-gray-400 pb-2'"
                        class="font-semibold px-2 lg:px-4">
                        Edit Profile
                    </button>
                </li>
                <li>
                    <button
                        @click="tab = 'preferences'"
                        :class="tab==='preferences' ? 'text-[#2D60FF] border-b-2 border-[#2D60FF] pb-2' : 'text-gray-400 pb-2'"
                        class="font-semibold px-2 lg:px-4">
                        Preferences
                    </button>
                </li>
                <li>
                    <button
                        @click="tab = 'security'"
                        :class="tab==='security' ? 'text-[#2D60FF] border-b-2 border-[#2D60FF] pb-2' : 'text-gray-400 pb-2'"
                        class="font-semibold px-2 lg:px-4">
                        Security
                    </button>
                </li>
            </ul>

            <div>
                <div x-show="tab==='profile'" x-cloak class="space-y-6">
                    <form>
                        <div class="flex flex-col md:flex-row gap-8 items-start">
                            <div class="flex justify-center md:justify-start w-full md:w-fit md:pr-10">
                                <div class="relative w-32 h-32">
                                    <img src="{{ asset('images/user.png') }}"
                                         alt="Avatar"
                                         class="rounded-full w-full h-full object-cover"/>
                                    <button type="button"
                                            class="absolute bottom-0 right-0 bg-[#1814F3] text-white p-2 rounded-full">
                                        {!! file_get_contents(public_path('icons/pencil.svg')) !!}
                                    </button>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 w-full">
                                <div class="space-y-1">
                                    <label class="block text-gray-700">Your Name</label>
                                    <input type="text" value="Charlene Reed"
                                           class="w-full bg-white border border-[#E6EFF5] rounded-2xl px-4 py-3 text-[#718EBF]"/>
                                </div>
                                <div class="space-y-1">
                                    <label class="block text-gray-700">User Name</label>
                                    <input type="text" value="charlener"
                                           class="w-full bg-white border border-[#E6EFF5] rounded-2xl px-4 py-3 text-[#718EBF]"/>
                                </div>
                                <div class="space-y-1">
                                    <label class="block text-gray-700">Email</label>
                                    <input type="email" value="charlenereed@gmail.com"
                                           class="w-full bg-white border border-[#E6EFF5] rounded-2xl px-4 py-3 text-[#718EBF]"/>
                                </div>
                                <div class="space-y-1">
                                    <label class="block text-gray-700">Password</label>
                                    <input type="password" value="password123"
                                           class="w-full bg-white border border-[#E6EFF5] rounded-2xl px-4 py-3 text-[#718EBF]"/>
                                </div>
                                <div class="space-y-1">
                                    <label class="block text-gray-700">Date of Birth</label>
                                    <select
                                        class="w-full bg-white border border-[#E6EFF5] rounded-2xl px-4 py-3 text-[#718EBF]">
                                        <option>25 January 1990</option>
                                    </select>
                                </div>
                                <div class="space-y-1">
                                    <label class="block text-gray-700">Present Address</label>
                                    <input type="text" value="San Jose, California, USA"
                                           class="w-full bg-white border border-[#E6EFF5] rounded-2xl px-4 py-3 text-[#718EBF]"/>
                                </div>
                                <div class="space-y-1">
                                    <label class="block text-gray-700">Permanent Address</label>
                                    <input type="text" value="San Jose, California, USA"
                                           class="w-full bg-white border border-[#E6EFF5] rounded-2xl px-4 py-3 text-[#718EBF]"/>
                                </div>
                                <div class="space-y-1">
                                    <label class="block text-gray-700">City</label>
                                    <input type="text" value="San Jose"
                                           class="w-full bg-white border border-[#E6EFF5] rounded-2xl px-4 py-3 text-[#718EBF]"/>
                                </div>
                                <div class="space-y-1">
                                    <label class="block text-gray-700">Postal Code</label>
                                    <input type="text" value="45962"
                                           class="w-full bg-white border border-[#E6EFF5] rounded-2xl px-4 py-3 text-[#718EBF]"/>
                                </div>
                                <div class="space-y-1">
                                    <label class="block text-gray-700">Country</label>
                                    <input type="text" value="USA"
                                           class="w-full bg-white border border-[#E6EFF5] rounded-2xl px-4 py-3 text-[#718EBF]"/>
                                </div>
                            </div>
                        </div>

                        <div class="text-right">
                            <button type="submit"
                                    class="mt-6 px-8 py-2 bg-[#1814F3] text-white font-semibold rounded-lg">
                                Save
                            </button>
                        </div>
                    </form>
                </div>

                <div x-show="tab==='preferences'" x-cloak>
                    <form>
                        <div class="flex flex-col gap-8 items-start">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 w-full">
                                <div class="space-y-1">
                                    <label class="block text-gray-700">Currency</label>
                                    <input type="text" value="USD"
                                           class="w-full bg-white border border-[#E6EFF5] rounded-2xl px-4 py-3 text-[#718EBF]"/>
                                </div>
                                <div class="space-y-1">
                                    <label class="block text-gray-700">Time Zone</label>
                                    <input type="text" value="(GMT-12:00) International Date Line West"
                                           class="w-full bg-white border border-[#E6EFF5] rounded-2xl px-4 py-3 text-[#718EBF]"/>
                                </div>
                            </div>
                            <div class="space-y-5 mb-8">
                                <h3 class="text-[#333B69] font-semibold">Notification</h3>
                                <div class="flex items-center gap-3">
                                    <label class="inline-flex items-center cursor-pointer">
                                        <input type="checkbox" value="" class="sr-only peer" checked>
                                        <div
                                            class="relative w-11 h-6 bg-gray-200 rounded-full peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-[#16DBCC]"></div>
                                        <span class="ms-3 text-sm font-medium text-[#343C6A]">I send or receive digital currency</span>
                                    </label>
                                </div>

                                <div class="flex items-center gap-3">
                                    <label class="inline-flex items-center cursor-pointer">
                                        <input type="checkbox" value="" class="sr-only peer">
                                        <div
                                            class="relative w-11 h-6 bg-gray-200 rounded-full peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-[#16DBCC]"></div>
                                        <span
                                            class="ms-3 text-sm font-medium text-[#343C6A]">I receive merchant order</span>
                                    </label>
                                </div>

                                <div class="flex items-center gap-3">
                                    <label class="inline-flex items-center cursor-pointer">
                                        <input type="checkbox" value="" class="sr-only peer" checked>
                                        <div
                                            class="relative w-11 h-6 bg-gray-200 rounded-full peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-[#16DBCC]"></div>
                                        <span class="ms-3 text-sm font-medium text-[#343C6A]">There are recommendation for my account</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="text-right">
                            <button type="submit"
                                    class="mt-6 px-8 py-2 bg-[#1814F3] text-white font-semibold rounded-lg">
                                Save
                            </button>
                        </div>
                    </form>
                </div>

                <div x-show="tab==='security'" x-cloak>
                    <form>
                        <div class="flex flex-col gap-8 items-start">
                            <div class="space-y-5">
                                <h3 class="text-[#333B69] font-semibold">Two-Factor Authentication</h3>
                                <div class="flex items-center gap-3">
                                    <label class="inline-flex items-center cursor-pointer">
                                        <input type="checkbox" value="" class="sr-only peer" checked>
                                        <div
                                            class="relative w-11 h-6 bg-gray-200 rounded-full peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-[#16DBCC]"></div>
                                        <span class="ms-3 text-sm font-medium text-[#343C6A]">Enable or disable two factor authentication</span>
                                    </label>
                                </div>
                            </div>
                            <div class="space-y-5">
                                <h3 class="text-[#333B69] font-semibold">Change Password</h3>
                                <div class="grid grid-cols-1 md:grid-cols-1 gap-6 w-full">
                                    <div class="space-y-1">
                                        <label class="block text-gray-700">Current Password</label>
                                        <input type="password" value="password123"
                                               class="w-full bg-white border border-[#E6EFF5] rounded-2xl px-4 py-3 text-[#718EBF]"/>
                                    </div>
                                    <div class="space-y-1">
                                        <label class="block text-gray-700">New Password</label>
                                        <input type="password" value="password123"
                                               class="w-full bg-white border border-[#E6EFF5] rounded-2xl px-4 py-3 text-[#718EBF]"/>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="text-right">
                            <button type="submit"
                                    class="mt-6 px-8 py-2 bg-[#1814F3] text-white font-semibold rounded-lg">
                                Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
