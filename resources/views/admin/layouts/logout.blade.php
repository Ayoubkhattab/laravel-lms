<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-end h-16">
            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                <!-- Add the flex-grow class to the empty div -->
                <div class="flex-grow"></div>
                <!-- Move the logout button inside the empty div -->
                @yield('admin-logout')
            </div>
        </div>
    </div>
</nav>
