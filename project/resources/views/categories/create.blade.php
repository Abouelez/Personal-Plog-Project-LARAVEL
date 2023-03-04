@extends('layouts.app')
@section('title', 'Create Category')
@section('content')
    <div class="container">
        <x-card title="Create Category">


            <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="name">
                    @error('name')
                        <div style="color: red" class="form-text">{{ $message }}</div>
                    @enderror

                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </x-card>
    </div>

@endsection