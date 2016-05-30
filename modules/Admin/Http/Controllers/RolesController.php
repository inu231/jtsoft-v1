<?php namespace Modules\Admin\Http\Controllers;

use Pingpong\Modules\Routing\Controller;
use Modules\Admin\Entities\Role;
use Illuminate\Http\Request;
use App\User;
use Validator;
use DateTime;

class RolesController extends Controller {

	private $role;

	public function __construct(Role $role)
	{
			$this->role = $role;
	}

	public function index(Request $request)
	{

			$isFilter = false;

			if (count($request->query) > 0)
			{

					$isFilter = true; // Filtros Acionados
					$name = $request->get('name');
					$description = $request->get('description');

					$roles = $this->role
										->whereRaw(!empty($name)? "name LIKE '%$name%'" : '1 = 1')
										->whereRaw(!empty($description)? "description LIKE '%$description%'": '1 = 1')
										->sortable()->get();
			} else {
					$roles = $this->role->get();
			}

			return view('admin::roles.index', ['roles' => $roles, 'isFilter' => $isFilter]);
	}

	public function show($id)
	{
			$role = $this->role->find($id);
			return view('admin::roles.show', ['role' => $role]);
	}

	public function add()
	{
			return view('admin::roles.add');
	}

	public function store(Request $request)
	{
				$validator = Validator::make($request->all(), [
            'name' => 'required|unique:roles|max:255',
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/admin/roles/add')
                        ->withErrors($validator)
                        ->withInput();
        }


		 $role = new role($request->all());

		 if ($role->save())
		 {
			 	return redirect('/admin/roles')->with('msg', 'A role foi salva com sucesso!');
		 } else {
			 	return redirect('/admin/roles')->with('error-msg', 'A role não pode ser salva. Por favor, tente novamente.');
		 }
	}

	public function edit($id)
	{
			$role = role::find($id);

			if ($role)
			{
				return view('admin::roles.edit', ['role' => $role]);
			} else {
				return redirect('/admin/roles')->with('error-msg', 'A role não pode ser encontrada');
			}
	}

	public function update(Request $request, $id)
	{
			$role = $this->role->find($id);

			$this->validate($request, [
					'name' => 'required|unique:roles,name,'.$role->id
			]);

			if($role)
			{
					if($role->update($request->all()))
					{
							return redirect('/admin/roles')->with('msg', 'A role foi atualizada com sucesso!');
					} else {
							return redirect('/admin/roles')->with('error-msg', 'Houve um erro ao atualizar a role. Por favor, tente novamente.');
					}
			} else {
					return redirect('/admin/roles')->with('error-msg', 'Houve um erro ao efetuar a operação. A role não foi encontrada');
			}
	}

	public function destroy($id)
	{
			$role = $this->role->find($id);

			if($role)
			{
					if($role->delete())
					{
							return redirect('/admin/roles')->with('msg', 'role excluída com sucesso!');
					} else {
							return redirect('/admin/roles')->with('error-msg', 'A role não pode ser excluída. Por favor, tente novamente!');
					}
			} else {
					return redirect('/admin/roles')->with('error-msg', 'Houve um erro ao efetuar a operação. A role não foi encontrada.');
			}
	}

}
