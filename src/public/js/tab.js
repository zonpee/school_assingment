new Vue({
    el: '#tab',
    data: {
        tabs: ['ホーム', 'テスト', 'レコード'], 
        activeTab: null , // アクティブなタブのインデックスを保持する変数を初期化
        hoveredTab: null , // マウスポインタがタブ上に乗った時のインデックスを初期化
        currentPage: null // 現在タブで表示されているページ
    },
    methods: {
        activateTab(index) { // タブがクリックされたときに呼び出されるメソッド
            this.activeTab = index; // アクティブなタブのインデックスを更新
            switch(index) {
                case 0: // ホームタブがクリックされた場合
                    this.currentPage = 'home';
                    break;
                case 1: // テストタブがクリックされた場合
                    this.currentPage = 'test';
                    break;
                case 2: // レコードタブがクリックされた場合
                    this.currentPage = 'record';
                    break;
            }
        }    
    }
});