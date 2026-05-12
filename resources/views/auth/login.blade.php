<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body{
            background:#e2e8f0;
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
        }

        .login-card{
            width:450px;
            background:white;
            padding:40px;
            border-radius:20px;
            box-shadow:0 10px 30px rgba(0,0,0,0.1);
        }

        .form-control{
            height:50px;
            border-radius:10px;
        }

        .btn-dark{
            height:50px;
            border-radius:10px;
        }

    </style>

</head>

<body>

<div class="login-card">

    <div class="text-center mb-4">

        <h1>
            HALCON
        </h1>

        <p class="text-muted">
            Employee Access
        </p>

    </div>

    <form method="POST" action="{{ route('login') }}">

        @csrf

        <div class="mb-3">

            <label class="mb-2">
                Email
            </label>

            <input
                type="email"
                name="email"
                class="form-control"
                required
            >

        </div>

        <div class="mb-4">

            <label class="mb-2">
                Password
            </label>

            <input
                type="password"
                name="password"
                class="form-control"
                required
            >

        </div>

        <button class="btn btn-dark w-100">

            Login

        </button>

    </form>

</div>

</body>

</html>