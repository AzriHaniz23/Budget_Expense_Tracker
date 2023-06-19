<!DOCTYPE html>
<html>

<head>
    <title>Sign Up</title>
    <style>
        body {
            background-color: #1f2538;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: Arial, sans-serif;
        }

        .card {
            max-width: 325px;
            width: 100%;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        .logo {
            text-align: center;
            margin-bottom: 20px;
        }

        h1 {
            margin: 0;
            font-size: 24px;
            font-weight: bold;
            color: #007bff;
        }

        h2 {
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0069d9;
        }

        .login-link {
            text-align: right;
            margin-top: 10px;
        }

        .login-link a {
            color: #007bff;
        }
    </style>
</head>

<body>
    <div class="card">
        <div class="logo">
            <h1>Budget and Expense Tracker</h1>
            <!-- Add your logo image here -->
            <!-- Example: <img src="logo.png" alt="Logo"> -->
        </div>

        <h2>Sign Up</h2>

        <?php
        // Check if the form is submitted
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Retrieve the form data
            $email = $_POST['email'] ?? '';
            $username = $_POST['username'] ?? '';
            $password = $_POST['password'] ?? '';

            // Validate the form data (you can add more validation if needed)
            if (empty($email) || empty($username) || empty($password)) {
                echo '<p>Please fill in all fields.</p>';
            } else {
                // TODO: Perform database operations (e.g., store user data)

                // Display a success message
                echo '<p>Sign up successful!</p>';
            }
        }
        ?>

        <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>
            </div>

            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" name="username" id="username" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required>
            </div>

            <div class="login-link">
                <a href="login.php">Login</a>
            </div>

            <input type="submit" value="Sign Up">
        </form>
    </div>

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>

    <script>
        $(document).ready(function() {
            end_loader();
        });
    </script>
</body>

</html>