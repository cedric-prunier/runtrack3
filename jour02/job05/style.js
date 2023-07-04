window.addEventListener("scroll", function () {
        const scrollPercentage = (window.scrollY / (document.documentElement.scrollHeight - window.innerHeight)) * 100;
        const footer = document.querySelector("footer");
        footer.style.backgroundColor = `hsl(${scrollPercentage}, 100%, 50%)`;
});
