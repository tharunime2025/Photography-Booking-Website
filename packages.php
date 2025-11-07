<!DOCTYPE html>
<html>
<head>
    <title>Oculla Photography packages</title>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">



    <style>
       *{
        margin: 0;
        padding: 0;
        /* box-sizing: border-box; */
        
       }
       .page-title {
            text-align: center;
            margin: 20px auto;
            background-color: #f9f9f9; /* Add your desired background color here */
            padding: 20px; /* Add padding for spacing */
            height: 130px;
            justify-content:center;
            font-size: 30px;
            color:  #a78849;
        }
       .item{
            background: none;
            padding: 1rem;
            border: none;
            margin-left: 60px;
            margin-right: 60px;
            background-color: #ecece6;
        }
        /*header style item0 කියන එක විතරයි*/
        /* .item0{
            background: #818181;
            margin-left: 0;
            margin-right: 0;
            
        } */

        .item1{
            margin-top: 0px;
            margin-left: 0;
            margin-right: 0;
            height: 450px;
            padding: 0;
            

        }

        /* .item6{
            margin-top: 20px;
            margin-left: 100px;
            margin-right: 100px;
            margin-bottom: 250px;
            background-color: none;
            padding: 0;
            
        } */

        /* footer style මෙක විතරයි හරිත යට footer කියන එක නෑ */
        /* .item7{
            background: #818181;
            margin-left: 0;
            margin-right: 0;
            margin-top: 10px;
            height: 250px;
            
           
        } */

        /* .footer{
            background:none;
            padding: 2rem;
            border: none; */
        /* } */

        /* .container{
            display: grid;
            grid-auto-rows: minmax(500px,auto);
            grid-row-gap: 1rem;
            background-color: #ecece6;
        } */

        .container1{
            background:none;
            height: 100%;
            display: flex;
            /* justify-content: space-around; */
            align-items: center;
            
        }

       .heading{
            text-align: left;
            margin-bottom: 30px;
            font-size: 200%;
            border-left:none;
            border-bottom: 5px solid white;
            
        }

        h1{
            margin-left: 10px;
            font-family:'Oswald', sans-serif;
            color: #a78849;
        }

        h3{
            font-size: 40px;
        }

        .row{
            display: flex;
            flex-direction: row;
            justify-content:none;

        }


        .card{
            width:20%;
            height: 420px;
            background:#fff;
            border:none;
            margin-bottom:auto;
            margin-left: 50px;
            transition: 0.2s;
            /* position: relative; */
        }

        .card-header{
            text-align: center;
            padding: 40px 5px;
            color: #fff;
            font-family: 'Righteous', cursive;
            letter-spacing: 3px;
        } 

        .gold{
            background: linear-gradient(gold,rgb(255, 173, 20),white);
        }

        .platinum{
            background: linear-gradient(rgb(128, 127, 127),silver,white);
        }

        .individual{
            background: linear-gradient(#34f079,#13d9b5,white);
        }

        .couple{
            background: linear-gradient(#ff6859,#b6325f,white);
        }

        .group{
            background: linear-gradient(#015eea,#00c0fa,white);
        }

        .card-body{
            text-align: center;
            padding: 15px 20px;
            background-color: rgb(255, 255, 255);
            height: 273px;
        }

        p{
            font-weight: none;
            font-family:'Exo 2', sans-serif;
            color: #737373;
        }

        h5{
            font-family:'Exo 2', sans-serif;
        }

        .price{
            text-align: center;
            font-size: 20px;
            margin-top: 8px;
            color: black;
            font-weight: bold;
        }

        .gold-price-margin{
            margin-top: 42px;
        }

        .Birthday-gold-price{
            margin-top: 115px;
        }

        .Birthday-platinum-price{
            margin-top: 95px;
        }

        .event-gold-price{
            margin-top: 95px;
        }

        .event-platinum-price{
            margin-top: 95px;

        }

        .graduation-individual-price{
            margin-top: 129px;
        }

        .graduation-couple-price{
            margin-top: 137px;
        }

        .graduation-group-price{
            margin-top: 60px;
        }

        .card-btn{
            background-color: white;
            border: 2px solid #FA7070;
            border-radius: 10px;
            display: inline-block;
            padding: 10px 40px;
            color: #737373;
            cursor: pointer;
            transition: background-color 0.3s;
         }
         .card-btn:hover {
            background-color: #FA7070;
        }

        .card-btn-margin1{
            margin-top: 10px;
        }

        .Birthday-gold-btn{
            margin-top: 10px;
        }

        .Birthday-platinum-btn{
            margin-top: 10px;
        }

        .card:hover{
            transform: scale(1.05);
            box-shadow: 0 0 40px -10px rgba(0,0,0 , 0.2);
        }

       /* .footertext{
        color: rgb(0, 0, 0);
        text-wrap: auto;
       } */
        
       /* .footerlink{
        color: rgb(255, 253, 124);
       } */

    /*screen resizing*/

      @media screen and (max-width:1000px) {
        .card{
            width: 40%;
        }
      }

      @media screen and (max-width:720px) {
        .container{
            width: 100%;
        }
        .heading{
            padding: auto;
            font-size: 20px;
        }
        .card {
            width: 80%;
        }
      }
      
        
      
        
      
    #p1 { style="font-family: 'Arial', sans-serif;    }     
        
        
    </style>
</head>
<body>
    
<?php include 'defheader.php'; ?>
<div class="page-title" >
    <h1 >
    <p>Catalog</p>
    </h1>

</div>


    <div class="container">
        
        <!-- <div class="item item1">
            <div class="item item0"> attach to header code   <!-මෙක අයින් කරලා මෙතනට code එක දාන්න -->

            <!-- </div> -->
    
            <!--photo එක අයින් කරන්න ඔන්නෙනම් යට තියෙන code එක අයින් කොරන්න හරිතේ -->
            <!-- <img src="https://i.ibb.co/0Z5gfvd/pic1.png" alt="pic1" height="100%" width="100%" > -->
            
        <!-- </div>  -->


        <div class="item item2">

           
                
                <div class="heading">
                    <br><br>
                    <h1>Wedding Packages</h1>
                </div>

                <div class="row">
                    <div class="card">

                        <div class="card-header gold">
                            <h3>GOLD</h3>
                        </div>

                        <div class="card-body">
                            <p>Two active photographers 
                                12X30 - 40 pages magazine album (Silky Matt) 
                                16X24 Enlargement
                                Couple shoot in a selected location
                                Professionally edited & retouched soft copies
                                Transport cost will be add.                 
                            </p>
                            
                            <p class="price gold-price-margin"> 90 000 LKR </p>
                                
                            <a href=" reachoutform1.php " class="card-btn card-btn-margin1">Select</a>    <!--remove # tag and paste your link--> 
                        </div>

                       

                    </div> 
                    
                    <div class="card">

                        <div class="card-header platinum">
                            <h3>PLATINUM</h3>
                        </div>

                        <div class="card-body">
                            <p>Two active photographers
                                12X30 - 40 pages magazine album (Silky Matt)
                                8X24 - 20 pages family album (Silky Matt)
                                16X24 Enlargement 2
                                Couple shoot in a selected location
                                Professionally edited & retouched soft copies
                                Transport cost will be add.
                            </p>
                            <p class="price"> 120 000 LKR </p>

                            <a href=" reachoutform1.php " class="card-btn">Select</a>    <!--remove # tag and paste your link-->
                        </div>

                        

                    </div>    
                </div>

         </div>

       


        <div class="item item3">



            <div class="heading">
                <h1>Birthday Packages</h1>
            </div>

            <div class="row">
                <div class="card">

                    <div class="card-header gold">
                        <h3>GOLD</h3>
                    </div>

                    <div class="card-body">
                        <p>15-20 edited facebook album
                            Professionally edited soft copies
                            Event coverage only
                                             
                        </p>
                        
                        <p class="price Birthday-gold-price"> 5 000 LKR </p>
                            
                        <a href=" reachoutform1.php " class="card-btn Birthday-gold-btn">Select</a>    <!--remove # tag and paste your link--> 
                    </div>

                   

                </div> 
                
                <div class="card">

                    <div class="card-header platinum">
                        <h3>PLATINUM</h3>
                    </div>

                    <div class="card-body">
                        <p>15-20 edited facebook album
                            Professionally edited soft copies
                            Shoot in a selected location
                            Event coverage
                        
                        </p>
                        <p class="price Birthday-platinum-price"> 7 000 LKR </p>

                        <a href=" reachoutform1.php" class="card-btn Birthday-platinum-btn">Select</a>    <!--remove # tag and paste your link-->
                    </div>

                    

                </div>    
            </div>

            


        </div>
        <div class="item item4">


            <div class="heading">
                <h1>Event Packages</h1>
            </div>

            <div class="row">
                <div class="card">

                    <div class="card-header gold">
                        <h3>GOLD</h3>
                    </div>

                    <div class="card-body">
                        <p>Dual - camera coverage
                            Professionally edited soft copies
                            Unlimited and Comprehensive Event
                            Coverage Up to Six Hours
                                             
                        </p>
                        
                        <p class="price event-gold-price"> 40 000LKR </p>
                            
                        <a href=" reachoutform1.php " class="card-btn">Select</a>     <!--remove # tag and paste your link-->
                    </div>

                   

                </div> 
                
                <div class="card">

                    <div class="card-header platinum">
                        <h3>PLATINUM</h3>
                    </div>

                    <div class="card-body">
                        <p>Triple - camera coverage
                            Professionally edited soft copies
                            Unlimited and Comprehensive Event
                            Coverage Up to Six Hours
                            
                        </p>
                        <p class="price event-platinum-price"> 50 000LKR </p>

                        <a href=" reachoutform1.php " class="card-btn">Select</a>    <!--remove # tag and paste your link-->
                    </div>

                    

                </div>    
            </div>





        </div>
        <div class="item item5">


            <div class="heading">
                <h1>Graduation Packages</h1>
            </div>

            <div class="row">
                <div class="card">

                    <div class="card-header individual">
                        <h3>INDIVIDUAL</h3>
                    </div>

                    <div class="card-body">
                        <p>15-20 edited images
                            one hour session
                            Professionally edited soft copies
                                            
                        </p>
                        
                        <p class="price graduation-individual-price"> 3 500 LKR </p>
                            
                        <a href=" reachoutform1.php " class="card-btn card-btn-margin1">Select</a>     <!--remove # tag and paste your link-->
                    </div>

                   

                </div> 
                
                <div class="card">

                    <div class="card-header couple">
                        <h3>COUPLE</h3>
                    </div>

                    <div class="card-body">
                        <p>15-20 edited images
                            one hour session
                            Professionally edited soft copies
                        </p>
                        <p class="price graduation-couple-price"> 4 000 LKR </p>

                        <a href=" reachoutform1.php " class="card-btn">Select</a>    <!--remove # tag and paste your link-->
                    </div>

                    

                </div> 
                
                <div class="card">

                    <div class="card-header group">
                        <h3>GROUP</h3>
                    </div>

                    <div class="card-body">
                        <p>15-20 edited images
                            2 locations
                            Professionally edited soft copies
                                           
                        </p>
                        <p class="graduation-group-price">
                        <p class="price"> <h5> 3 - 5 Members | For each 1000 LKR</h5> </p>
                        <p class="price"> <h5> 6 - 9 Members | For each  750 LKR</h5> </p>
                        <p class="price"> <h5>10 - 15 Members | For each 500 LKR</h5> </p>
                        </p>  <br> 
                        <a href=" reachoutform1.php " class="card-btn card-btn-margin1">Select</a>    <!--remove # tag and paste your link--> 
                    </div>

                   

                </div> 
            </div><br><br>


            

        </div>
        <!-- <div class="item item6">

            <div class="container1"> -->

            
            

        <!--contact details-->
          <!-- 
            <div class="footer">

                <p class="footertext">CONTACT US</p>
                <p class="footertext">Facebook <a href="https://www.facebook.com/oculaaphotography" class="footerlink">Oculaa Photography</a></p>
                <p class="footertext">Instagram <a href="https://www.instagram.com/oculaa_photography" class="footerlink">Oculaa Photography</a></p>
                <p class="footertext">WhatsApp 071 7526076</p>

                    
            </div> 
         -->
            
            <!-- </div> -->

            <!-- <div class="item7">
                
            </div>
     -->
        <!-- </div> -->

       

    </div>

    




    <script type="text/javascript">

    </script>
    <!-- </div> -->
    <?php include 'footer.php'; ?>

</body>
</html>