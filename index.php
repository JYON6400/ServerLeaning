<?php
// エラーを表示する（開発中のみ）
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// POSTリクエストで送信されたJSONデータを取得
$json_data = file_get_contents('php://input');

// JSON形式でレスポンスを設定
header('Content-Type: application/json');

// 取得したJSONデータをエコーする
echo json_encode(['received_data' => $json_data]);
?>
