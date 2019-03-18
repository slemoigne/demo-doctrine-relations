<?php

namespace App\Controller;

use App\Entity\TCompanyAddress;
use App\Entity\TCompanyCompany;
use App\Repository\TCompanyCompanyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/t/company/company")
 */
class TCompanyCompanyController extends AbstractController
{
    /**
     * @Route("/", name="t_company_company_index", methods={"GET"})
     */
    public function index(TCompanyCompanyRepository $tCompanyCompanyRepository): Response
    {
        $tCompanyCompanies = $tCompanyCompanyRepository->findAll();

        //die($tCompanyCompanies[0]->getTCompanyAddress());

        return $this->render('t_company_company/index.html.twig', [
            't_company_companies' => $tCompanyCompanies,
        ]);
    }

    /**
     * @Route("/add", name="t_company_company_add", methods={"GET"})
     */
    public function add(): Response
    {
        $tCompanyAddress = new TCompanyAddress();
        $tCompanyAddress->setAddress('200 rue de Test');
        $tCompanyAddress->setZipCode('71000');
        $tCompanyAddress->setCity('Macon');
        $tCompanyAddress->setCountry('France');

        $tCompanyCompany = new TCompanyCompany();
        $tCompanyCompany->setName('Test add ' . time());
        $tCompanyCompany->setTCompanyAddress($tCompanyAddress);

        $entityManager = $this->getDoctrine()->getManager();
        //$entityManager->persist($tCompanyAddress); // Déléguer la persistance à Doctrine en utilisant le système de cascade
        $entityManager->persist($tCompanyCompany);
        $entityManager->flush();

        return $this->redirectToRoute('t_company_company_index');
    }

    /**
     * @Route("/delete", name="t_company_company_delete", methods={"GET"})
     */
    public function delete(TCompanyCompanyRepository $tCompanyCompanyRepository): Response
    {
        $tCompanyCompany = $tCompanyCompanyRepository->find(1);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($tCompanyCompany);
        $entityManager->flush();

        return $this->redirectToRoute('t_company_company_index');
    }

}
