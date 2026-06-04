@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
    <div class="row align-items-center g-4 py-4">
        <div class="col-lg-7">
            <span class="badge text-bg-primary mb-3">Laravel Customer App</span>
            <h1 class="display-5 fw-semibold mb-3">Welcome to Customer Management</h1>
            <p class="lead text-secondary mb-4">
                Keep customer names, email addresses, phone numbers, and addresses organized in one simple workspace.
            </p>

            <div class="d-flex flex-column flex-sm-row gap-2">
                <a class="btn btn-primary btn-lg" href="{{ route('customers.index') }}">View Customers</a>
                <a class="btn btn-outline-secondary btn-lg" href="{{ route('customers.create') }}">Add Customer</a>
            </div>
        </div>

        <div class="col-lg-5">
            <div class="card shadow-sm">
                <div class="card-body p-4">
                    <h2 class="h5 mb-3">Quick Actions</h2>

                    <div class="list-group list-group-flush">
                        <a class="list-group-item list-group-item-action px-0 d-flex justify-content-between align-items-center" href="{{ route('customers.index') }}">
                            <span>Browse customer records</span>
                            <span class="text-secondary">Open</span>
                        </a>
                        <a class="list-group-item list-group-item-action px-0 d-flex justify-content-between align-items-center" href="{{ route('customers.create') }}">
                            <span>Create a new customer</span>
                            <span class="text-secondary">Start</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
