<?php
// 確保資料存在並進行基本的輸入檢查
$username = isset($_GET['username']) ? htmlspecialchars($_GET['username']) : 'N/A';
$interest = isset($_GET['interest']) ? htmlspecialchars($_GET['interest']) : 'N/A';
$language = isset($_GET['language']) ? htmlspecialchars($_GET['language']) : 'N/A';

// 確認 'likes' 是否存在且為陣列，否則將其轉為陣列
$likes = isset($_GET['likes']) ? (is_array($_GET['likes']) ? $_GET['likes'] : [$_GET['likes']]) : [];

echo "<h1>Form Data Received</h1>";

echo "<p><strong>Name:</strong> {$username}</p>";
echo "<p><strong>Interest Source:</strong> {$interest}</p>";
echo "<p><strong>Preferred Language:</strong> {$language}</p>";

echo "<p><strong>The characteristics that you enjoyed about the college:</strong></p><ul>";
foreach ($likes as $like) {
    echo "<li>" . htmlspecialchars($like) . "</li>";
}
echo "</ul>";
?>
    