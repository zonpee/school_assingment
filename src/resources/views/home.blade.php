@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection


@section('contents')

<div class="tab">
    <ul>
        <li id="home">ホーム</li>
        <li id="test">テスト</li>
        <li id="record">レコード</li>
    </ul>
    <p id="hide">Click me Hide!</p>
    <p id="hide2" style="display:none;">Click me Hide2!</p>
</div>
<script>
  // jQueryを使用してpタグがクリックされたときの処理を定義
  $(document).ready(function(){
    $("#home").click(function(){
      // クリックされたpタグを非表示にする
      $("#hide").hide();
      $("#hide2").show();
    });
  });
    // jQueryを使用してpタグがクリックされたときの処理を定義
    $(document).ready(  function(){
    $("#test").click(function(){
      // クリックされたpタグを非表示にする
      $("#hide2").hide();
      $("#hide").show();
    });
  });
</script>

@endsection
