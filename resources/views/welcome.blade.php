<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Bus everywhere</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" rel="stylesheet">

    <style>
        :root { --gold: #ffcc00; }

        body {
            margin: 0;
            min-height: 100vh;
            background: radial-gradient(circle, #2c3e50, #000);
            font-family: 'Segoe UI', sans-serif;
            color: white;
        }

        .hidden { display: none !important; }

        .auth-card {
            width: 400px;
            padding: 35px;
            background: rgba(0,0,0,0.9);
            border: 2px solid var(--gold);
            border-radius: 25px;
            box-shadow: 0 0 30px rgba(255,204,0,0.4);
            margin: 50px auto;
            text-align: center;
        }

        .input-group-custom { margin-bottom: 15px; }

        .input-group-custom input,
        .input-group-custom select {
            width: 100%;
            padding: 12px;
            border-radius: 20px;
            border: none;
            text-align: center;
            outline: none;
        }

        .btn-gold {
            background: var(--gold);
            color: black;
            font-weight: bold;
            border-radius: 20px;
            padding: 12px;
            border: none;
            width: 100%;
            cursor: pointer;
        }

        .link-switch {
            color: var(--gold);
            cursor: pointer;
            display: block;
            margin-top: 15px;
        }

        .error-msg {
            color: #ff4444;
            font-size: 13px;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>

<!-- REGISTER PAGE -->
<div id="register-page">
    <div class="auth-card">
        <h2 style="color: var(--gold);">Create Account</h2>

        <form id="registerForm">

            <div class="input-group-custom">
                <input type="text" placeholder="Full Name">
            </div>

            <div class="input-group-custom">
                <input type="email" placeholder="Email Address">
            </div>

            <div class="input-group-custom">
                <input type="text" id="regDob" placeholder="Date of Birth">
            </div>

            <div class="input-group-custom">
                <select>
                    <option value="">User Type</option>
                    <option value="1">Student</option>
                    <option value="2">Driver</option>
                    <option value="3">Admin</option>
                </select>
            </div>

            <div class="input-group-custom">
                <input type="password" id="regPassword" placeholder="Create Password">
            </div>

            <div id="formError" class="error-msg hidden">
                Please fill in all fields.
            </div>

            <div id="passwordError" class="error-msg hidden">
                Password must be at least 8 characters, include uppercase, lowercase, number and special character.
            </div>

            <button type="submit" class="btn-gold">Sign Up</button>
        </form>

        <div class="link-switch" onclick="showPage('login-page')">
            Already have an account?
        </div>
    </div>
</div>

<!-- LOGIN PAGE -->
<div id="login-page" class="hidden">
    <div class="auth-card">
        <h2 style="color: var(--gold);">Login In</h2>

        <form id="loginForm">
            <div class="input-group-custom">
                <input type="text" placeholder="Student/Driver ID">
            </div>

            <div class="input-group-custom">
                <input type="password" placeholder="Password">
            </div>

            <button class="btn-gold">Login</button>
        </form>

        <div class="link-switch" onclick="showPage('register-page')">
            Create an account
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<script>
    flatpickr("#regDob", { dateFormat: "Y-m-d" });

    function showPage(pageId) {
        document.getElementById('register-page').classList.add('hidden');
        document.getElementById('login-page').classList.add('hidden');
        document.getElementById(pageId).classList.remove('hidden');
    }

    document.getElementById('registerForm').onsubmit = function(e) {
        e.preventDefault();

        const inputs = this.querySelectorAll('input, select');
        const formError = document.getElementById('formError');
        const passwordError = document.getElementById('passwordError');

        let valid = true;

        inputs.forEach(input => {
            if (input.value.trim() === "") {
                valid = false;
            }
        });

        if (!valid) {
            formError.classList.remove('hidden');
            passwordError.classList.add('hidden');
            return;
        }

        formError.classList.add('hidden');

        const password = document.getElementById('regPassword').value;
        const regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@#$%!]).{8,}$/;

        if (!regex.test(password)) {
            passwordError.classList.remove('hidden');
            return;
        }

        passwordError.classList.add('hidden');

        alert("Account Created Successfully!");
        showPage('login-page');
    };
</script>

</body>
</html>
