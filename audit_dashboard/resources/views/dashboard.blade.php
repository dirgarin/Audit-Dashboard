<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f5f5f5;
        font-size: 14px; /* Perkecil ukuran font body */
    }
    .sidebar {
        width: 250px; /* Perbesar lebar sidebar */
        height: 100vh;
        background-color: #343a40;
        color: white;
        padding-top: 20px;
    }
    .sidebar a {
        color: white;
        display: block;
        padding: 10px;
        text-decoration: none;
        font-size: 16px; /* Ukuran font sidebar */
    }
    .sidebar a:hover {
        background-color: #495057;
    }
    .main-content {
        margin-left: 250px; /* Sesuaikan margin-left dengan lebar sidebar */
        padding: 20px;
    }
    .footer {
        text-align: center;
        padding: 10px;
        background-color: #f1f1f1;
        position: fixed;
        bottom: 0;
        width: calc(100% - 250px); /* Sesuaikan width dengan lebar sidebar */
        margin-left: 250px;
    }
    .navbar {
        margin-left: 250px; /* Sesuaikan margin-left dengan lebar sidebar */
        background-color: #f5f5f5;
    }
    .user-info img {
        width: 40px;
        height: 40px;
        border-radius: 50%;
    }
    .dropdown-menu {
        margin-top: 5px; /* Menyesuaikan posisi dropdown */
    }
</style>

</head>
<body>

    <div class="d-flex">
        <div class="sidebar">
            <h3 class="text-center">Audit</h3>
            <a href="#">Home</a>
            <a href="#">Upload Document</a>
            <a href="#">Audit Reports</a>
            <a href="#">Settings</a>
            <a href="#">Logout</a>
        </div>

        <div class="w-100">
            <nav class="navbar navbar-light">
                <div class="container-fluid d-flex justify-content-end">
                    <div class="user-info d-flex align-items-center">
                        <img src="https://via.placeholder.com/40" class="rounded-circle" alt="User Avatar">
                        <span class="ml-2">User</span>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>


    <div class="footer">
        Copyrights © 2023 Computer Age Management Service Ltd.
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
