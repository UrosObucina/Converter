<?php
namespace Converter\DeepConverter\Controller;

class PressureController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    protected $bar;
    protected $mbar;
    protected $psi;
    protected $atm;
    protected $pascal;
    protected $hpascal;
    protected $kpascal;
    protected $mpascal;
    protected $mmh2o;
    protected $inchh2o;
    protected $mmhg;
    protected $inchhg;
    protected $mh2o;
    protected $fth2o;

    public function convertAction()
    {
        return $this->view->render();
    }
    public function countAction()
    {
        $pressure = $this->request->getArguments();
        $count =0;
        foreach($pressure['pressure'] as $key => $value)
        {
            if(trim($value) && $count==0)
            {
                $count++;
                switch ($key)
                {
                    case 'bar' :
                        break;
                    case 'mbar' :
                        $value=$value*0.001;
                        break;
                    case 'psi' :
                        $value=$value*0.0689;
                        break;
                    case 'atm' :
                        $value=$value*1.0132;
                        break;
                    case 'pascal' :
                        $value=$value*0.000001;
                        break;
                    case 'hpascal' :
                        $value=$value*0.001;
                        break;
                    case 'kpascal' :
                        $value=$value*0.01;
                        break;
                    case 'mpascal' :
                        $value=$value*10;
                        break;
                    case 'mmh2o' :
                        $value=$value*0.0001;
                        break;
                    case 'inchh2o' :
                        $value=$value*0.0025;
                        break;
                    case 'mmhg' :
                        $value=$value*0.0013;
                        break;
                    case 'inchhg' :
                        $value=$value*0.0339;
                        break;
                    case 'mh2o' :
                        $value=$value*0.0981;
                        break;
                    case 'fth2o' :
                        $value=$value*0.0299;
                        break;
                }
                $bar=number_format(abs($value),4,".","'");
                $mbar=number_format(abs($value*1000),4,".",",");
                $psi=number_format(abs($value*14.5038),4,".",",");
                $atm=number_format(abs($value*0.9869),4,".","'");
                $pascal=number_format(abs($value*100000),4,".","'");
                $hpascal=number_format(abs($value*1000),4,".",",");
                $kpascal=number_format(abs($value*100),4,".",",");
                $mpascal=number_format(abs($value*0.1),4,".","'");
                $mmh2o=number_format(abs($value*10197.1621),4,".",",");
                $inchh2o=number_format(abs($value*401.4613),4,".","'");
                $mmhg=number_format(abs($value*750.0615),4,".","'");
                $inchhg=number_format(abs($value*29.5299),4,".",",");
                $mh2o=number_format(abs($value*10.1970),4,".","'");
                $fth2o=number_format(abs($value*33.4562),4,".",",");


                $this->view->assign('bar', $bar);
                $this->view->assign('mbar',$mbar);
                $this->view->assign('psi', $psi);
                $this->view->assign('atm',$atm);
                $this->view->assign('pascal', $pascal);
                $this->view->assign('hpascal',$hpascal);
                $this->view->assign('kpascal', $kpascal);
                $this->view->assign('mpascal',$mpascal);
                $this->view->assign('mmh2o', $mmh2o);
                $this->view->assign('inchh2o',$inchh2o);
                $this->view->assign('mmhg', $mmhg);
                $this->view->assign('inchhg',$inchhg);
                $this->view->assign('mh2o', $mh2o);
                $this->view->assign('fth2o',$fth2o);
            }
        }
        return $this->view->render();
    }
}
