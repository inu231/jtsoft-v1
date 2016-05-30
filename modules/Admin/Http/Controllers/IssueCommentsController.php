<?php namespace Modules\Admin\Http\Controllers;

use Pingpong\Modules\Routing\Controller;
use Modules\Admin\Entities\IssueComment;
use Illuminate\Http\Request;
use App\User;
use Validator;
use DateTime;

class IssueCommentsController extends Controller {

	public function index()
	{
		return view('admin::index');
	}

	public function store(Request $request)
	{
			$this->validate($request, [
					'description' => 'required',
			]);

			if (IssueComment::create($request->all()))
			{
					return redirect('/admin/issues/view/'.$request->get('issue_id'))->with('msg', 'Comentário adicinado.');
			}

	}

}
