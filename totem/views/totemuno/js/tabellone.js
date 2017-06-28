var app = angular.module('app',[]);

app.factory('tabelloneServices', function($http)
{
    var baseUrl = 'services/';

    return{

        getTabellone(item)
        {
            return $http.post(baseUrl+'getTabellone.php',{'id':item});
        },
        setTabellone(valore,lettera)
        {
            return $http.post(baseUrl+'setTabellone.php',{'valore':valore,"lettera":lettera});
        },
        getTotale25()
        {
            return $http.get(baseUrl+'getTotale25.php');
        },
        getTotale100()
        {
            return $http.get(baseUrl+'getTotale100.php');
        },
        resetTabellone()
        {
            return $http.get(baseUrl+'resetTabellone.php');
        }
    }

});


app.controller('MainCtrl',function($scope,tabelloneServices){

   

    init100();

    function init25()
    {
        tabelloneServices.getTotale25().then(function(info){
            $scope.totaleA = info.data[0].totaleA;
            $scope.totaleB = info.data[1].totaleB;
            $scope.totaleC = info.data[2].totaleC;
            $scope.totaleD = info.data[3].totaleD;
            
            
        });
    }

    function init100()
    {
        tabelloneServices.getTotale100().then(function(info){
            $scope.totale100 = info.data[0].totale100;
            init25();
            if($scope.totale100 == 100)
            {
                tabelloneServices.resetTabellone().then(function(info){
                    if(info==true)
                        location.reload();
                })
            }
            
        });
    }


});




app.controller('TabelloneACtrl',function($scope,tabelloneServices,$timeout, $interval, $http){

    $scope.value = false;
    init();

    function init()
    {
        tabelloneServices.getTabellone("1").then(function(info){
            $scope.items = info.data;
            
            $timeout(callAtTimeout, 15000);
            
        });
    }

   $scope.choose = function(item, info)
    {
        if(info !== 'undefined')
        {
            tabelloneServices.setTabellone(item,info).then(function(data){
              //      console.log(data.data[0]);
              location.href="../../index.php";
            });
        }
       
        
    }

    function callAtTimeout() {
        $http.get('services/randomNumber.php?id=1').then(function(data) 
        {
            if(data.data.a == null || data.data.a == 'undefined')
            {
                 $timeout(callAtTimeout, 1000);
            }else{

                 swal({
                        title: "Numero Selezionato per te",
                        text: '<strong style="color:#000; font-size:22px;">'+ data.data.a +'<strong>',
                        html: true,
                        type: "info",
                        closeOnConfirm: false,
                        showLoaderOnConfirm: true,
                        timer: 2500
                        },
                        function()
                        {
                            setTimeout(function(){
                            location.href="../../index.php";
                        }, 1000);
                        });
            
            }
             
           
        });
    }



    
});


app.controller('TabelloneBCtrl',function($scope,tabelloneServices,$timeout, $interval, $http){

    $scope.value = false;
    init();

    function init()
    {
        tabelloneServices.getTabellone("2").then(function(info){
            $scope.items = info.data;

             $timeout(callAtTimeout, 15000);
            
            
        });
    }

    $scope.choose = function(item, info)
    {
        if(info !== 'undefined')
        {
           tabelloneServices.setTabellone(item,info).then(function(data){
              //      console.log(data.data[0]);
              location.href="../../index.php";
            });
        }
       
        
    }

     function callAtTimeout() {
        $http.get('services/randomNumber.php?id=2').then(function(data) 
        {
            if(data.data.a == null || data.data.a == 'undefined')
            {
                 $timeout(callAtTimeout, 1000);
            }else{

                 swal({
                        title: "Numero Selezionato per te",
                        text: '<strong style="color:#000; font-size:22px;">'+ data.data.a +'<strong>',
                        html: true,
                        type: "info",
                        closeOnConfirm: false,
                        showLoaderOnConfirm: true,
                        timer: 2500
                        },
                        function()
                        {
                            setTimeout(function(){
                            location.href="../../index.php";
                        }, 1000);
                        });
            
            }
             
           
        });
    }



});


app.controller('TabelloneCCtrl',function($scope,tabelloneServices,$timeout, $interval, $http){

    $scope.value = false;
    init();

    function init()
    {
        tabelloneServices.getTabellone("3").then(function(info){
            $scope.items = info.data;
              $timeout(callAtTimeout, 15000);
            
        });
    }

    $scope.choose = function(item, info)
    {
        if(info !== 'undefined')
        {
           tabelloneServices.setTabellone(item,info).then(function(data){
              //      console.log(data.data[0]);
              location.href="../../index.php";
            });
        }
       
        
    }



     function callAtTimeout() {
        $http.get('services/randomNumber.php?id=3').then(function(data) 
        {
            if(data.data.a == null || data.data.a == 'undefined')
            {
                 $timeout(callAtTimeout, 1000);
            }else{

                 swal({
                        title: "Numero Selezionato per te",
                        text: '<strong style="color:#000; font-size:22px;">'+ data.data.a +'<strong>',
                        html: true,
                        type: "info",
                        closeOnConfirm: false,
                        showLoaderOnConfirm: true,
                        timer: 2500
                        },
                        function()
                        {
                            setTimeout(function(){
                            location.href="../../index.php";
                        }, 1000);
                        });
            
            }
             
           
        });
    }

});


app.controller('TabelloneDCtrl',function($scope,tabelloneServices,$timeout, $interval, $http){

    $scope.value = false;
    init();

    function init()
    {
        tabelloneServices.getTabellone("4").then(function(info){
            $scope.items = info.data;
              $timeout(callAtTimeout, 15000);
            
            
        });
    }

    $scope.choose = function(item, info)
    {
        if(info !== 'undefined')
        {
           tabelloneServices.setTabellone(item,info).then(function(data){
              //      console.log(data.data[0]);
              location.href="../../index.php";
            });
        }
       
        
    }

     function callAtTimeout() {
        $http.get('services/randomNumber.php?id=3').then(function(data) 
        {
            if(data.data.a == null || data.data.a == 'undefined')
            {
                 $timeout(callAtTimeout, 1000);
            }else{

                 swal({
                        title: "Numero Selezionato per te",
                        text: '<strong style="color:#000; font-size:22px;">'+ data.data.a +'<strong>',
                        html: true,
                        type: "info",
                        closeOnConfirm: false,
                        showLoaderOnConfirm: true,
                        timer: 2500
                        },
                        function()
                        {
                            setTimeout(function(){
                            location.href="../../index.php";
                        }, 1000);
                        });
            
            }
             
           
        });
    }



















});