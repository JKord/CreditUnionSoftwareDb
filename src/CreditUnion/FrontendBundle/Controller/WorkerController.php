<?php

namespace CreditUnion\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use CreditUnion\FrontendBundle\Entity\Worker;
use CreditUnion\FrontendBundle\Form\WorkerType;

/**
 * Worker controller.
 *
 * @Route("/Worker")
 */
class WorkerController extends Controller
{
    /**
     * Lists all Worker entities.
     *
     * @Route("/", name="worker")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('CreditUnionFrontendBundle:Worker')->findAll();

        return array('entities' => $entities);
    }

    /**
     * Finds and displays a Worker entity.
     *
     * @Route("/{id}/show", name="worker_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('CreditUnionFrontendBundle:Worker')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Worker entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        );
    }

    /**
     * Displays a form to create a new Worker entity.
     *
     * @Route("/new", name="worker_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Worker();
        $form   = $this->createForm(new WorkerType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Creates a new Worker entity.
     *
     * @Route("/create", name="worker_create")
     * @Method("post")
     * @Template("CreditUnionFrontendBundle:Worker:new.html.twig")
     */
    public function createAction()
    {
        $entity  = new Worker();
        $request = $this->getRequest();
        $form    = $this->createForm(new WorkerType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('worker_show', array('id' => $entity->getId())));
            
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing Worker entity.
     *
     * @Route("/{id}/edit", name="worker_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('CreditUnionFrontendBundle:Worker')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Worker entity.');
        }

        $editForm = $this->createForm(new WorkerType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Worker entity.
     *
     * @Route("/{id}/update", name="worker_update")
     * @Method("post")
     * @Template("CreditUnionFrontendBundle:Worker:edit.html.twig")
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('CreditUnionFrontendBundle:Worker')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Worker entity.');
        }

        $editForm   = $this->createForm(new WorkerType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('worker_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Worker entity.
     *
     * @Route("/{id}/delete", name="worker_delete")
     * @Method("post")
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('CreditUnionFrontendBundle:Worker')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Worker entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('worker'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
