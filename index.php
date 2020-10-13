<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $computer0 = array(
            'CPU' => "AMD Ryzen 5 2600X",
            'RAM' => "HyperX Predator 16GB (2x8GB) DDR4 3200",
            'GPU' => "AMD Radeon 580 4GB",
            'SSD' => "Kingston Now A400 240GB ",
            'MB' => "ASRock B450 Steel Legend AMD B450",
            'case' => "Fortron CST311, okno, černá",
            'mouse' => "Niceboy ORYX M600, černá",
            'headphones' => "YENKEE YHP 3030 SABOTAGE, černá",
            'display' => "Acer Nitro VG240Ybmiix - LED monitor 24",
            'fan' => "defalut",
        );
        $computer1 = array(
            'CPU' => "Intel Core i9-10980XE",
            'RAM' => "2x G.SKill TridentZ Royal 16GB (2x8GB) DDR4 4600, zlatá",
            'GPU' => "MSI GeForce RTX 3090 GAMING X TRIO 24G, 24GB GDDR6X",
            'SSD' => "GOODRAM IRDM ULTIMATE X, M.2 - 2TB",
            'MB' => "GIGABYTE X299 DESIGNARE EX - Intel X299",
            'case' => "Cougar Conquer, okno, černá",
            'mouse' => "Razer Mamba + Firefly Hyperflux",
            'headphones' => "SteelSeries Arctis Pro Wireless, černá",
            'display' => "HP OMEN X Emperium - LED monitor 65",
            'fan' => "Thermaltake Pacific C240 DDC, Water Cooling Kit",
        );

    ?>
<h2>1. pc</h2>
<ul>
    <li>Procesor: <?= $computer0['CPU'] ?> </li>
    <li>RAM paměti: <?= $computer0['RAM'] ?> </li>
    <li>Grafická karta: <?= $computer0['GPU'] ?> </li>
    <li>SSD paměti: <?= $computer0['SSD'] ?> </li>
    <li>Základní deska: <?= $computer0['MB'] ?> </li>
    <li>Skříň: <?= $computer0['case'] ?> </li>
    <li>Myš: <?= $computer0['mouse'] ?> </li>
    <li>Sluchátka: <?= $computer0['headphones'] ?> </li>
    <li>Monitor: <?= $computer0['display'] ?> </li>
    <li>Větrák: <?= $computer0['fan'] ?> </li>
</ul>

<h2>2. pc</h2>
<ul>
    <li>Procesor: <?= $computer1['CPU'] ?> </li>
    <li>RAM paměti: <?= $computer1['RAM'] ?> </li>
    <li>Grafická karta: <?= $computer1['GPU'] ?> </li>
    <li>SSD paměti: <?= $computer1['SSD'] ?> </li>
    <li>Základní deska: <?= $computer1['MB'] ?> </li>
    <li>Skříň: <?= $computer1['case'] ?> </li>
    <li>Myš: <?= $computer1['mouse'] ?> </li>
    <li>Sluchátka: <?= $computer1['headphones'] ?> </li>
    <li>Monitor: <?= $computer1['display'] ?> </li>
    <li>Větrák: <?= $computer1['fan'] ?> </li>
</ul>
</body>
</html>