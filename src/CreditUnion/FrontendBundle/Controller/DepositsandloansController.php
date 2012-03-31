<?php

namespace CreditUnion\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use CreditUnion\FrontendBundle\Entity\Depositsandloans;
use CreditUnion\FrontendBundle\Form\DepositsandloansType;

/**
 * Depositsandloans controller.
 *
 * @Route("/Depositsandloans")
 */
class DepositsandloansController extends Controller
{
    /**
     * Lists all Depositsandloans entities.
     *
     * @Route("/", name="Depositsandloans")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('CreditUnionFrontendBundle:Depositsandloans')->findAll();

        return array('entities' => $entities);
    }

    /**
     * Finds and displays a Depositsandloans entity.
     *
     * @Route("/{id}/show", name="Depositsandloans_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('CreditUnionFrontendBundle:Depositsandloans')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Depositsandloans entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        );
    }

    /**
     * Displays a form to create a new Depositsandloans entity.
     *
     * @Route("/new", name="Depositsandloans_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Depositsandloans();
        $form   = $this->createForm(new DepositsandloansType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Creates a new Depositsandloans entity.
     *
     * @Route("/create", name="Depositsandloans_create")
     * @Method("post")
     * @Template("CreditUnionFrontendBundle:Depositsandloans:new.html.twig")
     */
    public function createAction()
    {
        $entity  = new Depositsandloans();
        $request = $this->getRequest();
        $form    = $this->createForm(new DepositsandloansType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('Depositsandloans_show', array('id' => $entity->getId())));
            
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing Depositsandloans entity.
     *
     * @Route("/{id}/edit", name="Depositsandloans_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('CreditUnionFrontendBundle:Depositsandloans')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Depositsandloans entity.');
        }

        $editForm = $this->createForm(new DepositsandloansType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Depositsandloans entity.
     *
     * @Route("/{id}/update", name="Depositsandloans_update")
     * @Method("post")
     * @Template("CreditUnionFrontendBundle:Depositsandloans:edit.html.twig")
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('CreditUnionFrontendBundle:Depositsandloans')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Depositsandloans entity.');
        }

        $editForm   = $this->createForm(new DepositsandloansType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('Depositsandloans_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Depositsandloans entity.
     *
     * @Route("/{id}/delete", name="Depositsandloans_delete")
     * @Method("post")
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('CreditUnionFrontendBundle:Depositsandloans')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Depositsandloans entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('Depositsandloans'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
