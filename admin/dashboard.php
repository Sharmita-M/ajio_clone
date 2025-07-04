<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link rel="stylesheet" href="asserts/style.css">

</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <?php include 'includes/header.php'; ?>
            </div>
            <div class="col-md-10"> <!-- Main content here -->

                <div class="wrapper d-flex align-items-start justify-content-between">

                    <main class="main-content">

                        <div class="content ">
                            <h1>Welcome Admin</h1>

                            <div class="quick-stats">
                                <div class="stat-card">
                                    <div class="stat-icon" style="background-color: #4e73df;">
                                        <i class="fas fa-file-alt"></i>
                                    </div>
                                    <div class="stat-info">
                                        <h3>12</h3>
                                        <p>Total orders</p>
                                    </div>
                                </div>
                                <div class="stat-card">
                                    <div class="stat-icon" style="background-color: #1cc88a;">
                                        <i class="fas fa-check-circle"></i>
                                    </div>
                                    <div class="stat-info">
                                        <h3>4</h3>
                                        <p>Completed</p>
                                    </div>
                                </div>
                                <div class="stat-card">
                                    <div class="stat-icon" style="background-color: #f6c23e;">
                                        <i class="fas fa-exclamation-circle"></i>
                                    </div>
                                    <div class="stat-info">
                                        <h3>5</h3>
                                        <p>Pending</p>
                                    </div>
                                </div>
                                <div class="stat-card">
                                    <div class="stat-icon" style="background-color: #e74a3b;">
                                        <i class="fas fa-times-circle"></i>
                                    </div>
                                    <div class="stat-info">
                                        <h3>3</h3>
                                        <p>Cancelled</p>
                                    </div>
                                </div>
                            </div>


                        </div>
                </div>
                </main>

            </div>


        </div>
    </div>
    <div>









        <script src="asserts/js/script.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>


</body>

</html>