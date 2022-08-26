$(function () {
  var $anchors = $('.anchor');

  (function _loop(idx) {
    $anchors.removeClass('highlight').eq(idx).addClass('highlight');
    setTimeout(function () {
      _loop((idx + 1) % $anchors.length);
    }, 4000);
  }(0));
});
