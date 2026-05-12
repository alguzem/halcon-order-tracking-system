<x-app-layout>

<div class="container mt-5">

    <div class="card shadow p-4">

        <h1 class="mb-4">
            Create Order
        </h1>

        <form method="POST" action="/orders">

            @csrf

            <div class="mb-3">

                <label>Invoice Number</label>

                <input
                    type="text"
                    name="invoice_number"
                    class="form-control"
                    required
                >

            </div>

            <div class="mb-3">

                <label>Customer Name</label>

                <input
                    type="text"
                    name="customer_name"
                    class="form-control"
                    required
                >

            </div>

            <div class="mb-3">

                <label>Customer Number</label>

                <input
                    type="text"
                    name="customer_number"
                    class="form-control"
                    required
                >

            </div>

            <div class="mb-3">

                <label>Notes</label>

                <textarea
                    name="notes"
                    class="form-control"
                ></textarea>

            </div>

            <button class="btn btn-primary">
                Save Order
            </button>

        </form>

    </div>

</div>

</x-app-layout>