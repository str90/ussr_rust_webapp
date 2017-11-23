<?php
class item_pack {
  public $item;
  public $item_amount;

  function __construct($in_item, $in_item_amount) {
    $this->item = $in_item;
    $this->item_amount = $in_item_amount;
  }

  function getItem() {
    return $this->item;
  }
  function getItemAmount() {
    return (int)$this->item_amount;
  }
}
 ?>
