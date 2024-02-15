<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Semua Paket
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <table class="table-auto">
                <thead>
                    <tr>
                        <th>Judul</th>
                        <th>Harga</th>
                        <th>Bahasa</th>
                        <th>Maksimal Orang</th>
                        <th>Waktu</th>
                        <th>Tipe</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($packages as $item)
                        <tr>
                            <td>{{ $item->title }}</td>
                            <td>Rp. {{ number_format($item->price) }}</td>
                            <td>{{ $item->languages }}</td>
                            <td>{{ $item->people }}</td>
                            <td>{{ $item->time }}</td>
                            <td>{{ $item->type }}</td>
                            <td>
                                <div class="flex gap-2">
                                    <a href="" class="py-3 px-5 rounded bg-emerald-600 text-white">Edit</a>
                                    <a href="" class="py-3 px-5 rounded bg-red-500 text-white">Delete</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
