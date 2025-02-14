<?php


namespace cnova\model;

use \ArrayAccess;

class PricesUpdatingStatus implements ArrayAccess {
  static $swaggerTypes = array(
      'sku_seller_id' => 'string',
      'status' => 'string',
      'processed_at' => 'DateTime',
      'update_value' => 'double',
      'site_name' => 'string',
      'errors' => 'array[Error]'
  );

  static $attributeMap = array(
      'sku_seller_id' => 'skuSellerId',
      'status' => 'status',
      'processed_at' => 'processedAt',
      'update_value' => 'updateValue',
      'site_name' => 'siteName',
      'errors' => 'errors'
  );

  
  /**
  * SKU do produto do lojista que deverá ser alterado
  */
  public $sku_seller_id; /* string */
  /**
  * Status do pedido
  */
  public $status; /* string */
  /**
  * Data do processamento
  */
  public $processed_at; /* DateTime */
  /**
  * Valor de atualização
  */
  public $update_value; /* double */
  /**
  * Nome do site
  */
  public $site_name; /* string */
  /**
  * Erros do pedido
  */
  public $errors; /* array[Error] */

  public function __construct(array $data = null) {
    $this->sku_seller_id = $data["sku_seller_id"];
    $this->status = $data["status"];
    $this->processed_at = $data["processed_at"];
    $this->update_value = $data["update_value"];
    $this->site_name = $data["site_name"];
    $this->errors = $data["errors"];
  }

  public function offsetExists($offset) {
    return isset($this->$offset);
  }

  public function offsetGet($offset) {
    return $this->$offset;
  }

  public function offsetSet($offset, $value) {
    $this->$offset = $value;
  }

  public function offsetUnset($offset) {
    unset($this->$offset);
  }
}
