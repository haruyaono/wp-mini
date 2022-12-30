<?php

define( 'ABSPATH', dirname(__DIR__) . '/');

$step = isset( $_GET['step'] ) ? (int) $_GET['step'] : 0;

function setup_config_display_header() {
    header( 'Content-type: text/html; charset=utf-8');
    ?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="robots" content="noindex,nofollow" />
    <title>WordPress Mini &rsaquo; 構成ファイルのセットアップ</title>
</head>
<body>
<h1>WordPress Mini へようこそ</h1>
    <?php
} // End function setup_config_display_header();

switch ( $step ) {
    case 0:
        setup_config_display_header();
        ?>
<form method="post" action="setup-config.php?step=1">
    <p>以下にデータベース接続のための詳細を入力してください。</p>
    <table class="form-table" role="presentation">
        <tr>
            <th scope="row"><label for="dbname">データベース名</label></th>
            <td><input name="dbname" id="dbname" type="text" aria-describedby="dbname-desc" size="25" placeholder="wordpress" /></td>
            <td id="dbname-desc">WordPress Mini で使用したいデータベース名。</td>
        </tr>
        <tr>
            <th scope="row"><label for="uname">ユーザー名</label></th>
            <td><input name="uname" id="uname" type="text" aria-describedby="uname-desc" size="25" placeholder="ユーザー名" /></td>
            <td id="uname-desc">データベースのユーザー名。</td>
        </tr>
        <tr>
            <th scope="row"><label for="pwd">パスワード</label></th>
            <td><input name="pwd" id="pwd" type="text" aria-describedby="pwd-desc" size="25" placeholder="パスワード" autocomplete="off" /></td>
            <td id="pwd-desc">データベースのパスワード。</td>
        </tr>
        <tr>
            <th scope="row"><label for="dbhost">データベースのホスト名</label></th>
            <td><input name="dbhost" id="dbhost" type="text" aria-describedby="dbhost-desc" size="25" value="localhost" /></td>
            <td id="dbhost-desc">localhost が動作しない場合には Web ホストからこの情報を取得することができます。</td>
        </tr>
    </table>
    <p class="step"><input name="submit" type="submit" value="送信" class="button button-large" /></p>
</form>
    <?php
        break;
    case 1:
        setup_config_display_header();
        print $_POST['dbname'];

} // End of the steps switch.

?>
</body>
</html>
