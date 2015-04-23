<?php

namespace VideoPublisher;

class Account
{

    private $client_id;
    private $client_secret;

    public function setClientId($client_id)
    {
        $this->client_id = $client_id;
    }

    public function getClientId()
    {
        return $this->client_id;
    }

    public function setClientSecret($client_secret)
    {
        $this->client_secret = $client_secret;
    }

    public function getClientSecret()
    {
        return $this->client_secret;
    }
}
