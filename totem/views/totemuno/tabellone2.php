<?php include('include/header.php'); ?>
 <head>
        <title>Tabellone</title>
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
        

        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <style>
                 body{
                    background-image: url("images/sfondorosso.jpg");
                }
                
        </style>
    </head>
    <body class="container">  
         <img src="images/scegli_numero.png">
        <div class="row" ng-controller="TabelloneBCtrl">
            <div ng-repeat="item in items">  

                <div class="col s12 m4">
                   <a href="" class="card-image" ng-if="item.B26 == 0" ng-click="choose(item.B26,'B26')">
                    </a>
                    <div class="card-image" ng-if="item.B26 == 1 ">
                    </div>

                </div><!-- col -->


                 <div class="col s12 m4">
                   <a href="" class="card-image" ng-if="item.B26 == 0" ng-click="choose(item.B26,'B26')">
                        <img src="images/ROSSI/rosso1.png">
                    </a>
                    <div class="card-image" ng-if="item.B26 == 1 ">
                        <img src="images/ROSSI/rossoX.png">
                    </div>

                </div><!-- col -->



                 <div class="col s12 m12">
                   <a href="" class="card-image" ng-if="item.B26 == 0" ng-click="choose(item.B26,'B26')">
                    </a>
                    <div class="card-image" ng-if="item.B26 == 1 ">
                    </div>

                </div><!-- col -->



            
             

                <div class="col s12 m3">
                    <a href="" class="card-image" ng-if="item.B27 == 0" ng-click="choose(item.B27,'B27')">
                        <img src="images/ROSSI/rosso2.png">
                    </a>
                    <div class="card-image" ng-if="item.B27 == 1 ">
                        <img src="images/ROSSI/rossoX.png">
                    </div>
                </div><!-- col -->


                 <div class="col s12 m3">
                    <a href="" class="card-image" ng-if="item.B28 == 0" ng-click="choose(item.B28,'B28')">
                         <img src="images/ROSSI/rosso3.png">
                    </a>
                    <div class="card-image" ng-if="item.B28 == 1 ">
                        <img src="images/ROSSI/rossoX.png">
                    </div>
                </div><!-- col -->

              

                 <div class="col s12 m3">
                   <a href="" class="card-image" ng-if="item.B29 == 0" ng-click="choose(item.B29,'B29')">
                         <img src="images/ROSSI/rosso4.png">
                    </a>
                    <div class="card-image" ng-if="item.B29 == 1 ">
                         <img src="images/ROSSI/rossoX.png">
                    </div>
                </div><!-- col -->

                 <div class="col s12 m3">
                      <a href="" class="card-image" ng-if="item.B30 == 0" ng-click="choose(item.B30,'B30')">
                        <img src="images/ROSSI/rosso5.png">
                    </a>
                    <div class="card-image" ng-if="item.B30 == 1 ">
                        <img src="images/ROSSI/rossoX.png">
                    </div>
                </div><!-- col -->

                 <div class="col s12 m3" ng-click="choose(item.B31)">
                    <a href="" class="card-image" ng-if="item.B31 == 0" ng-click="choose(item.B31,'B31')">
                         <img src="images/ROSSI/rosso6.png">
                    </a>
                    <div class="card-image" ng-if="item.B31 == 1 ">
                        <img src="images/ROSSI/rossoX.png">
                    </div>
                </div><!-- col -->

                 <div class="col s12 m3" >
                    <a href="" class="card-image" ng-if="item.B32 == 0" ng-click="choose(item.B32,'B32')">
                          <img src="images/ROSSI/rosso7.png">
                    </a>
                    <div class="card-image" ng-if="item.B32 == 1 ">
                         <img src="images/ROSSI/rossoX.png">
                    </div>
                </div><!-- col -->

                 <div class="col s12 m3" ng-click="choose(item.B33)">
                      <a href="" class="card-image" ng-if="item.B33 == 0" ng-click="choose(item.B33,'B33')">
                        <img src="images/ROSSI/rosso8.png">
                    </a>
                    <div class="card-image" ng-if="item.B33 == 1 ">
                        <img src="images/ROSSI/rossoX.png">
                    </div>
                </div><!-- col -->

                   <div class="col s12 m3" ng-click="choose(item.B34)">
                     <a href="" class="card-image" ng-if="item.B34 == 0" ng-click="choose(item.B34,'B34')">
                        <img src="images/ROSSI/rosso9.png">
                    </a>
                    <div class="card-image" ng-if="item.B34 == 1 ">
                        <img src="images/ROSSI/rossoX.png">
                    </div>
                </div><!-- col -->


                <div class="col s12 m3">
                    <a href="" class="card-image" ng-if="item.B35 == 0" ng-click="choose(item.B35,'B35')">
                       <img src="images/ROSSI/rosso10.png">
                    </a>
                    <div class="card-image" ng-if="item.B35 == 1 ">
                         <img src="images/ROSSI/rossoX.png">
                    </div>
                </div><!-- col -->

                <div class="col s12 m3">
                     <a href="" class="card-image" ng-if="item.B36 == 0" ng-click="choose(item.B36,'B36')">
                         <img src="images/ROSSI/rosso11.png">
                    </a>
                    <div class="card-image" ng-if="item.B36 == 1 ">
                        <img src="images/ROSSI/rossoX.png">
                    </div>
                </div><!-- col -->

                 <div class="col s12 m3" >
                     <a href="" class="card-image" ng-if="item.B37 == 0" ng-click="choose(item.B37,'B37')">
                        <img src="images/ROSSI/rosso12.png">
                    </a>
                    <div class="card-image" ng-if="item.B37 == 1 ">
                        <img src="images/ROSSI/rossoX.png">
                    </div>
                </div><!-- col -->


                    <div class="col s12 m3">
                        <a href="" class="card-image" ng-if="item.B38 == 0" ng-click="choose(item.B38,'B38')">
                             <img src="images/ROSSI/rosso13.png">
                        </a>
                        <div class="card-image" ng-if="item.B38 == 1 ">
                            <img src="images/ROSSI/rossoX.png">
                        </div>
                </div><!-- col -->


                 <div class="col s12 m3" >
                        <a href="" class="card-image" ng-if="item.B39 == 0" ng-click="choose(item.B39,'B39')">
                            <img src="images/ROSSI/rosso14.png">
                        </a>
                        <div class="card-image" ng-if="item.B39 == 1 ">
                            <img src="images/ROSSI/rossoX.png">
                        </div>
                </div><!-- col -->

                 <div class="col s12 m3">
                        <a href="" class="card-image" ng-if="item.B40 == 0" ng-click="choose(item.B40,'B40')">
                            <img src="images/ROSSI/rosso15.png">
                        </a>
                        <div class="card-image" ng-if="item.B40 == 1 ">
                            <img src="images/ROSSI/rossoX.png">
                        </div>
                </div><!-- col -->

                 <div class="col s12 m3" >
                        <a href="" class="card-image" ng-if="item.B41 == 0" ng-click="choose(item.B41,'B41')">
                            <img src="images/ROSSI/rosso16.png">
                        </a>
                        <div class="card-image" ng-if="item.B41 == 1 ">
                            <img src="images/ROSSI/rossoX.png">
                        </div>
                </div><!-- col -->

                 <div class="col s12 m3" >
                        <a href="" class="card-image" ng-if="item.B42 == 0" ng-click="choose(item.B42,'B42')">
                            <img src="images/ROSSI/rosso17.png">
                        </a>
                        <div class="card-image" ng-if="item.B42 == 1 ">
                            <img src="images/ROSSI/rossoX.png">
                        </div>
                </div><!-- col -->

                 <div class="col s12 m3">
                        <a href="" class="card-image" ng-if="item.B43 == 0" ng-click="choose(item.B43,'B43')">
                            <img src="images/ROSSI/rosso18.png">
                        </a>
                        <div class="card-image" ng-if="item.B43 == 1 ">
                            <img src="images/ROSSI/rossoX.png">
                        </div>
                </div><!-- col -->


                 <div class="col s12 m3" >
                        <a href="" class="card-image" ng-if="item.B44 == 0" ng-click="choose(item.B44,'B44')">
                            <img src="images/ROSSI/rosso19.png">
                        </a>
                        <div class="card-image" ng-if="item.B44 == 1 ">
                            <img src="images/ROSSI/rossoX.png">
                        </div>
                </div><!-- col -->

                 <div class="col s12 m3">
                      <a href="" class="card-image" ng-if="item.B45 == 0" ng-click="choose(item.B45,'B45')">
                            <img src="images/ROSSI/rosso20.png">
                        </a>
                        <div class="card-image" ng-if="item.B45 == 1 ">
                            <img src="images/ROSSI/rossoX.png">
                        </div>
                </div><!-- col -->

                 <div class="col s12 m3" >
                         <a href="" class="card-image" ng-if="item.B46 == 0" ng-click="choose(item.B46,'B46')">
                            <img src="images/ROSSI/rosso21.png">
                        </a>
                        <div class="card-image" ng-if="item.B46 == 1 ">
                            <img src="images/ROSSI/rossoX.png">
                        </div>
                </div><!-- col -->

                 <div class="col s12 m3">
                       <a href="" class="card-image" ng-if="item.B47 == 0" ng-click="choose(item.B47,'B47')">
                            <img src="images/ROSSI/rosso22.png">
                        </a>
                        <div class="card-image" ng-if="item.B47 == 1 ">
                            <img src="images/ROSSI/rossoX.png">
                        </div>
                </div><!-- col -->

                    <div class="col s12 m3">
                     <a href="" class="card-image" ng-if="item.B48 == 0" ng-click="choose(item.B48,'B48')">
                            <img src="images/ROSSI/rosso23.png">
                        </a>
                        <div class="card-image" ng-if="item.B48 == 1 ">
                            <img src="images/ROSSI/rossoX.png">
                        </div>
                </div><!-- col -->

                 <div class="col s12 m3">
                       <a href="" class="card-image" ng-if="item.B49 == 0" ng-click="choose(item.B49,'B49')">
                             <img src="images/ROSSI/rosso24.png">
                        </a>
                        <div class="card-image" ng-if="item.B49 == 1 ">
                            <img src="images/ROSSI/rossoX.png">
                        </div>
                </div><!-- col -->

                 <div class="col s12 m3">
                         <a href="" class="card-image" ng-if="item.B50 == 0" ng-click="choose(item.B50,'B50')">
                           <img src="images/ROSSI/rosso25.png">
                        </a>
                        <div class="card-image" ng-if="item.B50 == 1 ">
                             <img src="images/ROSSI/rossoX.png">
                        </div>
                </div><!-- col -->



            </div>
        </div>
       <nav class="blue-grey darken-4">
            <div class="nav-wrapper">
                <div class="col s12">
                    <p>Scelgo IO per te!</p>
                    <h3 id="testCC" style="color:black;"> </h3>
                    <div id="demo">
                </div>
            </div>
        </nav>
    </body>
     <?php 
        
        $sec2 =0;
        $sec2 = date('s');
        $sec2 += 15;
       

 ?>

      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
       <script>
      var i =0;
      setInterval(function () {
        var d = new Date();
        var seconds = d.getSeconds(); //convet 00:00 to seconds for easier caculation
        var fiveMin = 60; //five minutes is 300 seconds!
        var timeleft = <?php echo $sec2; ?> - seconds; // let's say 01:30, then current seconds is 90, 90%300 = 90, then 300-90 = 210. That's the time left!
        var result = parseInt(timeleft / 60) + ':' + timeleft; //formart seconds into 00:00 

        console.log('>>>' +result);
        document.getElementById('testCC').innerHTML = result;
        if(result == "0:1")
        {
            if(i == 0)
            {
              //  loadRand();
                i++;
            }
            
           
        }
            
    }, 950); //calling it every 0.5 second to do a count down
   
    function loadRand() 
    {
         $.ajax({
            url: "services/randomNumber.php?id=1",
            context: document.body,
            success: function(responseText) 
            {
               // console.log('risposta ' +responseText);
               if(responseText=="false")
               {
                   //location.reload();

               }else{
                if(responseText==null || responseText =='')
                    //location.reload();
                   loadRand();
                else{

                    swal({
                        title: "Numero Selezionato per te",
                        text: '<strong style="color:#000; font-size:22px;">'+ responseText +'<strong>',
                        html: true,
                        type: "info",
                        closeOnConfirm: false,
                        showLoaderOnConfirm: true,
                        },
                        function()
                        {
                            setTimeout(function(){
                            location.href="../../index.php";
                        }, 1000);
                        });

                    
                }
                
                    
               }
            }
        });
    }























   
    </script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/js/materialize.min.js"></script>  
      <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
      <script src="js/tabellone.js"></script>    
      <link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
      <script src="dist/sweetalert.min.js"></script>
      
     

</html>

