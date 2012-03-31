<?php

namespace CreditUnion\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use CreditUnion\FrontendBundle\Entity\Creditunions;
use CreditUnion\FrontendBundle\Form\CreditunionsType;

/**
 * Creditunions controller.
 *
 * @Route("/Creditunions")
 */
class CreditunionsController extends Controller
{
    /**
     * Lists all Creditunions entities.
     *
     * @Route("/", name="Creditunions")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('CreditUnionFrontendBundle:Creditunions')->findAll();

        return array('entities' => $entities);
    }

    /**
     * Finds and displays a Creditunions entity.
     *
     * @Route("/{id}/show", name="Creditunions_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('CreditUnionFrontendBundle:Creditunions')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Creditunions entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        );
    }

    /**
     * Displays a form to create a new Creditunions entity.
     *
     * @Route("/new", name="Creditunions_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Creditunions();
        $form   = $this->createForm(new CreditunionsType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Creates a new Creditunions entity.
     *
     * @Route("/create", name="Creditunions_create")
     * @Method("post")
     * @Template("CreditUnionFrontendBundle:Creditunions:new.html.twig")
     */
    public function createAction()
    {
        $entity  = new Creditunions();
        $request = $this->getRequest();
        $form    = $this->createForm(new CreditunionsType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('Creditunions_show', array('id' => $entity->getId())));
            
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing Creditunions entity.
     *
     * @Route("/{id}/edit", name="Creditunions_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('CreditUnionFrontendBundle:Creditunions')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Creditunions entity.');
        }

        $editForm = $this->createForm(new CreditunionsType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Creditunions entity.
     *
     * @Route("/{id}/update", name="Creditunions_update")
     * @Method("post")
     * @Template("CreditUnionFrontendBundle:Creditunions:edit.html.twig")
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('CreditUnionFrontendBundle:Creditunions')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Creditunions entity.');
        }

        $editForm   = $this->createForm(new CreditunionsType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('Creditunions_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Creditunions entity.
     *
     * @Route("/{id}/delete", name="Creditunions_delete")
     * @Method("post")
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('CreditUnionFrontendBundle:Creditunions')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Creditunions entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('Creditunions'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
