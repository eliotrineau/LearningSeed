<?php

namespace App\Controller;

use App\Entity\Forum;
use App\Form\ForumType;
use App\Repository\ForumRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/gestion/forum')]
class GestionForumController extends AbstractController
{
    #[Route('/', name: 'app_gestion_forum_index', methods: ['GET'])]
    public function index(ForumRepository $forumRepository): Response
    {
        return $this->render('gestion_forum/index.html.twig', [
            'forums' => $forumRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_gestion_forum_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $forum = new Forum();
        $form = $this->createForm(ForumType::class, $forum);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($forum);
            $entityManager->flush();

            return $this->redirectToRoute('app_gestion_forum_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('gestion_forum/new.html.twig', [
            'forum' => $forum,
            'form' => $form,
        ]);
    }
}
