window.onload = function () {
    let bars = document.querySelectorAll(".progress-bar");

    bars.forEach(bar => {
        let nilai = bar.getAttribute("data-skill");
        bar.style.width = nilai + "%";
    });
};
