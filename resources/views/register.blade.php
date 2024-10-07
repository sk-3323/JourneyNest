<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>

    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Custom CSS -->
    <style>
        body {
            background: linear-gradient(to right, #4facfe, #00f2fe);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Arial', sans-serif;
        }

        .signupBox {
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
        }

        .signupBox h3 {
            color: #333;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .form-control {
            border-radius: 50px;
            padding: 10px;
        }

        .input-group-text {
            border-radius: 50px;
            background-color: #007bff;
            color: white;
        }

        .signupBox .btn {
            border-radius: 50px;
            padding: 10px 0;
            background-color: #007bff;
            color: white;
            border: none;
        }

        .signupBox .btn:hover {
            background-color: #0056b3;
        }

        .icon i {
            font-size: 20px;
            color: #007bff;
            margin: 0 10px;
            transition: color 0.3s ease;
        }

        .icon i:hover {
            color: #0056b3;
        }

        .signupBox p {
            margin-top: 10px;
        }

        .signupBox a {
            color: #007bff;
            text-decoration: none;
        }

        .signupBox a:hover {
            text-decoration: underline;
        }

        .text-muted {
            font-size: 12px;
            color: #555;
        }

        .error-message {
            color: red;
            font-size: 12px;
            margin-top: -10px;
        }
    </style>
</head>

<body>
    <div class="signupBox">
        <div class="text-center">
            <h3>Sign Up Here!</h3>
            <form action="/registerUser" method="post">
                @csrf

                <!-- Username -->
                <div class="input-group my-3">
                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
                    <input type="text" class="form-control" placeholder="Username" name="username">
                </div>
                @error('username')
                    <div class="error-message">{{ $message }}</div>
                @enderror

                <!-- Fullname -->
                <div class="input-group my-3">
                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
                    <input type="text" class="form-control" placeholder="Fullname" name="fullname">
                </div>
                @error('fullname')
                    <div class="error-message">{{ $message }}</div>
                @enderror

                <!-- Email -->
                <div class="input-group my-3">
                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-envelope"></i></span>
                    <input type="email" class="form-control" placeholder="Email" name="email">
                </div>
                @error('email')
                    <div class="error-message">{{ $message }}</div>
                @enderror

                <!-- Password -->
                <div class="input-group my-3">
                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-lock"></i></span>
                    <input type="password" class="form-control" placeholder="Password" name="password">
                </div>
                @error('password')
                    <div class="error-message">{{ $message }}</div>
                @enderror

                <!-- Confirm Password -->
                <div class="input-group my-3">
                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-lock"></i></span>
                    <input type="password" class="form-control" placeholder="Confirm Password" name="conpassword">
                </div>
                @error('conpassword')
                    <div class="error-message">{{ $message }}</div>
                @enderror

                <!-- Address -->
                <div class="input-group my-3">
                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-home"></i></span>
                    <input type="text" name="address" placeholder="Address" class="form-control" />
                </div>
                @error('address')
                    <div class="error-message">{{ $message }}</div>
                @enderror

                <!-- Mobile No -->
                <div class="input-group my-3">
                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-phone"></i></span>
                    <input type="text" class="form-control" placeholder="Mobile No" name="mobileno">
                </div>
                @error('mobileno')
                    <div class="error-message">{{ $message }}</div>
                @enderror

                <!-- Register Button -->
                <div class="d-grid gap-2 my-4">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>

                <!-- Social Icons -->
                <div class="text-center">
                    <div class="icon">
                        <i class="fa-brands fa-facebook"></i>
                        <i class="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-whatsapp"></i>
                    </div>
                </div>

                <!-- Links -->
                <p class="text-muted">Forgot Password? <a href="#">Click here</a></p>
                <p class="text-muted">Already have an account? <a href="/login">Login now</a></p>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
