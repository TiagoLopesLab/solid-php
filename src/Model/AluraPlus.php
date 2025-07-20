<?php

namespace Alura\Solid\Model;

class AluraPlus extends Video
{
    private string $category;

    public function __construct(string $name, string $category)
    {
        parent::__construct($name);
        $this->category = $category;
    }

    public function getUrl(): string
    {
        return str_replace(' ', '-', strtolower($this->category));
    }
}
