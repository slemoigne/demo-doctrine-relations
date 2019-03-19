<?php

namespace App\Controller;

use App\Entity\DeviceDevice;
use App\Form\DeviceDeviceType;
use App\Repository\DeviceDeviceRepository;
use App\Repository\TCompanyCompanyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/device/device")
 */
class DeviceDeviceController extends AbstractController
{
    /**
     * @Route("/", name="device_device_index", methods={"GET"})
     */
    public function index(DeviceDeviceRepository $deviceDeviceRepository): Response
    {
        return $this->render('device_device/index.html.twig', [
            'device_devices' => $deviceDeviceRepository->findAll(),
        ]);
    }

    /**
     * @Route("/add", name="device_device_add", methods={"GET"})
     */
    public function add(TCompanyCompanyRepository $tCompanyCompanyRepository): Response
    {
        // Pas besoin de persist cet objet car il est récupérer de la base
        $tCompanyCompany = $tCompanyCompanyRepository->find(2);

        $deviceDevice = new DeviceDevice();
        $deviceDevice
            ->setName('Device ' . time())
            ->addTCompanyCompany($tCompanyCompany);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($deviceDevice);
        $entityManager->flush();

        return $this->redirectToRoute('device_device_index');
    }
}
