<?php
require_once('../vendor/autoload.php');
require_once('../model/macroMakerModel.php');

$module='homepage';
$msg='';
$appendTextArea='';
$api = new \XIVAPI\XIVAPI();
$api->environment->key('575159816be14aea850c3bccc96201d0838c403f1e474b3a99c024e201e011ab');
/*
$action = $api->content->action()->one(127);
$imgpath=$action->IconHD;
$image= '<img src="https://xivapi.com/'.$imgpath.'">';
//var_dump($action);
<?php echo $image; ?>
*/

/*---------------------Gestion macromaker--------------------------*/
if(isset($_POST['macroMaker'])){ //verif l'existence des array?
    $module='macroMaker';
    if(isset($_POST['from'])){
        if(isTheMacroStupid($_POST['fromClass'], $_POST['toClass'])){
            $source=$_POST['fromClass'];
            $destination=$_POST['toClass'];
            $numbers=$_POST['from'];

            foreach($numbers as $number){
                $appendTextArea=$appendTextArea.createMacroFromClassAToClassB($source, $destination, $number).'&#13;&#10;';
            }

        }else{
            $msg="Please, select 2 different classes";
            $appendTextArea='';
        }        
    }else{
        $msg="Please, select which hotbars to copy";
        $appendTextArea='';
    }

			
}

/*---------------------Gestion des views--------------------------*/

if(isset($_GET['homepage'])){
    $module='homepage';
}

if(isset($_GET['macroMaker'])){
    $module='macroMaker';
}

if(isset($_GET['itemDatabase'])){
    $module='itemDatabase';
}
/*--------*/
            
switch ($module) {
    case 'homepage':
            include('../view/start.php');
            include('../view/main_start.php'); 
            include('../view/homepage/homepage.php');
            include('../view/main_end.php');
            include('../view/homepage/footer.php');
            include('../view/end.php');         
            break;
    case 'macroMaker':
            include('../view/start.php');
            include('../view/main_start.php');        
            include('../view/macroMaker/macroMaker.php');
            include('../view/main_end.php');
            include('../view/end.php');        
            break;
    case 'itemDatabase':
            include('../view/start.php');
            include('../view/main_start.php');        
            include('../view/itemDatabase/items.php');
            include('../view/main_end.php');
            include('../view/end.php');        
            break;        
}

                   

/*----------------------------------------------------------------------*/

//var_dump($_SESSION);
//var_dump($module);
//var_dump($api);