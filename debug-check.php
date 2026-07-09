<?php
// デバッグ用ファイル - 確認後削除してください
echo '<h1 style="color:green;">PHP動作確認OK</h1>';
echo '<p>theme dir: ' . __DIR__ . '</p>';
echo '<p>assets/css/style.css exists: ' . ( file_exists( __DIR__ . '/assets/css/style.css' ) ? 'YES' : 'NO' ) . '</p>';
echo '<p>assets/js/main.js exists: ' . ( file_exists( __DIR__ . '/assets/js/main.js' ) ? 'YES' : 'NO' ) . '</p>';
