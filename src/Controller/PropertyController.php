<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PropertyController extends AbstractController
{
    /**
     * @Route("/property", name="property")
     */
    public function index()
    {
        $property = new Property();
        $property ->settitle(title'Mon premier bien')
            ->setPrice(price 200000)
            ->setRooms(rooms 4)
            ->setBetrooms(3)
            ->setDescription(description 'une petite description')
            ->setSurface(surface 60)
            ->setFloor(floor 4)
            ->setHeat(heat 1)
            ->setCity(city 'Montpellier')
            ->setAddress(address 'rue de demo')
            ->setPostal_code(postal_code '34000')
            

        return $this->render('property/index.html.twig', [
            'controller_name' => 'PropertyController',
        ]);
    }
}
