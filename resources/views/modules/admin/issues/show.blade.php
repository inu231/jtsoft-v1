@extends('admin::layouts.master')

@section('content')



<div id="content" class="span10">
  			<ul class="breadcrumb">
  				<li>
  					<i class="icon-home"></i>
  					<a href="{{url('/admin')}}">Home</a>
  					<i class="icon-angle-right"></i>
  				</li>
          <li>
            <a href="{{url('/admin/posts')}}">Posts</a>
            <i class="icon-angle-right"></i>
          </li>
          <li>
            <a href="{{url('/admin/issues')}}">Chamados</a>
            <i class="icon-angle-right"></i>
          </li>
          <li>
            <a href="#">Visualizar</a>
          </li>
  			</ul>

					@if (count($errors) > 0)
						<div class="alert alert-danger fade in" style="margin-top:18px;">
								<a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
								<strong>Ops! </strong> <span> Houve um erro ao salvar os dados. Verifique os campos que estão incorretos. </span>
						</div>
					@endif

			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white zoom-in"></i><span class="break"></span> Visualizar issue </h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						  <fieldset>

                <div class = "table-background">
                    <table class = "table" style="">

                      <tr width="">
                          <th> id: </th>
                          <td> {{$issue->id}} </td>
                      </tr>
                      <tr width="">
                          <th> Autor: </th>
                          <td> {{$issue->admin_id}} </td>
                      </tr>
                      <tr width="">
                          <th> Título: </th>
                          <td> {{$issue->title}} </td>
                      </tr>
                      <tr width="">
                          <th> Descrição: </th>
                          <td> {{$issue->description}} </td>
                      </tr>
                      <tr width="">
                          <th> Status: </th>
                          <td> {{$issue->status}} </td>
                      </tr>
                      <tr width="">
                          <th> Prioridade: </th>
                          <td> {{$issue->relevance}} </td>
                      </tr>



                    </table>
                </div>
                <button class = "btn btn-primary" onclick="window.history.back()"> Voltar </button>



						  </fieldset>
					</div>




				</div><!--/span-->

			</div><!--/row-->


      <form method="post" action="{{url('/admin/issues/'.$issue->id.'/comments/store')}}">
        {!! csrf_field() !!}

          <div class="container">
                <div class="box black span8" ontablet="span5" ondesktop="span8">
        					<div class="box-header">
        						<h2><i class="halflings-icon white comment"></i><span class="break"></span>Comentários</h2>
        						<div class="box-icon">
        							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
        							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
        						</div>
        					</div>
        					<div class="box-content">
        						<ul class="chat metro yellow">
                      @foreach($comments as $comment)

                        <li class="{{!$comment->admin->isAdmin()? 'left' : 'right'}}">
                          <img class="avatar" alt="Dennis Ji" src="{{asset('assets/img/avatar.jpg')}}">
                          <span class="message"><span class="arrow"></span>
                            <span class="from">{{$comment->admin->name}}</span>
                            <span class="time">
                              <?php $created_at = strtotime($issue->created_at); ?>
                              {{date('d', $created_at)}} de {{$months[date('m', $created_at)]}} de {{date('Y', $created_at)}}, {{date('h:m', $created_at)}}
                            </span>
                            <span class="text">
                              {{$comment->description}}
                            </span>
                          </span>
                        </li>
                      @endforeach
        						</ul>
        						<div class="chat-form black">
        							<textarea required name="description"></textarea>
                      <input type="hidden" value="{{auth()->guard('admin')->user()->id}}" name="admin_id">
                      <input type="hidden" value="{{$issue->id}}" name="issue_id">
        							<button class="btn btn-warning"> Enviar mensagem</button>
        						</div>
        					</div>
        				</div>
            </div> <!--/row-->
        </form>


	</div><!--/.fluid-container-->

        <!-- end: Content -->
    </div><!--/#content.span10-->
    </div><!--/fluid-row-->


@stop
