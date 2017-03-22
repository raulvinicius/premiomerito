$(document).ready(function() {


	$( window ).scroll(function() 
	{
		setTimeout(showInAnimation,400);

		flutuaMenu();
	});
	$( window ).trigger('scroll');

	$( window ).load(function(e) 
	{
		nivelaAlturaArtigos();
	});
	$( window ).trigger('load');

	$( window ).resize(function(e) 
	{
		nivelaAlturaArtigos();
	});
	$( window ).trigger('resize');


	$( window ).on('hashchange', function(e) 
	{
	});

	$( window ).trigger('hashchange');






	//-----------------HOME-----------------//


	if( $('.page.page-home').length > 0 )
	{
		var intNivelaArtigos = setInterval(function()
		{
			nivelaAlturaArtigos();
			console.log('tic')
		}, 200)

		setTimeout(function()
		{
			clearInterval(intNivelaArtigos);
			intNivelaArtigos = undefined;
			console.log('tac')
		}, 10000)
	}


	//-----------------HOME-----------------//






	//-----------------MASONRY-----------------//
/*
	var grid = $('.grid').masonry({
	  // options
	  itemSelector: '.grid-item',
	  columnWidth: '.grid-item'
	});

	function callMasonry ()
	{
		grid.masonry();
	}
	
	setInterval( callMasonry, 2000 );
*/
	//-----------------MASONRY-----------------//




	//-----------------CAROUSEL HOME-----------------//

	preInitIntervalCasesHome();

	if ( $('.page-home .noticias ul li').length > 1 ) 
	{
		initIntervalCasesHome();
	};

	$('.page-home .noticias ul li:first-child').addClass('highlight')
		.css('z-index', '1');

	$('.page-home .noticias button#seta-esq').on('click', function()
	{
		passaCaseHome('tras');
		clearInterval(intervalCase);
		initIntervalCasesHome();
	})
	$('.page-home .noticias button#seta-dir').on('click', function()
	{
		passaCaseHome('frente');
		clearInterval(intervalCase);
		initIntervalCasesHome();
	})


	//-----------------CAROUSEL HOME-----------------//




	//-----------------SELECT EDICAO-----------------//

	$('#select-edicao').on('change', function(event) {
		window.location = blogUrl + $(this).attr('data-p') + '/' + $(this).val();
	});

	//-----------------SELECT EDICAO-----------------//




	//-----------------HOMENAGEADOS-----------------//

	if( $('.page-homenageado').length > 0)
	{
		var pathname = window.location.pathname.split('/');
		var cleanPathname = [];

		for (var i = 0; i < pathname.length; i++) 
		{
			if ( pathname[i] != '' )
			{
				cleanPathname.push(pathname[i]);
			}
		};

		pathname = undefined;

		var maxScrollTop = $('body').prop('scrollHeight') - $('body').innerHeight();

		$('body').scrollTop( Math.min($('#' + cleanPathname[ cleanPathname.length - 1 ]).offset().top, maxScrollTop) );
	}

	//-----------------HOMENAGEADOS-----------------//






	//-----------------FOTOS-----------------//

	//preenche a Array "fotos" com as URLs presentes na lista de fotos
	$('.page-fotos li').each(function(index, el) {
		fotos.push($(this).find('a').attr('data-img'));
	});

	$('.page-fotos li a').on('click', function() 
	{
		event.preventDefault();
		zoomFoto( $(this).attr('data-i') );
	});	

	$('.page-fotos .foto-full #close').on('click', function() 
	{
		fechaZoomFoto();
	});	

	$('.page-fotos .foto-full #left').bind('click', function (e)
	{
		var iFoto = $(this).closest('.foto-full').find('img').attr('data-i');

		if ( iFoto == 0 )
		{
			iFoto = fotos.length-1;
		}
		else
		{
			iFoto--;
		}

		zoomFoto( iFoto );

	})

	$('.page-fotos .foto-full #right').bind('click', function (e)
	{
		var iFoto = $(this).closest('.foto-full').find('img').attr('data-i');

		if ( iFoto == fotos.length - 1 )
		{
			iFoto = 0;
		}
		else
		{
			iFoto++;
		}

		zoomFoto( iFoto );

	})


	//-----------------FOTOS-----------------//





	$( 'body' ).on( 'click', 'button.dead', function(){ return false; } );
	
	if( $( '#map-canvas' ).length > 0 )
	{
		initializeMap();
	}


	$('.segredo').remove();


	$( '.telefone' ).mask('(00) 0000 0000', {placeholder: "(__) ____ ____"});

	//incluindo o nono dígito
	var maskBehavior = function (val) {
		return val.replace(/\D/g, '').length === 11 ? '00 00000 0000' : '00 0000 00009';
	}

	options = {
		onKeyPress: function(val, e, field, options) {
			field.mask(maskBehavior.apply({}, arguments), options);
		},
		placeholder: "__ ____ ____"
	};
	 
	$('.celular').mask(maskBehavior, options);
	$( '.data' ).mask('00/00/0000', {placeholder: "__/__/____"});


	$('form.js').submit(function(e){return false;e.preventDefault();});

	$('form.js input[type="submit"]').bind('click', 
		function()
		{
			$(this).closest('form').validate({
				submitHandler: function(form)
				{
					$(form).find('#notificacoes')
						.css('pointer-events', 'auto');

					$(form).find('#notificacoes #processando')
						.css('margin-left', '0');

					$(form).find('input[type=submit]')
						.addClass('disabled')
						.attr('disabled', 'disabled');

					$(form).ajaxSubmit({
						type: 'post',
						success: contatoOk
					});

				}, 
				rules: {
					nm: {
						required: true
					},
					ml: {
						email: true,
						required: true
					},
					msgm: {
						required: true
					}
				},
				messages: {
					nm: {
						required: 'Informe seu nome'
					},
					ml: {
						email: 'Este e-mail parece estar incorreto',
						required: 'Precisamos saber seu e-mail'
					},
					mnsg: {
						required: 'Deixe sua mensagem'
					}
				}
			});
		}
	)







	$('.alert button').bind('click', function()
	{
		$(this).closest('.alert').hide();
	})


});

var iCaseHome = 0,
	qtdCasesHome = $('.page-home .noticias ul li').length,
	timeCasesHome = 7000,
	espacoContadorCasesHome = $('.page-home .noticias #contador').height(),
	intervalCase;
	
function preInitIntervalCasesHome ()
{
	$('.page-home .noticias #contador').css('width', qtdCasesHome*espacoContadorCasesHome + 'px');
	$('.page-home .noticias #contador #marca')
	.css({
		'left': ( (iCaseHome * espacoContadorCasesHome) + 3 ) + 'px',
		'right': ( (qtdCasesHome * espacoContadorCasesHome) - 3 - ( iCaseHome * espacoContadorCasesHome ) - 10 ) + 'px'
	})
}

function initIntervalCasesHome ()
{
	intervalCase = setInterval(function()
	{
		passaCaseHome('frente');
	}, timeCasesHome);
}

function passaCaseHome (direcao)
{
	$('.page-home .noticias ul li.highlight').removeClass('highlight');

	$('.page-home .noticias button').blur();

	if(direcao == 'frente')
	{
		if(iCaseHome < qtdCasesHome - 1)
		{
			iCaseHome++;
		}
		else
		{
			iCaseHome = 0;
		}
	}
	else
	{
		if(iCaseHome > 0)
		{
			iCaseHome--;
		}
		else
		{
			iCaseHome = qtdCasesHome - 1;
		}
	}

	//CONTADOR

	$('.page-home .noticias #contador').css('width', qtdCasesHome*espacoContadorCasesHome + 'px');
	$('.page-home .noticias #contador #marca')
	.css({
		'left': ( (iCaseHome * espacoContadorCasesHome) + 3 ) + 'px',
		'right': ( (qtdCasesHome * espacoContadorCasesHome) - 3 - ( iCaseHome * espacoContadorCasesHome ) - 10 ) + 'px'
	})

	//BG HOME

	// $('.page-home .noticias ul').css( 'background', '#' + $('.page-home .noticias ul li:nth-child(' + ( iCaseHome + 1) + ')').attr('data-b') );

	setTimeout(function ()
	{

		$('.page-home .noticias ul li').css('z-index', '-1');
		$('.page-home .noticias ul li:nth-child(' + ( iCaseHome + 1) + ')')
			.addClass('highlight')
			.css('z-index', '1');
	}, 300)

}

function contatoOk (data, data1, data2, data3)
{

	if( data == 'sucesso')
	{
		$('.page-contato form #notificacoes #sucesso')
			.css('margin-left', '0');

		$('.page-contato form')[0].reset();
	}
	else
	{
		$('.page-contato form #notificacoes #erro')
			.css('margin-left', '0');
	}

}

function URLize (s) 
{
    var r=s.toLowerCase();
    r = r.replace(new RegExp(/\s/g),"");
    r = r.replace(new RegExp(/[àáâãäå]/g),"a");
    r = r.replace(new RegExp(/æ/g),"ae");
    r = r.replace(new RegExp(/ç/g),"c");
    r = r.replace(new RegExp(/[èéêë]/g),"e");
    r = r.replace(new RegExp(/[ìíîï]/g),"i");
    r = r.replace(new RegExp(/ñ/g),"n");                
    r = r.replace(new RegExp(/[òóôõö]/g),"o");
    r = r.replace(new RegExp(/œ/g),"oe");
    r = r.replace(new RegExp(/[ùúûü]/g),"u");
    r = r.replace(new RegExp(/[ýÿ]/g),"y");
    r = r.replace(new RegExp(/\W/g),"");
    return r;
};

function pluralize (s, p, n)
{
	if( n != 1)
	{
		return p;
	}
	else
	{
		return s;
	}
}

function initializeMap()
{

	var myLatLgn = new google.maps.LatLng( -16.675207,-49.260501 );

	var mapCanvas = document.getElementById( 'map-canvas' );
	var mapOptions = {
		center: myLatLgn,
		zoom: 16,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		backgroundColor: '7030a0',
		scrollwheel: false
	}
	var map = new google.maps.Map( mapCanvas, mapOptions );

	var marker = new google.maps.Marker({
	    position: myLatLgn,
	    map: map,
	    title:"Hello World!"
	});

}

function showInAnimation () 
{

	$('.hided').each(function()
	{
		if( $( window ).scrollTop() + ( $( window ).height() * 0.8 ) > $(this).offset().top - 300 )
		{
			$(this).addClass('appeared').removeClass('hided');
		}
	})
}

var fotos = [];
function zoomFoto (index)
{
	console.log(index);
	$('.page-fotos .foto-full')
		.css('display', 'block')
		.find('img')
		.attr('src', fotos[index])
		.attr('data-i', index);
}

function fechaZoomFoto () 
{
	$('.page-fotos .foto-full')
		.css('display', 'none')
		.find('img')
		.attr('src', '');
}

var iniScrlWindow;
function abreLista (e)
{
	
	if( $('.page-homenageados').length > 0 )
	{
		// $('body').css('overflow', 'hidden');
		$('.page-homenageados .grade').addClass('lista').removeClass('grade');

		iniScrlWindow = $('body').scrollTop();

		$('.page-homenageados .lista')
			.scrollTop( 
				$('.page-homenageados ' + window.location.hash.split('?')[0]).offset().top - 
				$(window).scrollTop() + 
				$('.page-homenageados .lista').scrollTop() 
			);
	}
}

function fechaLista (e)
{

	$('.page-homenageados').css('height', 'auto');
	$('body').css('overflow', 'visible');
	$('.page-homenageados .lista').addClass('grade').removeClass('lista');

	$(window)
		.scrollTop( 
			iniScrlWindow
		);
}

function nivelaAlturaArtigos ()
{

	console.log('hein');

	if ($('.page-home #artigos article').length > 0)
	{
		var arH = [];

		$('.page-home #artigos article').each(function(index, el) {
			arH.push( $(this).find('img').outerHeight() + $(this).find('#wrap').outerHeight() );
		});
		console.log(arH);

		var maxH = 0;
		for (var i = 0; i < arH.length; i++) {
			maxH = Math.max(maxH, arH[i]);
		};
		console.log(maxH);

		$('.page-home #artigos article').height(maxH);

		maxH = arH = undefined;

	};

}

var limiteFlutuaMenu = $('header .menu').offset().top;
function flutuaMenu()
{
	if( $(window).scrollTop() > limiteFlutuaMenu )
	{
		$('header').addClass('fixtop');
	}
	else
	{
		$('header').removeClass('fixtop');
	}
}
