<!DOCTYPE html>
<html lang="en">
<head>
    <link href="{{asset('css/registration.css')}}" rel="stylesheet"/>
</head>
<body> 
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Welcome</h3>
                        <p>You are 30 seconds away from earning your own money!</p>
                        <input type="submit" name="" value="Login"/><br/>
                    </div>
                    <div class="col-md-9 register-right">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Employee</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Hirer</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Apply as a Employee</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                           <label>First Name: </label><span>{{$a['user_fname']}}</span>
                                        </div>
                                        <div class="form-group">
                                           <label>Last Name: </label><span>{{$a['user_sname']}}</span>
                                        </div>
                                        <div class="form-group">
                                            <div class="maxl">
                                         <label>Gender : </label><span>{{$a['gender']}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Email : </label><span>{{$a['user_email']}}</span>
                                        </div>
                                        <div class="form-group">
                                            <label>Phone: </label><span>{{$a['user_phone']}}</span>
                                        </div>
                                        <div class="form-group">
                                            <label>Sequrity Question : </label><span>{{$a['message']}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            