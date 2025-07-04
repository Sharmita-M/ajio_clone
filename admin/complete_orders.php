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

                <div class="reports-table">
                    <div class="table-header">
                        <h2>Completed Orders</h2>
                        <button class="btn-primary">
                            <i class="fas fa-plus"></i> New Order
                        </button>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#1</td>
                                <td>Shreya</td>
                                <td>Skincare</td>
                                <td>15/05/2025</td>
                                <td><span class="status completed">Completed</span></td>
                                <td>
                                    <button class="btn-action"><i class="fas fa-eye"></i></button>
                                    <button class="btn-action"><i class="fas fa-download"></i></button>
                                    <button class="btn-action"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                                            <td>#5</td>
                                <td>Seema</td>
                                <td>Home & Kitchen</td>
                                <td>15/05/2025</td>
                                <td><span class="status completed">Completed</span></td>
                                <td>
                                    <button class="btn-action"><i class="fas fa-eye"></i></button>
                                    <button class="btn-action"><i class="fas fa-download"></i></button>
                                    <button class="btn-action"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>#3</td>
                                <td>Aaditya</td>
                                <td>Shirt</td>
                                <td>15/05/2025</td>
                                <td><span class="status completed">Completed</span></td>
                                <td>
                                    <button class="btn-action"><i class="fas fa-eye"></i></button>
                                    <button class="btn-action"><i class="fas fa-download"></i></button>
                                    <button class="btn-action"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</html>