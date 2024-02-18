@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
<script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
@endsection


@section('contents')
<div class="tab" id="tab">
  <ul>
    <li v-for="(tab, index) in tabs" :key="index"
        :class="{'active': activeTab === index , 'hovered': hoveredTab === index}"
        @@mouseover="hoveredTab = index"
        @@mouseleave="hoveredTab = null"
        @click="activateTab(index)">
        @{{ tab }}
    </li>
  </ul>
  
  <!-- ホームの表示 -->
  <transition name="fade" mode="out-in">
    <div class="home-top" v-if="currentPage === 'home'">
      <h1>登録済み試験コース一覧</h1>
      <div>
        <table id="table" border="1">
          <tr>
            <th>コース名</th>
            <th>分野数</th>
            <th>登録問題数</th>
            <th>受験回数</th>
            <th>合格回数</th>
          </tr>
          @foreach ($exams as $exam)
            <tr class="table-record">
              <td>{{ $exam->name }}</td>
            </tr>
          @endforeach
        </table>
      </div>
      <div>
        <button class="register-button">登録</button>
        <button class="edit-button">編集</button>
        <button class="delete-button">削除</button>
      </div>
    </div>
  </transition>

  <!-- テストの表示 -->
  <transition name="fade" mode="out-in">
    <div class="test-top" v-if="currentPage === 'test'">
      <h1>試験問題</h1>
      <div>
        <table border="1">
          <tr>
            <th>コース名</th>
            <th>分野数</th>
            <th>登録問題数</th>
            <th>受験回数</th>
            <th>合格回数</th>
            <th>前回受験日時</th>
          </tr>
          @foreach ($exams as $exam)
          <tr class="table-record">
            <td>{{ $exam->name }}</td>
          </tr>
          @endforeach
        </table>
      </div>
      <div>
        <button class="start-button">開始</button>
        <button class="clear-button">クリア</button>
      </div>
    </div>
  </transition>
  <!-- レコードの表示 -->
  <transition name="fade" mode="out-in">
    <div class="record-top" v-if="currentPage === 'record'">
      <h1>レコード一覧</h1>
      <div>
        <table border="1">
          <tr>
            <th>コース名</th>
            <th>分野数</th>
            <th>登録問題数</th>
            <th>受験回数</th>
            <th>合格回数</th>
            <th>前回受験日時</th>
          </tr>
          @foreach ($exams as $exam)
          <tr class="table-record">
            <td>{{ $exam->name }}</td>
          </tr>
          @endforeach
        </table>
      </div>
      <div>
        <button class="check-button">確認</button>
        <button class="back-button">戻る</button>
      </div>
    </div>
  </transition>
</div>




<script src="{{ asset('js/tab.js') }}"></script>
<script src="{{ asset('js/table.js') }}"></script>

<!--
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
-->

@endsection
