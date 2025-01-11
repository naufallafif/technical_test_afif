function toggleDarkMode() {
        const htmlElement = document.documentElement;
        if (htmlElement.classList.contains('dark')) {
            htmlElement.classList.remove('dark');
            localStorage.setItem('theme', 'light');
            alert('Switched to Light Mode');
        } else {
            htmlElement.classList.add('dark');
            localStorage.setItem('theme', 'dark');
            alert('Switched to Dark Mode');
        }
    }

    // Set theme on page load based on localStorage
    document.addEventListener('DOMContentLoaded', () => {
        if (localStorage.getItem('theme') === 'dark') {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    });