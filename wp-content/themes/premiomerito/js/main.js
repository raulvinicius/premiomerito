$(document).ready(function() {


	$( window ).scroll(function() 
	{
		setTimeout(showInAnimation,400);

	});
	$( window ).trigger('scroll');

	$( window ).resize(function(e) 
	{
		//do something
		nivelaAltura( $('.page-home #artigos ul li article') );
	});
	$( window ).trigger('resize');


	$( window ).on('hashchange', function(e) 
	{
		//SE ESTIVER NA PÁGINA "HOMENAGEADOS" E HOUVER HASHTAG
		if (window.location.href.indexOf('/homenageados/') && window.location.href.indexOf('#') > -1) 
		{
			abreLista();
		} 
		else if (window.location.href.indexOf('/homenageados/') && window.location.href.indexOf('#') <= -1)
		{
			fechaLista();
		};
	});

	$( window ).trigger('hashchange');



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
		url = trataURL();

		if ('ano' in url['search'])
		{
			url['search']['ano'] = $(this).val();
		}
		else
		{
			url['search']['ano'] = $(this).val();
		}

		var strSearch = '';
		$.each(url['search'], function (index, value)
		{
			strSearch += '&' + index + '=' + value;
		});
		strSearch = '?' + strSearch.substring(1);

		window.location = url['url'] + url['hash'] + strSearch;
	});

	//-----------------SELECT EDICAO-----------------//




	//-----------------HOMENAGEADOS-----------------//

	$('.page-homenageados #abre-lista').on('click', function(event) {
		event.preventDefault();
		url = trataURL();

		url['hash'] = '#' + $(this).closest('li').attr('id');

		var strSearch = '';

		if( !$.isEmptyObject( url['search'] ) )
		{
			$.each(url['search'], function (index, value)
			{
				strSearch += '&' + index + '=' + value;
			});
			strSearch = '?' + strSearch.substring(1);
		}

		window.location.href = url['url'] + url['hash'] + strSearch
		// abreLista();
	});

/*	$('.page-homenageados #fecha-lista').on('click', function(event) {
		event.preventDefault();

		url = trataURL();

		url['hash'] = '';

		var strSearch = '';

		if( !$.isEmptyObject( url['search'] ) )
		{
			$.each(url['search'], function (index, value)
			{
				strSearch += '&' + index + '=' + value;
			});
			strSearch = '?' + strSearch.substring(1);
		}

		window.location.href = url['url'] + url['hash'] + strSearch
		// fechaLista();
	});
*/
	//-----------------HOMENAGEADOS-----------------//






	//-----------------FOTOS-----------------//

	$('.page-fotos li a').on('click', function() 
	{
		event.preventDefault();
		zoomFoto( $(this).attr('data-img') );
	});	

	$('.page-fotos .foto-full #close').on('click', function() 
	{
		fechaZoomFoto();
	});	

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

function zoomFoto (url) 
{
	$('.page-fotos .foto-full')
		.css('display', 'block')
		.find('img')
		.attr('src', url);
}

function fechaZoomFoto () 
{
	$('.page-fotos .foto-full')
		.css('display', 'none')
		.find('img')
		.attr('src', '');
}

var scrlWindow;
function abreLista (e)
{
	
	if( $('.page-homenageados').length > 0 )
	{
		$('.page-homenageados').height( $('.page-homenageados').height() );
		$('body').css('overflow', 'hidden');
		$('.page-homenageados .grade').addClass('lista').removeClass('grade');

		scrlWindow = $(window).scrollTop();

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
			scrlWindow
		);
}

function trataURL () 
{
	var hash = '';
	var search = '';

	// SE HÁ HASH
	if ( window.location.hash != '' )
	{
		hash = window.location.hash.split('?');

		// SE HÁ VARIÁVEIS DENTRO DA HASH, COLOCA EM SEARCH
		if( hash.length > 1 )
		{
			search = '?' + hash[1];
		}

		hash = hash[0];
	} 
	else if ( window.location.search != '' ) // SE HÁ SÓ VARIÁVEIS NA URL, COLOCA NA SEARCH
	{
		search = window.location.search;
	}

	// VERIFICA SE HÁ MAIS DE UMA VARIÁVEL
	if ( search != '' && search.substring(1).indexOf('&') > -1 )
	{
		tmpSearch = search.substring(1).split('&');
		search = {};
		for (var i = 0; i < tmpSearch.length; i++) 
		{
			search[tmpSearch[i].split('=')[0]] = tmpSearch[i].split('=')[1];
		};

	}
	else if (search != '' && search.substring(1).indexOf('&') <= -1)
	{
		tmpSearch = search.substring(1).split('=');

		search = {};
		search[tmpSearch[0]] = tmpSearch[1];
	}

	if ( search == '' )
	{
		search = {};
	}


	return {
		'url'		: 		window.location.origin + window.location.pathname,
		'hash'		: 		hash,
		'search'	: 		search
	};
}

function nivelaAltura (el)
{

	if ($.type(el) === 'object' & el.length > 0)
	{
		var maxH = 0;
		el.each(function(index, elm) 
		{
			maxH = Math.max( maxH, $(elm).outerHeight() )
		});
		el.outerHeight(maxH);
		maxH = undefined;
	};

}
