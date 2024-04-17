<?php

namespace App\Controller;

use App\Repository\RoomRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class RoomController extends AbstractController
{
    /**
     * @Route("/room", name="room_index")
     */
    public function index()
    {
        return $this->render('room/index.html.twig');
    }

    /**
     * @Route("/room/{id}", name="room_details")
     */
    public function details($id)
    {
        return $this->render('room/details.html.twig', ['id' => $id]);
    }
}
