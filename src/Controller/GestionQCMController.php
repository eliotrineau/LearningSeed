<?php
// src/Controller/GestionQCMController.php

namespace App\Controller;

use App\Entity\QCM;
use App\Form\QCMType;
use App\Repository\QCMRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

#[Route('/gestion/q/c/m')]
class GestionQCMController extends AbstractController
{
    private SerializerInterface $serializer;

    public function __construct(SerializerInterface $serializer)
    {
        $this->serializer = $serializer;
    }

    #[Route('/{id}/save-xml', name: 'app_gestion_q_c_m_save_xml', methods: ['GET'])]
    public function saveXML(QCM $qCM, EntityManagerInterface $entityManager): Response
    {
        $xmlContent = $this->serializer->serialize($qCM, 'xml');
        $qCM->setStockageXML($xmlContent);
        $entityManager->flush();

        $this->addFlash('success', 'QCM enregistré sous le format XML.');

        return $this->redirectToRoute('app_gestion_q_c_m_index');
    }

    #[Route('/', name: 'app_gestion_q_c_m_index', methods: ['GET'])]
    public function index(QCMRepository $qCMRepository): Response
    {
        return $this->render('gestion_qcm/index.html.twig', [
            'q_c_ms' => $qCMRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_gestion_q_c_m_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $qCM = new QCM();
        $form = $this->createForm(QCMType::class, $qCM);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($qCM);
            $entityManager->flush();

            return $this->redirectToRoute('app_gestion_q_c_m_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('gestion_qcm/new.html.twig', [
            'q_c_m' => $qCM,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_gestion_q_c_m_show', methods: ['GET'])]
    public function show(QCM $qCM): Response
    {
        return $this->render('gestion_qcm/show.html.twig', [
            'q_c_m' => $qCM,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_gestion_q_c_m_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, QCM $qCM, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(QCMType::class, $qCM);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_gestion_q_c_m_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('gestion_qcm/edit.html.twig', [
            'q_c_m' => $qCM,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_gestion_q_c_m_delete', methods: ['POST'])]
    public function delete(Request $request, QCM $qCM, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$qCM->getId(), $request->getPayload()->get('_token'))) {
            $entityManager->remove($qCM);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_gestion_q_c_m_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{id}/play', name: 'app_gestion_q_c_m_play', methods: ['GET', 'POST'])]
    public function play(Request $request, QCM $qCM, EntityManagerInterface $entityManager): Response
    {
        $correctAnswer1 = $qCM->getCorrectAnswer1();
        $correctAnswer2 = $qCM->getCorrectAnswer2();
        $correctAnswer3 = $qCM->getCorrectAnswer3();
        $correctAnswer4 = $qCM->getCorrectAnswer4();
        $correctAnswer5 = $qCM->getCorrectAnswer5();
    
        $score = 0;
    
        if ($request->isMethod('POST')) {
            $answer1 = $request->get('answer1');
            $answer2 = $request->get('answer2');
            $answer3 = $request->get('answer3');
            $answer4 = $request->get('answer4');
            $answer5 = $request->get('answer5');
    
            if ($answer1 === $correctAnswer1) {
                $score++;
            }
    
            if ($answer2 === $correctAnswer2) {
                $score++;
            }
    
            if ($answer3 === $correctAnswer3) {
                $score++;
            }
    
            if ($answer4 === $correctAnswer4) {
                $score++;
            }
    
            if ($answer5 === $correctAnswer5) {
                $score++;
            }
    
            $qCM->setScore($score);

            $entityManager->persist($qCM);
            $entityManager->flush();
            
            return $this->redirectToRoute('app_gestion_q_c_m_score', [
                'id' => $qCM->getId(),
                'score' => $score,
            ]);
        }
        


        return $this->render('gestion_qcm/play.html.twig', [
            'q_c_m' => $qCM,
            'score' => $score,
        ]);
    }

    #[Route('/{id}/score', name: 'app_gestion_q_c_m_score', methods: ['GET'])]
    public function score(QCM $qCM): Response
    {
        $score = $qCM->getScore();
    
        if (null === $score) {
            echo "Pas encore joué";
        }
    
        return $this->render('gestion_qcm/score.html.twig', [
            'q_c_m' => $qCM,
            'score' => $score,
        ]);
    }

}
