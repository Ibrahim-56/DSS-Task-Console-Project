<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | Ministry of Commerce - Department of Shared Services</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #8B0000;
            --secondary-color: #2E8B57;
            --accent-color: #ffc107;
        }
        
        body.login-body {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .login-container {
            width: 100%;
            max-width: 420px;
            margin: 20px;
        }
        
        .login-card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            overflow: hidden;
            transition: transform 0.3s ease;
        }
        
        .login-card:hover {
            transform: translateY(-5px);
        }
        
        .login-header {
            background: var(--secondary-color);
            color: white;
            padding: 25px 20px;
            text-align: center;
            position: relative;
        }
        
        .logo-container {
            margin-bottom: 15px;
        }
        
        .logo-placeholder {
            width: 80px;
            height: 80px;
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        
        .logo-placeholder i {
            font-size: 40px;
            color: var(--secondary-color);
        }
        
        .login-form {
            padding: 25px;
        }
        
        .form-control {
            padding: 12px 15px;
            border-radius: 8px;
            border: 1px solid #ddd;
            transition: all 0.3s;
        }
        
        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.15);
        }
        
        .input-group-text {
            background: white;
            border-radius: 8px 0 0 8px;
        }
        
        .password-toggle {
            cursor: pointer;
            background: white;
            border-left: none;
            border-radius: 0 8px 8px 0;
        }
        
        .btn-login {
            background: var(--secondary-color);
            border: none;
            padding: 12px;
            font-weight: 600;
            border-radius: 8px;
            transition: all 0.3s;
        }
        
        .btn-login:hover {
            background: #0f4933ff;
            transform: translateY(-2px);
        }
        
        .alert {
            border-radius: 8px;
            padding: 12px 15px;
        }
        
        .login-footer {
            text-align: center;
            padding: 15px;
            font-size: 0.85rem;
            color: #6c757d;
            background: #f8f9fa;
            border-top: 1px solid #e9ecef;
        }
        
        @media (max-width: 576px) {
            .login-container {
                margin: 10px;
            }
            
            .login-form {
                padding: 20px;
            }
        }
    </style>
</head>
<body class="login-body">
    <div class="login-container">
        <div class="login-card">
            <div class="login-header">
                <div class="logo-container">
                    <div class="logo-placeholder">
                        <!-- Replaced image with Font Awesome landmark icon -->
                        <i class="fas fa-landmark"></i>
                    </div>
                    <h5>Ministry of Commerce</h5>
                </div>
                <h4>DSS Task Console</h4>
            </div>
            
            <form method="POST" action="app/login.php" class="login-form">
                <h3 class="text-center mb-4">Login to Your Account</h3>
                
                <?php if (isset($_GET['error'])) { ?>
                    <div class="alert alert-danger" role="alert">
                        <i class="fas fa-exclamation-circle me-2"></i>
                        <?php echo stripcslashes(string: $_GET['error']); ?>
                    </div>
                <?php } ?>

                <?php if (isset($_GET['success'])) { ?>
                    <div class="alert alert-success" role="alert">
                        <i class="fas fa-check-circle me-2"></i>
                        <?php echo stripcslashes(string: $_GET['success']); ?>
                    </div>
                <?php } ?>
                
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                        <input type="text" class="form-control" id="username" name="user_name" placeholder="Enter your username">
                    </div>
                </div>
                
                <div class="mb-4">
                    <label for="password" class="form-label">Password</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
                        <span class="input-group-text password-toggle" id="passwordToggle">
                            <i class="fas fa-eye"></i>
                        </span>
                    </div>
                </div>
                
                <button type="submit" class="btn btn-primary w-100 btn-login">Login</button>
                
                
            </form>
            
            <div class="login-footer">
                <p class="mb-0">© 2025 Ministry of Commerce - Department of Shared Services</p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <script>
        // Toggle password visibility
        document.getElementById('passwordToggle').addEventListener('click', function() {
            const passwordInput = document.getElementById('password');
            const icon = this.querySelector('i');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        });
    </script>
</body>
</html>