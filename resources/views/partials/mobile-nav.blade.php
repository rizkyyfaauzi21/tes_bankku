<nav class="md:hidden bg-white border-b border-[#E6EFF5] fixed top-0 w-full z-50 p-4">
    <div class="flex items-center justify-between py-4">
        <div id="mobile-menu-toggle" class="w-10 h-10 text-[#343C6A] flex items-center justify-between cursor-pointer">
            {!! file_get_contents(public_path('icons/bar.svg')) !!}
        </div>

        <h1 class="text-lg font-semibold text-[#343C6A]">@yield('page-title','Overview')</h1>

        <img src="{{ asset('images/user.png') }}" alt="User Avatar"
             class="h-10 w-10 rounded-full object-cover"/>
    </div>

    <div class="my-1 relative">
        <input type="text" placeholder="Search for something"
               class="pl-12 pr-4 py-3 text-sm text-[#718EBF] bg-[#F5F7FA] rounded-full w-full placeholder:text-[#718EBF]"/>
        <div class="absolute left-4 top-3 w-4 h-4 text-[#718EBF]">
            {!! file_get_contents(public_path('icons/search.svg')) !!}
        </div>
    </div>

    <div id="mobile-menu-overlay"
         class="fixed inset-0 bg-black bg-opacity-50 z-40 hidden opacity-0 transition-opacity duration-300"></div>

    <div id="mobile-menu"
         class="fixed top-0 left-0 h-screen w-64 bg-white z-50 transform -translate-x-full transition-transform duration-300">
        <div class="p-6">
            @php
                $current = Route::currentRouteName();
                $navItems = [
                    ['route' => 'dashboard', 'label' => 'Dashboard'],
                    ['route' => 'transactions', 'label' => 'Transactions'],
                    ['route' => 'accounts', 'label' => 'Accounts'],
                    ['route' => 'investments', 'label' => 'Investments'],
                    ['route' => 'credit-cards', 'label' => 'Credit Cards'],
                    ['route' => 'loans', 'label' => 'Loans'],
                    ['route' => 'services', 'label' => 'Services'],
                    ['route' => 'privileges', 'label' => 'My Privileges'],
                    ['route' => 'setting', 'label' => 'Setting'],
                ];
            @endphp

            <ul class="space-y-4 text-md">
                @foreach($navItems as $item)
                    @php
                        $active = $current === $item['route'];
                    @endphp
                    <li>
                        <a href="{{ route($item['route']) }}"
                           class="mobile-menu-link block px-4 py-2 rounded
                                  {{ $active ? 'text-[#2D60FF] font-semibold' : 'text-[#343C6A]' }}
                                  hover:bg-[#F5F7FA] hover:text-[#2D60FF] transition-colors duration-150">
                            <span>{{ $item['label'] }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const toggleButton = document.getElementById('mobile-menu-toggle');
            const mobileMenu = document.getElementById('mobile-menu');
            const overlay = document.getElementById('mobile-menu-overlay');
            const menuLinks = document.querySelectorAll('.mobile-menu-link');

            function openMenu() {
                mobileMenu.classList.remove('-translate-x-full');
                mobileMenu.classList.add('translate-x-0');
                overlay.classList.remove('hidden');
                setTimeout(() => {
                    overlay.classList.add('opacity-100');
                }, 10);
            }

            function closeMenu() {
                mobileMenu.classList.remove('translate-x-0');
                mobileMenu.classList.add('-translate-x-full');
                overlay.classList.remove('opacity-100');
                setTimeout(() => {
                    overlay.classList.add('hidden');
                }, 300);
            }

            toggleButton.addEventListener('click', function (event) {
                event.stopPropagation();
                if (mobileMenu.classList.contains('-translate-x-full')) {
                    openMenu();
                } else {
                    closeMenu();
                }
            });

            overlay.addEventListener('click', closeMenu);

            menuLinks.forEach(link => {
                link.addEventListener('click', closeMenu);
            });

            document.addEventListener('click', function (event) {
                const isClickInsideMenu = mobileMenu.contains(event.target);
                const isClickOnToggleButton = toggleButton.contains(event.target);

                if (!isClickInsideMenu && !isClickOnToggleButton && mobileMenu.classList.contains('translate-x-0')) {
                    closeMenu();
                }
            });
        });
    </script>
@endpush
