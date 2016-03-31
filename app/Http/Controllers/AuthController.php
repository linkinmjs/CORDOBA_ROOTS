<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\Usuario;

class AuthController extends Controller
{

	private $rules = [
		'correo' => 'required|email',
		'contraseña' => 'required'
	];

	function getIngreso()
	{

		return view ('auth.login');	
	}

	function postIngreso(Request $request)
	{


		$this->validate($request, $this->rules);

		if (Auth::attempt([
			'correo'=>$request->get('correo'),
			'password'=>$request->get('contraseña')
			]))
		{
			return redirect ('/');
		}
		else
		{
			return back()->withInput()->withErrors([
				'Usuario o contraseña incorrectos'
			]);
		}
	}

	function getRegistro ()
	{
		return view ('auth.register');
	}

	function postRegistro (Request $request)
	{

		$this->validate($request, [

			'nombre'=>'required|max:100',
			'correo'=>'required|email|unique:usuarios',
			'password'=>'required|min:6|confirmed',
			'password_confirmation'=>'required|min:6'

			]);

		Usuario::create([
			'nombre'=>$request->get('nombre'),
			'correo'=>$request->get('correo'),
			'password' => bcrypt($request->get('password'))
			]);


		
		return redirect('ingreso')->with('correo', $request->get('correo'));

	}

	function getDesloguear ()
	{
		Auth::logout();
		return redirect('/');
	}

}

