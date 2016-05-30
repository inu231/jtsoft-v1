<?php namespace Modules\Admin\Http\Controllers;

use Pingpong\Modules\Routing\Controller;
use Modules\Admin\Entities\issue;
use Modules\Admin\Entities\IssueComment;
use Modules\Admin\Entities\Role;
use Illuminate\Http\Request;
use Validator;
use DateTime;

class IssuesController extends Controller {

	private $issue;

	private $months = [
			'01' => 'Janeiro',
			'02' => 'Fevereiro',
			'03' => 'Março',
			'04' => 'Abril',
			'05' => 'Maio',
			'06' => 'Junho',
			'07' => 'Julho',
			'08' => 'Agosto',
			'09' => 'Setembro',
			'10' => 'Outubro',
			'11' => 'Novembro',
			'12' => 'Dezembro',
	];

	public function __construct(Issue $issue)
	{
			$this->issue = $issue;
	}

	public function index(Request $request)
	{
			$isFilter = false;

			// Usuário logado atualmente
			$currentUser = auth()->guard('admin')->user();

			if (count($request->query) > 0)
			{

					$isFilter = true; // Filtros Acionados
					$title = $request->get('title');
					$status = $request->get('status');
					$relevance = $request->get('relevance');
					$description = $request->get('description');
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

					$issues = $this->issue
										->whereRaw(!$currentUser->isAdmin()? "admin_id = '$currentUser->id'" : '1 = 1')
										->whereRaw(!empty($title)? "title LIKE '%$title%'" : '1 = 1')
										->whereRaw(!empty($description)? "description LIKE '%$description%'": '1 = 1')
										->whereRaw(!empty($created_at) ? "created_at >= '$created_at'" : '1 = 1')
										->whereRaw(!empty($created_end) ? "created_at <= '$created_end'" : '1 = 1' )
										->whereRaw(!empty($status) ? "status = '$status'" : '1 = 1' )
										->whereRaw(!empty($relevance) ? "relevance <= '$relevance'" : '1 = 1' )
										->get();
			} else {
					// Se for admin, retornará todos os chamados, senão retornará os chamados do usuário logado
					$issues = $currentUser->isAdmin() ? $this->issue->get() : $currentUser->issues;
			}

			return view('admin::issues.index', [
					'issues' => $issues,
					'isFilter' => $isFilter,
					'status' => $this->issue->getStatusList(),
					'relevance' => $this->issue->getRelevanceList(),
			]);
	}

	public function show($id)
	{
			$issue = $this->issue->find($id);
			$comments = IssueComment::where('issue_id', $id)->get();
			return view('admin::issues.show', ['issue' => $issue, 'comments' => $comments, 'months' => $this->months]);
	}

	public function add()
	{
			return view('admin::issues.add', ['relevance' => $this->issue->getRelevanceList()]);
	}

	public function store(Request $request)
	{
			$validator = Validator::make($request->all(), [
          'title' => 'required|unique:issues|max:255',
          'description' => 'required',
      ]);

      if ($validator->fails()) {
          return redirect('/admin/issues/add')
                      ->withErrors($validator)
                      ->withInput();
      }


		 $issue = new Issue($request->all());
	 	 $issue->status = 0;
		 $issue->admin_id = auth()->guard('admin')->user()->id; // Salva o id do usuário logado

		 if ($issue->save())
		 {
			 	return redirect('/admin/issues')->with('msg', 'O chamado foi aberto com sucesso!');
		 } else {
			 	return redirect('/admin/issues')->with('error-msg', 'O chamado não pôde ser aberto. Por favor, tente novamente.');
		 }
	}

	public function edit($id)
	{
			$issue = issue::find($id);

			if ($issue)
			{
				return view('admin::issues.edit', ['issue' => $issue]);
			} else {
				return redirect('/admin/issues')->with('error-msg', 'A issue não pode ser encontrada');
			}
	}

	public function update(Request $request, $id)
	{
			$issue = $this->issue->find($id);

			$this->validate($request, [
					'title' => 'required|unique:issues,title,'.$issue->id
			]);

			if($issue)
			{
					if($issue->update($request->all()))
					{
							return redirect('/admin/issues')->with('msg', 'A issue foi atualizada com sucesso!');
					} else {
							return redirect('/admin/issues')->with('error-msg', 'Houve um erro ao atualizar a issue. Por favor, tente novamente.');
					}
			} else {
					return redirect('/admin/issues')->with('error-msg', 'Houve um erro ao efetuar a operação. A issue não foi encontrada');
			}
	}

	public function destroy($id)
	{
			$issue = $this->issue->find($id);

			if($issue)
			{
					if($issue->delete())
					{
							return redirect('/admin/issues')->with('msg', 'issue excluída com sucesso!');
					} else {
							return redirect('/admin/issues')->with('error-msg', 'A issue não pode ser excluída. Por favor, tente novamente!');
					}
			} else {
					return redirect('/admin/issues')->with('error-msg', 'Houve um erro ao efetuar a operação. A issue não foi encontrada.');
			}
	}
}
