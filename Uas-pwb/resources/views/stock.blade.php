@extends('app')

@section('content')
    <h3>Form Input Stock LKS</h3>

    <h3>Cek Stock</h3>
    <table border="1" cellpadding="5">
        <tr>
            <td>No.</td>
            <td>Kelas</td>
            <td>Jumlah</td>
            <td>Harga</td>
            <td>Nilai Persediaan</td>
            <td>Action</td>
        </tr>
        @foreach($lkses as $lks)
            <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td>{{ $lks->class }}</td>
                <td>{{ $lks->quantity }}</td>
                <td>{{ $lks->price }}</td>
                <td>{{ $lks->quantity * $lks->price }}</td>
                <td>
                    <a href="{{ route('lks.edit', $lks->id) }}">edit</a> |
                    {{--                    <a href="#">hapus</a>--}}
                    <a href="#" class="btn-delete" data-id='{{ $lks->id }}'>hapus</a>

                    <form action="{{ route('lks.destroy', $lks->id) }}" method="POST" id="delete-form-{{ $lks->id }}"
                          style="display: none;">
                        @csrf @method('delete')
                        <input type="hidden" value="{{ $lks->id }}" name="id">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    <script>
        $(document).ready(function () {
            $('.btn-delete').click(function () {
                var id = $(this).attr('data-id');
                $("#delete-form-" + id).submit();
            })
        })
    </script>
@endsection
