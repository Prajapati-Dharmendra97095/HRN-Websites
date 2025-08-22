window.addEventListener("load", () => {
    const body = document.body;
    const services = document.querySelectorAll(".service");
    const modals = document.querySelectorAll(".modal");
    const btnClose = document.querySelector("#modal-close");
    const modalContent = document.querySelector(".modal-content");
  
    let activeModal;
    let autoScrollInterval;
    let scrollPaused = false;
  
    // Open modal
    services.forEach((service) => {
      service.addEventListener("click", () => {
        const target = service.getAttribute("data-target");
        activeModal = Array.from(modals).find((m) => m.id === target);
        if (activeModal) {
          activeModal.classList.add("active");
          body.classList.add("body-cover");
          startAutoScroll();
        }
      });
    });
  
    // Close modal
    btnClose.addEventListener("click", () => {
      closeModal();
    });
  
    // Click outside modal closes it
    window.addEventListener("click", (e) => {
      if (e.target === activeModal) {
        closeModal();
      }
    });
  
    function closeModal() {
      if (activeModal) {
        activeModal.classList.remove("active");
        body.classList.remove("body-cover");
        stopAutoScroll();
      }
    }
  
    // Auto-scroll function
    function startAutoScroll() {
      stopAutoScroll(); // clear if running
      autoScrollInterval = setInterval(() => {
        if (!scrollPaused) {
          modalContent.scrollTop += 1;
          if (modalContent.scrollTop + modalContent.clientHeight >= modalContent.scrollHeight) {
            modalContent.scrollTop = 0; // loop to top
          }
        }
      },30); // scroll speed
    }
  
    function stopAutoScroll() {
      clearInterval(autoScrollInterval);
    }
  
    // Pause on hover
    console.log(modalContent.children)
    Array.from(modalContent.children).forEach(element=>element.addEventListener("mouseenter", () => {
      scrollPaused = true;
    }))
    Array.from(modalContent.children).forEach(element=>element.addEventListener("mouseleave", () => {
        scrollPaused = false;
        // setTimeout(() => (scrollPaused = false), 7000); // pause for 10s
      }))
  });
  