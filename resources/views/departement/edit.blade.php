<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Departement') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                <div class="p-6 text-gray-900">
                    <div class="card p-2">
                        <div class="card-header">
                            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Edit Data Departement</h2>
                        </div>
                        <div class="card-body">
                            <form method="post" action="/departement/update/{{ $departement->id }}">
                                {{ csrf_field() }}
                                {{ method_field('GET') }}
                                <div class="form-group mb-3">
                                    <label class="mb-1">Nama</label>
                                    <input type="hidden" name="id" class="form-control" value=" {{ $departement->id }}">
                                    <input type="text" name="name" class="form-control" placeholder="Nama .." value=" {{ $departement->name }}">
                                </div>
                                <div class="form-group">
                                    <a type="button" href="/departement" class="btn btn-secondary">Batal</a>
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