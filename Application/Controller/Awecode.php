<?php

namespace {

from('Application')
-> import('Controller.Generic');

}

namespace Application\Controller {

class Awecode extends Generic {

    public function DefaultAction ( ) {

        $this->view->addOverlay('hoa://Application/View/Awecode/List.xyl');
        $this->render();

        return;
    }

    public function PraspelAction ( )  {

        $this->view->addOverlay('hoa://Application/View/Awecode/Praspel.xyl');
        $this->render();

        return;
    }

    public function AwecodeAction ( $awecode )  {

        $awecode = ucfirst($awecode);
        $this->view->addOverlay('hoa://Application/View/Awecode/Awecode.xyl');
        $this->view->addOverlay('hoa://Application/View/Awecode/' . $awecode . '.xyl');
        $this->render();

        return;
    }
}

}
