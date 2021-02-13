let darkMode = localStorage.getItem('data-theme');
const checkbox = document.querySelector("input[name=theme]");

const enableDarkMode = () => {
    // 1. Add the class to the body
    document.documentElement.setAttribute('data-theme', 'dark')

    // 2. Update darkMode in localStorage
    localStorage.setItem('data-theme', 'dark');
}

const disableDarkMode = () => {
    // 1. Remove the class from the body
    document.documentElement.setAttribute('data-theme', 'light')
    // 2. Update darkMode in localStorage
    localStorage.setItem('data-theme', 'light');
}

if (darkMode === 'dark') {
    enableDarkMode()
}

checkbox.addEventListener( 'change', () => {
    darkMode = localStorage.getItem('data-theme');
    if(darkMode !== 'dark') {
        trans()
        enableDarkMode()
    } else {
        trans()
        disableDarkMode()
    }
});

let trans = () => {
    document.documentElement.classList.add('transition');
    window.setTimeout(() => {
        document.documentElement.classList.remove('transition')
    }, 1000)
}
