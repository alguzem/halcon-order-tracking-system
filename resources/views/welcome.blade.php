<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>
        Halcon System
    </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body{
            background:#f1f5f9;
            font-family:Arial;
        }

        .hero{
            height:100vh;
            display:flex;
            align-items:center;
            justify-content:center;
        }

        .hero-card{
            width:550px;
            background:white;
            padding:50px;
            border-radius:20px;
            box-shadow:0 10px 30px rgba(0,0,0,0.1);
        }

        .title{
            font-size:40px;
            font-weight:bold;
            color:#0f172a;
        }

        .subtitle{
            color:gray;
        }

        .btn-dark{
            border-radius:10px;
        }

        .form-control{
            border-radius:10px;
            height:50px;
        }

    </style>

</head>

<body>

<div class="hero">

    <div class="hero-card">

        <div class="text-center mb-5">

            <h1 class="title">
                HALCON SYSTEM
            </h1>

            <p class="subtitle">
                Professional logistics and order tracking platform
            </p>

        </div>

        <form method="GET" action="/track-order">

            <div class="mb-3">

                <label class="mb-2">
                    Customer Number
                </label>

                <input
                    type="text"
                    name="customer_number"
                    class="form-control"
                    required
                >

            </div>

            <div class="mb-4">

                <label class="mb-2">
                    Invoice Number
                </label>

                <input
                    type="text"
                    name="invoice_number"
                    class="form-control"
                    required
                >

            </div>

            <button class="btn btn-dark w-100 mb-3">

                Track Order

            </button>

        </form>

        <div class="text-center">

            <a href="/login" class="btn btn-outline-dark w-100">

                Employee Login

            </a>

        </div>

    </div>

</div>

</body>

</html>