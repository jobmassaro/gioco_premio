<?php include('include/header.php'); ?>
 <head>
        <title>Tabellone</title>
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
        

        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <style>
                 body{
                    background-image: url("images/sfondoverde.jpg");
                }
                
        </style>
    </head>
    <body class="container">  
         <img src="images/scegli_numero.png">
        <div class="row" ng-controller="TabelloneCCtrl">
            <div ng-repeat="item in items">  

                 <div class="col s12 m4">
                      <a href="" class="card-image" ng-if="item.C51 == 0" ng-click="choose(item.C51,'C51')">
                       
                    </a>
                        <div class="card-image" ng-if="item.C51 == 1 ">
                       
                        </div>

                </div><!-- col -->

                 <div class="col s12 m4">
                      <a href="" class="card-image" ng-if="item.C51 == 0" ng-click="choose(item.C51,'C51')">
                        <img src="images/VERDI/verde1.png">
                       
                    </a>
                        <div class="card-image" ng-if="item.C51 == 1 ">
                            <img src="images/VERDI/verdeX.png">
                       
                        </div>

                </div><!-- col -->

                 <div class="col s12 m12">
                      <a href="" class="card-image" ng-if="item.C51 == 0" ng-click="choose(item.C51,'C51')">
                    </a>
                        <div class="card-image" ng-if="item.C51 == 1 ">
                        </div>

                </div><!-- col -->
            
               

                <div class="col s12 m3" >
                    <a href="" class="card-image" ng-if="item.C52 == 0" ng-click="choose(item.C52,'C52')">
                        <img src="images/VERDI/verde2.png">
                    </a>
                        <div class="card-image" ng-if="item.C52 == 1 ">
                            <img src="images/VERDI/verdeX.png">
                        </div>
                </div><!-- col -->


                 <div class="col s12 m3" >
                      <a href="" class="card-image" ng-if="item.C53 == 0" ng-click="choose(item.C53,'C53')">
                        <img src="images/VERDI/verde3.png">
                    </a>
                        <div class="card-image" ng-if="item.C53 == 1 ">
                            <img src="images/VERDI/verdeX.png">
                        </div>
                </div><!-- col -->

                
                 <div class="col s12 m3" >
                      <a href="" class="card-image" ng-if="item.C54 == 0" ng-click="choose(item.C54,'C54')">
                        <img src="images/VERDI/verde4.png">
                    </a>
                        <div class="card-image" ng-if="item.C54 == 1 ">
                            <img src="images/VERDI/verdeX.png">
                        </div>
                </div><!-- col -->

                 <div class="col s12 m3">
                      <a href="" class="card-image" ng-if="item.C55 == 0" ng-click="choose(item.C55,'C55')">
                        <img src="images/VERDI/verde5.png">
                    </a>
                        <div class="card-image" ng-if="item.C55 == 1 ">
                            <img src="images/VERDI/verdeX.png">
                        </div>
                </div><!-- col -->

                 <div class="col s12 m3" >
                     <a href="" class="card-image" ng-if="item.C56 == 0" ng-click="choose(item.C56,'C56')">
                        <img src="images/VERDI/verde6.png">
                    </a>
                        <div class="card-image" ng-if="item.C56 == 1 ">
                            <img src="images/VERDI/verdeX.png">
                        </div>
                </div><!-- col -->

                 <div class="col s12 m3" >
                    <a href="" class="card-image" ng-if="item.C57 == 0" ng-click="choose(item.C57,'C57')">
                        <img src="images/VERDI/verde7.png">
                    </a>
                        <div class="card-image" ng-if="item.C57 == 1 ">
                        <img src="images/VERDI/verdeX.png">
                        </div>
                </div><!-- col -->

                 <div class="col s12 m3" >
                      <a href="" class="card-image" ng-if="item.C58 == 0" ng-click="choose(item.C58,'C58')">
                        <img src="images/VERDI/verde8.png">
                        </a>
                        <div class="card-image" ng-if="item.C58 == 1 ">
                            <img src="images/VERDI/verdeX.png">
                        </div>
                </div><!-- col -->

                   <div class="col s12 m3">
                      <a href="" class="card-image" ng-if="item.C59 == 0" ng-click="choose(item.C59,'C59')">
                            <img src="images/VERDI/verde9.png">
                        </a>
                        <div class="card-image" ng-if="item.C59 == 1 ">
                            <img src="images/VERDI/verdeX.png">
                        </div>
                </div><!-- col -->


                <div class="col s12 m3" >
                      <a href="" class="card-image" ng-if="item.C60 == 0" ng-click="choose(item.C60,'C60')">
                            <img src="images/VERDI/verde10.png">
                        </a>
                        <div class="card-image" ng-if="item.C60 == 1 ">
                            <img src="images/VERDI/verdeX.png">
                        </div>
                </div><!-- col -->

                <div class="col s12 m3">
                   <a href="" class="card-image" ng-if="item.C61 == 0" ng-click="choose(item.C61,'C61')">
                            <img src="images/VERDI/verde11.png">
                        </a>
                        <div class="card-image" ng-if="item.C61 == 1 ">
                            <img src="images/VERDI/verdeX.png">
                        </div>
                </div><!-- col -->

                 <div class="col s12 m3" >
                       <a href="" class="card-image" ng-if="item.C62 == 0" ng-click="choose(item.C62,'C62')">
                            <img src="images/VERDI/verde12.png">
                        </a>
                        <div class="card-image" ng-if="item.C62 == 1 ">
                            <img src="images/VERDI/verdeX.png">
                        </div>
                </div><!-- col -->


                    <div class="col s12 m3">
                    <a href="" class="card-image" ng-if="item.C63 == 0" ng-click="choose(item.C63,'C63')">
                         <img src="images/VERDI/verde13.png">
                        </a>
                        <div class="card-image" ng-if="item.C63 == 1 ">
                            <img src="images/VERDI/verdeX.png">
                        </div>
                </div><!-- col -->


                 <div class="col s12 m3" ng-click="choose(item.C64)">
                      <a href="" class="card-image" ng-if="item.C64 == 0" ng-click="choose(item.C64,'C64')">
                         <img src="images/VERDI/verde14.png">
                        </a>
                        <div class="card-image" ng-if="item.C64 == 1 ">
                            <img src="images/VERDI/verdeX.png">
                        </div>
                </div><!-- col -->

                 <div class="col s12 m3">
                   <a href="" class="card-image" ng-if="item.C65 == 0" ng-click="choose(item.C65,'C65')">
                            <img src="images/VERDI/verde15.png">
                        </a>
                        <div class="card-image" ng-if="item.C65 == 1 ">
                            <img src="images/VERDI/verdeX.png">
                        </div>
                </div><!-- col -->

                 <div class="col s12 m3">
                         <a href="" class="card-image" ng-if="item.C66 == 0" ng-click="choose(item.C66,'C66')">
                             <img src="images/VERDI/verde16.png">
                        </a>
                        <div class="card-image" ng-if="item.C66 == 1 ">
                            <img src="images/VERDI/verdeX.png">
                        </div>
                </div><!-- col -->

                 <div class="col s12 m3" >
                   <a href="" class="card-image" ng-if="item.C67 == 0" ng-click="choose(item.C67,'C67')">
                             <img src="images/VERDI/verde17.png">
                        </a>
                        <div class="card-image" ng-if="item.C67 == 1 ">
                            <img src="images/VERDI/verdeX.png">
                        </div>
                </div><!-- col -->

                 <div class="col s12 m3">
                       <a href="" class="card-image" ng-if="item.C68 == 0" ng-click="choose(item.C68,'C68')">
                            <img src="images/VERDI/verde18.png">
                        </a>
                        <div class="card-image" ng-if="item.C68 == 1 ">
                            <img src="images/VERDI/verdeX.png">
                        </div>
                </div><!-- col -->


                 <div class="col s12 m3" >
                      <a href="" class="card-image" ng-if="item.C69 == 0" ng-click="choose(item.C69,'C69')">
                            <img src="images/VERDI/verde19.png">
                        </a>
                        <div class="card-image" ng-if="item.C69 == 1 ">
                            <img src="images/VERDI/verdeX.png">
                        </div>
                </div><!-- col -->

                 <div class="col s12 m3">
                       <a href="" class="card-image" ng-if="item.C70 == 0" ng-click="choose(item.C70,'C70')">
                            <img src="images/VERDI/verde20.png">
                        </a>
                        <div class="card-image" ng-if="item.C70 == 1 ">
                            <img src="images/VERDI/verdeX.png">
                        </div>
                </div><!-- col -->

                 <div class="col s12 m3">
                     <a href="" class="card-image" ng-if="item.C71 == 0" ng-click="choose(item.C71,'C71')">
                            <img src="images/VERDI/verde21.png">
                        </a>
                        <div class="card-image" ng-if="item.C71 == 1 ">
                            <img src="images/VERDI/verdeX.png">
                        </div>
                </div><!-- col -->

                 <div class="col s12 m3" >
                        <a href="" class="card-image" ng-if="item.C72 == 0" ng-click="choose(item.C72,'C72')">
                            <img src="images/VERDI/verde22.png">
                        </a>
                        <div class="card-image" ng-if="item.C72 == 1 ">
                            <img src="images/VERDI/verdeX.png">
                        </div>
                </div><!-- col -->

                 <div class="col s12 m3">
                     <a href="" class="card-image" ng-if="item.C73 == 0" ng-click="choose(item.C73,'C73')">
                            <img src="images/VERDI/verde23.png">
                        </a>
                        <div class="card-image" ng-if="item.C73 == 1 ">
                            <img src="images/VERDI/verdeX.png">
                        </div>
                </div><!-- col -->

                 <div class="col s12 m3" >
                    <a href="" class="card-image" ng-if="item.C74 == 0" ng-click="choose(item.C74,'C74')">
                            <img src="images/VERDI/verde24.png">
                        </a>
                        <div class="card-image" ng-if="item.C74 == 1 ">
                            <img src="images/VERDI/verdeX.png">
                        </div>
                </div><!-- col -->

                 <div class="col s12 m3">
                    <a href="" class="card-image" ng-if="item.C75 == 0" ng-click="choose(item.C75,'C75')">
                            <img src="images/VERDI/verde25.png">
                        </a>
                        <div class="card-image" ng-if="item.C75 == 1 ">
                            <img src="images/VERDI/verdeX.png">
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

