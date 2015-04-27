<?php

namespace VideoPublisher;

use VideoPublisher\Services\PublishableInterface;

class Publish
{

    private $service;

    public function __construct(PublishableInterface $service)
    {
        $this->service = $service;
    }

    public static function setPublisher(PublishableInterface $service)
    {
        return new static($service);
    }

    public function publish(Video $video)
    {
        $this->service->video($video);
        return $this->service->publish();
    }
}
