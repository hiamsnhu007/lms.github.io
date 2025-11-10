// scripts.js — simplified & modern version

// Wait for the page to finish loading
window.addEventListener("load", function () {
    // Hide preloader if it exists
    const preloader = document.getElementById("preloader");
    if (preloader) {
        preloader.style.opacity = "0";
        preloader.style.visibility = "hidden";
    }

    // Activate sidebar or navbar (if any)
    if (typeof $ !== "undefined" && $(".metismenu").length) {
        $(".metismenu").metisMenu();
    }

    // Enable tooltips if using Bootstrap
    if (typeof bootstrap !== "undefined") {
        const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
    }

    // Smooth scroll fix for long pages
    window.scrollTo(0, 0);
    document.body.classList.add("page-loaded");
});

// Optional console log for debugging
console.log("Custom LMS scripts loaded successfully.");
