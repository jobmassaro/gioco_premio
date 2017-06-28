<?php include('include/header.php'); ?>
 <head>
        <title>Tabellone</title>
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
        

        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <style>
                 body{
                    background-image: url("images/sfondoazzurro.jpg");
                }
                
        </style>
    </head>
    <body class="container">  
         <img src="images/scegli_numero.png">
        <div class="row" ng-controller="TabelloneDCtrl">
            <div ng-repeat="item in items">  

                <div class="col s12 m4">
                    <a href="" class="card-image" ng-if="item.D76 == 0" ng-click="choose(item.D76,'D76')">
                       
                    </a>
                        <div class="card-image" ng-if="item.D76 == 1 ">
                       
                        </div>

                </div><!-- col -->

                 <div class="col s12 m4">
                    <a href="" class="card-image" ng-if="item.D76 == 0" ng-click="choose(item.D76,'D76')">
                        <img src="images/AZZURRI/azzurro1.png">
                        
                    </a>
                        <div class="card-image" ng-if="item.D76 == 1 ">
                            <img src="images/AZZURRI/azzurroX.png">
                        
                        </div>

                </div><!-- col -->


                 <div class="col s12 m12">
                    <a href="" class="card-image" ng-if="item.D76 == 0" ng-click="choose(item.D76,'D76')">
                       
                    </a>
                        <div class="card-image" ng-if="item.D76 == 1 ">
                        
                        </div>

                </div><!-- col -->
            
                

                <div class="col s12 m3">
                   <a href="" class="card-image" ng-if="item.D77 == 0" ng-click="choose(item.D77,'D77')">
                        <img src="images/AZZURRI/azzurro2.png">
                
                    </a>
                        <div class="card-image" ng-if="item.D77 == 1 ">
                            <img src="images/AZZURRI/azzurroX.png">
                        </div>
                </div><!-- col -->


                 <div class="col s12 m3">
                    <a href="" class="card-image" ng-if="item.D78 == 0" ng-click="choose(item.D78,'D78')">
                        <img src="images/AZZURRI/azzurro3.png">
                    </a>
                        <div class="card-image" ng-if="item.D78 == 1 ">
                            <img src="images/AZZURRI/azzurroX.png">
                        </div>
                </div><!-- col -->

                 

                 <div class="col s12 m3" >
                   <a href="" class="card-image" ng-if="item.D79 == 0" ng-click="choose(item.D79,'D79')">
                        <img src="images/AZZURRI/azzurro4.png">
                    </a>
                        <div class="card-image" ng-if="item.D79 == 1 ">
                             <img src="images/AZZURRI/azzurroX.png">
                        </div>
                </div><!-- col -->

                 <div class="col s12 m3">
                    <a href="" class="card-image" ng-if="item.D80 == 0" ng-click="choose(item.D80,'D80')">
                        <img src="images/AZZURRI/azzurro5.png">
                    </a>
                        <div class="card-image" ng-if="item.D80 == 1 ">
                             <img src="images/AZZURRI/azzurroX.png">
                        </div>
                </div><!-- col -->

                 <div class="col s12 m3" >
                   <a href="" class="card-image" ng-if="item.D81 == 0" ng-click="choose(item.D81,'D81')">
                        <img src="images/AZZURRI/azzurro6.png">
                    </a>
                        <div class="card-image" ng-if="item.D81 == 1 ">
                            <img src="images/AZZURRI/azzurroX.png">
                        </div>
                </div><!-- col -->

                 <div class="col s12 m3">
                     <a href="" class="card-image" ng-if="item.D82 == 0" ng-click="choose(item.D82,'D82')">
                        <img src="images/AZZURRI/azzurro7.png">
                    </a>
                        <div class="card-image" ng-if="item.D82 == 1 ">
                            <img src="images/AZZURRI/azzurroX.png">
                        </div>
                </div><!-- col -->

                 <div class="col s12 m3" >
                   <a href="" class="card-image" ng-if="item.D83 == 0" ng-click="choose(item.D83,'D83')">
                         <img src="images/AZZURRI/azzurro8.png">
                    </a>
                        <div class="card-image" ng-if="item.D83 == 1 ">
                            <img src="images/AZZURRI/azzurroX.png">
                        </div>
                </div><!-- col -->

                   <div class="col s12 m3" >
                      <a href="" class="card-image" ng-if="item.D84 == 0" ng-click="choose(item.D84,'D84')">
                         <img src="images/AZZURRI/azzurro9.png">
                    </a>
                        <div class="card-image" ng-if="item.D84 == 1 ">
                            <img src="images/AZZURRI/azzurroX.png">
                        </div>
                </div><!-- col -->


                <div class="col s12 m3" >
                     <a href="" class="card-image" ng-if="item.D85 == 0" ng-click="choose(item.D85,'D85')">
                        <img src="images/AZZURRI/azzurro10.png">
                    </a>
                        <div class="card-image" ng-if="item.D85 == 1 ">
                            <img src="images/AZZURRI/azzurroX.png">
                        </div>
                </div><!-- col -->

                <div class="col s12 m3" >
                    <a href="" class="card-image" ng-if="item.D86 == 0" ng-click="choose(item.D86,'D86')">
                        <img src="images/AZZURRI/azzurro11.png">
                    </a>
                        <div class="card-image" ng-if="item.D86 == 1 ">
                            <img src="images/AZZURRI/azzurroX.png">
                        </div>
                </div><!-- col -->

                 <div class="col s12 m3" >
                   <a href="" class="card-image" ng-if="item.D87 == 0" ng-click="choose(item.D87,'D87')">
                        <img src="images/AZZURRI/azzurro12.png">
                    </a>
                        <div class="card-image" ng-if="item.D87 == 1 ">
                            <img src="images/AZZURRI/azzurroX.png">
                        </div>
                </div><!-- col -->


                    <div class="col s12 m3">
                       <a href="" class="card-image" ng-if="item.D88 == 0" ng-click="choose(item.D88,'D88')">
                            <img src="images/AZZURRI/azzurro13.png">
                    </a>
                        <div class="card-image" ng-if="item.D88 == 1 ">
                            <img src="images/AZZURRI/azzurroX.png">
                        </div>
                </div><!-- col -->


                 <div class="col s12 m3">
                    <a href="" class="card-image" ng-if="item.D89 == 0" ng-click="choose(item.D89,'D89')">
                            <img src="images/AZZURRI/azzurro14.png">
                    </a>
                        <div class="card-image" ng-if="item.D89 == 1 ">
                            <img src="images/AZZURRI/azzurroX.png">
                        </div>
                </div><!-- col -->

                 <div class="col s12 m3">
                    <a href="" class="card-image" ng-if="item.D90 == 0" ng-click="choose(item.D90,'D90')">
                        <img src="images/AZZURRI/azzurro15.png">
                    </a>
                        <div class="card-image" ng-if="item.D90 == 1 ">
                            <img src="images/AZZURRI/azzurroX.png">
                        </div>
                </div><!-- col -->

                 <div class="col s12 m3">
                    <a href="" class="card-image" ng-if="item.D91 == 0" ng-click="choose(item.D91,'D91')">
                        <img src="images/AZZURRI/azzurro16.png">
                    </a>
                        <div class="card-image" ng-if="item.D91 == 1 ">
                            <img src="images/AZZURRI/azzurroX.png">
                        </div>
                </div><!-- col -->

                 <div class="col s12 m3">
                    <a href="" class="card-image" ng-if="item.D92 == 0" ng-click="choose(item.D92,'D92')">
                         <img src="images/AZZURRI/azzurro17.png">
                    </a>
                        <div class="card-image" ng-if="item.D92 == 1 ">
                             <img src="images/AZZURRI/azzurroX.png">
                        </div>
                </div><!-- col -->

                 <div class="col s12 m3">
                      <a href="" class="card-image" ng-if="item.D93 == 0" ng-click="choose(item.D93,'D93')">
                         <img src="images/AZZURRI/azzurro18.png">
                    </a>
                        <div class="card-image" ng-if="item.D93 == 1 ">
                             <img src="images/AZZURRI/azzurroX.png">
                        </div>
                </div><!-- col -->


                 <div class="col s12 m3">
                     <a href="" class="card-image" ng-if="item.D94 == 0" ng-click="choose(item.D94,'D94')">
                        <img src="images/AZZURRI/azzurro19.png">
                    </a>
                        <div class="card-image" ng-if="item.D94 == 1 ">
                            <img src="images/AZZURRI/azzurroX.png">
                        </div>
                </div><!-- col -->

                 <div class="col s12 m3">
                    <a href="" class="card-image" ng-if="item.D95 == 0" ng-click="choose(item.D95,'D95')">
                        <img src="images/AZZURRI/azzurro20.png">
                    </a>
                        <div class="card-image" ng-if="item.D95 == 1 ">
                            <img src="images/AZZURRI/azzurroX.png">
                        </div>
                </div><!-- col -->

                 <div class="col s12 m3">
                    <a href="" class="card-image" ng-if="item.D96 == 0" ng-click="choose(item.D96,'D96')">
                         <img src="images/AZZURRI/azzurro21.png">
                    </a>
                        <div class="card-image" ng-if="item.D96 == 1 ">
                            <img src="images/AZZURRI/azzurroX.png">
                        </div>
                </div><!-- col -->

                 <div class="col s12 m3">
                     <a href="" class="card-image" ng-if="item.D97 == 0" ng-click="choose(item.D97,'D97')">
                         <img src="images/AZZURRI/azzurro22.png">
                    </a>
                        <div class="card-image" ng-if="item.D97 == 1 ">
                            <img src="images/AZZURRI/azzurroX.png">
                        </div>
                </div><!-- col -->

                 <div class="col s12 m3">
                     <a href="" class="card-image" ng-if="item.D98 == 0" ng-click="choose(item.D98,'D98')">
                         <img src="images/AZZURRI/azzurro23.png">
                    </a>
                        <div class="card-image" ng-if="item.D98 == 1 ">
                            <img src="images/AZZURRI/azzurroX.png">
                        </div>
                </div><!-- col -->

                 <div class="col s12 m3">
                     <a href="" class="card-image" ng-if="item.D99 == 0" ng-click="choose(item.D99,'D99')">
                        <img src="images/AZZURRI/azzurro24.png">
                    </a>
                        <div class="card-image" ng-if="item.D99 == 1 ">
                            <img src="images/AZZURRI/azzurroX.png">
                        </div>
                </div><!-- col -->

                 <div class="col s12 m3" >
                   <a href="" class="card-image" ng-if="item.D100 == 0" ng-click="choose(item.D100,'D100')">
                        <img src="images/AZZURRI/azzurro25.png">
                    </a>
                        <div class="card-image" ng-if="item.D100 == 1 ">
                            <img src="images/AZZURRI/azzurroX.png">
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

