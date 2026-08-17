@extends('layout')

@section('title', 'บทความ')



@section('content')
    <h2 class="text text-center py-2">
        บทความทั้งหมด</h2>
    <table class="table table-bordered text-center">
        <thead>
            <tr>

                <th scope="col">Title</th>
                <!-- <th scope="col">Content</th> -->
                <th scope="col">Status</th>
                <th scope="col">Control</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($blogs as $item)
                <tr>
                    <td>{{ $item->title }}</td>
                    <!-- <td>{{ Str::limit($item->content, 20) }}</td> -->
                    <td>
                        @if ($item->status)
                            <span class="btn btn-success"> เผยแพร่</span>
                        @else
                            <span class="btn btn-danger"> ไม่เผยแพร่</span>
                        @endif
                    </td>
                    <td><a href="/delete/{{ $item->id }}" class="btn btn-danger"
                            onclick="return confirm('คุณต้องการลบบทความนี้จริงหรือไม่?')">ลบ</a>

                </tr>
            @endforeach


        </tbody>
    </table>

@endsection
