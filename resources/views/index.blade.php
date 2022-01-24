@extends('layouts.app')

    @section('title', 'お問合わせ')

    @section('script')
    <script>
    function onClick(e) {
    document.getElementById("contactform").submit();
  }
    </script>
    @endsection

    @section('content')
    @error('token')
      <div>{{ $message }}</div>
    @enderror

    <h1>トップページ</h1>
    <form method="POST" action="/thanks">
    @csrf
    <div>
      <label for="name">氏名</label>
      <br>
      <input type="text" name="name" value="{{ old('name') }}"/>
      @error('name')
      <div>{{ $message }}</div>
      @enderror
    </div>
    <div>
      <label for="email">メールアドレス</label>
      <br> 
      <input type="email" name="email" value="{{ old('email') }}"/>
      @error('email')
      <div>{{ $message }}</div>
      @enderror
    </div>
    <div>
      <button type="submit" onclick="onClick(event)">送信する</button>
    </div>
    </form>
    @endsection