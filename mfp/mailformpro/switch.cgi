$config{'about'} = 'Mailform Pro 4.2.3';

#このconfigは分岐用です。

@Modules = ();
push @Modules,'MultiConfig';	## 複数の設定ファイルを分岐させる


####################################################
## 高度な設定的な感じのもの
####################################################

## 詳細なsendmail設定
#$config{'sendmail_advanced'} = '/usr/local/bin/sendmail -t -f$email';

## 表示調整 単一行表示
$config{'singleline'} = "[ %s ] %s\n";

## 表示調整 複数行表示
$config{'multiline'} = "[ %s ]\n%s\n\n";

## 未入力の項目を含める(1: on / 0: off)
$config{'blankfield'} = 0;

## 連続送信対応
$config{'seek'} = 0;

## メールの改行コード
#$config{'breakcode'} = "\r\n";

## 開封確認 (開封確認を通知する場合は以下の1行のコメントを解除)
#$config{'Notification'} = $mailto[0];

## 各種データを格納しているファイル

$config{'data.dir'} = './data/';

## [0] Serial, [1] InputTime, [2] ConfirmTime, [3] UniqueUser
$config{'file.data'} = "$config{'data.dir'}dat.mailformpro.cgi";

## ドロップ検知
$config{'file.drop'} = "$config{'data.dir'}dat.drop.cgi";

## jsキャッシュ
$config{'file.cache'} = "$config{'data.dir'}mfp.cache.js";

## 言語設定ファイル
$config{'lang'} = 'lang.ja';
#$config{'lang'} = 'lang.en';

## スクリプトのURL / ※基本的にここは変更しなくてOKです
$config{'uri'} = 'http://' . $ENV{'SERVER_NAME'} . $ENV{'SCRIPT_NAME'};

## Prefix
$config{'prefix'} = '_MFP';

1;