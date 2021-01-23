# php-newyorkcoin
A basic PHP library for interacting with the NewYorkCoin Core Daemon


A basic PHP library to talk to a newyorkcoind daemon to get you started in your newyorkcoin project! Proper rpc usage with basic examples given to assist you in your development. For a full list of available rpc commands issue the help command in your newyorkcoind.

## Requirements
Requires Composer https://getcomposer.org/

Requires newyorkcoind to already be installed and running on your local server or reachable by your server.

## Usage:
Create the composer autoload file with `composer dump-autoload`

Example Usage (see [example.php](https://github.com/NewYorkCoinNYC/php-newyorkcoin/example.php) for additional coverage):
```
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
```
