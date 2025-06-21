
    AOS.init({
      duration: 800, // durasi animasi (ms)
      easing: 'ease-in-out',
      once: false // animasi hanya 1x
    });

    document.addEventListener("DOMContentLoaded", function() {
      const slides = document.querySelectorAll('.product-slide');
      let current = 0;

      function showSlide(index) {
        slides.forEach((slide, i) => {
          slide.classList.toggle('d-none', i !== index);
        });
      }

      document.getElementById('nextBtn').addEventListener('click', () => {
        current = (current + 1) % slides.length;
        showSlide(current);
      });

      document.getElementById('prevBtn').addEventListener('click', () => {
        current = (current - 1 + slides.length) % slides.length;
        showSlide(current);
      });
    });
