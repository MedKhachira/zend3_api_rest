<?php 
namespace Post\Model;

/**
 * 
 */

use Zend\Db\TableGateway\TableGatewayInterface;

class PostTable
{

	private $tableGateway;

	function __construct(TableGatewayInterface $tableGateway){
		$this->tableGateway = $tableGateway;
	}

	public function fetchAll(){
		return $this->tableGateway->select();
	}
}

?>