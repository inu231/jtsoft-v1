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
					<a href="{{url('/admin/users')}}">users</a>
					<i class="icon-angle-right"></i>
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#">Adicionar</a>
				</li>
			</ul>


					@if(session('error-msg'))
						<div class="alert alert-success fade in" style="margin-top:18px;">
								<a href="#" id="close-alert-msg1" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
								<strong>Success!</strong> {{session('error-msg')}}
						</div>
					@endif

					@if (count($errors) > 0)
						<div class="alert alert-danger fade in" style="margin-top:18px;">
								<a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
								<strong>Ops! </strong> <span> Houve um erro ao salvar os dados. Verifique os campos que estão incorretos. </span>
						</div>
					@endif

			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span> Adicionar Usuário </h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
							<?=Form::open(array('url' => '/admin/users/store', 'id' => 'AdduserForm', 'class' => 'form-admin')); ?>
						  <fieldset>



                <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/users/store') }}">
                    {!! csrf_field() !!}

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">


                        <div class="col-md-6 user-form">
                            <label class="col-md-4 control-label user-form"> Nome </label>
                            <input type="text" class="form-control user-form" name="name" value="{{ old('name') }}">

                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">


                        <div class="col-md-6 user-form">
                            <label class="col-md-4 control-label user-form"> Endereço de Email </label>
                            <input type="email" class="form-control user-form" name="email" value="{{ old('email') }}">

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                        <div class="col-md-6 user-form">
                            <label class="col-md-4 control-label user-form">Senha </label>
                            <input type="password" class="form-control user-form" name="password">

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        <div class="col-md-6 user-form">
                            <label class="col-md-4 control-label user-form">Confirme a senha</label>
                            <input type="password" class="form-control user-form" name="password_confirmation">

                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

										<div class="form-group">
                        <div class="col-md-6 user-form">
                            <label class="col-md-4 user-form" style="float: left; vertical-align: middle; line-height: 30px; margin-right: 19px;">Permissões</label>
                            <?=Form::select('role_id[]', $roles->toArray(), null, array('id' => 'multi-select-tag', 'class' => '', 'multiple', 'data-rel' => 'chosen')); ?>
                        </div>
                    </div>



							<div class="form-actions">
								  <button type="submit" class="btn btn-primary">Adicionar</button>
								  <button type="reset" class="btn" onclick="window.history.back()">Cancelar</button>
							</div>
						  </fieldset>
						</form>

					</div>
				</div><!--/span-->

			</div><!--/row-->




	</div><!--/.fluid-container-->

        <!-- end: Content -->
    </div><!--/#content.span10-->
    </div><!--/fluid-row-->


@endsection
