<?php
class ClassVideos
{
    private $id;
    private $nome;
    private $link;
    private $embed;

    function getId()
    {
        return $this->id;
    }

    function getNome()
    {
        return $this->nome;
    }

    function getLink()
    {
        return $this->link;
    }

    function getEmbed()
    {
        return $this->embed;
    }


    function setId($id)
    {
        $this->id = $id;
    }

    function setNome($nome)
    {
        $this->nome = $nome;
    }

    function setLink($link)
    {
        $this->link = $link;
    }

    function setEmbed($embed)
    {
        $this->embed = $embed;
    }
}