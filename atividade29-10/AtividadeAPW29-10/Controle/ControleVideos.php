<?php
require_once '../Modelo/ClassVideos.php';
require_once '../Modelo/DAO/ClassVideosDAO.php';

$id =@$_POST['idex'];
$nome = @$_POST['nome'];
$link = @$_POST['link'];
$embed = @$_POST['embed'];
$acao =$_GET['ACAO'];


$novoVideo = new ClassVideos();
$novoVideo->setId($id);
$novoVideo->setNome($nome);
$novoVideo->setLink($link);
$novoVideo->setEmbed($embed);

$classVideosDAO = new ClassVideosDAO();

switch ($acao) {
	case "cadastrarvideo":
        $videos = $classVideosDAO->cadastrar($novoVideo);
	    if($videos >= 1){
            header('Location:../index.php?&MSG= Vídeo adicionado!');
        } else {
            header('Location:../index.php?&MSG= Não foi possivel adicionar esse vídeo!');
        }
        break;
    }