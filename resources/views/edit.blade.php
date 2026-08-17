@extends('layout')

@section('title', 'เขียนบทความใหม่')



@section('content')
    <h2 class="text text-center py-2">
        แก้ไขบทความ</h2>
    <form method="POST" action="{{ route('update', $blog->id) }}">
        @csrf
        <div>
            <label for="title">แก้ไขบทความ</label>
            <input type="text" class= "form-control" name="title" value="{{ $blog->title }}"></div>
            <div>
                @error('title')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <label for="title">เนื้อหา</label>
                <textarea name = "content" class= "form-control" cols="30" rows="5">{{ $blog->content }}</textarea>
            </div>
            @error('content')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            <input type="submit" value="บันทึก" class= "btn btn-primary my-3">
            <a href="/blogs" class="btn btn-success my-3">กลับหน้าบทความ</a>
    </form>
@endsection
