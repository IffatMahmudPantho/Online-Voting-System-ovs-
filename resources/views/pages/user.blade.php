@extends('layouts.layoutForUser')

@section('content')

<div class="jumbotron text-left">
    <h2 align ="right">User Pannel</h2>
    <form action="/user.ovs" >
        
        
        <p>

         <font size = "4" color = "brown">Vote For :  </font> 
        <select>
               
         <option value="Election_name_1">Election_name_1</option>
         <option value="Election_name_2">Election_name_2</option>
         <option value="Election_name_3">Election_name_3</option>
         <option value="Election_name_4">Election_name_4</option>
        </select>
        </p>
        <p>
        <font size = "4" color = "brown">Select Candidate : </font> 
        <select>
            
            <option value="Candidate_name_1">Candidate_name_1</option>
            <option value="Candidate_name_2">Candidate_name_2</option>
            <option value="Candidate_name_3">Candidate_name_3</option>
            <option value="Candidate_name_4">Candidate_name_4</option>
           </select>
        </p>
        <p>
        
        <a href="/successVote" class="btn btn-success" type="submit ">Submit</a>
        
        
        </p>
        
        <p align="right">
        <a href="/" class="btn btn-primary">Logout</a>
        </p>
</form>




@endsection
