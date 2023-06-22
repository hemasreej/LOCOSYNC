// Code for additional features and functionality

// Smooth scrolling to section on navigation menu click
const navLinks = document.querySelectorAll('header nav ul li a');

navLinks.forEach(link => {
  link.addEventListener('click', e => {
    e.preventDefault();

    const target = document.querySelector(e.target.getAttribute('href'));
    window.scrollTo({
      top: target.offsetTop,
      behavior: 'smooth'
    });
  });
});

// Form submission handling
const contactForm = document.getElementById('contact-form');

contactForm.addEventListener('submit', e => {
  e.preventDefault();

  // Perform form validation and submit data to the server
  // Display success or error message to the user
  // You can use AJAX or fetch() to send the form data to the server
});
