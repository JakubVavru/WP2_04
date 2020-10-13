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
Procesor: <?= $computer0['CPU'] ?> <br>
RAM paměti: <?= $computer0['RAM'] ?> <br>
Grafická karta: <?= $computer0['GPU'] ?> <br>
SSD paměti: <?= $computer0['SSD'] ?> <br>
Základní deska: <?= $computer0['MB'] ?> <br>
Skříň: <?= $computer0['case'] ?> <br>
Myš: <?= $computer0['mouse'] ?> <br>
Sluchátka: <?= $computer0['headphones'] ?> <br>
Monitor: <?= $computer0['display'] ?> <br>
Větrák: <?= $computer0['fan'] ?> <br>

<h2>2. pc</h2>
Procesor: <?= $computer1['CPU'] ?> <br>
RAM paměti: <?= $computer1['RAM'] ?> <br>
Grafická karta: <?= $computer1['GPU'] ?> <br>
SSD paměti: <?= $computer1['SSD'] ?> <br>
Základní deska: <?= $computer1['MB'] ?> <br>
Skříň: <?= $computer1['case'] ?> <br>
Myš: <?= $computer1['mouse'] ?> <br>
Sluchátka: <?= $computer1['headphones'] ?> <br>
Monitor: <?= $computer1['display'] ?> <br>
Větrák: <?= $computer1['fan'] ?> <br>
</body>
</html>