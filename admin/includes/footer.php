<footer class="footer position-fixed bottom-0 end-0 bg-white w-100">
    <div class="container-fluid">
        <p class="text-end">© 2023 Your Company. All rights reserved.</p>
    </div> 
</footer>


        <script src="asserts/script.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
       </div>
</div>
<script> 
const sidebar = document.getElementById('sidebarContainer');
  const toggleBtn = document.getElementById('sidebarToggle');
  const mainContent = document.getElementById('mainContent');

  toggleBtn.addEventListener('click', () => {
    sidebar.classList.toggle('d-none');
    mainContent.classList.toggle('col-md-12');
    mainContent.classList.toggle('col-md-10');
  });
</script>


</body>

</html>