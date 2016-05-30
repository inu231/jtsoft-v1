jQuery(function($) {'use strict',

	//#main-slider
	$(function(){
		$('#main-slider.carousel').carousel({
			interval: 8000
		});
	});


	// accordian
	$('.accordion-toggle').on('click', function(){
		$(this).closest('.panel-group').children().each(function(){
		$(this).find('>.panel-heading').removeClass('active');
		 });

	 	$(this).closest('.panel-heading').toggleClass('active');
	});

	//Initiat WOW JS
	new WOW().init();

	// portfolio filter
	$(window).load(function(){'use strict';
		var $portfolio_selectors = $('.portfolio-filter >li>a');
		var $portfolio = $('.portfolio-items');
		$portfolio.isotope({
			itemSelector : '.portfolio-item',
			layoutMode : 'fitRows'
		});

		$portfolio_selectors.on('click', function(){
			$portfolio_selectors.removeClass('active');
			$(this).addClass('active');
			var selector = $(this).attr('data-filter');
			$portfolio.isotope({ filter: selector });
			return false;
		});
	});

	// Contact form
	var form = $('#main-contact-form');
	form.submit(function(e){
				e.preventDefault();
				var form_status = $('<div class="form_status"></div>');
        $.ajax({
            type:"POST",
            dataType:"HTML",
            data:form.serialize(),
            url: form.attr('action'),
						beforeSend: function(){
							form.prepend( form_status.html('<p><i class="fa fa-spinner fa-spin"></i> Email is sending...</p>').fadeIn() );
						},
            success : function(data) {
							 form_status.html('<p class="text-success">' + data + '</p>').delay(3000).fadeOut();
							 form[0].reset();
            },
            error : function() {
              form_status.html('<p class="text-success">' + 'Erro! E-mail não pode ser enviado.' + '</p>').delay(3000).fadeOut();
            }
        });
  });

	//goto top
	$('.gototop').click(function(event) {
		event.preventDefault();
		$('html, body').animate({
			scrollTop: $("body").offset().top
		}, 500);
	});

	//Pretty Photo
	$("a[rel^='prettyPhoto']").prettyPhoto({
		social_tools: false
	});

	// Controle de Modals
	$('#modal-sites').click(function(){
				$('#myModal').modal('show');
				$('.modal-title').html('Sites');
				$('.modal-body p').html('Seu site com a cara da sua empresa. Desenvolveremos o seu site totalmente responsivo, de forma a se adaptar a todos os dispositivos. Você terá total controle sobre o site, podendo alterar todas as informações que nele se encontram. \nCaso deseje, podemos tomar conta dele por você!')
	});

	$('#modal-systems').click(function(){
				$('#myModal').modal('show');
				$('.modal-title').html('Sistemas');
				$('.modal-body p').html('Gerencie seus funcionários, produtos, fincanças e outros com maestria e alta produtividade. Desenvolveremos um sistema sob medida que pertimitirá a você ter total controle da sua empresa na palma de suas mãos.')
	});

	$('#modal-apps').click(function(){
				$('#myModal').modal('show');
				$('.modal-title').html('Apps');
				$('.modal-body p').html('Quer ter seu próprio aplicativo? Temos profissionais capacitados para isso. ')
	});

	$('#modal-disponibilidade').click(function(){
				$('#myModal').modal('show');
				$('.modal-title').html('Disponibilidade');
				$('.modal-body p').html('Está longe de sua empresa? Precisa alterar informações urgentemente? Você poderá fazer as alterações que quiser de qualquer lugar, 24 horas por dia, bastando ter um dispositivo conectado a internet, sendo este um computador, notebook ou celular. As alterações poderão ser feitas a qualquer momento, com apenas alguns cliques.')
	});

	$('#modal-webstore').click(function(){
				$('#myModal').modal('show');
				$('.modal-title').html('Loja Virtual');
				$('.modal-body p').html('Quer expandir seu negócio e vender seus produtos pela internet? Você está no lugar certo. Faremos sua loja virtual, onde você terá acesso a relatórios de venda, estatísticas de produtos, pedidos detalhados e outras ferramentas para gerenciar suas vendas.')
	});

	$('#modal-hospedagem').click(function(){
				$('#myModal').modal('show');
				$('.modal-title').html('Hospedagem');
				$('.modal-body p').html('Faremos a hospedagem de seu site para você, sem complicações. Cuidaremos de toda a parte técnica e burocrática para que você não tenha nenhum problema e possa colocar seu site no ar o mais rápido possível.')
	});

	$('#modal-social').click(function(){
				$('#myModal').modal('show');
				$('.modal-title').html('Rede social');
				$('.modal-body p').html('As integração com as redes sociais é hoje um dos requisitos mais importantes para se ter uma boa visibilidade na internet. Deixe que a JT SOFT cuidará disto por você.')
	});

	$('#modal-manutencao').click(function(){
				$('#myModal').modal('show');
				$('.modal-title').html('Manutenção de Sites');
				$('.modal-body p').html('Site com bugs? Quer implementar novas funcionalidades ou corrigir problemas recorrentes nele? Entre em contato imediatamente conosco para que possamos avaliar. É rápido, fácil e cômodo.')
	});

	$('#modal-qualidade').click(function(){
				$('#myModal').modal('show');
				$('.modal-title').html('Qualidade');
				$('.modal-body p').html('Primamos pela excelência ao seu atendimento. Temos um serviço de qualidade, com foco em atender todas as suas expectativas, de forma ágil e eficiente.')
	});
	//FIM controle modals


});
