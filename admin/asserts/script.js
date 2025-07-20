

   const sidebar = document.getElementById('sidebarContainer');
  const toggleBtn = document.getElementById('sidebarToggle');
  const mainContent = document.getElementById('mainContent');

  toggleBtn.addEventListener('click', () => {
    sidebar.classList.toggle('d-none');
    mainContent.classList.toggle('col-md-12');
    mainContent.classList.toggle('col-md-10');
  });


 document.addEventListener("DOMContentLoaded", function() {
    const el = document.getElementById("testimonialText");
    if (!el) {
      console.warn("No element with id 'testimonialText' found.");
      return;
    }

    ClassicEditor
      .create(el)
      .then(edit => {
        console.log("CKEditor loaded:", edit);
      })
      .catch(err => {
        console.error("CKEditor init error:", err);
      });
  });

  