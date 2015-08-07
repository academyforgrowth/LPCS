<form name="htmlform" method="post" action="html_form_send.php">

	<input type="text" value="Your First Name" name="first_name" onBlur="if(this.value == '') { this.value='Your First Name'}" onFocus="if (this.value == 'Your First Name') {this.value=''}" class="form-control">
	<input type="text" value="Your Last Name" name="last_name" onBlur="if(this.value == '') { this.value='Your Last Name'}" onFocus="if (this.value == 'Your Last Name') {this.value=''}" class="form-control">
	<input type="text" value="Company Name" name="comments" onBlur="if(this.value == '') { this.value='Company Name'}" onFocus="if (this.value == 'Company Name') {this.value=''}" class="form-control">
	<input type="text" name="telephone" onBlur="if(this.value == '') { this.value='Phone'}" onFocus="if (this.value == 'Phone') {this.value=''}" class="form-control" value="Phone">
	<input type="email" value="Email" name="email" onBlur="if(this.value == '') { this.value='Email'}" onFocus="if (this.value == 'Email') {this.value=''}" class="form-control">
	<br>
	
	<input type="submit" value="FREE Meeting" class="button">
</form>