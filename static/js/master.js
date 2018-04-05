

    
    const doc = document;
    const right = doc.querySelector(".right");
    const left = doc.querySelector(".left");
    const container = doc.querySelector(".area__container");
    
    right.addEventListener("mouseenter", () => {
        container.classList.add("hover-right");
    });
    
    right.addEventListener("mouseleave", () => {
        container.classList.remove("hover-right");
    });
    
    
