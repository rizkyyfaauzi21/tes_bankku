<header class="hidden md:flex items-center justify-between bg-white px-3 lg:px-6 py-4 border-b border-[#E6EFF5]">
    <h1 class="text-xl lg:text-2xl font-semibold text-[#343C6A]">@yield('page-title','Title')</h1>

    <div class="flex items-center gap-2 lg:gap-5">
        <div class="relative w-full">
            <input type="text"
                   placeholder="Search for something"
                   class="pl-12 pr-4 lg:pr-8 py-2 text-sm lg:text-md text-[#718EBF] bg-[#F5F7FA] rounded-full p-2 w-[220px] lg:w-[280px] h-full placeholder:text-[#718EBF]"/>
            <div class="absolute left-4 top-2 w-4 h-4 text-[#718EBF] flex items-center justify-between">
                {!! file_get_contents(public_path('icons/search.svg')) !!}
            </div>
        </div>

        <a href="{{ route('setting') }}"
           class="w-8 h-8 text-[#718EBF] transition bg-[#F5F7FA] rounded-full p-2 flex items-center justify-between">
            {!! file_get_contents(public_path('icons/setting.svg')) !!}
        </a>

        <div
            class="w-8 h-8 text-[#FE5C73] transition bg-[#F5F7FA] rounded-full p-2 flex items-center justify-between">
            {!! file_get_contents(public_path('icons/notification.svg')) !!}
        </div>

        <img src="{{ asset('images/user.png') }}" alt="User Avatar" class="h-10 w-10 rounded-full object-cover"/>
    </div>
</header>
