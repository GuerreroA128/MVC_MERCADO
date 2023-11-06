<?php
class cliente
{
	private $cliente;
	private $dbh;

	public function __construct()
	{
		$this->cliente = array();
		$this->dbh = new PDO('mysql:host=localhost;dbname=bd_mercado', "root", "");
	}

	private function set_names()
	{
		return $this->dbh->query("SET NAMES 'utf8'");
	}

	public function lista_clientes()
	{
		self::set_names();
		$sql="select * from tbl_cliente";
		foreach ($this->dbh->query($sql) as $res)
		{
			$this->cliente[]=$res;
		}
		return $this->cliente;
		$this->dbh=null;
	}
}
?>