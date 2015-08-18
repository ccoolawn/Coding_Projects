<html>
<head>
    <title></title>
<style>

body{
    width: 800px;
    height: 800px;
    border: 1px solid black;
    padding: 0;
}

.black{
    background: #FFC523;
    height: 100px;
    width:  100px;
    display: inline-block;
    margin-left: -1;
    margin-bottom: -1;
}

.red{
    background: #2F134E;
     height: 100px;
    width:  100px;
    display: inline-block;
    margin-left: -1;
    margin-bottom: -1;
}

</style>
</head>
    <body>
        <?php



        $black_red = "<div class= 'black'></div><div class= 'red'></div>";
        $red_black = "<div class= 'red'></div><div class= 'black'></div>";


            for ($i = 0; $i < 4; $i ++)
            {
                for($w = 0; $w < 4; $w ++){
                        echo $red_black ;
                    }
                    for($d = 0; $d < 4; $d ++){
                        echo $black_red ;
                }

            }

            ?>

        <!-- <div class= 'black'></div>
        <div class= 'red'></div> -->
    </body>
</html>