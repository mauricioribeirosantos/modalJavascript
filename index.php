<?php
	//teste com formulário programando de forma procedural
	

?>

<!DOCTYPE html>
<html>
<head>
	<title>teste com formulario</title>
	<style>
		button {
			cursor: pointer;
			background-color: #0000FF;
			color: #fff;
			border-radius: 7px;
			border: none;
			width: 70px;
			height: 40px;
			transition: 0.5s;
		}

		button:hover {
			background-color: #fff;
			color:  #0000FF;
			transition: 0.5s;
			font-weight:400;
			border: 1px solid #0000ff;
		}

		.modal-container {
			width: 100%;
			height: 700px;
			background-color: rgba(0,0,0,.3);
			position: fixed;
			top: 0px;
			left: 0px;
			z-index: 2000;
			display: none;
			justify-content: center;
			align-items: center;
		}

		.mostrar {
			display: flex;
		}

		.modal {
			background-color: #fff;
			text-align: center;
			width: 60%;
			min-width: 400px;
			height: 300px;
			border: 3px solid #CDC9C9;
			border-radius: 10px;
			font-family: arial;
		}

		@keyframes janela-modal{
			from {
				opacity: 0;
				transform: translate3d(0, -60px, 0);
			}
			to {
				opacity: 1;
				transform: translate3d(0, 0, 0);
			}
		}

		.mostrar .modal{
			animation: janela-modal .3s;
		}

	</style>
</head>
<body>
	<button>Modal</button>

	<div class="modal-container" id="modal-container">
		<div class="modal">
			<h3>um titulo qualquer</h3>
			<div>
				<p>um texto qualquer</p>
			</div>
		</div>
	</div>
	<p>teste</p>

	<script>
		function iniciaModal(modalId) {
			const modal = document.getElementById('modalId');
			console.log(modal);
			modal.classList.add('mostrar');
		}

		iniciaModal('modal-container');
	</script>
</body>
</html>