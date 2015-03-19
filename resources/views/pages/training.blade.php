@extends('layouts.app')

@section('content')


<div class="col-sm-7 training-main">
	<h3>
		Training Overview
	</h3>
	<p>
		We believe that it is a worthy cause to facilitate educators in promoting the development and implementation of character curriculum in universities and schools. Character International Inc. is dedicated to equipping educators of today and tomorrow with knowledge and thorough understanding of our character-focused curriculum. This training format serves as the catalyst that will impact the child, the family and the community as a whole.	
	</p>
	<p>
		American teachers are trained to teach the Character for Kids seminars.  They then become part of a team which then travels to Russia or Eastern Europe to teach student teachers, proficient teachers, and professors in selected universities. In some cases we present seminars to faculties of local public schools
	</p>
	<p>
		Training for U.S. teachers is usually conducted once or twice each year. Most often, we meet at a convenient location in Dallas, Texas. We are happy to consider conducting the training in other cities or locations if it is more feasible to do so. The training itself is free and is conducted during a two-day week-end period in a relaxed and casual atmosphere.  Everyone who has gone through the training has expressed that they enjoyed the experience. It is a great time of learning and building new friendships.
	</p>

	<h3>
	  	Becoming a Certified Character for Kids® Trainer 
	</h3>
	<p>
		<h5>Prerequisites:</h5>
			
			<ul><i class="fa fa-star"></i> Be a person of high moral and ethical values.</ul>
			<ul><i class="fa fa-star"></i> Complete a two day training course.</ul>
			<ul><i class="fa fa-star"></i> Agree to travel to Russia or Eastern Europe to conduct seminars <a href="{{ url('certification') }}">learn more</a></ul>
	</p>

	<p>
		If you are interested and wish to receive additional information, please <a href="{{ url('contact') }}">contact out office</a>.
	</p>
</div>
<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
	  <br/>
	  <br/>
	  <br/>
      <div class="sidebar-module sidebar-module-inset">
      	<img style="width:100%" src="{{ asset('/images/seminar.jpg') }}">
      </div> 
</div>
@stop