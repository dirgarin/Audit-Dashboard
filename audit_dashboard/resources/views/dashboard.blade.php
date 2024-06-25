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
            font-size: 14px;
            margin: 0;
            overflow-x: hidden; /* Prevent horizontal scrolling */
        }
        .sidebar {
            width: 250px;
            height: 100vh;
            background-color: #343a40;
            color: white;
            padding-top: 20px;
            position: fixed;
            top: 0;
            left: -250px; /* Initially hide the sidebar */
            transition: left 0.3s;
        }
        .sidebar a {
            color: white;
            display: block;
            padding: 10px;
            text-decoration: none;
            font-size: 16px;
        }
        .sidebar a:hover {
            background-color: #495057;
        }
        .main-content {
            margin-left: 0; /* No margin initially */
            transition: margin-left 0.3s;
            padding: 20px;
        }
        .footer {
            text-align: center;
            padding: 10px;
            background-color: #f1f1f1;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        .navbar {
            background-color: #f5f5f5;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
        }
        .user-info img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
        }
        .dropdown-menu {
            margin-top: 5px;
        }
        .hamburger {
            font-size: 24px;
            cursor: pointer;
        }
        .hamburger span {
            margin-left: 10px; /* Add some space between the icon and the text */
            font-size: 18px; /* Adjust the font size of the text */
            vertical-align: middle; /* Align the text vertically with the icon */
        }
    </style>
</head>
<body>
    <div class="d-flex">
        <div class="sidebar" id="sidebar">
            <h3 class="text-center">Audit</h3>
            <a href="#">Home</a>
            <a href="#">Upload Document</a>
            <a href="#">Audit Reports</a>
            <a href="#">Settings</a>
            <a href="#">Logout</a>
        </div>
        <div class="w-100">
            <nav class="navbar navbar-light">
                <div class="d-flex align-items-center">
                    <span class="hamburger" id="hamburger">&#9776;<span>Audit</span></span>
                </div>
                <div class="user-info d-flex align-items-center">
                    <div class="dropdown">
                        <img src="https://via.placeholder.com/40" class="rounded-circle dropdown-toggle" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" alt="User Avatar">
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">Setting Profile</a>
                            <div class="dropdown-divider"></div>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button class="dropdown-item" type="submit">Logout</button>
                            </form>
                        </div>
                        <span class="ml-2">User</span>
                    </div>
                </div>
            </nav>
            <div class="main-content" id="main-content">
                <!-- Your main content goes here -->
            </div>
        </div>
    </div>
    <div class="footer">
        Copyrights © 2023 Computer Age Management Service Ltd.
    </div>

    <script>
        document.getElementById("hamburger").onclick = function() {
            var sidebar = document.getElementById("sidebar");
            var mainContent = document.getElementById("main-content");
            if (sidebar.style.left === "-250px") {
                sidebar.style.left = "0";
                mainContent.style.marginLeft = "250px";
            } else {
                sidebar.style.left = "-250px";
                mainContent.style.marginLeft = "0";
            }
        };
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
