<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="with=device-width, initial-scale=1.0">
	<title>MIH-MATRIMONY</title>
	<style>
		* {
			margin: 0;
			padding: 0;
			font-family: 'Poppins', sans-serif;
		}

		.header {
			min-height: 100vh;
			width: 100%;
			background-image: url(image/images/banner4.jpg);
			background-position: center;
			background-size: cover;
			position: relative;
		}

		nav {
			display: flex;
			padding: 2% 6%;
			justify-content: space-between;
			align-items: center;

		}

		nav img {
			width: 200px;
		}

		.nav-links {
			flex: 1;
			text-align: right;
		}

		.nav-links ul li {
			list-style: none;
			display: inline-block;
			padding: 8px 12px;
			position: relative;
		}

		.nav-links ul li a {
			color: #fff;
			text-decoration: none;
			font: size 13px;
		}

		.nav-links ul li::after {
			content: '';
			width: 0%;
			height: 2px;
			background: rgb(2, 2, 41);
			display: block;
			margin: auto;
			transition: 0.5s;
		}

		.nav-links ul li:hover::after {
			width: 100%;
		}

		.text-box {
			width: 90%;
			color: #fff;
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			text-align: center;
		}

		.text-box h1 {
			font-size: 62px;
		}

		.text-box p {
			margin: 10px 0 40px;
			font-size: 14px;
			color: #fff;
		}

		.hero-btn {
			display: inline-block;
			text-decoration: none;
			color: #fff;
			border: 1px solid #fff;
			padding: 12px 34px;
			font-size: 13px;
			background: transparent;
			position: relative;
			cursor: pointer;
		}

		.hero-btn:hover {
			border: 1px solid rgb(2, 2, 41);
			background: rgb(2, 2, 41);
			transition: 1s;
		}

		nav.fa {
			display: none;
		}

		@media(max-width: 700px) {
			.text-box h1 {
				font-size: 20px;
			}

			.nav-links ul li {
				display: block;
			}

			.nav-links {
				position: fixed;
				background: rgb(2, 2, 41);
				height: 100vh;
				width: 200px;
				top: 0;
				right: -200px;
				text-align: left;
				z-index: 2;
				transition: 1s;
			}

			nav.fa {
				display: block;
				color: #fff;
				margin: 10px;
				font-size: 22px;
				cursor: pointer;
			}

			.nav-links ul {
				padding: 30px;
			}
		}

		/*-----COURSE-------*/

		.course {
			width: 80%;
			margin: auto;
			text-align: center;
			padding-top: 100px;
		}

		h1 {
			font-size: 36px;
			font-weight: 600;
		}

		p {
			color: #777;
			font-size: 14px;
			font-weight: 300;
			line-height: 22px;
			padding: 10px;
		}

		.row {
			margin-top: 5%;
			display: flex;
			justify-content: space-between;

		}

		.course-col {
			flex-basis: 31%;
			background: #fff3f3;
			border-radius: 10px;
			margin-bottom: 5%;
			padding: 20px 12px;
			box-sizing: border-box;
			transition: 0.5s;
		}

		h3 {
			text-align: center;
			font-weight: 600;
			margin: 10px 0;
		}

		.course-col:hover {
			box-shadow: 0 0 20px 0px rgba(0, 0, 0, 0.2);
		}

		@media(max-width: 700px) {
			.row {
				flex-direction: column;
			}
		}

		/*--------------campus-----------*/

		.campus {
			width: 80%;
			margin: auto;
			text-align: center;
			padding-top: 50px;
		}

		.campus-col {
			flex-basis: 32%;
			border-radius: 10px;
			margin-bottom: 30px;
			position: relative;
			overflow: hidden;
		}

		.campus-col img {
			width: 100%;
			display: block;
		}

		.layer {
			background: transparent;
			height: 100%;
			width: 100%;
			position: absolute;
			top: 0;
			left: 0;
			transition: 0.5s;
		}

		.layer:hover {
			background: rgba(226, 0, 0, 0.7);
		}

		.layer h3 {
			width: 100%;
			font-weight: 500;
			color: #fff;
			font-size: 26px;
			bottom: 0;
			left: 50%;
			transform: translateX(-50%);
			position: absolute;
			opacity: 0;
			transition: 0.5s;
		}

		.layer:hover h3 {
			bottom: 49%;
			opacity: 1;
		}

		/*-------facilities---------*/
		.facilities {
			width: 80%;
			margin: auto;
			text-align: center;
			padding-top: 100px;
		}

		.facilities-col {
			flex-basis: 31%;
			border-radius: 10px;
			margin-bottom: 5%;
			text-align: left;
		}

		.facilities-col img {
			width: 100%;
			border-radius: 10px;
		}

		.facilities-col p {
			padding: 0;
		}

		.facilities-col h3 {
			margin-top: 16px;
			margin-bottom: 15px;
			text-align: left;
		}

		/*-------------testimonials-----------*/
		.testimonials {
			width: 80%;
			margin: auto;
			padding-top: 100px;
			text-align: center;
		}

		.testimonial-col {
			flex-basis: 44%;
			border-radius: 10px;
			margin-bottom: 5%;
			text-align: left;
			background: #fff3f3;
			padding: 25px;
			cursor: pointer;
			display: flex;
		}

		.testimonial-col img {
			height: 40px;
			margin-left: 5px;
			margin-right: 30px;
			border-radius: 50%;

		}

		.testimonial-col P {
			padding: 0;
		}

		.testimonial-col h3 {
			margin-top: 15px;
			text-align: left;
		}

		.testimonial-col.fa {
			color: #f44336
		}

		@media(max-width: 700px) {
			.testimonial-col img {
				margin-left: 0px;
				margin-right: 15px;

			}
		}

		/*-----------Call to action-----------*/
		.cta {
			margin: 100px auto;
			width: 80%;
			background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(images/banner2.jpg);
			background-position: center;
			background-size: cover;
			border-radius: 10px;
			text-align: center;
			padding: 100px 0;
		}

		.cta h1 {
			color: #fff;
			margin-bottom: 40px;
			padding: 0;
		}

		@media(max-width:700px) {
			.cta h1 {
				font-size: 24px;
			}
		}

		.footer {
			text-align: center;
			padding: 30px 0;
		}

		.footer h4 {
			margin-bottom: 25px;
			margin-top: 20px;
			font-weight: 600;
		}

		.icons.fa {
			color: #f44336;
			margin: 0 13px;
			cursor: pointer;
			padding: 18px 0;
		}

		.fa-heart-o {
			color: #f44336
		}
	</style>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
		integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&	display=swap"
		rel="stylesheet">
</head>

<body>