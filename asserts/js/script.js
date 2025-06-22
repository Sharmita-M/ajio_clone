window.loadContent = function (page) {
  console.log("Page requested:", page);
  const content = document.getElementById('main-content');

  if (!content) {
    console.error('main-content div not found');
    return;
  }

  if (page === 'dashboard') {
    content.innerHTML = `<h2>Dashboard</h2>`;
  } else if (page === 'addBanner') {
    content.innerHTML = `
    <style>
     .header-bg {
      background-color: #03a9f4;
      color: white;
      font-weight: 600;
      padding: 1rem;
      border-top-left-radius: 0.25rem;
      border-top-right-radius: 0.25rem;
    }
    .table thead th {
      cursor: pointer;
    }
    .table thead th i {
      color: #ccc;
      margin-left: 0.25rem;
    }
    .required-red {
      color: #d60000;
      font-weight: 700;
    }
      </style>
    
    <div class="container-fluid">
    <div class="row g-4">
      <!-- Add Slider -->
      <div class="col-12 col-md-4">
        <div class="bg-white shadow-sm rounded">
          <div class="header-bg">Add Slider</div>
          <form class="p-4">
            <div class="mb-3">
              <label for="title" class="form-label fw-semibold">Title</label>
              <input
                type="text"
                class="form-control"
                id="title"
                placeholder="Title"
              />
            </div>
            <div class="mb-3">
              <label for="upload" class="form-label fw-semibold"
                >Upload Image <span class="required-red">1000 * 700</span></label
              >
              <input
                class="form-control"
                type="file"
                id="upload"
                name="upload"
              />
            </div>
            <button type="submit" class="btn btn-dark fw-semibold">Submit</button>
          </form>
        </div>
      </div>

      <!-- View Slider -->
      <div class="col-12 col-md-8">
        <div class="bg-white shadow-sm rounded d-flex flex-column h-100">
          <div class="header-bg">View Slider</div>
          <div class="p-4 d-flex flex-column gap-3 flex-grow-1">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center gap-3">
              <div class="d-flex align-items-center gap-2">
                <span>Show</span>
                <select class="form-select form-select-sm w-auto" aria-label="Show entries">
                  <option selected>10</option>
                  <option>25</option>
                  <option>50</option>
                  <option>100</option>
                </select>
                <span>entries</span>
              </div>
              <div class="d-flex align-items-center gap-2">
                <label for="search" class="mb-0">Search:</label>
                <input
                  type="search"
                  id="search"
                  class="form-control form-control-sm"
                  style="width: 150px"
                />
              </div>
            </div>

            <div class="table-responsive border rounded">
              <table class="table table-sm mb-0 text-nowrap">
                <thead class="table-light">
                  <tr>
                    <th scope="col">
                      Sl No <i class="fas fa-sort"></i>
                    </th>
                    <th scope="col">
                      Action <i class="fas fa-sort"></i>
                    </th>
                    <th scope="col">
                      Heading <i class="fas fa-sort"></i>
                    </th>
                    <th scope="col">
                      Image <i class="fas fa-sort"></i>
                    </th>
                    <th scope="col">
                      Date Of Add <i class="fas fa-sort"></i>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td colspan="5" class="text-center text-secondary">
                      No data available in table
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>

            <div class="d-flex justify-content-between align-items-center">
              <div>Showing 0 to 0 of 0 entries</div>
              <div>
                <button type="button" class="btn btn-outline-secondary btn-sm me-2" disabled>
                  Previous
                </button>
                <button type="button" class="btn btn-outline-secondary btn-sm">
                  Next
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
`;
  } else if (page === 'addMobileBanner') {
    content.innerHTML = `
    
  <style>
     .header-bg {
      background-color: #03a9f4;
      color: white;
      font-weight: 600;
      padding: 1rem;
      border-top-left-radius: 0.25rem;
      border-top-right-radius: 0.25rem;
    }
    .table thead th {
      cursor: pointer;
    }
    .table thead th i {
      color: #ccc;
      margin-left: 0.25rem;
    }
    .required-red {
      color: #d60000;
      font-weight: 700;
    }
      </style>
    
    <div class="container-fluid">
    <div class="row g-4">
      <!-- Add Slider -->
      <div class="col-12 col-md-4">
        <div class="bg-white shadow-sm rounded">
          <div class="header-bg">Add Slider</div>
          <form class="p-4">
            <div class="mb-3">
              <label for="title" class="form-label fw-semibold">Title</label>
              <input
                type="text"
                class="form-control"
                id="title"
                placeholder="Title"
              />
            </div>
            <div class="mb-3">
              <label for="upload" class="form-label fw-semibold"
                >Upload Image <span class="required-red">1000 * 700</span></label
              >
              <input
                class="form-control"
                type="file"
                id="upload"
                name="upload"
              />
            </div>
            <button type="submit" class="btn btn-dark fw-semibold">Submit</button>
          </form>
        </div>
      </div>

      <!-- View Slider -->
      <div class="col-12 col-md-8">
        <div class="bg-white shadow-sm rounded d-flex flex-column h-100">
          <div class="header-bg">View Slider</div>
          <div class="p-4 d-flex flex-column gap-3 flex-grow-1">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center gap-3">
              <div class="d-flex align-items-center gap-2">
                <span>Show</span>
                <select class="form-select form-select-sm w-auto" aria-label="Show entries">
                  <option selected>10</option>
                  <option>25</option>
                  <option>50</option>
                  <option>100</option>
                </select>
                <span>entries</span>
              </div>
              <div class="d-flex align-items-center gap-2">
                <label for="search" class="mb-0">Search:</label>
                <input
                  type="search"
                  id="search"
                  class="form-control form-control-sm"
                  style="width: 150px"
                />
              </div>
            </div>

            <div class="table-responsive border rounded">
              <table class="table table-sm mb-0 text-nowrap">
                <thead class="table-light">
                  <tr>
                    <th scope="col">
                      Sl No <i class="fas fa-sort"></i>
                    </th>
                    <th scope="col">
                      Action <i class="fas fa-sort"></i>
                    </th>
                    <th scope="col">
                      Heading <i class="fas fa-sort"></i>
                    </th>
                    <th scope="col">
                      Image <i class="fas fa-sort"></i>
                    </th>
                    <th scope="col">
                      Date Of Add <i class="fas fa-sort"></i>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td colspan="5" class="text-center text-secondary">
                      No data available in table
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>

            <div class="d-flex justify-content-between align-items-center">
              <div>Showing 0 to 0 of 0 entries</div>
              <div>
                <button type="button" class="btn btn-outline-secondary btn-sm me-2" disabled>
                  Previous
                </button>
                <button type="button" class="btn btn-outline-secondary btn-sm">
                  Next
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    
    `;
  }else if (page === 'addTestimonial') {
    content.innerHTML = ` 
    
     <div class="container my-4">
    <div class="row g-3">
      <!-- Add Testimonials -->
      <div class="col-md-6">
        <div class="card shadow-sm">
          <div class="card-header bg-primary text-white fw-semibold">
            Add Testimonials
          </div>
          <div class="card-body">
            <form>
              <div class="mb-3">
                <label for="name" class="form-label fw-semibold">Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="name"
                  placeholder="Name"
                />
              </div>
              <div class="mb-3">
                <label for="upload" class="form-label fw-semibold"
                  >Upload Image <span class="text-danger fw-bold">400 * 400</span></label
                >
                <input
                  class="form-control"
                  type="file"
                  id="upload"
                  accept="image/*"
                />
              </div>
              <div class="mb-3">
                <label for="comments" class="form-label fw-semibold">Comments</label>
                <textarea id="comments" name="comments" rows="6" class="form-control"></textarea>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- View Testimonials -->
    <div class="col-md-6">
        <div class="card shadow-sm">
          <div class="card-header bg-primary text-white fw-semibold">
            View Testimonials
          </div>
          <div class="card-body">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mb-3 gap-3">
              <div class="d-flex align-items-center gap-2">
                <label for="entries" class="mb-0">Show</label>
                <select id="entries" class="form-select form-select-sm w-auto">
                  <option>10</option>
                  <option>25</option>
                  <option>50</option>
                  <option>100</option>
                </select>
                <span>entries</span>
              </div>
              <div class="d-flex align-items-center gap-2">
                <label for="search" class="mb-0">Search:</label>
                <input
                  type="search"
                  id="search"
                  class="form-control form-control-sm"
                  style="min-width: 150px"
                />
              </div>
            </div>
            <div class="table-responsive border rounded">
              <table
                id="testimonialsTable"
                class="table table-sm mb-0 text-nowrap"
                name="testimonialsTable"
              >
                <thead class="table-light text-secondary">
                  <tr>
                    <th scope="col">Sl No <i class="bi bi-arrow-down-up"></i></th>
                    <th scope="col">Action <i class="bi bi-arrow-down-up"></i></th>
                    <th scope="col">Name <i class="bi bi-arrow-down-up"></i></th>
                    <th scope="col">Comments <i class="bi bi-arrow-down-up"></i></th>
                    <th scope="col">Image <i class="bi bi-arrow-down-up"></i></th>
                    <th scope="col">Status <i class="bi bi-arrow-down-up"></i></th>
                    <th scope="col">Date Of Add <i class="bi bi-arrow-down-up"></i></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td colspan="7" class="text-center text-muted">
                      No data available in table
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div
              class="d-flex justify-content-between align-items-center mt-3 text-secondary small"
            >
              <div>Showing 0 to 0 of 0 entries</div>
              <div>
                <button type="button" class="btn btn-outline-secondary btn-sm me-1" disabled>
                  Previous
                </button>
                <button type="button" class="btn btn-outline-secondary btn-sm" disabled>
                  Next
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


    `;
    setTimeout(() => {
  if (document.getElementById("comments")) {
    CKEDITOR.replace("comments");
  }
}, 100);

  }
  
  else if (page === 'addCategory') {
    content.innerHTML = `
    <style>
     .header-bg {
      background-color: #03a9f4;
      color: white;
      font-weight: 600;
      padding: 0.75rem 1rem;
      border-top-left-radius: 0.25rem;
      border-top-right-radius: 0.25rem;
    }
    .btn-delete {
      background-color: #f44336;
      color: white;
      border: none;
    }
    .btn-delete:hover {
      background-color: #d32f2f;
      color: white;
    }
    .btn-edit {
      background-color: #009688;
      color: white;
      border: none;
    }
    .btn-edit:hover {
      background-color: #00796b;
      color: white;
    }
    textarea {
      resize: none;
    }
    </style>
     <div class="container my-4">
    <div class="row g-3">
      <!-- Add Category -->
      <div class="col-md-4">
        <div class="card shadow-sm">
          <div class="card-header bg-primary text-white fw-semibold">
            Add Categories
          </div>
          <div class="card-body">
            <form>
              <div class="mb-3">
                <label for="name" class="form-label fw-semibold">Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="name"
                  placeholder="Name"
                />
              </div>
              <div class="mb-3">
                <label for="upload" class="form-label fw-semibold"
                  >Upload Image <span class="text-danger fw-bold">400 * 400</span></label
                >
                <input
                  class="form-control"
                  type="file"
                  id="upload"
                  accept="image/*"
                />
              </div>
              <div class="mb-3">
                <label for="comments" class="form-label fw-semibold">Comments</label>
                <textarea id="comments" name="comments" rows="6" class="form-control"></textarea>
              </div>
            </form>
          </div>
        </div>
      </div>
<!-- view catagories -->
       <div class="col-12 col-md-8">
        <div class="bg-white shadow-sm rounded d-flex flex-column">
          <div class="header-bg">
            View Category
          </div>
          <div class="p-3">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mb-3 gap-3">
              <div class="d-flex align-items-center gap-2 text-secondary small">
                <span>Show</span>
                <select class="form-select form-select-sm w-auto" aria-label="Show entries select">
                  <option selected>4</option>
                </select>
                <span>entries</span>
              </div>
              <div class="d-flex align-items-center gap-2 text-secondary small">
                <label for="search" class="mb-0">Search:</label>
                <input type="text" id="search" class="form-control form-control-sm" style="width: 150px;" />
              </div>
            </div>
            <div class="table-responsive">
              <table class="table table-bordered table-hover align-middle text-secondary small mb-0">
                <thead class="table-light">
                  <tr>
                    <th scope="col" class="text-start">Sl No <i class="fas fa-sort"></i></th>
                    <th scope="col" class="text-start">Action <i class="fas fa-sort"></i></th>
                    <th scope="col" class="text-start">Product Name <i class="fas fa-sort"></i></th>
                    <th scope="col" class="text-start">Description <i class="fas fa-sort"></i></th>
                    <th scope="col" class="text-start">Image <i class="fas fa-sort"></i></th>
                    <th scope="col" class="text-start">Date Of Add <i class="fas fa-sort"></i></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>
                      <button type="button" class="btn btn-delete btn-sm me-1" aria-label="Delete">
                        <i class="fas fa-trash"></i>
                      </button>
                      <button type="button" class="btn btn-edit btn-sm" aria-label="Edit">
                        <i class="fas fa-pencil-alt"></i>
                      </button>
                    </td>
                    <td>Top</td>
                    <td></td>
                    <td>
                      <img src="https://storage.googleapis.com/a1aa/image/6549d7d9-abe8-41dc-ea96-2422ac562c3c.jpg" alt="Placeholder image for missing product image, 60 by 60 pixels" width="60" height="60" style="object-fit: contain;" />
                    </td>
                    <td>2020-11-21 12:38:01</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>
                      <button type="button" class="btn btn-delete btn-sm me-1" aria-label="Delete">
                        <i class="fas fa-trash"></i>
                      </button>
                      <button type="button" class="btn btn-edit btn-sm" aria-label="Edit">
                        <i class="fas fa-pencil-alt"></i>
                      </button>
                    </td>
                    <td>Skirt</td>
                    <td></td>
                    <td>
                      <img src="https://storage.googleapis.com/a1aa/image/6f1748a7-613b-4107-e252-e29374a59c16.jpg" alt="Image of a prawn, 60 by 60 pixels" width="60" height="60" style="object-fit: contain;" />
                    </td>
                    <td>2020-12-03 14:15:33</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>
                      <button type="button" class="btn btn-delete btn-sm me-1" aria-label="Delete">
                        <i class="fas fa-trash"></i>
                      </button>
                      <button type="button" class="btn btn-edit btn-sm" aria-label="Edit">
                        <i class="fas fa-pencil-alt"></i>
                      </button>
                    </td>
                    <td>Tray</td>
                    <td></td>
                    <td>
                      <img src="https://storage.googleapis.com/a1aa/image/b8128044-2c67-4fa7-0329-6f7547fd2edb.jpg" alt="Image of three eggs, 60 by 60 pixels" width="60" height="60" style="object-fit: contain;" />
                    </td>
                    <td>2020-12-03 14:19:09</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>
                      <button type="button" class="btn btn-delete btn-sm me-1" aria-label="Delete">
                        <i class="fas fa-trash"></i>
                      </button>
                      <button type="button" class="btn btn-edit btn-sm" aria-label="Edit">
                        <i class="fas fa-pencil-alt"></i>
                      </button>
                    </td>
                    <td>Fish Bowl</td>
                    <td></td>
                    <td>
                      <img src="https://storage.googleapis.com/a1aa/image/ed932f7c-8662-4ed6-92fe-cd7d2e560967.jpg" alt="Image of a fish, 60 by 60 pixels" width="60" height="60" style="object-fit: contain;" />
                    </td>
                    <td>2021-01-15 13:00:54</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


    
    `; 
    setTimeout(() => {
    if (window.CKEDITOR && document.getElementById("comments")) {
      CKEDITOR.replace("comments");
    }
  }, 100);
  } 
  
  else {
    content.innerHTML = `<h2>${page}</h2><p>Page not found.</p>`;
  }
};
