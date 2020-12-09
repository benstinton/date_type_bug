<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/")
 *
 * Class DefaultController
 * @package App\Controller
 */
class DefaultController extends AbstractController
{
    /**
     * @Route("/form", name="form", methods={"GET"})
     * @return Response
     */
    public function formAction()
    {
        $form = $this->createFormBuilder()
            ->add('date', DateType::class, [
                'format' => 'dd-MM-yyyy'
            ])
            ->getForm();

        return $this->render('date_form.html.twig', [
            'form' => $form->createView()
        ]);
    }
}