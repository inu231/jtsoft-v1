@extends('admin::layouts.master')

@section('content')

			<!-- start: Content -->
			<div id="content" class="span10">


			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a>
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Dashboard</a></li>
			</ul>

			@if(session('msg'))
			  <div class="alert alert-success fade in" style="margin-top:18px;">
			      <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
			      <strong>Ok!</strong> {{session('msg')}}
			  </div>
			@endif
			@if(session('error-msg'))
			  <div class="alert alert-danger fade in" style="margin-top:18px;">
			      <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
			      <strong>Erro! </strong> {{session('error-msg')}}
			  </div>
			@endif


			<div class="row-fluid">

				<div class="span3 statbox purple" onTablet="span6" onDesktop="span3">
					<div class="boxchart">5,6,7,2,0,4,2,4,8,2,3,3,2</div>
					<div class="number">{{$openIssues}}<i class="icon-arrow-up"></i></div>
					<div class="title"> Chamados abertos </div>
					<div class="footer">
						<a href="#"> Ver relatório</a>
					</div>
				</div>
				<div class="span3 statbox green" onTablet="span6" onDesktop="span3">
					<div class="boxchart">1,2,6,4,0,8,2,4,5,3,1,7,5</div>
					<div class="number">{{$closedIssues}}<i class="icon-arrow-up"></i></div>
					<div class="title">Chamados encerrados</div>
					<div class="footer">
						<a href="#"> Ver relatório </a>
					</div>
				</div>
				<div class="span3 statbox blue noMargin" onTablet="span6" onDesktop="span3">
					<div class="boxchart">5,6,7,2,0,-4,-2,4,8,2,3,3,2</div>
					<div class="number">{{$totalIssues}}<i class="icon-arrow-up"></i></div>
					<div class="title"> Total de chamados </div>
					<div class="footer">
						<a href="#"> Ver relatório </a>
					</div>
				</div>
				<div class="span3 statbox yellow" onTablet="span6" onDesktop="span3">
					<div class="boxchart">7,2,2,2,1,-4,-2,4,8,,0,3,3,5</div>
					<div class="number">678<i class="icon-arrow-down"></i></div>
					<div class="title">Temo médio</div>
					<div class="footer">
						<a href="#"> read full report</a>
					</div>
				</div>

			</div>



	</div><!--/.fluid-container-->

			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->

@stop
