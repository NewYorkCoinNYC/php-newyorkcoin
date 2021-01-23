<?php

/**
 * Example usage of an RPC with newyorkcoin.
 * PSR #0-4 Compliant.
 * @author Positivism
 */

// Composer Autoloader ( PSR-4 )
require_once 'vendor/autoload.php';

// Demo RPC configuration
$config = array(
    'user' => 'nycrpcuser',
    'pass' => 'rpcpassword',
    'host' => '127.0.0.1',
    'port' => '18823' );

// Initiate connection
newyorkcoin = new newyorkcoin\RPC(
    sprintf('http://%s:%s@%s:%s/',
        $config['user'],
        $config['pass'],
        $config['host'],
        $config['port']
    )
);

// Set name of the account.
$account['name'] = 'Positivism';

// Generate a new newyorkcoin address.
newyorkcoin->getnewaddress($account['name']);

// Get account addresses
$account['addresses'] = newyorkcoin->getaddressesbyaccount($account['name']);

// Get account balance.
$account['balance'] = newyorkcoin->getbalance($account['name']);

echo 'NewYorkCoin Account Name: '.$account['name'].'<br />';
echo 'NewYorkCoin Account Balance: '.$account['balance'].'<br />';
echo 'NewYorkCoin Account Addresses: <br /><br />';
foreach ($account['addresses'] as $key => $address) {
    echo 'Address #'.$key.': '.$address.'<br />';
}
