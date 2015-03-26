#!/usr/bin/python

##generate.py

## Part of the NaviStax program,
##this file is used to generate
##the getMap.php file for the Millenium implementation of the NaviStax feature
##and the modranges.txt file used to build it.
##usage: python generate.py

##requirements: ranges.txt must be in same directory


import csv
import json
import re
import sortDewey

#first run through the ranges files to fill in call numbers so they can be formatted
#the sort function needs 1-3 letters followed by 
with open('ranges.txt', 'rb') as rwcsv, open('modranges.txt', 'wb') as csv_file:
    reader = csv.reader(rwcsv, delimiter='\t')
    modwriter = csv.writer(csv_file, delimiter='\t')

    for row in reader:
        #if it's a range
        if(row[0] == '#'):
            cnBegin = sortDewey.sortDewey(row[3])
            cnEnd = sortDewey.sortDewey(row[4])
            row[3] = cnBegin
            row[4] = cnEnd
            
               
        modwriter.writerow(row)
            
rwcsv.close()


 #define output file - script to choose function based on location
o_f = open("index.php", "w")

#write the beginning of the php file that gets the call number and outputs html
o_f.write("<?php\n\n")
#include html dom for screen scraping
o_f.write('include("simple_html_dom.php");\n')
#include the php sort file
o_f.write('include("sortDewey.php");\n')

o_f.write('class stdObject {\n\tpublic function __construct(array $arguments = array()) {\n')
o_f.write('        if (!empty($arguments)) {\n')
o_f.write('            foreach ($arguments as $property => $argument) {\n')
o_f.write('                $this->{$property} = $argument;\n')
o_f.write('            }\n')
o_f.write('        }\n')
o_f.write('    }\n')

o_f.write('   public function __call($method, $arguments) {\n')
o_f.write('        $arguments = array_merge(array("stdObject" => $this), $arguments); // Note: method argument 0 will always referred to the main class ($this).\n')
o_f.write('        if (isset($this->{$method}) && is_callable($this->{$method})) {\n')
o_f.write('            return call_user_func_array($this->{$method}, $arguments);\n')
o_f.write('        } else {\n')
o_f.write('            throw new Exception("Fatal error: Call to undefined method stdObject::{$method}()");\n')
o_f.write('        }\n')
o_f.write('    }\n')
o_f.write('}\n') 

o_f.write('    $page = $_SERVER[\'HTTP_REFERER\'];\n\t$locations = array();\n\t$callNum = array();\n\t$combined = array();\n')

o_f.write("    //result page that is displayed when user clicks on a link\n\tprint \"<html>\";\n\tprint \"<head>\";\n")

o_f.write("    print \"<style>\";\n\tprint \"p {font: 18px/20px verdana, sans-serif;}\";\n")

o_f.write("    print \".main {margin-left: auto;\n\t\t margin-right:auto;\n\t\twidth: 50%;};\n\tform {border: 0;}\n\timg {margin-top: 15px;}\n\tdiv {border: 0;}\n")

o_f.write("\tdiv#error {margin-left:auto;\n\t\t text-align:center;\n\t\tmargin-right:auto;}\n\t\tdiv#helpText p{margin-left:auto;\n\t\ttext-align:center;\n\t\tmargin-right:auto;}\n}\";")
 
o_f.write("\nprint \"</style>\";\nprint \"<body>\";\n\nprint '<div class=\"main\">';\n")

o_f.write('//define locations array\n')

o_f.write('//declare an object for each location and populate it\n')

o_f.write('function makeLocArray(){\n\tglobal $locArray;')
i = 0
j = 0

#loop through the csv file and write the locations file
with open('modranges.txt', 'rb') as csvfile:

    for row in csv.reader(csvfile, delimiter='\t'):
        #if it's a library
        j += 1
        #print j
        #print row
        if(row[0] == '!'):
            libName = row[1]
            
        #if it's a location
        elif(row[0] == '!!'):
        
            #escape apostrophes with json.dumps
            loc = row[2]
            loc = json.dumps(loc)
            
        #if it's a range
        elif(row[0] == '#'):
            #print (libName + ' ' + loc + ' ' + row[3] + ' ' + row[4] + ' ' + row[5])
            beginCallNum = row[3]
            endCallNum = row[4]
            imageFile = row[5]
            locNote = row[6]
            #print row
            o_f.write('//location ' + loc + ' ' + beginCallNum + ' - ' + endCallNum + '\n')
            o_f.write('\t$locObj' + str(i) + '= new stdObject();\n')
            o_f.write("\t$locObj" + str(i) + "->libName = '" + libName + "';\n")
            #use double quotes for location to accommodate apostrophes
            o_f.write("\t$locObj" + str(i) + "->location = " + loc + ";\n")
            o_f.write("\t$locObj" + str(i) + "->callNumBegin = '" + beginCallNum + "';\n")
            o_f.write("\t$locObj" + str(i) + "->callNumEnd = '" + endCallNum + "';\n")
            o_f.write("\t$locObj" + str(i) + "->imageFile = '" + imageFile + "';\n")
            o_f.write("\t$locObj" + str(i) + "->locNote = '" + locNote + "';\n")
            i = i + 1 #to count the number of objects
            o_f.write('\n\n')

o_f.write('//put all objects in an array \n')

o_f.write('\t$locArray = array(\n')

for j in range(0, i):
    o_f.write('\t\t' + str(j) + ' => $locObj' + str(j) + ',\n')
    
o_f.write('\t\t);\n\n}\n\n')

#write getBooks function
o_f.write('function getBooks($page, $locArray) {\n')
o_f.write('    global $books, $locations, $callNum;\n')
o_f.write('\t$html = new simple_html_dom();\n\t$html->load_file($page);\n')
o_f.write('\t$items = $html->find(\'tr[class=bibItemsEntry]\');\n')
o_f.write('\tforeach($items as $post) {\n')
o_f.write('\t\t# remember comments count as nodes\n')
o_f.write('\t\t$lox1 = $post->children(0)->outertext;\n')
o_f.write('\t\t$lox2 = $post->children(1)->first_child()->outertext;\n')
o_f.write('\t\t$lox1 = preg_replace(\'/&nbsp;/i\', \'\', $lox1);\n')
o_f.write('\t\t$lox2 = preg_replace(\'/&nbsp;/i\', \'\', $lox2);\n')
o_f.write('\t\t$locations[] = array($lox1,$lox2);\n')
o_f.write('\t\t$callNum[] = array($post->children(1)->outertext,\n')
o_f.write('\t\t\t\t\t$post->children(2)->first_child()->outertext);\n\t}\n')

o_f.write('\tforeach($locations as $item) {\n')
o_f.write('\t\t//put the location into the books array\n')
o_f.write('\t\t$books[][0] = $item[0];\n\n\t}\n')

o_f.write('\t$n=0;\n')
o_f.write('\tforeach($callNum as $item) {\n')
o_f.write('\t\t//put the call number into the books array\n')
o_f.write('\t\t$books[$n][1] = $item[0];\n')
o_f.write('\t\t$n++;\n\t}\n')
o_f.write('\t\t//now the items are in an array\n')
o_f.write('\t\t//find the corresponding image\n')
o_f.write('\t\tgetMap($books, $locArray);\n}\n\n')

#write getmapFunction
        
o_f.write('//getMap function\nfunction getMap($items, $locArray) {\n')
o_f.write('\t$i = 0;\n')
o_f.write('\tforeach($items as $item){\n')
o_f.write('\t\t$loc = strip_tags($items[$i][0]);\n')
o_f.write('\t\t$callNum = strip_tags($items[$i][1]);\n')
o_f.write('\t\t$subCall = sortNums(substr($callNum, 6, 20));\n')
o_f.write('\t\t$i++;\n\n')

o_f.write('//begin checking for locations\n')
o_f.write('\t//variable to indicate that a match has been found\n')
o_f.write('\t$foundFlag = 0;\n')
o_f.write('\tforeach ($locArray as $locValue => $cur){\n\n')
o_f.write('\t\t//iterate through each location object and if a match is found, display the map\n')
o_f.write('\t\tif (((strcmp($cur->location, trim($loc)) === 0)) && ($subCall >= $cur->callNumBegin) && ($subCall < $cur->callNumEnd)){\n')
o_f.write("\t\t\tprint '<p>Call number <span style=\"color: #FF6666;\">' . $callNum . '</span> is located in ' . $cur->location . '.</p>';\n")
o_f.write("\t\t\tprint '<img src=\"img/' . $cur->imageFile . '\"/><br />';\n")
o_f.write("\t\t\tprint '<p>' . $cur->locNote . '</p>';\n")
o_f.write('\t\t\t$foundFlag = 1;\n\t\t\tbreak;\n')
o_f.write('\t\t}\n\n')
o_f.write('\t}\n\n')
o_f.write('	//if no match is found, display error message\n')
o_f.write('\t\tif($foundFlag === 0) {\n')
o_f.write("\t\t\tprint '<img src=\"img/ref.gif\"/><p>Could not find ' . $callNum . ' in ' . $loc . ' Please ask a librarian for assistance.</p>';\n")
o_f.write('\t\t}\n\n')
o_f.write('//end location check\n\n')
o_f.write('}\n//end getMap function\n}\n')

o_f.write('makeLocArray();\ngetBooks($page, $locArray);\n\n')
o_f.write('//text to print link to ask a librarian\n')
o_f.write('    print\'<div id="helpText">\';\n')
o_f.write('    print\'<p>Questions? <a href="http://library.pratt.edu/research_assistance/ask-a-librarian/">Ask a Librarian.</a></p>\';\n')
o_f.write('        print\'</div>\';\n //end help link div\n')
o_f.write('    $pageURL = $_SERVER[\'HTTP_REFERER\'];\n')
o_f.write('    /*button to report an error*/\n')
o_f.write('    print\'<div id="error">\';\n')
o_f.write('    print\'<form action="sendError.php" method="POST">\';\n')
o_f.write('    print\'<input type="hidden" name="pageURL" value="\' . $pageURL . \'"/>\';\n')
o_f.write('    	    print\'<input type="submit" value="report an error" />\';\n')          
o_f.write('    		print\'</form>\';')
o_f.write('	print "</div>";\n\tprint "</body>";\n\tprint "</html>";\n')
o_f.write("\n?>")
o_f.close()
