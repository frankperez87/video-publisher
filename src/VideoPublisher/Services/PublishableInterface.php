<?php namespace VideoPublisher\Services;

use VideoPublisher\Video;

interface PublishableInterface {

    public function video(Video $video);

    public function publish();

}