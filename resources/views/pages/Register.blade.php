@extends('layouts.master')

@include('includes.header')


<body>
<br/>
<center>
<div class="ui card">
            <div class="content">
           <h2> <div class="title">Registration</div></h2><br/> 
<form class="ui form" action="#" method="post">
<div class="two fields">
  <div class="field">
    <label>First Name</label>
    <input type="text" name="first-name" placeholder="First Name">
  </div>
  <div class="field">
    <label>Last Name</label>
    <input type="text" name="last-name" placeholder="Last Name">
  </div>
  </div>
  <div class="field">
    <label>Email</label>
    <input type="text" name="e-mail" placeholder="Email">
  </div>
   <div class="field">
    <label>Password</label>
    <input type="password" name="pass" placeholder="Password">
  </div>
  <div class="field">
    <div class="ui checkbox">
      <input type="checkbox" name="example" class="tandc">
      <label>I agree to the Terms and Conditions</label>
    </div>
  </div>
  <button class="ui button" type="submit">Register&nbsp;<i class="caret right icon"></i></button>
</form>
</div>
</div>
</center>
</body>