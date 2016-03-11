
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8" />
<title>カウントダウンタイマー</title>
<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
<script type="text/javascript">
$(function() {
  countDown();
 });
 
 function countDown() {
  var startTime = new Date();
  //カウントダウンの終了期日を記入↓
    var endTime = new Date('March 26,2016, 01:00:00');
    var diff  = endTime - startTime;
    var times = 24 * 60 * 60 * 1000;
    var day   = Math.floor(diff / times)
    var hour  = Math.floor(diff % times / (60 * 60 * 1000))
    var min   = Math.floor(diff % times / (60 * 1000)) % 60
    var sec   = Math.floor(diff % times / 1000) % 60 % 60
    var ms    = Math.floor(diff % times / 10) % 100
    if(diff > 0){
      $("#Timer").text(day + '日' + hour + '時間' + min + '分' + sec +'秒' + ms);
      setTimeout('countDown()', 10);
    } else {
      //終了した時のテキスト
      $("#Timer").text('終了しました！');
    }
 }
</script>
</head>
<body>
<div class="container">
<h1>jQueryのカウントダウンタイマー</h1>   
<blockquote>
<div id="Timer"></div>
</blockquote>
</div>
</body>
</html>
