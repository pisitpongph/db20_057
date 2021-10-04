<?php
    $controllers = array('pages'=>['home','error'],
                        'submarine'=>['index','newSubmarine','addSubmarine','search','updateForm','update','deleteConfirm','delete'],
                        'submarineClass'=>['index','newSubmarineClass','addSubmarineClass','search','updateForm','update','deleteConfirm','delete'],
                        'submarineGeneration'=>['index','newSubmarineGeneration','addSubmarineGeneration','search','updateForm','update','deleteConfirm','delete'],
                        'company'=>['index','newCompany','addCompany','search','updateForm','update','deleteConfirm','delete'],
                        'conclude'=>['index'],
                        'project' =>['index']
                   
                    );
    function call($controller, $action){
        require_once("controllers/".$controller."Controller.php");
        switch($controller){
            case "pages":   $controller = new pagesController();
                            break;
            case "submarine" :  
                            require_once("models/submarineModel.php");
                            require_once("models/submarineGenerationModel.php");
                            require_once("models/submarineStatusModel.php");
                            require_once("models/countryModel.php");
                            $controller = new submarineController();
                            break;
            case "submarineClass" :
                            require_once("models/submarineClassModel.php");
                            $controller = new submarineClassController();
                            break;
            case "submarineGeneration" :
                            require_once("models/submarineClassModel.php");
                            require_once("models/submarineGenerationModel.php");
                            require_once("models/companyModel.php");
                            $controller = new submarineGenerationController();
                            break;
            case  "company" :
                            require_once("models/companyModel.php");
                            require_once("models/countryModel.php");
                            $controller = new companyController();
                            break;
            case "conclude" :
                            require_once("models/conclude1Model.php");
                            require_once("models/conclude2Model.php");
                            $controller = new concludeController();
                            break;
            case "project" :
                            require_once("models/projectModel.php");
                            $controller = new projectController();
                            break;

        }
        $controller->{$action}();
    }

    if(array_key_exists($controller,$controllers)){
        if(in_array($action,$controllers[$controller])){
            call($controller,$action);
        }
        else{
            call('pages','error');
        }
    }
    else{
        call('pages','error');
    }
?>