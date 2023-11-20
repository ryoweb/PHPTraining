# 課題名
HelloWorldの出力

## 説明
・HelloWorldとブラウザで表示する
・テストケースをクリアする

## 解説
step1ディレクトリ配下のindex.phpファイルを用いて
echoを利用しブラウザにHelloWorldと出力を行ってください

step1/index.phpに記述した処理は確認のURLから確認が行えます。
```
http://localhost:8080/step1/
``````

記述したコードのテストを実行します。
以下のコマンドをターミナルで実行してください。
```
Vendor/bin/phpunit tests/step1Test.php
```
全てのテストケースがパスすれば課題完了です。