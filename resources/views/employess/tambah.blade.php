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
                            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Tambah Data Employee</h2>
                        </div>
                        <div class="card-body">
                            <form method="post" action="/employess/proses">
                                {{ csrf_field() }}
                                <div class="form-group mb-3">
                                    <label class="mb-1">Nama</label>
                                    <input type="text" name="name" class="form-control" placeholder="Nama ..." required="required">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="mb-1">Address</label>
                                    <textarea name="address" class="form-control" placeholder="Address ..." required="required"></textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="mb-1">Department</label>
                                    <select name="departement_id" class="form-control" required>
                                        @foreach($departement as $department)
                                        <option value="{{ $department->id }}">{{ $department->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="mb-1">Gender</label><br>
                                    <input type="radio" name="gender" value="L" required class="mx-1"> Laki-Laki<br>
                                    <input type="radio" name="gender" value="P" required class="mx-1"> Perempuan<br>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="mb-1">Phone</label>
                                    <input type="number" name="phone" class="form-control" placeholder="phone ..." required="required">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="mb-1">Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="email ..." required="required">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="mb-1">Active</label><br>
                                    <input type="hidden" name="is_active" value="0">
                                    <input type="checkbox" name="is_active" value="1" class="mx-1"> Active<br>
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