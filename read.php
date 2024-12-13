<?php

// ファイルからデータを読み込む

$data = file_get_contents('data/data.txt');
$lines = explode("\n", trim($data));

$combiCount = [];
foreach ($lines as $line) {
    if ($line) {
        list($time, $combi) = explode('/', $line);
        $combies = explode(',', $combi);
        foreach ($combies as $c) {
            if (isset($combiCount[$c])) {
                $combiCount[$c]++;
            } else {
                $combiCount[$c] = 1;
            }
        }
    }
}

?>

<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>結果表示</title>
</head>

<body>
    <h1>アンケート結果 - 累積結果</h1>
    <table border="1">
        <tr>
            <th>コンビ名</th>
            <th>選択回数</th>
        </tr>

        <?php foreach ($combiCount as $combi => $count): ?>
            <tr>
                <td><?php echo htmlspecialchars($combi); ?></td>
           

 <td><?php echo $count; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

 

    <ul>

        <li><a href="input.php">アンケートに戻る</a></li>

    </ul>

</body>

</html>

 
