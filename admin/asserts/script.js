  CKEDITOR.replace('testimonialText');
  CKEDITOR.replace('descriptionEditor');

   const sidebar = document.getElementById('sidebarContainer');
  const toggleBtn = document.getElementById('sidebarToggle');
  const mainContent = document.getElementById('mainContent');

  toggleBtn.addEventListener('click', () => {
    sidebar.classList.toggle('d-none');
    mainContent.classList.toggle('col-md-12');
    mainContent.classList.toggle('col-md-10');
  });
