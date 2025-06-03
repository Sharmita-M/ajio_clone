<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="wrapper w-100 d-flex align-items-start justify-content-between bg-black h-100">

        <nav class="sidebar position-relative">
            <div class="sidebar-content w-100">
                <div class="scrollbar-container w-100 h-100 d-flex justify-content-center flex-column">
                    <a href=""
                        class="sidebar-brand d-flex justify-content-center align-items-center gap-1 py-2 text-center text-decoration-none">

                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                            y="0px" width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20"
                            xml:space="preserve" fill="#2871e7">
                            <path fill="#84aef2"
                                d="M19.4,4.1l-9-4C10.1,0,9.9,0,9.6,0.1l-9,4C0.2,4.2,0,4.6,0,5s0.2,0.8,0.6,0.9l9,4C9.7,10,9.9,10,10,10s0.3,0,0.4-0.1l9-4     C19.8,5.8,20,5.4,20,5S19.8,4.2,19.4,4.1z">
                            </path>
                            <path
                                d="M10,15c-0.1,0-0.3,0-0.4-0.1l-9-4c-0.5-0.2-0.7-0.8-0.5-1.3c0.2-0.5,0.8-0.7,1.3-0.5l8.6,3.8l8.6-3.8c0.5-0.2,1.1,0,1.3,0.5     c0.2,0.5,0,1.1-0.5,1.3l-9,4C10.3,15,10.1,15,10,15z">
                            </path>
                            <path
                                d="M10,20c-0.1,0-0.3,0-0.4-0.1l-9-4c-0.5-0.2-0.7-0.8-0.5-1.3c0.2-0.5,0.8-0.7,1.3-0.5l8.6,3.8l8.6-3.8c0.5-0.2,1.1,0,1.3,0.5     c0.2,0.5,0,1.1-0.5,1.3l-9,4C10.3,20,10.1,20,10,20z">
                            </path>
                        </svg>

                        <span class="align-middle me-5 text-uppercase text-white fw-bold fs-5 p-2">AJIO Panel</span>
                    </a>

                    <ul class="sidebar-nav position-relative p-0 w-100">
                        <li class="sidebar-item">
                            <a href="#dashboardMenu1" class="sidebar-link" data-bs-toggle="collapse"
                                aria-expanded="false">

                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-sliders-vertical lucide align-middle">
                                    <line x1="4" x2="4" y1="21" y2="14"></line>
                                    <line x1="4" x2="4" y1="10" y2="3"></line>
                                    <line x1="12" x2="12" y1="21" y2="12"></line>
                                    <line x1="12" x2="12" y1="8" y2="3"></line>
                                    <line x1="20" x2="20" y1="21" y2="16"></line>
                                    <line x1="20" x2="20" y1="12" y2="3"></line>
                                    <line x1="2" x2="6" y1="14" y2="14"></line>
                                    <line x1="10" x2="14" y1="8" y2="8"></line>
                                    <line x1="18" x2="22" y1="16" y2="16"></line>
                                </svg>

                                <span class="align-middle">Dashboard</span>
                                <span size="18" class="badge badge-sidebar-primary">5</span>

                            </a>
                        </li>



                      

                        <li class="sidebar-item">
                            <a href="#dashboardMenu2" class="sidebar-link" data-bs-toggle="collapse"
                                aria-expanded="false">

                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-shopping-bag lucide align-middle">
                                    <path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4Z"></path>
                                    <path d="M3 6h18"></path>
                                    <path d="M16 10a4 4 0 0 1-8 0"></path>
                                </svg>
                                <span class="align-middle">E-commerce</span>

                            </a>

                            <ul class="sidebar-dropdown list-unstyled collapse" id="dashboardMenu2">

                                <li class="sidebar-item" >
                                    <a href="index.html" class="sidebar-link">
                                        <span class="align-middle">Products</span>
                                        <span class="badge badge-sidebar-primary">New</span>
                                    </a>

                                </li>

                                <li class="sidebar-item" >
                                    <a href="index.html" class="sidebar-link">
                                        <span class="align-middle">Product Details</span>
                                        <span class="badge badge-sidebar-primary">New</span>
                                    </a>

                                </li>

                                <li class="sidebar-item" m>
                                    <a href="index.html" class="sidebar-link">
                                        <span class="align-middle">Orders</span>
                                        <span class="badge badge-sidebar-primary">New</span>
                                    </a>

                                </li>

                                <li class="sidebar-item" >
                                    <a href="index.html" class="sidebar-link">
                                        <span class="align-middle">Customers</span>
                                    </a>

                                </li>

                                <li class="sidebar-item">
                                    <a href="index.html" class="sidebar-link">
                                        <span class="align-middle">Invoice</span>
                                    </a>

                                </li>

                                <li class="sidebar-item" >
                                    <a href="index.html" class="sidebar-link">
                                        <span class="align-middle">Pricing</span>
                                    </a>

                                </li>


                            </ul>

                        </li>

                        <li class="sidebar-item">   
                            <a href="#dashboardMenu3" class="sidebar-link" data-bs-toggle="collapse"
                                aria-expanded="false">

                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-panels-top-left lucide align-middle">
                                    <rect width="18" height="18" x="3" y="3" rx="2"></rect>
                                    <path d="M3 9h18"></path>
                                    <path d="M9 21V9"></path>
                                </svg>

                                <span class="align-middle">Projects</span>

                            </a>

                            <ul class="sidebar-dropdown list-unstyled collapse" id="dashboardMenu3">

                                <li class="sidebar-item" >
                                    <a href="index.html" class="sidebar-link">
                                        <span class="align-middle">Overview</span>
                                    </a>

                                </li>

                                <li class="sidebar-item" >
                                    <a href="index.html" class="sidebar-link">
                                        <span class="align-middle">Details</span>
                                    </a>

                                </li>

                            </ul>

                        </li>


                         <li class="sidebar-item">
                            <a href="#dashboardMenu8" class="sidebar-link" data-bs-toggle="collapse"
                                aria-expanded="false">

                             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-trello lucide align-middle">
                                    <rect width="18" height="18" x="3" y="3" rx="2" ry="2"></rect>
                                    <rect width="3" height="9" x="7" y="7"></rect>
                                    <rect width="3" height="5" x="14" y="7"></rect>
                                </svg>
                                <span class="align-middle">Tasks</span>

                            </a>

                            <ul class="sidebar-dropdown list-unstyled collapse" id="dashboardMenu8">

                                <li class="sidebar-item" >
                                    <a href="index.html" class="sidebar-link">
                                        <span class="align-middle">Lists</span>
                                    </a>

                                </li>

                                <li class="sidebar-item" >
                                    <a href="index.html" class="sidebar-link">
                                        <span class="align-middle">Kanban</span>
                                    </a>

                                </li>

                            </ul>

                        </li>

                    </ul>


                </div>


            <div class="sidebar-item logout-item">

                <a href="#" class="sidebar-link position-absolute bottom-0 start-0" aria-expanded="false">
                    <i class="fa-solid fa-right-from-bracket" width="24" height="24"></i>
                    <span class="align-middle">Logout</span>
                </a>
            </div>

            </div>



        </nav>
    </div>


    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

</body>

</html>