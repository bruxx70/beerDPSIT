<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Service\EjemploServicio;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR, /*ACA AGREGO TODOS LOS PARAMETROS QUE QUIERA, POR EJEMPLO LOS CARGADOS EN LAS VARIABLES*/
        ]);
    }

    /**
     * @Route("/indexService", name="service")
     */
    public function indexService(Request $request)
    {
        // replace this example code with whatever you need

      $nombre = $this->get('EjemploServicio')->holaServicio();
      $resources['nombre'] = $nombre;
      return $this->render('default/indexService.html.twig',$resources);
    }

    /**
    * @Route ("/welcome/{nombre}/ape/{apellido}", name="welcome")
    */
    /* LAS LLAVES INDICAN LOS PARAMETROS QUE VA A RECIBIR*/
    /*SI RECIBO UN ID DE UNA CLASE, ACLARO ANTES DEL PARAMETRO EL NOMBRE DE LA CLASE, Y AUTOMATICAMENTE ME BUSCA EL OBJETO DE LA CLASE CORRESPONDIENTE QUE HAGA MATCH CON ESE ID*/
    public function welcomeAction (Request $request, $nombre, $apellido){
      $welcome= "Bienvenido/a ".$nombre.", ".$apellido;
      return $this->render('default/welcome.html.twig', ['welcome'=> $welcome
      /*ACA AGREGO TODOS LOS PARAMETROS QUE QUIERA, POR EJEMPLO LOS CARGADOS EN LAS VARIABLES*/
      ]);
    }
}
