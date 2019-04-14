<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title></title>
    <script>
      window.onload = function () {
    getValue();
    var $formObject = document.getElementById( "sampleForm" );
    for( var $i = 0; $i < $formObject.length; $i++ ) {
        $formObject.elements[$i].onkeyup = function(){
            getValue();
        };
        $formObject.elements[$i].onchange = function(){
            getValue();
        };
    }
    document.getElementById( "sampleOutputLength" ).innerHTML = $formObject.length;
}
function getValue() {
    var $formObject = document.getElementById( "sampleForm" );
    document.getElementById( "sampleOutputName" ).innerHTML = $formObject.formName.value;
    document.getElementById( "sampleOutputArea" ).innerHTML = $formObject.formArea.value;
    document.getElementById( "sampleOutputAge" ).innerHTML = $formObject.formAge.value;
    document.getElementById( "sampleOutputComent" ).innerHTML = $formObject.formComent.value;
}
    </script>
    <link rel="stylesheet" href="/css/markdownbase.css">
  </head>
  <body>
<form id="sampleForm">
    【入力欄】
    <br />
    名前：<input type="text" name="formName" value="太郎">
    <br />
    地域：
        <select name="formArea">
            <option selected>関東</option>
            <option>東海</option>
            <option>関西</option>
        </select>
    <br />
    年齢：
        <select name="formAge">
            <option selected>10代</option>
            <option>20代</option>
            <option>30代</option>
        </select>
    <br />
    コメント：<textarea name="formComent">コメント</textarea>
    <br />
</form>
<div id="sampleOutput">
    【出力欄】
    <br />
    名前：<span id="sampleOutputName"></span>
    <br />
    地域：<span id="sampleOutputArea"></span>
    <br />
    年齢：<span id="sampleOutputAge"></span>
    <br />
    コメント：<span id="sampleOutputComent"></span>
    <br />
</div>
  </body>
</html>