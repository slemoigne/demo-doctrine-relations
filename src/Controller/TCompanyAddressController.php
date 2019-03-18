<?php

namespace App\Controller;

use App\Entity\TCompanyAddress;
use App\Entity\TCompanyCompany;
use App\Repository\TCompanyAddressRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/t/company/address")
 */
class TCompanyAddressController extends AbstractController
{
    /**
     * @Route("/", name="t_company_address_index", methods={"GET"})
     */
    public function index(TCompanyAddressRepository $tCompanyAddressRepository): Response
    {
        $tCompanyAddresses = $tCompanyAddressRepository->findAll();

        return $this->render('t_company_address/index.html.twig', [
            't_company_addresses' => $tCompanyAddresses,
        ]);
    }

    /**
     * @Route("/delete", name="t_company_address_delete", methods={"GET"})
     */
    public function delete(TCompanyAddressRepository $tCompanyAddressRepository): Response
    {
        $tCompanyAddress = $tCompanyAddressRepository->find(2);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($tCompanyAddress);
        $entityManager->flush();

        return $this->redirectToRoute('t_company_address_index');
    }

}
