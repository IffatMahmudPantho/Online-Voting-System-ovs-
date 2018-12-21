@extends('layouts.layout')

@section('content')

<div class="jumbotron text-left">
    <h2 align ="right">{{$title}}</h2>
    <form action="/createNewElection" >
        <P align = "left">
        <font size = "6" color = "brown">Create An New Election : </font> 
            <button type="submit" class="btn btn-success"><i class="fa fa-user-plus"></i>Create New Election</button>
        </P>
        
        <p>

         <font size = "4" color = "brown">Result Of The Previous Election : </font> 
        <select>
               
         <option value="Election_name_1">Election 1</option>
         <option value="Election_name_2">Election 2</option>
         <option value="Election_name_3">Election 3</option>
         <option value="Election_name_4">Election 4</option>
        </select>
    </form>
        <form method ="get" action ="/result">
            <button type = "submit" class ="btn btn-secondary">Submit</button>
        </form>
        
        </p>
        
        <p align="right">
        <a href="/" class="btn btn-primary">Logout</a>
        </p>

        







@endsection
