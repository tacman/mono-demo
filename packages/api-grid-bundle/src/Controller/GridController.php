<?php

namespace Survos\ApiGrid\Controller;

use Survos\ApiGrid\Service\MeiliService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\Routing\Annotation\Route;

class GridController extends AbstractController
{
    protected $workflowRegistry;

    protected $helper;

    public function __construct() // , private Registry $registry)
    {
//        $this->helper = $helper;
    }

    #[Route('/columns/{entity}', name: 'survos_grid_columns')]
    public function columns(Request $request, string $entity)
    {
        // inspect the entity and colum?
        dd($entity);
        return $this->render("@SurvosWorkflow/index.html.twig", [
            'configs' => $this->helper->getWorkflowConfiguration(),
            'workflowsGroupedByClass' => $workflowsGroupedByClass,
            'workflowsByCode' => $workflowsGroupedByCode,
        ]);
    }

    #[Route('/column/{index}/{fieldCode}', name: 'survos_grid_column')]
    public function column(Request $request, string $index, string $fieldCode)
    {
        // inspect the entity and colum?
        // this gets the facet data from meili, though it could get it from a dedicated Field entity in this bundle
        dd($fieldCode, $index);

        return $this->render("@SurvosWorkflow/index.html.twig", [
            'configs' => $this->helper->getWorkflowConfiguration(),
            'workflowsGroupedByClass' => $workflowsGroupedByClass,
            'workflowsByCode' => $workflowsGroupedByCode,
        ]);
    }



}
