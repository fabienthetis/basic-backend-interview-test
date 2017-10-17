<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;


class StoreController extends Controller
{


    public function checkIsAValidDate($date){

        if (preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$date)) {
            return true;
        } else {
            return false;
        }
    }
    public function storeDataAction(Request $request)
    {

        $reference_date = $request->query->get('reference_date');

        if ($this->checkIsAValidDate($reference_date)){
            $date = $reference_date;
        }
        else {
            // default date is current date
            $date = date('Y-m-d');
        }

        $startDate = date('Y-m-d',(strtotime ( '-2 day' , strtotime ( $date) ) ));

        $day1 = date('Y-m-d',(strtotime ( '-2 day' , strtotime ( $date) ) ));
        $day2 = date('Y-m-d',(strtotime ( '-1 day' , strtotime ( $date) ) ));
        $day3  =$date;

        $listDate = array(0=> $day1, 1=> $day2, 2 => $day3);

        //dump('start date', $startDate);

        $apiKey = 'N7LkblDsc5aen05FJqBQ8wU4qSdmsftwJagVK7UD';

        $endDate = $date;

        $urlToGetData = 'https://api.nasa.gov/neo/rest/v1/feed?start_date=' . $startDate . '&end_date=' . $endDate . '&detailed=true&api_key=' . $apiKey;

        $method = 'GET';

        $data = $this->callAPI($method, $urlToGetData);

        $data1 = json_decode($data, 1);

        $count = $data1['element_count'];

      //  dump($data1); exit;

        $this->setAllDataInDb($data1, $listDate);

        $result = array('status' => 200, 'message' => 'set of data neo in database done', 'count' => $count);

        $response = new JsonResponse($result);

        return $response;

        //exit;

    }

    public function setAllDataInDb($data, $listDate){

        foreach ($listDate as $key => $value){

            $dataOneDay = $data['near_earth_objects'][$value];

            //dump($dataOneDay);

            $this->dbSaveOnNeoDataForOneDate($dataOneDay, $value);

        }
    }


    public function CallAPI($method, $url, $data = false)
    {
        $curl = curl_init();

        switch ($method) {
            case "POST":
                curl_setopt($curl, CURLOPT_POST, 1);

                if ($data)
                    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                break;
            case "PUT":
                curl_setopt($curl, CURLOPT_PUT, 1);
                break;
            default:
                if ($data)
                    $url = sprintf("%s?%s", $url, http_build_query($data));
        }

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        $result = curl_exec($curl);

        curl_close($curl);

        return $result;
    }

    public function dbSaveOnNeoDataForOneDate($data, $date)
    {

        // before to store the data we remove the entry for the specific date
        $this->cleanElementInDbByDate($date);

        foreach ($data as $key => $item) {

            $dataToStore = array();

            $reference = $item['neo_reference_id'];

            $name = $item['name'];

            $speed = $item['close_approach_data'][0]['relative_velocity']['kilometers_per_second'];

            // 1 means true and 0 means false
            if ($item['is_potentially_hazardous_asteroid']) {

                $is_hazardous = 1;

            } else {
                $is_hazardous = 0;
            }


            $dataToStore['date'] = $date;
            $dataToStore['reference'] = $reference;
            $dataToStore['name'] = $name;
            $dataToStore['speed'] = $speed;
            $dataToStore['is_hazardous'] = $is_hazardous;

            $this->saveInDbElement($dataToStore);

            unset($dataToStore);

        }
    }


    public function cleanElementInDbByDate ($date)
    {
        $conn = $this->getDoctrine()->getConnection();

        $stmt = $conn->prepare('delete from  neo where date_value = :date_value ');

        $stmt->bindValue('date_value', $date);

        $stmt->execute();

    }

    public function saveInDbElement ($dataToStore){

        $date_value = $dataToStore['date'];
        $reference = $dataToStore['reference'];
        $name_value = $dataToStore['name'];
        $speed = $dataToStore['speed'];
        $is_hazardous = $dataToStore['is_hazardous'];

        $conn = $this->getDoctrine()->getConnection();

        $stmt = $conn->prepare('INSERT INTO neo (date_value, reference, name_value, speed, is_hazardous) 
        values(:date_value, :reference, :name_value, :speed, :is_hazardous )');

        $stmt->bindValue('date_value', $date_value);
        $stmt->bindValue('reference', $reference);
        $stmt->bindValue('name_value', $name_value);
        $stmt->bindValue('speed', $speed);
        $stmt->bindValue('is_hazardous', $is_hazardous);


        $stmt->execute();

        //$id = $conn->lastInsertId();

        //dump('id inserted', $id);
    }




}
