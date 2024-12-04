<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #customers {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }

        #customers td, #customers th {
        border: 1px solid #ddd;
        padding: 8px;
        }

        #customers tr:nth-child(even){background-color: #f2f2f2;}

        #customers tr:hover {background-color: #ddd;}

        #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #04AA6D;
        color: white;
        }
    </style>
</head>
<body>
    <?php
    echo "<p>ChciSeZabit:]</p>"; 
    $pole = ["cislo" => "test1", "Gogot" => "test2", "test3"];
        $clanky = 
        [
            [
                "name" => "Prijmeni",
                "surname" => "Jmeno",
            ],
            [
                "name" => "Grader",
                "surname" => "DomiG",
            ],
            [
                "name" => "Gabriel",
                "surname" => "Ultrakill",
            ]
        ];
        print_r($pole);
        echo "<p>NuhUh</p>";
    ?>
    <h1>Shooting Myself rn</h1>

        <form method="GET">
            <select name="name">
                <option value="">Selector</option>
                    <?php foreach($clanky as $clanek):                 
                     if (isset($_GET["name"]) && $_GET["name"] == $clanek["name"]) echo "<option value=" .$clanek["name"] . " selected > . $clanek["name"] . "</option>";
                     else echo "<option value=" .$clanek["name"] .">". $clanek["name"] . "</option>";
                    endforeach; ?>
            </select>
            <button type="submit">CLICK ME MORTAL</button>
        </form>

    <?php        
        $filter = [];
        if (isset($_GET["name"]) && $_GET["name"] !="") 
        {
            $search = $_GET["name"];
            foreach ($clanky as $test) 
            {
                if ($test["name"] == $search || $test["surname"] == $search) $filter[] = $test;
            }
        } 
        else 
        {
            $filter = $clanky; 
        }
        /*
        function filter($clanek)
        {
            return $clanek["name"] == $search;
        }
        if (isset($search[name]) $clanky = array_filter($clanky, "filter"))
        */
    ?>
    <table id="customers">
        <tr>
            <th>Name</th>
            <th>Surname</th>
        </tr>
        <?php foreach($filter as $clanek): ?>
                <tr>
                    <td> <?= $clanek["name"] ?> </td>
                    <td> <?= $clanek["surname"] ?> </td>
                </tr>
        <?php endforeach; ?>
    </table>

</body>
</html>

