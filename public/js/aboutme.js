const cards = document.querySelectorAll('.card');
  
cards.forEach(card => {
      card.style.opacity = 0;
      card.style.transition = 'opacity 1s ease-in-out'; 
  
      setTimeout(() => {
        card.style.opacity = 1;
      }, 700);
});