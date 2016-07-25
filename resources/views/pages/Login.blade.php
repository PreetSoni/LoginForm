@extends('layouts.master')

@include('includes.header')

<body>
<br/>
<center>
<div class="ui card">
            <div class="content">
           <h2> <div class="title">Login</div></h2><br/> 
<form class="ui form" action="#" method="post">
  <div class="field">
    <label>Email</label>
    <input type="text" name="e-mail" placeholder="Email">
  </div>
   <div class="field">
    <label>Password</label>
    <input type="password" name="pass" placeholder="Password">
  </div>
  <button class="ui button" type="submit">Login&nbsp;<i class="caret right icon"></i></button>
</form>
</div>
</div>
</center>
</body>
