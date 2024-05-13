<?php

namespace EsgiIw\TpDesignPattern\Model;

class MailLoginAlert implements LoginAlertInterface
{
    public function sendAlert(string $username): void
    {
       
        
    }
}
?>

<?php

namespace EsgiIw\TpDesignPattern\Model;

class MailLoginAlertFactory
{
    public function createAlert(): LoginAlertInterface
    {
        return new MailLoginAlert();
    }
}
?>