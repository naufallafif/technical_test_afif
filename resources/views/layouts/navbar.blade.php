<nav id="navbar" class="bg-white shadow-md sticky top-0 z-50 transition-colors duration-300">
    <div class="container mx-auto px-4 py-2 flex justify-center items-center">
        <ul class="flex space-x-6">
            <li>
                <a class="font-bold hover:text-gray-400" href="/">HOME</a>
            </li>
            <li>
                <a class="font-bold hover:text-gray-400" href="/feat">FEATURES</a>
            </li>
            <li>
                <a class="font-bold hover:text-gray-400" href="">LAYOUTS</a>
            </li>
            <li>
                <a class="font-bold hover:text-gray-400" href="">PAGES</a>
            </li>
            <li>
                <a id="theme-toggle" class="font-bold hover:text-gray-400" href="javascript:void(0);" onclick="toggleDarkMode()">
                    LIGHT VERSION
                </a>
            </li>
        </ul>
        <div class="relative left-2 max-w-xs sm:max-w-sm lg:max-w-md">
            <input
                class="border border-gray-300 rounded-full py-1 px-4 bg-white text-black-0 transition-colors duration-300 dark:text-black w-full"
                placeholder="Search and hit enter..." type="text" />
            <i class="fas fa-search absolute right-3 top-2 text-gray-900 dark:text-white-400"></i>
        </div>
    </div>
</nav>


<script>
    function toggleDarkMode() {
    const htmlElement = document.documentElement;
    const themeToggle = document.getElementById('theme-toggle');
    const navbar = document.getElementById('navbar');

    if (htmlElement.classList.contains('dark')) {
        htmlElement.classList.remove('dark'); 
        navbar.classList.replace('bg-gray-800', 'bg-white'); 
        navbar.classList.replace('text-white', 'text-black'); 
        localStorage.setItem('theme', 'light'); 
        themeToggle.textContent = 'DARK VERSION'; 
        themeToggle.classList.replace('text-white', 'text-black'); 
    } else {
        htmlElement.classList.add('dark'); 
        navbar.classList.replace('bg-white', 'bg-gray-800'); 
        navbar.classList.replace('text-black', 'text-white'); 
        localStorage.setItem('theme', 'dark'); 
        themeToggle.textContent = 'LIGHT VERSION'; 
        themeToggle.classList.replace('text-black', 'text-white');
    }
    
}


    
</script>
