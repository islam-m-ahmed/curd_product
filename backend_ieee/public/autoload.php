<?php
    define("DS",DIRECTORY_SEPARATOR);
    define("ROOT_PATH",dirname(__DIR__).DS);
    define("APP",ROOT_PATH.'app'.DS);
    define("CORE",APP.'Core'.DS);
    define("CONFIG",APP.'Config'.DS);
    define("CONTROLLERS",APP.'Controllers'.DS);
    define("MODELS",APP.'Models'.DS);
    define("VIEWS",APP.'Views'.DS);
    define("LIBS",APP.'libs'.DS);

    define("UPLOADS",ROOT_PATH.'public'.DS.'uploads'.DS);
    require_once(CONFIG.'Config.php');
    require_once(CONFIG.'helper.php');

    $models = [ROOT_PATH,APP,CORE,VIEWS,CONTROLLERS,MODELS,CONFIG,LIBS];
    set_include_path(get_include_path().PATH_SEPARATOR.implode(PATH_SEPARATOR,$models));
    spl_autoload_register('spl_autoload',false);

    
    new App(); 
?>