<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title></title>
    <script>
      function createSentence() {
        setText = document.getElementById("markdown");//md文を出すdivを取得
        var getText = document.getElementById("text").value;//mdにしたい文を取得
        var textparts = getText.split(/\r\n|\r|\n/);
        var sentences = [];
        //console.log(textparts);
        for (i=0; i<textparts.length; i++) {
          if(textparts[i].indexOf('###### ') !== -1) {
            sentences[i] = textparts[i].replace('###### ','<h6>') + '<h6>';
          }
          else if(textparts[i].indexOf('##### ') !== -1) {
            sentences[i] = textparts[i].replace('##### ','<h5>') + '</h5>';
          }
          else if(textparts[i].indexOf('#### ') !== -1) {
            sentences[i] = textparts[i].replace('#### ','<h4>') + '<h4>';
          }
          else if(textparts[i].indexOf('### ') !== -1) {
            sentences[i] = textparts[i].replace('### ','<h3>') + '<h3>';
          }
          else if(textparts[i].indexOf('## ') !== -1) {
            sentences[i] = textparts[i].replace('## ','<h2>') + '</h2>';
          }
          else if(textparts[i].indexOf('# ') !== -1) {
            sentences[i] = textparts[i].replace('# ','<h1>') + '<h1>';
          }
          else if(textparts[i].indexOf('  ') !== -1) {
            sentences[i] = textparts[i].replace('  ', '<br>');
          }
          else if(textparts[i].indexOf('>') !== -1) {
            sentences[i] = textparts[i].replace('>', '<blockquote>') + '</blockquote>';
          }
          //else if() {
            //code
          //}
          else if(textparts[i].indexOf('`') !== -1) {
            sentences[i] = '<code>' + textparts[i].replace(/`/g, '') + '</code>';
          }
          else if(textparts[i].indexOf('***') !== -1) {
            sentences[i] = textparts[i].replace('***', '<hr>');
          }
          else if(textparts[i].indexOf('---') !== -1) {
            sentences[i] = textparts[i].replace('---', '<hr>');
          }
          else if(textparts[i].indexOf('**') !== -1) {
            sentences[i] = '<strong>' + textparts[i].replace(/\**/g, '') + '</strong>';
          }
          else if(textparts[i].indexOf('* ') !== -1) {
            sentences[i] = textparts[i].replace('* ', '<li>') + '</li>';
          }
          else if(textparts[i].indexOf('+ ') !== -1) {
            sentences[i] = textparts[i].replace('+ ', '<li>') + '</li>';
          }
          else if(textparts[i].indexOf('- ') !== -1) {
            sentences[i] = textparts[i].replace('- ', '<li>') + '</li>';
          }
          else if(textparts[i].indexOf('*') !== -1) {
            sentences[i] = '<em>' + textparts[i].replace(/\*/g, '') + '</em>';
          }
          else if(textparts[i].indexOf('~~') !== -1) {
            sentences[i] = '<del>' + textparts[i].replace(/~~/g, '') + '</del>';
          }

          else {
            sentences[i] = textparts[i];
          }
        }
        

        setText.innerText = sentences.forEach(function(value) {
          //setText.innerHTML = value;
          document.write(value);//ここをdocument.writeじゃなくinnerHTMLにしたい
        });
      }
    </script>
    <link rel="stylesheet" href="/css/markdownbase.css">
  </head>
  <body>
    <div id="markdown">ここにMarkDownが表示されます</div>
    <form name="" id="content" method="post" action="/">
      <textarea rows="90" cols="80" id="text" value=""></textarea>
      <input type="button" value="MarkDownを反映" onclick="createSentence();">
    </form>
  </body>
</html>