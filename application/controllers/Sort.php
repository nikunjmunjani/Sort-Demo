<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sort extends CI_Controller {


	/**
     * Load Landing page.
     *
     * @return view
     * @author Nikunj Munjani
     */
	public function index()
	{
		$this->load->view('sort');
	}

	/**
     * Bubble sort.
     *
     * @return output
     * @author Nikunj Munjani
     */
	public function bubble_sort()
	{
		$sort_array=[25,11,96,99,50,35];
	    $count_of_elements = sizeof($sort_array);
	    for($i = 0; $i < $count_of_elements; $i++) 
	    {
	        for ($j = 0; $j < $count_of_elements - $i - 1; $j++) 
	        {
	            if ($sort_array[$j] > $sort_array[$j+1])
	            {
	                $k = $sort_array[$j];
	                $sort_array[$j] = $sort_array[$j+1];
	                $sort_array[$j+1] = $k;
	            }
	            /* for print only*/
	    		$output='';
	            foreach($sort_array as $sort){
	            	$output .= $sort. " , ";
	            }
	            echo trim($output," , ")."<br>";
	        }
	    }
	    /* for print only*/
	    $output='';
        foreach($sort_array as $sort){
        	$output .= $sort. ",";
        }

	    echo "<h4>Final output is : <b>".trim($output,",")."</b><h4>";

	}

	/**
     * Selection sort.
     *
     * @return output
     * @author Nikunj Munjani
     */
	public function selection_sort()
	{
		$sort_array = [12,5,15,90,47,35,75,22];
		$count_of_elements = count($sort_array);
		for($i = 0; $i < $count_of_elements ; $i++)
	    {
	        $low = $i;
	        for($j = $i + 1; $j < $count_of_elements ; $j++)
	        {
	            if ($sort_array[$j] < $sort_array[$low])
	            {
	                $low = $j;
	            }
	        }
	        
	        if ($sort_array[$i] > $sort_array[$low])
	        {
	            $tmp = $sort_array[$i];
	            $sort_array[$i] = $sort_array[$low];
	            $sort_array[$low] = $tmp;
	        }
	        /* for print only*/
	        $output='';
            foreach($sort_array as $sort){
            	$output .= $sort. " , ";
            }
            echo trim($output," , ")."<br>";
	    }

	    /* for print only*/
	    $output='';
        foreach($sort_array as $sort){
        	$output .= $sort. ",";
        }

	    echo "<h4>Final output is : <b>".trim($output,",")."</b><h4>";
	}
}
