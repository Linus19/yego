// This script enables dropdown menu functionality
document.querySelectorAll('.dropdown').forEach(dropdown => {
    dropdown.addEventListener('mouseenter', () => {
        dropdown.querySelector('.dropdown-menu').style.display = 'block';
    });

    dropdown.addEventListener('mouseleave', () => {
        dropdown.querySelector('.dropdown-menu').style.display = 'none';
    });
});
// JavaScript to handle the animating text
document.addEventListener("DOMContentLoaded", () => {
    const text = "Welcome to Murey Yego & Associates CPA (K)-Tax Practitioners, a Premier Medium Consultancy Firm Specializing in all Tax-related matters, professional accounting, Audit, Risk Management, and Consulting. Fully Licensed and regulated by the Institute of Certified Public Accountants of Kenya (ICPAK).";
    const animatedText = document.getElementById("animated-text");

    let index = 0;

    function typeText() {
        if (index < text.length) {
            animatedText.innerHTML += text.charAt(index);
            index++;
            setTimeout(typeText, 50); // Adjust typing speed here
        }
    }

    typeText();
});
function reloadPageAfterSubmit() {
    setTimeout(function() {
        location.reload();
    }, 2000); // Adjust delay time as needed
}