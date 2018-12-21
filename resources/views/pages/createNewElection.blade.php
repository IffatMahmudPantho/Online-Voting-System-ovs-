@extends('layouts.layout')

@section('content')





<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Standard Meta -->
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
</head>
<body>
<div class="container">
    <form class="form-horizontal" role="form" method="POST" action="/register">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h2>Create a new Election or create candidate  Here</h2>
                
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="name">Election Name : </label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-user"></i></div>
                        <input type="text" name="name" class="form-control" id="name"
                               placeholder="Insert a valid Election Name" required autofocus>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-control-feedback">
                        <span class="text-danger align-inside">
                            
                        </span>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="name">Candidate Name :  </label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-user"></i></div>
                        <input type="text" name="name" class="form-control" id="name"
                               placeholder="Insert a valid Candidate Name" required autofocus>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            
                        </span>
                </div>
            </div>
        </div>




        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="number">Candidate ID : </label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-user"></i></div>
                        <input type="number" id="id" class="form-control" id="number"
                               placeholder="Valid Candidate ID" required autofocus>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-control-feedback">
                        <span class="text-safe align-middle">
                            [Only use alphabates and numbers]
                        </span>
                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="age">Age : </label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-user"></i></div>
                        <input type="number" age = 'age' class="form-control" id="age"
                               placeholder="Candidate Age" required autofocus>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            [Age must be >or = 18 Years]
                        </span>
                </div>
            </div>
        </div>

        <div class="row">
                <div class="col-md-3 field-label-responsive">
                    <label for="name">Candidate logo name for the Election : </label>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-user"></i></div>
                            <input type="text" name="name" class="form-control" id="name"
                                   placeholder="Insert a logo name" required autofocus>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-control-feedback">
                            <span class="text-danger align-middle">
                                
                            </span>
                    </div>
                </div>
            </div>


            <div class="row">
                    <div class="col-md-3 field-label-responsive">
                        <label for="check"> </label>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                
                                <form>
                                        <input type="radio" name="gender" value="male" checked> Male<br>
                                        <input type="radio" name="gender" value="female"> Female<br>
                                        <input type="radio" name="gender" value="other"> Other
                                </form>
                                      
                            </div>
                        </div>
                    </div>
                   
                </div>



           
                <div class="row">
                        <div class="col-md-3 field-label-responsive">
                            <label for="time">Start Time : </label>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                        <input type="date" name="startTime" min="2018-02-01"><br>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-control-feedback">
                                    <span class="text-danger align-middle">
                                        
                                    </span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                            <div class="col-md-3 field-label-responsive">
                                <label for="time">End Time : </label>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                            <input type="date" name="EndTime" min="2020-02-01"><br>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-control-feedback">
                                        <span class="text-danger align-middle">
                                            
                                        </span>
                                </div>
                            </div>
                        </div>



        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                    <a href="/successElection" class="btn btn-success " type="submit ">Submit</a>
                
            </div>
        </div>
    </form>
</div>
</body>
@endsection


