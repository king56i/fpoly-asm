window.addEventListener('DOMContentLoaded', (e) => {
  if (window.location.pathname === '/fpoly/assignment/') {
    let list = document.querySelector('.slider .list');
    let items = document.querySelectorAll('.slider .list .item');
    let dots = document.querySelectorAll('.slider .dots li');
    let prev = document.getElementById('prev');
    let next = document.getElementById('next');
    
    let active = 0;
    let lengthItems = items.length - 1 ;
    next.onclick = function(){
      if(active + 1 > lengthItems){
        active = 0;
      }else{
        active = active + 1;
      }
      reloadSlider();
    }
    prev.onclick = function(){
      if(active - 1 < 0){
        active = lengthItems;
      }else{
        active = active - 1;
      }
      reloadSlider();
    }
    let refreshSlider = setInterval(() => {next.click()}, 4000);
    function reloadSlider() {
      let checkLeft = items[active].offsetLeft;
      list.style.left = -checkLeft + 'px';
      let lastActiveDot = document.querySelector('.slider .dots li.active');
      lastActiveDot.classList.remove('active');
      dots[active].classList.add('active');
      clearInterval(refreshSlider);
      refreshSlider = setInterval(() => {next.click()}, 4000);
      
    }
    dots.forEach((li,key) => {
      li.addEventListener('click', function(){
        active = key;
        reloadSlider();
      })
    })
    var menu = document.getElementById("header");
    
    window.addEventListener("scroll", function() {
      if (window.pageYOffset > 120) {
        menu.style.top = "-122px";
      } else {
        menu.style.top = "0";
      }
    });
    
    // slider
    let currentIndex = 0;
      const totalSlides = document.querySelectorAll('.ptc-1').length;
      const slider = document.getElementById('slider');
    
      function prevSlide() {
        currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
        updateSlider();
      }
    
      function nextSlide() {
        currentIndex = (currentIndex + 1) % totalSlides;
        updateSlider();
      }
    
      function updateSlider() {
        const newPosition = -currentIndex * 10 + '%';
        slider.style.transform = 'translateX(' + newPosition + ')';
      }
    
      // trượt
    
      let isDragging = false;
      let startX, scrollLeft;
      
      const scrollContainer = document.getElementById('overflow');
      
      scrollContainer.addEventListener('mousedown', (e) => {
        isDragging = true;
        startX = e.pageX - scrollContainer.offsetLeft;
        scrollLeft = scrollContainer.scrollLeft;
        scrollContainer.style.cursor = 'pointer';
      });
      
      document.addEventListener('mouseup', () => {
        isDragging = false;
        scrollContainer.style.cursor = 'pointer';
      });
      
      scrollContainer.addEventListener('mousemove', (e) => {
        if (!isDragging) return;
        e.preventDefault();
        const x = e.pageX - scrollContainer.offsetLeft;
        const walk = (x - startX) * 1; // Thay đổi hệ số 3 để điều chỉnh tốc độ kéo
        scrollContainer.scrollLeft = scrollLeft - walk;
      });
    function formatCurrency(input) {
      var value = parseFloat(input.value);
      if (!isNaN(value)) {
          input.value = value.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');
      }
    }
  }
    const descriptions = document.querySelectorAll('e');
    Array.from(descriptions,(des) => des.textContent = (des.textContent.length >= 50) ? `${des.textContent.slice(0,50)}...` : `${des.textContent}`);
}
);
