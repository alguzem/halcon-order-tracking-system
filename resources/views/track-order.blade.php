<!DOCTYPE html>
<html>
<head>

    <title>Track Order</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="card shadow p-4">

        <h2 class="mb-4">
            Order Status
        </h2>

        @if($order)

            <h4>
                Status:
            </h4>

            <span class="badge bg-success">
                {{ $order->status }}
            </span>

            <hr>

            <p>
                Customer:
                {{ $order->customer_name }}
            </p>

            <p>
                Invoice:
                {{ $order->invoice_number }}
            </p>

        @else

            <div class="alert alert-danger">
                Order not found
            </div>

        @endif

    </div>

</div>

</body>
</html>