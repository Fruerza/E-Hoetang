document.addEventListener("DOMContentLoaded", function() {
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.remove("fade-out");
                entry.target.classList.add("fade-in");
            } else {
                entry.target.classList.remove("fade-in");
                entry.target.classList.add("fade-out");
            }
        });
    }, { threshold: 0.1 });

    const sections = document.querySelectorAll(".features");
    sections.forEach(section => {
        observer.observe(section);
    });
});