window.addEventListener("load", function () {
    // SCREENSHOTS SLIDER
    const slider = document.getElementById("slider");
    const slides = slider.children;
    const totalSlides = slides.length;
    let index = 0;

    const prevBtn = document.getElementById("prev");
    const nextBtn = document.getElementById("next");
    const dotsContainer = document.getElementById("dots");

    for (let i = 0; i < totalSlides; i++) {
        const dot = document.createElement("button");
        dot.className = "w-4 h-4 rounded-full bg-[var(--color3)]";
        dot.addEventListener("click", () => goToSlide(i));
        dotsContainer.appendChild(dot);
    }

    const updateDots = () => {
        [...dotsContainer.children].forEach((dot, i) => {
            dot.className = "cursor-pointer rounded-full transition w-4 h-4 " +
                (i === index ? "bg-[var(--color3)]" : "bg-[var(--color1)]");
        });
    };

    const goToSlide = (i) => {
        index = (i + totalSlides) % totalSlides;
        slider.style.transform = `translateX(-${index * 100}%)`;
        updateDots();
    };

    prevBtn.addEventListener("click", () => goToSlide(index - 1));
    nextBtn.addEventListener("click", () => goToSlide(index + 1));

    goToSlide(0);

    // HEADING ANCHORS COPY
    const headings = document.querySelectorAll("h4 > button");
    headings.forEach(function (button) {
        button.addEventListener("click", function (event) {
            event.stopPropagation();

            const anchorId = button.getAttribute("anchor");
            const url = `${window.location.origin}${window.location.pathname}#${anchorId}`;

            navigator.clipboard.writeText(url).then(() => {
                const oldText = button.textContent;
                button.textContent = "✓";
                setTimeout(() => {
                    button.textContent = oldText;
                }, 1000);
                history.replaceState(null, "", `#${anchorId}`);
            }).catch(() => {
                const oldText = button.textContent;
                button.textContent = "✕";
                setTimeout(() => {
                    button.textContent = oldText;
                }, 1000);
            });
        })
    })
});