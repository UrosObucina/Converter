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
                        break;
                    case 'mbar' :
                        $bar=number_format(abs($value*0.001),4,".","'");
                        $mbar=number_format(abs($value),4,".",",");
                        $psi=number_format(abs($value*0.0145),4,".",",");
                        $atm=number_format(abs($value*0.001),4,".","'");
                        $pascal=number_format(abs($value*100),4,".","'");
                        $hpascal=number_format(abs($value),4,".",",");
                        $kpascal=number_format(abs($value*0.1),4,".",",");
                        $mpascal=number_format(abs($value*0.0001),4,".","'");
                        $mmh2o=number_format(abs($value*10.1972),4,".",",");
                        $inchh2o=number_format(abs($value*0.4015),4,".","'");
                        $mmhg=number_format(abs($value*0.7501),4,".","'");
                        $inchhg=number_format(abs($value*0.0295),4,".",",");
                        $mh2o=number_format(abs($value*0.0102),4,".","'");
                        $fth2o=number_format(abs($value*0.0335),4,".",",");
                        break;
                    case 'psi' :
                        $bar=number_format(abs($value*0.0689),4,".","'");
                        $mbar=number_format(abs($value*68.9474),4,".",",");
                        $psi=number_format(abs($value),4,".",",");
                        $atm=number_format(abs($value*0.0680),4,".","'");
                        $pascal=number_format(abs($value*6894.7400),4,".","'");
                        $hpascal=number_format(abs($value*68.9474),4,".",",");
                        $kpascal=number_format(abs($value*8.8947),4,".",",");
                        $mpascal=number_format(abs($value*0.0069),4,".","'");
                        $mmh2o=number_format(abs($value*703.0678),4,".",",");
                        $inchh2o=number_format(abs($value*27.6797),4,".","'");
                        $mmhg=number_format(abs($value*51.7148),4,".","'");
                        $inchhg=number_format(abs($value*2.0360),4,".",",");
                        $mh2o=number_format(abs($value*0.7031),4,".","'");
                        $fth2o=number_format(abs($value*2.3067),4,".",",");
                        break;
                    case 'atm' :
                        $bar=number_format(abs($value*1.0132),4,".","'");
                        $mbar=number_format(abs($value*1013.2500),4,".",",");
                        $psi=number_format(abs($value*14.6960),4,".",",");
                        $atm=number_format(abs($value),4,".","'");
                        $pascal=number_format(abs($value*101325),4,".","'");
                        $hpascal=number_format(abs($value*1013.25),4,".",",");
                        $kpascal=number_format(abs($value*101.325),4,".",",");
                        $mpascal=number_format(abs($value*0.1013),4,".","'");
                        $mmh2o=number_format(abs($value*10332.2745),4,".",",");
                        $inchh2o=number_format(abs($value*406.7807),4,".","'");
                        $mmhg=number_format(abs($value*759.9998),4,".","'");
                        $inchhg=number_format(abs($value*29.9211),4,".",",");
                        $mh2o=number_format(abs($value*10.3321),4,".","'");
                        $fth2o=number_format(abs($value*33.8995),4,".",",");
                        break;
                    case 'pascal' :
                        $bar=number_format(abs($value*0.000001),4,".","'");
                        $mbar=number_format(abs($value*0.01),4,".",",");
                        $psi=number_format(abs($value*0.0001),4,".",",");
                        $atm=number_format(abs($value*0.000001),4,".","'");
                        $pascal=number_format(abs($value),4,".","'");
                        $hpascal=number_format(abs($value*0.01),4,".",",");
                        $kpascal=number_format(abs($value*0.001),4,".",",");
                        $mpascal=number_format(abs($value*0.00001),4,".","'");
                        $mmh2o=number_format(abs($value*0.102),4,".",",");
                        $inchh2o=number_format(abs($value*0.004),4,".","'");
                        $mmhg=number_format(abs($value*0.0075),4,".","'");
                        $inchhg=number_format(abs($value*0.0003),4,".",",");
                        $mh2o=number_format(abs($value*0.0001),4,".","'");
                        $fth2o=number_format(abs($value*0.00033),4,".",",");
                        break;
                    case 'hpascal' :
                        $bar=number_format(abs($value*0.001),4,".","'");
                        $mbar=number_format(abs($value),4,".",",");
                        $psi=number_format(abs($value*0.0145),4,".",",");
                        $atm=number_format(abs($value*0.001),4,".","'");
                        $pascal=number_format(abs($value*100),4,".","'");
                        $hpascal=number_format(abs($value),4,".",",");
                        $kpascal=number_format(abs($value*0.1),4,".",",");
                        $mpascal=number_format(abs($value*0.0001),4,".","'");
                        $mmh2o=number_format(abs($value*10.1971),4,".",",");
                        $inchh2o=number_format(abs($value*0.4015),4,".","'");
                        $mmhg=number_format(abs($value*0.7501),4,".","'");
                        $inchhg=number_format(abs($value*0.0295),4,".",",");
                        $mh2o=number_format(abs($value*0.0102),4,".","'");
                        $fth2o=number_format(abs($value*0.0335),4,".",",");
                        break;
                    case 'kpascal' :
                        $bar=number_format(abs($value*0.01),4,".","'");
                        $mbar=number_format(abs($value*10),4,".",",");
                        $psi=number_format(abs($value*0.145),4,".",",");
                        $atm=number_format(abs($value*0.009869),4,".","'");
                        $pascal=number_format(abs($value*1000),4,".","'");
                        $hpascal=number_format(abs($value*10),4,".",",");
                        $kpascal=number_format(abs($value),4,".",",");
                        $mpascal=number_format(abs($value*0.001),4,".","'");
                        $mmh2o=number_format(abs($value*101.9716),4,".",",");
                        $inchh2o=number_format(abs($value*4.0146),4,".","'");
                        $mmhg=number_format(abs($value*7.5006),4,".","'");
                        $inchhg=number_format(abs($value*0.29529),4,".",",");
                        $mh2o=number_format(abs($value*0.10197),4,".","'");
                        $fth2o=number_format(abs($value*0.3345),4,".",",");
                        break;
                    case 'mpascal' :
                        $bar=number_format(abs($value*10),4,".","'");
                        $mbar=number_format(abs($value*10000),4,".",",");
                        $psi=number_format(abs($value*145.0381),4,".",",");
                        $atm=number_format(abs($value*9869),4,".","'");
                        $pascal=number_format(abs($value*1000000),4,".","'");
                        $hpascal=number_format(abs($value*10000),4,".",",");
                        $kpascal=number_format(abs($value*1000),4,".",",");
                        $mpascal=number_format(abs($value),4,".","'");
                        $mmh2o=number_format(abs($value*101971.6213),4,".",",");
                        $inchh2o=number_format(abs($value*4014.6132),4,".","'");
                        $mmhg=number_format(abs($value*7500.6151),4,".","'");
                        $inchhg=number_format(abs($value*295.299),4,".",",");
                        $mh2o=number_format(abs($value*101.970),4,".","'");
                        $fth2o=number_format(abs($value*334.562),4,".",",");
                        break;
                    case 'mmh2o' :
                        $bar=number_format(abs($value*0.0001),4,".","'");
                        $mbar=number_format(abs($value*0.0981),4,".",",");
                        $psi=number_format(abs($value*0.0014),4,".",",");
                        $atm=number_format(abs($value*0.0001),4,".","'");
                        $pascal=number_format(abs($value*9.8066),4,".","'");
                        $hpascal=number_format(abs($value*0.0981),4,".",",");
                        $kpascal=number_format(abs($value*0.0098),4,".",",");
                        $mpascal=number_format(abs($value*0.0000098),4,".","'");
                        $mmh2o=number_format(abs($value),4,".",",");
                        $inchh2o=number_format(abs($value*0.0394),4,".","'");
                        $mmhg=number_format(abs($value*0.0736),4,".","'");
                        $inchhg=number_format(abs($value*0.0029),4,".",",");
                        $mh2o=number_format(abs($value*0.0010),4,".","'");
                        $fth2o=number_format(abs($value*0.0033),4,".",",");
                        break;
                    case 'inchh2o' :
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
                        break;
                    case  'mmhg' :
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
                        break;
                    case 'inchhg' :
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
                        break;
                    case 'mh2o' :
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
                        break;
                    case 'fth2o' :
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
                        break;
                    default : echo 'default';
                        break;
                }
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
