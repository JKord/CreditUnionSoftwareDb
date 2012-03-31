<?php

namespace CreditUnion\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use CreditUnion\FrontendBundle\Entity\Pricelist;
use CreditUnion\FrontendBundle\Form\PricelistType;

/**
 * Pricelist controller.
 *
 * @Route("/Price")
 */
class PricelistController extends Controller
{
    /**
     * Lists all Pricelist entities.
     *
     * @Route("/", name="Price")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('CreditUnionFrontendBundle:Pricelist')->findAll();

        return array('entities' => $entities);
    }

    /**
     * Finds and displays a Pricelist entity.
     *
     * @Route("/{id}/show", name="Price_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('CreditUnionFrontendBundle:Pricelist')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Pricelist entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        );
    }

    /**
     * Displays a form to create a new Pricelist entity.
     *
     * @Route("/new", name="Price_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Pricelist();
        $form   = $this->createForm(new PricelistType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Creates a new Pricelist entity.
     *
     * @Route("/create", name="Price_create")
     * @Method("post")
     * @Template("CreditUnionFrontendBundle:Pricelist:new.html.twig")
     */
    public function createAction()
    {
        $entity  = new Pricelist();
        $request = $this->getRequest();
        $form    = $this->createForm(new PricelistType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('Price_show', array('id' => $entity->getId())));
            
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing Pricelist entity.
     *
     * @Route("/{id}/edit", name="Price_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('CreditUnionFrontendBundle:Pricelist')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Pricelist entity.');
        }

        $editForm = $this->createForm(new PricelistType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Pricelist entity.
     *
     * @Route("/{id}/update", name="Price_update")
     * @Method("post")
     * @Template("CreditUnionFrontendBundle:Pricelist:edit.html.twig")
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('CreditUnionFrontendBundle:Pricelist')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Pricelist entity.');
        }

        $editForm   = $this->createForm(new PricelistType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('Price_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Pricelist entity.
     *
     * @Route("/{id}/delete", name="Price_delete")
     * @Method("post")
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('CreditUnionFrontendBundle:Pricelist')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Pricelist entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('Price'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
