<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $output = array('hello' => 'world!');
        $response = new JsonResponse($output);
        return $response;

    }


    // function to return all data with potentially harzardous asteroids
    public function neoHazardousAction ()
    {
        $conn = $this->getDoctrine()->getConnection();
        $stmt = $conn->prepare('select * from neo where is_hazardous = 1; ');

        $stmt->execute();
        $results = $stmt->fetchAll();

        $response = new JsonResponse($results);
        return $response;

    }

    public function neoFastestAction(Request $request)
    {
        $hazardous = $request->query->get('hazardous');

        if (isset($hazardous) && $hazardous == 'true'){

            $valueHazardous = 1;
        }
        else{
            $valueHazardous = 0;
        }

        $data = $this->queryInDbFastestAndroid($valueHazardous);

        $response = new JsonResponse($data);

        return $response;
    }


    public function queryInDbFastestAndroid($valueHazardous)
    {

        $em = $this->getDoctrine()->getManager(); // ...or getEntityManager() prior to Symfony 2.1
        $connection = $em->getConnection();
        $statement = $connection->prepare("SELECT * FROM neo where is_hazardous = :is_hazardous order by speed DESC ");
        $statement->bindValue('is_hazardous', $valueHazardous);
        $statement->execute();
        $results = $statement->fetchAll();

        return $results[0];

    }


    public function neoBestYearAction(Request $request){


        $hazardous = $request->query->get('hazardous');

        if (isset($hazardous) && $hazardous == 'true'){

            $valueHazardous = 1;
        }
        else{
            $valueHazardous = 0;
        }

        $data = $this->queryBestYear($valueHazardous);

        //dump($data);

        if (isset($data[0])){

            $response = new JsonResponse($data);
            return $response;
        }
        else
        {
            return $this->errorGeneral();

        }

    }

    public function neoBestMonthAction(Request $request){


        $hazardous = $request->query->get('hazardous');

        if (isset($hazardous) && $hazardous == 'true'){

            $valueHazardous = 1;
        }
        else{
            $valueHazardous = 0;
        }

        $data = $this->queryBestMonth($valueHazardous);

        //dump($data);

        if (isset($data[0])){

            $response = new JsonResponse($data);
            return $response;
        }
        else
        {
            return $this->errorGeneral();

        }

    }



    private function queryBestYear($valueHazardous){

        $query = "SELECT COUNT(id) as count_neo, YEAR(neo.date_value) as best_year
        FROM neo where is_hazardous = :is_hazardous
        GROUP BY YEAR(neo.date_value) order by count_neo DESC limit 1";


        $em = $this->getDoctrine()->getManager(); // ...or getEntityManager() prior to Symfony 2.1
        $connection = $em->getConnection();
        $statement = $connection->prepare($query);
        $statement->bindValue('is_hazardous', $valueHazardous);
        $statement->execute();
        $results = $statement->fetchAll();
        return $results;

    }


    private function queryBestMonth($valueHazardous){

        $query = "SELECT COUNT(id) as count_neo, MONTH(neo.date_value) as best_month ,  MONTHNAME(STR_TO_DATE(MONTH(neo.date_value), '%m'))    as name_month
        FROM neo where is_hazardous = :is_hazardous
        GROUP BY MONTH(neo.date_value) order by count_neo DESC limit 1";


        $em = $this->getDoctrine()->getManager(); // ...or getEntityManager() prior to Symfony 2.1
        $connection = $em->getConnection();
        $statement = $connection->prepare($query);
        $statement->bindValue('is_hazardous', $valueHazardous);
        $statement->execute();
        $results = $statement->fetchAll();
        return $results;

    }

    public function errorGeneral()
    {

        $output = array('errors' => array('message' => 'no value'));

        $response = new JsonResponse($output);
        return $response;
    }

    
}
