document.addEventListener("DOMContentLoaded", function() {
    const colorButton = document.getElementById("colorButton");
    const content = document.getElementById("content");

    // Event listener to change color on button click
    colorButton.addEventListener("click", function() {
        toggleColorMode();
    });

    // Function to toggle color mode
    function toggleColorMode() {
        const body = document.body;
        const a = document.getElementsByClassName("nav-link")
        let logo = document.getElementById("logo")
        // Check if the body has the "dark-mode" class
        const isDarkMode = body.classList.contains("bg-dark");

        // Toggle the class
        if (isDarkMode) {
            for(let i = 0; i<a.length;i++){
                a[i].classList.remove("bg-dark");
                a[i].classList.remove("text-white");
                a[i].classList.add("bg-light");
                a[i].classList.add("text-black");
            }
            body.classList.remove("bg-dark");
            body.classList.remove("text-white");
            body.classList.add("bg-light");
            body.classList.add("text-black");
            logo.innerHTML = '<img src="/Cinemapp/images/film.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="50" height="50" loading="lazy">';
        } else {
            for(let i = 0; i<a.length;i++){
                a[i].classList.remove("g-light");
                a[i].classList.remove("text-black");
                a[i].classList.add("bg-dark");
                a[i].classList.add("text-white");
            }
            body.classList.remove("bg-light");
            body.classList.remove("text-black");
            body.classList.add("bg-dark");
            body.classList.add("text-white");
            logo.innerHTML = '<img src="/Cinemapp/images/filmwhite.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="50" height="50" loading="lazy">';
        }
    }
});