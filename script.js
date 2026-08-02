// ===============================
// Mobile Menu Toggle
// ===============================

function toggleMenu() {
    document.getElementById("menu").classList.toggle("active");
}

// ===============================
// Close Menu After Clicking Link
// ===============================

document.querySelectorAll("#menu a").forEach(link => {

    link.addEventListener("click", () => {

        document.getElementById("menu").classList.remove("active");

    });

});

// ===============================
// Navbar Shadow on Scroll
// ===============================

window.addEventListener("scroll", () => {

    const header = document.querySelector("header");

    if (window.scrollY > 50) {
        header.style.boxShadow = "0 4px 15px rgba(0,0,0,0.5)";
    } else {
        header.style.boxShadow = "0 3px 10px rgba(0,0,0,0.4)";
    }

});

// ===============================
// Smooth Scroll
// ===============================

document.querySelectorAll('a[href^="#"]').forEach(anchor => {

    anchor.addEventListener("click", function(e) {

        e.preventDefault();

        const target = document.querySelector(this.getAttribute("href"));

        if (target) {

            target.scrollIntoView({
                behavior: "smooth"
            });

        }

    });

});

// ===============================
// Active Navigation Link
// ===============================

const sections = document.querySelectorAll("section");
const navLinks = document.querySelectorAll("#menu a");

window.addEventListener("scroll", () => {

    let current = "";

    sections.forEach(section => {

        const sectionTop = section.offsetTop - 120;

        if (window.scrollY >= sectionTop) {
            current = section.getAttribute("id");
        }

    });

    navLinks.forEach(link => {

        link.classList.remove("active");

        if (link.getAttribute("href") === "#" + current) {
            link.classList.add("active");
        }

    });

});