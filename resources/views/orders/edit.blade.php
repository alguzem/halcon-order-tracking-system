<x-app-layout>

<div class="container mt-5">

    <div class="card shadow p-4">

        <h1 class="mb-4">
            Edit Order
        </h1>

        <form method="POST" action="/orders/{{ $order->id }}">

            @csrf
            @method('PUT')

            <div class="mb-3">

                <label>Invoice Number</label>

                <input
                    type="text"
                    name="invoice_number"
                    value="{{ $order->invoice_number }}"
                    class="form-control"
                >

            </div>

            <div class="mb-3">

                <label>Customer Name</label>

                <input
                    type="text"
                    name="customer_name"
                    value="{{ $order->customer_name }}"
                    class="form-control"
                >

            </div>

            <div class="mb-3">

                <label>Status</label>

                <select
                    name="status"
                    class="form-control"
                >

                    <option>Ordered</option>
                    <option>In Process</option>
                    <option>In Route</option>
                    <option>Delivered</option>

                </select>

            </div>

            <div class="mb-3">

                <label>Notes</label>

                <textarea
                    name="notes"
                    class="form-control"
                >{{ $order->notes }}</textarea>

            </div>

            <button class="btn btn-success">
                Update Order
            </button>

        </form>

    </div>

</div>

</x-app-layout>