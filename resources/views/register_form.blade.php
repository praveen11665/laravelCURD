<?php
	$id 	= '';
	$name 	= '';
	$mobile = '';
	$email 	= '';

	if(!empty($tableData))
	{
		$id 	= $tableData['id'];		
		$name 	= $tableData['name'];		
		$mobile = $tableData['mobile'];		
		$email 	= $tableData['email'];			
	}else
	{
		//$name = Request::input('name');
		//$id 	= $data['id'];
		//$name 	= $data['name'];
	}

	//print_r($name);
?>
<h3>User Form</h3> <hr />
@if ($errors->any())
    <div class="alert alert-danger">    	
        <ul>
            @foreach ($errors->all() as $error)            
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="/formView" method="post">
	{{csrf_field()}}
	<input type="hidden" name="id" value="<?php echo $id;?>">
	<div class="container">
		<div class="row">
			<div class="col-md-2">
				<label>Name</label><span class="mandatory">*</span>
			</div>
			<div class="col-md-8">
				<input type="text" name="name" class="form-control" placeholder="Enter your name" id="name" value="<?php echo $name;?>">	
			</div>			
		</div><br>
		<div class="row">
			<div class="col-md-2">
				<label>Mobile No</label><span class="mandatory">*</span>			
			</div>
			<div class="col-md-8">
				<input type="text" name="mobile" id="mobile" class="form-control" placeholder="Enter your mobile number" maxlength="10" value="<?php echo $mobile;?>">			
			</div>			
		</div><br>
		<div class="row">
			<div class="col-md-2">
				<label>Email</label><span class="mandatory">*</span>
			</div>
			<div class="col-md-8">
				<input type="text" name="email" class="form-control" id="email" placeholder="Enter your email" value="<?php echo $email;?>">
			</div>			
		</div>
		<hr>
		<button type="submit" class="btn btn-primary"> {{$buttonName}} </button>
		<a href="/formView" class="btn btn-danger"> Cancel </a>
	</div>
</form>