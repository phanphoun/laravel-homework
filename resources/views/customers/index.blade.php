@extends('layouts.app')

@section('title', 'Customers')

@section('content')
    <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-between gap-3 mb-4">
        <div>
            <h1 class="h3 mb-1">Customers</h1>
            <p class="text-secondary mb-0">Manage customer names, contact details, and addresses.</p>
        </div>

        <a class="btn btn-primary" href="{{ route('customers.create') }}">Add New Customer</a>
    </div>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card shadow-sm">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Address</th>
                        <th scope="col" class="text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($customers as $customer)
                        <tr>
                            <td class="fw-semibold">{{ $customer->name }}</td>
                            <td>
                                <a href="mailto:{{ $customer->email }}">{{ $customer->email }}</a>
                            </td>
                            <td>{{ $customer->phone ?? '-' }}</td>
                            <td>{{ $customer->address ?? '-' }}</td>
                            <td>
                                <div class="d-flex justify-content-end gap-2">
                                    <a class="btn btn-outline-secondary btn-sm" href="{{ route('customers.show', $customer) }}">View</a>
                                    <a class="btn btn-outline-primary btn-sm" href="{{ route('customers.edit', $customer) }}">Edit</a>
                                    <form action="{{ route('customers.destroy', $customer) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-outline-danger btn-sm" type="submit" onclick="return confirm('Are you sure you want to delete this customer?')">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td class="text-center text-secondary py-5" colspan="5">No customers found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    @if ($customers->hasPages())
        <div class="mt-4">
            {{ $customers->links() }}
        </div>
    @endif
@endsection
