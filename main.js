"use strict";

document.querySelector(".menu-btn").addEventListener("click", function () {
  document.querySelector(".menu").classList.toggle("is-active");
});

window.addEventListener("scroll", function () {
  // ヘッダーを変数の中に格納する
  const header = document.getElementById("fixed");
  // 100px以上スクロールしたらヘッダーに「scroll-nav」クラスをつける
  header.classList.toggle("scroll-nav", window.scrollY > 100);
});
