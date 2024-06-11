<?php

declare(strict_types=1);

namespace Survos\FlickrBundle\Metadata;

interface FlickrUserInterface
{
    public function getFlickrKey(): ?string;
    public function getFlickrSecret(): ?string;
}

