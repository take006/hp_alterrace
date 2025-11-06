'use strict'; 

{
  // データ取得
  // pagetopボタン
  const pageTop = document.querySelector('.pagetop');
  // トップへ戻るボタンを表示する位置のsection
  const mainContent = document.querySelector('#main-content');
  // ビューポートの高さ
  const vh = window.innerHeight;

    // 処理を書く
    // スクロール量
  function pageTopAction(){
    const scroll = window.pageYOffset;
    // 要素の位置までの相対数値
    const targetDistance = mainContent.getBoundingClientRect().top;
    // 要素までの絶対位置
    const targetPosition = scroll + targetDistance - vh;

    // スクロール量がtargetPositionの位置を超えたら
    if ( targetPosition < scroll ) {
        pageTop.classList.add('fadeIn');
    } else {
        pageTop.classList.remove('fadeIn');
    }
  }
  window.addEventListener('scroll', pageTopAction) 
}
