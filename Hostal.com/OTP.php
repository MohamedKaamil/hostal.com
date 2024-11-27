<?php session_start() ?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <link rel="icon" href="Favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <title>Verification</title>
    <style>
        body {
            background-color: #f4f7fa;
            font-family: 'Raleway', sans-serif;
        }

        .navbar-laravel {
            background-color: #007bff;
            color: white;
        }

        .navbar-laravel .navbar-brand {
            color: white;
        }

        .otp-container {
            display: flex;
            justify-content: space-between;
            max-width: 350px;
            margin: 20px auto;
        }

        .otp-input {
            width: 45px;
            height: 50px;
            font-size: 24px;
            text-align: center;
            border: 1px solid #007bff;
            border-radius: 4px;
            margin-right: 5px;
        }

        .otp-input:focus {
            border-color: #0056b3;
            outline: none;
            box-shadow: 0px 0px 5px #0056b3;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            box-shadow: 0px 0px 8px rgba(0, 123, 255, 0.6);
        }

        .card {
            margin-top: 50px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #007bff;
            color: white;
        }

        .form-group label {
            color: #007bff;
        }

        .login-form {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="#">Verification Account</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>

<main class="login-form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Verification Account</div>
                    <div class="card-body">
                        <form action="#" method="POST">
                            <div class="form-group row">
                                <label for="otp" class="col-md-4 col-form-label text-md-right">OTP Code</label>
                                <div class="col-md-8 otp-container">
                                    <input type="text" id="otp-1" maxlength="1" class="otp-input" required autofocus>
                                    <input type="text" id="otp-2" maxlength="1" class="otp-input" required>
                                    <input type="text" id="otp-3" maxlength="1" class="otp-input" required>
                                    <input type="text" id="otp-4" maxlength="1" class="otp-input" required>
                                    <input type="text" id="otp-5" maxlength="1" class="otp-input" required>
                                    <input type="text" id="otp-6" maxlength="1" class="otp-input" required>
                                </div>
                            </div>

                            <input type="hidden" id="otp_code" name="otp_code">

                            <div class="col-md-8 offset-md-4">
                                <input type="submit" value="Verify" name="verify" class="btn btn-primary btn-block">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
    // Automatically focus next field on input
    const otpInputs = document.querySelectorAll('.otp-input');
    otpInputs.forEach((input, index) => {
        input.addEventListener('input', (e) => {
            if (input.value.length === 1 && index < otpInputs.length - 1) {
                otpInputs[index + 1].focus();
            }
            updateHiddenOtpField();
        });

        input.addEventListener('keydown', (e) => {
            if (e.key === 'Backspace' && input.value === '' && index > 0) {
                otpInputs[index - 1].focus();
            }
        });
    });

    function updateHiddenOtpField() {
        const otpCode = Array.from(otpInputs).map(input => input.value).join('');
        document.getElementById('otp_code').value = otpCode;
    }
</script>
</body>
</html>

<?php 
session_start();
include 'db_connection.php'; // Ensure you have the correct path

if(isset($_POST["verify"])) {
    $otp = $_SESSION['otp'];
    $email = $_SESSION['mail'];
    $otp_code = $_POST['otp_code'];

    if ($otp != $otp_code) {
        echo "<script>alert('Invalid OTP code');</script>";
    } else {
        // Check if the user exists and update status
        $updateStatusQuery = "UPDATE users SET status = 1 WHERE email = ?";
        $stmt = $conn->prepare($updateStatusQuery);
        $stmt->bind_param("s", $email);
        
        if ($stmt->execute()) {
            echo "<script>alert('Verification complete, you may sign in now'); window.location.replace('Login_Signup.php');</script>";
        } else {
            echo "<script>alert('Error updating verification status');</script>";
        }
    }
}

$conn->close();
?>

