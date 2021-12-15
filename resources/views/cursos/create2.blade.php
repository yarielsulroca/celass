@extends('cursos.template')
@section('content')
<!--
	.validate 				- very important, to activate validation plugin

	data-success="Sent! Thank you!" 	- used by toastr to print the message
	data-toastr-position="top-right"	- toastr message position:
		.top-right
		.top-left
		.bottom-right
		.bottom-left


	NOTE: Add .required class for required fields.
	This form example already used on Careers page: page-careers.html
 -->

<h6>Usuario: {{ Auth::user()->name; }}</h6>
<form class="validate" action="{{ route('cursos.store') }}" method="post" enctype="multipart/form-data" data-success="Sent! Thank you!" data-toastr-position="top-right">
	@csrf
    <fieldset>
        <label>CREAR NUEVO CURSO</label>
		<!-- required [php action request] -->
		<input type="hidden" name="action" value="contact_send" />

		<div class="row">

			<div class="form-group">
				<div class="col-md-6 col-sm-6">
					<label>First Name *</label>
					<input type="text" name="contact[first_name]" value="" class="form-control required">
				</div>
				<div class="col-md-6 col-sm-6">
					<label>Last Name *</label>
					<input type="text" name="contact[last_name]" value="" class="form-control required">
				</div>
			</div>
		</div>

		<div class="row">
			<div class="form-group">
				<div class="col-md-6 col-sm-6">
					<label>Email *</label>
					<input type="email" name="contact[email]" value="" class="form-control required">
				</div>
				<div class="col-md-6 col-sm-6">
					<label>Phone *</label>
					<input type="text" name="contact[phone]" value="" class="form-control required">
				</div>
			</div>
		</div>

		<div class="row">
			<div class="form-group">
				<div class="col-md-12 col-sm-12">
					<label>Position *</label>
					<select name="contact[position]" class="form-control pointer required">
						<option value="">--- Select ---</option>
						<option value="Marketing">PR & Marketing</option>
						<option value="Developer">Web Developer</option>
						<option value="php">PHP Programmer</option>
						<option value="Javascript">Javascript Programmer</option>
					</select>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="form-group">
				<div class="col-md-6 col-sm-6">
					<label>Expected Salary *</label>
					<input type="text" name="contact[expected_salary]" value="" class="form-control required">
				</div>
				<div class="col-md-6 col-sm-6">
					<label>Start Date *</label>
					<input type="text" name="contact[start_date]" value="" class="form-control datepicker required" data-format="yyyy-mm-dd" data-lang="en" data-RTL="false">
				</div>
			</div>
		</div>

		<div class="row">
			<div class="form-group">
				<div class="col-md-12 col-sm-12">
					<label>Experience *</label>
					<textarea name="contact[experience]" rows="4" class="form-control required"></textarea>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="form-group">
				<div class="col-md-12 col-sm-12">
					<label>
						Website
						<small class="text-muted">- optional</small>
					</label>
					<input type="text" name="contact[website]" placeholder="http://" class="form-control">
				</div>
			</div>
		</div>

		<div class="row">
			<div class="form-group">
				<div class="col-md-12">
					<label>
						File Attachment
						<small class="text-muted">Curriculum Vitae - optional</small>
					</label>

					<!-- custom file upload -->
					<input class="custom-file-upload" name="contact[attachment]" type="file" id="file" data-btn-text="Select a File" />
					<small class="text-muted block">Max file size: 10Mb (zip/pdf/jpg/png)</small>

				</div>
			</div>
		</div>

	</fieldset>

	<div class="row">
		<div class="col-md-12">
			<button type="submit" class="btn btn-3d btn-teal btn-xlg btn-block margin-top-30">
				SEND APPLICATION
				<span class="block font-lato">We'll get back to you within 48 hours</span>
			</button>
		</div>
	</div>

</form>
@endsection