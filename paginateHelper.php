<?php

//NOTE THAT SQL LIMIT STARTS AS ARRAY, FROM 0
function paginateHelper($itemNumber, $perPage, $currentPage, $visiblePages=3)
{	
	if (!is_int($itemNumber) || $itemNumber === 0)
	{
		return null;
	}
	
	$perPage = intval($perPage);
	$currentPage = intval($currentPage);
			
	if ($perPage > $itemNumber)
	{
		$perPage = $itemNumber;
	}
	
	if ($perPage < 1)
	{
		$perPage = $itemNumber;
	}
		
	if ($currentPage < 1)
	{
		$currentPage = 1;
	}
			
	$numberOfPages = intval(ceil($itemNumber/$perPage));	
	$limitCurrentPage = $currentPage - 1;
	$limitFirst = $perPage * $limitCurrentPage;
	$lastPageItemEnd = $perPage * $numberOfPages;
	$lastPageItemStart = $lastPageItemEnd - $perPage;			
	$visiblePageRange = [];		
	
	if ($currentPage > $numberOfPages)
	{		
		$currentPage = $numberOfPages;	
		$limitFirst = $lastPageItemStart;
	}		
	
	$groupStart = 1;
	$groupEnd = $visiblePages;
	for ($i=1; $i<$numberOfPages; $i=$i+$visiblePages)
	{			
		if ($currentPage<$i)
		{ 
			if ($i+$visiblePages > $numberOfPages)
			{
				$groupEnd = $i-1;
			}
	
			break;
		}
		$groupStart = $i;
		if (($i+$visiblePages) > $numberOfPages){
			
			$groupEnd = $numberOfPages;		
		}
	}
	
	
	if ($currentPage > 1)
	{
		$prevPage = $currentPage - 1;
	}
	else
	{
		$prevPage = null;
	}
	
	
	if ($currentPage < $numberOfPages)
	{
		$nextPage = $currentPage + 1;
	}
	else
	{
		$nextPage = null;
	}
			
	
	if ($lastPageItemEnd > $itemNumber)
	{
		$lastPageItemEnd = $itemNumber;
	}		
				
					
	if ($lastPageItemEnd > $itemNumber)
	{
		$lastPageItemEnd = $itemNumber;
	}		
					
				
		
	if (($limitFirst + $perPage) > $itemNumber)
	{
		// echo ($limitFirst + $perPage) - $itemNumber + 1;	
		$indexRowCount = ($limitFirst + $perPage) - $itemNumber + 1;
	}	
	else
	{
		$indexRowCount = $perPage;
	}
	
					
	//[indexOffset] => 28
    //[indexRowCount] => 7				
					
	
	$arr = [];
	$arr['itemNumber'] =             $itemNumber;
	$arr['indexlastPageItemEnd'] =   $lastPageItemEnd;
	$arr['indexlastPageItemStart'] = $lastPageItemStart;
	$arr['perPage'] =                $perPage;
	$arr['currentPage'] =            $currentPage;
	$arr['indexOffset'] =            $limitFirst; //index, SQL LIMIT starts from 0
	$arr['indexRowCount'] =          $indexRowCount; //index+length
	$arr['numberOfPages'] =          $numberOfPages;
	$arr['visibleStartPage'] =       $groupStart;
	$arr['visibleEndPage'] =         $groupEnd;	
									 
	$arr['firstPage'] = 1;           
	$arr['lastPage'] = $numberOfPages;	
	$arr['prevPage'] = $prevPage;	
	$arr['nextPage'] = $nextPage;	
			
	return $arr;
	
} 
