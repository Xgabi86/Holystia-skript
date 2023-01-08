require_once('Rcon.php');

$host = 'holystia.minesr.com'; // Server host name or IP
$port = 25575;                      // Port rcon is listening on
$password = 'test.test/test'; // rcon.password setting set in server.properties
$timeout = 3;                       // How long to timeout.

use Thedudeguy\Rcon;

$rcon = new Rcon($host, $port, $password, $timeout);

if ($rcon->connect())
{
  $rcon->sendCommand("say Hello World!");
}