@extends('layouts.base')

@section('content')
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span2 offset7">

						{{--I removed the if and else here. The problem is now taken care of by a filter. If a guest tries to use this button, the filter wont let him --}}
						<a class="btn pull-right" href="subcategories/create"> <i class="icon-plus icon-white"></i> New </a>

			</div>
		</div>
		<div class="row-fluid">
			<div class="span9">
				<div class="tableHeaderRow">
					<h4> {{$category->catTitle}}</h4>
				</div>
				<div class="allTableRows">
				
					@foreach($subcategoriesArray as $subcategory)
						<div class="tableRow">
							<div class="tableContentRow">
								<div class="tableContent">
									<a class="" href="/categories/{{$category->id}}/subcategories/{{$subcategory->id}}/posts" > <h5>{{$subcategory->subcatTitle}} </h5> </a>
									<p class="content">{{$subcategory->subcatDescription}}</p>
								</div>
							</div>
							<div class="tableInfoRow">
								<div class="tableContent">
									<p class="infoContent"> Posts:{{$subcategory->subcatTotalPosts}}</p>
								</div>
							</div>
						</div>
					@endforeach
				</div>
				<div class="row-fluid">
					<div class="span2 offset10">

						<a class="btn pull-right" href="subcategories/create"> <i class="icon-plus icon-white"></i> New </a>

					</div>
				</div>
			</div>
			<div class="span3">
				<?php 
					//include 'Queries/forumUserQuery.php';
				?>
				<div class="span12">
				<?php 
					//include 'Queries/forumRecentPostQuery.php';
				?>
				</div>
			</div>
		</div>
	</div>
@stop