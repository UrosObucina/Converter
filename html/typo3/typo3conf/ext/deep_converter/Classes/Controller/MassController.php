<?php
namespace Converter\DeepConverter\Controller;

class MassController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    protected $kilogram;
    protected $ton;
    protected $gram;
    protected $pound;

    public function convertAction()
    {
        return $this->view->render();
    }
    public function countAction()
    {
        $mass = $this->request->getArguments();
        $count =0;
        foreach($mass['mass'] as $key => $value)
        {
            if(trim($value) && $count==0)
            {
                $count++;
                switch ($key)
                {
                    case 'kilogram' :
                        break;
                    case  'gram' :
                        $value=$value*0.001;
                        break;
                    case 'ton' :
                        $value=$value*1000;
                        break;
                    case 'pound' :
                        $value=$value*0.45359237;
                }

                $kilogram=number_format(abs($value),4,".",",");
                $gram=number_format(abs($value*1000),4,".",",");
                $ton=number_format(abs($value*0.001),4,".",",");
                $pound=number_format(abs($value*2.2046),4,".",",");


                $this->view->assign('ton', $ton);
                $this->view->assign('gram',$gram);
                $this->view->assign('pound', $pound);
                $this->view->assign('kilogram',$kilogram);

            }
        }
        return $this->view->render();
    }
}
