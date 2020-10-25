<?php

    /*
     *  Function    : generateSentence()
     *
     *  Description : Generate a sentence listing out all items provided in an array.
     *
     *  Parameters  : (string)               start         - The start of the sentence
     *                (array[string])        items         - The list of items
     *                (string/array[string]) append        - (optional) item types to be appended to each item
     *
     *  Return      : string
     *
     *  Example     : See run.php for input/output examples
     *
     *  Test        : Execute run.php to test your implementation.
     *                (In console, simply run the command 'php run.php')
     *
     */


    function generateSentence($start, $items, $append=[]){
        $sentence = "$start: ";
        for($i=0;$i<count($items) ;$i++){
            $toAppend = "";
            // personally I think nested ternary operators may have mean more readable
            if(is_array($append) ){
              if(isset($append[$i])){
                $toAppend = " $append[$i]";
              }
              else{
                $toAppend = "";
              }
            }
            else{
              $toAppend =  " $append";
            }
            $suffix = ($i < count($items) - 2 ? ", " : " and ");
            $sentence .= $items[$i].$toAppend . ($i < count($items) - 1 ? $suffix : ".");

        }
        return $sentence;
    }
