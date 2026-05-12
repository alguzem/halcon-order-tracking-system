<x-app-layout>

<div class="container-fluid">

    <div class="row">

        <div class="col-md-2 bg-dark text-white vh-100 p-3">

            <h3 class="mb-4">
                Halcon
            </h3>

            <a href="/dashboard" class="btn btn-dark w-100 mb-2">
                Dashboard
            </a>

            <a href="/orders" class="btn btn-dark w-100 mb-2">
                Orders
            </a>

            <a href="/archived-orders" class="btn btn-dark w-100 mb-2">
                Archived Orders
            </a>

            <a href="/users" class="btn btn-dark w-100 mb-2">
                Users
            </a>

        </div>

        <div class="col-md-10 p-4">

            <h1 class="mb-4">
                Dashboard
            </h1>

            <div class="row">

                <div class="col-md-4">

                    <div class="card shadow p-4">

                        <h3>
                            Total Orders
                        </h3>

                        <h1>
                            25
                        </h1>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="card sahdow-lg shadow p-4">

                        <h3>
                            Delivered
                        </h3>

                        <h1>
                            10
                        </h1>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="card shadow p-4">

                        <h3>
                            In Route
                        </h3>

                        <h1>
                            5
                        </h1>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

</x-app-layout>