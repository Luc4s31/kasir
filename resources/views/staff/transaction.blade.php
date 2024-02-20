<div class="container mt-4">
    <div class="row">
        <div class="col"><div class="card shadow-sm">
            <div class="card-body">
                <table class="table table-striped">
                    <thead class="table-primary">
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Serial Number</th>
                            <th scope="col">Waktu</th>
                            <th scope="col">Total Harga</th>
                            <th scope="col">Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($transactions as $item)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $item->serial_number }}</td>
                            <td>{{ $item->created_at->format('d M Y H:i') }}</td>
                            <td>Rp{{ number_format($item->total, 2, ',', '.') }}</td>
                            <td>
                                <a href="#" class="btn btn-info btn-sm">Detail</a>
                                <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection