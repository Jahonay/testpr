<html>
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700;800&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8"/>
        <style>
            *
            {
                font-family: 'Open Sans', sans-serif;
                box-sizing: border-box;

            }
            body 
            {
                width:100vw;
                height:100vh;
                overflow:hidden;
                background:linear-gradient(120deg, rgba(255,255,0,.8), rgba(255,50,10,1) 70.71%);
            }
            .wrapper{
                width:100%;
                height:100vh;
                display:flex;
            }
            .bg
            {
                position:absolute;
                inset:0px;
                z-index:-20;
            }
            .container
            {
                width:50vw;
                height:50vh;
                margin:auto auto auto auto;
                display:inline-flex;
                flex-direction:column;
                overflow:visible;
            }
            header
            {
                font-size:4vw;
                font-weight:800;
                width:25vw;
                color:white;
                margin-top:auto;
            }
            button
            {
                background-color:white;
                padding: 2vh 4vw;
                border-radius:50px;
                border:none;
                font-size:2vw;
                font-weight:700;
                margin:25px 0px;
                width:fit-content;
                margin-bottom:auto;
                cursor:pointer;
                transition: all .5s ease-in-out;
                
            }
            button:hover
            {
                transform:scale(1.1);
                background-color:lavender;
            }
   
                
        </style>

        
    </head>
    <body id="body">
        <div class="wrapper">
            <div class="container">
                <header>
                    ACTIVATE YOUR AUDIENCE
                </header>
                <button type="button" id="btn" onclick="rGradient()">
                    GET STARTED
                </button>   
            </div>
            <div class="bg">
            </div>
        </div>
        <?php   
            session_start();  
            //create circles of random sizes for each session visit
            //they have absolute position and have random distances
            //away from top and right
            for($x = 0; $x <= $_SESSION['count']; $x++)
            {
                
                $ran =  rand(0,100);
                $ran2 = rand(0,100);
                $ball = rand(100,300);
                echo "<div class='ball' 
                style='
                background-color:rgba(255,255,255,.2); 
                height:${ball}px; 
                width:${ball}px;
                positon:absolute;
                top:${ran}vh;
                right:${ran2}vw;
                border-radius:50%;
                position:absolute;
                z-index:-10;
                '>";
                echo "</div>";
            }

            //keeps a count of sessions and increments them
            if(isset($_SESSION['count']))  
            {  
            $_SESSION['count']++;
            }
            else  
            {  
            $_SESSION['count'] = 0;  
            }
            //reset session count to 0
            $reset=htmlspecialchars($_GET["reset"]);
            echo $reset;
            if($reset == "1"){
                $_SESSION['count']=0;
            }
             
        
        ?>  
    </body>
    <foooter>
    <script >
        //set 6 variables between 0 and 255
        //create gradient using variables
        function rGradient()
        {
        const r1 = Math.round(Math.random() * 255);
        const g1 = Math.round(Math.random() * 255);
        const b1 = Math.round(Math.random() * 255);
        const r2 = Math.round(Math.random() * 255);
        const g2 = Math.round(Math.random() * 255);
        const b2 = Math.round(Math.random() * 255);
        document.body.style.background = `linear-gradient(120deg, rgba(${r1},${g1},${b1},1), rgba(${r2},${g2},${b2},1))`;
        }
        

    </script>
    </footer>
</html>