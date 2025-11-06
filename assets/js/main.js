// ローディングロゴ
window.onload = function() {
  const spinner = document.getElementById('loading');
  spinner.classList.add('loaded');
}


// ヘッダーONOFF
const header = document.querySelector('header');
// headerの要素を取得する
let prevY = window.scrollY; 

window.addEventListener('scroll', () => {
  const currentY = window.scrollY;

  if (currentY < prevY) { 
    header.classList.remove('hidden'); 
  } else { 
  if (currentY > 0) {
      header.classList.add('hidden'); 

    }
  }

  prevY = currentY; 

});




// 全要素のフェードイン
window.addEventListener('scroll', function(){
  // スクロール量を取得
  const scroll = window.scrollY;
  // 画面の高さを取得
  const windowHeight = window.innerHeight;
  // すべての.boxを取得
  const boxes = document.querySelectorAll('.fadeIn');

  boxes.forEach(function(fadeIn) {
    // boxまでの高さを取得
    const distanceToBox = fadeIn.offsetTop;
    // 下記条件が成り立つときだけboxにis-activeクラスを付与する
    if(scroll + windowHeight > distanceToBox - 100) {
      fadeIn.classList.add('is-active');
    }
  });
});

// スライドショー
const sliderImg = document.querySelectorAll('.slider-img');
let count = 1;

console.log(sliderImg);
console.log(count);

setInterval(() => {
  if (count > 3) {
    count = 0;
  }
  sliderImg.forEach((value, index) => {
    console.log(value);
    console.log(index);
    sliderImg[index].classList.remove('active');
  });
  sliderImg[count].classList.add('active');
  count++;
}, 5000);

// バーガーメニュー
const navClickContainer = document.querySelector('.nav-click-container');
const navContentBox = document.querySelector('.nav-content-box');
const navContentContainer = document.querySelector('.nav-content-container');
const navClickBorder1 = document.querySelector('.nav-click-border-1');
const navClickBorder2 = document.querySelector('.nav-click-border-2');
const navClickBorder3 = document.querySelector('.nav-click-border-3');

navClickContainer.addEventListener('click', () => {
  navContentContainer.classList.toggle('no-show');
  navClickBorder2.classList.toggle("no-show");
  navClickBorder1.classList.toggle("transform");
  navClickBorder3.classList.toggle("transform");
});

