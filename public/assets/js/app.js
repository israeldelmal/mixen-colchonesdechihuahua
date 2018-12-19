// Navegación
$('.item-menu').on('click', function(event) {
	event.preventDefault();
	let Item = $(this).attr('href');

	$('body > button > span').removeClass('active-button');

	$('body > nav').removeClass('active-nav');
	
	if ($(window).width() < 770) {
		$('body, html').stop(true, true).animate({
			scrollTop: $(Item).offset().top
		}, 1000);
	} else {
		$('body, html').stop(true, true).animate({
			scrollTop: $(Item).offset().top - 100
		}, 1000);
	}
});

$('body > button').on('click', function(event) {
	event.preventDefault();
	$(this).find('span').toggleClass('active-button');
	$('body > nav').toggleClass('active-nav');
});

// Cabecera
$('body > header > ol > li > a').on('click', function(event) {
	event.preventDefault();
	let Data = $(this).attr('data-header');
	let ID   = $(Data);

	$('body > header > ol > li > a').removeClass('active');
	$(this).addClass('active');

	$('body > header > div > div').hide();
	ID.fadeIn('normal');
});

// Tecnologías
$('#tecnologias > ol > li > a').on('click', function(event) {
	event.preventDefault();
	let Data = $(this).attr('data-tech');
	let ID   = $(Data);

	$('#tecnologias > ol > li > a').removeClass('active');
	$(this).addClass('active');

	$('#tecnologias > div > div').hide();
	ID.addClass('active').fadeIn('normal');	
});

// Modales
$('.btn-modal').on('click', function(event) {
	event.preventDefault();
	let ID    = $(this).attr('data-modal');
	let Modal = $('.modal');

	$('body').css('overflow', 'hidden');

	if (ID == '#Modal-1') {
		$('.modal-title').text('Spring Air: Júpiter');
		$('.modal-content').html('<img src="assets/images/colchones/jupiter.png"><ul><span>Características:</span><li>Estructura en resorte tipo bonnell</li><li>Turn: doble colchoneta; se puede voltear aprovechando así ambas caras</li><li>Telas importadas, hipoalergénicas frescas y libres de ácaros</li><li>Garantía: 5 años sobre defectos de fabricación</li></ul>');
	}

	if (ID == '#Modal-2') {
		$('.modal-title').text('Spring Air: Piscis');
		$('.modal-content').html('<img src="assets/images/colchones/piscis.png"><ul><span>Características:</span><li>Estructura en resorte tipo bonnell</li><li>Never turn: no hay necesidad de voltearlo. soporte en una sola cara</li><li>Telas importadas, hipoalergénicas, frescas y libres de ácaros</li><li>Garantía por 5 años sobre defectos de fabricación</li></ul>');
	}

	if (ID == '#Modal-3') {
		$('.modal-title').text('Spring Air: Lancaster');
		$('.modal-content').html('<img src="assets/images/colchones/lancaster.png"><ul><span>Características:</span><li>Estructura en resorte continuo</li><li>Tecnología performance never turn</li><li>Telas importadas, hipoalergénicas, frescas y libres de ácaros</li></ul>');
	}

	if (ID == '#Modal-4') {
		$('.modal-title').text('Serta: Victory');
		$('.modal-content').html('<img src="assets/images/tecnologias/2.png"><ul><span>Características:</span><li>Unidad posture spiral de alambre continuo</li><li>Never turn</li><li>Telas en tejido de punto suave con algodón. Anti ácaros y bacterias</li><li>Garantía de 5 años contra defectos de fabricación</li></ul>');
	}

	if (ID == '#Modal-5') {
		$('.modal-title').text('Serta: Regina');
		$('.modal-content').html('<img src="assets/images/colchones/regina.png"><ul><span>Características:</span><li>Unidad de resortes embolsados individualmente</li><li>Acojinamientos en viscogel y memoryfoam</li><li>Colchoneta euro top no vuelta</li><li>Tela en tejido de punto suave anti ácaros y bacterias</li><li>Garantía: 10 años contra defectos de fabricación</li></ul>');
	}

	if (ID == '#Modal-6') {
		$('.modal-title').text('Serta: Icon');
		$('.modal-content').html('<img src="assets/images/colchones/icon.png"><ul><span>Características:</span><li>Fabricado en latex y memoryfoam</li><li>Desplegable (se entrega en caja)</li><li>Tela tejida stretch anti ácaros y bacterias</li><li>Garantía de 10 años contra defectos de fabricación</li></ul>');
	}

	if (ID == '#Modal-7') {
		$('.modal-title').text('Wendy: Amatista');
		$('.modal-content').html('<img src="assets/images/colchones/amatista.png"><ul><span>Características:</span><li>Estructura en tecnología quiropedic de resorte continuo</li><li>Disponible en una o dos colchonetas tipo pillow top</li><li>Telas en tejido de punto, frescas, anti-ácaros y bacterias</li><li>Acojinamiento en espuma ecológica natural flex</li><li>Garantía de 5 años sobre defectos de fabricación</li></ul>');
	}

	if (ID == '#Modal-8') {
		$('.modal-title').text('Wendy: Hotelero');
		$('.modal-content').html('<img src="assets/images/colchones/hoteleroo.png"><ul><span>Características:</span><li>Tecnología quiropedic de resorte continuo</li><li>Puede usarse por ambas caras</li><li>Extra-soporte para durabilidad por muchos años</li><li>Tela jacquard listado de alta resistencia</li><li>Acojinamiento en espuma ecológica natural flex</li><li>Garantía de 10 años en juego de boxspring y colchón</li></ul>');
	}

	Modal.fadeIn('fast');

	Modal.find('.close').on('click', function(event) {
		event.preventDefault();
		Modal.fadeOut('fast', function() {
			$('body').css('overflow', 'auto');
			$('.modal-title').text('');
			$('.modal-img').attr('src', '#');
			$('.modal-content').html('');
		});
	});
});