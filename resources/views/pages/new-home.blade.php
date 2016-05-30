@extends('layouts.home')

@section(('title'))
    {{$title}}
@endsection


@section('content')
    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">

                <div class="item active" style="background-image: url('{{asset('assets/files/images/slider/bg1.jpg')}}')">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Ajudaremos sua empresa a expandir seu negócio</h1>
                                    <h2 class="animation animated-item-2">A internet é hoje um dos meios mais rentáveis para o comércio </h2>
                                    <a class="btn-slide animation animated-item-3" href="#feature">Saiba mais</a>
                                </div>
                            </div>

                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="{{asset('assets/files/images/slider/img1.png')}}" class="img-responsive">
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->

                <div class="item" style="background-image: url('{{asset('assets/files/images/slider/bg2.jpg')}}')">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1"> Sistemas, sites e aplicativos sob medida para você e sua empresa</h1>
                                    <h2 class="animation animated-item-2">  Gerencie sua empresa, expanda seu negócio e seja um destaque no Mercado Virtual </h2>
                                    <a class="btn-slide animation animated-item-3" href="#feature">Saiba mais</a>
                                </div>
                            </div>

                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="{{asset('assets/files/images/slider/img2.png')}}" class="img-responsive">
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->

                <div class="item" style="background-image: url('{{asset('assets/files/images/slider/bg3.jpg')}}')">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Gerenciamento e produtividade na palma da sua mão</h1>
                                    <h2 class="animation animated-item-2">Acompanhe e gerencia sua empresa de qualquer lugar, com comodidade e facilidade</h2>
                                    <a class="btn-slide animation animated-item-3" href="#feature">Saiba mais</a>
                                </div>
                            </div>
                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="{{asset('assets/files/images/slider/img3.png')}}" class="img-responsive">
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>
    </section><!--/#main-slider-->


        <section id="content">
            <div class="container">
              <div class="center wow fadeInDown">
                   <h2>Quem somos</h2>
                   <p class="lead"></p>
               </div>
                <div class="row ">
                    <div class="col-xs-12 col-sm-8 center wow fadeInDown">
                       <div class="tab-wrap">
                            <div class="media">
                                <div class="parrent pull-left">
                                    <ul class="nav nav-tabs nav-stacked">
                                        <li class="active"><a href="#tab1" data-toggle="tab" class="analistic-01">A Empresa</a></li>
                                        <li class=""><a href="#tab2" data-toggle="tab" class="analistic-02">Nossos Valores</a></li>
                                        <li class=""><a href="#tab3" data-toggle="tab" class="tehnical">Missão</a></li>
                                        <li class=""><a href="#tab4" data-toggle="tab" class="tehnical">Visão</a></li>
                                        <li class=""><a href="#tab5" data-toggle="tab" class="tehnical">O que fazemos</a></li>
                                    </ul>
                                </div>

                                <div class="parrent media-body">
                                    <div class="tab-content">
                                        <div class="tab-pane fade active in" id="tab1">
                                            <div class="media">
                                                <div class="media-body">
                                                     <h2>Um pouco sobre a JT Soft </h2>
                                                     <p>  Somos uma startup fundada no início de 2016, e temos como foco exclusivo o desenvolvimento de sistemas e websites.
                                                          Soluções em gestão para melhoria de resultados dos nossos clientes, baseadas na otimização de métodos, processos, automação e operação de seus negócios. </p>
                                                </div>
                                            </div>
                                        </div>

                                         <div class="tab-pane fade" id="tab2">
                                            <div class="media">
                                                <div class="" >
                                                     <h2> Nossos valores </h2>
                                                     <p>
                                                       <ul style="text-align: left !important;">
                                                         <li> Ética </li>
                                                         <li> Respeito </li>
                                                         <li> Comprometimento com Resultados </li>
                                                         <li> Compromisso com Clientes</li>
                                                         <li> Valorização de Pessoas </li>
                                                         <li> Iniciativa e Autonomia</li>
                                                       </ul>
                                                     </p>
                                                </div>
                                            </div>
                                         </div>

                                         <div class="tab-pane fade" id="tab3">
                                            <h2> Missão </h2>
                                            <p> Responder com excelência e maestria às demandas de nossos clientes a partir do desenvolvimento e oferta de produtos e serviços que contribuam para o crescimento rentável e gerenciável dos negócios de nossos clientes, gerando lucros e satisfação. </p>
                                         </div>

                                         <div class="tab-pane fade" id="tab4">
                                            <h2> Nossa visão </h2>
                                            <p> Ser empresa de referência no mercado tecnológico de desenvolvimento de websites e sistemas, reconhecida como a melhor opção por clientes,  por desenvolver produtos e serviços de alta qualidade, com foco absoluto no bem-estar de nossos clientes.</p>
                                         </div>

                                         <div class="tab-pane fade" id="tab5">
                                            <p> Somos uma empresa de tecnologia com foco no desenvolvimento de sites e sistemas sob medida. Temos como foco construir sites bem estruturados que permitirão que você altere informações em tempo real, sem precisar recorrer a nós. Isto mesmo, a qualquer momento você poderá manipular as informações do site. </p>
                                         </div>
                                    </div> <!--/.tab-content-->
                                </div> <!--/.media-body-->
                            </div> <!--/.media-->
                        </div><!--/.tab-wrap-->
                    </div><!--/.col-sm-6-->

                    <!-- <div class="col-xs-12 col-sm-4 wow fadeInDown">
                        <div class="testimonial">
                            <h2>Testimonials</h2>
                             <div class="media testimonial-inner">
                                <div class="pull-left">
                                    <img class="img-responsive img-circle" src="{{asset('assets/files/images/testimonials1.png')}}">
                                </div>
                                <div class="media-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                                    <span><strong>-John Doe/</strong> Director of corlate.com</span>
                                </div>
                             </div>

                             <div class="media testimonial-inner">
                                <div class="pull-left">
                                    <img class="img-responsive img-circle" src="{{asset('assets/files/images/testimonials1.png')}}">
                                </div>
                                <div class="media-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                                    <span><strong>-John Doe/</strong> Director of corlate.com</span>
                                </div>
                             </div>

                        </div>
                    </div> -->
<!-- Modal -->


                </div><!--/.row-->            </div><!--/.container-->
        </section><!--/#content-->

    <section id="feature" >
        <div class="container">
                      <div class="center wow fadeInDown">
                           <h2>Nossos serviços</h2>
                           <p class="lead">Um serviço de qualidade é essencial para a sua satisfação, <br> e isso é o que buscamos fazer de melhor.</p>
                       </div>

                       <div class="row">
                           <div class="features">
                             <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                                  <div class="feature-wrap">
                                       <a id = "modal-sites" class="modal-link"> <i class="fa fa-internet-explorer" title="Saiba Mais"></i> </a>
                                       <h2>Sites</h2>
                                       <h3>Monte seu site com a cara da sua empresa </h3>
                                   </div>
                               </div><!--/.col-md-4-->

                               <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                                   <div class="feature-wrap">
                                       <a id = "modal-systems" class="modal-link"> <i class="fa fa-key" title="sistemas"></i></a>
                                       <h2>Sistemas</h2>
                                       <h3>Gerencia sua empresa e funcionários</h3>
                                   </div>
                               </div><!--/.col-md-4-->

                               <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                                   <div class="feature-wrap">
                                       <a id = "modal-apps" class="modal-link"> <i class="fa fa-mobile"></i></a>
                                       <h2> App's </h2>
                                       <h3>Seu negócio online 24 horas, acessível de qualquer lugar</h3>
                                   </div>
                               </div><!--/.col-md-4-->

                               <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                                   <div class="feature-wrap">
                                       <a id = "modal-disponibilidade" class="modal-link"><i class="fa fa-bullhorn"></i> </a>
                                        <h2>Disponibilidade</h2>
                                       <h3>Seu negócio online 24 horas, acessível de qualquer lugar</h3>
                                   </div>
                               </div><!--/.col-md-4-->

                               <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                                   <div class="feature-wrap">
                                       <a id = "modal-webstore" class="modal-link"> <i class="fa fa-shopping-cart"></i> </a>
                                       <h2>Loja Virtual</h2>
                                       <h3>Aumente suas vendas com nossa loja virtual</h3>
                                   </div>
                               </div><!--/.col-md-4-->

                               <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                                   <div class="feature-wrap">
                                       <a id = "modal-hospedagem" class="modal-link"> <i class="fa fa-cloud-download"></i></a>
                                       <h2> Hospedagem de Sites</h2>
                                       <h3>Mantenha seu site online sem se preocupar</h3>
                                   </div>
                               </div><!--/.col-md-4-->

                               <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                                   <div class="feature-wrap">
                                       <a id = "modal-social" class="modal-link"><i class="fa fa-users"></i></a>
                                       <h2>Redes Sociais</h2>
                                       <h3>Integre o seu negócio às redes sociais</h3>
                                   </div>
                               </div><!--/.col-md-4-->

                               <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                                   <div class="feature-wrap">
                                       <a id = "modal-manutencao" class="modal-link"><i class="fa fa-cogs"></i></a>
                                       <h2>Manutenção de sites</h2>
                                       <h3>Problemas com seu site? Entre em contato conosco</h3>
                                   </div>
                               </div><!--/.col-md-4-->

                               <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                                   <div class="feature-wrap">
                                       <a id = "modal-qualidade" class="modal-link"><i class="fa fa-heart"></i> </a>
                                       <h2>Serviço de qualidade</h2>
                                       <h3>Qualidade é o nosso foco absoluto</h3>
                                   </div>
                               </div><!--/.col-md-4-->
                           </div><!--/.services-->
                       </div><!--/.row-->
                   </div>
               </div>

               <div class="container">
                  <div class="get-started center wow fadeInDown" style="background:#fff !important;">
                      <h2>Pronto para começar?</h2>
                      <p class="lead"> Entre imediatamente em contato conosco e faça seu orçamento! Basta informar seus dados, o tipo de serviço a ser contratado, e rapidamente lhe daremos um retorno</p>
                      <div class="request">
                          <h4><a href="#contact-page">Faça já seu orçamento</a></h4>
                      </div>
                  </div><!--/.get-started-->
               </div>

       </section>
    <!--
    <section id="recent-works">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Recent Works</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="{{asset('assets/files/images/portfolio/recent/item1.png')}}" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Business theme</a> </h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                <a class="preview" href="{{asset('assets/files/images/portfolio/full/item1.png')}}" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="{{asset('assets/files/images/portfolio/recent/item2.png')}}" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Business theme</a></h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                <a class="preview" href="{{asset('assets/files/images/portfolio/full/item2.png')}}" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="{{asset('assets/files/images/portfolio/recent/item3.png')}}" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Business theme </a></h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                <a class="preview" href="{{asset('assets/files/images/portfolio/full/item3.png')}}" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="{{asset('assets/files/images/portfolio/recent/item4.png')}}" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Business theme </a></h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                <a class="preview" href="{{asset('assets/files/images/portfolio/full/item4.png')}}" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="{{asset('assets/files/images/portfolio/recent/item5.png')}}" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Business theme</a></h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                <a class="preview" href="{{asset('assets/files/images/portfolio/full/item5.png')}}" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="{{asset('assets/files/images/portfolio/recent/item6.png')}}" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Business theme </a></h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                <a class="preview" href="{{asset('assets/files/images/portfolio/full/item6.png')}}" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="{{asset('assets/files/images/portfolio/recent/item7.png')}}" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Business theme </a></h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                <a class="preview" href="{{asset('assets/files/images/images/portfolio/full/item7.png')}}" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="{{asset('assets/files/images/portfolio/recent/item8.png')}}" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Business theme </a></h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                <a class="preview" href="{{asset('assets/files/images/portfolio/full/item8.png')}}" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.row
        </div><!--/.container
    </section><!--/#recent-works-->

    <section id="services" class="service-item">
	   <div class="container">
            <div class="center wow fadeInDown">
                <h2>Vantagens</h2>
                <p class="lead">Providenciaremos atendimento personalizado <br> através de um sistema interno de chamados</p>
            </div>

            <div class="row">

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="{{asset('assets/files/images/services/services1.png')}}">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Ferramenta SEO </h3>
                            <p>Usaremos o SEO, um recurso que deixará seu site no topo das pesquisas</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="{{asset('assets/files/images/services/services2.png')}}">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Agilidade</h3>
                            <p>Atendimento rápido e fácil para você, das 08:00 às 21:00, de segunda a sábado</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="{{asset('assets/files/images/services/services3.png')}}">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Manutenção </h3>
                            <p>Acompanhe em tempo real o andamento de suas solicitações</p>
                        </div>
                    </div>
                </div>
                <!--
                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="{{asset('assets/files/images/services/services4.png')}}">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">SEO Marketing</h3>
                            <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="{{asset('assets/files/images/services/services5.png')}}">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">SEO Marketing</h3>
                            <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="{{asset('assets/files/images/services/services6.png')}}">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">SEO Marketing</h3>
                            <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
                        </div>
                    </div>
                </div>-->
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#services-->

   <!-- <section id="middle">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 wow fadeInDown">
                    <div class="skill">
                        <h2>Our Skills</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                        <div class="progress-wrap">
                            <h3>Graphic Design</h3>
                            <div class="progress">
                              <div class="progress-bar  color1" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
                                <span class="bar-width">85%</span>
                              </div>

                            </div>
                        </div>

                        <div class="progress-wrap">
                            <h3>HTML</h3>
                            <div class="progress">
                              <div class="progress-bar color2" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                               <span class="bar-width">95%</span>
                              </div>
                            </div>
                        </div>

                        <div class="progress-wrap">
                            <h3>CSS</h3>
                            <div class="progress">
                              <div class="progress-bar color3" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                <span class="bar-width">80%</span>
                              </div>
                            </div>
                        </div>

                        <div class="progress-wrap">
                            <h3>Wordpress</h3>
                            <div class="progress">
                              <div class="progress-bar color4" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                <span class="bar-width">90%</span>
                              </div>
                            </div>
                        </div>
                    </div>

                </div><!--/.col-sm-6-->

                <!--<div class="col-sm-6 wow fadeInDown">
                    <div class="accordion">
                        <h2>Why People like us?</h2>
                        <div class="panel-group" id="accordion1">
                          <div class="panel panel-default">
                            <div class="panel-heading active">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1">
                                  Lorem ipsum dolor sit amet
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>

                            <div id="collapseOne1" class="panel-collapse collapse in">
                              <div class="panel-body">
                                  <div class="media accordion-inner">
                                        <div class="pull-left">
                                            <img class="img-responsive" src="{{asset('assets/files/images/accordion1.png')}}">
                                        </div>
                                        <div class="media-body">
                                             <h4>Adipisicing elit</h4>
                                             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
                                        </div>
                                  </div>
                              </div>
                            </div>
                          </div>

                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1">
                                  Lorem ipsum dolor sit amet
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapseTwo1" class="panel-collapse collapse">
                              <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
                              </div>
                            </div>
                          </div>

                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree1">
                                  Lorem ipsum dolor sit amet
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapseThree1" class="panel-collapse collapse">
                              <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
                              </div>
                            </div>
                          </div>

                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseFour1">
                                  Lorem ipsum dolor sit amet
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapseFour1" class="panel-collapse collapse">
                              <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
                              </div>
                            </div>
                          </div>
                        </div><!--/#accordion1
                    </div>
                </div>

            </div><!--/.row
        </div><!--/.container
    </section><!--/#middle-->


    <!-- <section id="partner">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Our Partners</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class="partners">
                <ul>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src="{{asset('assets/files/images/partners/partner1.png')}}"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" src="{{asset('assets/files/images/partners/partner2.png')}}"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms" src="{{asset('assets/files/images/partners/partner3.png')}}"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms" src="{{asset('assets/files/images/partners/partner4.png')}}"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1500ms" src="{{asset('assets/files/images/partners/partner5.png')}}"></a></li>
                </ul>
            </div>
        </div><!--/.container
    </section><!--/#partner-->

    <section id="contact-page" style="background: #f2f2f2;">
            <div class="container" style="padding-top: 70px;">
                <div class="center">
                    <h2>Entre em contato conosco </h2>
                    <p class="lead"> Preencha seus dados e entraremos em contato o mais breve possível</p>
                </div>
                <div class="row contact-wrap">
                    <div class="status alert alert-success" style="display: none"></div>
                    <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="{{url('/enviar-email')}}">
                        {!! csrf_field() !!}
                        <div class="col-sm-5 col-sm-offset-1">
                            <div class="form-group">
                                <label>Nome *</label>
                                <input type="text" name="name" class="form-control" required="required">
                            </div>
                            <div class="form-group">
                                <label>Email *</label>
                                <input type="email" name="email" class="form-control" required="required">
                            </div>
                            <div class="form-group">
                                <label>Telefone </label>
                                <input type="number" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Empresa</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label>Assunto *</label>
                                <input type="text" name="subject" class="form-control" required="required">
                            </div>
                            <div class="form-group">
                                <label>Mensagem *</label>
                                <textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Enviar mensagem</button>
                            </div>
                        </div>
                    </form>
                </div><!--/.row-->
            </div><!--/.container-->
    </section><!--/#contact-page-->


  <!--  <section id="conatcat-info">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="media contact-info wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="pull-left">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="media-body">
                            <h2>Have a question or need a custom quote?</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation +0123 456 70 80</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.container-->
    </section><!--/#conatcat-info-->

    <!-- MODAL -->
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Site </h4>
          </div>
          <div class="modal-body">
            <p>Faremos seu site da melhor forma possuindo, onde posteriormente você ficará no controle. Isso mesmo, junto com o site você tera um painel administrativo que permitirá que você altere qualquer informação em tempo real.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-modal" data-dismiss="modal">Fechar</button>
          </div>
        </div>

      </div>
    </div>
@endsection
