<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Mixen: Boosting Brands">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Colchones de Chihuahua</title>
	<link rel="icon" type="image/png" href="{{ asset('assets/images/icon.png') }}">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
	<link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/mixen/style.css') }}">
</head>
<body>
	<!-- Navegación -->
	<nav>
		<div>
			<a class="item-menu" href="#inicio">
				<img src="{{ asset('assets/images/logo.png') }}" alt="Isotipo: Colchon.es">
			</a>
			<ul>
				<li><a class="item-menu" href="#nosotros">Nosotros</a></li>
				<li><a class="item-menu" href="#techs">Tecnología</a></li>
				<li><a class="item-menu" href="#tecnologias">Productos</a></li>
				<li><a class="item-menu" href="#contacto">Contacto</a></li>
				<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
			</ul>
		</div>
	</nav>
	<!-- Cabecera -->
	<header id="inicio" style="background-image: url('{{ asset('assets/images/cabecera/1.jpg') }}');">
		<div>
			<h1>Descuentos de hasta 50%
			<strong>en colchones:</strong>
			 Serta, Spring Air y Wendy</h1>
			<span><strong>*</strong> Sujeto a existencias</span>
			<span><strong>*</strong> Aplican restricciones</span>
		</div>
	</header>
	<!-- Logos -->
	<div id="logos">
		<div>
			<div><img src="{{ asset('assets/images/logos/1.png') }}"></div>
			<div><img src="{{ asset('assets/images/logos/2.png') }}"></div>
			<div><img src="{{ asset('assets/images/logos/3.png') }}"></div>
			<div><img src="{{ asset('assets/images/logos/4.png') }}"></div>
			<div><img src="{{ asset('assets/images/logos/5.png') }}"></div>
		</div>
	</div>
	<!-- Nosotros -->
	<section id="nosotros">
		<div>
			<div>
				<h1>Conoce de 
				<span>nuestra historia</span></h1>
				<p>Por lo general tendemos a no valorar la importancia de un buen descanso a pesar de que al menos un tercio de nuestra vida la pasamos durmiendo.</p>
				<p>El descanso recupera y restaura nuestro cuerpo. Nuestra memoria mejora, nuestro sistema inmune se fortalece, mejora la concentración y capacidad mental y tendrás mas energía y mejor humor. Es cuando toma sentido la tan usada frase “consultar con la almohada”, ya que un buen sueño ayuda a tomar mejores decisiones.</p>
				<p>Somos una empresa especializada en proporcionar a nuestros clientes la principal herramienta para un buen descanso: el colchón adecuado a cada necesidad y presupuesto.</p>
				<p>Cuarenta años de experiencia nos respaldan y nos dan los conocimientos necesarios para escoger, de cada marca que comercializamos, los mejores modelos sin llegar a precios excesivos.</p>
				<p>Tenemos además, los mejores precios de mayoreo para hoteles, albergues, minas, centros de rehabilitación, asilos, gobierno, etc.</p>
				<p>Nuestra intención es servirles, contáctenos!</p>
				<div>
					<a class="item-menu" href="#contacto">Contáctanos</a>
				</div>
			</div>
		</div>
	</section>
	<!-- Tecnologías -->
	<section id="techs" style="background-image: url('{{ asset('assets/images/techs/fondo3.jpg') }}');">
		<div>
			<h2>Tecnología</h2>
			<div>
				<p>Desde los primeros colchones de hojas y arbustos que improvisaban los primeros hombres en la tierra, en una búsqueda de la comodidad al descansar después de un día de ardua vida y constante vagar en búsqueda de piezas de caza, la colchonería ha ido evolucionando hasta llegar a lo que tenemos ahora: una gran variedad en sistemas de fabricación, telas, acojinamientos, tamaños e incluso, en algunos casos formas.</p>
				<p>Las fabricas colchoneras mexicanas cuentan con la mejor tecnología a nivel mundial, así como con personal cuidadosamente capacitado, lo que da como resultado productos de altísima calidad comparables y en muchos casos superiores, a los de otros países. En colchon.es, ponemos a su disposición colchones de espuma, memory foam y gel, así como colchones de resortes ya sea del tipo bicónico, continua o embolsado. Tenemos en distintos acojinamientos, telas, acabados, durezas y confort.</p>
				<p>Contamos también con líneas institucionales para trabajo rudo. Camas, literas y colchones que se utilizan en hoteles, minas, albergues, asilos, hospitales, etc. Así como resistentes bases para cama acojinadas y toda clase de blancos.</p>
			</div>
		</div>
	</section>
	<!-- Productos -->
	<section id="tecnologias">
		<ol class="carousel-indicators">
			<li><a data-tech="#Tech-1" href="#" class="active"></a></li>
			<li><a data-tech="#Tech-2" href="#"></a></li>
			<li><a data-tech="#Tech-3" href="#"></a></li>
		</ol>
		<div>
			<div class="active" id="Tech-1">
				<div>
					<img src="{{ asset('assets/images/tecnologias/1.png') }}">
				</div>
				<div>
					<div><img src="{{ asset('assets/images/logos/3.png') }}"></div>
					<h3>Descanso
					<span>Simplemente perfecto</span></h3>
					<p>Avalado por el colegio de quiroprácticos de México.
					¡Conoce nuestros modelos!</p>
					<ul>
						<li><a href="#" class="btn-modal" data-modal="#Modal-1">Júpiter</a></li>
						<li><a href="#" class="btn-modal" data-modal="#Modal-2">Piscis</a></li>
					</ul>
				</div>
			</div>
			<div id="Tech-2">
				<div>
					<img src="{{ asset('assets/images/tecnologias/2.png') }}">
				</div>
				<div>
					<div><img src="{{ asset('assets/images/logos/1.png') }}"></div>
					<h3>Descanso
					<span>Simplemente perfecto</span></h3>
					<p>Marca No.1 en Estados Unidos con mas de 80 años
					de experiencia. Siempre confortable!</p>
					<ul>
						<li><a href="#" class="btn-modal" data-modal="#Modal-4">Victory</a></li>
						<li><a href="#" class="btn-modal" data-modal="#Modal-5">Regina</a></li>
						<li><a href="#" class="btn-modal" data-modal="#Modal-6">Icon</a></li>
					</ul>
				</div>
			</div>
			<div id="Tech-3">
				<div>
					<img src="{{ asset('assets/images/tecnologias/3.png') }}">
				</div>
				<div>
					<div><img src="{{ asset('assets/images/logos/2.png') }}"></div>
					<h3>Descanso
					<span>Simplemente perfecto</span></h3>
					<p>Una actitud positiva comienza con un buen descanso!</p>
					<ul>
						<li><a href="#" class="btn-modal" data-modal="#Modal-7">Amatista</a></li>
						<li><a href="#" class="btn-modal" data-modal="#Modal-8">Hotelero</a></li>
					</ul>
				</div>
			</div>
			<span>* Estas son imágenes de algunos de los productos que se manejan,
			además de colchonería de hule espuma, literas, bases de cama y blancos para uso doméstico e institucional.</span>
		</div>
	</section>
	<!-- Productos -->
	<div id="productos">
		<div>
			<img src="{{ asset('assets/images/productos/logo.png') }}" alt="Envío gratis a toda la ciudad">
		</div>
		<div>
			<img src="{{ asset('assets/images/productos/2.jpg') }}" alt="Las mejores marcas y la mejor calidad">
			<h3>Las mejores marcas
			<span>y la mejor calidad</span></h3>
			<p>Cuarenta años de experiencia nos respaldan y nos dan los conocimientos necesarios para escoger, de cada marca que comercializamos, los mejores modelos sin llegar a precios excesivos.</p>
			<div><a class="item-menu" href="#contacto">Cotiza ahora</a></div>
		</div>
		<div>
			<img src="{{ asset('assets/images/productos/3.jpg') }}" alt="Las mejores marcas y la mejor calidad">
			<h3>El descanso que tú
			<span>te mereces</span></h3>
			<p>Somos una empresa especializada en proporcionar a nuestros clientes la principal herramienta para un buen descanso: el colchón adecuado a cada necesidad y presupuesto.</p>
			<div><a class="item-menu" href="#contacto">Cotiza ahora</a></div>
		</div>
	</div>
	<!-- Contacto -->
	<section id="contacto">
		<map name="Mapa de Colchones de Chihuahua"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3499.9101815866416!2d-106.11692748450388!3d28.692333288121777!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86ea424bb2861367%3A0xb5729d7c5ff181cf!2sAv.+Tecnologico+10101%2C+24+de+Junio%2C+31126+Chihuahua%2C+Chih.!5e0!3m2!1ses-419!2smx!4v1540501629796" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe></map>
		<div>
			<h1>Contáctanos</h1>
			<sub>Nosotros te ayudamos</sub>
			<div>
				<ul>
					<li>Av. Tecnológico, 10101-B,
					Colonia Deportista</li>
					<li><a href="tel:6144130457">Tel.413 0457</a></li>
					<li><a href="tel:6144826600">Tel.482 6600</a></li>
					<li><a href="mailto:1santarosa@prodigy.net.mx">1santarosa@prodigy.net.mx</a></li>
					<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
				</ul>
				<form action="#" id="FormContact" method="POST">
					<div>
						<input type="text" name="name" id="name" placeholder="Nombre" autocomplete="off">
						<div id="error_name"></div>
					</div>
					<div>
						<input type="tel" name="tel" id="tel" placeholder="Teléfono: 000-000000" autocomplete="off">
						<div id="error_tel"></div>
					</div>
					<div>
						<input type="email" name="email" id="email" placeholder="Correo Electrónico" autocomplete="off">
						<div id="error_email"></div>
					</div>
					<div>
						<input type="text" name="mattress" id="mattress" placeholder="Tamaño del Colchón" autocomplete="off">
						<div id="error_mattress"></div>
					</div>
					<div>
						<textarea name="message" id="message" rows="5" placeholder="Mensaje"></textarea>
						<div id="error_message"></div>
					</div>
					<div>
						<button type="submit">Contactar</button>
					</div>
					<figure>
						<img src="{{ asset('assets/images/loader.svg') }}">
					</figure>
					{{ csrf_field() }}
				</form>
			</div>
		</div>
	</section>
	<!-- Pie -->
	<footer>
		<div>
			<img src="assets/images/logo-blanco.png" alt="Isotipo: Colchon.es">
		</div>
		<div>
			Todos los derechos reservados | <strong>Made by:</strong> <a href="https://mixen.mx" target="_blank"><span class="icon-3"></span></a>
		</div>
	</footer>
	<!-- Botón para navegación -->
	<button>
		<span></span>
		<span></span>
		<span></span>
	</button>
	<!-- WhatsApp -->
	<a href="https://wa.me/5216141424086?text=Hola%20Colchones" target="_blank"><i class="fab fa-whatsapp"></i></a>
	{{-- Modales --}}
	<div id="Modal-1" class="modal" style="display: none;">
		<div class="modal-body">
			<a href="#" class="close">
				<span></span>
				<span></span>
			</a>
			<span class="modal-title"></span>
			<div class="modal-content"></div>
		</div>
	</div>
	<!-- JavaScript -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="{{ asset('assets/js/app.js') }}"></script>
	<script>
		$('#FormContact').on('submit', function(event) {
			event.preventDefault();
			let ID   = $(this).serialize();
			let Form = $(this);

			$(Form).find('figure').slideDown('normal');

			$.ajax({
				url: '{{ url('/contacto') }}',
				type: 'POST',
				dataType: 'json',
				data: ID,
				cache: false,
			})
			.done(function(data) {
				if (data.send == true) {
					alert('Gracias por escribirnos, nos ponemos en contacto a la brevedad.');
					$(Form).find('#name').val('');
					$(Form).find('#mattress').val('');
					$(Form).find('#email').val('');
					$(Form).find('#tel').val('');
					$(Form).find('#message').val('');
				} else if (data.fail == true) {
					$.each(data.errors, function(index, val) {
						$('#' + index).focusin(function() {
							$('#error_' + index).slideUp('normal');
						});
						$('#error_' + index).html(val).delay(1000).slideDown('normal');
					});
				}
			})
			.fail(function() {
				alert('¡Ocurrió un error inesperado, inténtalo más tarde!');
			})
			.always(function(data) {
				if (data.send == true) {
					$(Form).find('figure').slideUp('normal');
				}

				if (data.fail == true) {
					$(Form).find('figure').delay(1000).slideUp('normal');
				}
			});
		});
	</script>
</body>
</html>