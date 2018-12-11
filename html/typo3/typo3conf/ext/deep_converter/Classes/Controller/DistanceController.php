<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 10.12.2018
 * Time: 15:54
 */

namespace Converter\DeepConverter\Controller;


class DistanceController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    protected $kilometerStunde;
    protected $kilometerMinute;
    protected $meterMinute;
    protected $knoten;
    protected $meilenStunde;
    protected $meilenMinute;
    protected $fussStunde;
    protected $fussMinute;

    public function convertAction()
    {
        return $this->view->render();
    }

    public function countAction()
    {

        $distance = $this->request->getArguments();
        $count = 0;
        foreach ($distance['distance'] as $key => $value) {
            if (trim($value) && $count == 0) {
                $count++;
                switch ($key) {
                    case 'kilometerStunde' :
                        break;
                    case 'kilometerMinute' :
                        $value = $value * 59.8802;
                        break;
                    case 'meterMinute' :
                        $value = $value * 0.06;
                        break;
                    case 'knoten' :
                        $value = $value * 1.8532;
                        break;
                    case 'meilenStunde' :
                        $value = $value * 1.6093;
                        break;
                    case 'meilenMinute' :
                        $value = $value * 96.1538;
                        break;
                    case 'fussStunde' :
                        $value = $value * 0.0003;
                        break;
                    case 'fussMinute' :
                        $value = $value * 0.0183;
                        break;
                    default :
                        echo 'default';
                        break;
                }
                $kilometerStunde=number_format(abs($value),4,".",",");
                $kilometerMinute=number_format(abs($value*0.0167),4,".",",");
                $meterMinute=number_format(abs($value*16.6656),4,".",",");
                $knoten=number_format(abs($value*0.5396),4,".",",");
                $meilenStunde=number_format(abs($value*0.6214),4,".",",");
                $meilenMinute=number_format(abs($value*0.0104),4,".",",");
                $fussStunde=number_format(abs($value*3280.8399),4,".",",");
                $fussMinute=number_format(abs($value*54.6822),4,".",",");


                $this->view->assign('kilometerStunde', $kilometerStunde);
                $this->view->assign('kilometerMinute',$kilometerMinute);
                $this->view->assign('meterMinute', $meterMinute);
                $this->view->assign('knoten',$knoten);
                $this->view->assign('meilenStunde', $meilenStunde);
                $this->view->assign('meilenMinute',$meilenMinute);
                $this->view->assign('fussStunde', $fussStunde);
                $this->view->assign('fussMinute',$fussMinute);
            }
        }

        return $this->view->render();
    }
}