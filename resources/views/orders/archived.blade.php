<x-app-layout>

<div class="container mt-5">

    <h1 class="mb-4">
        Archived Orders
    </h1>

    <table class="table table-bordered">

        <thead>

            <tr>
                <th>Invoice</th>
                <th>Customer</th>
                <th>Actions</th>
            </tr>

        </thead>

        <tbody>

            @foreach($orders as $order)

            <tr>

                <td>
                    {{ $order->invoice_number }}
                </td>

                <td>
                    {{ $order->customer_name }}
                </td>

                <td>

                    <a
                        href="/restore-order/{{ $order->id }}"
                        class="btn btn-success btn-sm"
                    >
                        Restore
                    </a>

                </td>

            </tr>

            @endforeach

        </tbody>

    </table>

</div>

</x-app-layout>