
 <?php
class FileOwners
{

    public static function groupByOwners($files)
    {
        $final_result = [];
        $owners = [];

        foreach($files as $file => $owner)
            {

               //if(! in_array($owner,$owners))
               //{
                //  array_push($owners,$owner);
                //  $final_result[$owner] = array($file);
               //}
               //else
               //{
                  $final_result[$owner][] = $file;
               //}

            }
        return $final_result;
    }
}

$files = array
(
    "Input.txt" => "Randy",
    "Code.py" => "Stan",
    "Output.txt" => "Randy"
);
var_dump(FileOwners::groupByOwners($files));
