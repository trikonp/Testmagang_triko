<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Employees') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                <div class="p-6 text-gray-900">
                    <div class="card p-2">
                        <div class="card-header">
                            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Edit Data Employees</h2>
                        </div>
                        <div class="card-body">
                            <form method="post" action="/employess/update/{{ $employess->id }}">
                                {{ csrf_field() }}
                                {{ method_field('GET') }}
                                <div class="form-group mb-3">
                                    <label class="mb-1">Nama</label>
                                    <input type="hidden" name="id" class="form-control" value=" {{ $employess->id }}">
                                    <input type="text" name="name" class="form-control" placeholder="Nama .." value=" {{ $employess->name }}">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="mb-1">Address</label>
                                    <textarea name="address" class="form-control" placeholder="Alamat .."> {{ $employess->address }} </textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="mb-1">Departement</label>
                                    <select name="departement_id" class="form-control mx-1" required>
                                        @foreach($departement as $department)
                                        <option value="{{ $department->id }}" {{ $department->id == old('departement_id', $employess->departement_id) ? 'selected' : '' }}>{{ $department->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="mb-1">Gender</label><br>
                                    <input class="mx-1" type="radio" name="gender" value="L" {{ $employess->gender == 'L' ? 'checked' : '' }} required> Male<br>
                                    <input class="mx-1" type="radio" name="gender" value="P" {{ $employess->gender == 'P' ? 'checked' : '' }} required> Female<br>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="mb-1">Phone</label>
                                    <input type="text" name="phone" class="form-control" placeholder="departement .." value=" {{ $employess->phone }}">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="mb-1">Email</label>
                                    <input type="text" name="email" class="form-control" placeholder="departement .." value=" {{ $employess->email }}">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="mb-1">Active</label><br>
                                    <input type="hidden" name="is_active" value="0">
                                    <input class="mx-1" type="checkbox" name="is_active" value="1" {{ $employess->is_active ? 'checked' : '' }}> Active<br>
                                </div>
                                <div class="form-group">
                                    <a type="button" href="/employess" class="btn btn-secondary">Batal</a>
                                    <input type="submit" class="btn btn-success" value="Simpan">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>