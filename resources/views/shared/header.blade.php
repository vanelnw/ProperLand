        <header class="relative container mx-auto py-6 px-5 bg-white shadow-lg rounded-lg">
        <div class="w-full flex justify-between items-center">
            <div class="flex items-center gap-2 text-2xl font-bold">
                <img src="{{ asset('storage/images/properland.png') }}" alt="Logo" width=40 height=40>
                <span class="mt-2">Properland</span>
            </div>
            <nav class="hidden md:flex mobile_nav">
                <ul class="flex items-center space-x-4 ">
                    <li>Home</li>
                    <li>About</li>
                    <li>Properties</li>
                    <li>Agents</li>
                    <li>
                        <button class="bg-primary px-5 py-1 rounded-md text-white">Contact</button>
                    </li>
                </ul>
            </nav>

            <div class="md:hidden">
            <!-- Hamburger menu -->
                <button id="mobile-menu-button" class="text-2xl focus:outline-none bg-primary text-white px-3 py-2">
                    ☰ <!-- You can replace this with a hamburger icon -->
                </button>
            </div>
        </div>
    </header>