<?php
	class Convertidor
	{
		private $cantidad;
		private $unidad;
		private $resultado;

		function __construct()
		{
			$this->cantidad = 0;
			$this->unidad = 0;
			$this->resultado = 0;
		}

		public function setDatos($cantidad, $unidad)
		{
			$this->cantidad=$cantidad;
			$this->unidad=$unidad;
		}

		public function convCm()
		{
			$this->resultado = $this->cantidad*100;
			return $this->resultado;
		}

		public function convMm()
		{
			$this->resultado = $this->cantidad*1000;
			return $this->resultado;
		}

		public function convKm()
		{
			$this->resultado = $this->cantidad/1000;
			return $this->resultado;
		}
		public function convdc()
		{
			$this->resultado = $this->cantidad*10;
			return $this->resultado;
		}
		public function convml()
		{
			$this->resultado = $this->cantidad*1000;
			return $this->resultado;
		}
		public function convkg()
		{
			$this->resultado = $this->cantidad*1000;
			return $this->resultado;
		}
		public function convkmi()
		{
			$this->resultado = $this->cantidad*10000;
			return $this->resultado;
		}
	}
?>