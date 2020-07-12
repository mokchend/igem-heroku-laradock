<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
    <title>WASEDA-iGEM</title>
  </head>
  <body>
    <?php include 'template/header.php'; ?>
    <img width="100%" src="https://scontent-nrt1-1.cdninstagram.com/vp/eb209d00e607d5fb951e41c7f7815921/5D8F9E01/t51.2885-15/e35/23417162_1723796607654339_7565909398158049280_n.jpg?_nc_ht=scontent-nrt1-1.cdninstagram.com">
    <div class="container">
      <div class="section scrollspy" id="description">
        <h3>Description</h3>
        <div class="divider"></div>
        <?php //ここでforeach{ ?>
          <div class="article">
            <h5>iGEMとは</h5>
            <p>iGEM( International Genetically Engineered Machine competition)とは合成生物学の世界大会のことです。この大会は年に一回ボストンで開催され、そこでは遺伝子組み換えによって自分たちで作り出した新たな生物システムをチームでプレゼンし、その機能、実現性、実用性などを競い合います。iGEMは2004年に米5大学間の大会として始まり、今では世界各国から約300チーム、4000人が集まる国際大会へと発展しました。</p>
            <a><p class="right-align">...more<p></a>
          </div>
          <div class="article">
            <h5>合成生物学とは</h5>
            <p>合成生物学とは生物(細胞)を自分たちで一から設計して動かしてみることでより生物に関する理解を深めようというものです。それには生物だけでなく、情報科学(プログラミング)、数学、制御工学などあらゆる分野の知識が求められるのでiGEMのチームは様々なバックグラウンドを持つ人たちが集まります。</p>
            <a><p class="right-align">...more<p></a>
          </div>
        <?php //} ?>
      </div>
      <div class="section scrollspy" id="link">
        <h3>External Links</h3>
        <div class="divider"></div>
        <?php //ここでforeach{ ?>
          <div class="article">
            <h5>hogeについて</h5>
            <p>The train came out of the long tunnel into the snow country. The earth lay white under the night sky. The train pulled up at a signal stop.A girl who had been sitting on the other side of the car came over and opened the window in front of Shimamura. The snowy cold poured in. Leaning far out the window, the girl called to the station master as though he were a great distance away.The station master walked slowly over the snow, a lantern in his hand. His face was buried to the nose in a muffler, and the flaps of his cap were turned down over his face.</p>
            <a><p class="right-align">...more<p></a>
          </div>
          <div class="article">
            <h5>piyoについて</h5>
            <p>Going up a mountain track, I fell to thinking.Approach everything rationally, and you become harsh. Pole along in the stream of emotions, and you will be swept away by the current. Give free rein to desires, and you become uncomfortably constrained. It is not a very agreeable place to live, this world of ours.When the unpleasantness increases, you want to draw yourself to some place where life is easier. It is just at the point when you first realise that life will be no more agreeable no matter what heights you may attain, that a poem may be given birth, or a picture created.</p>
            <a><p class="right-align">...more<p></a>
          </div>
        <?php //}?>
      </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script type="text/javascript">

      M.AutoInit();

      document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.scrollspy');
        var instances = M.ScrollSpy.init(elems,{"scrollOffset":50});
      });

    </script>
  </body>
</html>
