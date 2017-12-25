<?php
/**
 * Created by PhpStorm.
 * User: fanghanwen
 * Date: 2017/12/25
 * Time: 15:55
 */

class Genapath {
    public static function getAssemblys () {
        function searchDir($path,&$data){
            if(is_dir($path)){
                $dp=dir($path);
                while($file=$dp->read()){
                    if($file!='.'&& $file!='..'){
                        searchDir($path.'/'.$file,$data);
                    }
                }
                $dp->close();
            }
            if(is_file($path)){
                $data[]=$path;
            }
        }
        function getDir($dir){
            $data=[];
            searchDir($dir,$data);
            return $data;
        }

        $paths = [
            'action',
            'dao',
            'entity',
            'service'
        ];

        $list = [];
        foreach ($paths as $path) {
            $rows = getDir($path);
            foreach ($rows as $row) {
                $arr = explode('/', $row);
                $filename = $arr[count($arr) - 1];
                $classname = explode('.', $filename)[0];

                $list[$classname] = $row;
            }
        }

        return $list;
    }
}

$list = Genapath::getAssemblys();

$myfile = fopen("Assembly.php", "w") or die("Unable to open file!");

$str = "<?php\n";
$str .= "   function autoloader($"."class) {\n";
$str .= "       $"."classpaths = [\n";

foreach ($list as $classname => $filename) {
    $str .= "           '$classname' => '$filename',\n";
}

$str .= "       ];\n";
$str .= "       if (!empty($"."classpaths[$"."class])) {\n";
$str .= "           include_once $"."classpaths[$"."class];\n";
$str .= "       }\n";
$str .= "   }\n";
$str .= "   spl_autoload_register('autoloader');\n";
fwrite($myfile, $str);





