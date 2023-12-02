<?php
$api = new Api($key_id, $secret);$api->order->create(array
('receipt' => '123', 'amount' => 100, 'currency' => 'INR', 'notes'=> array('key1'=> 'value3','key2'=> 'value2')));

