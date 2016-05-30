<?php namespace Modules\Admin\Http\Controllers;

use Pingpong\Modules\Routing\Controller;
use Illuminate\Http\Request;
use Auth;
use Modules\Admin\Entities\Admin;
use Modules\Admin\Entities\Role;

class AdminController extends Controller {

	private $user;
	private $role;

	public function __construct(Admin $user, Role $role)
	{
			$this->user = $user;
			$this->role = $role;
	}

	public function index(Request $request)
	{
			$isFilter = false;

			if (count($request->query) > 0) {

						$isFilter = true;
						$name = $request->get('name');
						$email = $request->get('email');
						$created_at = $request->get('created_at');
						$created_end = $request->get('created_end');

						if(!empty($created_at)) {
							$created_at = DateTime::createFromFormat('d/m/Y', $created_at);
							$created_at = $created_at->format('Y-m-d 00:00:00');
						}
						if(!empty($created_end)) {
							$created_end = DateTime::createFromFormat('d/m/Y', $created_end);
							$created_end = $created_end->format('Y-m-d 23:59:59');
						}

						$users = Admin::
										 whereRaw(!empty($name) ? "name like '%$name%'" : '1 = 1')
										->whereRaw(!empty($email) ? "email like '%$email%'" : '1 = 1')
										->whereRaw(!empty($created_at) ? "created_at >= '$created_at'" : '1 = 1')
										->whereRaw(!empty($created_end) ? "created_at <= '$created_end'" : '1 = 1' )
										->sortable()->paginate(15);
			} else {
						$users = Admin::sortable()->paginate(15);
			}

			return view('admin::admin.index', ['users' => $users, 'isFilter' => $isFilter]);
	}

	public function add()
	{
			$users = Admin::orderBy('name', 'asc')->lists('name', 'id');
			$roles = Role::orderBy('name', 'asc')->lists('name', 'id');
			return view('admin::admin.add', ['users' => $users, 'roles' => $roles]);
	}

	public function show($id)
	{
			$user = Admin::find($id);
			if ($user)
			{
					return view('admin::admin.show', ['user' => $user]);
			} else {
					return redirect('/admin/users')->with('error-msg', 'user não encontrado!');
			}
	}

	public function store(Request $request)
	{

			$this->validate($request, [
					'email' => 'required|unique:admins|max:255',
					'name' => 'required',
			]);

			$password = $request->get('password');
			$pass_confirm = $request->get('password_confirmation');

			if ($pass_confirm != $password) {
					return redirect('/admin/users/add')
											->withErrors([
													'password' => 'As senhas digitadas não conferem.'
											])
											->withInput();
			}

			//dd($request->get('role_id'));

			$user = new Admin([
				'name' => $request->get('name'),
				'email' => $request->get('email'),
				'password' => bcrypt($password),
			]);

			$role_ids = $request->get('role_id');

			if($user->save())
			{
					// atrelando os papéis e o usuário à tablea pivot admin_role
					if(!empty($role_ids))
					{
						$user->roles()->attach($role_ids);
					}

					return redirect('/admin/users')->with('msg', 'O user foi salvo com sucesso!');
			} else {
					return redirect()->back()->with('error-msg', 'O user não pode ser salvo. Por favor, tente novamente.');
			}


	}

	public function edit($id)
	{
			$user = Admin::find($id);
			$roles_list = $user->roles->lists('id');

			$roles = Role::orderBy('name','asc')->lists('name', 'id');


			if($user)
			{
					return view('admin::admin.edit', [
						'user' => $user,
						'roles' => $roles,
						'roles_list' => $roles_list,
					]);

			} else {
					return redirect('/admin/users')->with('error-msg', 'Houve um erro. O user não existe no sistema');
			}


	}

	public function update(Request $request, $id)
	{
			$user = Admin::find($id);


			$this->validate($request, [
					'name' => 'required',
					'email' => 'required|unique:admins,email,'.$user->id,
			]);

			$roles_list = $user->roles->lists('id'); // Papéis que usuário já possuía
			$role_ids = $request->get('role_list'); // Papéis que vieram do formulário

			if($user) {
					if($user->update($request->all()))
					{
							//Primeiro limpamos odos os papéis para depois adicionar novamente.
							$user->roles()->detach();

							if(!empty($role_ids))
							{
									$user->roles()->attach($role_ids);
							}

							// Se o array estiver vazios todos os registros na tabela admin_role serão apagados


							return redirect('/admin/users')->with('msg', 'O user foi atualizado com sucesso!');
					} else {
							return redirect()->back()->with('error-msg', 'O user não pôde ser salvo. Por favor, tente novamente.');
					}
			} else {
					return redirect('/admin/users')->with('error-msg', 'O user não pôde ser encontrado. Nenhuma alteração feita.');
			}
	}

	public function config($id)
	{
			$user = Admin::find($id);
			if($user)
			{
					return view('admin::admin.config', ['user' => $user]);
			} else {
					return view('/admin')->with('error-msg', 'Usuário não pode ser localizado. Tente novamente.');
			}
	}

	public function postConfig($id, Request $request)
	{
			$user = Admin::find($id);
			$password = $request->get('password');
			$pass_confirm = $request->get('password_confirmation');

			$this->validate($request, [
					'email' => 'required|unique:admins,email,'.$user->id
			]);


			if($user)
			{
					if(!empty($password))
					{
							if($password == $pass_confirm)
							{
									if($user->update(['name' => $request->get('name'), 'email' => $request->get('email'), 'password' => bcrypt($password)]))
									{
											return redirect('/admin/users/config/'.$user->id)->with('msg', 'Seus dados foram alterados com sucesso!');
									} else {
											return redirect('/admin/users/config/'.$user->id)->with('error-msg', 'Houve um erro ao alterar os dados. Por favor, tente novamente');
									}
							} else {
									return redirect('/admin/users/config/'.$user->id)->withErrors(['password' => 'As senhas Digitadas não conferem.'])->withInput();
							}
					} else {
							if ($user->update($request->only('name', 'email')))
							{
									return redirect('/admin/users/config/'.$user->id)->with('msg', 'Seus dados foram alterados com sucesso!');
							} else {
									return redirect('/admin/users/config/'.$user->id)->with('error-msg', 'Houve um erro ao alterar os dados. Por favor, tente novamente');
							}
					}
			} else {
					return view('/admin/users')->with('error-msg', 'Usuário não pode ser localizado. Tente novamente.');
			}
	}

	public function destroy($id)
	{
			$user = Admin::find($id);

			if($user)
			{
				if($user->delete())
				{
						return redirect()->back()->with('msg', 'O user foi excluído com sucesso');
				} else {
						return redirect()->back()->with('error-msg', 'O user não pôde ser excluído. Por favor, tente novamente.');
				}
			} else {
						return redirect()->back()->with('error-msg', 'O user não existe em nosso banco de dados.');
			}
	}


	public function login()
	{
			return view('admin::admin.login');
	}



	public function postLogin(Request $request)
	{
			$this->validate($request, [
					'email' => 'required|min:3|max:100',
					'password' => 'required|min:3|max:8',
			]);

			$credentials = ['email' => $request->get('email'), 'password' => $request->get('password')];

			$remember = false;
			if($request->get('remember') == 'on')
			{
					$remember = true;
			} else {
					$remember = false;
			}

			if( auth()->guard('admin')->attempt($credentials, $remember))
			{
					return redirect('/admin');
			} else {
					$email = Admin::where('email', $credentials['email'])->get();

					// Se é um email válido existente no sistema
					if (isset($email[0]))
					{
							return redirect('/admin/login')->with('error-msg', 'A senha digitada não confere com o email especificado.');
					} else { // Senão, ...
							return redirect('/admin/login')->with('error-msg', 'O email especificado não existe em nosso banco de dados.');
					}
			}
	}

	public function logout()
	{
			auth()->guard('admin')->logout();
			return redirect('/admin/login');
	}


}
