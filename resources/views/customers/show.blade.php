@extends('layouts.app')

@section('title', $customer->name)

@section('content')
    <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-between gap-3 mb-4">
        <div>
            <h1 class="h3 mb-1">{{ $customer->name }}</h1>
            <p class="text-secondary mb-0">Customer details</p>
        </div>

        <div class="d-flex gap-2">
            <a class="btn btn-outline-secondary" href="{{ route('customers.index') }}">Back to List</a>
            <a class="btn btn-primary" href="{{ route('customers.edit', $customer) }}">Edit Customer</a>
        </div>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <dl class="row mb-0">
                <dt class="col-sm-3 text-secondary">Email</dt>
                <dd class="col-sm-9">
                    <a href="mailto:{{ $customer->email }}">{{ $customer->email }}</a>
                </dd>

                <dt class="col-sm-3 text-secondary">Phone</dt>
                <dd class="col-sm-9">{{ $customer->phone ?? '-' }}</dd>

                <dt class="col-sm-3 text-secondary">Address</dt>
                <dd class="col-sm-9 mb-0">{{ $customer->address ?? '-' }}</dd>
            </dl>
        </div>
    </div>
@endsection
