<aside class="hidden md:block w-52 lg:w-64 bg-white border-r border-[#E6EFF5] h-screen">
    <div class="p-6">
        <img src="{{ asset('images/logo.png') }}" alt="Bankku Logo" class="h-8 mx-auto"/>
    </div>

    @php
        $current = Route::currentRouteName();
    @endphp

    <ul class="space-y-2 text-md">
        @foreach([
            ['route' => 'dashboard', 'label' => 'Dashboard', 'icon' => 'home'],
            ['route' => 'transactions', 'label' => 'Transactions', 'icon' => 'transaction'],
            ['route' => 'accounts', 'label' => 'Accounts', 'icon' => 'user'],
            ['route' => 'investments', 'label' => 'Investments', 'icon' => 'investment'],
            ['route' => 'credit-cards', 'label' => 'Credit Cards', 'icon' => 'card'],
            ['route' => 'loans', 'label' => 'Loans', 'icon' => 'loans'],
            ['route' => 'services', 'label' => 'Services', 'icon' => 'service'],
            ['route' => 'privileges', 'label' => 'My Privileges', 'icon' => 'privilege'],
            ['route' => 'setting', 'label' => 'Setting', 'icon' => 'setting'],
        ] as $item)
            @php
                $active = $current === $item['route'];
            @endphp
            <li>
                <a href="{{ route($item['route']) }}"
                   class="flex items-center gap-4 lg:gap-5 px-6 py-2 lg:py-3 relative
                          {{ $active ? 'border-[#2D60FF] text-[#2D60FF]' : 'border-transparent text-[#B1B1B1]' }}
                          hover:text-[#2D60FF] transition-colors duration-150">
                    @if ($active)
                        <span
                            class="absolute left-0">{!! file_get_contents(public_path('icons/activebar.svg')) !!}</span>
                    @endif
                    <span
                        class="h-5 w-5">{!! file_get_contents(public_path('icons/' . $item['icon'] . '.svg')) !!}</span>
                    <span>{{ $item['label'] }}</span>
                </a>
            </li>
        @endforeach
    </ul>
</aside>
