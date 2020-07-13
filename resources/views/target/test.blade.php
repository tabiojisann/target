<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>test</title>
</head>
<body class="body">
  <div class="box">
    <div class="php">
      <?php
       $Pokemon = ['ヒトカゲ', 'ゼニガメ', 'フシギダネ'];
         foreach( $Pokemon as $p)
         echo $p . " ";
      ?>
    </div>
  </div> 
</body>
</html>

<!-- <?php

  function tall($X, $x, $Y, $y) {
        if ($x > $y) {
        // echo $X . 'の方が大きい';
        return $X;
      } else if ($x < $y) {
        // echo $Y . 'の方が大きい';
        return $Y;
      } else {
        return 'どっちも一緒';
      }
  }

  function answer($name) {
    if ($name === 'どっちも一緒'){
      echo 'どっちも一緒';
    } else {
      echo $name . 'の方が大きい';
    }
  }

  $A = '河合俊一';
  $B = 'ボブサップ';
  $a = 195;
  $b = 196;
   
  $tall = tall($A, $a, $B, $b);
  // var_dump( tall($A, $a, $B, $b));
  answer( $tall); 
?> --->

<?php

  $a = "Neverland Of Promise";
  $b = "never";

  if (preg_match("/\b$b\b/i", $a)) {
    echo "OK";
  } else {
    echo "NG";
  }
  
?>

<?php
$pokemon = [
  'フシギダネ'  => 'くさ',
  'フシギソウ'  => 'くさ',
  'フシギバナ'  => 'くさ',
  'ヒトカゲ'    => 'ほのお',
  'リザード'    => 'ほのお',
  'リザードン'  => 'ほのお',
  'ゼニガメ'    => 'みず',
  'カメール'    => 'みず',
  'カメックス' => 'みず',
  'キャタピー' => 'むし',
  'トランセル' => 'むし',
  'バタフリー' => 'むし',
  'ビードル'   => 'むし',
  'コクーン'   => 'むし',
  'スピアー'   => 'むし',
  'ポッポ'     => 'とり',
  'ピジョン'   => 'とり',
  'ピジョット' => 'とり',
  'コラッタ'   => 'ノーマル',
  'ラッタ'     => 'ノーマル',
  'オニスズメ'  => 'とり',
  'オニドリル'  => 'とり',
  'アーボ'      => 'どく',
  'アーボック'  => 'どく',
  'ピカチュウ'  => 'でんき',
  'ライチュウ'  => 'でんき',
  'サンド'     => 'じめん',
  'サンドパン'  => 'じめん',
  'ニドラン♂'  => 'ノーマル',
  'ニドリーノ' => 'ノーマル',
  'ニドキング' => 'ノーマル',
  'ニドラン♀' => 'ノーマル',
  'ニドリーナ' => 'ノーマル',
  'ニドクイン' => 'ノーマル',
  'ピッピ'    => 'ノーマル',
  'ピクシー'  => 'ノーマル',
  'ロコン'    => 'ほのお',
  'キュウコン' => 'ほのお',
  'プリン'    => 'ノーマル',
  'プクリン'  => 'ノーマル',
  'ズバット'   => 'あく',
  'ゴルバット' => 'あく',
  'ナゾノクサ' => 'くさ',
  'クサイハナ' => 'くさ',
  'ラフレシア' => 'くさ',
  'パラス'    => 'くさ',
  'パラセクト' => 'くさ',
  'コンパン'   => 'むし',
  'モルフォン' => 'むし',
  'ディグダ'   => 'じめん',
  'ダグトリオ' => 'じめん',
  'ニャース'   => 'ノーマル',
  'ペルシアン'  => 'ノーマル',
  'コダック'    => 'みず',
  'ゴルダック'  => 'みず',
  'マンキー'   => 'かくとう',
  'オコリザル' => 'かくとう',
  'ガーディ'  => 'ほのお',
  'ウインディ' => 'ほのお',
  'ニョロモ' => 'みず',
  'ニョロゾ' => 'みず',
  'ニョロモン' => 'みず',
  'ケーシィ' => 'エスパー',
  'ユンゲラー' => 'エスパー',
  'フーディン' => 'エスパー',
  'ワンリキー' => 'かくとう',
  'ゴーリキー' => 'かくとう',
  'カイリキー' => 'かくとう',
  'マダツボミ' => 'くさ',
  'ウツドン'   => 'くさ',
  'ウツボット' => 'くさ',
  'メノクラゲ' => 'みず',
  'ドククラゲ' => 'みず',
  'イシツブテ' => 'じめん',
  'ゴローン'   => 'じめん',
  'ゴローニャ' => 'じめん',
  'ポニータ'   => 'ほのお',
  'ギャロップ' => 'ほのお',
  'ヤドン'    => 'みず',
  'ヤドラン'   => 'みず',
  'コイル'    => 'でんき',
  'レアコイル' => 'でんき',
  'カモネギ'   => 'とり',
  'ドードー'   => 'とり',
  'ドードリオ' => 'とり',
  'パウワウ'   => 'みず、こおり',
  'ジュゴン'   => 'みず、こおり',
  'ベトベター' => 'どく',
  'ベトベトン' => 'どく',
  'シェルダー' => '氷',
  'パルシエン' => '氷',
  'ゴース' => 'ゴースト',
  'ゴースト' => 'ゴースト',
  'ゲンガー' => 'ゴースト',
  'イワーク' => 'いわ',
  'スリープ' => 'エスパー',
  'スリーパー' => 'エスパー',
  'クラブ' => 'みず',
  'キングラー' => 'みず',
  'ビリリダマ' => 'でんき',
  'マルマイン' => 'でんき',
  'タマタマ' => 'くさ、エスパー',
  'ナッシー' => 'くさ、エスパー',
  'カラカラ' => 'じめん',
  'ガラガラ' => 'じめん',
  'サワムラー' => 'かくとう',
  'エビワラー' => 'かくとう',
  'ベロリンガ' => 'ノーマル',
  'ドガース' => 'どく',
  'マタドガス' => 'どく',
  'サイホーン' => 'じめん',
  'サイドン' => 'じめん',
  'ラッキー' => 'ノーマル',
  'モンジャラ' => 'くさ',
  'ガルーラ' => 'ノーマル',
  'タッツー' => 'みず',
  'シードラ' => 'みず',
  'トサキント' => 'みず',
  'アズマオウ' => 'みず',
  'ヒトデマン' => 'みず',
  'スターミー' => 'みず',
  'バリヤード' => 'エスパー',
  'ストライク' => 'むし',
  'ルージュラ' => 'こおり、エスパー',
  'エレブー' => 'でんき',
  'ブーバー' => 'ほのお',
  'カイロス' => 'むし',
  'ケンタロス' => 'ノーマル',
  'コイキング' => 'みず',
  'ギャラドス' => 'みず',
  'ラプラス' => 'みず',
  'メタモン' => 'ノーマル',
  'イーブイ' => 'ノーマル',
  'シャワーズ' => 'みず',
  'サンダース' => 'でんき',
  'ブースター' => 'ほのお',
  'ポリゴン' => 'エスパー',
  'オムナイト' => 'みず、じめん',
  'オムスター' => 'みず、じめん',
  'カブト' => 'みず、じめん',
  'カブトプス' => 'みず、じめん',
  'プテラ' => 'じめん、ドラゴン',
  'カビゴン' => 'ノーマル',
  'ファイヤー' => 'ほのお',
  'ファイヤー' => 'ほのお',
  'サンダー' => 'でんき',
  'フリーザー' => '氷',
  'ミニリュウ' => 'ドラゴン',
  'ハクリュー' => 'ドラゴン',
  'カイリュウ' => 'ドラゴン',
  'ミュウツー' => 'エスパー',
  'ミュウ' => 'エスパー'
];

  // echo $pokemon['ミュウツー'] . PHP_EOL;

  // foreach ($pokemon as $name => $type) {
  //   if($type !== 'エスパー') {
  //     continue;
  //   } 
  //   echo $name;
  //   echo '<br/>'; 
  // }

  

  

  // var_dump($pokemon);

  
 

