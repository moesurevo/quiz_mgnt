@extends('layouts.master')
@section('content')
	<section class="content">
		<div class="row">
			<div class="col-md-6">
				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Edit Quiz Title</h3>
					</div>
					@include('pages.quiz_title.form')
				</div>
			</div>
		</div>
	</section>
@stop