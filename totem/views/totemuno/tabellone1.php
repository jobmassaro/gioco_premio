
<?php include('include/header.php'); ?>
   <head>
        <title>Tabellone</title>
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
        

        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <style>
                 body{
                    background-image: url("images/sfondogiallo.jpg");
                }
                
        </style>
    </head>
   
               
    <body class="container">  
         <img src="images/scegli_numero.png">
    
        <div class="row" ng-controller="TabelloneACtrl">
            <div ng-repeat="item in items">  

                <div class="col s12 m4" >
                    <a href="" class="card-image" ng-if="item.A1 == 0" ng-click="choose(item.A1,'A1')">
                
                    </a>
                    <div class="card-image" ng-if="item.A1 == 1 ">
                
                    </div>

                </div><!-- col -->
                <div class="col s12 m4" >
                    <a href="" class="card-image" ng-if="item.A1 == 0" ng-click="choose(item.A1,'A1')">
                        <img src="images/GIALLI/giallo1.png">
                    </a>
                    <div class="card-image" ng-if="item.A1 == 1 ">
                        <img src="images/GIALLI/gialloX.png">
                    </div>

                </div><!-- col -->


                 <div class="col s12 m12" >
                    <a href="" class="card-image" ng-if="item.A1 == 0" ng-click="choose(item.A1,'A1')">
                    </a>
                    <div class="card-image" ng-if="item.A1 == 1 ">
                     
                    </div>

                </div><!-- col -->
            
            
               

                <div class="col s12 m3" >
                    <a href="" class="card-image" ng-if="item.A2 == 0" ng-click="choose(item.A2,'A2')">
                         <img src="images/GIALLI/giallo2.png">
                    </a>
                    <div class="card-image" ng-if="item.A2 == 1 ">
                        <img src="images/GIALLI/gialloX.png">
                    </div>
                </div><!-- col -->


                 <div class="col s12 m3" >
                    <a href="" class="card-image" ng-if="item.A3 == 0" ng-click="choose(item.A3,'A3')">
                         <img src="images/GIALLI/giallo3.png">
                    </a>
                    <div class="card-image" ng-if="item.A3 == 1 ">
                        <img src="images/GIALLI/gialloX.png">
                        
                    </div>
                </div><!-- col -->

             

                 <div class="col s12 m3">
                    <a href="" class="card-image" ng-if="item.A4 == 0" ng-click="choose(item.A4,'A4')">
                         <img src="images/GIALLI/giallo4.png">
                    </a>
                    <div class="card-image" ng-if="item.A4 == 1 ">
                        <img src="images/GIALLI/gialloX.png">
                    </div>
                </div><!-- col -->

                 <div class="col s12 m3">
                     <a href="" class="card-image" ng-if="item.A5 == 0" ng-click="choose(item.A5,'A5')">
                         <img src="images/GIALLI/giallo5.png">
                    </a>
                    <div class="card-image" ng-if="item.A5 == 1 ">
                        <img src="images/GIALLI/gialloX.png">
                    </div>
                </div><!-- col -->

                 <div class="col s12 m3">
                    <a href="" class="card-image" ng-if="item.A6 == 0" ng-click="choose(item.A6,'A6')">
                         <img src="images/GIALLI/giallo6.png">
                    </a>
                    <div class="card-image" ng-if="item.A6 == 1 ">
                         <img src="images/GIALLI/gialloX.png">
                    </div>
                </div><!-- col -->

                 <div class="col s12 m3">
                  <a href="" class="card-image" ng-if="item.A7 == 0" ng-click="choose(item.A7,'A7')">
                         <img src="images/GIALLI/giallo7.png">
                    </a>
                    <div class="card-image" ng-if="item.A7 == 1 ">
                         <img src="images/GIALLI/gialloX.png">
                    </div>
                </div><!-- col -->

                 <div class="col s12 m3" >
                   <a href="" class="card-image" ng-if="item.A8 == 0" ng-click="choose(item.A8,'A8')">
                        <img src="images/GIALLI/giallo8.png">
                    </a>
                    <div class="card-image" ng-if="item.A8 == 1 ">
                         <img src="images/GIALLI/gialloX.png">
                    </div>
                </div><!-- col -->

                   <div class="col s12 m3">
                     <a href="" class="card-image" ng-if="item.A9 == 0" ng-click="choose(item.A9,'A9')">
                         <img src="images/GIALLI/giallo9.png">
                    </a>
                    <div class="card-image" ng-if="item.A9 == 1 ">
                         <img src="images/GIALLI/gialloX.png">
                    </div>
                </div><!-- col -->


                <div class="col s12 m3">
                     <a href="" class="card-image" ng-if="item.A10 == 0" ng-click="choose(item.A10,'A10')">
                        <img src="images/GIALLI/giallo10.png">
                    </a>
                    <div class="card-image" ng-if="item.A10 == 1 ">
                        <img src="images/GIALLI/gialloX.png">
                    </div>
                </div><!-- col -->

                <div class="col s12 m3">
                     <a href="" class="card-image" ng-if="item.A11 == 0" ng-click="choose(item.A11,'A11')">
                          <img src="images/GIALLI/giallo11.png">
                    </a>
                    <div class="card-image" ng-if="item.A11 == 1 ">
                         <img src="images/GIALLI/gialloX.png">
                    </div>
                </div><!-- col -->

                 <div class="col s12 m3">
                    <a href="" class="card-image" ng-if="item.A12 == 0" ng-click="choose(item.A12,'A12')">
                         <img src="images/GIALLI/giallo12.png">
                    </a>
                    <div class="card-image" ng-if="item.A12 == 1 ">
                        <img src="images/GIALLI/gialloX.png">
                    </div>
                </div><!-- col -->


                    <div class="col s12 m3">
                        <a href="" class="card-image" ng-if="item.A13 == 0" ng-click="choose(item.A13,'A13')">
                            <img src="images/GIALLI/giallo13.png">
                        </a>
                        <div class="card-image" ng-if="item.A13 == 1 ">
                             <img src="images/GIALLI/gialloX.png">
                        </div>
                </div><!-- col -->


                 <div class="col s12 m3">
                        <a href="" class="card-image" ng-if="item.A14 == 0" ng-click="choose(item.A14,'A14')">
                              <img src="images/GIALLI/giallo14.png">
                        </a>
                        <div class="card-image" ng-if="item.A14 == 1 ">
                           <img src="images/GIALLI/gialloX.png">
                        </div>
                </div><!-- col -->

                 <div class="col s12 m3">
                        <a href="" class="card-image" ng-if="item.A15 == 0" ng-click="choose(item.A15,'A15')">
                             <img src="images/GIALLI/giallo15.png">
                        </a>
                        <div class="card-image" ng-if="item.A15 == 1 ">
                           <img src="images/GIALLI/gialloX.png">
                        </div>
                </div><!-- col -->

                 <div class="col s12 m3">
                      <a href="" class="card-image" ng-if="item.A16 == 0" ng-click="choose(item.A16,'A16')">
                             <img src="images/GIALLI/giallo16.png">
                        </a>
                        <div class="card-image" ng-if="item.A16 == 1 ">
                            <img src="images/GIALLI/gialloX.png">
                        </div>
                </div><!-- col -->

                 <div class="col s12 m3">
                      <a href="" class="card-image" ng-if="item.A17 == 0" ng-click="choose(item.A17,'A17')">
                             <img src="images/GIALLI/giallo17.png">
                        </a>
                        <div class="card-image" ng-if="item.A17 == 1 ">
                            <img src="images/GIALLI/gialloX.png">
                        </div>
                </div><!-- col -->

                 <div class="col s12 m3">
                       <a href="" class="card-image" ng-if="item.A18 == 0" ng-click="choose(item.A18,'A18')">
                            <img src="images/GIALLI/giallo18.png">
                        </a>
                        <div class="card-image" ng-if="item.A18 == 1 ">
                             <img src="images/GIALLI/gialloX.png">
                        </div>
                </div><!-- col -->


                 <div class="col s12 m3">
                     <a href="" class="card-image" ng-if="item.A19 == 0" ng-click="choose(item.A19,'A19')">
                            <img src="images/GIALLI/giallo19.png">
                        </a>
                        <div class="card-image" ng-if="item.A19 == 1 ">
                             <img src="images/GIALLI/gialloX.png">
                        </div>
                </div><!-- col -->

                 <div class="col s12 m3">
                   <a href="" class="card-image" ng-if="item.A20 == 0" ng-click="choose(item.A20,'A20')">
                            <img src="images/GIALLI/giallo20.png">
                        </a>
                        <div class="card-image" ng-if="item.A20 == 1 ">
                            <img src="images/GIALLI/gialloX.png">
                        </div>
                </div><!-- col -->

                 <div class="col s12 m3">
                     <a href="" class="card-image" ng-if="item.A21 == 0" ng-click="choose(item.A21,'A21')">
                             <img src="images/GIALLI/giallo21.png">
                        </a>
                        <div class="card-image" ng-if="item.A21 == 1 ">
                             <img src="images/GIALLI/gialloX.png">
                        </div>
                </div><!-- col -->

                 <div class="col s12 m3">
                  <a href="" class="card-image" ng-if="item.A22 == 0" ng-click="choose(item.A22,'A22')">
                             <img src="images/GIALLI/giallo22.png">
                        </a>
                        <div class="card-image" ng-if="item.A22 == 1 ">
                             <img src="images/GIALLI/gialloX.png">
                        </div>
                </div><!-- col -->

                 <div class="col s12 m3">
                     <a href="" class="card-image" ng-if="item.A23 == 0" ng-click="choose(item.A23,'A23')">
                             <img src="images/GIALLI/giallo23.png">
                        </a>
                        <div class="card-image" ng-if="item.A23 == 1 ">
                            <img src="images/GIALLI/gialloX.png">
                        </div>
                </div><!-- col -->

                 <div class="col s12 m3">
                     <a href="" class="card-image" ng-if="item.A24 == 0" ng-click="choose(item.A24,'A24')">
                            <img src="images/GIALLI/giallo24.png">
                        </a>
                        <div class="card-image" ng-if="item.A24 == 1 ">
                             <img src="images/GIALLI/gialloX.png">
                        </div>
                </div><!-- col -->

                 <div class="col s12 m3">
                     <a href="" class="card-image" ng-if="item.A25 == 0" ng-click="choose(item.A25,'A25')">
                            <img src="images/GIALLI/giallo25.png">
                        </a>
                        <div class="card-image" ng-if="item.A25 == 1 ">
                            <img src="images/GIALLI/gialloX.png">
                        </div>
                </div><!-- col -->



            </div>
        </div>
         <h3><timer countdown="10" interval="1000">{{countdown}}</timer></h3>
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

