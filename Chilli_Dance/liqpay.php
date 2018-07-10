
$liqpay = new LiqPay($public_key, $private_key);
 $html = $liqpay->cnb_signature(array(
  'amount'         => '1',
  'currency'       => 'USD',
  'description'    => 'description text',
  'order_id'       => 'order_id_1',
  'type'           => 'buy'
 ));
