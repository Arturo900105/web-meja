<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Meja</title>
		<link rel="shortcut icon" type="image/png" href="<?php echo base_url('assets/img/favicon.png'); ?>"/>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/font-awesome.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/meja.css'); ?>">
		<script type="text/javascript">
            var title = '';
		</script>
	</head>
	<body>
		<!-- TODO COMIENZA MENÚ PARA ESCRITORIO -->
		<div class="container-fluid">
			<div class="container">
				<div id="original-nav" class="row align-items-center pt-2 pb-2 text-white
							justify-content-sm-left">
					<div href="#about" class="col-sm-auto p-sm-3 d-none d-sm-inline
								p-md-3
				                pt-lg-3 pb-lg-3 pl-lg-2 pr-lg-2
								p-xl-3 ancla order-lg-2">
						NOSOTROS
					</div>
					<div class="d-none d-sm-block border-right-2 bg-white h-25-px order-lg-3"></div>
					<div href="#service" class="col-sm-auto p-sm-3 d-none d-sm-inline
								p-md-3
				                pt-lg-3 pb-lg-3 pl-lg-2 pr-lg-2
								p-xl-3 ancla order-lg-4">
						SERVICIOS
					</div>
					<div class="d-none d-sm-block border-right-2 bg-white h-25-px order-lg-5"></div>
					<div href="#team" class="col-sm-auto p-sm-3 d-none d-sm-inline
				                p-md-3
				                pt-lg-3 pb-lg-3 pl-lg-2 pr-lg-2
				                p-xl-3 ancla order-lg-6">
						GALERÍA
					</div>
					<div class="d-none d-sm-block border-right-2 bg-white h-25-px order-lg-7"></div>
					<div href="#contacto" class="col-sm-auto p-sm-3 d-none d-sm-inline
								p-md-3
				                pt-lg-3 pb-lg-3 pl-lg-2 pr-lg-2
				                p-xl-3 ancla order-lg-8">
						CONTACTO
					</div>
				</div>
			</div>
		</div>
		<!-- TODO TERMINA MENÚ PARA ESCRITORIO -->

		<!-- TODO COMIENZA MENÚ PARA MÓVILES -->
		<div class="container-fluid bg-white fixed-top d-sm-none">
			<div class="row align-items-center no-gutters">
				<div class="col text-left text-uppercase">Meja</div>
				<div class="col-auto ml-auto text-right">
					<i class="fa fa-bars rounded pl-2 pr-2 m-2" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"></i>
				</div>
			</div>
			<div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne">
				<div href="#about" class="pt-1 pb-1 ancla">NOSOTROS</div>
				<div href="#service" class="pt-1 pb-1 ancla">SERVICIOS</div>
				<div href="#team" class="pt-1 pb-1 ancla">GALERÍA</div>
				<div href="#contacto" class="pt-1 pb-1 ancla">CONTACTO</div>
			</div>
		</div>
		<!-- TODO TERMINA MENÚ PARA MÓVILES -->

		<!-- TODO COMIENZA MENÚ FIXED -->
		<div class="container-fluid bg-white fixed-top nav-inactive d-none d-sm-block" id="fixed-nav">
			<div class="container">
				<div class="row align-items-center justify-content-sm-left txt-blue-celebration">
					<div href="#about" class="col-sm-auto p-sm-3
								p-md-3
				                pt-lg-3 pb-lg-3 pl-lg-2 pr-lg-2
								p-xl-3 ancla order-lg-2">
						NOSOTROS
					</div>
					<div class="d-none d-sm-block border-right-2 bg-blue-celebration h-25-px order-lg-3"></div>
					<div href="#service" class="col-sm-auto p-sm-3
								p-md-3
				                pt-lg-3 pb-lg-3 pl-lg-2 pr-lg-2
								p-xl-3 ancla order-lg-4">
						SERVICIOS
					</div>
					<div class="d-none d-sm-block border-right-2 bg-blue-celebration h-25-px order-lg-5"></div>
					<div href="#team" class="col-sm-auto p-sm-3
				                p-md-3
				                pt-lg-3 pb-lg-3 pl-lg-2 pr-lg-2
				                p-xl-3 ancla order-lg-6">
						GALERÍA
					</div>
					<div class="d-none d-sm-block border-right-2 bg-blue-celebration h-25-px order-lg-7"></div>
					<div href="#contacto" class="col-sm-auto p-sm-3
								p-md-3
				                pt-lg-3 pb-lg-3 pl-lg-2 pr-lg-2
				                p-xl-3 ancla order-lg-8">
						CONTACTO
					</div>
				</div>
			</div>
		</div>
		<!-- TODO TERMINA MENÚ FIXED -->

		<div class="container-fluid bg-image p-0">
			<div class="white-line"></div>
			<img class="logo" src="<?php echo base_url('assets/img/1.svg'); ?>" alt="">
		</div>

		<div id="servicios" class="container pt-5 pb-5">
			<div class="row text-white pt-5 pb-5">
				<div class="col-3">
					<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 500 500" style="enable-background:new 0 0 500 500;" xml:space="preserve">
<path class="svg" d="M263.1,440.2V296.6l1-8.6l7.6-1.9c2.9-1,5.7-1.9,8.6-3.8c23.8-9.5,44.7-31.4,56.1-65.6c11.4-35.2,12.3-83.6-3.8-144.5
	c-4.7-16.1-10.4-32.3-17.1-49.4l-137.9,2.8c-3.8,9.5-5.7,19-8.5,27.6c-18,70.3-17.1,124.5-3.8,162.6c13.3,37.1,36.1,59.9,61.8,68.5
	c1.9,0.9,2.9,0.9,4.7,1.9l8.6,1.9v8.6l-1,142.6v7.6l-6.7,2.9l-69.4,26.6h173l-66.6-25.7l-6.6-2.8V440.2z M285.9,304.2L285,432.6
	l87.4,34.2l0,0c3.8,1,6.7,3.8,8.5,7.6c1.9,2.9,2.9,7.6,1,11.4l0,0c-1,4.7-2.8,7.6-6.6,9.5l0,0c-2.9,1.9-6.7,3.8-10.5,3.8H135.7
	c-3.8,0-7.6-1.9-10.4-3.8l0,0c-3.8-1.9-5.7-4.7-7.6-9.5l0,0c-1-3.8,0-8.5,1.9-11.4l0,0c1.9-3.8,4.7-6.7,8.5-7.6l0,0l89.4-35.2V305.2
	c-30.4-11.4-58-39-73.2-81.8c-14.3-42.8-16.2-100.8,3.8-175.9c2.9-11.4,6.7-23.8,10.4-36.1l2.9-7.6h7.6L323,0h7.6l2.9,7.6
	c8.6,20,15.2,40,20,59c18.1,65.6,17.1,117.9,3.8,156.9c-13.3,40.9-39,67.5-68.5,79.9C287.8,303.3,286.9,304.2,285.9,304.2
	L285.9,304.2z" />
</svg>

					<h1 class="h4 pt-3">Eventos</h1>
					<p class="pt-2 pb-2">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de
						texto.
					</p>
					<a href="" class="text-uppercase small text-white">Conoce más
						<i class="fa fa-long-arrow-right ml-3"></i>
					</a>
				</div>
				<div class="col-3">
					<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 500 500" style="enable-background:new 0 0 500 500;" xml:space="preserve">
<path class="svg" d="M286,130.4c0.8-2.3,2.3-5.5,2.3-7.8c0.8-2.3,0.8-4.7,0.8-7.8c0-15.6-14.1-15.6-33.6-15.6l0,0h-4.7h-4.7l0,0
	c-19.5,0-34.3,0-34.3,15.6c0,3.1,0,5.5,0.8,7.8c0,2.3,0.8,5.5,2.3,7.8l3.9,10.1l-10.9,2.3c-46.1,8.6-87.4,30.4-119.4,62.4
	c-32.8,32-55.4,73.4-64.8,119.5l0,0l0,0l0,0l0,0l0,0h32h389.5h32.8c-3.1-38.3-24.2-75.7-54.6-107.7c-36.7-37.5-85.9-66.3-130.4-74.2
	l-11.7-2.3L286,130.4z M306.3,126.5v0.8c45.3,10.9,93.7,39.8,129.6,77.3c35.9,37.5,60.9,83.5,60.9,129.6v8.6h-3.9v8.6v32v8.6h-9.4
	h-466H8.1v-8.6v-32v-8.6H2.7l1.6-10.1c0-2.3,0.8-3.9,0.8-5.5c0-1.6,0.8-3.1,0.8-5.5v-7.8h1.6c10.9-46.8,35.1-89,67.9-121
	c32.8-32,73.4-55.4,119.4-65.6v-0.8c-0.8-3.9-1.6-7.8-1.6-11.7c0-34.3,24.2-33.6,53.1-33.6h4.7h4.7c29.7,0,51.5-0.8,51.5,33.6
	C307.1,118.7,307.1,122.6,306.3,126.5L306.3,126.5z M474.2,360.7H202.5v13.3h271.7V360.7z M27.7,360.7h-1.6v13.3h1.6V360.7z
	 M184.6,366.9H46.4v0.8h138.2V366.9z M94.8,285.7c0.8-2.3,0.8-3.9,0.8-4.7c0.8-1.6,0.8-3.1,1.6-4.7c0.8-3.1,1.6-6.2,2.3-9.4
	c0.8-1.6,0.8-3.1,1.6-4.7c-0.8,0.8-1.6,2.4-2.3,3.9c-1.6,3.1-2.3,6.2-3.9,9.4c-0.8,0.8-0.8,2.3-1.6,3.9c-0.8,2.3-1.6,3.9-1.6,4.7
	l0,0c-0.8,1.6-0.8,2.3-0.8,2.3s0,0,0.8,0l0,0c0,0,0.8,0,1.6,0C94,286.5,94.8,285.7,94.8,285.7L94.8,285.7z M113.5,285
	c0,1.6-0.8,2.3-0.8,3.9l0,0c-1.6,8.6-8.6,14.1-16.4,15.6c-2.3,0.8-6.3,0.8-8.6,0l0,0c-3.9-0.8-7-2.3-9.4-4.7
	c-4.7-4.7-7-11.7-3.9-21.1l0,0c0.8-2.3,0.8-3.9,1.6-5.5c0.8-1.6,1.6-3.1,2.4-4.7c0.8-3.9,2.3-7,3.9-10.2c1.6-3.1,3.1-6.2,5.5-9.4
	c3.1-6.2,7.8-12.5,12.5-18.7c3.9-5.5,8.6-10.9,14.1-15.6l0,0c5.5-4.7,11.7-9.4,18-13.3l0,0c7-3.1,13.3-6.2,20.3-8.6l0,0
	c7-1.6,14.1-3.1,21.1-3.1c7,0,14.8,0,21.9,0.8l-1.6,18.7c-6.3,0-11.7,0-17.2,1.6c-5.5,0.8-10.9,2.3-15.6,4.7l0,0
	c-4.7,2.3-9.4,5.5-13.3,8.6c-4.7,3.1-8.6,7-11.7,10.9c-3.9,4.7-7,8.6-9.4,13.3c-3.1,5.5-5.5,10.9-7,15.6c-1.6,3.1-2.4,5.5-3.1,8.6
	c-0.8,2.3-1.6,5.5-2.3,7.8C114.3,281.8,114.3,282.6,113.5,285L113.5,285z" />
</svg>
					<h1 class="h4 pt-3">Banquetes</h1>
					<p class="pt-2 pb-2">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de
						texto.
					</p>
					<a href="" class="text-uppercase small text-white">Conoce más
						<i class="fa fa-long-arrow-right ml-3"></i>
					</a>
				</div>
				<div class="col-3">
					<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 500 500" style="enable-background:new 0 0 500 500;" xml:space="preserve">
<path class="svg" d="M446.2,109.2c-2.8-49.9-60.4-78-130-88.6c-27.4-4.2-56.9-4.9-85.8-3.5c-28.8,1.4-56.9,6.3-81.5,13.4
	c-52.7,15.5-90,41.5-87.2,78v1.4l-2.1,24.6v11.9v12.6l-11.2-4.9c0,0-0.7,0-0.7-0.7H47h-0.7H35c-2.1,0-3.5,0.7-4.2,2.1
	c-1.4,0.7-2.1,2.8-2.1,4.2v67.5c0,2.1,0.7,3.5,2.1,4.2l0,0c0.7,1.4,2.1,2.1,4.2,2.1h11.2c0.7,0,0.7,0,0.7,0c0.7,0,0.7,0,1.4-0.7
	l11.2-4.2v12v137.1c0,10.5,4.2,20.4,11.2,27.4l0,0c7,7,16.9,11.2,27.4,11.2h8.4h7.7v7.7v24.6c0,9.9,4.2,18.3,10.5,24.6l0,0
	c6.3,6.4,15.5,10.6,25.3,10.6c9.1,0,18.3-4.2,24.6-10.6c6.3-6.3,10.5-14.7,10.5-24.6v-24.6v-7.7h7.7h121.6h8.4v7.7v24.6
	c0,9.9,3.5,18.3,9.8,24.6c6.3,6.4,15.5,10.6,25.3,10.6s18.3-4.2,24.6-10.6c6.3-6.3,10.5-14.7,10.5-24.6v-24.6v-7.7h8.4h8.4
	c10.5,0,19.7-4.2,26.7-11.2c7-7,11.2-16.9,11.2-27.4V241.4v-10.6l10.5,2.8h0.7l0,0c0,0,0,0,0.7,0h11.2c1.4,0,2.8-0.7,4.2-2.1l0,0
	c1.4-0.7,2.1-2.1,2.1-4.2v-67.5c0-1.4-0.7-3.5-2.1-4.2c-1.4-1.4-2.8-2.1-4.2-2.1h-11.2c-0.7,0-0.7,0-0.7,0l0,0l-0.7,0.7l-10.5,2.1
	v-10.5v-11.2l-2.1-24.6V109.2z M319,4.5c76.6,11.2,139.9,45,143.4,104l0,0l2.1,24.6v0.7v3.5h7c6.3,0,11.9,2.8,15.5,6.3
	c4.2,4.2,7,9.8,7,16.1v67.5c0,6.3-2.8,11.9-7,16.2l0,0c-3.5,4.2-9.1,6.3-15.5,6.3h-7v127.9c0,15.4-5.6,28.8-15.5,38.6l0,0
	c-9.8,9.9-23.9,16.2-38.7,16.2h-0.7v16.2c0,14.1-5.6,26.7-14.8,36.6l0,0c-9.8,9.1-22.5,14.7-36.6,14.7s-27.4-5.6-36.6-14.7l0,0
	c-9.1-9.8-15.5-22.5-15.5-36.6v-16.2H201.6v16.2c0,14.1-5.6,26.7-15.5,36.6l0,0c-9.1,9.1-21.8,14.7-35.8,14.7
	c-14.8,0-27.4-5.6-36.6-14.7l0,0c-9.8-9.8-15.5-22.5-15.5-36.6v-16.2l0,0c-15.5,0-28.8-6.3-38.7-16.2l0,0
	c-9.8-9.8-16.2-23.2-16.2-38.6V249.8H35c-6.3,0-11.9-2.1-16.2-6.3l0,0c-4.2-4.2-6.3-9.9-6.3-16.2v-67.5c0-6.3,2.1-11.9,6.3-16.1
	c4.2-3.5,9.8-6.3,16.2-6.3h8.4v-3.5v-0.7l2.1-23.9C42.1,63.5,84.9,31.9,144.7,15C170,7.3,199.5,2.4,229.7,1
	C259.3-1.1,290.2,0.3,319,4.5L319,4.5z M300.7,100.8h68.9c11.2,0,20.4,4.2,28.1,11.3l0,0c7,7,11.2,16.9,11.2,28.1v102.6
	c0,11.2-4.2,21.1-11.2,28.1l0,0c-7.7,7-16.9,11.2-28.1,11.2h-68.9c-11.2,0-21.1-4.2-28.1-11.2l0,0l0,0c-7-7-11.2-16.9-11.2-28.1
	V140.2c0-11.3,4.2-21.1,11.2-28.1l0,0l0,0C279.6,105,289.5,100.8,300.7,100.8L300.7,100.8z M369.6,117h-68.9c-6.3,0-11.9,2.8-16.2,7
	l0,0c-4.2,4.2-7,9.8-7,16.2v102.6c0,6.3,2.8,12.6,7,16.1l0,0c4.2,4.2,9.8,7,16.2,7h68.9c6.3,0,11.9-2.8,16.2-7l0,0
	c4.2-3.5,7-9.8,7-16.1V140.2c0-6.3-2.8-12-7-16.2l0,0C381.6,119.8,375.9,117,369.6,117L369.6,117z M145.4,100.8h68.9
	c10.5,0,20.4,4.2,27.4,11.3l0,0c7.7,7,11.9,16.9,11.9,28.1v102.6c0,11.2-4.2,21.1-11.9,28.1l0,0c-7,7-16.9,11.2-27.4,11.2h-68.9
	c-11.2,0-21.1-4.2-28.1-11.2l0,0c-7-7-11.2-16.9-11.2-28.1V140.2c0-11.3,4.2-21.1,11.2-28.1l0,0C124.3,105,134.1,100.8,145.4,100.8
	L145.4,100.8z M214.3,117h-68.9c-6.3,0-12.7,2.8-16.2,7h-0.7c-3.5,4.2-6.3,9.8-6.3,16.2v102.6c0,6.3,2.8,12.6,6.3,16.1h0.7
	c3.5,4.2,9.8,7,16.2,7h68.9c6.3,0,11.9-2.8,16.2-7l0,0c4.2-3.5,7-9.8,7-16.1V140.2c0-6.3-2.8-12-7-16.2l0,0
	C226.2,119.8,220.6,117,214.3,117L214.3,117z M150.3,402.3c-11.2,0-21.8-4.2-28.8-12l0,0c-7.7-7-12-17.6-12-28.8
	c0-11.2,4.2-21.1,12-28.8l0,0c7-7,17.6-11.9,28.8-11.9c11.2,0,21.1,4.9,28.1,11.9l0,0c7.7,7.7,11.9,17.6,11.9,28.8l0,0
	c0,11.3-4.2,21.8-11.9,28.8l0,0l0,0C171.4,398.1,160.8,402.3,150.3,402.3L150.3,402.3L150.3,402.3z M132.7,379.1
	c4.2,4.2,10.5,7,17.6,7l0,0l0,0c6.3,0,12.6-2.8,16.9-7l0,0c4.2-4.2,7-10.6,7-17.6l0,0c0-6.3-2.8-12.6-7-16.9l0,0
	c-4.2-4.2-10.5-7-16.9-7c-7,0-13.4,2.8-17.6,7l0,0c-4.2,4.2-7,10.5-7,16.9C125.7,368.6,128.5,374.9,132.7,379.1L132.7,379.1z
	 M358.4,402.3c-11.2,0-21.8-4.2-28.8-12c-7.7-7-11.9-17.6-11.9-28.8c0-11.2,4.2-21.1,11.9-28.8c7-7,17.6-11.9,28.8-11.9
	s21.1,4.9,28.8,11.9l0,0c7,7.7,11.9,17.6,11.9,28.8c0,11.3-4.9,21.8-11.9,28.8l0,0C379.4,398.1,369.6,402.3,358.4,402.3L358.4,402.3
	z M340.8,379.1c4.9,4.2,10.5,7,17.6,7c6.3,0,12.7-2.8,16.9-7l0,0c4.9-4.2,7-10.6,7-17.6c0-6.3-2.1-12.6-7-16.9l0,0
	c-4.2-4.2-10.5-7-16.9-7c-7,0-12.7,2.8-17.6,7c-4.2,4.2-7,10.5-7,16.9C333.7,368.6,336.6,374.9,340.8,379.1L340.8,379.1z" />
</svg>

					<h1 class="h4 pt-3">Congresos</h1>
					<p class="pt-2 pb-2">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de
						texto.
					</p>
					<a href="" class="text-uppercase small text-white">Conoce más
						<i class="fa fa-long-arrow-right ml-3"></i>
					</a>
				</div>
				<div class="col-3">
					<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 500 500" style="enable-background:new 0 0 500 500;" xml:space="preserve">
<g>
	<path class="svg" d="M126.1,265.3c-8.8-6.1-18.9-10.1-29.6-12.1c8.1-2.7,15.5-7.4,21.6-13.5c10.8-10.1,16.8-24.3,16.8-39.8
		c0-14.8-6.1-28.3-15.5-38.4c-44.3-36-80.2-0.7-80.2-0.7C29.1,171,23,184.5,23,200c0,15.5,6.1,29.6,16.2,39.8
		c6.7,6.1,14.8,11.4,23.6,14.1c-15.5,3.4-29,10.8-39.7,21.6C8.2,290.2-0.6,309.8-0.6,332v49.2c0,8.8,3.4,16.2,8.8,21.6
		c5.4,5.4,13.5,8.8,21.6,8.8h103.7h7.4v-7.4V361c0-9.4,1.3-18.8,4-27.6c2-8.8,6.1-17.5,10.8-25.6l2-3.4l-2-3.4
		C149.7,286.2,139.6,274.1,126.1,265.3z M50.6,228.3c-7.4-6.7-12.1-16.8-12.1-28.3c0-10.8,4.7-20.9,12.1-28.3
		c6.7-7.4,16.8-11.5,28.3-11.5c10.8,0,20.9,4.1,28.3,11.5c7.4,7.4,11.5,17.5,11.5,28.3c0,11.5-4.1,21.6-11.5,28.3
		c-7.4,7.4-17.5,12.1-28.3,12.1C67.5,240.4,57.4,235.7,50.6,228.3z M129.5,329.3c-2.7,10.1-4.1,20.9-4.1,31.7v35H29.8
		c-4,0-7.4-1.3-10.1-4c-2.7-2.7-4.7-6.8-4.7-10.8V332c0-17.5,7.4-33.7,18.9-45.8c11.5-11.4,27.6-18.8,45.1-18.8h3.4
		c12.8,0,25.6,4,35.7,10.8c9.4,6.7,16.8,15.5,22.2,25.6C135.5,311.8,132.2,320.6,129.5,329.3z" />
	<path class="svg" d="M476.4,274.7c-11.5-11.4-26.3-19.5-42.4-22.2c8.1-3.4,15.5-8.1,21.6-14.1h0.7c10.1-10.1,16.2-23.6,16.2-39.1
		c0-15.5-6.1-29.6-16.2-39.8c-10.1-9.4-22.9-15.5-37.1-16.2c0.2-0.1,0.4-0.1,0.7-0.1c-12.4-0.7-27.1,3-43.1,16.3
		c-10.1,10.1-16.2,24.3-16.2,39.8c0,15.5,6.1,29,16.2,39.1c6.7,6.7,14.8,11.4,23.6,14.1c-10.1,2-19.5,6.1-27.6,12.1
		c-13.5,8.7-23.6,21.5-29.6,35.7l-1.3,4l1.3,3.4c4.7,8.1,8.7,16.2,11.5,25.6c2,8.8,3.4,18.2,3.4,27.6v41.8v7.4l7.4,0.7h0.7h0.7h0.7
		h107.8c6.7,0,12.8-2.7,17.5-7.4c4.7-4,7.4-10.1,7.4-16.8v-55.9C500,309.1,490.6,288.9,476.4,274.7z M388.2,227.6
		c-7.4-7.4-12.1-17.5-12.1-28.3c0-11.4,4.7-21.6,12.1-28.3c6.7-7.4,16.8-12.1,28.3-12.1c10.8,0,20.9,4.7,28.3,12.1
		c7.4,6.7,12.1,16.8,12.1,28.3c0,10.8-4.7,20.9-12.1,28.3c-7.4,7.4-17.5,11.5-28.3,11.5C405,239,394.9,235,388.2,227.6z
		 M483.8,386.6c0,2-0.7,4-2,6.1c-2,1.3-4.1,2.7-6.7,2.7H373.4V361c0-10.8-1.3-21.5-4-31.7c-2.7-9.4-6.1-18.2-10.8-26.3
		c5.4-10.1,12.8-18.9,22.9-25.6c10.1-6.7,22.2-10.8,35-10.8h3.4c17.5,0,33.7,7.4,45.1,18.9c12.1,11.4,18.9,27.6,18.9,45.1V386.6z" />
	<path class="svg" d="M251.4,256.5h-0.7c18.2-1.3,35-8.8,47.2-20.9c13.5-13.5,21.6-31.7,21.6-51.2c0-20.2-8.1-38.4-21.6-51.2
		c-12.8-13.5-31-21.5-51.2-21.5c-19.5,0-37.7,8.1-51.2,21.5c-12.8,12.8-20.9,31-20.9,51.2c0,19.5,8.1,37.7,20.9,51.2
		c12.8,12.1,29.6,20.2,48.5,20.9c-26.9,0.7-51.9,12.1-70.7,31C154.4,306.4,143,332,143,361v66c0,10.8,4,20.2,11.5,27.6
		c6.7,6.7,16.2,10.8,26.9,10.8h144.8c8.1,0,15.5-3.4,20.9-8.8c6.1-5.4,9.4-12.8,9.4-20.9V361c0-29-12.1-54.6-31-73.4
		C306.7,268,280.4,256.5,251.4,256.5z M206.9,224.2c-10.1-10.1-16.8-24.3-16.8-39.8c0-16.2,6.7-30.3,16.8-40.4
		c10.1-10.1,24.3-16.2,39.7-16.2c16.2,0,30.3,6.1,40.4,16.2c10.1,10.1,16.2,24.3,16.2,40.4c0,15.5-6.1,29.7-16.2,39.8
		c-10.1,10.1-24.3,16.8-40.4,16.8C231.2,241.1,217.1,234.3,206.9,224.2z M340.3,435.7c0,3.4-1.3,7.4-4,10.1c-2.7,2.7-6.1,4-10.1,4
		H181.3c-6.1,0-12.1-2.7-16.2-6.7c-4-4-6.7-9.4-6.7-16.2v-66c0-24.2,10.1-46.5,26.3-62.6c16.2-16.2,38.4-26.3,62.7-26.3h4
		c24.9,0,47.2,10.1,63.3,26.3c15.5,16.2,25.6,38.4,25.6,62.6V435.7z" />
</g>
</svg>
					<h1 class="h4 pt-3">Convenciones</h1>
					<p class="pt-2 pb-2">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de
						texto.
					</p>
					<a href="" class="text-uppercase small text-white">Conoce más
						<i class="fa fa-long-arrow-right ml-3"></i>
					</a>
				</div>
			</div>
		</div>

		<div id="nosotros" class="container">
			<div class="row no-gutters">
				<div class="col-md-4 bg-white">

				</div>
				<div class="col-md-8 over-hide over-image">
					<img class="w-100" src="<?php echo base_url('assets/img/meja_1.jpg'); ?>" alt="Meja misión">
				</div>
			</div>
			<div class="row no-gutters">
				<div class="col-md-8 over-hide over-image">
					<img class="w-100" src="<?php echo base_url('assets/img/meja_2.jpg'); ?>" alt="Meja contamos con">
				</div>
				<div class="col-md-4 bg-white">

				</div>
			</div>
		</div>
		<div class="container-fluid bg-white">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-md-4 bg-white">
						<img class="w-100" src="<?php echo base_url('assets/img/meja_4.jpg'); ?>" alt="Meja experiencia">
					</div>
					<div class="col-md-8">
						<div class="h-50 over-hide">
							<img class="w-100" src="<?php echo base_url('assets/img/meja_3.jpg'); ?>" alt="Meja experiencia">
						</div>
						<div class="h-50 w-100 bg-black over-hide">

						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="galeria" class="container-fluid p-relative p-0">
			<img class="w-100" src="<?php echo base_url('assets/img/galeria_1.jpg'); ?>" alt="Meja galeria 1">
			<div class="row no-gutters">
				<div class="l-triangle"></div>
				<div class="r-triangle"></div>
			</div>
		</div>

		<div id="contacto" class="container-fluid bg-blue-meja pt-5 pb-5">
			<div class="container pt-5 pb-5">
				<div class="row">
					<div class="col-md-6 text-white">
						<h5>Acércate a nosotros y déjate consentir</h5>
						<p class="media mt-3 text-justify">
							Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem
							Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un
							impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de
							textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo
							sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos
							electrónicos, quedando esencialmente igual al original.
						</p>
					</div>
					<div class="col-md-6"></div>
				</div>
			</div>
		</div>


		<script type="application/javascript" src="<?php echo base_url('assets/js/jquery-3.2.1.min.js'); ?>"></script>
		<script type="application/javascript" src="<?php echo base_url('assets/js/tether.min.js'); ?>"></script>
		<script type="application/javascript" src="<?php echo base_url('assets/js/popper.min.js'); ?>"></script>
		<script type="application/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
		<script type="application/javascript" src="<?php echo base_url('assets/js/meja.js'); ?>"></script>
	</body>
</html>