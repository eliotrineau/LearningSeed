<?php

namespace App\Controller;

use App\Entity\Cours;
use App\Form\CoursType;
use App\Repository\CoursRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Service\FileUploader;

#[Route('/gestion/cours')]
class GestionCoursController extends AbstractController
{
    #[Route('/', name: 'app_gestion_cours_index', methods: ['GET'])]
    public function index(CoursRepository $coursRepository): Response
    {
        return $this->render('gestion_cours/index.html.twig', [
            'cours' => $coursRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_gestion_cours_new', methods: ['GET', 'POST'])]
    public function new(Request $request, FileUploader $fileUploader ,EntityManagerInterface $entityManager): Response
    {
        $cour = new Cours();
        $form = $this->createForm(CoursType::class, $cour);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $dossierFile = $form->get('dossier')->getData();
            if ($dossierFile) {
                $dossierFileName = $fileUploader->upload($dossierFile);
                $cour->setDossier($dossierFileName);
            }

            $entityManager->persist($cour);
            $entityManager->flush();

            return $this->redirectToRoute('app_gestion_cours_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('gestion_cours/new.html.twig', [
            'cour' => $cour,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_gestion_cours_show', methods: ['GET'])]
    public function show(Cours $cour): Response
    {
        return $this->render('gestion_cours/show.html.twig', [
            'cour' => $cour,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_gestion_cours_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, FileUploader $fileUploader, Cours $cour, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CoursType::class, $cour);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $dossier = $form->get('dossier')->getData();
            if ($dossier) {
                $dossierName = $fileUploader->upload($dossier);
                $cour->setDossier($dossierName);
            }
            $entityManager->flush();

            return $this->redirectToRoute('app_gestion_cours_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('gestion_cours/edit.html.twig', [
            'cour' => $cour,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_gestion_cours_delete', methods: ['POST'])]
    public function delete(Request $request, Cours $cour, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$cour->getId(), $request->getPayload()->get('_token'))) {
            $entityManager->remove($cour);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_gestion_cours_index', [], Response::HTTP_SEE_OTHER);
    }
}
