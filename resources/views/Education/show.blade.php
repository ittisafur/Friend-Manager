@extends('layouts.app')

@section('content')

	<div class="container">
	    <div class="row justify-content-center">
	        <div class="col-md-8">
	            <div class="card">
	                <div class="card-header">Dashboard</div>

	                <div class="card-body">
	                   
	                   <table class="table">
	                     <thead>
	                       <tr>
	                         <th scope="col">#</th>
	                         <th scope="col">School</th>
	                         <th scope="col">Edit</th>
	                         <th scope="col">Delete</th>
	                       </tr>
	                     </thead>
	                     
	                     @foreach($educations as $index=>$education)
	                     <tbody>
	                       <tr>
	                         <th scope="row">{{++$index}}</th>
	                         <td>{{$education->school}}</td>
	                         <td><a href="{{route('education.edit', $education->id)}}"><i class="far fa-edit"></i></a></td>
	                         <td>
	                           
	                           <form id="delete-form-{{$education->id}}" action="{{route('education.destroy', $education->id)}}"  method="POST">
	                             {{csrf_field()}}
	                             {{method_field('DELETE')}}
	                             <button type="submit">
	                               <i class="far fa-trash-alt"></i>
	                             </button>
	                           </form>
	                           
	                          </td>
	                       </tr>
	                     </tbody>
	                     @endforeach
	                   </table> 
	                   
	                </div>
	            </div>
	        </div>
	    </div>
	</div>

@stop