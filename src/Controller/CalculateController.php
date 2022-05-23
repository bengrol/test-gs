<?php

namespace App\Controller;

use App\Dto\CalculateDTO;
use App\Entity\ResultEntity;
use App\Form\CalculateType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CalculateController extends AbstractController
{
    #[Route('/calculate', name: 'app_test')]
    public function index(ManagerRegistry $doctrine, Request $request): Response
    {

        $rs = new CalculateDTO();
        $form = $this->createForm(CalculateType::class,  $rs);

//        $rs->setAmout(7);
//        $em = $doctrine->getManager();
//        $em->persist($rs);
//        $em->flush();
//
//        $allRs  = $doctrine->getRepository(ResultEntity::class)->findAll();


        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $data = $form->getData();
            var_dump($data);
        }

        return $this->renderForm('calculate/index.html.twig', [
            'form' => $form,
        ]);
    }
}
