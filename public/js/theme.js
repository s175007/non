let darkMode = localStorage.getItem('data-theme');
const checkbox = document.querySelector("input[name=theme]");

const enableDarkMode = () => {
    document.documentElement.setAttribute('data-theme', 'dark')
    console.log('dark')
    localStorage.setItem('data-them', 'dark')
}

const disableDarkMode = () => {
    document.documentElement.setAttribute('data-theme', 'light')
    console.log('light')
    localStorage.setItem('data-them', 'light')
}

if(darkMode === 'dark') {
    enableDarkMode()
}

checkbox.addEventListener('change', function() {
    darkMode = localStorage.getItem('data-theme')
    if (darkMode !== 'dark') {
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
