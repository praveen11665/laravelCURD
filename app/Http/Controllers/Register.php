<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Registers;
use Session;

class Register extends Controller
{	
	public function __construct()
	{
		$this->middleware('auth');
	}

    public function index()
    {
    	$viewData['tableData']  		= Registers::all();
    	$data = array(
                        'title'    		=>  'User List',
                        'content'    	=>  view('register_table_form', $viewData)
                      );
    	return view('base/base_file', $data);
    }

    public function formView($id='')
    {
    	if($id)
    	{
    		$data['buttonName'] = 'Update';
	    	$data['tableData']  = Registers::find($id);
    	}else
    	{
    		$data['buttonName'] = 'Submit';
    	}

    	$viewData = array(
                        'title'    		=>  'Create User',
                        'content'    	=>  view('register_form', $data)
                      );
    	return view('base/base_file', $viewData);
    }

    public function formSubmit(Request $request)
    {
        $validatedData = $request->validate([
                                                'name'   => 'required',
                                                'mobile' => 'required',
                                                'email'  => 'required'
                                            ]);
    	if($request->id == '')  //Insert
    	{
	    	$data 			= new Registers;
	    	$data->name 	= $request->name;
	    	$data->mobile 	= $request->mobile;
	    	$data->email 	= $request->email;
    	}else  //Update
    	{
    		$data  			= Registers::find($request->id);
    		$data->name 	= $request->name;
	    	$data->mobile 	= $request->mobile;
	    	$data->email 	= $request->email;
    	}

    	if($data->save())
    	{
    		Session::flash('message', 'Successfully Saved!');
    		Session::flash('alertType', 'success');
    		return redirect('/tableView');
    	}else
    	{
    		Session::flash('message', 'Something Went Wrong');
    		Session::flash('alertType', 'danger');
    		return redirect('/tableView');
    	}
    }

    //Deleted From the table
    /*public function delete($id='')
    {
    	$data  	= Registers::find($id);

    	if($data->delete())
    	{
    		Session::flash('message', 'Deleted Successfully!');
    		Session::flash('alertType', 'success');
    		return redirect('/tableView');
    	}else
    	{
    		Session::flash('message', 'Something Went Wrong');
    		Session::flash('alertType', 'danger');
    		return redirect('/tableView');
    	}
    }*/

    //Soft Delete from table
    public function delete($id='')
    {
    	$data  	= Registers::find($id);

    	if($data->delete())
    	{
    		Session::flash('message', 'Deleted Successfully!');
    		Session::flash('alertType', 'success');
    		return redirect('/tableView');
    	}else
    	{
    		Session::flash('message', 'Something Went Wrong');
    		Session::flash('alertType', 'danger');
    		return redirect('/tableView');
    	}
    }
}
