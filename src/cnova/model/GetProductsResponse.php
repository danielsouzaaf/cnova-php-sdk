<?php


namespace cnova\model;

use \ArrayAccess;

class GetProductsResponse implements ArrayAccess {
  static $swaggerTypes = array(
      'skus' => 'array[ProductResponseItem]',
      'metadata' => 'array[MetadataEntry]'
  );

  static $attributeMap = array(
      'skus' => 'skus',
      'metadata' => 'metadata'
  );

  
  public $skus; /* array[ProductResponseItem] */
  /**
  * Dados adicionais da consulta
  */
  public $metadata; /* array[MetadataEntry] */

  public function __construct(array $data = null) {
    $this->skus = $data["skus"];
    $this->metadata = $data["metadata"];
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
