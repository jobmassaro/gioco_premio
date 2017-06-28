<!DOCTYPE html>
<html ng-app="app">
    <head>
        <title>MAXIMALL _COLOR</title>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <style>
                .alert-purple { border-color: #694D9F;background: #694D9F;color: #fff; height:200px; }
                .alert-info-alt { border-color: #B4E1E4;background: #81c7e1;color: #fff; height:300px; }
                .alert-danger-alt { border-color: #B63E5A;background: #E26868;color: #fff;height:300px; }
                .alert-warning-alt { border-color: #F3F3EB;background: #E9CEAC;color: #fff; height:300px; }
                .alert-success-alt { border-color: #19B99A;background: #20A286;color: #fff; height:300px; }
                .glyphicon { margin-right:10px; }
                .alert a {color: gold;}
        </style>
    
    </head>
    <body ng-controller="TabelloneCtrl">
        

                <div class="container">
                    <div class="row">
                        <h2>Scegli i colori dell'ESTATE</h2>
                        <div class="col-md-12" >

                            <a href="http://www.jquery2dotnet.com">
                            <div class="alert alert-purple alert-dismissable">
                                <span class="glyphicon glyphicon-certificate"></span>
                                <button type="button" class="btn btn-success">Success</button>
                            </div>
                            </a>
                            
                            <a href="http://www.jquery2dotnet.com">
                                <div class="alert alert-info-alt alert-dismissable">
                                <button type="button" class="btn btn-success">Success</button>
                                </div>
                            </a>

                            <div class="alert alert-danger-alt alert-dismissable">
                                <span class="glyphicon glyphicon-certificate"></span>
                                <button type="button" class="btn btn-success">Success</button>
                           </div>

                            <div class="alert alert-success-alt alert-dismissable">
                                <span class="glyphicon glyphicon-certificate"></span>
                               <button type="button" class="btn btn-success">Success</button>
                            </div>
                        </div>
                    </div>
                </div>

    </body>
     <script type="text/javascript" src="js/weapp.js"></script>

</html>