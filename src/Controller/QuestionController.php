<?php

namespace App\Controller;

use App\Entity\Reponse;
use App\Repository\QuestionRepository;
use App\Repository\ReponseRepository;
use App\Repository\ThemeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

class QuestionController extends AbstractController
{
    private QuestionRepository $questionRepository;
    private ThemeRepository $themeRepository;

    /**
     * @param QuestionRepository $questionRepository

     * @param ThemeRepository $themeRepository
     */
    public function __construct(QuestionRepository $questionRepository,  ThemeRepository $themeRepository)
    {
        $this->questionRepository = $questionRepository;
        $this->themeRepository = $themeRepository;
    }



    #[Route('/api/themes', name: 'app_themes', priority: 1)]
    public function themes(SerializerInterface $serializer): Response
    {
        $themes = $this->themeRepository->findAll();
        $themesJSON = $serializer->serialize($themes,'json',['groups' => 'list_themes']);
        return new Response($themesJSON, Response::HTTP_OK, ["content-type" => "application/json"]);
    }



    #[Route('/api/themes/{theme}/{nb_questions}', name: 'app_question')]
    public function questions($theme,$nb_questions, SerializerInterface $serializer): Response
    {
        $themeId = $this->themeRepository->findOneBy(['libelle'=>$theme]);
        if ($themeId <> null){
        $questions_theme=$this->questionRepository->findBy(['theme'=>$themeId]);
       shuffle($questions_theme);

       $questions_array = [];
       if ($nb_questions >= count($questions_theme)) {
           $nb_questions = count($questions_theme);
       }
       for ($i=$nb_questions;$i>=1;$i=$i-1){
            array_push($questions_array,$questions_theme[$i-1]);
        }

        $questions_themeJson = $serializer->serialize( $questions_array,'json',['groups' => 'par_themes']);

        return new Response($questions_themeJson, Response::HTTP_OK, ["content-type" => "application/json"]);
        } else {

            return new Response("Thème introuvable", 404, ["content-type" => "application/json"]);

        }

    }



}
