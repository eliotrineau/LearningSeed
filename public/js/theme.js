document.addEventListener('DOMContentLoaded', () => {
    const toggleColorButton = document.getElementById('toggleColorButton');
    const body = document.body;
  
    toggleColorButton.addEventListener('click', () => {
      body.classList.toggle('dark-bg');
      body.classList.toggle('light-bg');
    });
  });