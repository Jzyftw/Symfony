<?php

namespace sil01\VitrineBundle\Controller;

use sil01\VitrineBundle\Entity\Patate;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Patate controller.
 *
 */
class PatateController extends Controller
{
    /**
     * Lists all patate entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $patates = $em->getRepository('sil01VitrineBundle:Patate')->findAll();
        
        return $this->render('sil01VitrineBundle:patate:index.html.twig', array(
            'patates' => $patates,
        ));
    }

    /**
     * Creates a new patate entity.
     *
     */
    public function newAction(Request $request)
    {
        $patate = new Patate();
        $form = $this->createForm('sil01\VitrineBundle\Form\PatateType', $patate);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($patate);
            $em->flush($patate);

            return $this->redirectToRoute('patate_show', array('id' => $patate->getId()));
        }

        return $this->render('sil01VitrineBundle:patate:new.html.twig', array(
            'patate' => $patate,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a patate entity.
     *
     */
    public function showAction(Patate $patate)
    {
        $deleteForm = $this->createDeleteForm($patate);

        return $this->render('sil01VitrineBundle:patate:show.html.twig', array(
            'patate' => $patate,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing patate entity.
     *
     */
    public function editAction(Request $request, Patate $patate)
    {
        $deleteForm = $this->createDeleteForm($patate);
        $editForm = $this->createForm('sil01\VitrineBundle\Form\PatateType', $patate);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('patate_edit', array('id' => $patate->getId()));
        }

        return $this->render('sil01VitrineBundle:patate:edit.html.twig', array(
            'patate' => $patate,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a patate entity.
     *
     */
    public function deleteAction(Request $request, Patate $patate)
    {
        $form = $this->createDeleteForm($patate);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($patate);
            $em->flush($patate);
        }

        return $this->redirectToRoute('patate_index');
    }

    /**
     * Creates a form to delete a patate entity.
     *
     * @param Patate $patate The patate entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Patate $patate)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('patate_delete', array('id' => $patate->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
