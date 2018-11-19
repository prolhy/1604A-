<php>
    use yii;
    use yii\console\controller;
    class UserController extends Controllers
    {
       public function actionCreate()
        {
          global $argv;
          if(!argv[2]||strcasecmp($argv[2],'help')==0){
            echo"Usage:./yii table-schema/create [all|tablename] [filename]\n";
            exit;
          }
         $db=yii::$app->db;
         $allTables=$db->$getSchema()->getTablenames();
        if('all'==$argv[2]){
           $tables=array_diff($allTables,$this->filterTables)
        }
        }
    }


</php>