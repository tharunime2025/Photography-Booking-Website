<!DOCTYPE html>
<html>
    <head>
        <style>
        body{

            margin: 0;
        }
        
        .footer{
            display: flex  ;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-between;
            /* position:fixed; */
            bottom: 2px;
            width:100%;
            background-color: black;
            color:white;
            padding: 20px 10px;
            font-family:Verdana, Geneva, Tahoma, sans-serif;
            height: 270px;
        }
        
        .created-by{
            float:left;
            width:500px;
            padding:20px 0;
            margin:0 0 0 0px;
            border width :2px ;
            list-style: none;
            text-align: center;

            
        }
        .explore{
            float:right;
            /* width:500px; */
            padding:20px 0;
            margin:0 0 0 270px;
            border width :2px ;
            list-style: none;
            text-align: center;
        }
        a{
            color:white;

        }
        a:hover{
            color:blue;
        }
        
        .copyright{
            clear:left;
            background-color:black;
            color:azure;
            text-align:center;
            padding:5px;
            height:1%;
            width:100%;
        
        }
        ul {
            list-style-type: none; /* Change to square bullets */
}
        
        </style>
        
    </head>
    <body>
        <footer>
            <div class="footer">
                
                
                <div class="explore">
                 
                
                <h5>EXPLORE</h5><br>
            
                <ul>
                    <li><a href="homeindex.php">Home</a></li>
                    <li><a href="gallary.php">Click & Cherish</a></li>
                    <!-- <ul>
                        <li><a href="/products/category1">Wedding</a></li>
                        <li><a href="/products/category2">Graduation</a></li>
                        <li><a href="/products/category1">Birthday</a></li>
                        <li><a href="/products/category2">Event</a></li>
                    </ul> -->
                    <li><a href="packages.php">Catalog</a></li>
                    <li><a href="reachoutform1.php">Reach Out</a></li> 
                    <li><a href="ourstory.php">Our Story</a></li> 

                 </ul>
                 </div>
                  <div class="created-by">
                 <h5>CREATED BY</h5><br>
                 <ul>
                     <li>Tharushi Nimeshika</li>
                     <li>Shashini Sandanika</li>
                     <li>Janakmal Gunasekara</li>
                     <li>Induru Nimesha</li>
                     <li>Aloka Darshanee</li>
                     <li>Thakshila dinesh</li>
                 </ul>
                 
                 </div>
                 <div class="copyright">
                    <p>Copyright © 2023 occulaphotography</p>
                </div>
                 </div>
    
                   
           
        </footer>
        
    </body>
</html> 