<?php namespace Modules\Admin\Http\Controllers;

use Pingpong\Modules\Routing\Controller;
use Modules\Admin\Entities\Page;
use Modules\Admin\Entities\Post;
use Modules\Admin\Entities\User;
use Modules\Admin\Entities\Admin;
use Modules\Admin\Entities\Banner;
use Modules\Admin\Entities\Tag;
use Modules\Admin\Entities\Issue;

class DashboardController extends Controller {

	public function index()
	{
		$posts = count(Post::lists('id'));

		return view('admin::dashboard.index', [
				'posts' => $posts,
		]);
	}

	public function dashboardUser()
	{
		$user = auth()->guard('admin')->user();	

		$openIssues = count($user->issues->where('status', 0));
		$closedIssues = count($user->issues->where('status', 2));
		$totalIssues = count($user->issues);

		return view('admin::dashboard.index-user', [
			'openIssues' => $openIssues,
			'closedIssues' => $closedIssues,
			'totalIssues' => $totalIssues,
		]);
	}

}
