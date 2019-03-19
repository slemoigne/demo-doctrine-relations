<?php

namespace App\Controller;

use App\Entity\TCompanyCompany;
use App\Entity\TCompanyVehicle;
use App\Form\TCompanyVehicleType;
use App\Repository\TCompanyCompanyRepository;
use App\Repository\TCompanyVehicleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/t/company/vehicle")
 */
class TCompanyVehicleController extends AbstractController
{
    /**
     * @Route("/", name="t_company_vehicle_index", methods={"GET"})
     */
    public function index(TCompanyVehicleRepository $tCompanyVehicleRepository): Response
    {
        $tCompanyVehicles = $tCompanyVehicleRepository->findAll();
        //$tCompanyVehicles = $tCompanyVehicleRepository->findAllWithCompanyCompany();

        return $this->render('t_company_vehicle/index.html.twig', [
            't_company_vehicles' => $tCompanyVehicles,
        ]);
    }

    /**
     * @Route("/add", name="t_company_vehicle_add", methods={"GET"})
     */
    public function add(TCompanyCompanyRepository $tCompanyCompanyRepository): Response
    {
        // Pas besoin de persist cet objet car il est récupérer de la base
        $tCompanyCompany = $tCompanyCompanyRepository->find(2);

        $tCompanyVehicle = new TCompanyVehicle();
        $tCompanyVehicle
            ->setName('vehicle ' . time())
            ->setTCompanyCompany($tCompanyCompany);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($tCompanyVehicle);
        $entityManager->flush();

        return $this->redirectToRoute('t_company_vehicle_index');
    }

}
