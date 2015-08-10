<?php

    class TitleCaseGenerator
    {
        function makeTitleCase($input_title)
        {
            $input_array_of_words = explode(" ", $input_title);
            $output_titlecased = array();
            $lowercase_words = array("and", "if", "the", "but", "or", "from", "to", "in", "of", "on");

            foreach ($input_array_of_words as $word) {
                if (in_array($word, $lowercase_words)) {
                array_push($output_titlecased, $word);
            }   else {
                array_push($output_titlecased, ucfirst($word));
            }
        }

            return implode(" ", $output_titlecased);
        }
    }

?>
