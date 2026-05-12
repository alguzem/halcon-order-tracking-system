<x-app-layout>

<div class="container mt-5">

    <!-- PAGE HEADER -->

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h1 class="fw-bold mb-1">
                <i class="bi bi-box-seam"></i>
                Orders Management
            </h1>

            <p class="text-muted mb-0">
                Manage and monitor customer orders
            </p>

        </div>

        <a href="/orders/create" class="btn btn-dark shadow-sm">

            <i class="bi bi-plus-circle"></i>
            Create Order

        </a>

    </div>

    <!-- SEARCH CARD -->

    <div class="card shadow-custom mb-4">

        <div class="card-body">

            <form method="GET" action="/orders">

                <div class="row align-items-end">

                    <!-- SEARCH INVOICE -->

                    <div class="col-md-5 mb-3">

                        <label class="form-label fw-semibold">

                            Invoice Number

                        </label>

                        <input
                            type="text"
                            name="invoice_number"
                            class="form-control"
                            placeholder="Search invoice..."
                            value="{{ request('invoice_number') }}"
                        >

                    </div>

                    <!-- STATUS -->

                    <div class="col-md-4 mb-3">

                        <label class="form-label fw-semibold">

                            Order Status

                        </label>

                        <select
                            name="status"
                            class="form-control"
                        >

                            <option value="">
                                All Status
                            </option>

                            <option value="Ordered"
                                {{ request('status') == 'Ordered' ? 'selected' : '' }}>
                                Ordered
                            </option>

                            <option value="In Process"
                                {{ request('status') == 'In Process' ? 'selected' : '' }}>
                                In Process
                            </option>

                            <option value="In Route"
                                {{ request('status') == 'In Route' ? 'selected' : '' }}>
                                In Route
                            </option>

                            <option value="Delivered"
                                {{ request('status') == 'Delivered' ? 'selected' : '' }}>
                                Delivered
                            </option>

                        </select>

                    </div>

                    <!-- BUTTON -->

                    <div class="col-md-3 mb-3">

                        <button class="btn btn-dark w-100">

                            <i class="bi bi-search"></i>
                            Search Orders

                        </button>

                    </div>

                </div>

            </form>

        </div>

    </div>

    <!-- TABLE CARD -->

    <div class="card shadow-custom">

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-hover align-middle">

                    <thead class="table-dark">

                        <tr>

                            <th>
                                Invoice
                            </th>

                            <th>
                                Customer
                            </th>

                            <th>
                                Customer Number
                            </th>

                            <th>
                                Status
                            </th>

                            <th class="text-center">
                                Actions
                            </th>

                        </tr>

                    </thead>

                    <tbody>

                        @forelse($orders as $order)

                        <tr>

                            <!-- INVOICE -->

                            <td class="fw-semibold">

                                {{ $order->invoice_number }}

                            </td>

                            <!-- CUSTOMER -->

                            <td>

                                {{ $order->customer_name }}

                            </td>

                            <!-- CUSTOMER NUMBER -->

                            <td>

                                {{ $order->customer_number }}

                            </td>

                            <!-- STATUS -->

                            <td>

                                @if($order->status == 'Ordered')

                                    <span class="badge bg-secondary">

                                        Ordered

                                    </span>

                                @elseif($order->status == 'In Process')

                                    <span class="badge bg-warning text-dark">

                                        In Process

                                    </span>

                                @elseif($order->status == 'In Route')

                                    <span class="badge bg-primary">

                                        In Route

                                    </span>

                                @elseif($order->status == 'Delivered')

                                    <span class="badge bg-success">

                                        Delivered

                                    </span>

                                @endif

                            </td>

                            <!-- ACTIONS -->

                            <td class="text-center">

                                <!-- EDIT -->

                                <a
                                    href="/orders/{{ $order->id }}/edit"
                                    class="btn btn-outline-warning btn-sm"
                                >

                                    <i class="bi bi-pencil-square"></i>
                                    Edit

                                </a>

                                <!-- ARCHIVE -->

                                <form
                                    action="/orders/{{ $order->id }}"
                                    method="POST"
                                    style="display:inline;"
                                >

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        class="btn btn-outline-danger btn-sm"

                                        onclick="return confirm('Archive this order?')"
                                    >

                                        <i class="bi bi-archive"></i>
                                        Archive

                                    </button>

                                </form>

                            </td>

                        </tr>

                        @empty

                        <tr>

                            <td colspan="5" class="text-center py-5">

                                <div class="text-muted">

                                    <i class="bi bi-inbox display-5"></i>

                                    <p class="mt-3 mb-0">

                                        No orders found

                                    </p>

                                </div>

                            </td>

                        </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

</x-app-layout>