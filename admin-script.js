// admin-script.js

document.addEventListener('DOMContentLoaded', function () {
  const buttons = document.querySelectorAll('.quick-btn');
  buttons.forEach(btn => {
    btn.addEventListener('click', () => {
      alert('यह फ़ंक्शन अभी उपलब्ध नहीं है। कृपया जल्द ही पुनः प्रयास करें।');
    });
  });

  // Highlight active sidebar menu item
  const currentPage = window.location.pathname.split('/').pop();
  const sidebarLinks = document.querySelectorAll('.sidebar a');
  sidebarLinks.forEach(link => {
    if (link.getAttribute('href') === currentPage) {
      link.classList.add('active');
    }
  });

  // Future: Fetch stats from server
  console.log("Admin Dashboard Script Loaded and initialized.");
});
