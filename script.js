function hideFullPage() {
    document.getElementById('fullpage').style.display = 'none';
  }
  
  window.onload = function() {
    const imgs = document.querySelectorAll('.gallery-img');
    const fullPage = document.querySelector('#fullpage');
  
    imgs.forEach(img => {
      img.addEventListener('click', function() {
        fullPage.style.backgroundImage = 'url(' + img.src + ')';
        fullPage.style.display = 'block';
      });
    });
  };