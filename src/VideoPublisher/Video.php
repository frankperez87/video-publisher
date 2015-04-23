<?php

namespace VideoPublisher;

class Video
{

    private $path;
    private $title;
    private $description;
    private $thumbnail;
    private $tags = [];

    public function setPath($path)
    {
        $this->path = $path;
    }

    public function getPath()
    {
        return $this->path;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setThumbnail($path_thumbnail)
    {
        $this->thumbnail = $path_thumbnail;
    }

    public function getThumbnail()
    {
        return $this->thumbnail;
    }

    public function setTags(array $tags)
    {
        $this->tags = $tags;
    }

    public function getTags()
    {
        return $this->tags;
    }
}
