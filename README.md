PAGINATE HELPER FUNCTION
========================

![alt text](logo.png)
                                                                                                                                                
WHAT IS IT?

Function that helps you handle pagination.

HOW TO USE?

paginateHelper($itemNumber, $perPage, $currentPage, $visiblePages=8)    

$itemNumber - number of all items in db  
$perPage - items on page    
$currentPage - on what page we are currently    
$visiblePages - number of visible pages in middle    

AND THIS RETURNS?     

An array with this data:   

$arr['itemNumber'] =             $itemNumber;       
$arr['indexlastPageItemEnd'] =   $lastPageItemEnd;      
$arr['indexlastPageItemStart'] = $lastPageItemStart;       
$arr['perPage'] =                $perPage;      
$arr['currentPage'] =            $currentPage;    
$arr['indexOffset'] =            $limitFirst;     //index, SQL LIMIT starts from 0    
$arr['indexRowCount'] =          $perPage;        //index+length    
$arr['numberOfPages'] =          $numberOfPages;    
$arr['visibleStartPage'] =       $groupStart;    
$arr['visibleEndPage'] =         $groupEnd;		  							 
$arr['firstPage'] = 1;              
$arr['lastPage'] =               $numberOfPages;	     
$arr['prevPage'] =               $prevPage;	      
$arr['nextPage'] =               $nextPage;	     
       
HAVE FUN!   
